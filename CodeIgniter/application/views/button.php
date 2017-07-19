<script src="http://d3js.org/d3.v3.min.js"></script>

<script>

function choose(){
 	
 	
 	var arrdata=  document.getElementById("uniqueID").value;

 	if (arrdata == "design"){document.getElementById('iframe').src="<?php echo base_url();?>application/views/design/demo_d.html";}
	else{document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";}
 // document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";
 
 
	return false;
}

function highlight(){


	var arrdata=  document.getElementById("uniqueID").value;

	var score=new Array();

	

 	score[0]=  document.getElementById("PosMind").innerHTML;
 	score[1]=  document.getElementById("Duraion").innerHTML;
 	score[2]=  document.getElementById("Involvement").innerHTML;
 	score[3]=  document.getElementById("PurInt").innerHTML;
 	score[4]=  document.getElementById("Uniqueness").innerHTML;
 	score[5]=  document.getElementById("RelPurInt").innerHTML;
 	score[6]=  document.getElementById("Relevance").innerHTML;
 	score[7]=  document.getElementById("AVQuality").innerHTML;
 	score[8]=  document.getElementById("Attitude").innerHTML;
 	score[9]=  document.getElementById("Complexity").innerHTML;

 	document.getElementById("hPosMind").style.color='steelblue'
 	document.getElementById("hDuraion").style.color='steelblue'
 	document.getElementById("hInvolvement").style.color='steelblue'
 	document.getElementById("hPurInt").style.color='steelblue'
 	document.getElementById("hUniqueness").style.color='steelblue'
 	document.getElementById("hRelPurInt").style.color='steelblue'
 	document.getElementById("hRelevance").style.color='steelblue'
 	document.getElementById("hAVQuality").style.color='steelblue'
 	document.getElementById("hAttitude").style.color='steelblue'
 	document.getElementById("hComplexity").style.color='steelblue'

 	var leafid;
 	if (arrdata == "design"){
	 	if(score[0]<=3.3018){
			document.getElementById("hPosMind").style.color='orange'		
	 		if(score[0]<=2.8849){
	 			document.getElementById("hPosMind").style.color='orange'
	 			if(score[2]<=3.7268){
	 				document.getElementById("hInvolvement").style.color='orange'
	 				leafid=49;
	 				}	
	 			else{
	 				document.getElementById("hInvolvement").style.color='orange'
	 				leafid=50;
	 			}
	 		}
	 		else{
	 			document.getElementById("hPosMind").style.color='orange'
	 			leafid=46
	 		}	
	 	}
	 	else{
	 		document.getElementById("hPosMind").style.color='orange'
	 		if(score[1]<=3.0306){
	 			document.getElementById("hDuraion").style.color='orange'
	 			if(score[3]<=3.0294){
	 				document.getElementById("hPurInt").style.color='orange'
	 				leafid=51
	 			}
	 			else{
	 				document.getElementById("hPurInt").style.color='orange'
	 				if(score[4]<=4.6167){
	 					document.getElementById("hUniqueness").style.color='orange'
	 					leafid=55
	 				}
	 				else{
	 					document.getElementById("hUniqueness").style.color='orange'
	 					leafid=56
	 				}
	 			}

	 		}
	 		else{
	 			document.getElementById("hDuraion").style.color='orange'
	 			if(score[0]<=3.9375){
	 				document.getElementById("hPosMind").style.color='orange'
	 				if(score[5]<=5.6333){
	 					document.getElementById("hRelPurInt").style.color='orange'
	 					leafid=57
	 				}
	 				else{
	 					document.getElementById("hRelPurInt").style.color='orange'
	 					leafid=58
	 				}
	 			}
	 			else{
	 				document.getElementById("hPosMind").style.color='orange'
	 				if(score[4]<=5.9419){
	 					document.getElementById("hUniqueness").style.color='orange'
	 					leafid=59
	 				}
	 				else{
	 					document.getElementById("hUniqueness").style.color='orange'
	 					leafid=60
	 				}
	 			}

	 		}
	 	}
	 	
 	}
	else{
	 	if(score[6]<=4.3619){
	 		document.getElementById("hRelevance").style.color='orange'
	 		if(score[7]<=5.625){
	 			document.getElementById("hAVQuality").style.color='orange'
	 			if(score[2]<=5.7){
	 				document.getElementById("hInvolvement").style.color='orange'
	 				leafid=110
	 				}
	 			else{
	 				document.getElementById("hInvolvement").style.color='orange'
	 				leafid=111
	 			}
	 		}
	 		else{
	 			document.getElementById("hAVQuality").style.color='orange'
	 			leafid=107
	 		}
	 	}
		else{
			document.getElementById("hRelevance").style.color='orange'
			if(score[0]<=3.9681){
				document.getElementById("hPosMind").style.color='orange'
				if(score[8]<=5.725){
					document.getElementById("hAttitude").style.color='orange'
					if(score[1]<=2.5128){
						document.getElementById("hDuraion").style.color='orange'
						leafid=116
						}			
					else
						document.getElementById("hDuraion").style.color='orange'
						leafid=117
				}
				else{
					document.getElementById("hAttitude").style.color='orange'
					if(score[9]<=6.2604){
						document.getElementById("hComplexity").style.color='orange'
						leafid=118
						}
					else{
						document.getElementById("hComplexity").style.color='orange'
						leafid=119
					}
				}
			}
			else{
				document.getElementById("hPosMind").style.color='orange'
				if(score[4]<=5.45){
					document.getElementById("hUniqueness").style.color='orange'	
					leafid=114
					}
				else{
					document.getElementById("hUniqueness").style.color='orange'	
					leafid=115
				}
				
				
			}			
		}
		
	}

	console.log(leafid);
	var frame = document.getElementById('iframe'); 

	frame.contentWindow.postMessage(leafid, '*'); 


	if (leafid%3==0)
		$(".demo1").insertAfter(".demo3");
	if(leafid%3==1)
		$(".demo1").insertAfter(".demo2");	
	if(leafid%3==2)
		$(".demo2").insertAfter(".demo3");	
}



</script>



<form id="form1" method="post" onsubmit="return choose()"  name="form">
  <label>field</label>
  <input type="text" name="field" id="uniqueID" value="">   
</form>

<input type="button" value="highlight" onclick="highlight();">


<!-- <input id="button1" type="button" value="highlight" onclick="highlight();" /> -->

<!-- <form method="post" action="save" name="form">
  <label>field</label>
  <input type="text" name="field">   
</form> -->


