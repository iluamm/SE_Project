<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css" />
<style>
.menuitemlist{
    display: grid;
    grid-template-columns: 20% 20% 20% 20%;
    justify-content: space-evenly;
    row-gap: 3rem;
    /* display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 5%; */
}

.menueachitemlist{
    text-align: center;
}

.picturemenu{
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 100%;
}
.picturemenu img{
    position: absolute;
    width: 100%;
    max-width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    object-fit: contain;
    border-radius: 0%;
}
</style>
</head>

<body>
    <?php
    include("navbar.php")
    ?>
    <div class="contextbox">
        <h3>อัลบั้มสอด</h3>

        <div class="menuitemlist">
            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

            <div class="menueachitemlist">
                <div class="picturemenu">
                    <img src="album\elephant.jpg">
                </div>
                <div>
                    <p>3x2 นิ้ว</p>
                    <p class="graytext">จำนวน 64 รูป ราคา 279 บาท</p>
                </div>
            </div>

        </div>
    </div>
    
</body>
<?php
 include("footer.php")
?>

</html>