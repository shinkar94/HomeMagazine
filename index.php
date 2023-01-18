<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашний Журнал</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/preloader.css">
</head>
<body>
    <?php
        require "modules/preloader/preloader.php";

        $connMoney = new mysqli('localhost','root','root','homemagazine');
        $db_money = mysqli_query($connMoney,
            "SELECT 
            (SELECT SUM(a.money) FROM `movement` a WHERE a.Operation = 'Доход') -
            (SELECT SUM(b.money) FROM `movement` b WHERE b.Operation = 'Расход') as countMoney"
        );
        $countDb = mysqli_fetch_assoc($db_money);
    echo '
    <header>
        <div class="Toolbar">
            <button class="btn btnBar"><img src="img/icon/sps.png" alt="sps"><p class="textBtnBar">Список Доходов</p></button>
            <button class="btn btnBar"><img src="img/icon/sps.png" alt="sps"><p class="textBtnBar">Список Расходов</p></button>
            <button class="btn btnBar"><img src="img/icon/zhur.png" alt="zhur"><p class="textBtnBar">Журнал Категорий</p></button>
            <button class="btn btnBar"><img src="img/icon/analiz.png" alt="analiz"><p class="textBtnBar">Анализ</p></button>
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
            <div class="containerInfos">
                <div class="Infos_Panel">
                    <div class="Info remainderData">
                        <div class="tittleData title"><img src="img/icon/money2.png" alt="imgTitle">Остаток</div>
                        <div class="countMoney"><img src="img/flag/byn.png" alt="flagMoney"><p>'.round($countDb['countMoney']).'</p><p class="flagName">BYN</p></div>
                        <div class="countMoney"><img src="img/flag/usd.png" alt="flagMoney"><p>'.round($countDb['countMoney'] / 2.63).'</p><p class="flagName">USD</p></div>
                        <div class="countMoney"><img src="img/flag/eur.png" alt="flagMoney"><p>'.round($countDb['countMoney'] / 2.80).'</p><p class="flagName">EUR</p></div>
                        <div class="countMoney"><img src="img/flag/rub.png" alt="flagMoney"><p>'.round(($countDb['countMoney'] / 3.8) * 100).'</p><p class="flagName">RUB</p></div>
                    </div>
                    <div class="Info remainderData">
                        <div class="tittleData title"><img src="img/icon/card.png" alt="imgTitle"> Карта</div>
                        <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>173</p><p class="flagName">BYN</p></div>
                        <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>104</p><p class="flagName">USD</p></div>
                        <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>98</p><p class="flagName">EUR</p></div>
                        <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>7000</p><p class="flagName">RUB</p></div>
                    </div>
                    <div class="Info remainderData">
                        <div class="tittleData title"><img src="img/icon/money.png" alt="imgTitle"> Наличные</div>
                        <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>100</p><p class="flagName">BYN</p></div>
                        <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>104</p><p class="flagName">USD</p></div>
                        <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>98</p><p class="flagName">EUR</p></div>
                        <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>7000</p><p class="flagName">RUB</p></div>
                    </div>
                    <div class="Info remainderData">
                        <div class="tittleData title"><img src="img/icon/money2.png" alt="imgTitle"> Падушка</div>
                        <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>400</p><p class="flagName">BYN</p></div>
                        <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>104</p><p class="flagName">USD</p></div>
                        <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>98</p><p class="flagName">EUR</p></div>
                        <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>7000</p><p class="flagName">RUB</p></div>
                    </div>
                </div>
            </div>
            <div class="containerData">
                <div class="Data_Info">
                    <div class="Data incomeData">
                        <div class="tittleData title"><img src="img/icon/up.png" alt="imgTitle">Доход</div>
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
                        <div class="tittleData title"><img src="img/icon/not.png" alt="imgTitle">Расход</div>
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
                            <option>Кафе</option>
                            <option>Другое</option>
                        </select>
                        <input type="text" class="sum" placeholder="СУММА">
                        <textarea class="description" placeholder="Описание"></textarea>
                        <button class="btnSend expenseBtn">Отправить</button>
                    </div>
                </div>
            </div>
            <div class="containerTranslation">
                <div class="translationPanel">
                    <div class="translationData">
                        <div class="tittleData title"><img src="img/icon/nn.png" alt="imgTitle"> Перевод</div>
                        <select class="opirationName">
                            <option value="1">В наличные</option>
                            <option value="2">На карту</option>
                            <option value="3">На падушку</option>
                            <option value="4">Долг</option>
                        </select>
                        <input type="text" class="sum" placeholder="СУММА">
                        <textarea class="description" placeholder="Описание"></textarea>
                        <button class="btnSend">Отправить</button> 
                    </div>
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