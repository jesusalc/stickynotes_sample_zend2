<?php
/**
	Open and write info function
*/
function writeFile($myFile, $stringData) {


   	$fh = fopen($myFile, 'w') or die("var message='Can't open file';");
    	fwrite($fh, $stringData);
   	/**
      close file
    */
    fclose($fh);

}

$myFile = "../module/Application/view/layout/layout.phtml";

touch($myFile);  //Touch the file linux style and create it

$contents = " <?php echo \$this->doctype(); ?>

<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <?php echo \$this->headTitle('ZF2 '. \$this->translate('Sticky Notes'))->setSeparator(' - ')->setAutoEscape(false)  // change Skeleton Application to Sticky Notes ?> 

        <?php echo \$this->headMeta()
            ->appendName('viewport', 'width=device-width, initial-scale=1.0')
            ->appendHttpEquiv('X-UA-Compatible', 'IE=edge')
        ?>

        <!-- Le styles -->
        <?php echo \$this->headLink(array('rel' => 'shortcut icon', 'type' => 'image/vnd.microsoft.icon', 'href' => \$this->basePath() . '/img/favicon.ico'))
                        ->prependStylesheet(\$this->basePath() . '/css/style.css')
                        ->prependStylesheet(\$this->basePath() . '/css/bootstrap-theme.min.css')
                        ->prependStylesheet(\$this->basePath() . '/css/bootstrap.min.css') ?>

        <!-- Scripts -->
        <?php echo \$this->headScript()
            ->prependFile(\$this->basePath() . '/js/bootstrap.min.js')
            ->prependFile(\$this->basePath() . '/js/jquery.min.js')
            ->prependFile(\$this->basePath() . '/js/respond.min.js', 'text/javascript', array('conditional' => 'lt IE 9',))
            ->prependFile(\$this->basePath() . '/js/html5shiv.js',   'text/javascript', array('conditional' => 'lt IE 9',))
        ; ?>

    </head>
    <body>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"<?php echo \$this->url('home') ?>\"><?php echo \$this->translate('Sticky Notes') // change Skeleton Application to Sticky Notes ?></a>
                    
                </div>
                <div class=\"collapse navbar-collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"<?php echo \$this->url('home') ?>\"><?php echo \$this->translate('Home') ?></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div class=\"container\">
            <?php echo \$this->content; ?>
            <hr>
            <footer>
                <p>&copy; 2005 - <?php echo date('Y') ?> by Zend Technologies Ltd. <?php echo \$this->translate('All rights reserved.') ?></p>
            </footer>
        </div> <!-- /container -->
        <?php echo \$this->inlineScript() ?>
    </body>
</html>
";

writeFile($myFile, $contents);



?>