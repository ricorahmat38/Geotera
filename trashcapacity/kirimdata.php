<?php 

$connection = mysqli_connect("localhost", "root",  "", "db_tempatsampah");

$tinggi = $_GET['tinggi'] ;

mysqli_query($connection, "UPDATE tb_tempatsampah SET tinggi='$tinggi'");

?>