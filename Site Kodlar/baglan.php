<?php 
try {
  $db = new PDO("mysql:host=fdb24.awardspace.net;dbname=3264432_ozcan;charset=utf8", "3264432_ozcan", "1q2w3e4r5t6y*4952");
} catch ( PDOException $e ){
     print $e->getMessage();
}


 ?>