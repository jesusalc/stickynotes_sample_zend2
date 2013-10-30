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

$myFile = "../public/css/StickyNotes.css";

touch($myFile);  //Touch the file linux style and create it

$contents = "/** /public/css/StickyNotes.css */
@import url(http://fonts.googleapis.com/css?family=Gloria+Hallelujah);

* { box-sizing:border-box; }

body { background:url(http://subtlepatterns.com/patterns/little_pluses.png) #cacaca;}

#sticky-notes {
    float: left;
}
#create, textarea  {
    float:left;
    padding:25px 25px 40px;
    margin:0 20px 20px 0;
    width:250px;
    height:250px;
}

#create {
    user-select:none;
    padding:20px;
    border-radius:20px;
    text-align:center;
    border:15px solid rgba(0,0,0,0.1);
    cursor:pointer;
    color:rgba(0,0,0,0.1);
    font:220px \"Helvetica\", sans-serif;
    line-height:185px;
}

#create:hover { border-color:rgba(0,0,0,0.2); color:rgba(0,0,0,0.2); }

textarea {
    font:20px 'Gloria Hallelujah', cursive;
    line-height:1.5;
    border:0;
    border-radius:3px;
    background: linear-gradient(#F9EFAF, #F7E98D);
    background: -webkit-linear-gradient(#F9EFAF, #F7E98D);
    box-shadow:0 4px 6px rgba(0,0,0,0.1);
    overflow:hidden;
    transition:box-shadow 0.5s ease;
    transition:-webkit-box-shadow 0.5s ease;
    font-smoothing:subpixel-antialiased;
    max-width:520px;
    max-height:250px;
}
textarea:hover { box-shadow:0 5px 8px rgba(0,0,0,0.15); }
textarea:focus { box-shadow:0 5px 12px rgba(0,0,0,0.2); outline:none; }

.delete-sticky{
    float: left;
    margin: 5px 0 0 -35px;
    display: none;
}
a.delete-sticky {
    color: red;
}
.sticky-note{
    float: left;
}
.sticky-note:hover .delete-sticky{
    display: block;
}
.clear-both {
    clear: both;
}
";

writeFile($myFile, $contents);



?>