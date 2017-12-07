	<?php 
	include("includes/header.php");
	include("includes/db.php");

	$salon=$_GET['salon'];
		$film=$_GET['film'];
		$tarih=$_GET['tarih'];
		$saat=$_GET['saat'];
         $sorgu=$db->prepare("select FB.film_turkce_ad,SB.salon_adi from film_bilgileri as FB join salon_bilgileri as SB on FB.oyn_sehir_id=SB.salon_id
		 where salon_id='".$salon."' and film_id='".$film."'");
	     $sorgu->execute();
		 $sorgu_=$db->prepare("select FB.film_turkce_ad,SB.salon_adi from film_bilgileri as FB join salon_bilgileri as SB on FB.oyn_sehir_id=SB.salon_id
		 where salon_id='".$salon."' and film_id='".$film."'");
	     $sorgu_->execute();
		 $bilet_fiyat_sorgu=$db->prepare("select*from bilet_fiyati");
		 $bilet_fiyat_sorgu->execute();
		 
	if(@$_POST["gonder"])
	{
		$ad=$_POST["ad"];
		$soyad=$_POST["soyad"];
		$tel=$_POST["tel"];
		$mail=$_POST["mail"];
		$kart=$_POST["kart"];
		$kartNO=$_POST["kart_no"];
		$s_tarih=$_POST["s_tarih"];
		$cv=$_POST["cv"];
		
	
		$musteri_sorgu=$db->prepare("insert into musteri_bilgisi set film_id=?,adi=?,soyadi=?,tel=?,mail=?,kart_uzerindeki_ad=?,kart_no=?,s_tarih=?,cv=?");
				$musteri_sorgu->execute(array($film,$ad,$soyad,$tel,$mail,$kart,$kartNO,$s_tarih,$cv));
			
		foreach ($_POST["deger"] as $key => $id)
		{
				$kayit_sorgu=$db->prepare("insert into rezervasyon set film_id=?,salon_id=?,seans_saati=?,seans_tarih=?,seans_koltuk=?");
				$kayit_sorgu->execute(array($film,$salon,$saat,$tarih,$id));
			
				
		}
		
		
	}
	
	?>   
	<form method="POST" action="odeme.php?salon=<?php echo $salon;?>&film=<?php echo $film; ?>&tarih=<?php echo $tarih; ?>&saat=<?php echo $saat; ?>">
		<div class="odeme_body">
			<div class="sol">
				<div class="biletler">
				<div class="bilet_tipi_baslik">
					<i class="fa fa-ticket" style="font-size:36px;position:relative;left:2px;top:8px;color:#49ba8e;"></i>
					<strong style="left:3px;position:relative;font-size:24px;top:5px;color:#49ba8e;">BİLET TİPİ SEÇİMİ </strong>
				</div>
				<h1 style="position:fixed;margin-left:70%;color:red">Bu Çalışma Bir ÖDEVDİR</h1>
				<div class="bilet_tipi_bolumu">
					<table class="bilet_secim_tablo">
							<tr>
								<td class="koltuk_no">Koltuklar</td>
								<td class="koltuk_tipi">
									<div class="secim">
										<div class="secilen_koltuklar">
										
										<?php 
										if(@$_POST['gonder']){
											
											echo "<h4>SATIN ALINMA İŞLEMİ BAŞARIYLA TAMAMLANDI</h4>";
											while($row_=$sorgu_->fetch( PDO::FETCH_ASSOC ))
											{
												$iletimiz="Salonun Adı :".$row_['salon_adi']."</br>
												Filmin Adı : ".$row_['film_turkce_ad']." </br>
												Tarih : ".$_GET['tarih']." </br>
												Saat : ".$_GET['saat'].""; 
												if( mail($mail,"Billet Bilgileri", $iletimiz) ) {  
												echo ' Bilet Hakkında Bilgileriniz e-posta adresinize gönderildi.';  
												} 
											
											}
										}
										
											  
											$konu = "Satın Aldığınız Bilet Bilgileri"; 
											
											
										$sayac=0;
										 if (@$_POST["bilet"]) {
													foreach ($_POST["deger"] as $key => $id) 
													{
														$sayac++;
														echo "<div class='secilen-koltuk' value='".$id."'>".$id."<input type='hidden'  name='deger[]' value='".$id."'/></div>";
														
													}
										 }
										 ?>
										 <div style="clear:both"></div>
									</div>
								</td>
							 </tr>
					</table>
				</div>
				</div>
				<div class="kisi_bilgi">
					<div class="bilet_tipi_baslik">
						<i class="fa fa-user" style="font-size:36px;position:relative;left:5px;top:8px;color:#49ba8e;"></i>
						<strong style="left:7px;position:relative;font-size:24px;top:5px;color:#49ba8e;">İLETİŞİM BİLGİLERİ </strong>
					</div>
					<div class="iletisim_bilgi">
						<label>Adınız</label>
						<input name="ad" type="text" required="true" placeholder="Adınız"></input>
					</div>
					<div class="iletisim_bilgi">
						<label>Soyadınız</label>
						<input name="soyad" type="text" required="true" placeholder="Soyadınız"></input>
					</div>
					<div class="iletisim_bilgi">
						<label>Telefon Numaranız</label>
					  <input type="text" class="input"  id="phone-input" name="tel" maxlength="14" ></input>
					</div>
					<div class="iletisim_bilgi">
						<label>E-Posta Adresiniz</label>
						<input name="mail" type="email" placeholder="E-Posta" required="true"></input>
					</div>
					<div style="clear:both"></div>
				</div>
				<div class="odeme">
					<div class="bilet_tipi_baslik">
						<i class="fa fa-credit-card" style="font-size:36px;position:relative;left:5px;top:8px;color:#49ba8e;"></i>
						<strong style="left:7px;position:relative;font-size:24px;top:5px;color:#49ba8e;">KREDİ VEYA BANKA KARTI İLE ÖDEME</strong>
					</div>
					<div class="kredi_bilgi">
					<label>Kart Üzerindeki İsim</label>
					<input name="kart" type="text" placeholder="Kart Üzerindeki İsim" required="true"></input>
					</div>
					<div class="kredi_bilgi">
					<label>Kart Numarası</label>
					<input type="text" class="input" name="kart_no" id="credit-input" maxlength="19" required="true"></input>
					</div>
					<div class="kredi_bilgi">
					<label>Son Kullanma Tarihi</label>
						<input name="s_tarih" type="text" placeholder="Son Kullanma Tarihi"></input>
					</div>
					<div class="kredi_guven">
					<label>Güvenlik Kodu</label>
						<input name="cv" type="text" placeholder="Güvenlik Kodu" maxlength="4" required="true"></input>
					</div>
					<div class="kredi_onay">
						<input type="submit" name="gonder" value="Ödeme Yap"></input>
					</div>
				</div>
			</div>
					<div class="hesap">
						<div class="hesap_ic">
						<?php 
							while($row=$sorgu->fetch( PDO::FETCH_ASSOC ))
							{
						?>
							<h2 style="margin-top:5px;margin-left:30px;">ÖDEME DETAYLARI</h2>
							<p><strong>Film Adı -><?php echo $row['film_turkce_ad']; ?></strong></p>
							<p>Salon Adı - ><?php echo $row['salon_adi']; ?></p>
							<p>Tarih -> <?php echo $_GET['tarih']; ?></p>
							<p>Saat -> <?php echo $_GET['saat']; ?></p>
							<?php
							}
							?>
						</div>
						<div class="hesap_dis">
						<?php 
						if(isset($_POST['ogrenci']))
						{
							    $hesap=15*$sayac;
								$toplam=$hesap;
							echo "<p style='margin-top:1px;margin-left:15px;'>Bilet Bedeli</p>
							<div class='bilet_bedeli'>".$hesap."TL</div>
							<p  style='margin-left:15px'>Hizmet Bedeli</p>
							<div class='bilet_bedeli'>0 TL</div>
							<p style='margin-left:15px;margin-top:40px;font-weight:bold'>Toplam</p>
							<div class='bilet_bedeli'>".$toplam."TL</div>";
						} 
						else
						{
							while($row=$bilet_fiyat_sorgu->fetch( PDO::FETCH_ASSOC ))
							{
								$hesap=$row['fiyati']*$sayac;
								$toplam=$hesap+$row['hizmet_bedeli'];
								
								
						?>
							<p style="margin-top:1px;margin-left:15px;">Bilet Bedeli</p>
							<div class="bilet_bedeli"><?php echo $hesap ?> TL</div>
							<p  style="margin-left:15px">Hizmet Bedeli</p>
							<div class="bilet_bedeli"><?php echo $row['hizmet_bedeli']; ?> TL</div>
							<p style="margin-left:15px;margin-top:40px;font-weight:bold">Toplam</p>
							<div class="bilet_bedeli"><?php echo $toplam ?> TL</div>
							<?php 
							}
							}
						?>
						</div>
					</div>
				<div style="clear:both;"></div>
		</div>
	</form>
	<script type="text/javascript">
      var creditInput = document.getElementById('credit-input');
      if (creditInput) {
        new Formatter(creditInput, {
            'pattern': '{{9999}}-{{9999}}-{{9999}}-{{9999}}'
        });
      }
      var phoneInput = document.getElementById('phone-input');
      if (creditInput) {
        new Formatter(phoneInput, {
            'pattern': '({{999}}) {{999}}.{{9999}}',
            'persistent': true
        });
      }
    
</script>
	<?php include("includes/footer.php"); ?>