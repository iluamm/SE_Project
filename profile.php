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
        <h2>โปรไฟล์ (Profile)</h2>

        <div class="addressbox">
            เบอร์โทรศัพท์ (Phone number)
            <br><dd>09x-xxx-xxxx</dd>
        </div>

        <div class="addressbox">
            <p>ชื่อ-นามสกุล (Firstname - Lastname)
            <br><input type="text" class="common" value="<?php echo $fetch['user_name'];?>" readonly/>
        </div>
        
        <div class="addressbox">
            <p>ที่อยู่ (Address)
            <br><input type="text" class="a10" value="<?php echo $fetch['user_address'];?>" readonly/>
        </div>
        <?php } ?>
        <div align="right">
            <a href="editprofile.php"><input type="submit" class="editButton" name="editconfirm" value="แก้ไขโปรไฟล์"  /></a>
        </div>

    </div>
</div>


</body>
<?php
 include("footer.php")
?>
</html>
