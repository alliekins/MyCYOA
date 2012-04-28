<?php
session_start();
if (isset($_GET['page'])) {
	$_SESSION['page'] = $_GET['page'];
} 
header('Location: index.php');
?>
