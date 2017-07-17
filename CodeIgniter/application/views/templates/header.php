




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

    <title>Dashboard Template for Bootstrap</title>

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

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 col-md-3 sidebar">
          <ul class="nav nav-sidebar">

            <li><a href="#" onclick="feature_video()">PosMind</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue1(this.value)" />
                <span id="PosMind">0</span>
                <script type="text/javascript">
                function showValue1(newValue)
                {
                  document.getElementById("PosMind").innerHTML=newValue;
                }
                </script>               
            <li><a href="#" onclick="feature_video()" >Duraion</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue2(this.value)" />
                <span id="Duraion">0</span>
                <script type="text/javascript">
                function showValue2(newValue)
                {
                  document.getElementById("Duraion").innerHTML=newValue;
                }
                </script> 
            <li><a href="#" onclick="feature_video()" >Involvement</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue3(this.value)" />
                <span id="Involvement">0</span>
                <script type="text/javascript">
                function showValue3(newValue)
                {
                  document.getElementById("Involvement").innerHTML=newValue;
                }
                </script> 
            <li><a href="#" onclick="feature_video()" >PurInt </a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue4(this.value)" />
                <span id="PurInt">0</span>
                <script type="text/javascript">
                function showValue4(newValue)
                {
                  document.getElementById("PurInt").innerHTML=newValue;
                }
                </script> 
            <li><a href="#" onclick="feature_video()" >Uniqueness</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue5(this.value)" />
                <span id="Uniqueness">0</span>
                <script type="text/javascript">
                function showValue5(newValue)
                {
                  document.getElementById("Uniqueness").innerHTML=newValue;
                }
                </script> 
            <li><a href="#" onclick="feature_video()" >RelPurInt</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue6(this.value)" />
                <span id="RelPurInt">0</span>
                <script type="text/javascript">
                function showValue6(newValue)
                {
                  document.getElementById("RelPurInt").innerHTML=newValue;
                }
                </script> 
            <li><a href="#" onclick="feature_video()" >Relevance</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue7(this.value)" />
                <span id="Relevance">0</span>
                <script type="text/javascript">
                function showValue7(newValue)
                {
                  document.getElementById("Relevance").innerHTML=newValue;
                }               
                </script> 
            <li><a href="#" onclick="feature_video()" >AVQuality</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue8(this.value)" />
                <span id="AVQuality">0</span>
                <script type="text/javascript">
                function showValue8(newValue)
                {
                  document.getElementById("AVQuality").innerHTML=newValue;
                }               
                </script> 
            <li><a href="#" onclick="feature_video()" >Attitude</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue9(this.value)" />
                <span id="Attitude">0</span>
                <script type="text/javascript">
                function showValue9(newValue)
                {
                  document.getElementById("Attitude").innerHTML=newValue;
                }               
                </script>
            <li><a href="#" onclick="feature_video()" >Complexity</a></li>
                <input type="range" min="0" max="8" value="0" step="0.5" onchange="showValue10(this.value)" />
                <span id="Complexity">0</span>
                <script type="text/javascript">
                function showValue10(newValue)
                {
                  document.getElementById("Complexity").innerHTML=newValue;
                }               
                </script>  
          </ul>
       
        </div>

        <div class="col-sm-8 col-sm-offset-4 col-md-9 col-md-offset-3 main">
          <h1 class="page-header">Demo Video</h1>

          <div class="row placeholders">
   
           		<div class="col-xs-8 col-sm-4 placeholder demo1">
              <a class="popup-player" href="<?php echo base_url();?>application/video/vid_1_design.mp4">
               <img src="<?php echo base_url();?>application/video/1.png"  height="200" width="200">
              </a>
<!--               <video class="thumbnail" src="<?php echo base_url();?>application/video/vid_1_design.mp4" width="200" height="200" poster="<?php echo base_url();?>application/video/1.png" onclick="this.paused?this.play():this.pause();"/> -->
              <h4>Demo1</h4>
              <span class="text-muted">Something else</span>
            </div>
            	<div class="col-xs-8 col-sm-4 placeholder demo2">
              <a class="popup-player" href="<?php echo base_url();?>application/video/vid_1_fashion.mp4">
               <img src="<?php echo base_url();?>application/video/2.png"  height="200" width="200">
              </a>
<!--              <video class="thumbnail" src="<?php echo base_url();?>application/video/vid_1_fashion.mp4" width="200" height="200" poster="<?php echo base_url();?>application/video/2.png" onclick="this.paused?this.play():this.pause();"/> -->
              <h4>Demo2</h4>
              <span class="text-muted">Something else</span>
            </div>
            	<div class="col-xs-8 col-sm-4 placeholder demo3">
              <a class="popup-player" href="<?php echo base_url();?>application/video/vid_5_technology.mp4">
               <img src="<?php echo base_url();?>application/video/3.png"  height="200" width="200">
              </a>
<!--               <video class="thumbnail" src="<?php echo base_url();?>application/video/vid_5_technology.mp4" width="200" height="200" poster="<?php echo base_url();?>application/video/3.png" onclick="this.paused?this.play():this.pause();"/> -->
              <h4>Demo3</h4>
              <span class="text-muted">Something else</span>
            </div>
            	
			
          </div>

          <h2 class="sub-header">Tree Map</h2>