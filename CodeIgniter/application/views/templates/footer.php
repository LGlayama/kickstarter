        <h2 class="sub-header">Demo Video</h2>
        
          <div class="row placeholders">
   
           	<div class="col-xs-12 col-sm-6 placeholder demo1">
              <a class="popup-player" id="success" href="<?php echo base_url();?>application/video/vid_1_design.mp4">
               <img src="<?php echo base_url();?>application/video/success.jpg"  height="150" width="200">
              </a>

              <h4>Successful example video</h4>
 				<form method="post"   >
		  			<label>comment</label>
		  			<input type="text"   value="" style="width: 250px">  
				</form>
            </div>
            
            <div class="col-xs-12 col-sm-6 placeholder demo2">
              <a class="popup-player" id="unsuccess" href="<?php echo base_url();?>application/video/vid_1_design.mp4">
               <img src="<?php echo base_url();?>application/video/unsuccess.jpg"  height="150" width="200">
              </a>

              <h4>Unsuccessful example video</h4>
				<form method="post"   >
		  			<label>comment</label>
		  			<input type="text"   value="" style="width: 250px">  
				</form>
            </div>
            	
            	
			
          </div>
        
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdn.bootcss.com/jquery/3.2.0/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url();?>application/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url();?>application/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url();?>application/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
