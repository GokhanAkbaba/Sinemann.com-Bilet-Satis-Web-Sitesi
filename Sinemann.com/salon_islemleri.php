<?php
include("includes/db.php");
		session_start();
	   $sorgu_salon=$db->prepare("SELECT*FROM salon_bilgileri");
	   $sorgu_salon->execute();
	   $sorgu_sehir=$db->prepare("SELECT*FROM sehir_bilgisi");
	   $sorgu_sehir->execute();
	   if(!isset($_SESSION['login'])){
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
		<div class='salon_islemler_govde'>
			<form method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red;'>Salon Kayıt İşlemi</p></td>
						</tr>
						<tr>
							<td>
								<p>Şehir : </p>
							</td>
							<td>
								<select  class='salon_secme' name='sehir' id='salon'>";
								
?>
							<?php
							echo "<option value='-1'>Şehir  Seçiniz</option>";
							while($row=$sorgu_sehir->fetch( PDO::FETCH_ASSOC ))
							{
								
								
									echo "<option value=".$row['id'].">".$row['sehir_adi']."</option>";
							}
							?>
							<?php
							echo
							"</select>
							</td>
							
							
						</tr>
						
						<tr>
							<td>
								<p>Salon Adres : </p>
							</td>
							<td>
								<textarea name='adres' rows='3' cols='50' id='salon_adres_ekle'></textarea>
							</td>
							
						</tr>
						<tr>
							<td>
								<p>Salon Adı : </p>
							</td>
							<td>
								<input type='text' name='salon_adi' id='salon_adi_ekle' placeholder='Salon Adını Giriniz'></input>
							</td>
							
						</tr>
						<tr>
							<td>
								<p>Salon Tel : </p>
							</td>
							<td>
								<input type='text' name='salon_tel'  id='salon_tel_ekle' placeholder='Salon Tel Numarasını Giriniz'></input>
							</td>
							<td>
								
							</td>
							
						</tr>
						<tr>
							<td>
								
							</td>
							
							<td>
								
							</td>
							<td>
								<input type='submit' name='sehir_id_ekle' value='Kayıtı Ekle'></input>
							</td>
						</tr>
					</table>
				</center>
			</form>
			<center>
			<form method='POST' action='panel.php' >
			<table>
				<tr>
					<td><p style='color:red'>Salon Silme İşlemi</p></td>
						</tr>
							<tr>
								<td>
									<p>Salon Adı : </p>
								</td>
								<td>
								<select  class='salon_secme'  name='sehir_sil' id='salon'>";
								?>
								<?php
								echo "<option value='-1'>Salon seçiniz</option>";
								while($row=$sorgu_salon->fetch( PDO::FETCH_ASSOC ))
								{
									
									
										echo '<option value='.$row['salon_id'].'>'.$row['salon_adi'].'</option>';
								}
								?>
								<?php
								echo "
								</select>
								</td>
								<td>
									<input type='submit' name='sehir_id_sil' value='Sil'></input>
								</td>
							</tr>
							</table>
							</center>
							</form>
						</div>
					</body>
				</html>";
		}
				?>