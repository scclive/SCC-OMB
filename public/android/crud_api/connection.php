<?php

$host = "localhost";
$user = "ohhmybug_admin";
$pass = "scc@scc.ohhmybug.com123";
$db = "ohhmybug_laraquiz";

$con = mysqli_connect($host,$user,$pass, $db);
if($con) echo "Success";
else echo "Failed";

// if($con){
//   echo "Koneksi Berhasil";
// }else{
//   echo "gagal";
// }

 ?>
