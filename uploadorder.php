<?php
session_start();
require_once 'connect.php';
$promotion_id = $_GET['id'];
$query = "SELECT * FROM promotion WHERE promotion_id = '".$promotion_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="csscol/style.css" />
<link rel="stylesheet" href="csscol/buttonstyle.css" />
<link rel="stylesheet" href="csscol/tablestyle.css" />
<link rel="stylesheet" href="csscol/inputstyle.css" />
<link rel="stylesheet" href="csscol/choicestyle.css" />
</head>
<body>

<?php
include("navbar.php")
?>

<div class="c5">
    <h2 class="left">-กรุณาอัพโหลดรูปภาพ-</h2>
    <table class="t10">
        <tr>
            <td>
                <div class="tt1" align="center">
                    <label for="image" class="label-upload" >
                        <div class="warpupload">
                            <p class="graytext">Select file to upload</p>
                            <img src="image\upload.png" width="30rem">
                            <input class="custom-upload" type="file" name="image" id="image"/>
                        </div>
                    </label>
                </div>
                
                <p>
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
                <img src="album/elephant.jpg" height="120rem">
            </td>
        </tr>
    </table>

    <h2 class="left">-เลือกลายอัลบั้ม-</h2>

    <div class="albumlist">

        <?php
            $query2 = "SELECT * FROM album WHERE a_type='$row[1]'";
            $result2 = mysqli_query($mysqli, $query2);
            while($row2 = mysqli_fetch_row($result2)) {
                echo "<div class='bchoice'>";
                echo "<label class='in-choice'>";
                echo "<input type='radio' id='album' name='album' value='album'>";
                echo "<div class='center'>";
                echo "<img src='album/$row2[3]' height='120rem'>";
                echo "<p>$row2[2]</p>";
                echo "</div>";
                echo "</label>";
                echo "</div>";
            }
        ?>
    <!-- <div class="albumlist">
        <div class="bchoice">
            <label class="in-choice">
                <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="album/elephant.jpg" height="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div>

        <div class="bchoice">
            <label class="in-choice">
                <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="image/banner1.jpg" height="120rem" width="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div>

        <div class="bchoice">
            <label class="in-choice">
                    <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="image/banner2.jpg" height="120rem" width="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div>

        <div class="bchoice">
            <label class="in-choice">
                    <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="album/elephant.jpg" height="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div>

        <div class="bchoice">
            <label class="in-choice">
                    <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="album/elephant.jpg" height="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div>

        <div class="bchoice">
            <label class="in-choice">
                    <input type="radio" id="album" name="album" value="album">
                <div class="center">
                    <img src="album/elephant.jpg" height="120rem">
                    <p>Red</p>
                </div>
            </label>
        </div> -->

    </div>
    

    <div class="bn">
        <a href="orderproduct.php"><input class="backButton" type="submit" name="Submit" value="ย้อนกลับ" /></a>
        <a href="shoppingcart.php"><input class="nextButton" type="submit" name="Submit" value="ถัดไป" /></a>
    </div>
        
</div>

</body>
<?php
 include("footer.php")
?>
</html>