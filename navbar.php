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

a:link, a:visited {
    color: black;
    text-decoration: none;
}
a:hover{
    color:red;
}

</style>
<nav class="navbar">
    <div class="navbarmenu">
        <a href="index.php"><img src="image\Logo.png" width="120rem"></a>
        <div><a href="orderproduct1.php">อัลบั้มสอด</a></div>
        <div><a href="orderproduct2.php">อัลบั้มกาว</a></div>
        <div><a href="orderproduct3.php">อัดรูป</a></div> 
    </div>
    <div class="navbaruserlist">
        <div class="profileicon">
            <?php if(!isset($_SESSION['user_username'])) { ?>
                <a href="login.php"><img src="image\Profile.png" width="30rem"></a>
                <a href="login.php">Log in / Sign in </a><?php } ?>
        </div>

        <div class="profileicon">
            <a href="#shoppingcart"><img src="image\shopping-cart.png" width="25rem"></a>
        </div>

        <div><?php if(isset($_SESSION['user_username'])) { ?>Hello! <?php echo $_SESSION['user_username']; } ?></div>
        <div><?php if(isset($_SESSION['user_username'])) { ?><a href="logout.php" class="linkstyle">ออกจากระบบ</a><?php } ?></div>
    </div>
</nav>