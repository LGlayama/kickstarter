




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
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
    
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
	
	<script src="http://d3js.org/d3.v3.min.js"></script>
	
	<script>
		var oldnode = new Array();
		var lenold=0;
		var oldsrc=document.getElementById('iframe').src;
		var vnum=0;
		var leafid=-1;
	</script>

	<script>

	function choose(){

		var elemp = document.getElementById('li2').parentNode;
		var a;
		for (a = 0; a < lenold; a++) {
			elemp.appendChild(oldnode[a])
		}
		oldnode=[];
		lenold=0;

		var x = document.getElementsByClassName("hvalue");
		var i;
		for (i = 0; i < x.length; i++) {
    		x[i].style.color = "steelblue";
		}		
	 	
	 	var arrdata=  document.getElementById("uniqueID").value;

	 	if (arrdata == "design"){
			oldsrc=document.getElementById('iframe').src
	 		document.getElementById('iframe').src="<?php echo base_url();?>application/views/design/demo_d.html";
			var elem1 = document.getElementById('li4');
			oldnode[lenold]=elem1.parentNode.removeChild(elem1);
			lenold++;
			
			
			var elem2 = document.getElementById('li6');
			oldnode[lenold]=elem2.parentNode.removeChild(elem2);
			lenold++;
			
	 	}
		else {
			if (arrdata == "fashion"){
				oldsrc=document.getElementById('iframe').src
				document.getElementById('iframe').src="<?php echo base_url();?>application/views/fashion/demo_f.html";
				var elem3 = document.getElementById('li9');
				oldnode[lenold]=elem3.parentNode.removeChild(elem3);
				lenold++;
			}
			
			
			else{
				if(arrdata == "technology"){
					oldsrc=document.getElementById('iframe').src
					document.getElementById('iframe').src="<?php echo base_url();?>application/views/technology/demo_t.html";
					var elem4 = document.getElementById('li3');
					oldnode[lenold]=elem4.parentNode.removeChild(elem4);
					lenold++;
				}
				else{
					oldsrc=document.getElementById('iframe').src
					document.getElementById('iframe').src="<?php echo base_url();?>application/views/hex/demo_h.html";
				}
			}
		}
	 
	 	resetbar();
	 
		return false;
	}

	function highlight(){


		var arrdata=  document.getElementById("uniqueID").value;
		console.log(arrdata)

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


		var trdata=new Array();
		
	 	if (arrdata == "design"){
		 	if(score[6]<=3.125){
				document.getElementById("hAVQuality").style.color='orange'
				if(score[1]<=2.25){
					document.getElementById("hDuraion").style.color='orange'
					if(score[1]<=1.25){
						document.getElementById("hDuraion").style.color='orange'
						leafid=7;
					}
					else{
						document.getElementById("hDuraion").style.color='orange'
						if(score[6]<=1.755){
							document.getElementById("hAVQuality").style.color='orange'
							leafid=15;	
						}
						else{
							document.getElementById("hAVQuality").style.color='orange'
							leafid=16;
						}
					}
				}
				else{
					document.getElementById("hDuraion").style.color='orange'
					if(score[2]<=1.6875){
						document.getElementById("hInvolvement").style.color='orange'
						leafid=9;
					}
					else{
						document.getElementById("hInvolvement").style.color='orange'
						if(score[8]<=1.5){
							document.getElementById("hComplexity").style.color='orange'
							leafid=17;
						}
						else{
							document.getElementById("hComplexity").style.color='orange'
							leafid=18;
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
							leafid=19;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=20;
						}
					}
					else{
						document.getElementById("hAVQuality").style.color='orange'
						if(score[7]<=3.625){
							document.getElementById("hAttitude").style.color='orange'
							leafid=21;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=22;
						}					
					}
				}
				else{
					document.getElementById("hDuraion").style.color='orange'
					if(score[4]<=3.75){
						document.getElementById("hCreativity").style.color='orange'
						leafid=13;
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=14;
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
						leafid=30;
					}
					else{
						document.getElementById("hPurchaseIntent").style.color='orange'
						if(score[2]<=1.5625){
							document.getElementById("hInvolvement").style.color='orange'
							leafid=38;	
						}
						else{
							document.getElementById("hInvolvement").style.color='orange'
							leafid=39;
						}
					}
				}
				else{
					document.getElementById("hRelevance").style.color='orange'
					if(score[7]<=3.125){
						document.getElementById("hAttitude").style.color='orange'
						if(score[4]<=3.75){
							document.getElementById("hCreativity").style.color='orange'
							leafid=40;
						}
						else{
							document.getElementById("hCreativity").style.color='orange'
							leafid=41;
						}
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						if(score[2]<=2.0625){
							document.getElementById("hInvolvement").style.color='orange'
							leafid=42;
						}
						else{
							document.getElementById("hInvolvement").style.color='orange'
							leafid=43;
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
								leafid=44;
							}
							else{
								document.getElementById("hInvolvement").style.color='orange'
								leafid=45;
							}
						}
						else{
							document.getElementById("hDuraion").style.color='orange'						
							if(score[3]<=5.5){
								document.getElementById("hPurchaseIntent").style.color='orange'
								leafid=46;
							}
							else{
								document.getElementById("hPurchaseIntent").style.color='orange'
								leafid=47;
							}						
						}
					}
				else{
					document.getElementById("hRelevance").style.color='orange'				
						if(score[6]<=5.625){
							document.getElementById("hAVQuality").style.color='orange'
							leafid=36;
						}
						else{
							document.getElementById("hAVQuality").style.color='orange'
							leafid=37;
						}					
					}
			}
		}
		else{
			if(score[6]<=3.875){
				document.getElementById("hAVQuality").style.color='orange'
				if(score[4]<=1.75){
					document.getElementById("hCreativity").style.color='orange'
					if(score[7]<=6.375){
						document.getElementById("hAttitude").style.color='orange'
						leafid=55;
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						leafid=56;
					}
				}
				else{
					document.getElementById("hCreativity").style.color='orange'
					if(score[4]<=4.25){
						document.getElementById("hCreativity").style.color='orange'
						if(score[7]<=5.125){
							document.getElementById("hAttitude").style.color='orange'
							leafid=63;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=64;
						}
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=58;
					}
				}
			}
			
		
			else{
				document.getElementById("hAVQuality").style.color='orange'
				if(score[6]<=6.875){
					document.getElementById("hAVQuality").style.color='orange'
					if(score[5]<=3.75){
						document.getElementById("hRelevance").style.color='orange'
						if(score[5]<=1.75){
							document.getElementById("hRelevance").style.color='orange'
							leafid=65;
						}
						else{
							document.getElementById("hRelevance").style.color='orange'
							leafid=66;
						}
					}
					else{
						document.getElementById("hRelevance").style.color='orange'
						if(score[1]<=1.75){
							document.getElementById("hDuraion").style.color='orange'
							leafid=67;
						}
						else{
							document.getElementById("hDuraion").style.color='orange'
							leafid=68;
						}										
					}
				}
				else{
					document.getElementById("hAVQuality").style.color='orange'
					if(score[8]<=3.5){
						document.getElementById("hComplexity").style.color='orange'
						leafid=61;
					}
					else{
						document.getElementById("hComplexity").style.color='orange'
						if(score[3]<=6.5){
							document.getElementById("hPurchaseIntent").style.color='orange'
							leafid=69;
						}
						else{
							document.getElementById("hPurchaseIntent").style.color='orange'
							leafid=70;
						}					
					}
				}
			}
		}


		
		var frame = document.getElementById('iframe');
		
//		trdata[0]=leafid;
//		trdata[1]= parseFloat(score[0]);
//		trdata[2]= parseFloat(score[1]);
//		trdata[3]= parseFloat(score[2]);
//		trdata[4]= parseFloat(score[3]);
//		trdata[5]= parseFloat(score[4]);
//		trdata[6]= parseFloat(score[5]);
//		trdata[7]= parseFloat(score[6]);
//		trdata[8]= parseFloat(score[7]);
//		trdata[9]= parseFloat(score[8]);
//		
//		var tt=leafid.toString()+"+"+score[0]+"+"+score[1]+"+"+score[2]+"+"+score[3]+"+"+score[4]+"+"+score[5]+"+"+score[6]+"+"+score[7]+"+"+score[8]

		
		
		frame.contentWindow.postMessage(leafid, '*'); 


		if(arrdata=="design"){
			switch (leafid){
				case 7:
					vnum=1;
					break;
				case 15:
  					vnum=36;
  					break;
				case 16:
  					vnum=2
  					break;
				case 9:
  					vnum=3
  					break;
				case 17:
  					vnum=37
  					break;
				case 18:
  					vnum=4
  					break;
				case 19:
  					vnum=38
  					break;
				case 20:
  					vnum=5
  					break;
				case 21:
  					vnum=6
  					break;
				case 22:
  					vnum=39
  					break;
				case 13:
  					vnum=40
  					break;
				case 14:
  					vnum=7
  					break;
			}
//			document.getElementById('success').href="<?php echo base_url();?>application/video/design/vid_"+vnum.toString()+".mp4"
//			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/design/vid_"+vnum.toString()+".mp4"
//			console.log(vnum)
		}
		else{
			if(arrdata="fashion"){
			switch (leafid){
				case 30:
					vnum=1;
					break;
				case 38:
  					vnum=36;
  					break;
				case 39:
  					vnum=2
  					break;
				case 40:
  					vnum=37
  					break;
				case 41:
  					vnum=3
  					break;
				case 42:
  					vnum=38
  					break;
				case 43:
  					vnum=4
  					break;
				case 44:
  					vnum=5
  					break;
				case 45:
  					vnum=39
  					break;
				case 46:
  					vnum=40
  					break;
				case 47:
  					vnum=6
  					break;
				case 36:
  					vnum=41
  					break;
				case 37:
  					vnum=7
  					break;
			}
//			document.getElementById('success').href="<?php echo base_url();?>application/video/fashion/vid_"+vnum.toString()+".mp4"
//			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/fashion/vid_"+vnum.toString()+".mp4"				
			}
			else{		
			if(arrdata="technology"){
			switch (leafid){
				case 55:
					vnum=1;
					break;
				case 56:
  					vnum=36;
  					break;
				case 63:
  					vnum=2
  					break;
				case 64:
  					vnum=3
  					break;
				case 58:
  					vnum=37
  					break;
				case 65:
  					vnum=4
  					break;
				case 66:
  					vnum=38
  					break;
				case 67:
  					vnum=5
  					break;
				case 68:
  					vnum=6
  					break;
				case 61:
  					vnum=39
  					break;
				case 69:
  					vnum=40
  					break;
				case 70:
  					vnum=7
  					break;
			}	
//			document.getElementById('success').href="<?php echo base_url();?>application/video/technology/vid_"+vnum.toString()+".mp4"
//			document.getElementById('unsuccess').href="<?php echo base_url();?>application/video/technology/vid_"+vnum.toString()+".mp4"	
			}
			}				
			}
		

	}
		
	function resetbar(){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "0";
				document.getElementById("PositiveMindset").innerHTML="0";
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "0";
				document.getElementById("Duraion").innerHTML="0";
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "0";
				document.getElementById("Involvement").innerHTML="0";
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "0";
				document.getElementById("PurchaseIntent").innerHTML="0";
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "0";
				document.getElementById("Creativity").innerHTML="0";
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "0";
				document.getElementById("Relevance").innerHTML="0";
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "0";
				document.getElementById("AVQuality").innerHTML="0";
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "0";
				document.getElementById("Attitude").innerHTML="0";
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "0";
				document.getElementById("Complexity").innerHTML="0";
			}
			var x = document.getElementsByClassName("hvalue");
			var i;
			for (i = 0; i < x.length; i++) {
    			x[i].style.color = "steelblue";
			}	
	}
		
	function report(period){
		var rframe = document.getElementById('iframe');
		var rscore= new Array();
		rscore[0]=0;
		rscore[1]=0;
		rscore[2]=0;
		rscore[3]=0;
		rscore[4]=0;
		rscore[5]=0;
		rscore[6]=0;
		rscore[7]=0;
		rscore[8]=0;
		
		if (period=="") return;
		if (period=="demo1"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "4.5";
				document.getElementById("PositiveMindset").innerHTML="4.5";
				rscore[0]=4.5;
				
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "4";
				document.getElementById("Duraion").innerHTML="4";
				rscore[1]=4;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				rscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "5";
				document.getElementById("PurchaseIntent").innerHTML="5";
				rscore[3]=5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "4.5";
				document.getElementById("Creativity").innerHTML="4.5";
				rscore[4]=4.5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "6";
				document.getElementById("Relevance").innerHTML="6";
				rscore[5]=6;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "5.5";
				document.getElementById("AVQuality").innerHTML="5.5";
				rscore[6]=5.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "5";
				document.getElementById("Attitude").innerHTML="5";
				rscore[7]=5;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5.5";
				document.getElementById("Complexity").innerHTML="5.5";
				rscore[8]=5.5;
			}
			
		}
		if (period=="demo2"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "3.5";
				document.getElementById("PositiveMindset").innerHTML="3.5";
				rscore[0]=3.5;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "3";
				document.getElementById("Duraion").innerHTML="3";
				rscore[1]=3;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				rscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "5";
				document.getElementById("PurchaseIntent").innerHTML="5";
				rscore[3]=5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "5.5";
				document.getElementById("Creativity").innerHTML="5.5";
				rscore[4]=5.5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "4.5";
				document.getElementById("Relevance").innerHTML="4.5";
				rscore[5]=4.5;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "4.5";
				document.getElementById("AVQuality").innerHTML="4.5";
				rscore[6]=4.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "6";
				document.getElementById("Attitude").innerHTML="6";
				rscore[7]=6;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5";
				document.getElementById("Complexity").innerHTML="5";
				rscore[8]=5;
			}
		}
		if (period=="demo3"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "3.5";
				document.getElementById("PositiveMindset").innerHTML="3.5";
				rscore[0]=3.5;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "2.5";
				document.getElementById("Duraion").innerHTML="2.5";
				rscore[1]=2.5;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "4.5";
				document.getElementById("Involvement").innerHTML="4.5";
				rscore[2]=4.5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "4";
				document.getElementById("PurchaseIntent").innerHTML="4";
				rscore[3]=4;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "5";
				document.getElementById("Creativity").innerHTML="5";
				rscore[4]=5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "5.5";
				document.getElementById("Relevance").innerHTML="5.5";
				rscore[5]=5.5;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "5";
				document.getElementById("AVQuality").innerHTML="5";
				rscore[6]=5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "5.5";
				document.getElementById("Attitude").innerHTML="5.5";
				rscore[7]=5.5;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5.5";
				document.getElementById("Complexity").innerHTML="5.5";
				rscore[8]=5.5;
			}
		}
		if (period=="demo4"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "3.5";
				document.getElementById("PositiveMindset").innerHTML="3.5";
				rscore[0]=3.5;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "3";
				document.getElementById("Duraion").innerHTML="3";
				rscore[1]=3;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				rscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "4.5";
				document.getElementById("PurchaseIntent").innerHTML="4.5";
				rscore[3]=4.5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "4";
				document.getElementById("Creativity").innerHTML="4";
				rscore[4]=4;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "4.5";
				document.getElementById("Relevance").innerHTML="4.5";
				rscore[5]=4.5;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "3.5";
				document.getElementById("AVQuality").innerHTML="3.5";
				rscore[6]=3.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "5";
				document.getElementById("Attitude").innerHTML="5";
				rscore[7]=5;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5";
				document.getElementById("Complexity").innerHTML="5";
				rscore[8]=5;
			}
		}
		if (period=="demo5"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "4";
				document.getElementById("PositiveMindset").innerHTML="4";
				rscore[0]=4;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "2.5";
				document.getElementById("Duraion").innerHTML="2.5";
				rscore[1]=2.5;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				rscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "5";
				document.getElementById("PurchaseIntent").innerHTML="5";
				rscore[3]=5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "5.5";
				document.getElementById("Creativity").innerHTML="5.5";
				rscore[4]=5.5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "6";
				document.getElementById("Relevance").innerHTML="6";
				rscore[5]=6;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "5.5";
				document.getElementById("AVQuality").innerHTML="5.5";
				rscore[6]=5.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "6";
				document.getElementById("Attitude").innerHTML="6";
				rscore[7]=6;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "6";
				document.getElementById("Complexity").innerHTML="6";
				rscore[8]=6;
			}
		}
		if (period=="reset"){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "0";
				document.getElementById("PositiveMindset").innerHTML="0";
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "0";
				document.getElementById("Duraion").innerHTML="0";
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "0";
				document.getElementById("Involvement").innerHTML="0";
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "0";
				document.getElementById("PurchaseIntent").innerHTML="0";
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "0";
				document.getElementById("Creativity").innerHTML="0";
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "0";
				document.getElementById("Relevance").innerHTML="0";
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "0";
				document.getElementById("AVQuality").innerHTML="0";
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "0";
				document.getElementById("Attitude").innerHTML="0";
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "0";
				document.getElementById("Complexity").innerHTML="0";
			}			
		}
		
		rframe.contentWindow.postMessage(rscore, '*'); 
		
	}
		
	function Inputscore(){
		var iframe = document.getElementById('iframe');
		var iscore= new Array();
		iscore[0]=-2;
		iscore[1]=0;
		iscore[2]=0;
		iscore[3]=0;
		iscore[4]=0;
		iscore[5]=0;
		iscore[6]=0;
		iscore[7]=0;
		iscore[8]=0;

	 	iscore[0]=  document.getElementById("PositiveMindset")==null? -2:document.getElementById("PositiveMindset").innerHTML  ;
	 	iscore[1]=  document.getElementById("Duraion")==null? -1:document.getElementById("Duraion").innerHTML;
	 	iscore[2]=  document.getElementById("Involvement")==null? -1:document.getElementById("Involvement").innerHTML;
	 	iscore[3]=  document.getElementById("PurchaseIntent")==null? -1:document.getElementById("PurchaseIntent").innerHTML;
	 	iscore[4]=  document.getElementById("Creativity")==null? -1:document.getElementById("Creativity").innerHTML;	
	 	iscore[5]=  document.getElementById("Relevance")==null? -1:document.getElementById("Relevance").innerHTML;
	 	iscore[6]=  document.getElementById("AVQuality")==null? -1:document.getElementById("AVQuality").innerHTML;
	 	iscore[7]=  document.getElementById("Attitude")==null? -1:document.getElementById("Attitude").innerHTML;
	 	iscore[8]=  document.getElementById("Complexity")==null? -1:document.getElementById("Complexity").innerHTML;
		
		iframe.contentWindow.postMessage(iscore, '*'); 
	}
		
	function getgood(){
		
		var gg = window.open("../../application/popup/getgood.html","success video","height=800, width=400, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no");
		
//
//		var w1=gg.document
//		var w2=gg.document
//		var w3=gg.document
//		console.log(w1);
//		console.log(w2);
//		console.log(w3);
//		
	}
	
	function closewin(num){
		var cframe = document.getElementById('iframe');
		var cscore= new Array();
		
		cscore[0]=-3;
		cscore[1]=0;
		cscore[2]=0;
		cscore[3]=0;
		cscore[4]=0;
		cscore[5]=0;
		cscore[6]=0;
		cscore[7]=0;
		cscore[8]=0;
		
		if(num==1){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "4.5";
				document.getElementById("PositiveMindset").innerHTML="4.5";
				cscore[0]=4.5;
				
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "4";
				document.getElementById("Duraion").innerHTML="4";
				cscore[1]=4;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				cscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "5";
				document.getElementById("PurchaseIntent").innerHTML="5";
				cscore[3]=5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "4.5";
				document.getElementById("Creativity").innerHTML="4.5";
				cscore[4]=4.5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "6";
				document.getElementById("Relevance").innerHTML="6";
				cscore[5]=6;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "5.5";
				document.getElementById("AVQuality").innerHTML="5.5";
				cscore[6]=5.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "5";
				document.getElementById("Attitude").innerHTML="5";
				cscore[7]=5;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5.5";
				document.getElementById("Complexity").innerHTML="5.5";
				cscore[8]=5.5;
			}	
		}

		if(num==2){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "3.5";
				document.getElementById("PositiveMindset").innerHTML="3.5";
				cscore[0]=3.5;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "3";
				document.getElementById("Duraion").innerHTML="3";
				cscore[1]=3;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "5";
				document.getElementById("Involvement").innerHTML="5";
				cscore[2]=5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "5";
				document.getElementById("PurchaseIntent").innerHTML="5";
				cscore[3]=5;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "5.5";
				document.getElementById("Creativity").innerHTML="5.5";
				cscore[4]=5.5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "4.5";
				document.getElementById("Relevance").innerHTML="4.5";
				cscore[5]=4.5;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "4.5";
				document.getElementById("AVQuality").innerHTML="4.5";
				cscore[6]=4.5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "6";
				document.getElementById("Attitude").innerHTML="6";
				cscore[7]=6;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5";
				document.getElementById("Complexity").innerHTML="5";
				cscore[8]=5;
			}	
		}

		if(num==3){
			if(document.getElementById("R1")!=null){
				document.getElementById("R1").value = "3.5";
				document.getElementById("PositiveMindset").innerHTML="3.5";
				cscore[0]=3.5;
			}
			if(document.getElementById("R2")!=null){
				document.getElementById("R2").value = "2.5";
				document.getElementById("Duraion").innerHTML="2.5";
				cscore[1]=2.5;
			}
			if(document.getElementById("R3")!=null){
				document.getElementById("R3").value = "4.5";
				document.getElementById("Involvement").innerHTML="4.5";
				cscore[2]=4.5;
			}
			if(document.getElementById("R4")!=null){
				document.getElementById("R4").value = "4";
				document.getElementById("PurchaseIntent").innerHTML="4";
				cscore[3]=4;
			}
			if(document.getElementById("R5")!=null){
				document.getElementById("R5").value = "5";
				document.getElementById("Creativity").innerHTML="5";
				cscore[4]=5;
			}
			if(document.getElementById("R6")!=null){
				document.getElementById("R6").value = "5.5";
				document.getElementById("Relevance").innerHTML="5.5";
				cscore[5]=5.5;
			}
			if(document.getElementById("R7")!=null){
				document.getElementById("R7").value = "5";
				document.getElementById("AVQuality").innerHTML="5";
				cscore[6]=5;
			}
			if(document.getElementById("R8")!=null){
				document.getElementById("R8").value = "5.5";
				document.getElementById("Attitude").innerHTML="5.5";
				cscore[7]=5.5;
			}
			if(document.getElementById("R9")!=null){
				document.getElementById("R9").value = "5.5";
				document.getElementById("Complexity").innerHTML="5.5";
				cscore[8]=5.5;
			}
		}
	
		cframe.contentWindow.postMessage(cscore, '*'); 
	}
		
	function Rollback(){
		var temp
		temp=oldsrc
		oldsrc=document.getElementById('iframe').src
		document.getElementById('iframe').src=temp;
		resetbar();
	}
	
	function Showvideo(){
		oldsrc=document.getElementById('iframe').src
	 	document.getElementById('iframe').src="../../application/views/player/player.html";

		var frame = document.getElementById('iframe');
		frame.contentWindow.postMessage(vnum, '*'); 
		console.log(vnum)
		
	}
		
	function countpart(){
		
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


		var trdata=new Array();
		
	 	if (arrdata == "design"){
		 	if(score[6]<=3.125){
				document.getElementById("hAVQuality").style.color='orange'
				if(score[1]<=2.25){
					document.getElementById("hDuraion").style.color='orange'
					if(score[1]<=1.25){
						document.getElementById("hDuraion").style.color='orange'
						leafid=7;
					}
					else{
						document.getElementById("hDuraion").style.color='orange'
						if(score[6]<=1.755){
							document.getElementById("hAVQuality").style.color='orange'
							leafid=15;	
						}
						else{
							document.getElementById("hAVQuality").style.color='orange'
							leafid=16;
						}
					}
				}
				else{
					document.getElementById("hDuraion").style.color='orange'
					if(score[2]<=1.6875){
						document.getElementById("hInvolvement").style.color='orange'
						leafid=9;
					}
					else{
						document.getElementById("hInvolvement").style.color='orange'
						if(score[8]<=1.5){
							document.getElementById("hComplexity").style.color='orange'
							leafid=17;
						}
						else{
							document.getElementById("hComplexity").style.color='orange'
							leafid=18;
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
							leafid=19;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=20;
						}
					}
					else{
						document.getElementById("hAVQuality").style.color='orange'
						if(score[7]<=3.625){
							document.getElementById("hAttitude").style.color='orange'
							leafid=21;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=22;
						}					
					}
				}
				else{
					document.getElementById("hDuraion").style.color='orange'
					if(score[4]<=3.75){
						document.getElementById("hCreativity").style.color='orange'
						leafid=13;
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=14;
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
						leafid=30;
					}
					else{
						document.getElementById("hPurchaseIntent").style.color='orange'
						if(score[2]<=1.5625){
							document.getElementById("hInvolvement").style.color='orange'
							leafid=38;	
						}
						else{
							document.getElementById("hInvolvement").style.color='orange'
							leafid=39;
						}
					}
				}
				else{
					document.getElementById("hRelevance").style.color='orange'
					if(score[7]<=3.125){
						document.getElementById("hAttitude").style.color='orange'
						if(score[4]<=3.75){
							document.getElementById("hCreativity").style.color='orange'
							leafid=40;
						}
						else{
							document.getElementById("hCreativity").style.color='orange'
							leafid=41;
						}
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						if(score[2]<=2.0625){
							document.getElementById("hInvolvement").style.color='orange'
							leafid=42;
						}
						else{
							document.getElementById("hInvolvement").style.color='orange'
							leafid=43;
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
								leafid=44;
							}
							else{
								document.getElementById("hInvolvement").style.color='orange'
								leafid=45;
							}
						}
						else{
							document.getElementById("hDuraion").style.color='orange'						
							if(score[3]<=5.5){
								document.getElementById("hPurchaseIntent").style.color='orange'
								leafid=46;
							}
							else{
								document.getElementById("hPurchaseIntent").style.color='orange'
								leafid=47;
							}						
						}
					}
				else{
					document.getElementById("hRelevance").style.color='orange'				
						if(score[6]<=5.625){
							document.getElementById("hAVQuality").style.color='orange'
							leafid=36;
						}
						else{
							document.getElementById("hAVQuality").style.color='orange'
							leafid=37;
						}					
					}
			}
		}
		else{
			if(score[6]<=3.875){
				document.getElementById("hAVQuality").style.color='orange'
				if(score[4]<=1.75){
					document.getElementById("hCreativity").style.color='orange'
					if(score[7]<=6.375){
						document.getElementById("hAttitude").style.color='orange'
						leafid=55;
					}
					else{
						document.getElementById("hAttitude").style.color='orange'
						leafid=56;
					}
				}
				else{
					document.getElementById("hCreativity").style.color='orange'
					if(score[4]<=4.25){
						document.getElementById("hCreativity").style.color='orange'
						if(score[7]<=5.125){
							document.getElementById("hAttitude").style.color='orange'
							leafid=63;
						}
						else{
							document.getElementById("hAttitude").style.color='orange'
							leafid=64;
						}
					}
					else{
						document.getElementById("hCreativity").style.color='orange'
						leafid=58;
					}
				}
			}
			
		
			else{
				document.getElementById("hAVQuality").style.color='orange'
				if(score[6]<=6.875){
					document.getElementById("hAVQuality").style.color='orange'
					if(score[5]<=3.75){
						document.getElementById("hRelevance").style.color='orange'
						if(score[5]<=1.75){
							document.getElementById("hRelevance").style.color='orange'
							leafid=65;
						}
						else{
							document.getElementById("hRelevance").style.color='orange'
							leafid=66;
						}
					}
					else{
						document.getElementById("hRelevance").style.color='orange'
						if(score[1]<=1.75){
							document.getElementById("hDuraion").style.color='orange'
							leafid=67;
						}
						else{
							document.getElementById("hDuraion").style.color='orange'
							leafid=68;
						}										
					}
				}
				else{
					document.getElementById("hAVQuality").style.color='orange'
					if(score[8]<=3.5){
						document.getElementById("hComplexity").style.color='orange'
						leafid=61;
					}
					else{
						document.getElementById("hComplexity").style.color='orange'
						if(score[3]<=6.5){
							document.getElementById("hPurchaseIntent").style.color='orange'
							leafid=69;
						}
						else{
							document.getElementById("hPurchaseIntent").style.color='orange'
							leafid=70;
						}					
					}
				}
			}
		}


		
		var frame = document.getElementById('iframe');

		
		
		frame.contentWindow.postMessage(-leafid, '*'); 
		console.log(-leafid)

		if(arrdata=="design"){
			switch (leafid){
				case 7:
					vnum=1;
					break;
				case 15:
  					vnum=36;
  					break;
				case 16:
  					vnum=2
  					break;
				case 9:
  					vnum=3
  					break;
				case 17:
  					vnum=37
  					break;
				case 18:
  					vnum=4
  					break;
				case 19:
  					vnum=38
  					break;
				case 20:
  					vnum=5
  					break;
				case 21:
  					vnum=6
  					break;
				case 22:
  					vnum=39
  					break;
				case 13:
  					vnum=40
  					break;
				case 14:
  					vnum=7
  					break;
			}

		}
		else{
			if(arrdata="fashion"){
			switch (leafid){
				case 30:
					vnum=1;
					break;
				case 38:
  					vnum=36;
  					break;
				case 39:
  					vnum=2
  					break;
				case 40:
  					vnum=37
  					break;
				case 41:
  					vnum=3
  					break;
				case 42:
  					vnum=38
  					break;
				case 43:
  					vnum=4
  					break;
				case 44:
  					vnum=5
  					break;
				case 45:
  					vnum=39
  					break;
				case 46:
  					vnum=40
  					break;
				case 47:
  					vnum=6
  					break;
				case 36:
  					vnum=41
  					break;
				case 37:
  					vnum=7
  					break;
			}				
			}
			else{		
			if(arrdata="technology"){
			switch (leafid){
				case 55:
					vnum=1;
					break;
				case 56:
  					vnum=36;
  					break;
				case 63:
  					vnum=2
  					break;
				case 64:
  					vnum=3
  					break;
				case 58:
  					vnum=37
  					break;
				case 65:
  					vnum=4
  					break;
				case 66:
  					vnum=38
  					break;
				case 67:
  					vnum=5
  					break;
				case 68:
  					vnum=6
  					break;
				case 61:
  					vnum=39
  					break;
				case 69:
  					vnum=40
  					break;
				case 70:
  					vnum=7
  					break;
			}	
			}
			}				
			}
		
	}

	</script>
  	
  	<script>
		var Node = function (key) {
    		this.key = key;
    		this.left = null;
    		this.right = null;
  		};
		
		var insertleftNode = function (node, newNode) {
    		
      		if (node.left === null) {
				node.left = newNode;
			} else {
        		insertNode(node.left, newNode);
      		}
  		};		
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
			<form id="form1" method="get" onsubmit="return choose()"  name="form" >
		  		<label>field</label>
		  		<input type="text" name="field" id="uniqueID" value="" style="width: 200px"> 
		  		<input type="button" value="highlight" onclick="highlight();" style="margin: auto 0px auto 35px">
		  		<input type="button" value="countpart" onclick="countpart();" style="margin: auto 0px auto 30px; " >  
			</form>      
        </div>
        </div>
		
		<div class="panel panel-default">
		<div class="panel-heading">
        	<i class="fa fa-bell "></i> Features
        </div>		
		<div class="panel-body " >
          <ul class="nav nav-sidebar list-group">
            <div id="li2" style="margin: 10px;">              
            <li><a href="#" id="hDuraion" class="hvalue" >Duraion</a></li>
                <input id= "R2" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue2(this.value)" style="width: 200px" />
                <span id="Duraion">0</span>
                <script type="text/javascript">
                function showValue2(newValue)
                {
                  document.getElementById("Duraion").innerHTML=newValue;
                }
                </script> 
            </div>
            <div id="li3" style="margin: 10px;"> 
            <li><a href="#" id="hInvolvement" class="hvalue" >Involvement</a></li>
                <input id="R3" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue3(this.value)" style="width: 200px" />
                <span id="Involvement">0</span>
                <script type="text/javascript">
                function showValue3(newValue)
                {
                  document.getElementById("Involvement").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li4" style="margin: 10px;">
            <li><a href="#" id="hPurchaseIntent" class="hvalue" >PurchaseIntent </a></li>
                <input id="R4" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue4(this.value)" style="width: 200px" />
                <span id="PurchaseIntent">0</span>
                <script type="text/javascript">
                function showValue4(newValue)
                {
                  document.getElementById("PurchaseIntent").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li5" style="margin: 10px;">
            <li><a href="#" id="hCreativity" class="hvalue" >Creativity</a></li>
                <input id="R5" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue5(this.value)" style="width: 200px" />
                <span id="Creativity">0</span>
                <script type="text/javascript">
                function showValue5(newValue)
                {
                  document.getElementById("Creativity").innerHTML=newValue;
                }
                </script>
            </div>
            <div id="li6" style="margin: 10px;">
            <li><a href="#" id="hRelevance" class="hvalue" >Relevance</a></li>
                <input id="R6" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue7(this.value)" style="width: 200px" />
                <span id="Relevance">0</span>
                <script type="text/javascript">
                function showValue7(newValue)
                {
                  document.getElementById("Relevance").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li7" style="margin: 10px;">
            <li><a href="#" id="hAVQuality" class="hvalue" >AVQuality</a></li>
                <input id="R7" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue8(this.value)" style="width: 200px" />
                <span id="AVQuality">0</span>
                <script type="text/javascript">
                function showValue8(newValue)
                {
                  document.getElementById("AVQuality").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li8" style="margin: 10px;"> 
            <li><a href="#" id="hAttitude" class="hvalue" >Attitude</a></li>
                <input id="R8" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue9(this.value)" style="width: 200px" />
                <span id="Attitude">0</span>
                <script type="text/javascript">
                function showValue9(newValue)
                {
                  document.getElementById("Attitude").innerHTML=newValue;
                }               
                </script>
            </div>
            <div id="li9" style="margin: 10px;">
            <li><a href="#" id="hComplexity" class="hvalue" >Complexity</a></li>
                <input id="R9" type="range" min="0" max="7" value="0" step="0.5" onchange="showValue10(this.value)" style="width: 200px" />
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
			<option value="reset">reset</option>
			</select>
			</form>
      		<input type="button" value="getgood" onclick="getgood();" style="margin: 10px auto auto auto">
			<input type="button" value="inputOct" onclick="Inputscore();" style="margin: auto 0px auto 30px; " >       		       
        </div>
        </div>
        </div>
        
        
        

        <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
			<div class='page-header'>
  				<div class='btn-toolbar pull-right'>
      				<button type='button' class='btn btn-primary' onclick="Rollback();">Rollback</button>    			
  				</div>
  				<h2>Tree Map</h2>
			</div>


          

          