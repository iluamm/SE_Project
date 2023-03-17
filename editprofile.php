<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
</head>
<body>

<?php
include("navbar.php")
?>


<div class="padpage">


<h2>แก้โปรไฟล์ (Profile)</h2>

<br>เบอร์โทรศัพท์ (Phone number)
<br><dd>09x-xxx-xxxx</dd>

<br>ชื่อ-นามสกุล (Firstname - Lastname)
<br><input style="width:20%;height:2rem;" type="text"value="phone" />

<br>ที่อยู่ (Address)
<br><input style="width:50%;height:10rem;" type="text"value="phone" />

<br><a href="profile.php"><button>บันทึกการเปลี่ยนแปลง</button></a>


</div>



</body>
<?php
 include("footer.php")
?>
</html>