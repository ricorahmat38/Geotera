<?php

$connection = mysqli_connect("localhost", "root",  "", "db_tempatsampah");

$sql = mysqli_query($connection, "select * from tb_tempatsampah");
$data = mysqli_fetch_array($sql);

$tinggi_max_tempatsampah = 300;
$jari2 = 1;
$phi = 3.14;

$tinggi_sampah = $tinggi_max_tempatsampah - $data['tinggi'];
$prosentase_tinggi_sampah = ($tinggi_sampah / $tinggi_max_tempatsampah) * 100;
$volume = $phi * ($jari2 * $jari2) * ($tinggi_sampah / 100);
$liter = $volume * 1000;


?>

<div class="pegangan"></div>

<div class="penutup"></div>

<div class="tangki">
    <div class="sampah" style=" width: 100%; height: <?php echo 
    $prosentase_tinggi_sampah; ?>%; color: black;">

    <?php 
    
    echo "Tinggi sampah : ".($tinggi_sampah/100)."m" ;
    echo "<br>";
    echo "Volume sampah : ".($volume)."m3" ;
    echo "<br>";
    echo "Liter sampah : ".number_format($liter)."liter" ;
    
    ?>

    </div>
</div>