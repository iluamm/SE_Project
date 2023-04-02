<?php
require_once 'connect.php';

$album_id = $_GET['id'];
$query = "SELECT * FROM album WHERE album_id = '".$album_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
chown("album/$row[3]",666);
$flgDelete = unlink("album/$row[3]");
    $query = "DELETE FROM album WHERE album_id='$album_id'";
    $objQuery = $mysqli -> query($query);
    echo "<script>";
    echo "alert('ลบสำเร็จ');";
    echo "window.history.back();";
    echo "</script>";
?>