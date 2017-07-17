




		var query= {"statements":[{"statement":"MATCH path = (n)-[r]->(m) RETURN path",
		    "resultDataContents":["graph"]}]};


		//the helper function provided by neo4j documents
		function idIndex(a,id) {
		    for (var i=0;i<a.length;i++) {
		        if (a[i].id == id) return i;}
		    return null;
		}

		var nodes=[], links=[];

		// jQuery ajax call
		var request = $.ajax({
		    type: "POST",
		    url: "http://localhost:7474/db/data/transaction/commit",
		    accepts: { json: "application/json" },
		    dataType: "json",
		    contentType:"application/json",
		    headers:{
				"Authorization": "Basic bmVvNGo6YTEyMjQwMjA1",
			},
		    
		    data: JSON.stringify(query),
		    //now pass a callback to success to do something with the data
		    success: function (data) {
		        // parsing the output of neo4j rest api
		        data.results[0].data.forEach(function (row) {	
		            row.graph.nodes.forEach(function (n) {
		                if (idIndex(nodes,n.id) == null){
		                    nodes.push({id:n.id,label:n.labels[0],title:n.properties.string});
		                    
		                }
		            });
		            links = links.concat( row.graph.relationships.map(function(r) {
		                // the neo4j documents has an error : replace start with source and end with target
		                return {source:r.startNode,target:r.endNode,type:r.type};
		            }));
		           
		        });

		        function sortRule(a,b) {
    				return a.id - b.id;
				}
				nodes=nodes.sort(sortRule)
		        
		        var IdNodeMap = nodes.reduce(function(map, node) {
					map[node.id] = nodes[idIndex(nodes,node.id)];
					return map;
				}, {});

				
				var ParentMap = links.reduce(function(map, link) {
					map[link.target] = link.source;
					return map;
				}, {});



				var treeData = [];

				nodes.forEach(function(node) {
					// add to parent
					var parent = IdNodeMap[ParentMap[node.id]];
					if (parent) {
						// create child array if it doesn't exist
						(parent.children || (parent.children = []))
							// add node to child array
							.push(node);
					} else {
						// parent is null or missing
						treeData.push(node);
					}
				});
				

				
				var margin = {top: 20, right: 120, bottom: 20, left: 120},
					width = 960 - margin.right - margin.left,
					height = 500 - margin.top - margin.bottom;
					
				var i = 0,
					duration = 750,
					root;

				var tree = d3.layout.tree()
					.size([height, width]);

				var diagonal = d3.svg.diagonal()
					.projection(function(d) { return [d.y, d.x]; });

				var svg = d3.select("body").append("svg")
					.attr("width", width + margin.right + margin.left)
					.attr("height", height + margin.top + margin.bottom)
				    .append("g")
					.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

				root = treeData[0];
				root.x0 = height / 2;
				root.y0 = 0;
				  
				update(root);

				d3.select(self.frameElement).style("height", "500px");

				function update(source) {

				  // Compute the new tree layout.
				  var nodes = tree.nodes(root).reverse(),
					  links = tree.links(nodes);

				  // Normalize for fixed-depth.
				  nodes.forEach(function(d) { d.y = d.depth * 180; });
				  
				  // Update the nodes…
				  var node = svg.selectAll("g.node")
					  .data(nodes, function(d) { return d.id || (d.id = ++i); });

				  console.log(nodes)
				  // Enter any new nodes at the parent's previous position.
				  var nodeEnter = node.enter().append("g")
					  .attr("class", "node")
					  .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
                      .attr("id",function(d) { return d.id || (d.id = ++i); })
					  .on("click", click)
				  	  .on("mouseover", Mouseover)
				  	  .on("mouseout", Mouseout);
				  nodeEnter.append("circle")
					  .attr("r", 1e-6)
					  .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

				  nodeEnter.append("text")
					  .attr("x", function(d) { return d.children || d._children ? -13 : 13; })
					  .attr("dy", ".35em")
					  .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
					  .text(function(d) { return d.title; })
					  .style("fill-opacity", 1e-6);

				  // Transition nodes to their new position.
				  var nodeUpdate = node.transition()
					  .duration(duration)
					  .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });

				  nodeUpdate.select("circle")
					  .attr("r", 10)
					  .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });

				  nodeUpdate.select("text")
					  .style("fill-opacity", 1);

				  // Transition exiting nodes to the parent's new position.
				  var nodeExit = node.exit().transition()
					  .duration(duration)
					  .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
					  .remove();

				  nodeExit.select("circle")
					  .attr("r", 1e-6);

				  nodeExit.select("text")
					  .style("fill-opacity", 1e-6);

				  // Update the links…
				  var link = svg.selectAll("path.link")
					  .data(links, function(d) { return d.target.id; });

				  // Enter any new links at the parent's previous position.
				  link.enter().insert("path", "g")
					  .attr("class", "link")
					  .attr("d", function(d) {
						var o = {x: source.x0, y: source.y0};
						return diagonal({source: o, target: o});
					  });

				  // Transition links to their new position.
				  link.transition()
					  .duration(duration)
					  .attr("d", diagonal);

				  // Transition exiting nodes to the parent's new position.
				  link.exit().transition()
					  .duration(duration)
					  .attr("d", function(d) {
						var o = {x: source.x, y: source.y};
						return diagonal({source: o, target: o});
					  })
					  .remove();

				  // Stash the old positions for transition.
				  nodes.forEach(function(d) {
					d.x0 = d.x;
					d.y0 = d.y;
				  });
				}

				// Toggle children on click.
				function Mouseover(d,i) {					
				   var parentLine;
				   parentLine = function(d) {
				     if (d.parent) {
				       parentLine(d.parent);
				       d3.selectAll("g.node").filter(function(x){return x.id==d.parent.id})	    
				      				   .select("text")
	      							   .style("fill", "darkOrange")
									   .style("font", "15px sans-serif");
				     }
				   };
				   parentLine(d);
				}

				function Mouseout(d,i) {					
				   var parentLine;
				   parentLine = function(d) {
				     if (d.parent) {
				       parentLine(d.parent);
				       d3.selectAll("g.node").filter(function(x){return x.id==d.parent.id})	    
				      				   .select("text")
	      							   .style("fill", "black")
									   
				     }
				   };
				   parentLine(d);
				}


				function click(d){			
					  if (d.children) {
						d._children = d.children;
						d.children = null;
					  } else {
						d.children = d._children;
						d._children = null;
					  }
					  update(d);
				}				


			}

		});



