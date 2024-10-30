<?php 
    if(isset($_GET['channel']) && isset($_GET['state'])){
        include 'connection.php';
        $state = $_GET['state'];
        $channel = $_GET['channel'];

        if($channel == '1'){
            mysqli_query($dbconnect, "UPDATE tb_control SET lampu1='$state'");           
        }
        header('location: index.php');
        exit;
    }

?>