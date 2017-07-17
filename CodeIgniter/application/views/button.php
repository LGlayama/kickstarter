
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

 	var leafid;
 	if (arrdata == "design"){
	 	if(score[0]<=3.3018){
	 		if(score[0]<=2.8849){
	 			if(score[2]<=3.7268)
	 				leafid=49;
	 			else
	 				leafid=50;
	 		}
	 		else
	 			leafid=46	
	 	}
	 	else{
	 		if(score[1]<=3.0306){
	 			if(score[3]<=3.0294){
	 				leafid=51
	 			}
	 			else{
	 				if(score[4]<=4.6167){
	 					leafid=55
	 				}
	 				else{
	 					leafid=56
	 				}
	 			}

	 		}
	 		else{
	 			if(score[0]<=3.9375){
	 				if(score[5]<=5.6333){
	 					leafid=57
	 				}
	 				else{
	 					leafid=58
	 				}
	 			}
	 			else{
	 				if(score[4]<=5.9419){
	 					leafid=59
	 				}
	 				else{
	 					leafid=60
	 				}
	 			}

	 		}
	 	}
	 	
 	}
	else{
	 	if(score[6]<=4.3619){
	 		if(score[7]<=5.625){
	 			if(score[2]<=5.7)
	 				leafid=110
	 			else
	 				leafid=111
	 		}
	 		else{
	 			leafid=107
	 		}
	 	}
		else{
			if(score[0]<=3.9681){
				if(score[8]<=5.725){
					if(score[1]<=2.5128)
						leafid=116			
					else
						leafid=117
				}
				else{
					if(score[9]<=6.2604)
						leafid=118
					else
						leafid=119
				}
			}
			else{
				if(score[4]<=5.45)
					leafid=114
				else
					leafid=115
				
				
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


