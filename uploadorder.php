    <?php
session_start();
require_once 'connect.php';
$promotion_id = $_GET['id'];
$query = "SELECT * FROM promotion WHERE promotion_id = '".$promotion_id."'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_row($result);


$max_files = (int)$row[3];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file_paths = $_SESSION['file_paths'] ?? [];
    $num_files_uploaded = count($file_paths);

    // Loop through the uploaded files
    for ($i = 0; $i < $max_files-$num_files_uploaded; $i++) {
        if (isset($_FILES['file']['name'][$i])) {
            $file_name = $_FILES['file']['name'][$i];
            $file_tmp = $_FILES['file']['tmp_name'][$i];
            $file_error = $_FILES['file']['error'][$i];

            // Check if the file is uploaded successfully
            if ($file_error === UPLOAD_ERR_OK) {
                $new_file_name = uniqid() . '.jpg';
                $file_path = 'uploads/' . $new_file_name;
                if (move_uploaded_file($file_tmp, $file_path)) {
                    $file_paths[] = $file_path;
                }
            }
        }
    }

    $_SESSION['file_paths'] = $file_paths;
    header("Refresh:0");
}

if (isset($_GET['remove']) && is_numeric($_GET['remove'])) {
    $index = $_GET['remove'];
    $file_paths = $_SESSION['file_paths'] ?? [];
    if (isset($file_paths[$index])) {
        unlink($file_paths[$index]);
        unset($file_paths[$index]);
        $_SESSION['file_paths'] = $file_paths;
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}


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
    <!-- <form action="addcart.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data"> -->
    <h2 class="left">-กรุณาอัพโหลดรูปภาพ-</h2>
    <table class="t10 tt1">
        <tr>
            <td>
                <form method="POST" enctype="multipart/form-data">
                <div class="tt1" align="center">
                    <label class="label-upload" >
                        <div class="uploadbox">
                            <div class="warpupload">
                                <p class="graytext">Select file to upload</p>
                                <img src="image\upload.png" width="30rem">
                                <input class="custom-upload" type="file" name="file[]" id="file" multiple accept=".jpg,.jpeg,.png">
                            </div>
                            
                            <!-- <input type="file" name="file[]" id="file" multiple accept=".jpg,.jpeg,.png"> -->
                            <input type="submit" class="confirmButton" value="อัพโหลดรูป">
                        </div>
                    </label>
                    
                </div>
                </form>
                <p class="aa red">*อัพโหลดรูปได้สูงสุด <?php echo $row[3]; ?> รูป</p>
                <div class="uploadlist">
                    
                    <!-- <img src="album/elephant.jpg" height="120rem"> -->
                    <?php if (!empty($_SESSION['file_paths'])): ?>
                        <?php foreach ($_SESSION['file_paths'] as $index => $file_path): ?>
                        <div class="upload-pic">
                            <img src="<?php echo $file_path; ?>" alt="Uploaded file" height="120rem">
                            <form method="GET">
                                <input type="hidden" name="remove" value="<?php echo $index; ?>">
                                <button class="btn" type="submit">✖</button>
                            </form>
                        </div>
                        
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
    </table>

    <form action="addcart.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data">
    <?php if($row[1]!='อัดรูป'){ ?>
    <h2 class="left">-เลือกลายอัลบั้ม-</h2>

    <div class="albumlist">

        <?php
            $query2 = "SELECT * FROM album WHERE a_type='$row[1]'";
            $result2 = mysqli_query($mysqli, $query2);
            while($row2 = $result2 -> fetch_array(MYSQLI_ASSOC)) {
                echo "<div class='bchoice'>";
                echo "<label class='in-choice'>";
                echo "<input type='radio' id='album_id' name='album_id' value='$row2[album_id]'>";
                echo "<div class='center'>";
                echo "<img class='crop-album' src='album/$row2[a_image]' height='120rem'>";
                echo "<p>$row2[a_name]</p>";
                echo "</div>";
                echo "</label>";
                echo "</div>";
            }
        ?>

    </div>
    <?php }else{
        echo '<input type="hidden" name="album_id" value="0">';
    } ?>
    

    <div class="bn">
        <a class="backButton" href="orderproduct.php?id=<?php echo $row[0] ?>">ย้อนกลับ</a>
        <a href="addcart.php"><input class="nextButton" type="submit" name="Submit" value="ถัดไป" /></a>
    </div>
        
</div>

</body>
<?php
 include("footer.php")
?>
</html>