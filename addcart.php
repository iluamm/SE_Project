<?php
session_start();
require_once 'connect.php';
if($_POST['album_id']==""){
	echo "<script>";
	echo "alert('กรุณาเลือกอัลบั้ม');";
	echo "window.history.back();";
	echo "</script>";
}
else{
	if(!isset($_SESSION["intLine"]))    //เช็คว่าแถวเป็นค่าว่างมั๊ย ถ้าว่างให้ทำงานใน {}
	{
		 $_SESSION["intLine"] = 1;
		 $_SESSION["promotion_id"][1] = $_GET["id"];   //รหัสสินค้า
		 $_SESSION["album_id"][1] = $mysqli -> real_escape_string($_POST['album_id']);
		 $_SESSION["order_image"][1] = $_SESSION['file_paths'];
		 print_r($_SESSION["order_image"][1]);
		 unset($_SESSION['file_paths']);
		 header("location:http://localhost/SE_Project/shoppingcart.php");
	}
	else
	{
			 $_SESSION["intLine"] += 1;
			 $intNewLine = $_SESSION["intLine"];
			 $_SESSION["promotion_id"][$intNewLine] = $_GET["id"];
			 $_SESSION["album_id"][$intNewLine] = $mysqli -> real_escape_string($_POST['album_id']);
			 $_SESSION["order_image"][$intNewLine] = $_SESSION['file_paths'];
			 print_r($_SESSION["order_image"][$intNewLine]);
			 unset($_SESSION['file_paths']);
			 header("location:http://localhost/SE_Project/shoppingcart.php");
	}
}

?>