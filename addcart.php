<?php
session_start();
require_once 'connect.php';

if(!isset($_SESSION["intLine"]))    //เช็คว่าแถวเป็นค่าว่างมั๊ย ถ้าว่างให้ทำงานใน {}
{
	 $_SESSION["intLine"] = 1;
	 $_SESSION["promotion_id"][1] = $_GET["id"];   //รหัสสินค้า
     $_SESSION["album_id"][1] = $mysqli -> real_escape_string($_POST['album_id']);
	 header("location:http://localhost/SE_Project/shoppingcart.php");
}
else
{
		 $_SESSION["intLine"] += 1;
		 $intNewLine = $_SESSION["intLine"];
		 $_SESSION["promotion_id"][$intNewLine] = $_GET["id"];
         $_SESSION["album_id"][$intNewLine] = $mysqli -> real_escape_string($_POST['album_id']);
	 header("location:http://localhost/SE_Project/shoppingcart.php");
}
?>