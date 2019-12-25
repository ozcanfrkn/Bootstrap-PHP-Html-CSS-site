<form action="" method="get">
<style>	
</style>
<?php 
include ("baglan.php");
$query = $db->query("SELECT * FROM odev");//Tüm verileri getir
$query->execute();
	
$liste=$query->fetchAll(PDO::FETCH_OBJ);


 ?>
<html lang="tr">
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
    	<tr>
          <th colspan="10"><a href="yenii.php" class="btn btn-success " style="border-radius: 7px;" >Yeni Kayıt</a><a href="arama.php" class="btn btn-primary" style="float: right; margin: auto; ">ARA</a></th>
        </tr>
    </tr>
    <tr>
      <th scope="col" >#</th>
      <th scope="col" style="color: orange;">ADI</th>
      <th scope="col">SOYADI</th>
      <th scope="col">CİNSİYET</th>
      <th scope="col">OKUL NO</th>
      <th scope="col">E-POSTA</th>
      <th scope="col">SEHIR</th>
      <th scope="col">BOLUMU</th>
      <th scope="col">TELEFON NO</th>
      <th scope="col">DÜZENLEME</th>
    </tr>
  </thead>
  <?php 
  foreach ($liste as $list) { ?>
 <tbody>
 	<tr>
 		 <td><?=$list->id?></td>
 		 <td><?=$list->adi?></td>
 		 <td><?=$list->soyadi?></td>
 		 <td><?=$list->cinsiyet?></td>
 		 <td><?=$list->okulno?></td>
 		 <td><?=$list->eposta?></td>
 		 <td><?=$list->sehir?></td>
 		 <td><?=$list->bolumu?></td>
 		 <td><?=$list->telefonno?></td>
      <td rowspan="4">
      	<div class="btn-group">
      	<a href="kay.php?id=<?=$list->id?>" class="btn btn-danger" >Sil 
      		<a href="guncelle.php?id=<?=$list->id?>" class="btn btn-secondary">Güncelle</a>
      </div>
  </td>
</td>
    </tr>
  </tbody>
  	<?php }?>
</table>
<?php 
 if(@$_GET["id"]){
	
$query = $db->prepare("DELETE FROM odev WHERE id = :id");
$delete = $query->execute(array(
   'id' => $_GET['id']
));
if($delete){
         header('refresh:0.5  kay.php');	//süreli yönlendirme sayfayı el ile yenilemeye gerek kalmasın diye aynı zamanda id görmek için süre koyuldu
	}
	else
		echo("Başarısız");
}
 ?>
 
</body>
</html>
</form>
