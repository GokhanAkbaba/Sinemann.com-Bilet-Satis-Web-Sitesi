<div class="alt_menu">
			<div class="sehir" >
				<i class="fa fa-map-marker" style="font-size:36px;margin-top:8px;margin-left:5px;"></i>
				<strong class="sehir_etiket">Şehir</strong>
				<select class="sehir_secme" id="sehir" onchange='f();'>
					 <option value="0">Lütfen İl Seçiniz</option>
						<?php
						////Veri Tabanından şehirleri çekiyoruz.
								include("includes/db.php"); 
								 $sonuc=$db->prepare("
								 SELECT * FROM sehir_bilgisi");
									$sonuc->execute();
								  while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
								  {
									echo "<option value=".$row['id'].">".$row['sehir_adi']."</option>";
								   }
								   $date = date("Y-m-d");
								   
						?>
					<select>

			</div>
			<div class="tarih">
				<i class="fa fa-calendar" style="font-size:24px;margin-left:5px;margin-top:12px;"></i>
				<strong  class="tarih_etiket">Tarih</strong>
				<input class="tarih_secme" type="date" id="tarih" value="<?php echo $date ?>"/>
			</div>
			<div class="salon">
				<i class="fa fa-group" style="font-size:26px;margin-left:2%;margin-top:12px;"></i>
				<strong class="salon_etiket">Salon</strong>
				<select  class="salon_secme"  id="salon" onchange='seans();'>
					<option value="0">Lütfen Salon Seçiniz</option>
				</select>
			</div>
		</div>
		
