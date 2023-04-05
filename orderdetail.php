<?php
session_start();
require_once 'connect.php';
$order_id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php")
?>

<div class="padpage">
    <h2>รายละเอียดออเดอร์</h2>
    <table class="t6">
        <tr>
            <th>ลำดับรายการ   </th>
            <th>สินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>
        <?php
        $Total=0;
        $m=0;
        $query = "SELECT * FROM list WHERE order_id='$order_id'";
        $result = mysqli_query($mysqli, $query);
        while($row = mysqli_fetch_assoc($result)){
            $m+=1;
            $sql1 = "SELECT * FROM promotion WHERE promotion_id='".$row['promotion_id']."'";
            $result1 = mysqli_query($mysqli, $sql1); 
            $row1 = $result1 -> fetch_array(MYSQLI_ASSOC);

            $sql2 = "SELECT * FROM album WHERE album_id='".$row['album_id']."'";
            $result2 = mysqli_query($mysqli, $sql2); 
            $row2 = $result2 -> fetch_array(MYSQLI_ASSOC);

            echo '<tr><td>'.$m.'</td>';
            echo '<td><img class="crop-album" src="album/'.$row2['a_image'].'" height="120rem">';
            echo '<td class="left">';
            echo $row1['p_type'];
            echo '<br>ขนาดรูป : '.$row1['pic_size'].' นิ้ว';
            echo '<br>จำนวน : '.$row1['pic_amount'].' รูป';
            echo '<br>ลายอัลบั้ม : '.$row2['a_name'];
            echo '</td>';
            echo '<td>'.$row1['p_price'].' บาท ';
            echo '<a href="downloadpic.php?id='.$row['list_no'].'"><input class="detaButton" type="submit" name="Submit" value="❯" /></input></a>';
            echo '</td></tr>';
            $Total+=$row1['p_price'];
        }
        ?>
        <tr>
            <td colspan="3" class="left">ราคาสินค้าทั้งหมด</td>
            <td class="right"><?php echo $Total; ?> บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ค่าจัดส่ง</td>
            <td class="right">50 บาท</td>
        </tr>
        <tr>
            <td colspan="3" class="left">ราคารวม</td>
            <td class="right"><?php echo $Total+50; ?> บาท</td>
        </tr>
    </table>
    

    <form name="frm"  method="post" action="confirm-sent.php?id=<?php echo $order_id; ?>" enctype="multipart/from-data">
    <div class="c6">
        <h2 class="left">ติดตามสินค้า</h2>

        <table class="t10 left">
            <tr>
                <td>
                    <p class="tt1">เลขพัสดุ : <input class="add" name="c_track" type="text" placeholder="เลขพัสดุ" maxlength="13"/></p>
                    <p class="tt1">จัดส่งโดย : <select class="select-add" name="c_company" id="delivery">
                                    <option value="thaiexpress">ไปรษณีย์ไทย</option>
                                    <option value="kerryexpress">Kerry Express</option>
                                    <option value="lalamove">Lalamove</option>
                                    <option value="flashexpress">Flash Express</option>
                                 </select></p>
                    <p class="tt1">จัดส่งวันที่ : <input class="a1-5" name="c_date" type="date" /></p>
                </td>
            </tr>
            <!-- <tr>
                <td>
                    <p class="bold tt1">ติดตามพัสดุ</p>
                    Kerry Express : ลิงค์
                </td>
            </tr> -->
        </table>
    </div>

    <div class="c6">
    <?php
            $query4 = "SELECT * FROM order_detail WHERE order_id='".$order_id."'";
            $result4 = mysqli_query($mysqli, $query4);
            $row4 = mysqli_fetch_assoc($result4);
            $query5 = "SELECT * FROM user WHERE user_id='".$row4['user_id']."'";
            $result5 = mysqli_query($mysqli, $query5);
            $row5 = mysqli_fetch_assoc($result5);
            ?>
            <h2 class="left">ชื่อผู้รับ ที่อยู่ และเบอร์โทรศัพท์</h2>
            <?php echo $row5['user_name'] ?>
            <br><?php echo $row4['order_address'] ?>
            <br>เบอร์โทรศัพท์ <?php echo $row4['order_phone'] ?>
            <br>&nbsp;
            <br>วันที่สั่ง: <?php echo $row4['order_date'] ?>
        </p>


        <div class="bn">
            <a href="history-admin.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
            <input class="nextButton" type="submit" name="Submit" value="จัดเตรียมสำเร็จ" />
        </div>
    </div>
    </form>
</div>


</body>
<?php
 include("footer.php")
?>
</html>
    