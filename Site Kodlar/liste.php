<form action="#" method="get">


<?php 
include ("baglan.php");
$query = $db->query("SELECT * FROM ogrenci1 Order By ID");//Tüm verileri getir
$query->execute();
	
$liste=$query->fetchAll(PDO::FETCH_OBJ);
 if(@$_GET["id"]){
	
$query = $db->prepare("DELETE FROM ogrenci1 WHERE ID = :id");
$delete = $query->execute(array(
   'id' => $_GET['id']
));
if($delete){
		 print $delete. " Adet Kaydı Sildik";
         header('refresh: 2  liste.php');	//süreli yönlendirme sayfayı el ile yenilemeye gerek kalmasın diye aynı zamanda id görmek için süre koyuldu
	}
	else
		echo("Başarızı");
}
 ?>
 <html lang="tr">
<head>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<meta charset="UTF-8">
 	<title>Liste</title>
 	<style>
.table{
	margin-top: 20px;
	margin-right: 15px;
   border-radius: 20px;
}
#sil{
	margin-right: 5px;	
}
 	</style>
 </head>
 <body style="background-color:#454d55; ">
 	  
 	<div class="container">
 		<div class="row">
 			<div class="col">
 				<table class="table  table-dark table-hover">
                     <tr>
                     	<th colspan="7"><a href="indexs.php" class="btn btn-success " style="border-radius: 7px;" >Yeni Kayıt </a></th>
                     </tr>
 					<tr style="color: orange;" >
 					    <th>ID</th>
 						<th>Adı</th>
 						<th>Soyadı</th>
 						<th>Okul Numarası</th>
 						<th>Bölüm</th>	
 						<th>E-Posta</th>	
 						<th colspan="2" >Düzenleme</th>	
 					</tr>
 					<?php 
 					foreach ($liste as $list) { ?>
 						<tr>
 						    <td><?=$list->ID?></td>
 						    <td><?=$list->adi?></td>
 						    <td><?=$list->soyadi?></td>
 						    <td><?=$list->okulno?></td>
 						    <td><?=$list->bolum?></td>
 						    <td><?=$list->eposta?></td>
 						    <td><a href="liste.php?id=<?=$list->ID?>" id="sil" class="btn btn-danger">Sil<a class="btn btn-info" href="güncelle.php?id=<?=$list->ID?>">Güncelle</a></td>
 						</tr>
 					
 						<?php }?>
	
 						


 						

  
 					
     

 				</table>
 				
 		


 			</div>
 		</div>
 	</div>

 </body>

 </html>
 </form>