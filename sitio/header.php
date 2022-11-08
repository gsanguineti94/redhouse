<header class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="container">
                <a href="/" id="logo">
                    <img src="img/logo.png" width="190" alt="" data-retina="true">
                </a>
            </div>
        </div>
    </div>
    <?PHP
    // Links por default

    /*
    $es_link = '?lan=es';
    $en_link = '?lan=en';
    */
    switch($leng){
        case 'en_US':
            if(!isset($es_link)){$es_link = '?lan=es';}
            $en_link = 'javascript:void(0)';
            break;
        case 'es_AR':
            if(!isset($en_link)){$en_link = '?lan=en';}
            $es_link = 'javascript:void(0)';
            break;
    }
    ?>
    <div class="container">
        <div class="row">

            <nav class="col--md-12 col-sm-12 col-xs-12">
            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
            <ul id="lang_top">
                <li><a href="<?PHP echo $es_link;?>" class="<?PHP echo ($leng == 'es_AR') ? 'active' : '';?>">ES</a></li>
                <li><a href="<?PHP echo $en_link;?>" class="<?PHP echo ($leng == 'en_US') ? 'active' : '';?>">EN</a></li>
            </ul>
            <div class="main-menu">
                <div id="header_menu">
                     <img src="img/logo_footer.png" height="40" alt="" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                 <ul>
                    <li><a href="/<?php echo _('home');?>.html"><?PHP echo _('Home');?></a></li>
                    <li><a href="<?php echo _('contact');?>.html"><?PHP echo _('Contact');?></a></li>
                </ul>
            </div><!-- End main-menu -->
            </nav>
        </div><!-- End row -->
    </div><!-- End container -->
</header>