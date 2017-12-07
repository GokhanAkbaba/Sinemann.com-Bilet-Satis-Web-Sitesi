<?php
		if(@$_POST['seans_guncelle'])
		{
			$salon_cesit_no=$_POST['salon_cesit_no'];
			$guncellenecek_saat=$_POST['guncellenecek_saat'];
			$yeni_seans_saati=$_POST['yeni_seans_saati'];
			$seans_saati_guncelleme=$db->prepare("UPDATE seans SET saat='".$yeni_seans_saati."' WHERE salon_cesit_no='".$salon_cesit_no."' and seans_id='".$guncellenecek_saat."'");
			$seans_saati_guncelleme->execute();
		}
		if(@$_POST['seans_sil'])
		{
			$silinecek_salon_cesit_no=$_POST['silinecek_salon_cesit_no'];
			$silincek_saat=$_POST['silincek_saat'];
			$seans_saati_silme=$db->prepare("DELETE FROM seans WHERE salon_cesit_no='".$silinecek_salon_cesit_no."' and seans_id='".$silincek_saat."'");
			$seans_saati_silme->execute();
		}
		if(@$_POST['seans_ekle'])
		{
			$salon_cesit_no=$_POST['salon_cesit_no'];
			$seans_saati=$_POST['seans_saati'];
			$seans_saati_ekleme=$db->prepare("INSERT INTO seans(salon_cesit_no,saat) VALUES ('$salon_cesit_no','$seans_saati')");
			$seans_saati_ekleme->execute();
		}
	?>