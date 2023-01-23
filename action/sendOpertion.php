<?php
    $date = $_POST['date'];
    $opirationName = $_POST['opirationName'];
    $sum = $_POST['sum'];
    $description = $_POST['description'];
    $statusSend = $_POST['statusSend'];
    $nameCheck = $_POST['nameCheck'];
    $deposit = $_POST['deposit'];

    switch($statusSend){
        case "incomeBtn": $globalOP = "0001"; break;
        case "expenseBtn": $globalOP = "0002"; break;
        default: echo 'ERROR globalOP'; break;
    }

    echo $date;
    echo $opirationName;
    echo $sum;
    echo $description;
    echo $statusSend;
    echo $nameCheck;

    echo "-------------";
    // echo "INSERT INTO `movement`(`date`, `money`, `Operation`, `Journal_Name`, `description`, `checkName`, `Deposit`) 
    // VALUES ('$date',$sum,'$globalOP', '$opirationName', '$description', '$nameCheck', `$deposit`)";

    if(strlen($opirationName) > 0){
        echo 'yes connect';
        $mysql = new mysqli('localhost','root','root','homemagazine');
        $mysql->query("INSERT INTO `movement`(`date`, `money`, `Operation`, `Journal_Name`, `description`, `checkName`, `Deposit`) 
        VALUES ('$date',$sum,'$globalOP', '$opirationName', '$description', '$nameCheck', '$deposit')");
        $mysql->close();
    }
    
?>