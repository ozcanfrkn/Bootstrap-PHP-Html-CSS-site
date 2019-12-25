<?php
include("kay.php");
if(!isset($_SESSION["login"])){
echo "Admin sayfasina hosgeldiniz..<br>";
echo "<a href=logout.php  >Çıkış Yap</a>";
}
?>