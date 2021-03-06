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

$myFile = "../module/StickyNotes/src/StickyNotes/Model/Entity/StickyNote.php";

touch($myFile);  //Touch the file linux style and create it

$contents = "<?php
// module/StickyNotes/src/StickyNotes/Model/Entity/StickyNote.php

namespace StickyNotes\Model\Entity;

class StickyNote {

    protected \$_id;
    protected \$_note;
    protected \$_created;

    public function __construct(array \$options = null) {
        if (is_array(\$options)) {
            \$this->setOptions(\$options);
        }
    }

    public function __set(\$name, \$value) {
        \$method = 'set' . \$name;
        if (!method_exists(\$this, \$method)) {
            throw new Exception('Invalid Method');
        }
        \$this->\$method(\$value);
    }

    public function __get(\$name) {
        \$method = 'get' . \$name;
        if (!method_exists(\$this, \$method)) {
            throw new Exception('Invalid Method');
        }
        return \$this->\$method();
    }

    public function setOptions(array \$options) {
        \$methods = get_class_methods(\$this);
        foreach (\$options as \$key => \$value) {
            \$method = 'set' . ucfirst(\$key);
            if (in_array(\$method, \$methods)) {
                \$this->\$method(\$value);
            }
        }
        return \$this;
    }

    public function getId() {
        return \$this->_id;
    }

    public function setId(\$id) {
        \$this->_id = \$id;
        return \$this;
    }

    public function getNote() {
        return \$this->_note;
    }

    public function setNote(\$note) {
        \$this->_note = \$note;
        return \$this;
    }

    public function getCreated() {
        return \$this->_created;
    }

    public function setCreated(\$created) {
        \$this->_created = \$created;
        return \$this;
    }

}
";

writeFile($myFile, $contents);



?>