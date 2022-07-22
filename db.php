<?php

$server = "sql209.epizy.com";
$username = "epiz_31082144";
$password = "zygoKQwgT9EwA2";
$dbname = "epiz_31082144_paymentgateway";

$conn = mysqli_connect($server, $username, $password,$dbname);

if(!$conn)
 {
     die("Connection Failed: ".dysqli_connect_error());

}
?>