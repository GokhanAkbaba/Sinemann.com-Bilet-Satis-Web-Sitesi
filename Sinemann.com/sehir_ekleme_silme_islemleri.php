
	<?php
		if(@$_POST["sehir_ekle"])
		{
			$sehir_adi=$_POST['sehir_adi'];
			$sorgu_sehir_kayit=$db->prepare("INSERT INTO sehir_bilgisi(sehir_adi) VALUES ('$sehir_adi')");
			$sorgu_sehir_kayit->execute();
		}
		else if(@$_POST["sehir_silme"])
		{
			$sehir_adi_sil=$_POST['sehir_adi_silme'];
			$sorgu_sehir_sil=$db->prepare("DELETE FROM sehir_bilgisi WHERE id='".$sehir_adi_sil."'");
			$sorgu_sehir_sil->execute();
		}
	?>