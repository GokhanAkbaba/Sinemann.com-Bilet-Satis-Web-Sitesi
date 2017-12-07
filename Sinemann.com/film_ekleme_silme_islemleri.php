	<?php
	if(@$_POST['film_kayit'])
		{
		$oyn_salon_cesit_no=$_POST['oyn_salon_cesit_no'];
		$oyn_sehir=$_POST['oyn_sehir'];
		$film_turkce_ad=$_POST['film_turkce_ad'];
		$film_ing_ad=$_POST['film_ing_ad'];
		$vizyon_tarih=$_POST['vizyon_tarih'];
		$vizyon_bitis_tarihi=$_POST['vizyon_bitis_tarihi'];
		$gosterim_haftasi=$_POST['gosterim_haftasi'];
		$film_ozet=$_POST['film_ozet'];
		$yonetmen=$_POST['yonetmen'];
		$oyuncular=$_POST['oyuncular'];
		$sure=$_POST['sure'];
		$tur=$_POST['tur'];
		$sinir=$_POST['sinir'];
		$afis=$_POST['afis'];
		$senas_afis=$_POST['senas_afis'];
		$film_ekleme=$db->prepare("INSERT INTO film_bilgileri(oyn_salon_cesit_no,oyn_sehir_id,film_turkce_ad,film_ing_ad,vizyon_tarihi, vizyon_bitis_tarih,gosterim_haftasi,film_ozet,yonetmen,oyuncular,sure,tur,sinir,afis,seans_afis) 
		VALUES ('$oyn_salon_cesit_no','$oyn_sehir','$film_turkce_ad','$film_ing_ad','$vizyon_tarih','$vizyon_bitis_tarihi','$gosterim_haftasi',
		'$film_ozet','$yonetmen','$oyuncular','$sure','$tur','$sinir','$afis','$senas_afis')");
		$film_ekleme->execute();
		}
		if(@$_POST['film_sil'])
		{
			$oyn_sehir=$_POST['oyn_sehir'];
			$film_silme=$db->prepare("DELETE FROM film_bilgileri WHERE film_id='".$oyn_sehir."'");
		    $film_silme->execute();
		}
	?>