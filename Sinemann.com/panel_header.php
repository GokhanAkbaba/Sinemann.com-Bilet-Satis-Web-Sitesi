<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/panel_stil.css"/>
		<script src="js/jquery1.10.1nin.js" type="text/javascript"></script>
		<meta charset="utf-8"/>
		<script>
		var salon_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"salon_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		<script>
		var film_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"film_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		<script>
		var koltuk_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"koltuk_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		<script>
		var bilet_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"bilet_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		<script>
		var seans_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"seans_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
		<script>
		var sehir_islemleri= function() {
				$.ajax({
					type:"POST",
					url:"sehir_islemleri.php",
					data:{},
					success:function(donenVeri)
					{
						$(".araclar_menu").html(donenVeri);
					}
					
				});
		}
		</script>
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
	</head>