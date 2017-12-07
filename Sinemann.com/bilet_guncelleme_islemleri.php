    <?php
			
			if(@$_POST['bilet_guncelle'])
			{
				$bilet_fiyat=$_POST['bilet_fiyat'];
			    $hizmet_fiyat=$_POST['hizmet_fiyat'];
				$bilet_kayit=$db->prepare("UPDATE bilet_fiyati SET fiyati='".$bilet_fiyat."',hizmet_bedeli='".$hizmet_fiyat."'");
				$bilet_kayit->execute();
			}
			
	?>