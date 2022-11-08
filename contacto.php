<!DOCTYPE html>
<html>
<head>
    <?PHP include("sitio/head.php");?>
    <?php
    $es_link = 'contacto.html';
    $en_link = 'contact.html';
    ?>
    <script src='https://www.google.com/recaptcha/api.js?render=6Lf2c-0ZAAAAAIWUZbL7DTA9QmG2pGoFTUEldy3A'></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Lf2c-0ZAAAAAIWUZbL7DTA9QmG2pGoFTUEldy3A', {action: 'comentario'})
            .then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
            });
        });
    </script>
</head>

<body>    

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->    
          <!-- Header ================================================== -->
        <?PHP include("sitio/header.php");?>
    <!-- End Header =============================================== -->
    
    <!-- SubHeader =============================================== -->
    <section class="parallax-window" id="short" data-parallax="scroll" data-image-src="img/contacto.jpg" data-natural-width="1400" data-natural-height="350">
        <div id="subheader">
            <h1><?PHP echo _("Contact Us");?></h1>
    </div><!-- End subheader -->
    </section>

        
    <div class="container margin_60_35">
    <h2 class="main_title"><em></em><?PHP echo _('Welcome to');?> Red House Hostel<span>Patagonia Argentina</span></h2>
    	<div class="row add_top_20">
        
        <?PHP include("contact/box_contact.php");?> 
            
        	<?PHP include("contact/message.php");?>   
            
             
        </div><!-- End row -->
    </div><!-- End Container -->
      
      <iframe id="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2546.4718754853866!2d-72.28005728427266!3d-50.33910357946014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdbb0da490cae439%3A0x49fce0fc65dbd3cc!2sRed%20House%20Hostel!5e0!3m2!1ses-419!2sar!4v1606338772306!5m2!1ses-419!2sar" width="800" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>  

    <?PHP include("sitio/footer.php");?>
    <?PHP include("sitio/js.php");?>
</body>
</html>