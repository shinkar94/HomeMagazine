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
        $database_query   = mysqli_query($conn, "SELECT * FROM `movement` order by `date` desc");
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
            <div class="Data_Info">
                <div class="Info remainderData">
                    <div class="tittleData title">Остаток</div>
                    <p>500 BYN</p>
                </div>
                <div class="Data incomeData">
                    <div class="tittleData title">Доход</div>
                    <input type="date" class="dateSend">
                    <select class="opirationName">
                        <option></option>
                        <option>Зарплата(Ованс) Рома</option>
                        <option>Зарплата(Ованс) Катя</option>
                        <option>Зарплата Рома</option>
                        <option>Зарплата Катя</option>
                        <option>ИП</option>
                        <option>Другое</option>
                    </select>
                    <input type="text" class="sum" placeholder="СУММА">
                    <textarea class="description" placeholder="Описание"></textarea>
                    <button class="btnSend incomeBtn">Отправить</button> 
                </div>
                <div class="Data expenseData">
                    <div class="tittleData title">Расход</div>
                    <input type="date" class="dateSend">
                    <select class="opirationName">
                        <option></option>
                        <option>Продукты</option>
                        <option>Бытовая химия</option>
                        <option>Зверюшки</option>
                        <option>Здоровье</option>
                        <option>Кредиты и Рассрочки</option>
                        <option>Жильё</option>
                        <option>Топливо</option>
                        <option>Авто</option>
                        <option>Бьюти</option>
                        <option>Образование</option>
                        <option>Подарки</option>
                        <option>Такси</option>
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
                            <td>Статья</td>
                            <td>Описание</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($database_query)){
                            echo '<tr>
                                <td>'.$row['date'].'</td>
                                <td>'.$row['money'].' BYN</td>
                                <td>'.$row['Operation'].'</td>
                                <td>'.$row['Journal_Name'].'</td>
                                <td>'.$row['description'].'</td>
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