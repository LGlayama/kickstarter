




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kickstarter Video</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>application/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>application/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>application/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>application/js/ie-emulation-modes-warning.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $('.popup-player').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
 
            iframe: {
                markup: '<div class="mfp-iframe-scaler ">'+
                        '<div class="mfp-close "></div>'+
                        '<iframe class="mfp-iframe " style="background: #FFFFFF;" frameborder="0" allowfullscreen></iframe>'+
                      '</div>',

                srcAction: 'iframe_src',
                }
        });
    </script>

    <script type="text/javascript"> 
          function feature_video(){
              var con=Math.ceil(Math.random()*10); 
              if (con%3==0)
                $(".demo1").insertAfter(".demo3");
              if (con%3==1)
                $(".demo1").insertAfter(".demo2");  
              if (con%3==2)
                $(".demo2").insertAfter(".demo3");  
          }  
    </script>
	
	<script src="http://d3js.org/d3.v3.min.js"></script>
	
	<script>
		var oldnode = new Array();
		var lenold=0;
	</script>

	<script>

	function choose(){

		var elemp = document.getElementById('li1').parentNode;
		var a;
		for (a = 0; a < lenold; a++) {
			elemp.appendChild(oldnode[a])
		}
		oldnode=[];
		lenold=0;
//		document.getElementById("hPositiveMindset").style.color='steelblue'
//	 	document.getElementById("hDuraion").style.color='steelblue'
//	 	document.getElementById("hInvolvement").style.color='steelblue'
//	 	document.getElementById("hPurchaseIntent").style.color='steelblue'
//	 	document.getElementById("hCreativity").style.color='steelblue'
//	 	document.getElementById("hRelevance").style.color='steelblue'
//	 	document.getElementById("hAVQuality").style.color='steelblue'
//	 	document.getElementById("hAttitude").style.color='steelblue'
//	 	document.getElementById("hComplexity").style.color='steelblue'	
		var x = document.getElementsByClassName("hvalue");
		var i;
		for (i = 0; i < x.length; i++) {
    		x[i].style.color = "steelblue";
		}		
	 	
	 	var arrdata=  document.getElementById("uniqueID").value;
		

	 	if (arrdata == "design"){
	 		document.getElementById('iframe').src="<?php echo base_url();?>application/views/design/demo_d.html";
			var elem1 = document.getElementById('li4');
			oldnode[lenold]=elem1.parentNode.removeChild(elem1);
			lenold++;
			
			
			var elem2 = document.getElementById('li6');
			oldnode[lenold]=elem2.parentNode.removeChild(elem2);
			lenold++;
			
	 	}
		else {if (arrdata == "fashion"){
				document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";
				var elem3 = document.getElementById('li9');
				oldnode[lenold]=elem3.parentNode.removeChild(elem3);
				lenold++;
			}
			
			
			else{
				document.getElementById('iframe').src="<?php echo base_url();?>application/views/technology/demo_t.html";
				var elem4 = document.getElementById('li2');
				oldnode[lenold]=elem4.parentNode.removeChild(elem4);
				lenold++;
				var elem5 = document.getElementById('li6');
				oldnode[lenold]=elem5.parentNode.removeChild(elem5);
				lenold++;
				var elem6 = document.getElementById('li8');
				oldnode[lenold]=elem6.parentNode.removeChild(elem6);
				lenold++;
			}
		}
	 
	 
	 
		return false;
	}

	function highlight(){


		var arrdata=  document.getElementById("uniqueID").value;

		var score=new Array();

		

	 	score[0]=  document.getElementById("PositiveMindset")==null? -1:document.getElementById("PositiveMindset").innerHTML  ;
	 	score[1]=  document.getElementById("Duraion")==null? -1:document.getElementById("Duraion").innerHTML;
	 	score[2]=  document.getElementById("Involvement")==null? -1:document.getElementById("Involvement").innerHTML;
	 	score[3]=  document.getElementById("PurchaseIntent")==null? -1:document.getElementById("PurchaseIntent").innerHTML;
	 	score[4]=  document.getElementById("Creativity")==null? -1:document.getElementById("Creativity").innerHTML;	
	 	score[5]=  document.getElementById("Relevance")==null? -1:document.getElementById("Relevance").innerHTML;
	 	score[6]=  document.getElementById("AVQuality")==null? -1:document.getElementById("AVQuality").innerHTML;
	 	score[7]=  document.getElementById("Attitude")==null? -1:document.getElementById("Attitude").innerHTML;
	 	score[8]=  document.getElementById("Complexity")==null? -1:document.getElementById("Complexity").innerHTML;

		var x = document.getElementsByClassName("hvalue");
		var i;
		for (i = 0; i < x.length; i++) {
    		x[i].style.color = "steelblue";
		}	

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


		if(arrdata=="design"){
			document.getElementById('success').href="<?php echo base_url();?>application/video/design/vid_"+(leafid%70).toString()+".mp4"
			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/design/vid_"+(leafid%71).toString()+".mp4"
		}
		else{
			if(arrdata="fashion"){
			document.getElementById('success').href="<?php echo base_url();?>application/video/fashion/vid_"+(leafid%70).toString()+".mp4"
			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/fashion/vid_"+(leafid%71).toString()+".mp4"				
			}
			else{
			document.getElementById('success').href="<?php echo base_url();?>application/video/technology/vid_"+(leafid%70).toString()+".mp4"
			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/technology/vid_"+(leafid%71).toString()+".mp4"				
			}				
			}
		

	}
		
	function report(period){
		if (period=="") return;
		if (period=="demo1"){
			document.getElementById("R1").value = "5";
			document.getElementById("PositiveMindset").innerHTML="5"
		}
		if (period=="demo2"){
			document.getElementById("R2").value = "5";
			document.getElementById("Duraion").innerHTML="5"
		}
		if (period=="demo3"){
			document.getElementById("R3").value = "5";
			document.getElementById("Involvement").innerHTML="5"
		}
		if (period=="demo4"){
			document.getElementById("R4").value = "5";
			document.getElementById("PurchaseIntent").innerHTML="5"
		}
		if (period=="demo5"){
			document.getElementById("R5").value = "5";
			document.getElementById("Creativity").innerHTML="5"
		}
		if (period=="demo6"){
			document.getElementById("R6").value = "5";
			document.getElementById("Relevance").innerHTML="5"
		}
		if (period=="demo7"){
			document.getElementById("R7").value = "5";
			document.getElementById("AVQuality").innerHTML="5"
		}
		if (period=="demo8"){
			document.getElementById("R8").value = "5";
			document.getElementById("Attitude").innerHTML="5"
		}
		if (period=="demo9"){
			document.getElementById("R9").value = "5";
			document.getElementById("Complexity").innerHTML="5"
		}
		
	}

	</script>
   	

   

  </head>

  <body style="zoom: 0.95;">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">KickStarter Video</a>
        </div>
      </div>
    </nav>


    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4  col-md-3  sidebar">
		<div class="panel panel-default">
		<div class="panel-heading">
        	<i class="fa fa-bell "></i> Category
        </div>		
		<div class="panel-body " >
			<form id="form1" method="post" onsubmit="return choose()"  name="form" >
		  		<label>field</label>
		  		<input type="text" name="field" id="uniqueID" value="" style="width: 150px"> 
		  		<input type="button" value="highlight" onclick="highlight();" style="margin: 10px auto auto 60px">  
			</form>      
        </div>
        </div>
		
		<div class="panel panel-default">
		<div class="panel-heading">
        	<i class="fa fa-bell "></i> Features
        </div>		
		<div class="panel-body " >
          <ul class="nav nav-sidebar list-group">
			<div id="li1" style="margin: 10px;">
            <li><a href="#" id="hPositiveMindset" class="hvalue " onclick="feature_video()">PositiveMindset</a></li>
                <input id= "R1" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue1(this.value)" style="width: 200px;" />
                <span id="PositiveMindset" >0</span>
                <script type="text/javascript">
                function showValue1(newValue)
                {
                  document.getElementById("PositiveMindset").innerHTML=newValue;
                }
                </script>
             </div> 
            <div id="li2" style="margin: 10px;">              
            <li><a href="#" id="hDuraion" class="hvalue" onclick="feature_video()" >Duraion</a></li>
                <input id= "R2" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue2(this.value)" style="width: 200px" />
                <span id="Duraion">0</span>
                <script type="text/javascript">
                function showValue2(newValue)
                {
                  document.getElementById("Duraion").innerHTML=newValue;
                }
                </script> 
            </div>
            <div id="li3" style="margin: 10px;"> 
            <li><a href="#" id="hInvolvement" class="hvalue" onclick="feature_video()" >Involvement</a></li>
                <input id="R3" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue3(this.value)" style="width: 200px" />
                <span id="Involvement">0</span>
                <script type="text/javascript">
                function showValue3(newValue)
                {
                  document.getElementById("Involvement").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li4" style="margin: 10px;">
            <li><a href="#" id="hPurchaseIntent" class="hvalue" onclick="feature_video()" >PurchaseIntent </a></li>
                <input id="R4" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue4(this.value)" style="width: 200px" />
                <span id="PurchaseIntent">0</span>
                <script type="text/javascript">
                function showValue4(newValue)
                {
                  document.getElementById("PurchaseIntent").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li5" style="margin: 10px;">
            <li><a href="#" id="hCreativity" class="hvalue" onclick="feature_video()" >Creativity</a></li>
                <input id="R5" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue5(this.value)" style="width: 200px" />
                <span id="Creativity">0</span>
                <script type="text/javascript">
                function showValue5(newValue)
                {
                  document.getElementById("Creativity").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li6" style="margin: 10px;">
            <li><a href="#" id="hRelevance" class="hvalue" onclick="feature_video()" >Relevance</a></li>
                <input id="R6" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue7(this.value)" style="width: 200px" />
                <span id="Relevance">0</span>
                <script type="text/javascript">
                function showValue7(newValue)
                {
                  document.getElementById("Relevance").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li7" style="margin: 10px;">
            <li><a href="#" id="hAVQuality" class="hvalue" onclick="feature_video()" >AVQuality</a></li>
                <input id="R7" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue8(this.value)" style="width: 200px" />
                <span id="AVQuality">0</span>
                <script type="text/javascript">
                function showValue8(newValue)
                {
                  document.getElementById("AVQuality").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li8" style="margin: 10px;"> 
            <li><a href="#" id="hAttitude" class="hvalue" onclick="feature_video()" >Attitude</a></li>
                <input id="R8" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue9(this.value)" style="width: 200px" />
                <span id="Attitude">0</span>
                <script type="text/javascript">
                function showValue9(newValue)
                {
                  document.getElementById("Attitude").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li9" style="margin: 10px;">
            <li><a href="#" id="hComplexity" class="hvalue" onclick="feature_video()" >Complexity</a></li>
                <input id="R9" type="range" min="0" max="8" value="0" step="0.5" onchange="showValue10(this.value)" style="width: 200px" />
                <span id="Complexity">0</span>
                <script type="text/javascript">
                function showValue10(newValue)
                {
                  document.getElementById("Complexity").innerHTML=newValue;
                }               
                </script>
            </div>  
			<div class="clearfix"></div>
          </ul>
        </div>
        </div>
        <div class="panel panel-default">
		<div class="panel-heading">
        	<i class="fa fa-bell "></i> upload
        </div>		
		<div class="panel-body " >
			<form>
			<select id="select" onchange="report(this.value)">
			<option value="">Upload</option>
			<option value="demo1">demo1</option>
			<option value="demo2">demo2</option>
			<option value="demo3">demo3</option>
			<option value="demo4">demo4</option>
			<option value="demo5">demo5</option>
			<option value="demo6">demo6</option>
			<option value="demo7">demo7</option>
			<option value="demo8">demo8</option>
			<option value="demo9">demo9</option>
			</select>
			</form>          
        </div>
        </div>
        </div>
        
        
        

        <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
          <h2 class="page-header">Tree Map</h2>

          

          