<?php
    $connMoney = new mysqli('localhost','root','root','homemagazine');
    $db_money = mysqli_query($connMoney,
        "SELECT 
        (SELECT SUM(a.money) FROM `movement` a WHERE a.Operation = '0001') -
        (SELECT SUM(b.money) FROM `movement` b WHERE b.Operation = '0002') as countMoney"
    );
    $countDb = mysqli_fetch_assoc($db_money);
    echo '
        <div class="Infos_Panel">
            <div class="Info remainderData">
                <div class="tittleData title"><img src="img/icon/money2.png" alt="imgTitle">Остаток</div>
                <div class="countMoney"><img src="img/flag/byn.png" alt="flagMoney"><p>'.round($countDb['countMoney']).'</p><p class="flagName">BYN</p></div>
                <div class="countMoney"><img src="img/flag/usd.png" alt="flagMoney"><p>'.round($countDb['countMoney'] / 2.63).'</p><p class="flagName">USD</p></div>
                <div class="countMoney"><img src="img/flag/eur.png" alt="flagMoney"><p>'.round($countDb['countMoney'] / 2.80).'</p><p class="flagName">EUR</p></div>
                <div class="countMoney"><img src="img/flag/rub.png" alt="flagMoney"><p>'.round(($countDb['countMoney'] / 3.8) * 100).'</p><p class="flagName">RUB</p></div>
            </div>';
            $db_card = mysqli_query($connMoney,  "SELECT 
            (SELECT SUM(a.money) FROM `movement` a WHERE a.Operation = '0001') -
            (SELECT SUM(b.money) FROM `movement` b WHERE b.Operation = '0002' and b.checkName = 'Card') -
            (SELECT SUM(c.money) FROM `movement` c WHERE c.Operation = '0004') -
            (SELECT SUM(d.money) FROM `movement` d WHERE d.Operation = '0003') as countCard");
            $countDb = mysqli_fetch_assoc($db_card);
            echo '
            <div class="Info remainderData">
                <div class="tittleData title"><img src="img/icon/card.png" alt="imgTitle"> Карта</div>
                <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>'.round($countDb['countCard']).'</p><p class="flagName">BYN</p></div>
                <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>'.round($countDb['countCard'] / 2.63).'</p><p class="flagName">USD</p></div>
                <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>'.round($countDb['countCard'] / 2.80).'</p><p class="flagName">EUR</p></div>
                <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>'.round(($countDb['countCard'] / 3.8) * 100).'</p><p class="flagName">RUB</p></div>
            </div>';
            $db_cash = mysqli_query($connMoney, 
            "SELECT 
            (SELECT SUM(a.money) FROM `movement` a WHERE a.Operation = '0003') -
            (SELECT SUM(b.money) FROM `movement` b WHERE b.Operation = '0002' and b.checkName = 'Cash') as cashe");
            $countDb = mysqli_fetch_assoc($db_cash);
            echo '
            <div class="Info remainderData">
                <div class="tittleData title"><img src="img/icon/money.png" alt="imgTitle"> Наличные</div>
                <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>'.round($countDb['cashe']).'</p><p class="flagName">BYN</p></div>
                <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>'.round($countDb['cashe'] / 2.63).'</p><p class="flagName">USD</p></div>
                <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>'.round($countDb['cashe'] / 2.80).'</p><p class="flagName">EUR</p></div>
                <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>'.round(($countDb['cashe'] / 3.8) * 100).'</p><p class="flagName">RUB</p></div>
            </div>';
            $db_cash = mysqli_query($connMoney, 
            "SELECT 
            (SELECT SUM(a.money) FROM `movement` a WHERE a.Operation = '0004') -
            (SELECT SUM(b.money) FROM `movement` b WHERE b.Operation = '0002' and b.checkName = 'Pillow') as Pillow");
            $countDb = mysqli_fetch_assoc($db_cash);
            echo'
            <div class="Info remainderData">
                <div class="tittleData title"><img src="img/icon/money2.png" alt="imgTitle"> Падушка</div>
                <div class="countMoney"><img src="img/flag/byn.png" alt=""><p>'.round($countDb['Pillow']).'</p><p class="flagName">BYN</p></div>
                <div class="countMoney"><img src="img/flag/usd.png" alt=""><p>'.round($countDb['Pillow'] / 2.63).'</p><p class="flagName">USD</p></div>
                <div class="countMoney"><img src="img/flag/eur.png" alt=""><p>'.round($countDb['Pillow'] / 2.80).'</p><p class="flagName">EUR</p></div>
                <div class="countMoney"><img src="img/flag/rub.png" alt=""><p>'.round(($countDb['Pillow'] / 3.8) * 100).'</p><p class="flagName">RUB</p></div>
            </div>
        </div>
    ';
?>