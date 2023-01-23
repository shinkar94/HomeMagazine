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
            <div class="containerInfos">';
                require "modules/infosMoney.php";
            echo '
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
                        <div class="checkRadio">
                            <div class="blockRadio">
                                <input type="radio" name="checkName" class="checkName" value="Card"> 
                                <p>Карта</p>
                            </div>
                            <div class="blockRadio">
                                <input type="radio" name="checkName" class="checkName" value="Cash">
                                <p>Наличные</p>
                            </div>
                            <div class="blockRadio">
                                <input type="radio" name="checkName" class="checkName" value="Pillow"> 
                                <p>Падушка</p>
                            </div>              
                        </div>
                        <input type="text" class="sum" placeholder="СУММА">
                        <textarea class="description" placeholder="Описание"></textarea>
                        <button class="btnSend expenseBtn">Отправить</button>
                    </div>
                    <div class="Translation translationData">
                        <div class="tittleData title"><img src="img/icon/nn.png" alt="imgTitle">Перевод</div>
                        <input type="date" class="dateSend">
                        <select class="opirationName">
                            <option></option>
                            <option value="0003">В наличные</option>
                            <option value="0004">В падушку</option>
                        </select>
                        <input type="text" class="sum" placeholder="СУММА">
                        <textarea class="description" placeholder="Описание"></textarea>
                        <button class="btnSend translationBtn">Отправить</button>
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