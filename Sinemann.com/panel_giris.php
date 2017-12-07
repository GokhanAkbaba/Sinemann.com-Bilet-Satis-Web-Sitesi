<!DOCYPE html>
<html>
	<head>
		<title>PANEL GİRİŞ</title>
		<meta charset="utf-8"/>
		<style type="text/css">
			.govde
			{
				
				width:60%;
				margin-left:20%;
				margin-top:5%;
			}
			.baslik
			{
				
				width:40%;
				margin-left:30%;
				margin-top:5%;
				
			}
			body
			{
				background-color:#DEF;
			}
			.ana_govde
			{
				
				margin-top:10%;
				width:40%;
				margin-left:30%;
				box-shadow: 6px -6px 5px,3px 5px 6px ;
			}
		</style>
	</head>
	<body>
	<div class="ana_govde">
		<div class="baslik">
		<h2 style="text-align:center;">ADMİN GİRİŞİ</h2>
		</div>
		<div class="govde">
			<form method="POST" action="login.php">
				<center>
				<table>
					<tr>
						<td>Kullanıcı Adınız </td>
						<td><input type="text" name="adi" placeholder="Kullanıcı Adınız"></input></td>
					</tr>
					<tr>
						<td>Şifreniz </td>
						<td><input type="password" name="sifre" placeholder="Şifreniz"></input></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="giris" value="Giriş Yap" ></input></td>
					</tr>
				</table>
				</center>
			</form>
		</div>
	</div>
	</body>
</html>