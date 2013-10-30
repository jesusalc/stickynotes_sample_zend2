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

$myFile = "../module/StickyNotes/autoload_classmap.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php 
// module/StickyNotes/autoload_classmap.php
return array();
";

writeFile($myFile, $contents);



?>