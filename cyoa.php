<?php

//a CYOA adventure page.
class Page
{
	//page text
	public $text;
	//array of pagelinks to display at the end
	public $linksTo;
	public $pictureUrl;

	function addLink($num, $text) {
		$this->linksTo[] = new PageLink($num, $text);
	}

	function printLinks() {
		$outstr = "";
		for ($i=0; $i < count($this->linksTo); $i++) {
			$outstr .= $this->linksTo[$i]->toString();
		}
		if (count($this->linksTo)==0) {
			$endPage = new PageLink(0, "Error: end of story. Go home.");
			$outstr .= $endPage->toString();
		}
		return $outstr;
	}

	function toString() {
		return $this->imgString() . $this->text . "<br>\n" .	$this->printLinks();
	}

	function imgString() {
		if (isset($this->pictureUrl)) {
			return "<img src=" . $this->pictureUrl . "><br>\n";
		} else {
			return "";
		}
	}

}

//represents a link at the bottom of a page.
class PageLink
{
	//text to display
	public $text;
	//page to link to
	public $pageLinked;

	function __construct($numPage, $textThing){
		$this->text = $textThing;
		$this->pageLinked = $numPage;
	}

	function toString() {
		$outstr = "<a href='changepage.php?page="; 
		$outstr .= $this->pageLinked . "'>";
		$outstr .= $this->text . "</a><br>\n";
		return $outstr;
	}
}

class CYOA
{
	public $pages;

	function __construct() {
		$this->pages = array();
	}

	function makePage($pagetext){
		$thepage = new Page();
		$thepage->text = $pagetext;
		$this->pages[] = $thepage;
		return $thepage;
	}

	function getPage($pageNum) {
		return $this->pages[$pageNum];
	}
	
	function addLink($pagenum, $linkedTo, $linkText) {
		if (isset($this->pages[$pagenum])) {
			$this->pages[$pagenum]->addLink($linkedTo, $linkText);
		}
	}

	function pageText($pagenum) {
		if (isset($this->pages[$pagenum])) {
			return $this->pages[$pagenum]->text;
		} else {
			return "ERROR: Page " . $pagenum . " does not exist.";	
		}
	}

	function printLinks($pagenum) {
		if (isset($this->pages[$pagenum])) {
			return $this->pages[$pagenum]->printLinks();
		} else {
			return "ERROR: Page " . $pagenum . " does not exist.";
		}
	}

	function printPage($pagenum) {
		if (isset($this->pages[$pagenum])) {
			return "Page " . $pagenum . "<hr>" . $this->pages[$pagenum]->toString();
		} else {
			return "ERROR: Page " . $pagenum . " does not exist." . 
				"<br><a href=changepage?page=0>Go Home</a>";
		}
	}

}

?>
