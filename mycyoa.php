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
$myCYOA->addLink(1, 2, "Your head colliding with some dusty cobblestones");
//$myCYOA->addLink(1, 3, "Being thrown into a wall");
$myCYOA->addLink(1, 4, "Nothing");

//Page 2 links
$myCYOA->addLink(2, 5, "Explain that you were merely hungry, and ask the jailer for some food.");
$myCYOA->addLink(2, 6, "Suggest the jailer's mother's 'honest job' is that of courtesanship.");
$myCYOA->addLink(2, 7, "Say nothing.");

//page 3 links
//$myCYOA->addLink(pg, lk, "");
//$myCYOA->addLink(pg, lk, "");
//$myCYOA->addLink(pg, lk, "");

//page 4 links
$myCYOA->addLink(4, 8, "\"You're no Cinderella either, cupcake!\"");
$myCYOA->addLink(4, 7, "Say nothing.");

//page 5 links
$myCYOA->addLink(5, 9, "Begin to cry.");
$myCYOA->addLink(5, 6, "Suggest the jailer's mother is a prostitute.");

//page 6 links
$myCYOA->addLink(6, 10, "\"Is that the size your mom's used to?\"");
$myCYOA->addLink(6, 11, "\"Listen, I don't want any trouble.\"");
$myCYOA->addLink(6, 9, "\"I'm sorry, man, I'm just having a terrible day...\"");

//page 7 links
$myCYOA->addLink(7, 15, "Continue...");

//page 8 links
$myCYOA->addLink(8, 11, "\"Listen, I don't want any trouble.\"");
$myCYOA->addLink(8, 6, "Suggest his dad was hideous and his mom was for sale.");

//page 9 links
$myCYOA->addLink(9, 0, "THE END");

//page 10 links
$myCYOA->addLink(10, 12, "Apologize.");
$myCYOA->addLink(10, 14, "Fight back.");

//page 11 links
$myCYOA->addLink(11, 15, "Continue...");

//page 12 links
$myCYOA->addLink(12, 13, "Tackle him.");
$myCYOA->addLink(12, 11, "Let him go.");

//page 13 links
$myCYOA->addLink(13, 0, "THE END");

//page 14 links
$myCYOA->addLink(14, 13, "Continue...");

//page 15 links
$myCYOA->addLink(15, 0, "THE END");

//$myCYOA->addLink(pg, lk, "");



?>
