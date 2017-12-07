<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış Yaptınız. Giriş Bölümüne Yönlendiriliyorsunuz";
header("Refresh: 2; url=panel_giris.php");
ob_end_flush();
?>