<?php
    $date = $_POST['date'];
    $opirationName = $_POST['opirationName'];
    $sum = $_POST['sum'];
    $description = $_POST['description'];
    $statusSend = $_POST['statusSend'];

    switch($statusSend){
        case "incomeBtn": $globalOP = "0001"; break;
        case "expenseBtn": $globalOP = "0002"; break;
        case "translationBtn": $globalOP = "0003"; break;
        default: echo 'ERROR globalOP'; break;
    }

    if(strlen($opirationName) > 0){
        $mysql = new mysqli('localhost','root','root','homemagazine');
        $mysql->query("INSERT INTO `movement`(`date`, `money`, `Operation`, `Journal_Name`, `description`) 
        VALUES ('$date',$sum,'$globalOP', '$opirationName', '$description')");
        $mysql->close();
    }
    
?>