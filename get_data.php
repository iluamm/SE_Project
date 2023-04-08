<?php
    session_start();
    require_once 'connect.php';
  $promotion_id = $_GET['promotion_id'];
  $query = "SELECT * FROM promotion WHERE promotion_id='$promotion_id'";
  $result = mysqli_query($mysqli, $query);
  while ($row = mysqli_fetch_assoc($result)) {
  echo "<p>ประเภท : " . $row['p_type'] . "</p>";
  echo "<p>ขนาด :" . $row['pic_size'] . "  นิ้ว</p>";
  echo "<p>จำนวนรูป : " . $row['pic_amount'] . " รูป</p>";
  }
?>