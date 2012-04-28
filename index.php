<?php
session_start();
?>
<HTML>
<HEAD>

</HEAD>
<BODY>
<? 
//include 'cyoa.php';

$page = 1;
if (isset($_SESSION['page'])){
	$page = $_SESSION['page'];
}
echo "<hr\>";

//$myCYOA = new CYOA();
//$myCYOA->makePage("yeah man");
//$myCYOA->makePage("aw yeah chemistry yeah");
//$myCYOA->addLink(1, 0, "Go back to start");
//$myCYOA->addLink(0, 1, "Go forth, my child!");

include 'mycyoa.php';

echo "<hr>";
//echo $myCYOA->pageText($page);
//echo "<hr>";
//echo $myCYOA->printLinks($page);
//echo $myCYOA->pages[$page]->linksTo[0]->toString();
echo $myCYOA->printPage($page);
echo "<hr>";


?>
</BODY>
</HTML>
