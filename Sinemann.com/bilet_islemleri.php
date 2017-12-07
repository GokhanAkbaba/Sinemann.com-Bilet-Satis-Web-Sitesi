<?php
include("includes/db.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
}
else
{

echo '<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/panel_stil.css"/>
	</head>
	<body>
		<div class="bilet_islemler_govde">
			<form method="POST" action="panel.php">
				<center>
					<table>
						<tr>
							<td><p style="color:red" >Bilet Fiyat İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Bilet Fiyatı</p></td>
							<td><input style="text" name="bilet_fiyat"></input></td>
						</tr>
						<tr>
							<td><p>Hizmet Bedeli</p></td>
							<td><input style="text" name="hizmet_fiyat"></input></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="bilet_guncelle" value="Bilet Fiyatlarını Güncelle"></input></td>
						</tr>
					</table>
				</center>
			</form>
		</div>
	</body>
</html>';
}
?>