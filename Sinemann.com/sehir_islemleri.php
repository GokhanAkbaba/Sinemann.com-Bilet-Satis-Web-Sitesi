<?php
       include('includes/db.php');
	   session_start();
	   $sorgu_sehir=$db->prepare('SELECT*FROM sehir_bilgisi');
	   $sorgu_sehir->execute();
	   if(!isset($_SESSION['login']))
	   {
		  echo 'Bu Sayfayı Görüntüleme Yetkiniz Yoktur.';
	   }
	   else
	   {
		   echo "
<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/panel_stil.css'/>
	</head>
	<body>
		<div class='bilet_islemler_govde'>
			<form method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red' >Şehir Ekleme İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Şehir Adı</p></td>
							<td><input style='text' name='sehir_adi'></input></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='sehir_ekle' value='Şehir Ekle'></input></td>
						</tr>
					</table>
				</center>
			</form>
			<form method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red' >Şehir Silme İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Silme</p></td>
							<td>
								<select  class='sehir_adi_sil_id'  name='sehir_adi_silme' id='salon'>";
								?>
								<?php
								echo "<option value='-1'>Şehir Seçiniz</option>";
								while($row=$sorgu_sehir->fetch( PDO::FETCH_ASSOC ))
								{
									
									
										echo '<option value='.$row['id'].'>'.$row['sehir_adi'].'</option>';
								}
								?>
								<?php
								echo "
								</select>
								</td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='sehir_silme' value='Şehir Sil'></input></td>
						</tr>
					</table>
				</center>
			</form>
		</div>
	</body>
</html>";
	   }
?>