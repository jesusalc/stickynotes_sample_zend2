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

$myFile = "../config/autoload/local.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
// /config/autoload/local.php
// if it does not exists create it. It has already been excluded in .gitignore file
return array(
    'db' => array(
        'username' => 'root',
        'password' => 'machoman',
    ),
);
";

writeFile($myFile, $contents);



?>