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

$myFile = "../module/StickyNotes/Module.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
//  module/StickyNotes/Module.php
namespace StickyNotes;

use StickyNotes\Model\StickyNotesTable;

class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig() {
        return array(
            'factories' => array(
                'StickyNotes\Model\StickyNotesTable' => function(\$sm) {
                    \$dbAdapter = \$sm->get('Zend\Db\Adapter\Adapter');
                    \$table = new StickyNotesTable(\$dbAdapter);
                    return \$table;
                },
            ),
        );
    }
}
";

writeFile($myFile, $contents);



?>