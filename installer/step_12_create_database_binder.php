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

$myFile = "../module/StickyNotes/src/StickyNotes/Model/StickyNotesTable.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
#loads the database table from our database and binds it with our StickyNotes object.
// module/StickyNotes/src/StickyNotes/Model/StickyNotesTable.php

namespace StickyNotes\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\TableGateway\AbstractTableGateway;

class StickyNotesTable extends AbstractTableGateway {

    protected \$table = 'stickynotes';

    public function __construct(Adapter \$adapter) {
        \$this->adapter = \$adapter;
    }
}
";

writeFile($myFile, $contents);



?>