<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашний Журнал</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php 
        $conn = new mysqli('localhost','root','root','homemagazine');
        $database_query   = mysqli_query($conn, "SELECT * FROM `movement` ");
        // $database_result  = mysqli_fetch_assoc($database_query);
        // echo'<h1>'.$database_result['money'].'</h1>';
        // echo'<h3>'.$database_result['Operation'].'</h3>'; 
    ?>
    <header>
        <div class="Toolbar">
            <button class="btn btnBar"><img src="" alt=""><p>Список Доходов</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Список Расходов</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Журнал Категорий</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Анализ</p></button>
        </div>
    </header>
    <main>
        <div class="infoMain btnPanel">
            <button class="btnMenu">Send</button>
            <button class="btnMenu">Send</button>
            <button class="btnMenu">Send</button>
            <button class="btnMenu">Send</button>
        </div>
        <div class="infoMain sendInfo">
            <div class="Date_Info">
                <div class="Date incomeData">
                    <div class="tittleData title">Доход</div>
                    <input type="date" class="dateSend">
                    <select class="opirationName">
                        <option value="1">Зарплата(Ованс)</option>
                        <option value="2">Зарплата</option>
                        <option value="3">ИП</option>
                        <option value="4">Другое</option>
                    </select>
                    <input type="text" class="sum" placeholder="СУММА">
                    <textarea class="description" placeholder="Описание"></textarea>
                    <button class="btnSend incomeBtn">Отправить</button> 
                </div>
                <div class="Date expenseData">
                    <div class="tittleData title">Расход</div>
                    <input type="date" class="dateSend">
                    <select class="opirationName">
                        <option value="1">Зарплата(Ованс)</option>
                        <option value="2">Зарплата</option>
                        <option value="3">ИП</option>
                        <option value="4">Другое</option>
                    </select>
                    <input type="text" class="sum" placeholder="СУММА">
                    <textarea class="description" placeholder="Описание"></textarea>
                    <button class="btnSend expenseBtn">Отправить</button>
                </div>
            </div>
            <div class="operations">
                <table>
                    <thead>
                        <tr>
                            <td>Дата</td>
                            <td>СУММА</td>
                            <td>Операция</td>
                            <td>Имя журнала учёта</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($database_query)){
                            echo '<tr>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['money'].'</td>
                                <td>'.$row['Operation'].'</td>
                                <td>'.$row['Journal name'].'</td>
                            </tr>';
                        }

                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="infoMain bdInfo">
            <div class="itemBd">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ipsa. Cum voluptas accusamus, consequatur veniam harum, facilis, quaerat neque inventore vero sint sed corrupti provident.</p>
            </div>
            <div class="itemBd">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ipsa. Cum voluptas accusamus, consequatur veniam harum, facilis, quaerat neque inventore vero sint sed corrupti provident.</p>
            </div>
            <div class="itemBd">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ipsa. Cum voluptas accusamus, consequatur veniam harum, facilis, quaerat neque inventore vero sint sed corrupti provident.</p>
            </div>
            <div class="itemBd">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, ipsa. Cum voluptas accusamus, consequatur veniam harum, facilis, quaerat neque inventore vero sint sed corrupti provident.</p>
            </div>
        </div>
        
    </main>

    <script type="module" src="js/index.js"></script>
</body>
</html>