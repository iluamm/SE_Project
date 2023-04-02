<?php
session_start();
require_once 'connect.php';
$user_id = $_GET['id'];
$query1 = "SELECT * FROM user WHERE user_id='$user_id'";
$result1 = mysqli_query($mysqli, $query1);
$row1 = mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
<style>
input.search{
    width:100%;
    height:2rem;
    border: none;
}

.searchbox{
    margin-bottom: 2.5%;
}

.search{
    width: 100%;
    position: relative;
    display: flex;
    outline: none;
    border: 1px solid #8f8f8f;
    border-radius: 1rem;
}

.search img{
    width: 3rem;
    height: 3rem;
    padding: 0.5rem;
}
</style>

</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<div class="c6">
    <div class="padpage">
        <h2 class="left">ค้นหาประวัติลูกค้า</h2>
        <form method="post" action="find-cus.php" enctype="multipart/form-data">
            <div class="warpborder">
                <img src="image\search.png">
                <input class="withicon" name="user_phone" placeholder="ค้นหา" />
            </div>
            <input class="nextButton" name="find"type="submit">
        </form>

        <div class="addressbox">
            <br>เบอร์โทร
            <br><input type="text" class="common" value="<?php echo $row1['user_phone']; ?>" readonly/>
        </div>

        <div class="addressbox">
            <p>Firstname - Lastname
            <br><input type="text" class="common" value="<?php echo $row1['user_name']; ?>" readonly/>
        </div>
        
        <div class="addressbox">
            <p>Address
            <br><input type="text" class="a8" value="<?php echo $row1['user_address']; ?>" readonly/>
        </div>

    </div>
</div>

<div class="padpage25">
    <h2 class="left">ประวัติการสั่งซื้อ</h2>
</div>
<table class="t5">
    <tr>
        <th>เลขที่ออเดอร์</th>
        <th>วันที่สั่ง</th>
        <th>ราคาออเดอร์</th>
        <th>สถานะออเดอร์</th>
        <th></th>
    </tr>
    <?php
        $query2 = "SELECT * FROM order_detail WHERE user_id='".$user_id."'";
        $result2 = mysqli_query($mysqli, $query2);
        while($row2 = mysqli_fetch_assoc($result2)) {
            echo '<tr>';
            echo '<td>'.$row2['order_id'].'</td>';
            echo '<td>'.$row2['order_date'].'</td>';
            echo '<td>'.$row2['order_price'].'</td>';
            echo '<td>'.$row2['order_status'].'</td>';

            if($row2['order_status']=='รอการชำระเงิน'){
            echo '<td><a href="checkorder2.php?id='.$row2['order_id'].'"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>';
            }else{
            echo '<td><a href="checkorder2.php?id='.$row2['order_id'].'"><input type="submit" class="detailCheckButton" name="Submit" value="รายละเอียด" /></a></td>';
            }
            echo '</tr>';
        }
        if(mysqli_num_rows($result2)==0){
            echo '
            <tr>
            <td colspan="7" class="fat"> <p class="graytext">ยังไม่มีสินค้าที่เคยทำการสั่ง</p></td>
            </tr>';
        }
    ?>
</table>
<h6>&nbsp;</h6>
</body>
    <?php
    include("footer.php")
    ?>
</html>