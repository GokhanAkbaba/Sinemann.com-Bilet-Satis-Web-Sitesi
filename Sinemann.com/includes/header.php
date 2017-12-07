<!DOCTYPE html>
<html>
	<head>
		<title>Sinemam</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/stil.css" />
		<link rel="stylesheet" type="text/css" href="css_ana.css"/>
		<script src="js/formatter.js" type="text/javascript"></script>
		<script src="js/scale.js" type="text/javascript"></script>
		<script src="js/an.js" type="text/javascript"></script>
		<script src="js/jquery1.10.1nin.js" type="text/javascript"></script>
		<script language="javascript" type="text/javascript">
			var f =function()
			{
				var sehir=$("#sehir option:selected").val();
				$.ajax({
					type:"GET",
					url:"salonlar.php?veri="+sehir,
					date:{},
					datatype:"html",
					beforeSend:function(){},
					success:function(cevap)
					{
						console.log(cevap);
						$("#salon").html(cevap);
					},
					error:function(){
						alert("hata oluştu");
					}
				});
			}
			
		</script>
		<script language="javascript" type="text/javascript">
			$(function()
			{
				$(".arama_sonuc").hide();
				$("input[name=arama_text]").keyup(function(){
					var value=$(this).val();
					var konu="value="+value;
					if(value!="")
					{
						$.ajax({
							type:"POST",
							url:"ajax.php",
							data:konu,
							success:function(sonuc)
							{
								$(".arama_sonuc").show().html(sonuc);
							}
						});
					}
					else{
						$(".arama_sonuc").hide();
					}
				});
			});
		</script>
		<script>
		var seans= function() {
			
				var sehir=$("#sehir").val();
				var tarih=$("#tarih").val();
				var salon=$("#salon").val();
				
				$.ajax({
					type:"POST",
					url:"ana_govde.php",
					data:{"sehir":sehir,"tarih":tarih,"salon":salon},
					
					success:function(donenVeri)
					{
						
						$(".orta_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		

	</head>
	<body>
		<div class="banne">
				<div id="baslik">
				
				<i class="fa fa-desktop" style="font-size:45px;position:relative;left:6px;top:8px;"></i>
				<a href="index.php"><strong style="font-size:40px;left:65px;position:absolute;color:#827B60;"><span style="color:#64E986">Sinemann</span>.com</strong></a>
				</div>
				<div id="arama"> 
					
					<input type="text" name="arama_text" style="width:65%;float:left;height:44px"/>
					<div class="arama_sonuc">
						<span>Sonuc</span>
					</div>
					<button type="button" style="width:34%;height:50px;font-size:15px;" onclick="();">
					<i class="fa fa-search" style="font-size:24px;position:absolute;top:9px;"></i></button>
				</div>
		</div>
		