
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Noto+Sans+Thai&display=swap" rel="stylesheet">
<style>

.navbar{
    width: auto;
    border-bottom: 1px solid #D9D9D9;
    display: flex;
    justify-content: space-between;
    font-family: 'Noto Sans Thai', sans-serif;
    padding: 0.5%;
    align-items: center;
}

.navbarmenu{
    display: flex;
    height: 100%;
    align-items: center;
    justify-content: flex-start;
    gap: 8%;
    white-space: nowrap;
}

.navbaruserlist{
    display: flex;
    padding-right: 1rem;
    height: 100%;
    align-items: center;
    justify-content: flex-end;
    gap: 20%;
    white-space: nowrap;
}

.profileicon{
    display: flex;
    height: 100%;
    align-items: center;
    gap: 10%;
}

a:link, a:visited {
    color: black;
    text-decoration: none;
}
a:hover{
    color:red;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
<nav class="navbar">
    <div class="navbarmenu">
        <a href="index-admin.php"><img src="image\Logo.png" width="120rem"></a>
        <div><a href="editproduct1.php">อัลบั้มสอด</a></div>
        <div><a href="editproduct2.php">อัลบั้มกาว</a></div>
        <div><a href="editproduct3.php">อัดรูป</a></div>
        <div><a href="history-admin.php">ประวัติลูกค้า</a></div> 
        <div><a href="checkorderdetail.php">รายการสินค้าที่ต้องตรวจสอบ</a></div>
        <div><a href="checkordersent.php">รายการสินค้าที่ต้องจัดส่ง</a></div>
    </div>
    <div class="navbaruserlist">
        <div class="profileicon">
            <img src="image\Profile.png" width="30rem">
            <?php if(!isset($_SESSION['user_username'])) { ?><a href="login.php">Log in / Sign in </a><?php } ?>
        
            <?php if(isset($_SESSION['user_username'])) { ?>
                <div class="dropdown">
                    <div>Hello! <?php echo $_SESSION['user_username']; ?></div>
                    <div class="dropdown-content">
                        <a href="#p"><p>เพิ่มพนักงาน</p></a>
                        <a href="logout.php"><p>ออกจากระบบ</p></a>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</nav>