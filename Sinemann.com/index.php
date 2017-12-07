
	<?php 
	include("includes/header.php"); 
	include("includes/alt_menu.php");
    include("includes/db.php"); 
	$sonuc=$db->prepare("SELECT * FROM film_bilgileri order by film_id desc");
	$sonuc->execute();
	   ?>
	   
		<div class="orta_menu">
			<?php
			    while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
					{
						echo "<div class='film_alan'>
									<div class='film_resim'> <img src='".$row['afis']."'/>
									</div>";
						echo "<p><a href='detay.php?id=".$row['film_id']."' title='Film Hakkında Detaylı Bilgi İçin Tıklayın'
									class='eventName'>".$row['film_turkce_ad']."</a></p>";
									echo "<a href='detay.php?id=".$row['film_id']."' title='".$row['film_turkce_ad']." Bilet Al' class='koltuksec' >BİLET AL</a>
								</div>";
										
					}
			?>
		
			<div style="clear:both"></div>
		</div>
		
		<?php include("includes/footer.php"); ?>