<?php
    session_start();
    require_once 'connect.php';
    $user_id = $_SESSION["user_id"];
    $query = "SELECT * FROM user WHERE user_id='$user_id'";
    $result = mysqli_query($mysqli, $query);
        while ($fetch = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="c6">
    <div class="padpage">
        <h2>แก้โปรไฟล์ (Profile)</h2>

        <div class="addressbox">
            เบอร์โทรศัพท์ (Phone number)
            <br><dd>09x-xxx-xxxx</dd>
        </div>
        <form name="frm"  method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/from-data">
        <div class="addressbox">
            <p>ชื่อ-นามสกุล (Firstname - Lastname)
            <br><input type="text" class="common" name ="user_name" value="<?php echo $fetch['user_name'];?>"/>
        </div>
        
        <div class="addressbox">
            <p>ที่อยู่ (Address)
            <br><input type="text" class="a10" name ="user_address" value="<?php echo $fetch['user_address'];?>"/>
        </div>

        <div align="right">
            <input type="submit" class="saveButton" name="editconfirm" value="บันทึกการเปลี่ยนแปลง"  /></a>
        </div>
        </form>
    </div>
</div>

<?php 
if(isset($_POST['editconfirm'])){

    $name = $_POST['user_name'];
    $_SESSION["user_name"] = $name;
    $address = $_POST['user_address'];

    $sql = "UPDATE user SET user_name = '$name', user_address = '$address'
    WHERE user_id = '$user_id'";
    $objQuery = $mysqli -> query($sql); 
    header( "location: http://localhost/SE_Project/profile.php" );
}
?>

</body>
<?php
 include("footer.php")
?>
</html>

<?php } ?>