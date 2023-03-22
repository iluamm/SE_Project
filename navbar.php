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
    background: white;
}


.navbarmenu{
    display: flex;
    height: 100%;
    align-items: center;
    justify-content: flex-start;
    gap: 20%;
    white-space: nowrap;
}

.navbaruserlist{
    display: flex;
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

.navbar a:link, a:visited {
    color: black;
    text-decoration: none;
}
.navbar a:hover{
    color: red;
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
    <!-- left -->
    <div class="navbarmenu">
        <a href="index.php"><img src ="image\Logo.png" width="120rem"></a>
        <div><a href="orderproduct1.php">อัลบั้มสอด</a></div>
        <div><a href="orderproduct2.php">อัลบั้มกาว</a></div>
        <div><a href="orderproduct3.php">อัดรูป</a></div> 
    </div>

    <!-- right -->
    <div class="navbaruserlist">
        <div class="profileicon">
            <?php if(!isset($_SESSION['user_username'])) { ?>
                <a href="login.php"><img src="image\Profile.png" width="30rem"></a>
                <a href="login.php">Log in / Sign in </a>
            <?php } ?>
        

            <?php if(isset($_SESSION['user_username'])) { ?>
                <a href="profile.php"><img src="image\Profile.png" width="30rem"></a>
                <div class="dropdown">
                Hello! 
                <?php echo $_SESSION['user_username']; ?>
                <div class="dropdown-content">
                    <a href="profile.php"><p>บัญชีของฉัน</p></a>
                    <a href="history.php"><p>ประวัติการสั่งซื้อ</p></a>
                    <a href="logout.php"><p>ออกจากระบบ</p></a>
                </div>
            <?php } ?>
        </div>
        
        <?php if(!isset($_SESSION['user_username'])) { ?>
        <div class="profileicon">
            <a href="login.php"><img src="image\shopping-cart.png" width="25rem"></a>
        </div>
        <?php } ?>

        <?php if(isset($_SESSION['user_username'])) { ?>
        <div class="profileicon">
            <a href="shoppingcart.php"><img src="image\shopping-cart.png" width="25rem"></a>
        </div>
        <?php } ?>

    </div>
</nav>