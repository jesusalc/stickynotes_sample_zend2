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

$myFile = "../module/StickyNotes/src/StickyNotes/Controller/StickyNotesController.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
// module/StickyNotes/src/StickyNotes/Controller/StickyNotesController.php:

namespace StickyNotes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StickyNotesController extends AbstractActionController {
    public function indexAction() {
    }

    public function addAction(){
    }

    public function removeAction() {
    }

    public function updateAction(){
    }
}
";

writeFile($myFile, $contents);



?>