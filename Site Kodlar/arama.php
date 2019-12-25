<form action="" method="get">
<style>	
</style>
<?php 
include ("baglan.php");
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
          <th colspan="9"><a href="yenii.php" class="btn btn-success " style="border-radius: 7px;" >Yeni Kayıt</a>
            <input type="submit" value="ARA" class="btn btn-primary" style="float: right; margin: auto; " />
            <input type="text" style="float: right;margin-right: 5px" name="arama">
            <a href="kay.php" class="btn btn-primary" style="float: right;margin-right: 5px" name="arama">Kayıtlar</th>
        </tr>
    </tr>
    <tr>
      <th scope="col" >#</th>
      <th scope="col" style="color: orange;">ADI</th>
      <th scope="col">SOYADI</th>
      <th scope="col">OKUL NO</th>
      <th scope="col">E-POSTA</th>
      <th scope="col">SEHIR</th>
      <th scope="col">BOLUMU</th>
      <th scope="col">TELEFON NO</th>
      <th scope="col">DÜZENLEME</th>
    </tr>
  </thead>
  <?php 
if($_GET){
$arama=$_GET['arama'];
if ($arama==null) {
  header("refresh:0.5;url=kay.php");
}else{
 $sorgu = $db->prepare("SELECT * FROM odev WHERE adi LIKE ? or soyadi LIKE ? or okulno LIKE ?");
   $sorgu->execute(array('%'.$arama.'%','%'.$arama.'%','%'.$arama.'%'));     
if ( $sorgu->rowCount() ){
     foreach( $sorgu as $liste ){?>
            <tr>
                <td><?php echo $liste["id"];?></td>
                <td><?php echo $liste["adi"];?></td>
                <td><?php echo $liste["soyadi"];?></td>
                <td><?php echo $liste["okulno"];?></td>
                <td><?php echo $liste["eposta"];?></td>
                <td><?php echo $liste["sehir"];?></td>
                <td><?php echo $liste["bolumu"];?></td>
                <td><?php echo $liste["telefonno"];?></td>
      <td rowspan="4">
      	<div class="btn-group">
      	
      </div>
  </td>
</td>
    </tr>
  </tbody>
  	<?php }}}}?>
</table>
 <?php 
?>
</body>
</html>
</form>
