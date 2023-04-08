<?php
session_start();
require_once 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/menuliststyle.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
<link rel="stylesheet" href="csscol/popupstyle.css" />
</head>
<body>

<?php
include("navbar-admin.php") //navbar
?>
<?php
 include("footer.php")
?>
<div class="c6">
    <div>
        <img class="bannercrop" src="image\banner.jpg">
    </div>
    <!-- <h1>BANNER!!!</h1> -->
    <h2 class="left">สินค้าแนะนำ</h2>
    

    <div class="menuitemlist">

        <!-- Add recommend -->
        <div>
            <a href="#" onclick="showPopup(this.getAttribute('href'))">
                <div class="addRec">
                    <div class="item">
                        <img src="image\camera.png" width="30rem">
                        <p>เพิ่มสินค้า</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- list -->
        <!-- <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div>

        <div class="menueachitemlist">
            <div class="picturemenu">
                <img src="album\elephant.jpg">
                <a href="#popup2"><button class="btn"><img src="image\bin.png"></button></a>
            </div>
            <div>
                <p>อัลบั้มสอด 3x2 นิ้ว</p>
                <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
            </div>
        </div> -->

        <?php 
        $query2 = "SELECT * FROM recommend";
        $result2 = mysqli_query($mysqli, $query2);
        
        while($row2 = mysqli_fetch_row($result2)) {
            $query3 = "SELECT * FROM promotion WHERE promotion_id='$row2[1]'";
            $result3 = mysqli_query($mysqli, $query3);
            while($row3 = mysqli_fetch_row($result3)){ ?>
                <div class="menueachitemlist">
                    <div class="picturemenu">
                        <img src="promotion/<?php echo $row3[5]; ?>">
                        <button class="btn" onclick="delConfirm('<?php echo $row2[0]; ?>')"><img src="image\bin.png"></button>
                    </div>
                    <div>
                        <p><?php echo $row3[1]." ".$row3[2]." นิ้ว"; ?></p>
                        <p class="graytext">จำนวน <?php echo $row3[3]?> รูป ราคา <?php echo $row3[4]?> บาท</p>
                    </div>
                </div>
            <?php }
        }

        ?>

    </div>

    <div id="popup" class="overlay">
        <div class="popup center">
            <form action="addrecommend.php" method="post" enctype="multipart/from-data">
            <h2>เพิ่มสินค้าแนะนำ</h2>
            <a class="close" href="#" onclick="hidePopup()">&times;</a>
            <div class="content">
                <div class="tt1">
                <?php
                    $query = "SELECT * FROM promotion";
                    $result = mysqli_query($mysqli, $query); ?>
                    <select class="select-addRec" id="mySelect" name="recid" onchange="myFunction()"> 
                    <?php while($row = mysqli_fetch_assoc($result)) { ?> 
                        <option value="" disabled selected hidden>ค้นหาจากไอดี</option>
                        <option value="<?php echo $row['promotion_id']?>"><?php echo $row['promotion_id']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="left padpage">
                    <p class="bold">รายละเอียดสินค้า</p>
                    <p id="demo"></p>
                </div>
                <div class="padpage aa">
                    <input type="hidden">
                    <button class="saveButton">เพิ่มสินค้าแนะนำ</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div id="delConfirm" class="overlay">
        <div class="delConfirm center">
            <h2>ยืนยันการลบสินค้าออกจากรายการแนะนำ</h2>
            <div class="content">
                <span class="bold">รายการที่ลบ : </span><span>อัลบั้มสอด 3x2 นิ้ว</span>
                <div class="bn">
                    <a href=""><button class="delButton">ยกเลิก</button></a>
                    <a href="#" id="myLink" class="nextButton">ลบสินค้า</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<script>
        function myFunction(){
            var x = document.getElementById("mySelect").value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "get_data.php?promotion_id=" + x, true);
            xhttp.send();

        }
        function showPopup() {
            console.log('TEST popup');
            // Show the popup window
            document.getElementById("popup").style.display = "block";
        }

        function hidePopup() {
            // Hide the popup window
            document.getElementById("popup").style.display = "none";
        }
        function delConfirm(rec_id){
            console.log('TEST del',rec_id);
            document.getElementById("delConfirm").style.display = "block";
            var myVariable = "deleterec.php?id=";
            var myValue = rec_id;
            var link = document.getElementById("myLink");
            link.href = myVariable + myValue;
        }

    </script>

</body>

</html>