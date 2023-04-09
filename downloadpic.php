<?php
session_start();
require_once 'connect.php';
$list_no=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
</head>
<body>

<?php
if($_SESSION["user_type"]=="customer"){ include("navbar.php");}
else{include("navbar-admin.php");}
?>
<div class="c6">

<?php
if($_SESSION["user_type"]=="customer"){ echo '<h2>รูปที่อัพโหลด</h2>'; ?>
<?php }else{echo '<h2>ดาวน์โหลดรูปภาพ</h2>';} ?>

    <div class="menuitemlist">

        <?php 
        $query = "SELECT * FROM order_image WHERE list_no='".$list_no."'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_assoc($result)){
            echo '<div class="DLeachitemlist">';
            echo '<div class="picturemenu">';
            if($_SESSION["user_type"]=="admin"){
            echo '<a href="uploads/'.$row['img_name'].'" download>';
            echo '<img src="uploads/'.$row['img_name'].'" >';
            echo '</a>';
            }else{
            echo '<img src="uploads/'.$row['img_name'].'" >';
            }
            echo '</div>';
            echo '</div>';
        }
        ?>

        <?php if (!empty($_SESSION['order_image'][$list_no])):
            ?>
                <?php foreach ($_SESSION['order_image'][$list_no] as $index2 => $file_path2): ;?> 
                    <div class="DLeachitemlist">
                        <div class="picturemenu">
                        <img src="<?php echo $file_path2; ?>" alt="Uploaded file" >
                        </div>
                    </div>
                <?php endforeach; ?>
        <?php endif; ?>

    </div>


    <div class="bn">
        <?php if($_SESSION["user_type"]=="admin"){ ?>
            <a href="javascript:history.back()"><button class="backButton">ยกเลิก</button></a>
        <?php }else{ ?>
            <a href="javascript:history.back()"><button class="backButton">ย้อนกลับ</button></a>
        <?php } ?>
    </div>
</div>
    
    
</body>
<?php
 include("footer.php")
?>

</html>