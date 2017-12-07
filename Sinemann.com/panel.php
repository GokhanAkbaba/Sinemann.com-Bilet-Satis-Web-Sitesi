<?php
include('includes/db.php');
include('salon_ekleme_silme_islemleri.php');
include('sehir_ekleme_silme_islemleri.php');
include('seans_ekleme_silme_islemleri.php');
include('film_ekleme_silme_islemleri.php');
include('koltuk_ekeleme_guncelleme_islemleri.php');
include('bilet_guncelleme_islemleri.php');
include('panel_header.php');
session_start();
if(!isset($_SESSION['login'])){
echo 'Bu sayfayı görüntüleme yetkiniz yoktur.';
}
else
{
	echo "<body>
		<div class='panel_baslik'>
			<div class='baslik'>
				<h1 style=''>ADMİN PANELİ</h1>
			</div>
	    </div>
	    <div class='govde'>
				<div class='menu'>
					<table cellspacing='5px'>
						<tr>
							<td id='sekme'>
								<div id='sekme_tus' onclick='film_islemleri();'>
									<i class='fa fa-video-camera' style='font-size:36px;margin-left:20px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Film Ekle</p>
								</div>
							</td>
							<td id='sekme'>
								<div id='sekme_tus' onclick='salon_islemleri();'>
									<i class='fa fa-desktop' style='font-size:36px;margin-left:20px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Salon Ekle</p>
								</div>
							</td>
							<td id='sekme'>
								<div id='sekme_tus' onclick='koltuk_islemleri();'>
									<i class='fa fa-plus-square' style='font-size:36px;margin-left:20px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Koltuk</p>
								</div>
							</td>
							<td id='sekme'>
								<div id='sekme_tus' onclick='bilet_islemleri();'>
									<i class='fa fa-ticket' style='font-size:36px;margin-left:20px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Bilet</p>
								</div>
							</td>
							<td id='sekme'>
								<div id='sekme_tus' onclick='seans_islemleri();'>
									<i class='fa fa-clock-o' style='font-size:36px;margin-left:20px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Seans</p>
								</div>
							</td>
							<td id='sekme'>
								<div id='sekme_tus' onclick='sehir_islemleri();'>
									<i class='fa fa-map-marker' style='font-size:36px;margin-left:28px;margin-top:4px'></i>
									<p style='text-align:center;margin-top:2px'>Şehir</p>
								</div>
							</td>
						</tr>
					</table>
				</div>
				<div class='araclar_menu'>";
				?>
					<?php
						include('panel_mesaj_islemleri.php');
					?>
					<?php
					echo "</div>
						</div>
					</body>
				</html>";
}
				?>