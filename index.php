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
    <header>
        <div class="Toolbar">
            <button class="btn btnBar"><img src="" alt=""><p>Список Доходов</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Список Расходов</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Журнал Категорий</p></button>
            <button class="btn btnBar"><img src="" alt=""><p>Анализ</p></button>
        </div>
    </header>
    <main>
        <div class="Date incomeData">
            <div class="tittleDate">Доход</div>
            <select class="incomeName">
                <option value="1">Зарплата(Ованс)</option>
                <option value="2">Зарплата</option>
                <option value="3">ИП</option>
                <option value="4">Другое</option>
            </select>
            <input type="text" class="sumIncome" placeholder="СУММА">
            <textarea class="description" placeholder="Описание"></textarea>
            <button class="btnSendIncome">Отправить</button> 
        </div>
        <div class="Date expenseData">
            <div class="tittleDate">Расход</div>
            <select class="expenseName">
                <option value="1">Зарплата(Ованс)</option>
                <option value="2">Зарплата</option>
                <option value="3">ИП</option>
                <option value="4">Другое</option>
            </select>
            <input type="text" class="sumExpense" placeholder="СУММА">
            <textarea class="description" placeholder="Описание"></textarea>
            <button class="btnSendExpense">Отправить</button>
        </div>
        <div class="operations">
            <table>
                <tr>
                    <td>Дата</td>
                    <td>СУММА</td>
                    <td>Операция</td>
                    <td>Имя журнала учёта</td>
                </tr>
                <tr>
                    <td>08.01.2023</td>
                    <td>1000</td>
                    <td>Доход</td>
                    <td></td>
                </tr>
                <tr>
                    <td>08.01.2023</td>
                    <td>500</td>
                    <td>Расход</td>
                    <td>Авто</td>
                </tr>
            </table>
        </div>
    </main>

    <script type="module" src="js/index.js"></script>
</body>
</html>