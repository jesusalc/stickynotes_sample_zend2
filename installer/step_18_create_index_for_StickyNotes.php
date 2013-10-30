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

$myFile = "../modules/StickyNotes/view/sticky-notes/sticky-notes/index.phtml";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
// /modules/StickyNotes/view/sticky-notes/sticky-notes/index.phtml
?>

<div id=\"sticky-notes\">
    <?php foreach(\$stickynotes as \$stickynote):?>
    <div class=\"sticky-note\">
        <textarea id=\"stickynote-<?php echo \$stickynote->getId() ?>\"><?php echo \$stickynote->getNote() ?></textarea>
        <a href=\"#\" id=\"remove-<?php echo \$stickynote->getId(); ?>\"class=\"delete-sticky\">X</a>
    </div>
    <?php endforeach; ?>
    <div id=\"create\">+</div>

</div>
<div class=\"clear-both\"></div>
";

writeFile($myFile, $contents);



?>