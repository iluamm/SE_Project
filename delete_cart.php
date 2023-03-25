<?php
	require_once 'connect.php';
	session_start();
	
	if(isset($_GET["Line"]))
	{
        
		$Line = $_GET["Line"];
		$_SESSION["promotion_id"][$Line] = "";
		$_SESSION["album_id"][$Line] = "";
	}
	header("location:shoppingcart.php");
?>