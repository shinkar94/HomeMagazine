<?php

    $conn = new mysqli('localhost','root','root','homemagazine');
    $database_query   = mysqli_query($conn, "SELECT DATE_FORMAT(`date`, '%d.%m.%Y') as dateOp, `money`, `Operation`,`Journal_Name`, `description`  
    FROM `movement` order by `date` desc");
    echo '
    <table>
        <thead>
            <tr>
                <td>Дата</td>
                <td>СУММА</td>
                <td>Операция</td>
                <td>Статья</td>
                <td>Описание</td>
            </tr>
        </thead>
        <tbody>';
            while($row = mysqli_fetch_assoc($database_query)){
                echo '<tr>
                    <td>'.$row['dateOp'].'</td>
                    <td>'.$row['money'].' BYN</td>
                    <td>'.$row['Operation'].'</td>
                    <td>'.$row['Journal_Name'].'</td>
                    <td>'.$row['description'].'</td>
                </tr>';
            }
        echo '
        </tbody>
    </table>';
    
    $conn->close();
?>