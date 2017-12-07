<?php
	include("includes/db.php");
	session_start();
	ob_start();
	if(@$_POST['giris'])
	{
		$kullanici=$_POST['adi'];
		$sifre=$_POST['sifre'];
		
			$sorgu=$db->prepare("select*from admin_paneli");
			$sorgu->execute();
				
		while($row=$sorgu->fetch(PDO::FETCH_ASSOC))
			{
				
				if(($kullanici==$row['kullanici_adi'])and ($sifre==$row['kullanici_sifresi']))
					{
					$_SESSION["login"]="true";
					$_SESSION["user"]=$row['kullanici_adi'];
					$_SESSION["pass"]=$row['kullanici_sifresi'];
					header("Location:panel.php");
					}
				else
					{
					
					 header("Refresh:2;panel_giris.php");
					 echo "Kullancı Adı veya Şifre Yanlış.<br>";
					 echo "Giriş sayfasına yönlendiriliyorsunuz.";
					
					}
			}
	}
	ob_end_flush();
?>