         <?php
       include("includes/db.php");
	    session_start();
       $sorgu_sehir=$db->prepare("SELECT*FROM salon_bilgileri");
	   $sorgu_sehir->execute();
	   $sorgu_sehir_=$db->prepare("SELECT*FROM salon_bilgileri");
	   $sorgu_sehir_->execute();
		if(!isset($_SESSION["login"])){
		echo "Bu sayfayı görüntüleme yetkiniz yoktur.";
		}
		else
		{
		echo "<!DOCTYPE html>
<html>
	<head>
		<link rel='stylesheet' type='text/css' href='css/panel_stil.css'/>
	</head>
	<body>
		<div class='koltuk_islemler_govde'>
			<form  method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red' >Koltuk Kayıt İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Koltuğun Ekleneceği Salon Seçiniz</p></td>
							<td>
									<select  class='salon_secme' name='salon_sec' id='salon'>";
	?>
									<?php
									echo "<option value='-1'>Şehir  Seçiniz</option>";
									while($row=$sorgu_sehir->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['salon_id'].'>'.$row['salon_adi'].'</option>';
									}
									?>
									<?php
									echo "
									</select>
							</td>
				        </tr>
						<tr>
							<td><p>Koltuk Sıra Adı</p></td>
							<td><input type='text' name='koltuk_sira_adi' placeholder='Koltuk Sıra Adı'></input></td>
						</tr>
						<tr>
							<td><p>Koltuk Sayısı</p></td>
							<td><input type='text' name='sira_sayisi_koltuk' placeholder='Koltuk Sıra Sayısı'></input></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type='submit' name='koltuk_kaydet' value='Koltuk Kaydet'></input></td>
						</tr>
					
			</form>
			<form  method='POST' action='panel.php'>
				        <tr>
							<td><p style='color:red' >Koltuk Kayıt Güncelleme</p><td>
						</tr>
						<tr>
							<td><p>Koltuğun Güncelleneceği Salonu Seçiniz</p></td>
							<td>
									<select  class='salon_secme' name='salon_sec_guncelle' id='salon'>";
									?>
									<?php
									echo "<option value='-1'>Şehir  Seçiniz</option>";
									while($row=$sorgu_sehir_->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['salon_id'].'>'.$row['salon_adi'].'</option>';
									}
									?>
									
									<?php
									echo "</select>
							</td>
				        </tr>
						<tr>
							<td><p>Koltuk Sıra Adı</p></td>
							<td><input type='text' name='koltuk_sira_adi_guncelle' placeholder='Koltuk Sıra Adı'></input></td>
						</tr>
						<tr>
							<td><p>Koltuk Sayısı</p></td>
							<td><input type='text' name='koltuk_sira_sayisi' placeholder='Koltuk Sıra Sayısı'></input></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type='submit' name='koltuk_guncelle' value='Koltuk Sayısını Güncelle'></input></td>
						</tr>
				
			</form>
			</table>
				</center>
		</div>
	</body>
		</html>";}?>
