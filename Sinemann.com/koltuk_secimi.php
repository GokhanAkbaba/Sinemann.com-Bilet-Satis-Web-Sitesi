	<?php include("includes/header.php"); 
	include("includes/db.php");
		$salon=$_GET['salon'];
		$film=$_GET['film'];
		$tarih=$_GET['tarih'];
		$saat=$_GET['saat'];
		$sonuc=$db->prepare("SELECT FB.film_turkce_ad,SB.salon_adi FROM salon_bilgileri as SB join film_bilgileri as FB on SB.salon_id=FB.oyn_sehir_id where salon_id='".$salon."' and film_id='".$film."'");
	   $sonuc->execute();
	   $sorgu=$db->prepare("select*from koltuk where salon_id='".$salon."'");
	   $sorgu->execute();
	   $sorgu_mus=$db->prepare("select*from rezervasyon where salon_id='".$salon."' and seans_tarih='".$_GET['tarih']."' and seans_saati='".$_GET['saat']."'");
	   $sorgu_mus->execute();
	   
		 
	?>
	<form method="POST"  action="odeme.php?salon=<?php echo $salon;?>&film=<?php echo $film; ?>&tarih=<?php echo $tarih; ?>&saat=<?php echo $saat; ?>">
		<script>
		$(function(){
			$(".koltuk_sira_isim").click(   function(){
				var koltuk=$(this).attr("class");
				var classlar =koltuk.split(" ");
				var id=$(this).attr("id");
				for(var i=0;i< classlar.length;i++)
				{
					if(classlar[i]=="secili_koltuk")
					{
						$(this).removeClass("secili_koltuk");
						$(this).addClass("secilir_koltuk");
						var koltuklar =$(".secilen-koltuk");
						for(var j=0;j<koltuklar.length;j++)
						{
							var value =$(koltuklar[j]).attr("value");
							if(value == id)
							{
								koltuklar[j].remove();
								break;
							}
						}
						return;
					}
					if(classlar[i]=="dolu_koltuk")
					{
						return;
					}
				}
				$(this).attr("class","koltuk_sira_isim secili_koltuk");
				var secilenKoltuk="<div class='secilen-koltuk' value='"+id+"'>"+id+"<input type='hidden'  name='deger[]' value='"+id+"'/></div>"
				$(".secilen_koltuklar").prepend(secilenKoltuk);
				
			});
		});
	</script>
			<div class="govde">
			<?php 
				while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
				{
				?>
				<div class="koltuk_bilgi_govde">
					<h1 style="text-align:center;color:white">Koltuk Seçimi</h1>
					<p style="color:#49ba8e;font-size:23px;text-align:center"><?php echo $row['film_turkce_ad']; ?></p>
					<p style="font-size:20px;text-align:center;color:#777;">Tarih -><?php echo ($_GET['tarih']);?></p>
					<h3 style="text-align:center;color:#777;">Salon Adı-> <?php echo $row['salon_adi'] ;?> </h3>
					<p style="text-align:center;color:#777;"><input type="checkbox"  name="ogrenci">ÖĞRENCİ</input></p>
					
				</div>
				<?php
				}
				?>
										
				<div class="secilen_koltuklar">
					
				<div style="clear:both"></div>
				</div>
				<div class="perde_govde">
					<div class="perde">
						<span style="position:relative;top:25px;left:500px;font-size:20px">Perde</span>
					</div>
				</div>
				<div class="koltuk_govde">
						<table class="koltuk_sira">
						                
							<?php
							
							
							$row_mus=$sorgu_mus->fetchAll( );
							$doluKoltukSayisi =$sorgu_mus->rowCount();
							
								while($row=$sorgu->fetch( PDO::FETCH_ASSOC ))
								{
									
							?>
								<tr>
									<th class='koltuk_bas'>
										<div><?php echo $row['sira_adi']; ?></div>
									</th>
										<?php
										
											$sayi=0;
											$numara=0;
												
											while($sayi<=$row['koltuk_sayisi'])
											{ 
												$row['koltuk_sayisi']--;
												$numara++;
											$i = 0;
												$arr_leng = count($row_mus);
												
										?>
										<td class='koltuk_sira_isim <?php
										foreach($row_mus as $row_mus_yes)
										{
											if(($row['sira_adi'].$numara ==$row_mus_yes['seans_koltuk']))
											{
												echo "dolu_koltuk";break;
											}
											else
											{
												if( ++$i === $arr_leng) 
												{
													echo "secilir_koltuk";
												}
											}
										}
										if($doluKoltukSayisi == 0)
										{
											echo "secilir_koltuk";
										}
										?>' id="<?php echo $row['sira_adi'].$numara; ?>" >
												<div style="font-size:15px;color:white;"><?php echo $numara ?></div>
										</td>
										<?php
												
												
											}
											
				                        ?>
								</tr>
						    <?php
								
								}
							?>	
						</table>
					
				</div>
				<div class="koltuk_durum_gostergesi">
					<ul class="koltuk_durum_gostergesi_liste">
						<li>
							<label>
								<div class="gosterge_bos"></div>
								<span style="float:left; margin-top:-19px;margin-left:26px;">Boş Koltuklar</span>
							</label>
						</li>
						<li>
							<label>
								<div class="gosterge_dolu"></div>
								<span style="float:left; margin-top:-19px;margin-left:26px;">Dolu Koltuklar</span>
							</label>
						</li>
						<li>
							<label>
								<div class="gosterge_secimin"></div>
								<span style="float:left;  margin-top:-19px;margin-left:26px;">Seçtiğiniz Koltuk</span>
							</label>
						</li>
					</ul>
					<div style="clear:both"></div>
				</div>
				<div class="koltuk_secim_onay">
				 <input type="submit" value="Devam Et" name="bilet" class='koltuk_secim_onay_butonu'></input>
				           			
 				</div>
				
			</div>
			</form>
	<?php include("includes/footer.php"); ?>