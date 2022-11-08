<!DOCTYPE html>
<html>
<head>
    <?PHP include("sitio/head.php");?>
    <?php
    $es_link = 'reglas.html';
    $en_link = 'rules.html';
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
            <h1><?PHP echo _("TEST");?></h1>
    </div><!-- End subheader -->
    </section>

        
    <div class="container margin_60_35">
    <h2 class="main_title"><em></em><?PHP echo _('Welcome to');?> Red House Hostel<span>Patagonia Argentina</span></h2>
    	<div class="row add_top_20">            
        </div><!-- End row -->
    </div><!-- End Container -->
        <?PHP include("sitio/footer.php");?>
    <?PHP include("sitio/js.php");?>
</body>
</html>