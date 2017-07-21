<script src="http://d3js.org/d3.v3.min.js"></script>

<script>

function choose(){
 
	document.getElementById("hPositiveMindset").style.color='steelblue'
 	document.getElementById("hDuraion").style.color='steelblue'
 	document.getElementById("hInvolvement").style.color='steelblue'
 	document.getElementById("hPurchaseIntent").style.color='steelblue'
 	document.getElementById("hCreativity").style.color='steelblue'
 	document.getElementById("hRelevance").style.color='steelblue'
 	document.getElementById("hAVQuality").style.color='steelblue'
 	document.getElementById("hAttitude").style.color='steelblue'
 	document.getElementById("hComplexity").style.color='steelblue'	
 	
 	var arrdata=  document.getElementById("uniqueID").value;

 	if (arrdata == "design"){
 		document.getElementById('iframe').src="<?php echo base_url();?>application/views/design/demo_d.html";
 	}
	else {if (arrdata == "fashion"){
			document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";
		}
		else
			document.getElementById('iframe').src="<?php echo base_url();?>application/views/technology/demo_t.html";
	}
 // document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";
 
 
	return false;
}

function highlight(){


	var arrdata=  document.getElementById("uniqueID").value;

	var score=new Array();

	

 	score[0]=  document.getElementById("PositiveMindset").innerHTML;
 	score[1]=  document.getElementById("Duraion").innerHTML;
 	score[2]=  document.getElementById("Involvement").innerHTML;
 	score[3]=  document.getElementById("PurchaseIntent").innerHTML;
 	score[4]=  document.getElementById("Creativity").innerHTML;	
 	score[5]=  document.getElementById("Relevance").innerHTML;
 	score[6]=  document.getElementById("AVQuality").innerHTML;
 	score[7]=  document.getElementById("Attitude").innerHTML;
 	score[8]=  document.getElementById("Complexity").innerHTML;

 	document.getElementById("hPositiveMindset").style.color='steelblue'
 	document.getElementById("hDuraion").style.color='steelblue'
 	document.getElementById("hInvolvement").style.color='steelblue'
 	document.getElementById("hPurchaseIntent").style.color='steelblue'
 	document.getElementById("hCreativity").style.color='steelblue'
 	document.getElementById("hRelevance").style.color='steelblue'
 	document.getElementById("hAVQuality").style.color='steelblue'
 	document.getElementById("hAttitude").style.color='steelblue'
 	document.getElementById("hComplexity").style.color='steelblue'

 	var leafid;
 	if (arrdata == "design"){
	 	if(score[6]<=3.125){
			document.getElementById("hAVQuality").style.color='orange'
			if(score[1]<=2.25){
				document.getElementById("hDuraion").style.color='orange'
				if(score[0]<=1.1667){
					document.getElementById("hPositiveMindset").style.color='orange'
					leafid=278;
				}
				else{
					document.getElementById("hPositiveMindset").style.color='orange'
					if(score[2]<=5.0){
						document.getElementById("hInvolvement").style.color='orange'
						leafid=334;	
					}
					else{
						document.getElementById("hInvolvement").style.color='orange'
						leafid=335;
					}
				}
			}
			else{
				document.getElementById("hDuraion").style.color='orange'
				if(score[2]<=1.6875){
					document.getElementById("hInvolvement").style.color='orange'
					leafid=280;
				}
				else{
					document.getElementById("hInvolvement").style.color='orange'
					if(score[8]<=1.5){
						document.getElementById("hComplexity").style.color='orange'
						leafid=336;
					}
					else{
						document.getElementById("hComplexity").style.color='orange'
						leafid=337;
					}
				}
				
			}
		}
		else{
			document.getElementById("hAVQuality").style.color='orange'
			if(score[1]<=3.25){
				document.getElementById("hDuraion").style.color='orange'
				if(score[6]<=5.625){
					document.getElementById("hAVQuality").style.color='orange'
					if(score[7]<=3.875){
						document.getElementById("hAttitude").style.color='orange'
						leafid=338;
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						leafid=339;
					}
				}
				else{
					document.getElementById("hAVQuality").style.color='orange'
					if(score[7]<=3.625){
						document.getElementById("hAttitude").style.color='orange'
						leafid=340;
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						leafid=341;
					}					
				}
			}
			else{
				document.getElementById("hDuraion").style.color='orange'
				if(score[4]<=3.75){
					document.getElementById("hCreativity").style.color='orange'
					leafid=332;
				}
				else{
					document.getElementById("hCreativity").style.color='orange'
					leafid=333;
				}
			}
		}
	}
	else if(arrdata == "fashion"){
		if(score[6]<=2.875){
			document.getElementById("hAVQuality").style.color='orange'
			if(score[5]<=1.75){
				document.getElementById("hRelevance").style.color='orange'
				if(score[3]<=1.5){
					document.getElementById("hPurchaseIntent").style.color='orange'
					leafid=349;
				}
				else{
					document.getElementById("hPurchaseIntent").style.color='orange'
					if(score[6]<=2.5){
						document.getElementById("hAVQuality").style.color='orange'
						leafid=357;	
					}
					else{
						document.getElementById("hAVQuality").style.color='orange'
						leafid=358;
					}
				}
			}
			else{
				document.getElementById("hRelevance").style.color='orange'
				if(score[7]<=3.125){
					document.getElementById("hAttitude").style.color='orange'
					if(score[4]<=3.75){
						document.getElementById("hCreativity").style.color='orange'
						leafid=359;
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=360;
					}
				}
				else{
					document.getElementById("hAttitude").style.color='orange'
					if(score[2]<=2.0625){
						document.getElementById("hInvolvement").style.color='orange'
						leafid=361;
					}
					else{
						document.getElementById("hInvolvement").style.color='orange'
						leafid=362;
					}					
				}
			}
		}
		else{
			document.getElementById("hAVQuality").style.color='orange'
			if(score[5]<=5.75){
				document.getElementById("hRelevance").style.color='orange'
					if(score[1]<=3.75){
						document.getElementById("hDuraion").style.color='orange'						
						if(score[2]<=4.0625){
							document.getElementById("hInvolvement").style.color='orange'							
							leafid=363;
						}
						else{
							document.getElementById("hInvolvement").style.color='orange'
							leafid=364;
						}
					}
					else{
						document.getElementById("hDuraion").style.color='orange'						
						if(score[0]<=3.5){
							document.getElementById("hPositiveMindset").style.color='orange'
							leafid=365;
						}
						else{
							document.getElementById("hPositiveMindset").style.color='orange'
							leafid=366;
						}						
					}
				}
			else{
				document.getElementById("hRelevance").style.color='orange'				
					if(score[6]<=5.625){
						document.getElementById("hAVQuality").style.color='orange'
						leafid=355;
					}
					else{
						document.getElementById("hAVQuality").style.color='orange'
						leafid=356;
					}					
				}
		}
	}
	else{
		if(score[6]<=3.875){
			document.getElementById("hAVQuality").style.color='orange'
			if(score[4]<=1.75){
				document.getElementById("hCreativity").style.color='orange'
				if(score[0]<=4.1666){
					document.getElementById("hPositiveMindset").style.color='orange'
					leafid=374;
				}
				else{
					document.getElementById("hPositiveMindset").style.color='orange'
					leafid=375;
				}
			}
			else{
				document.getElementById("hCreativity").style.color='orange'
				if(score[0]<=2.1667){
					document.getElementById("hPositiveMindset").style.color='orange'
					if(score[4]<=3.75){
						document.getElementById("hCreativity").style.color='orange'
						leafid=382;
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=383;
					}
				}
				else{
					document.getElementById("hPositiveMindset").style.color='orange'
					leafid=377;
				}
			}
		}
		
	
		else{
			document.getElementById("hAVQuality").style.color='orange'
			if(score[6]<=6.875){
				document.getElementById("hAVQuality").style.color='orange'
				if(score[0]<=3.5){
					document.getElementById("hPositiveMindset").style.color='orange'
					if(score[2]<=6.6875){
						document.getElementById("hInvolvement").style.color='orange'
						leafid=384;
					}
					else{
						document.getElementById("hInvolvement").style.color='orange'
						leafid=385;
					}
				}
				else{
					document.getElementById("hPositiveMindset").style.color='orange'
					if(score[4]<=4.25){
						document.getElementById("hCreativity").style.color='orange'
						leafid=386;
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=387;
					}										
				}
			}
			else{
				document.getElementById("hAVQuality").style.color='orange'
				if(score[8]<=3.5){
					document.getElementById("hComplexity").style.color='orange'
					leafid=380;
				}
				else{
					document.getElementById("hComplexity").style.color='orange'
					if(score[3]<=6.5){
						document.getElementById("hPurchaseIntent").style.color='orange'
						leafid=388;
					}
					else{
						document.getElementById("hPurchaseIntent").style.color='orange'
						leafid=389;
					}					
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


