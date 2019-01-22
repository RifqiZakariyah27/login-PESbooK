<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pesbuk";

try
{
    // mebuat koneksi PDO
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
}
catch(PDOExeption $e)
{
    // menampilkan error
    die("Terjadi Masalah: ".$e->getMessage());
}

?>