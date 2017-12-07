-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Haz 2016, 23:46:46
-- Sunucu sürümü: 5.6.16
-- PHP Sürümü: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `sinema`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_paneli`
--

CREATE TABLE IF NOT EXISTS `admin_paneli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kullanici_sifresi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `admin_paneli`
--

INSERT INTO `admin_paneli` (`id`, `kullanici_adi`, `kullanici_sifresi`) VALUES
(2, 'Pogba', '0610');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilet_fiyati`
--

CREATE TABLE IF NOT EXISTS `bilet_fiyati` (
  `bilet_id` int(11) NOT NULL AUTO_INCREMENT,
  `fiyati` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hizmet_bedeli` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`bilet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `bilet_fiyati`
--

INSERT INTO `bilet_fiyati` (`bilet_id`, `fiyati`, `hizmet_bedeli`) VALUES
(1, '15', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `film_bilgileri`
--

CREATE TABLE IF NOT EXISTS `film_bilgileri` (
  `film_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `oyn_salon_cesit_no` int(11) DEFAULT NULL,
  `oyn_sehir_id` int(15) DEFAULT NULL,
  `film_turkce_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `film_ing_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `vizyon_tarihi` date DEFAULT NULL,
  `vizyon_bitis_tarih` date DEFAULT NULL,
  `gosterim_haftasi` varchar(55) COLLATE utf8_turkish_ci DEFAULT NULL,
  `film_ozet` text COLLATE utf8_turkish_ci NOT NULL,
  `yonetmen` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `oyuncular` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sure` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `tur` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `sinir` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `afis` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `seans_afis` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`film_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=18 ;

--
-- Tablo döküm verisi `film_bilgileri`
--

INSERT INTO `film_bilgileri` (`film_id`, `oyn_salon_cesit_no`, `oyn_sehir_id`, `film_turkce_ad`, `film_ing_ad`, `vizyon_tarihi`, `vizyon_bitis_tarih`, `gosterim_haftasi`, `film_ozet`, `yonetmen`, `oyuncular`, `sure`, `tur`, `sinir`, `afis`, `seans_afis`) VALUES
(1, 1, 1, 'Annemin Yarası', 'Annemin Yarası', '2016-03-20', '2016-03-26', 'İlk Haftası', 'Salih on sekiz yaşına geldiğinde kayıp ailesini bulmak üzere yetimhaneyi terk eder ve babasını ararken bir çiftlikte işe başlar. Hiç beklemediği bir anda hayalindeki yuvayı bulmuştur. Heyecan ve tansiyon yükseldikçe yeni sırlar da su üstüne çıkar. Salih geçmişinden kurtulup bu yuvada mutlu olabilecek midir? Soluk soluğa izlenecek Annemin Yarası, Salih’in peşinde umudun izini sürüyor. Ozan Açıktan’ın yönettiği filmde başrolleri Meryem Uzerli, Ozan Güven, Belçim Bilgin, Okan Yalabık ve Bora Akkaş paylaşıyor.', 'Ozan Açıktan', 'Ozan Güven, Bora Akkaş, Belçim Bilgin, Meryem Uzerli, Okan Yalabık', '120 Dakika', 'Dram', '+15', 'filmler/Annemin_Yarasi/annemin_yarasi.png', 'filmler/Annemin_Yarasi/yara.png'),
(2, 4, 8, 'Yandaş', 'The Divergent Series: Allegiant', '2016-03-11', '2016-03-26', 'İlk Haftası', 'Gişe rekorları kıran Uyumsuz serisinin üçüncü filmi YANDAŞ, Tris (Shailene Woodley) ve Dört (Theo James)’ü, öncekinden çok daha tehlikeli yeni bir dünyaya götürüyor. Uyumsuz’da sistemi alt üst eden bilgileri ortaya çıkardıktan sonra, Tris ve Dört’ün, Şikago’yu çevreleyen duvarların dışına kaçması gerekmektedir. Hayatlarında ilk defa, bildikleri tek şehri ve akrabalarını bırakmak zorundadırlar. Dışarı çıktıklarında, yeni öğrendikleri gerçekler karşısında eski bildiklerinin hiçbirinin geçerliliği kalmaz. Tris ve Dört’ün, Şikago duvarlarının arkasında devam etmekte olan ve bütün insanlığı tehdit eden savaşta kimden yana olacaklarına hızlı bir şekilde karar vermesi gerekmektedir. Tris hayatta kalabilmek için cesaret, sadakat, fedakarlık ve aşk arasında imkansız bir seçim yapmaya mecbur bırakılır.', 'Robert Schwentke', 'Miles Teller, Shailene Woodley, Theo James, Naomi Watts, Ansel Elgort', '121 Dakika', 'Aksiyon', '13+', 'filmler/Yandas/yandas.png', 'filmler/Yandas/seans_yandas.png'),
(3, 2, 8, 'Kolpaçino 3.Devre', 'Kolpaçino 3.Devre', '2016-03-11', '2016-03-26', 'İlk Haftası', 'Özgür (Şafak Sezer), Sabri’nin (Aydemir Akbaş) ihanetinden sonra karısı Cemile’den ayrılmıştır. Özgür, oturduğu villayı eskiden olduğu gibi filmcilere kiraya vermekte ve oradan gelen para ile geçinmektedir. Bir tartışma esnasında Başkan lakaplı mafya babasının (Erkan Petekkaya); adamlarından birinin telefonu Özgür’ün telefonuyla karışır. Özgür, kendi villasının kirasını beklerken zarfta yirmi adet bir milyon dolarlık banknot olduğunu farkeder ve paraların üstüne yatıp kaçış planları yapmaya başlar. Fakat Başkan, bunu Özgür ve arkadaşlarının yanına bırakmamaya kararlıdır.', 'Şafak Sezer', 'Erkan Petekkaya, Aydemir Akbaş, Şafak Sezer', '93 Dakika', 'Komedi', '13+', 'filmler/Kolpacino_3_Devre/kolpacino_3_devre.png', 'filmler/Kolpacino_3_Devre/seans_kolpacino_3_devre.png'),
(5, 3, 4, 'Babalar Savaşıyor', 'Babalar Savaşıyor', '2016-03-04', '2016-03-19', 'İkinci Haftası', '“BABALAR SAVAŞIYOR”, karısının iki çocuğuna en iyi üvey baba olmak için çabalayan, ancak çocukların başıboş ve avantacı gerçek babalarının (Mark Wahlberg) gelmesiyle çıkan zorluklar karşısında çocukların sevgisi için rekabet etmek zorunda kalan iyi huylu bir radyo yöneticisini (Will Ferrell) konu alıyor.', 'Sean Anders', 'Mark Wahlberg, Will Ferrell', '96 Dakika', 'Komedi', '13+', 'filmler/Babalar_Savasiyor/babalar_savasiyor.png', 'filmler/Babalar_Savasiyor/seans_babalar_savasiyor.png'),
(6, 2, 8, 'Kod Adı:Londra', 'London Has Fallen', '2016-03-04', '2016-03-19', 'Üçüncü Haftası', 'ABD başkanını global bir tehditten kurtaran özel güvenlik şefi Mike Banning (Gerard Butler) yeniden görev başında. Bu kez Banning İngiltere deki terörist faaliyetler ile baş etmek zorunda kalacak gibi görünüyor!', 'Babak Najafi', 'Gerard Butler, Angela Bassett, Melisa Leo, Morgan Freeman, Aaron Eckhart', '99 Dakika', 'Aksiyon', '15+', 'filmler/Kod_Adi_Londra/kod_adi_londra.png', 'filmler/Kod_Adi_Londra/seans_kod_adi_londra.png'),
(7, 4, 7, 'Çağrılan', 'Çağrılan', '2016-02-20', '2016-03-12', 'Altıncı Haftası', 'Konservatuvar öğrencisi bir grup genç dünyada ilk kez canlı yayında bir korku filmi çekecek ve yayınlayacaklardır. Filmin seti, oyuncuları ve seyirciler, her şey hazırlanır, büyük bir heyecanla olacaklar beklenmektedir. Sinema filmi çekimi ile eş zamanlı olarak TV yayını başlar. Ancak yayın başlar başlamaz her şey kontrolden çıkar ve ortalık kan gölüne döner. Korkutmak için hazırlananlar, kapalı kapılar ardında cinlerin korkunç saldırılarına maruz kalırlar.', 'Hüseyin Eleman', 'Bahadır Karaca, Akdora Akalın', '85 Dakika', 'Korku', '18+', 'filmler/Cagrilan/cagrilan.png', 'filmler/Cagrilan/seans_cagrilan.png'),
(8, 2, 9, 'Ayı Kardeşler: Kurtarma Operasyonu', 'Boonie Bears, to the Rescue!', '2016-02-19', '2016-02-29', 'Beşinci Haftası', 'Ayı Kardeşler ve arkadaşları, küçük Lolayı kurtarmak için heyecan dolu bir maceraya atılıyorlar.', 'Ding Liang,Fuyuan Liu', '     ', '88 Dakika', 'Animasyon', '  ', 'filmler/Ayi_Kardesleri_Kurtarma_Operasyonu/ayi_kardesler_kurtarma_operasyonu.png', 'filmler/Ayi_Kardesleri_Kurtarma_Operasyonu/seans_ayi_kardesler_kurtarma_operasyonu.png'),
(9, 3, 6, 'Diriliş', 'The Revenant', '2016-01-22', '2016-02-11', 'Yedinci Haftası', 'Yaşanmış olaylardan esinlenilen DİRİLİŞ, Amerika sınırında destansı bir hayatta kalma ve dönüşüm hikayesi. Hugh Glass (Leonardo DiCaprio) adındaki efsanevi bir kaşif, boz bir ayı tarafından ölümcül biçimde yaralandıktan sonra, kendi ekibi tarafından terk edilir. Yalnız ve ölmek üzere olmasına rağmen Glass, ölümü reddeder. İradesi ve Amerikan yerlisi karısına duyduğu sevgi sayesinde hayatta kalmaya çalışan Glass, sert bir kışı atlatmalı ve ona ihanet eden adamdan intikamını almalıdır: John Fitzgerald (Tom Hardy). Acımasız bir intikam arayışı, eve dönüş ve kurtuluş yolunda bir kahramanlık destanına dönüşür. DİRİLİŞ’in yönetmenliğini ve yapımcılığını Alejandro G. Iñárritu yapıyor.', 'Alejandro González Iñárritu', 'Leonardo DiCaprio, Tom Hardy', '157 Dakika', 'Macera', '15+', 'filmler/Dirilis/dirilis.png', 'filmler/Dirilis/seans_dirilis.png'),
(10, 2, 8, 'Spotlight', 'Spotlight', '2016-01-20', '2016-02-19', 'Dördüncü Haftası', '2016 Oscar ödüllerinde 6 dalda aday gösterilen film, Boston Globe’un Pulitzer ödülü kazanan araştırmacı gazeteci ekibinin gerçek hikayesini anlatmaktadır. Yeni atanan genel yayın yönetmeni Marty Baron 2001 yazında Globe’un başına geçmek üzere Miami’den geldiğinde, ayağının tozuyla Spotlight ekibini, 30 yıl boyunca düzinelerce çocuğa cinsel istismarda bulunmakla suçlanan yerel bir rahip hakkındaki bir makaleyi takip etmekle görevlendirir. Kurbanların avukatı Mitchell Garabedian’la görüşür, çocukken tacize uğramış yetişkinlerle röportaj yapar ve mühürlenmiş mahkeme kayıtlarını açtırmanın peşine düşerler. Böylece, Kilise’nin bu avcı rahipleri sistematik olarak koruyuşunun hiçbirinin hayal bile edemeyeceği ölçüde geniş çaplı olduğu anlaşılır. Kilise yetkililerinin muazzam direnişine rağmen, Globe bu dev ifşa haberini Ocak 2002’de yayınlayarak, dünyada 200’den fazla şehirde de benzer ifşaların yolunu açar.', 'Tom McCarthy', 'Michael Keaton, Mark Ruffalo, Rachel McAdams, Liev Schreiber', '128 Dakika', 'Biyografi', '15+', 'filmler/Spotlight/spotlight.jpg', 'filmler/Spotlight/seans_spotlight.jpg'),
(12, 3, 4, 'Gizli Dünya', 'Room', '2016-02-19', '2016-02-29', 'Yedinci Haftası', '2016 Akademi Ödüllerinde (Oscar) En İyi Film, En İyi Yönetmen ve En İyi Kadın Oyuncu dalları dahil 4 dalda aday olan ve dünya çapında çok satan kitaptan uyarlanan film, 5 yaşındaki çocuğu ile küçük bir odaya hapsedilen annenin dramını ve kaçış hikâyelerini konu alıyor. Kaçış için plan yapan anne ve çocuğu, dış dünyanın kuralları da zorlar', 'Lenny Abrahamson', 'Brie Larson, Jacob Tremblay', '118 Dakika', 'Dram', '7+', 'filmler/Gizli_Dunya/gizli_dunya.png', 'filmler/Gizli_Dunya/seans_gizli_dunya.png'),
(13, 1, 4, 'Sonsuzluk Teorisi', 'The Man Who Knew Infinity', '2016-05-06', '2016-06-16', 'İkinci Haftası', 'The Man Who Knew Infinity, Hint matematikçi Srinivasa Ramanujan’ın hayatını konu alıyor. Srinivasa Ramanujan 25 yaşında bir sevk memurudur. Kolejde matematiğe olan takıntısı ve diğer derslere ilgisizliği yüzünden başarısız olmuş ve eve kapanmıştır. Evde olduğu süre boyunca okuduğu formül kitabı ona bambaşka bir dünyanın kapılarını aralamıştır. Yazdığı formülleri birçok matematikçiye gönderir. Cambrige’de Trinity Koleji’nin matematik profesörü G.H Hardy mektubuna geri döner. Hardy, Ramanujan’ın dehasından etkilenir ve onu Cambridge’e davet eder. Ramanujan’ın hayatı artık eskisi gibi olmayacaktır.', 'Matt Brown', 'Jeremy Irons, Dev Patel', '108 Dakika', 'Biyografi', '+13', 'filmler/sonsuzluk_teorisi/sonsuzluk_teorisi.jpg', 'filmler/sonsuzluk_teorisi/senas_sonsuzluk_teorisi.jpg'),
(14, 4, 2, 'Çöl Kraliçesi', 'Queen of the Desert', '2016-05-05', '2016-06-25', 'Üçüncü Hafta', 'İngiliz macerasever ve gezgin Gertrude Bell’in (Kidman) gerçek hikayelerinden oluşan “Queen of the Desert” onun aşklarını ve yolculuklarını konu alıyor. Meraklı ve maceracı bir kadın olan Gertrude İngiltere’nin dışındaki hayatı görmek ister ve elçilikte görevli olarak Tahran’a gider ve burada elçilik sekreteri Henry Cadogan’a (Franco) aşık olur. Bu aşk yanlış anlaşılmış kişilerle birlikte hayat boyu sürecek bir maceranın başlangıcı olur. Bu macerada yolu T.E. Lawrence (Pattinson) ve Osmanlı İmparatorluğunda görevli general Charles Doughty-Wylie (Lewis) ile kesişir.', 'Werner Herzog', 'James Franco, Damian Lewis, Nicole Kidman, Robert Pattinson', '128 Dakika', 'Biyografi', '+16', 'filmler/col_kralicesi/col_kralicesi.jpg', 'filmler/col_kralicesi/seans_col_kralicesi.jpg'),
(15, 2, 7, 'Kötü Komşular 2', 'Neighbors 2', '2016-05-13', '2016-05-31', 'İkinci Haftası', 'Mac (Rogen) ve Kelly Radner ikinci bebeklerini beklemektedir ve taşınmaya karar verirler. Yola getirdikleri mahalleden emin olan ve evi satmanın güvenli olduğuna karar veren çift yeni komşularının, Teddy (Efron) ve kardeşlerinden daha beter bir kız kardeş grubu olduğunu anlar. Okullarının cinsiyetçi ve baskıcı sisteminden sıkılan sıradışı Kappa Nu kardeşleri, kendi evlerini açmaya ve istedikleri şekilde yaşamaya karar vermişlerdir. Shelby (Moretz) ve kardeşleri Beth (Kiersey Clemons) ve Nora (Beanie Feldstein) kampus dışındaki mükemmel yeri bulmuşlardır ve sakin bir muhitte oturdukları gerçeğini umursamazlar. Yeni komşularını alaşağı etmek isteyen Radners ve en iyi arkadaşları Jimmy (Ike Barinholtz) ve Paula (Carla Gallo), gizli silahları karizmatik Teddy''i savaşmak için geri getirirler. Teddy karizmasıyla kardeşleri etkileyebilirse Kappa''ların kepenklerini indirebileceklerdir ancak kızkardeşlerin pratik zekasını ve çılgınlığını hafife almışlardır.', 'Nicholas Stoller', 'Chloe Grace Moretz, Seth Rogen, Rose Byrne, Dave Franco, Selena Gomez, Zac Efron', '91 Dakika', 'Komedi', '15+', 'filmler/kotu_komsu/kotu_komsu.jpg', 'filmler/kotu_komsu/seans_kotu_komsu.jpg'),
(16, 3, 9, 'Kaptan Amerika: Kahramanların Savaşı', 'Captain America: Civil War', '2016-05-06', '2016-06-06', 'İkinci Hafta', 'Marvel’in “Kaptan Amerika: Kahramanların Savaşı” fiminde Steve Rogers’ı, insanlığı koruma yolunda görevlerine devam edenYenilmez’lerin yenilenmiş ekibinin lideri olarak görüyoruz. Yenilmezler’in dahil olduğu bir olay kötü sonuçlanınca, politik güçler Yenilmezler’in bir otorite tarafından takip edildiği ve yönlendirildiği bir sistem kurulması için baskı yaparlar. Bu durum Yenilmezler’in fikir ayrılığına düşerek iki gruba ayrılmasına neden olur. Bunlardan biri Steve Rogers’ın önderliğinde, Yenilmezler’in hükümet baskısı olmaksızın özgür bir biçimde insanlığı korumaya devam etmesini savunan grup, diğer tarafta ise Tony Stark’ın şaşırtıcı bir biçimde hükümet kontrolünü ve müdahalesini destekleyen ikinci gruptur. 6 Mayıs 2016’da vizyona girecek Marvel’in Kaptan Amerika: Kahramanların Savaşı filminde tarafınızı seçmeye ve heyecan dolu bir aksiyona hazır olun', 'Joe Russo,Anthony Russo', 'Scarlett Johansson, Elizabeth Olsen, Paul Rudd, Paul Bettany, Chris Evans, Jeremy Renner, Anthony Mackie, Robert Downey Jr.', '148 Dakika', 'Aksiyon', '7+', 'filmler/amerika/ameika.png', 'filmler/amerika/senas_ameika.png'),
(17, 4, 6, 'Misafir', 'Misafir', '2016-05-20', '2016-06-10', 'İlk Haftası', 'Evrensel bir konu olan anne – kız ilişkisini, ölüm teması çerçevesinde işleyen film, ülkemizde de yaygın bir sorun olan aile içi cinsel taciz meselesini de alt hikâye bağlamında ele alıyor. Film, trajediden beslenen bir umut duygusuyla tutunamayanların hikâyesini anlatıyor. Yıllar önce baba evinden kovulan Nur, on yıl sonra annesinin ölüm döşeğinde olduğu haberini alır. Küçük kızını da yanına alarak baba diyarına gider.', 'Mehmet Eryılmaz', 'Ersin Umut Güler, Tamer Levent, Ayten Uncuoğlu, Hale Akınlı, Zümrüt Erkin', '127 Dakika', 'Dram', '13+', 'filmler/misafir/misafir.jpg', 'filmler/misafir/senas_misafir.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `koltuk`
--

CREATE TABLE IF NOT EXISTS `koltuk` (
  `koltuk_id` int(11) NOT NULL AUTO_INCREMENT,
  `salon_id` int(15) DEFAULT NULL,
  `sira_adi` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `koltuk_sayisi` int(50) DEFAULT NULL,
  PRIMARY KEY (`koltuk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=92 ;

--
-- Tablo döküm verisi `koltuk`
--

INSERT INTO `koltuk` (`koltuk_id`, `salon_id`, `sira_adi`, `koltuk_sayisi`) VALUES
(1, 1, 'A', 16),
(2, 1, 'B', 15),
(3, 1, 'C', 15),
(4, 1, 'D', 16),
(5, 1, 'E', 14),
(6, 1, 'F', 14),
(7, 1, 'G', 14),
(8, 1, 'H', 14),
(9, 1, 'I', 14),
(10, 1, 'J', 16),
(11, 1, 'K', 16),
(12, 1, 'L', 20),
(13, 2, 'A', 20),
(14, 2, 'B', 20),
(15, 2, 'C', 20),
(16, 2, 'D', 21),
(17, 2, 'E', 25),
(18, 2, 'F', 23),
(19, 2, 'G', 22),
(20, 2, 'H', 20),
(21, 2, 'I', 20),
(22, 3, 'A', 20),
(23, 3, 'B', 20),
(24, 3, 'C', 14),
(25, 3, 'D', 15),
(26, 3, 'E', 15),
(27, 3, 'F', 15),
(28, 3, 'G', 15),
(29, 3, 'H', 15),
(30, 3, 'I', 15),
(31, 3, 'J', 15),
(32, 4, 'A', 12),
(33, 4, 'B', 12),
(34, 4, 'C', 12),
(35, 4, 'D', 12),
(36, 4, 'E', 12),
(37, 4, 'F', 12),
(38, 4, 'G', 12),
(39, 4, 'H', 12),
(40, 4, 'I', 12),
(41, 4, 'J', 12),
(45, 6, 'A', 23),
(46, 6, 'B', 23),
(47, 6, 'C', 23),
(48, 6, 'D', 22),
(49, 6, 'E', 21),
(50, 6, 'F', 21),
(51, 6, 'G', 20),
(52, 6, 'H', 20),
(53, 6, 'I', 21),
(54, 6, 'J', 21),
(55, 6, 'K', 21),
(56, 7, 'A', 16),
(57, 7, 'B', 16),
(58, 7, 'C', 16),
(59, 7, 'D', 16),
(60, 7, 'E', 16),
(61, 7, 'F', 16),
(62, 7, 'G', 16),
(63, 7, 'H', 16),
(64, 7, 'I', 16),
(65, 7, 'J', 16),
(66, 7, 'K', 16),
(68, 8, 'A', 15),
(69, 8, 'B', 15),
(70, 8, 'C', 15),
(71, 8, 'D', 15),
(72, 8, 'E', 15),
(73, 8, 'F', 15),
(74, 8, 'G', 15),
(75, 8, 'H', 15),
(76, 8, 'I', 15),
(77, 8, 'J', 15),
(78, 8, 'K', 15),
(79, 9, 'A', 17),
(80, 9, 'B', 17),
(81, 9, 'C', 17),
(82, 9, 'D', 17),
(83, 9, 'D', 17),
(84, 9, 'E', 17),
(85, 9, 'F', 17),
(86, 9, 'G', 17),
(87, 9, 'H', 17),
(88, 9, 'I', 17),
(90, 9, 'Y', 0),
(91, 1, 's', 15);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteri_bilgisi`
--

CREATE TABLE IF NOT EXISTS `musteri_bilgisi` (
  `musteri_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(15) DEFAULT NULL,
  `adi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mail` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kart_uzerindeki_ad` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kart_no` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `s_tarih` varchar(25) COLLATE utf8_turkish_ci DEFAULT NULL,
  `cv` int(15) DEFAULT NULL,
  PRIMARY KEY (`musteri_id`),
  UNIQUE KEY `musteri_id` (`musteri_id`),
  UNIQUE KEY `musteri_id_2` (`musteri_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=22 ;

--
-- Tablo döküm verisi `musteri_bilgisi`
--

INSERT INTO `musteri_bilgisi` (`musteri_id`, `film_id`, `adi`, `soyadi`, `tel`, `mail`, `kart_uzerindeki_ad`, `kart_no`, `s_tarih`, `cv`) VALUES
(12, 1, 'Gökhan', 'Akbaba', '(082) 726.0836', 'gokhan_bufe_11@hotmail.com', 'Gokhan Akbaba', '1231-1111-1111-1111', '12/02', 83),
(13, 1, 'Eren ', 'Akbaş', '(123) 456.5555', 'erenaktas@gmail.com', 'Eren AKBAŞ', '1551-5454-5646-5456', '12/02', 23),
(14, 1, 'Gökhan', 'Akbaba', '(538) 079.3813', 'gokhan_bufe_11@hotmail.com', 'Gökhan Akbaba', '1225-1125-5222-5552', '12/05', 100),
(16, 1, 'Ali ', 'Özmen', '(253) 253.2532', 'ozmenali@hotmail.com', 'Ali Özmen', '1253-2532-6632-5631', '12/02', 23),
(17, 17, 'Bilal', 'Aksoy', '(253) 366.6666', 'bilalaksoy@gmail.com', 'bilal aksoy', '5464-6545-6464-6465', '15/03', 83),
(18, 16, 'Erdi ', 'Koçhan', '(232) 323.2323', 'kochan_erdi@hotmail.com', 'Erdi Koçhan', '4654-5646-4654-6546', '15/24', 100),
(19, 15, 'Batuhan', 'Gürağaç', '(799) 879.7987', 'batuhan1905@gmail.com', 'Batuhan Gürağaç', '1654-4684-6546-4654', '07/23', 169),
(20, 14, 'Talha', 'Eşsiz', '(464) 456.5454', 'talhaessiz@gmail.com', 'Talha Eşsiz', '7894-5612-3323-3333', '12/26', 109),
(21, 13, 'Turgay ', 'Şen', '(131) 312.3131', 'turgaysen@gmail.com', 'Turgay Şen', '7494-6454-6464-6464', '01/23', 126);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE IF NOT EXISTS `rezervasyon` (
  `rezervasyon_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(50) DEFAULT NULL,
  `salon_id` int(50) DEFAULT NULL,
  `seans_saati` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `seans_tarih` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `seans_koltuk` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`rezervasyon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=32 ;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`rezervasyon_id`, `film_id`, `salon_id`, `seans_saati`, `seans_tarih`, `seans_koltuk`) VALUES
(14, 1, 1, '11.30', '2016-03-21', 'A1'),
(15, 1, 1, '14.00', '2016-03-21', 'A1'),
(17, 1, 1, '14.00', '2016-03-21', 'A2'),
(18, 1, 1, '14.00', '2016-03-21', 'D7'),
(19, 1, 1, '14.00', '2016-03-21', 'I10'),
(20, 17, 6, '18.50', '2016-05-28', 'D11'),
(21, 17, 6, '18.50', '2016-05-28', 'C8'),
(22, 17, 6, '18.50', '2016-05-28', 'B5'),
(23, 16, 9, '16.00', '2016-05-20', 'C9'),
(24, 16, 9, '16.00', '2016-05-20', 'C7'),
(25, 16, 9, '16.00', '2016-05-20', 'A5'),
(26, 15, 7, '11.15', '2016-05-20', 'B6'),
(27, 15, 7, '11.15', '2016-05-20', 'A6'),
(28, 14, 2, '11.20', '2016-05-20', 'E26'),
(29, 14, 2, '11.20', '2016-05-20', 'B8'),
(30, 13, 4, '16.30', '2016-05-20', 'A3'),
(31, 13, 4, '16.30', '2016-05-20', 'A2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `salon_bilgileri`
--

CREATE TABLE IF NOT EXISTS `salon_bilgileri` (
  `salon_id` int(11) NOT NULL AUTO_INCREMENT,
  `sehir_id` int(15) DEFAULT NULL,
  `salon_adres` text COLLATE utf8_turkish_ci NOT NULL,
  `salon_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `salon_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`salon_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `salon_bilgileri`
--

INSERT INTO `salon_bilgileri` (`salon_id`, `sehir_id`, `salon_adres`, `salon_adi`, `salon_tel`) VALUES
(1, 1, 'Trabzon Forum AVM Devlet Sahil Yolu Cad. 100.Yıl Parkı Yanı Değirmendere/Trabzon', 'Cinemaximum ', '(462) 3301001'),
(2, 2, 'Hatay Sokak No:18 Kızılay/Ankara', ' Büyülü Fener Kızılay', ' (312) 4250100'),
(3, 3, 'Halit Ziya Uşaklıgil Cad. Carousel AVM K:2 Bakırköy/İstanbul', 'Bakırköy Carousel Cinema Pink', '(212) 5830606'),
(4, 4, ' Yeni Havaalanı Yolu No:40 Kipa Alışveriş Merkezi Çiğli/İzmir', ' Çiğli Cinecity Kipa', '(232) 3865888'),
(6, 4, 'Bergama Girişi Otogar yanı Bergama/İzmir', 'Bergama Atlas', '(232) 6672240'),
(7, 1, 'Gülbahar Hatun Mah. İnönü Cad. Bodrum ve Zemin Kat Varlıbaş Atapark Avm Trabzon', 'Atapark Avşar', '(462) 2231881'),
(8, 2, 'Beytepe Köyü Yolu Bilkent Center AVM Bilkent/Ankara', 'Bilkent Prestige', '(312) 2661632'),
(9, 3, 'Nispetiye Cad. No:416 Akmerkez İçi Yemek Katı (4. Kat) 34337 Etiler/İstanbul', 'Etiler Akmerkez Cinema Pink', '(212) 2820505');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seans`
--

CREATE TABLE IF NOT EXISTS `seans` (
  `seans_id` int(15) NOT NULL AUTO_INCREMENT,
  `salon_cesit_no` int(15) DEFAULT NULL,
  `saat` varchar(11) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`seans_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=23 ;

--
-- Tablo döküm verisi `seans`
--

INSERT INTO `seans` (`seans_id`, `salon_cesit_no`, `saat`) VALUES
(2, 1, '14.00'),
(3, 1, '16.30'),
(4, 1, '19.00'),
(5, 1, '21.30'),
(6, 2, '11.15'),
(7, 2, '13.15'),
(8, 2, '15.15'),
(9, 2, '17.15'),
(10, 2, '19.15'),
(11, 3, '11.00'),
(12, 3, '13.30'),
(13, 3, '16.00'),
(14, 3, '18.30'),
(15, 3, '21.00'),
(16, 3, '21.30'),
(17, 4, '11.20'),
(18, 4, '13.50'),
(19, 4, '16.20'),
(20, 4, '18.50'),
(21, 4, '21.20'),
(22, 1, '78.03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir_bilgisi`
--

CREATE TABLE IF NOT EXISTS `sehir_bilgisi` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `sehir_adi` varchar(81) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `sehir_bilgisi`
--

INSERT INTO `sehir_bilgisi` (`id`, `sehir_adi`) VALUES
(1, 'Trabzon'),
(2, 'Ankara'),
(3, 'Istanbul'),
(4, 'Izmir');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
