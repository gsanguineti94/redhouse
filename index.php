<!DOCTYPE html>
<html>
<head>
    <?PHP include("sitio/head.php");?>
    <?php
    $es_link = 'inicio.html';
    $en_link = 'home.html';
    ?>
</head>

<body>
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->
    
    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- End Preload -->
    
    <?PHP include("sitio/header.php");?>
    <?PHP include("home/subheader.php");?>
    <?PHP include("home/welcome.php");?>
    <?PHP include("home/rooms.php");?>
    <?PHP //include("home/covid.php");?>
    <?PHP //include("home/clients.php");?>
    <?PHP include("sitio/footer.php");?>
    <?PHP include("sitio/js.php");?>
</body>
</html>