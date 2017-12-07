<meta charset="utf-8"/>
<?php
include("includes/db.php");
	 $sehir=$_POST['sehir'];
	 $tarih=$_POST['tarih'];
	 $salon=$_POST['salon'];
	$sonuc=$db->prepare("SELECT*FROM salon_bilgileri where salon_id='".$salon."'");
	   $sonuc->execute();
	 
	   $sorgu=$db->prepare("select FB.oyn_salon_cesit_no,FB.seans_afis,FB.gosterim_haftasi,FB.film_ing_ad,FB.gosterim_haftasi,FB.oyn_sehir_id,FB.film_id,FB.film_turkce_ad,FB.vizyon_tarihi,FB.vizyon_bitis_tarih,SB.salon_adi from film_bilgileri as FB join salon_bilgileri as SB on SB.salon_id=FB.oyn_sehir_id
where '".$tarih."'>`vizyon_tarihi` and '".$tarih."'<`vizyon_bitis_tarih` and `oyn_sehir_id`='".$salon."'");
	   $sorgu->execute();
	  
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Salon Sonuçları</title>
			
		<link rel="stylesheet" type="text/css" href="css_ana.css"/>
	</head>
	<body>
		<div class="ana_govde">
			<div class="sinema_adres">
			<?php
			
			while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
		        {
				echo "<h2>".$row['salon_adi']."</h2>";
				echo "<p><strong>Adres : </strong>".$row['salon_adres']."</p>";
			 
				echo "<p><strong>Telefon : </strong>".$row['salon_tel']."</p>";
				}
			?>
			</div>
			<div class='seans_baslik'>
				<h2>Seanslar</h2>
			</div>
				<?php 
				while($row=$sorgu->fetch( PDO::FETCH_ASSOC ))
				{
				?>
			       <div class='salon_bilgisi_govde'>
								<?php echo"<div class='kucuk_afis'>
								     <img  src='".$row['seans_afis']."' />
								</div>";?>
								<div class='seans_bilgisi'>
								
									<h2 style='margin-left:10px;margin-top:5px;'><?php echo $row['film_turkce_ad'] ; ?></h2>
									<h4 style='margin-left:10px;margin-top:-15px;'><?php echo $row['film_ing_ad'] ; ?></h4>
									<h3 style='margin-left:10px;margin-top:-15px;'><?php echo $row['salon_adi'] ; ?></h3>
									<h5 style='margin-left:10px;margin-top:-15px;'><?php echo $row['gosterim_haftasi'] ; ?></h5>
									<div class='seans_saatleri'>
										<ul class='seanslar'>
										<?php	
												$sonuc_saat=$db->prepare("select saat from seans where salon_cesit_no=".$row['oyn_salon_cesit_no']);
												$sonuc_saat->execute();
												while($saat_row=$sonuc_saat->fetch( PDO::FETCH_ASSOC ))
												{
											?>
											<li class='saat'><a href='koltuk_secimi.php?saat=<?php echo $saat_row['saat'];?>&salon=<?php echo $salon; ?>&tarih=<?php echo $tarih; ?>&film=<?php echo $row['film_id']; ?>' class='seans_saatleri_buton'><span style='margin-left:35px;'><?php echo $saat_row['saat'];?></span></a></li>
												<?php
												}
												?>
										</ul>
										<div style='clear:both'></div>
										</div>
									</div>
								</div>
				<?php 
				}
				?>
		<div style="clear:both"></div>
		</div>
	</body>
</html>