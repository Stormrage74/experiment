<?php echo doctype('html5'); ?>
<html>
    <head>	
        <title><?php echo $title ?></title>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Expires" content="0" />
        <?php
       // echo link_tag(CSS . 'main.css');
       // echo link_tag(CSS . 'menu.css');
        echo link_tag(CSS . 'jquery.fancybox.css');
        echo link_tag('assets/css/jquery.fancybox-buttons.css');
        echo link_tag('assets/css/jquery-ui.css');
        echo link_tag('assets/css/jquery.ui.autocomplete.css');
        echo link_tag('assets/css/jquery.ui.datepicker.css');

        foreach ($css as $c):
            echo link_tag(CSS . $c);
        endforeach;

        echo script_tag(JS . 'jquery.min.js');
        echo script_tag(JS . 'jquery-ui-1.10.3.custom.min.js');
      //  echo script_tag(JS . 'jquery.ui.datepicker-fr.js');
        echo script_tag(JS . 'jquery.placeholder.js');
        echo script_tag(JS . 'jquery.fancybox.pack-modif.js');
        echo script_tag(JS . 'jquery.fancybox-buttons.js');
        echo script_tag(JS . 'my_lib.js');

        foreach ($javascript as $js):
            echo script_tag(JS . $js);
        endforeach;
        ?>

        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    </head>
    <body>
        <div id="content">
            <?php
            echo $header;
            if (isset($menu)) {
                echo $menu;
            }
            if (isset($soustitre)) {
                ?> 
                <div class="sousTitre">
                <?php echo $soustitre; ?>
                </div>
            <?php } ?>
            <div id="dialog"></div>
                <?php echo $content_body; ?>
            <footer>
                <?php echo $footer; ?>
            </footer>
        </div>
    </body>
</html>