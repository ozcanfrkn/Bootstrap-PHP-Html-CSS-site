<form action="" method="POST">
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php 
include 'baglan.php';
@$adi=$_POST["ad"];
@$soyadi=$_POST["soyad"];
@$okulno=$_POST["okulno"];
@$cinsiyet=$_POST["cinsiyet"];
@$eposta=$_POST["eposta"];
@$sehir=$_POST["sehir"];
@$bolumu=$_POST["bolum"];
@$telefonno=$_POST["telefonno"];

$db->query("SET CHARACTER SET utf8");

$query = $db->prepare("INSERT INTO odev SET
adi = ?,
soyadi = ?,
okulno = ?,
cinsiyet = ?,
eposta=?,
sehir=?,
bolumu=?,
telefonno=?");
$insert = $query->execute(array(
     $adi, $soyadi, $okulno, $cinsiyet, $eposta, $sehir, $bolumu, $telefonno
));
if ( $insert ){
    $last_id = $db->lastInsertId();
    print "insert işlemi başarılı!";
    header("refresh:0.5;url=yenii.php");
}
 ?>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<form>
  <div class="form-row">
    <div class="form-group col-md-2"></div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Ad</label>
      <input type="text" placeholder="Adınızı girin...." class="form-control"required="" name="ad">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Soyad</label>
      <input type="text" placeholder="Soaydınızı giriniz..." class="form-control" required="" name="soyad">
    </div>
    <div class="form-group col-md-2"></div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Okul No</label>
    <input type="number" class="form-control" required="" placeholder="Okul numaranızı girin.." name="okulno">
  </div>
</div>
<div class="form-row">
      <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputState">Cinsiyet</label>
      <select id="inputState" class="custom-select mr-sm-2" name="cinsiyet">
        <option selected>Seçiniz....</option>
        <option>Kadın</option>
        <option>Erkek</option>
        </select>
    </div>
    <div class="form-group col-md-4"></div>
  </div>
  <div class="form-group col-md-4"></div>
  <div class="form-row">
    <div class="form-group col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">E Posta</label>
    <input type="mail" class="form-control" id="inputAddress2" placeholder="E postasınızı giriniz..." name="eposta">
  </div>
  <div class="form-group col-md-4"></div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputCity">Şehir</label>
      <input type="text" class="form-control" placeholder="Şehir/ Ülke giriniz..." name="sehir">
    </div>
    <div class="form-group col-md-6"></div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputState">Bölüm</label>
      <select id="inputState" class="custom-select mr-sm-2" name="bolum">
        <option selected>Seçiniz....</option>
        <option>Acil Yardım ve Afet Yönetimi</option>    
<option>Adli Bilimler</option>     
<option>Adli Bilişim Mühendisliği</option>     
<option>Ağaç İşleri Endüstri Mühendisliği</option>     
<option>Aile ve Tüketici Bilimleri</option>    
<option>Aktüerya</option>    
<option>Aktüerya Bilimleri</option>    
<option>Aktüerya ve Risk Yönetimi</option>     
<option>Alman Dili ve Edebiyatı </option>    
<option>Almanca Öğretmenliği</option>    
<option>Amerikan Kültürü ve Edebiyatı</option>     
<option>Animasyon ve Oyun Tasarımı</option>    
<option>Antrenörlük Eğitimi</option>     
<option>Antropoloji</option>     
<option>Arap Dili ve Edebiyatı</option>    
<option>Arapça Öğretmenliği</option>     
<option>Arkeoloji</option>     
<option>Arkeoloji ve Sanat Tarihi</option>     
<option>Arnavut Dili ve Edebiyatı</option>     
<option>Astronomi ve Astrofizik </option>    
<option>Astronomi ve Uzay Bilimleri</option>     
<option>Avrupa Birliği İlişkileri</option>     
<option>Ayakkabı Tasarımı ve Üretimi</option> 
<option>Azerbaycan Dili Öğretmenliği</option>  
<option>Azerbaycan Dili ve Edebiyatı</option>  
<option>Azerbaycan Türkçesi ve Edebiyatı</option>    
<option>Bahçe Bitkileri </option>    
<option>Bahçe Bitkileri Üretimi ve Pazarlaması</option>    
<option>Bahçe ve Tarla Bitkileri</option>
<option>Balıkçılık Teknolojisi Mühendisliği</option>     
<option>Bankacılık</option>    
<option>Bankacılık ve Finans</option>    
<option>Bankacılık ve Sigortacılık</option>    
<option>Basım Teknolojileri (Yüksekokul)</option>    
<option>Basın ve Yayın  </option>    
<option>Batı Dilleri</option>    
<option>Beden Eğitimi ve Spor Öğretmenliği</option>    
<option>Beslenme ve Diyetetik</option>     
<option>Bilgi Güvenliği Teknolojisi</option>   
<option>Bilgi ve Belge Yönetimi</option>     
<option>Bilgi ar Bilimleri</option>    
<option>Bilgi ar Mühendisliği</option>     
<option>Bilgi ar Teknolojisi ve Bilişim Sistemleri (Yüksekokul)</option>     
<option>Bilgi ar ve Öğretim Teknolojileri Öğretmenliği</option>    
<option>Bilgi ar ve Yazılım Mühendisliği</option>    
<option>Bilgi ar-Enformatik</option>     
<option>Bilim Tarihi</option>    
<option>Bilişim Sistemleri Mühendisliği</option>     
<option>Bilişim Sistemleri ve Teknolojileri</option>     
<option>Bitki Koruma</option>    
<option>Bitkisel Üretim ve Teknolojileri</option>    
<option>Biyoenformatik ve Genetik</option>     
<option>Biyokimya</option>     
<option>Biyoloji</option>    
<option>Biyoloji Öğretmenliği</option>     
<option>Biyomedikal Mühendisliği</option>    
<option>Biyomühendislik </option>    
<option>Biyosistem Mühendisliği</option>     
<option>Biyoteknoloji </option>    
<option>Biyoteknoloji ve Moleküler Biyoloji</option>     
<option>Boşnak Dili ve Edebiyatı</option>    
<option>Bulgar Dili ve Edebiyatı</option>    
<option>Canlandırma Filmi Tasarım ve Yönetimi</option>     
<option>Cevher Hazırlama Mühendisliği</option>     
<option>Coğrafya</option>    
<option>Coğrafya Öğretmenliği</option>     
<option>Çağdaş Türk Lehçeleri ve Edebiyatları</option>     
<option>Çağdaş Yunan Dili ve Edebiyatı</option>    
<option>Çalışma Ekonomisi ve Endüstri İlişkileri</option>    
<option>Çerkez Dili ve Edebiyatı</option>    
<option>Çeviribilim</option>     
<option>Çevre Mühendisliği</option>    
<option>Çin Dili ve Edebiyatı</option>     
<option>Çizgi Film ve Animasyon</option>     
<option>Çocuk Gelişimi</option>    
<option>Deniz İşletmeciliği ve Yönetimi</option>     
<option>Deniz Ulaştırma İşletme Mühendisliği</option>    
<option>Denizcilik İşletmeleri Yönetimi</option>     
<option>Deri Mühendisliği</option>     
<option>Dijital Oyun Tasarımı</option>     
<option>Dil ve Konuşma Terapisi </option>    
<option>Dilbilim</option>    
<option>Dilbilimi</option>     
<option>Diş Hekimliği</option>     
<option>Ebelik</option>    
<option>Eczacılık</option>     
<option>Ekonometri</option>    
<option>Ekonomi</option>     
<option>Ekonomi ve Finans</option>     
<option>El Sanatları</option>    
<option>El Sanatları Tasarımı ve Üretimi</option>    
<option>Elektrik Mühendisliği</option>     
<option>Elektrik-Elektronik Mühendisliği</option>    
<option>Elektronik Mühendisliği</option>     
<option>Elektronik Ticaret ve Teknoloji Yönetimi</option>    
<option>Elektronik ve Haberleşme Mühendisliği</option>     
<option>Endüstri Mühendisliği</option>     
<option>Endüstri Ürünleri Tasarımı</option>    
<option>Endüstri ve Sistem Mühendisliği</option>     
<option>Endüstriyel Tasarım</option>     
<option>Endüstriyel Tasarım Mühendisliği</option>    
<option>Enerji Mühendisliği</option>     
<option>Enerji Sistemleri Mühendisliği</option>    
<option>Enerji Yönetimi </option>    
<option>Ergoterapi</option>    
<option>Ermeni Dili ve Edebiyatı</option>    
<option>Ermeni Dili ve Kültürü</option>  
<option>Eski Yunan Dili ve Edebiyatı</option>    
<option>Fars Dili ve Edebiyatı  </option>    
<option>Felsefe</option>     
<option>Felsefe Grubu Öğretmenliği</option>    
<option>Fen Bilgisi Öğretmenliği</option>    
<option>Film Tasarım ve Yazarlık</option>    
<option>Film Tasarım ve Yönetmenliği</option>    
<option>Film Tasarımı</option>     
<option>Finans ve Bankacılık</option>  
<option>Fizik</option>     
<option>Fizik Mühendisliği</option>    
<option>Fizik Öğretmenliği</option>    
<option>Fizyoterapi ve Rehabilitasyon</option>     
<option>Fotoğraf</option>    
<option>Fotoğraf ve Video</option>     
<option>Fransız Dili ve Edebiyatı</option>     
<option>Fransızca Öğretmenliği</option>    
<option>Gastronomi</option>    
<option>Gastronomi ve Mutfak Sanatları</option>    
<option>Gayrimenkul Geliştirme ve Yönetimi</option>    
<option>Gazetecilik</option>     
<option>Geleneksel Türk Sanatları</option>     
<option>Gemi İnşaatı ve Gemi Makineleri Mühendisliği</option>    
<option>Gemi Makineleri İşletme Mühendisliği</option>    
<option>Gemi ve Deniz Teknolojisi Mühendisliği</option>    
<option>Gemi ve Yat Tasarımı</option>    
<option>Genetik ve Biyomühendislik</option>    
<option>Genetik ve Yaşam Bilimleri Programları</option>    
<option>Geomatik Mühendisliği</option>     
<option>Gerontoloji</option>     
<option>Gıda Mühendisliği</option>     
<option>Gıda Teknolojisi (Yüksekokul)</option>     
<option>Girişimcilik</option>    
<option>Görsel İletişim </option>    
<option>Görsel İletişim Tasarımı</option>    
<option>Görsel Sanatlar </option>    
<option>Görsel Sanatlar ve Görsel İletişim Tasarımı</option>     
<option>Görsel Sanatlar ve İletişim Tasarımı</option>  
<option>Grafik Tasarım</option>    
<option>Gümrük İşletme (Yüksekokul)</option>     
<option>Gürcü Dili ve Edebiyatı</option>     
<option>Güverte (Yüksekokul)</option>    
<option>Halkbilim</option>     
<option>Halkla İlişkiler</option>    
<option>Halkla İlişkiler ve Reklamcılık</option>     
<option>Halkla İlişkiler ve Tanıtım</option>     
<option>Harita Mühendisliği</option>     
<option>Havacılık Elektrik ve Elektroniği</option>     
<option>Havacılık ve Uzay Mühendisliği</option>    
<option>Havacılık Yönetimi</option>    
<option>Hayvansal Üretim (Yüksekokul)</option>     
<option>Hayvansal Üretim ve Teknolojileri</option>
<option>Hemşirelik</option>    
<option>Hemşirelik ve Sağlık Hizmetleri</option>     
<option>Hidrojeoloji Mühendisliği</option>     
<option>Hindoloji</option>     
<option>Hititoloji</option>    
<option>Hukuk</option>     
<option>Hungaroloji</option>     
<option>İbrani Dili ve Edebiyatı</option>    
<option>İç Mimarlık</option>     
<option>İç Mimarlık ve Çevre Tasarımı</option>     
<option>İktisadi ve İdari Bilimler Programları</option>    
<option>İktisadi ve İdari Programlar</option>    
<option>İktisat</option>     
<option>İlahiyat</option>    
<option>İletişim</option>    
<option>İletişim Bilimleri</option>    
<option>İletişim Sanatları</option>    
<option>İletişim Tasarımı</option>     
<option>İletişim Tasarımı ve Medya</option>    
<option>İletişim Tasarımı ve Yönetimi</option>     
<option>İletişim ve Tasarım</option>     
<option>İlköğretim Matematik Öğretmenliği</option>     
<option>İmalat Mühendisliği</option>     
<option>İngiliz Dil Bilimi</option>    
<option>İngiliz Dili ve Edebiyatı</option>     
<option>İngiliz Dili ve Karşılaştırmalı Edebiyat</option>    
<option>İngiliz ve Rus Dilleri ve Edebiyatları</option>  
<option>İngilizce Öğretmenliği</option>    
<option>İnsan Kaynakları Yönetimi</option>     
<option>İnşaat Mühendisliği</option>     
<option>İslam Ekonomisi ve Finans</option>     
<option>İslam Bilimleri</option>   
<option>İslami İlimler</option>    
<option>İspanyol Dili ve Edebiyatı</option>    
<option>İstatistik</option>    
<option>İstatistik ve Bilgi ar Bilimleri</option>    
<option>İş Sağlığı ve Güvenliği</option>     
<option>İşletme</option>     
<option>İşletme Bilgi Yönetimi (Yüksekokul)</option>     
<option>İşletme Enformatiği</option>     
<option>İşletme Mühendisliği</option>    
<option>İşletme Yönetimi</option>    
<option>İşletme-Ekonomi </option>    
<option>İtalyan Dili ve Edebiyatı</option>     
<option>Japon Dili ve Edebiyatı </option>    
<option>Japonca Öğretmenliği</option>    
<option>Jeofizik Mühendisliği</option>     
<option>Jeoloji Mühendisliği</option>    
<option>Kamu Yönetimi</option>     
<option>Kanatlı Hayvan Yetiştiriciliği</option>    
<option>Karşılaştırmalı Edebiyat</option>    
<option>Kentsel Tasarım ve Peyzaj Mimarlığı</option>     
<option>Kimya</option>     
<option>Kimya Mühendisliği</option>    
<option>Kimya Mühendisliği ve Uygulamalı Kimya</option>    
<option>Kimya Öğretmenliği</option>    
<option>Kimya ve Süreç Mühendisliği</option>     
<option>Kimya-Biyoloji Mühendisliği</option>     
<option>Klasik Arkeoloji</option>    
<option>Konaklama İşletmeciliği</option>     
<option>Konaklama ve Turizm İşletmeciliği (Yüksekokul)</option>    
<option>Kontrol ve Otomasyon Mühendisliği</option>     
<option>Kore Dili ve Edebiyatı</option>    
<option>Kurgu-Ses ve Görüntü Yönetimi</option>     
<option>Kuyumculuk ve Mücevher Tasarımı</option>     
<option>Kültür Varlıklarını Koruma ve Onarım</option>    
<option>Kültür ve İletişim Bilimleri</option>    
<option>Küresel Siyaset ve Uluslararası İlişkiler</option>     
<option>Kürt Dili ve Edebiyatı </option>
<option>Latin Dili ve Edebiyatı  </option>   
<option>Leh Dili ve Edebiyatı</option>     
<option>Lif ve Polimer Mühendisliği</option>     
<option>Lojistik (Yüksekokul)</option>     
<option>Lojistik ve Taşımacılık (Yüksekokul)</option>    
<option>Lojistik Yönetimi</option>     
<option>Maden Mühendisliği</option>    
<option>Makine Mühendisliği</option>     
<option>Makine ve İmalat Mühendisliği </option>    
<option>Maliye</option>    
<option>Malzeme Bilimi ve Mühendisliği</option>    
<option>Malzeme Bilimi ve Nanoteknoloji Mühendisliği</option>    
<option>Malzeme Bilimi ve Teknolojileri</option>     
<option>Matematik</option>     
<option>Matematik Mühendisliği</option>    
<option>Matematik Öğretmenliği</option>    
<option>Matematik ve Bilgi ar Bilimleri </option>    
<option>Matematik-Bilgi ar</option>    
<option>Medya ve Görsel Sanatlar</option>    
<option>Medya ve İletişim</option>     
<option>Mekatronik Mühendisliği</option>     
<option>Mekatronik Sistemler Mühendisliği</option>     
<option>Metalurji ve Malzeme Mühendisliği</option>     
<option>Meteoroloji Mühendisliği</option>    
<option>Mimarlık</option>    
<option>Moda Tasarımı</option>     
<option>Moda ve Tekstil Tasarımı</option>    
<option>Moleküler Biyoloji ve Genetik</option>     
<option>Moleküler Biyoteknoloji</option>     
<option>Muhasebe (Yüksekokul)</option>     
<option>Muhasebe Bilgi Sistemleri (Yüksekokul)</option>    
<option>Muhasebe ve Denetim</option>     
<option>Muhasebe ve Finans Yönetimi</option>     
<option>Mühendislik Programları</option>     
<option>Mühendislik ve Doğa Bilimleri Programları</option>     
<option>Mütercim-Tercümanlık</option>    
<option>Müzecilik</option>     
<option>Nanobilim ve Nanoteknoloji</option>    
<option>Nanoteknoloji Mühendisliği</option>    
<option>Nükleer Enerji Mühendisliği</option>     
<option>Odyoloji</option>    
<option>Okul Öncesi Öğretmenliği</option>    
<option>Optik ve Akustik Mühendisliği</option>     
<option>Organik Tarım İşletmeciliği (Yüksekokul)</option>    
<option>Orman Endüstrisi Mühendisliği</option>     
<option>Orman Mühendisliği</option>    
<option>Ortez-Protez</option>      
<option>Otel Yöneticiliği (Yüksekokul)</option>    
<option>Otomotiv Mühendisliği</option>     
<option>Özel Eğitim Öğretmenliği</option>    
<option>Pazarlama</option>     
<option>Perfüzyon</option>     
<option>Petrol ve Doğalgaz Mühendisliği</option>     
<option>Peyzaj Mimarlığı</option>    
<option>Pilotaj</option>     
<option>Polimer Mühendisliği</option>    
<option>Polonya Dili ve Kültürü</option>     
<option>Protohistorya ve Ön Asya Arkeolojisi</option>    
<option>Psikoloji</option>     
<option>Radyo ve Televizyon</option>     
<option>Radyo, Televizyon ve Sinema</option>     
<option>Raylı Sistemler Mühendisliği</option>    
<option>PDR Rehberlik ve Psikolojik Danışmanlık</option>     
<option>Reklam Tasarımı ve İletişimi</option>    
<option>Reklamcılık</option>     
<option>Reklamcılık ve Halkla İlişkiler </option>    
<option>Rekr syon</option>     
<option>Rekr syon Yönetimi</option>    
<option>Restorasyon ve Konservasyon (Yüksekokul)</option>    
<option>Rus Dili Öğretmenliği </option>
<option>Rus Dili ve Edebiyatı</option>     
<option>Rus Dili ve Edebiyatı Öğretmenliği</option>  
<option>Rus ve İngiliz Dilleri ve Edebiyatı</option>     
<option>Sağlık Yönetimi</option>     
<option>Sanat Tarihi</option>    
<option>Sanat ve Kültür Yönetimi</option>    
<option>Sanat ve Sosyal Bilimler Programları</option>    
<option>Sanat Yönetimi</option>    
<option>Sermaye Piyasaları ve Portföy Yönetimi (Yüksekokul)</option>     
<option>Sermaye Piyasası (Yüksekokul)</option>     
<option>Seyahat İşletmeciliği</option>     
<option>Seyahat İşletmeciliği ve Turizm Rehberliği</option>    
<option>Sınıf Öğretmenliği</option>    
<option>Sigortacılık (Yüksekokul)</option>     
<option>Sigortacılık ve Aktüerya Bilimleri</option>    
<option>Sigortacılık ve Risk Yönetimi</option>     
<option>Sigortacılık ve Sosyal Güvenlik</option>     
<option>Sinema ve Dijital Medya</option>     
<option>Sinema ve Televizyon</option>    
<option>Sinoloji</option>    
<option>Siyasal Bilimler</option>  
<option>Siyaset Bilimi  </option>    
<option>Siyaset Bilimi ve Kamu Yönetimi</option>     
<option>Siyaset Bilimi ve Uluslararası İlişkiler</option>    
<option>Sosyal ve Siyasal Bilimler</option> 
<option>Sosyal Bilgiler Öğretmenliği</option>    
<option>Sosyal Hizmet</option>     
<option>Sosyoloji</option>     
<option>Spor Yöneticiliği</option>     
<option>Su Bilimleri ve Mühendisliği</option>    
<option>Su Ürünleri Mühendisliği</option>    
<option>Sümeroloji</option>    
<option>Süryani Dili ve Edebiyatı</option>     
<option>Süt Teknolojisi</option>     
<option>Şehir ve Bölge Planlama</option>     
<option>Takı Tasarımı</option>     
<option>Tapu Kadastro (Yüksekokul)</option>    
<option>Tarım Ekonomisi</option>     
<option>Tarım Makineleri ve Teknolojileri Mühendisliği</option>    
<option>Tarımsal Biyoteknoloji</option>    
<option>Tarımsal Genetik Mühendisliği</option>     
<option>Tarımsal Yapılar ve Sulama</option>    
<option>Tarih</option>     
<option>Tarih Öğretmenliği</option>    
<option>Tarih Öncesi Arkeolojisi</option>    
<option>Tarla Bitkileri </option>    
<option>Taşınabilir Kültür Varlıklarını Koruma ve Onarım</option>    
<option>Teknoloji ve Bilgi Yönetimi</option>     
<option>Tekstil Mühendisliği</option>    
<option>Tekstil Tasarımı</option>    
<option>Tekstil ve Moda Tasarımı</option>    
<option>Televizyon Haberciliği ve Programcılığı </option>    
<option>Tıp</option>   
<option>Tıp Mühendisliği</option>    
<option>Tiyatro Eleştirmenliği ve Dramaturji</option>    
<option>Toprak Bilimi ve Bitki Besleme</option>    
<option>Turizm İşletmeciliği</option>    
<option>Turizm İşletmeciliği ve Otelcilik (Yüksekokul)</option>    
<option>Turizm Rehberliği</option>     
<option>Turizm ve Otel İşletmeciliği</option>    
<option>Turizm ve Otelcilik</option>     
<option>Türk Dili ve Edebiyatı</option>    
<option>Türk Dili ve Edebiyatı Öğretmenliği</option>     
<option>Türk Halkbilimi</option>     
<option>Türk İslam Arkeolojisi</option>    
<option>Türkçe Öğretmenliği</option>     
<option>Türkoloji</option>     
<option>Tütün Eksperliği (Yüksekokul)</option>     
<option>Uçak Elektrik-Elektronik</option>    
<option>Uçak Gövde-Motor Bakım</option>    
<option>Uçak Mühendisliği</option>     
<option>Uçak ve Uzay Mühendisliği</option>     
<option>Ukrayna Dili ve Edebiyatı</option>     
<option>Ulaştırma Mühendisliği</option>    
<option>Ulaştırma ve Lojistik</option>     
<option>Uluslararası Finans</option>     
<option>Uluslararası Finans ve Bankacılık</option>     
<option>Uluslararası Girişimcilik</option>     
<option>Uluslararası İlişkiler</option>    
<option>Uluslararası İşletme Yönetimi</option>     
<option>Uluslararası İşletmecilik</option>     
<option>Uluslararası İşletmecilik ve Ticaret</option>    
<option>Uluslararası Lojistik ve Taşımacılık</option>    
<option>Uluslararası Lojistik Yönetimi</option>    
<option>Uluslararası Ticaret</option>    
<option>Uluslararası Ticaret ve Finans  </option>    
<option>Uluslararası Ticaret ve İşletmecilik</option>    
<option>Uluslararası Ticaret ve Lojistik</option>    
<option>Uluslararası Ticaret ve Lojistik Yönetimi</option>     
<option>Urdu Dili ve Edebiyatı</option>    
<option>Uzay Bilimleri ve Teknolojileri</option>     
<option>Uzay Mühendisliği</option>     
<option>Veteriner</option>     
<option>Yaban Hayatı Ekolojisi ve Yönetimi</option>    
<option>Yazılım Mühendisliği</option>    
<option>Yeni Medya</option>    
<option>Yeni Medya ve Gazetecilik</option>     
<option>Yeni Medya ve İletişim</option>    
<option>Yerel Yönetimler</option>    
<option>Yiyecek ve İçecek İşletmeciliği </option>    
<option>Yönetim Bilimleri Programları</option>     
<option>Yönetim Bilişim Sistemleri</option>    
<option>Yunan Dili ve Edebiyatı</option>
<option>Zaza Dili ve Edebiyatı</option> 
<option>Ziraat Mühendisliği Programları</option>  
<option>Zootekni</option>
      </select>
    </div>
    <div class="form-group col-md-4"></div>
  </div>
  <div class="row">
    <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputZip">Telefon Numarası</label>
      <input type="number" class="form-control" placeholder="Numaranızı giriniz..." name="telefonno">
    </div>
    <div class="form-group col-md-4"></div>
  </div>
  <div class="row">
     <div class="form-group col-md-4"></div>
      <div class="form-group col-md-4">
    <a href="kay.php" class="btn btn-secondary">Kayıtlar</a>
    <button type="submit" class="btn btn-primary" style="float: right;">Kaydet</button>
    <div class="form-group col-md-4"></div>
  </div>
  </table>
</form>