<?php
    $date = $_POST['date'];
    $opirationName = $_POST['opirationName'];
    $sum = $_POST['sum'];
    $description = $_POST['description'];

    echo $date;
    echo $opirationName;
    echo $sum;
    echo $description;

    switch($opirationName){
        case "0003": $deposit = "Cash"; break;
        case "0004": $deposit = "Pillow"; break;
        default: echo 'ERROR globalOP'; break;
    }

    if(strlen($opirationName) > 0){
        $mysql = new mysqli('localhost','root','root','homemagazine');
        $mysql->query("INSERT INTO `movement`(`date`, `money`, `Operation`, `Journal_Name`, `description`, `checkName`, `Deposit`) 
        VALUES ('$date',$sum,'$opirationName', 'Перевод', '$description', '$nameCheck', '$deposit')");
        $mysql->close();
    }
?>