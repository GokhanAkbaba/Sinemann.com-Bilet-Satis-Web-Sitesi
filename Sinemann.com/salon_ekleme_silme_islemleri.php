<?php
		
		if(@$_POST["sehir_id_ekle"])
		{
			$salon=$_POST['salon_adi'];
			$sehir=$_POST['sehir'];
			$adres=$_POST['adres'];
			$salon_adi=$_POST['salon_adi'];
			$salon_tel=$_POST['salon_tel'];
			 $sorgu_kayıt=$db->prepare("INSERT INTO salon_bilgileri( sehir_id, salon_adres, salon_adi, salon_tel) VALUES ('$sehir','$adres','$salon_adi','$salon_tel')");
			 $sorgu_kayıt->execute();
			
		}
		else if(@$_POST['sehir_id_sil'])
		{
			$sehir_id_sil=$_POST['sehir_sil'];
			 $sorgu_sil=$db->prepare("delete from salon_bilgileri where salon_id='".$sehir_id_sil."'");
			 $sorgu_sil->execute();
		}
	?>