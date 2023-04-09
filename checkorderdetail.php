<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/popupstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php")
?>
<?php
 include("footer.php")
?>
<div class="c6">
    <h2 class="">รายการสินค้าที่ต้องตรวจสอบ</h2>
    <table class="t8">
        <tr>
            <th>เลขที่ออเดอร์</th>
            <th>วันที่โอน</th>
            <th>เวลา</th>
            <th>ยอด</th>
            <th>สลิป</th>
            <th colspan="2"></th>
        </tr>

        <?php
            $query = "SELECT * FROM order_detail WHERE order_status='รอการตรวจสอบการชำระเงิน'";
            $result = mysqli_query($mysqli, $query);
            while($row = mysqli_fetch_assoc($result)) {
                $query2 = "SELECT * FROM order_transcript WHERE order_id='".$row['order_id']."'";
                $result2 = mysqli_query($mysqli, $query2);
                $row2 = $result2->fetch_array(MYSQLI_ASSOC);
                echo '<tr>';
                echo '<td>'.$row['order_id'].'</td>';
                echo '<td>'.$row2['t_date'].'</td>';
                echo '<td>'.$row2['t_time'].'</td>';
                echo '<td>'.$row['order_price'].'</td>';
                echo '<td><button class="checkpicButton" onclick="showPopup(\'transcript/'.$row2['t_image'].'\')">ดูรูป</button></td>';
                echo '<td><a href="cancel-transcript.php?id='.$row['order_id'].'" ><input type="submit" class="cancelButton" name="cancel" value="ยกเลิก" /></a></td>';
                echo '<td><a href="confirm-transcript.php?id='.$row['order_id'].'" ><input type="submit" class="confirmButton" name="confirm" value="ยอมรับ" /></a></td>';
                echo '</tr>';
            }
            if(mysqli_num_rows($result)==0){
                echo '
                <tr>
                <td colspan="7" class="fat"> <p class="graytext">ยังไม่มีสินค้าที่ต้องต้องตรวจสอบ</p></td>
                </tr>';
            }
        ?>
    </table>

    <!-- Popup window for displaying images -->
    <div id="popup" class="overlay">
        <div class="popup center">
            <h2>ใบเสร็จการโอนเงิน</h2>
            <a class="close" href="#" onclick="hidePopup()">&times;</a>
            <div class="content">
                <img id="popup-image" src="">
            </div>
        </div>
    </div>

    <script>
        function showPopup(imageUrl) {
        
            // Set the image source of the popup window
            document.getElementById("popup-image").src = imageUrl;

            // Show the popup window
            document.getElementById("popup").style.display = "block";
        }

        function hidePopup() {
            // Hide the popup window
            document.getElementById("popup").style.display = "none";
        }
    </script>

</div>

</body>
</html>