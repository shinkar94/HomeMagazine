<?php
    $date = $_POST['date'];
    $opirationName = $_POST['opirationName'];
    $sum = $_POST['sum'];
    $description = $_POST['description'];
    $statusSend = $_POST['statusSend'];

    if($statusSend == "incomeBtn"){
        $globalOP = "Доход";
    }else{
        $globalOP = "Расход";
    }
    echo $globalOP;

    if(strlen($opirationName) > 0){
        $mysql = new mysqli('localhost','root','root','homemagazine');
        $mysql->query("INSERT INTO `movement`(`date`, `money`, `Operation`, `Journal_Name`, `description`) 
        VALUES ('$date',$sum,'$globalOP', '$opirationName', '$description')");
        $mysql->close();
    }
    
?>