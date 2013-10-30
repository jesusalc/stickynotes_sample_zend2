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

$myFile = "../module/StickyNotes/config/module.config.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
// module/StickyNotes/config/module.config.php:
return array(
    'controllers' => array(
        'invokables' => array(
            'StickyNotes\Controller\StickyNotes' => 'StickyNotes\Controller\StickyNotesController',
        ),
    ),
    // add this section
    'router' => array(
        'routes' => array(
            'stickynotes' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/stickynotes[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'StickyNotes\Controller\StickyNotes',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'stickynotes' => __DIR__ . '/../view',
        ),
    ),
);
";

writeFile($myFile, $contents);



?>