<?php
	include("includes/db.php");
	$value=$_POST["value"];
	
		$sonuc=$db->prepare("SELECT*FROM film_bilgileri WHERE film_turkce_ad LIKE '%$value%'");
	    $sonuc->execute();
		 if($sonuc->rowCount())
		 {
			 $row=$sonuc->fetchAll( PDO::FETCH_ASSOC );
			 foreach($row as $arama)
			 {
				 $film_turkce_ad=$arama['film_turkce_ad'];
				 $id =$arama['film_id'];
				echo "<a class='arama_link' href='detay.php?id=".$id."'><div class='arama_icerik'>".$film_turkce_ad."</div></a><br/>";
			 }
		 }
	
		 else
		 {
			 echo "Film Bulunamadı !";
		 }
		 
?>