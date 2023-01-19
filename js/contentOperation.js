import { preloader } from "./preloader.js";
const dataOperation = document.querySelectorAll(".Data");

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
        
        // AJAX
        const request = new XMLHttpRequest();
        const url = "action/sendOpertion.php";
        const params = "date=" + date.value+"&opirationName=" + opirationName.value+"&sum=" + sum.value+"&description=" + description.value+"&statusSend=" + statusSend;
        request.open("POST", url, true); request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {
                updateTable()
                date.value = "";
                opirationName.value = "";
                sum.value = "";
                description.value = "";
            }
        });
        request.send(params);
    })
});

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
            preloader(false);
        }
    }
}