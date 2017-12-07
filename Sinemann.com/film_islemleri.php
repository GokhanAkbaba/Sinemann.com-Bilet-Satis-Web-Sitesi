<?php
include("includes/db.php");
session_start();
		$sorgu_film=$db->prepare("SELECT*FROM film_bilgileri");
	   $sorgu_film->execute();
	   $sorgu_sehir=$db->prepare("SELECT*FROM sehir_bilgisi");
	   $sorgu_sehir->execute();
	  if(!isset($_SESSION["login"])){
			echo "Bu Sayfayı Görüntüleme Yetkiniz Yoktur.";
		}
		else
		{
			echo "<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/panel_stil.css'/>
	</head>
	<body>
	<div class='filmler_islemler_govde'>
		<form method='POST' action='panel.php'>
		<center>
			<table>
				<tr>
					<td><p style='color:red'>Film Kayıt İşlemi</p></td>
				</tr>
				<tr>
					<td><p>Oyun Salon Çeşit No</p></td>
					<td><input type='number' name='oyn_salon_cesit_no'></input></td>
				</tr>
				<tr>
					<td><p>Filmin Oynanacağı Şehir</p></td>
					<td>
								<select  class='salon_secme' name='oyn_sehir' id='salon'>";
?>
							<?php
							echo "<option value='-1'>Şehir  Seçiniz</option>";
							while($row=$sorgu_sehir->fetch( PDO::FETCH_ASSOC ))
							{
								
								
									echo "<option value=".$row['id'].">".$row['sehir_adi']."</option>";
							}
							?>
							<?php
							echo "</select>
							</td>
				</tr>
				<tr>
					<td><p>Film Türkçe Ad Giriniz<p></td>
					<td><input type='text' name='film_turkce_ad'></input></td>
				</tr>
				<tr>
					<td><p>Film İngilizce Ad Giriniz</p></td>
					<td><input type='text' name='film_ing_ad'></input></td>
				</tr>
				<tr>
					<td><p>Vizyon Tarihi<p></td>
					<td><input type='date' name='vizyon_tarih'></input></td>
				</tr>
				<tr>
					<td><p>Vizyon Bitiş Tarihi</p></td>
					<td><input type='date' name='vizyon_bitis_tarihi'></input></td>
				</tr>
				<tr>
					<td><p>Film Gösterim Haftası</p></td>
					<td><input type='text' name='gosterim_haftasi'></input></td>
				</tr>
				<tr>
					<td><p>Film Özet</p></td>
					<td><input type='text' name='film_ozet'></input></td>
				</tr>
				<tr>
					<td><p>Yönetmen</p></td>
					<td><input type='text' name='yonetmen'></input></td>
				</tr>
				<tr>
					<td><p>Oyuncular</p></td>
					<td><input type='text' name='oyuncular'></input></td>
				</tr>
				<tr>
					<td><p>Süre</p></td>
					<td><input type='text' name='sure'></input></td>
				</tr>
				<tr>
					<td><p>Tür</p></td>
					<td><input type='text' name='tur'></input></td>
				</tr>
				<tr>
					<td><p>Yaş Sınırı</p></td>
					<td><input type='text' name='sinir'></input></td>
				</tr>
				<tr>
					<td><p>Afis</p></td>
					<td><input type='text' name='afis'></input></td>
				</tr>
				<tr>
					<td><p>Seans Afis</p></td>
					<td><input type='text' name='senas_afis'></input></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type='submit' name='film_kayit' value='Filmi Kaydet'></input></td>
				</tr>
				
			</table>
			
		</form>
		</center>
		<form method='POST' action='panel.php'>
		<center>
			<table>
			<td><p style='color:red'>Film Silme İşlemi</p></td>
				<tr>
					<td><p>Filmin Adı</p></td>
					<td>
								<select  class='salon_secme' name='oyn_sehir' id='salon'>";
								?>
							<?php
							echo "<option value='-1'>Film Seçiniz</option>";
							while($row=$sorgu_film->fetch( PDO::FETCH_ASSOC ))
							{
								
								
									echo "<option value=".$row['film_id'].">".$row['film_turkce_ad']."</option>";
							}
							?>
							<?php
							echo "
							</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type='submit' name='film_sil' value='Filmi Sil'></td>
				</tr>
				
			</table>
			</center>
		</form>
	</div>
	</body>
</html>";}?>