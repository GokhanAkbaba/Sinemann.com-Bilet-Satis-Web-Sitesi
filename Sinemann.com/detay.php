	<?php include("includes/baglanti.php"); 
		  include("includes/header.php"); 
		  include("includes/db.php"); 
		  $id=$_GET['id'];
		    $sonuc=$db->prepare("SELECT * FROM film_bilgileri where film_id ='".$id."'");
	   $sonuc->execute();
		  ?>
		<div class="detay_govde">
		<?php
			    while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
					{
			echo '<div class="afis">
			<img src="'.$row['afis'].'"/>
			</div>
			
				<div class="film_baslik_turkce">
					<h1 style="margin-left:25px;margin-top:8px">'.$row['film_turkce_ad'].'</h1>
					<h3 style="margin-left:25px;margin-top:-15px">'.$row['film_ing_ad'].'</h3>
					<p style="margin-left:25px;margin-top:-10px">Vizyon Tarihi<strong style="margin:5px">'.$row['vizyon_tarihi'].'</strong></p>
				</div>
				<div class="film_ozet">
					<p style="margin-left:12px">'.$row['film_ozet'].'</p>
					<div class="yonetmen">
					<p style="text-align:center;margin-top:2px"><strong>Yonetmen</strong></p>
					<p style="text-align:center;margin-top:-8px">'.$row['yonetmen'].'</p>
					</div>
					<div class="oyuncular">
						<p style="text-align:center;margin-top:2px"><strong>Oyuncular</strong></p>
						<p style="text-align:center;margin-top:-8px">'.$row['oyuncular'].'</p>
					</div>
					<div class="tur_sure">
						<p style="text-align:center;margin-top:2px"><strong>Süre</strong></p>
						<p style="text-align:center;margin-top:-9px">'.$row['sure'].'</p>
						<p style="text-align:center;margin-top:-6px"><strong>Tür</strong></p>
						<p style="text-align:center;margin-top:-8px">'.$row['tur'].'</p>
					</div>
				</div>
				
				<div class="detay_bilet_alim">
					<a href="index.php" class="detay_bilet_alim_buton">Bilet Al</a>
				</div>
					 ';
					}
					?>
			<div style="clear:both;"></div>
					
		
		</div>
	<?php include("includes/footer.php"); ?>
	