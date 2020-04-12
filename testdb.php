<?php

$dbhost = getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbport = getenv("OPENSHIFT_MYSQL_DB_PORT");
$dbuser = getenv("OPENSHIFT_MYSQL_DB_USER");
$dbpwd = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$dbname = getenv("OPENSHIFT_GEAR_NAME");

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
