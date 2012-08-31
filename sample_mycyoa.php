<?php
include 'cyoa.php';

//build array of pages.
//page text is stored in corresponding directory content
//./content/1.txt is the text for 1.

$myCYOA = new CYOA();

$i = 0;
while ($loadedText = file_get_contents("./{YOUR DIRECTORY OF PAGES HERE}/" . $i . ".txt")){
//	$loadedText = file_get_contents("./contents/" . $i . ".txt");
	$loadedText = str_replace("\n", "<br>\n", $loadedText);
	$myCYOA->makePage($loadedText);
	$i++;
}

//Now add your links between pages here using the $myCYOA->addLink function 
//$myCYOA->addLink({page link goes on}, {page to link to}, "{link text}");



?>
