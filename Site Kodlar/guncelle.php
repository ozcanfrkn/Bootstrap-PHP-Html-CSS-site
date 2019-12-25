<form action="" method="POST">
<link rel="stylesheet" href="css/bootstrap.min.css">

<?php 
include 'baglan.php';

$id=$_GET["id"];
 $sorgu = $db->prepare("SELECT * FROM odev where id=:id");
$sorgu ->execute(array(":id"=>$id));
$liste=$sorgu->fetch(PDO::FETCH_ASSOC);

@$adi=$_POST["ad"];
@$soyadi=$_POST["soyad"];
@$okulno=$_POST["okulno"];
@$eposta=$_POST["eposta"];
@$sehir=$_POST["sehir"];
@$bolumu=$_POST["bolum"];
@$telefonno=$_POST["telefonno"];



$db->query("SET CHARACTER SET utf8");

$query = $db->prepare("UPDATE odev SET
adi=:adi, soyadi=:soyadi, okulno=:okulno, eposta=:eposta, sehir=:sehir, bolumu=:bolumu, telefonno=:telefonno WHERE ID = :id");
$update = $query->execute(array(
     "adi" =>$adi ,
     "soyadi" => $soyadi,
     "okulno" => $okulno,
     "eposta" => $eposta,
     "sehir" => $sehir,
     "bolumu" => $bolumu,
     "telefonno" => $telefonno,
     "id"=>$id
));

 ?>
<head><meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<form>
 
  <div class="form-row">
    <div class="form-group col-md-2"></div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Ad</label>
      <input type="text" placeholder="Adınızı girin...." class="form-control"required="" name="ad" value="<?php echo $liste["adi"];?>"/>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Soyad</label>
      <input type="text" placeholder="Soaydınızı giriniz..." class="form-control" required="" name="soyad" value="<?php echo $liste["soyadi"];?>"/>
    </div>
    <div class="form-group col-md-2"></div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="inputAddress">Okul No</label>
    <input type="number" class="form-control" required="" placeholder="Okul numaranızı girin.." name="okulno" value="<?php echo $liste["okulno"];?>"/>
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
    <input type="mail" class="form-control" id="inputAddress2" placeholder="E postasınızı giriniz..." name="eposta" value="<?php echo $liste["eposta"];?>"/>
  </div> 
  <div class="form-group col-md-4"></div>
</div>
  <div class="form-row">
    <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputCity">Şehir</label>
      <input type="text" class="form-control" placeholder="Şehir/ Ülke giriniz..."  name="sehir" value="<?php echo $liste["sehir"];?>"/>
    </div>
    <div class="form-group col-md-6"></div>
  </div>

    <div class="form-row">
      <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputState">Bölüm</label>
      <select id="inputState" class="custom-select mr-sm-2" name="bolum" >
        <option selected  value="<?php echo $liste["bolumu"];?>"></option>
        <option>Bilgisayar Mühendisliği</option>
        <option>Makine Mühendisliği</option>
        <option>Elektrik-Elektronik Mühendisliği</option>
        <option>Kimya Mühendisliği</option>
        <option>Gıda Mühendisliği</option>
        <option>Yazılım Mühendisliği</option>
        <option>Elektrik Mühendisliği</option>
        <option>Biyomühendislik Mühendisliği</option>
        <option>Çevre Mühendisliği</option>
        <option>Endüstri Mühendisliği</option>
        <option>Fizik Mühendisliği</option>
        <option>Harita Mühendisliği</option>
        <option>İnşaat Mühendisliği</option>
        <option>İlimat Mühendisliği</option>
        <option>İşletme Mühendisliği</option>
        <option>Maden Mühendisliği</option>
        <option>Hemşirelik Bölümü</option>
        <option>Acil Yardım ve Afet Yönetimi Bölümü</option>
        <option>Antropoloji Bölümü</option>
        <option>Beslenme ve Diyetetik Bölümü </option>
        <option>Biyokimya Bölümü </option>
        <option>Biyomedikal Mühendisliği Bölümü</option>
        <option>Diş Hekimliği Bölümü </option>
        <option>Ebelik Bölümü </option>
        <option>Eczacılık Bölümü</option>
        <option>Ergoterapi Bölümü</option>
        <option>Odyoloji Bölümü </option>
        <option>Sağlık Yönetimi Bölümü</option>
        <option>Tıp Fakültesi</option>
        <option>Veterinerlik Bölümü </option>
        <option>Nükleer Tıp Teknikleri Bölümü</option>
        <option>Hukuk</option>
        <option>İç Mimar</option>
        <option>Mimmarlık</option>
        <option>Diş Hekimliği</option>
        <option>Yaşlı Bakımı Bölümü</option>

      </select>
    </div>
    <div class="form-group col-md-4"></div>
  </div>
  <div class="row">
    <div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputZip">Telefon Numarası</label>
      <input type="number" class="form-control" placeholder="Numaranızı giriniz..." name="telefonno" value="<?php echo $liste["telefonno"];?>"/>
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