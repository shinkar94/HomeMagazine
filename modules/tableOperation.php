<?php

    $conn = new mysqli('localhost','root','root','homemagazine');
    $database_query   = mysqli_query($conn, "SELECT DATE_FORMAT(`date`, '%d.%m.%Y') as dateOp, `money`, `Operation`,`Journal_Name`, `description`  
    FROM `movement` order by `date` desc LIMIT 20");
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
                $operation = '';
                switch ($row['Operation']){
                    case '0001': $operation = 'Доход'; break;
                    case '0002': $operation = 'Расход'; break;
                    case '0003': $operation = 'Перевод в наличные'; break;
                    case '0004': $operation = 'Перевод в падушку'; break;
                    default: $operation = "ERROR"; break;
                }
                if($row['Operation'])
                echo '<tr>
                    <td>'.$row['dateOp'].'</td>
                    <td>'.$row['money'].' BYN</td>
                    <td>'.$operation.'</td>
                    <td>'.$row['Journal_Name'].'</td>
                    <td>'.$row['description'].'</td>
                </tr>';
            }
        echo '
        </tbody>
    </table>';
    
    $conn->close();
?>