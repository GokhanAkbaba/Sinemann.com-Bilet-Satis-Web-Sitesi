<?php
include("includes/db.php");
	if(strtolower($_SERVER["HTTP_CONNECTION"]) !="xmlhttprequest")
	{
		
		$sehir=$_GET['veri'];
		 $sonuc=$db->prepare("select salon_id,salon_adi from salon_bilgileri where sehir_id='".$sehir."'");
	     $sonuc->execute();
		
		echo "<option value='-1'>Salon seçiniz</option>";
		while($row=$sonuc->fetch( PDO::FETCH_ASSOC ))
		{
			
			echo "<option value=".$row['salon_id'].">".$row['salon_adi']."</option>";
		}
		
	}


?>
