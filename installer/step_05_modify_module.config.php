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
    'view_manager' => array(
        'template_path_stack' => array(
            'stickynotes' => __DIR__ . '/../view',
        ),
    ),
);
";

writeFile($myFile, $contents);



?>