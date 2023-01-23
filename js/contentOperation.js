import { preloader } from "./preloader.js";
const dataOperation = document.querySelectorAll(".Data");
const dataTranslation = document.querySelectorAll(".Translation");
const checkControl = document.querySelectorAll(".checkName");

let countProloader = 0;

console.log(dataTranslation);

// поиск чека
function searchNameCheck(){
    let nameCheck = "false";
    checkControl.forEach(check => {
        if(check.checked){
            nameCheck = check.value;
        }
    })
    return nameCheck;
}

// расход - доход
dataOperation.forEach(e => {
    let btnSend = e.querySelector(".btnSend");
    btnSend.addEventListener('click',() => {
        preloader(true);
        let date = e.querySelector(".dateSend");
        let opirationName = e.querySelector(".opirationName");
        let sum = e.querySelector(".sum");
        let description = e.querySelector(".description");
        let statusSend = btnSend.classList[1];
        let nameCheck;
        statusSend === "expenseBtn" ? nameCheck = searchNameCheck() : nameCheck = "false"; 
        
        if(statusSend === "expenseBtn" && nameCheck === "false"){
            alert("Ошибка!! Не выбран журнал расхода!");
            preloader(false);
        }else{
            // AJAX
            const request = new XMLHttpRequest();
            const url = "action/sendOpertion.php";
            const params = "date=" + date.value+"&opirationName=" + opirationName.value+"&sum=" + sum.value+"&description=" + description.value+
            "&statusSend=" + statusSend+"&nameCheck=" + nameCheck;
            request.open("POST", url, true); request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.addEventListener("readystatechange", () => {
                if(request.readyState === 4 && request.status === 200) {
                    updateTable()
                    updateInfosMoney()
                    date.value = "";
                    opirationName.value = "";
                    sum.value = "";
                    description.value = "";
                }
            });
            request.send(params);
        }
        
    })
});

// перевод
dataTranslation.forEach(e =>{
    let btnSend = e.querySelector(".btnSend");
    btnSend.addEventListener('click',() => {
        preloader(true);
        let date = e.querySelector(".dateSend");
        let opirationName = e.querySelector(".opirationName");
        let sum = e.querySelector(".sum");
        let description = e.querySelector(".description");
        
        // AJAX
        const request = new XMLHttpRequest();
        const url = "action/transOperation.php";
        const params = "date=" + date.value+"&opirationName=" + opirationName.value+"&sum=" + sum.value+"&description=" + description.value;
        request.open("POST", url, true); request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {
                updateTable()
                updateInfosMoney()
                date.value = "";
                opirationName.value = "";
                sum.value = "";
                description.value = "";
            }
        });
        request.send(params); 
    })
})

function updateTable(){
    const TABLE_OP = document.querySelector(".operations");

    let x = new XMLHttpRequest;
    x.open('POST', 'modules/tableOperation.php');
    const params = "inf=" + "go";
    x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    x.send(params);
    x.onreadystatechange = function () {
        if (x.status == 200 && x.readyState == 4) {
            let post = x.responseText;
            TABLE_OP.innerHTML = post;
        }
    }
}

function updateInfosMoney(){
    const MONEY_INF = document.querySelector(".containerInfos");

    let x = new XMLHttpRequest;
    x.open('POST', 'modules/infosMoney.php');
    const params = "inf=" + "go";
    x.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    x.send(params);
    x.onreadystatechange = function () {
        if (x.status == 200 && x.readyState == 4) {
            let post = x.responseText;
            MONEY_INF.innerHTML = post;
            preloader(false);
        }
    }
}