<?php

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("MYSQL_USER");
$dbpwd = getenv("MYSQL_PASSWORD");
$dbname = getenv("MYSQL_DATABASE");

$con = mysqli_connect($dbhost.':'.$dbport,$dbuser,$dbpwd,$dbname);
if(!$con){
   echo "Could not connect to database";
}else{
    echo "Connection to database.<br>";
}
$sql = "show tables";
$rs = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($rs)){
  echo '<pre>';
  print_r($row);
  echo '</pre>';
}
mysqli_close();
?>
