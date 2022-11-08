<!DOCTYPE html>
<html>
<head>
	<?PHP include("sitio/head.php");?>
</head>

<body>
	<?php 
    $tipo = 1; // doble
    if(isset($_GET['type'])){
    	$tipo = $_GET['type'];
    }
    if($tipo == 1){
    	$es_link = 'doble-privada.html';
    	$en_link = 'double-room.html';    
    }else{
    	$es_link = 'dormitorios.html';
    	$en_link = 'dorms.html';
    }
    ?>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
    	<div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
    <!-- Header ================================================== -->
    <?PHP include("sitio/header.php");?>
    <!-- End Header =============================================== -->
    
    <?php include("rooms/banner_".$tipo.".php");?>
    
    <?php $maintit = ($tipo == 1) ? _('Double Room') : _('Dorm');?>
    <?php $formopt = ($tipo == 1) ? 'habitación doble' : 'habitación compartida';?>
    <h1 class="main_title_in"><?php echo $maintit;?></h1>
    <div class="container add_bottom_60">
    	
    	<div class="row">
    		<div class="col-md-12" id="room_detail_desc">
    			<div id="single_room_feat">
    				<ul>
    					<?php if($tipo == 1){?>
    						<li><i class="icon_set_2_icon-104"></i><?php echo _("Double bed");?></li>
    					<?php }else{?>
    						<li><i class="icon_set_2_icon-114"></i><?php echo _("Up to 8 people");?></li>
    					<?php }?>
    					<li><i class="icon_set_1_icon-7"></i>Wifi</li>
    					<li><i class="icon_set_2_icon-118"></i><?php echo _("Ensuite bathroom");?></li>
    					<!--<li><i class="icon_set_1_icon-71"></i>Locker</li>-->
    				</ul>
    			</div>
    			<?php //include("rooms/precios.php");?>
    			<?php //include("rooms/reviews");?>
    			<?php //include("rooms/policies.php");?>
    		</div>
    		<div class="col-md-12" id="sidebar">
    			<div class="theiaStickySidebar">
    				<div class="box_style_1">
    					<div id="message-booking"></div>
    					<form method="post" action="assets/check_avail.php" id="check_avail" autocomplete="off" >
    						<input type="hidden" name="leng" id="leng" value="<?php echo $leng;?>" />
    						<input name="room_type" id="room_type" type="hidden" value="<?php echo $formopt;?>">   
    						<div class="row">
    							<div class="col-md-6 col-sm-6">
    								<div class="form-group">
    									<label><?php echo _("Arrival date");?></label>
    									<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="<?php echo _("Arrival");?>" id="check_in" name="check_in">
    									<span class="input-icon"><i class="icon-calendar-7"></i></span>
    								</div>
    							</div>
    							<div class="col-md-6 col-sm-6">
    								<div class="form-group">
    									<label><?php echo _("Departure date");?></label>
    									<input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="<?php echo _("Departure");?>" id="check_out" name="check_out">
    									<span class="input-icon"><i class="icon-calendar-7"></i></span>
    								</div>
    							</div>
    						</div><!-- End row -->
    						<div class="row">
    							<div class="col-md-6 col-sm-6 col-xs-6">
    								<div class="form-group">
    									<label><?php echo _("Adults");?> *<?php echo _('Only for 18 years old and older');?></label>
    									<div class="qty-buttons">
    										<input type="button" value="-" class="qtyminus" name="adults">
    										<input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
    										<input type="button" value="+" class="qtyplus" name="adults">
    									</div>
    								</div>
    							</div>
    							<!--
                  <div class="col-md-6 col-sm-6 col-xs-6">
    								<div class="form-group">
    									<label><?php //echo _("Children");?></label>
    									<div class="qty-buttons">
    										<input type="button" value="-" class="qtyminus" name="children">
    										<input type="text" name="children" id="children"  value="" class="qty form-control" placeholder="0">
    										<input type="button" value="+" class="qtyplus" name="children">
    									</div>
    								</div>
    							</div>
                  -->
    						</div><!-- End row -->
    						<div class="row">
    							
    							<div class="col-md-12 col-sm-6">
    								<div class="form-group">
    									<label><?php echo _("Name");?></label>
    									<input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="<?php echo _("Name");?> <?php echo _("and");?> <?php echo _("Last name");?>">
    								</div>
    							</div>
    							<div class="col-md-12 col-sm-6">
    								<div class="form-group">
    									<label>Email</label>
    									<input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="<?php echo _("Your");?> email">
    								</div>
    							</div>
    							<div class="col-md-12 col-sm-12">
    								<div class="form-group">
    									<input type="submit" value="<?php echo _("Send a booking request");?>" class="btn_full" id="submit-booking">
    								</div>
    							</div>
    						</div>
    					</form>
    					<hr>
    					<a href="<?php echo _("contact");?>.html" class="btn_outline"> <?php echo _("or").' '._("Contact us");?></a>
    					<a href="tel://5402902495922" id="phone_2"><i class="icon_set_1_icon-91"></i>+54 02902 495 922</a>
    					
    				</div><!-- End box_style -->
    			</div><!-- End theiaStickySidebar -->
    		</div><!-- End col -->
    		
    	</div><!-- End row -->
    	
    </div><!-- End container -->
    

    
    <div id="dtBox"></div><!-- End datepicker -->
    
    <?PHP include("sitio/footer.php");?>
    
  </body>
  </html>

  <?php //include("rooms/write-review.php");?>

  <!-- COMMON SCRIPTS -->
  <?PHP include("sitio/js.php");?>

  <!-- SPECIFIC SCRIPTS -->
  <script>
  	$('.carousel_in').owlCarousel({
  		center: true,
  		items:1,
  		loop:true,
  		autoplay:true,
  		navText: [ '', '' ],
  		addClassActive: true,
  		margin:5,
  		responsive:{
  			600:{
  				items:1
  			},
  			1000:{
  				items:2,
  				nav:true,
  			}
  		}
  	});
  </script>
  <script src="js/theia-sticky-sidebar.js"></script>
  <script>
  	jQuery('#sidebar').theiaStickySidebar({
  		additionalMarginTop: 80
  	});
  </script>
  <script type="text/javascript" src="js/DateTimePicker.js"></script>
  <?php if($leng == 'es_AR'){?>
  	<script type="text/javascript" src="js/DateTimePicker-i18n.js"></script>
  <?php }?>
  <script type="text/javascript">$("#dtBox").DateTimePicker({
  	init: function()
  	{
  		oDTP = this;
  	}
  	<?php if($leng == 'es_AR'){?>
  		,
  		language: "es"
  	<?php }?>
  });
</script>
</body>
</html>