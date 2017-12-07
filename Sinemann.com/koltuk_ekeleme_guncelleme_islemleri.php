<?php
			
			if(@$_POST['koltuk_kaydet'])
			{
				$salon_sec=$_POST['salon_sec'];
				$koltuk_sira_adi=$_POST['koltuk_sira_adi'];
				$sira_sayisi_koltuk=$_POST['sira_sayisi_koltuk'];
				$koltuk_kayit=$db->prepare("INSERT INTO koltuk(salon_id,sira_adi,koltuk_sayisi) VALUES('$salon_sec','$koltuk_sira_adi','$sira_sayisi_koltuk')");
				$koltuk_kayit->execute();
				
			}
		   if(@$_POST['koltuk_guncelle'])
			{
			$koltuk_sira_sayisi=$_POST['koltuk_sira_sayisi'];
			$koltuk_sira_adi_guncelle=$_POST['koltuk_sira_adi_guncelle'];
			$salon_sec_guncelle=$_POST['salon_sec_guncelle'];
			$koltuk_guncelle=$db->prepare("UPDATE koltuk SET koltuk_sayisi='".$koltuk_sira_sayisi."' WHERE salon_id='".$salon_sec_guncelle."' and sira_adi='".$koltuk_sira_adi_guncelle."'");
		    $koltuk_guncelle->execute();
			}
		?>