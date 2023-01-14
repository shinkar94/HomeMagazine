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
        $connMoney = new mysqli('localhost','root','root','homemagazine');
        $db_money = mysqli_query($connMoney, "SELECT SUM(`money`) as countMoney FROM `movement` WHERE `Operation` = 'Доход' ");
        $countDb = mysqli_fetch_assoc($db_money);
    echo '
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
                    <p>'.$countDb['countMoney'].'BYN</p>
                    <p>500 RUB</p>
                    <p>500 USD</p>
                    <p>500 EUR</p>
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
                        <option>Другое</option>
                    </select>
                    <input type="text" class="sum" placeholder="СУММА">
                    <textarea class="description" placeholder="Описание"></textarea>
                    <button class="btnSend expenseBtn">Отправить</button>
                </div>
            </div>
            <div class="operations">';
                require "modules/tableOperation.php";
            echo '
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
        
    </main>';
    // $conn->close();
    ?>

    <script type="module" src="js/index.js"></script>
</body>
</html>