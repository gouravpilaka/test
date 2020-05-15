<?php


$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL);
mysqli_real_connect($con, "localhost02.mysql.database.azure.com", "pilakag1@localhost02", Pilakag_1, pilakag1_db, 3306);

// Check connection
if (!$con) {
   die("Connection faild: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
