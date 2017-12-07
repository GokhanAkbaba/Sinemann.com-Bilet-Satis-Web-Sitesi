<?php
       include('includes/db.php');
	   session_start();
       $sorgu_sehir=$db->prepare('SELECT distinct salon_cesit_no FROM seans ');
	   $sorgu_sehir->execute();
	   $sorgu_sehir_saat=$db->prepare('SELECT*FROM seans ');
	   $sorgu_sehir_saat->execute();
	   $sorgu_sehir1=$db->prepare('SELECT distinct salon_cesit_no FROM seans ');
	   $sorgu_sehir1->execute();
	   $sorgu_sehir_saat1=$db->prepare('SELECT*FROM seans ');
	   $sorgu_sehir_saat1->execute();
	   if(!isset($_SESSION['login']))
	   {
		   echo 'Bu Sayfayı Görüntüleme Yetkiniz Yoktur.';
	   }
	   else
	   {
		   echo"<!DOCTYPE html>
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
							<td><p style='color:red' >Seans Saat Ekleme İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Salon Çeşit No</p></td>
							<td><input style='text' name='salon_cesit_no'></input></td>
						</tr>
						<tr>
							<td><p>Seans Saati</p></td>
							<td><input style='text' name='seans_saati'></input></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='seans_ekle' value='Seans Ekle'></input></td>
						</tr>
					</table>
				</center>
			</form>
				<form  method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red' >Seans Saat Silme İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Seansın Silineceği Salon Çeşit No </p></td>
							<td>
									<select  class='secme' name='silinecek_salon_cesit_no' id='salon'>";
									?>
									<?php
									echo "<option value='-1'>Salon Çeşit No Seçiniz</option>";
									while($row=$sorgu_sehir->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['salon_cesit_no'].'>'.$row['salon_cesit_no'].'</option>';
									}
									?>
									<?php
									echo "</select>
							</td>
				        </tr>
						<tr>
							<td><p>Silincek Seans Saat </p></td>
							<td>
									<select  class='saati_sec_seans' name='silincek_saat'>";
									?>
									<?php
									echo "<option value='-1'>Saati Seçiniz</option>";
									while($row=$sorgu_sehir_saat->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['seans_id'].'>'.$row['saat'].'</option>';
									}
									?>
									<?php
									echo "
									</select>
							</td>
				        </tr>
						<tr>
							<td></td>
							<td><input type='submit' name='seans_sil' value='Seans Sil'></input></td>
						</tr>
					</table>
				</center>
			</form>
			<form name= method='POST' action='panel.php'>
				<center>
					<table>
						<tr>
							<td><p style='color:red' >Seans Saat Güncelleme İşlemleri</p><td>
						</tr>
						<tr>
							<td><p>Seansın Güncelleneceği Salon Çeşit No </p></td>
							<td>
							
									<select  class='secme' name='salon_cesit_no' id='salon'>";
									?>
									<?php
									
									echo "<option value='-1'>Salon Çeşit No Seçiniz</option>";
									while($row=$sorgu_sehir1->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['salon_cesit_no'].'>'.$row['salon_cesit_no'].'</option>';
									}
									
									?>
									<?php
									echo "
									</select>
							</td>
				        </tr>
						<tr>
							<td><p>Seansın Güncelleneceği Saat </p></td>
							<td>
									<select  class='saati_sec_seans' name='silincek_saat'>";
									?>
									<?php
									echo "<option value='-1'>Saati Seçiniz</option>";
									while($row=$sorgu_sehir_saat1->fetch( PDO::FETCH_ASSOC ))
									{
										
										
											echo '<option value='.$row['seans_id'].'>'.$row['saat'].'</option>';
									}
									?>
									<?php
									echo "
									</select>
							</td>
				        </tr>
						<tr>
							<td><p>Seans Saati</p></td>
							<td><input style='text' name='yeni_seans_saati'></input></td>
						</tr>
						<tr>
							<td></td>
							<td><input type='submit' name='seans_guncelle' value='Seans Saati Güncelle'></input></td>
						</tr>
					</table>
				</center>
			</form>
		</div>
	</body>
	   </html>";}?>