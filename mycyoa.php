<?php
include 'cyoa.php';

//build array of pages.
//page text is stored in corresponding directory content
//./content/1.txt is the text for 1.

$myCYOA = new CYOA();

$i = 0;
while ($loadedText = file_get_contents("./contents/" . $i . ".txt")){
//	$loadedText = file_get_contents("./contents/" . $i . ".txt");
	$loadedText = str_replace("\n", "<br>\n", $loadedText);
	$myCYOA->makePage($loadedText);
	$i++;
}

//Page 0 Links
$myCYOA->addLink(0, 1, "Alright, let's DO IT");

//Page 1 Links
$myCYOA->addLink(1, 2, "AW YISS THAT'S THE GOOD SHIT");
$myCYOA->addLink(1, 0, "This is too scary >.<");

//Page 2 Links


?>
