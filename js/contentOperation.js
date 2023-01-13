const dataOperation = document.querySelectorAll(".Data");

console.log(dataOperation)

dataOperation.forEach(e => {
    let btnSend = e.querySelector(".btnSend");
    btnSend.addEventListener('click',() => {
        let date = e.querySelector(".dateSend").value;
        let opirationName = e.querySelector(".opirationName").value;
        let sum = e.querySelector(".sum").value;
        let description = e.querySelector(".description").value;
        let statusSend = btnSend.classList[1];
        // AJAX
        const request = new XMLHttpRequest();
        const url = "action/sendOpertion.php";
        const params = "date=" + date+"&opirationName=" + opirationName+"&sum=" + sum+"&description=" + description+"&statusSend=" + statusSend;
        request.open("POST", url, true); request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        request.addEventListener("readystatechange", () => {
            if(request.readyState === 4 && request.status === 200) {
                updateTable()
                date = "";
                opirationName = "";
                sum = "";
                description = "";
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
        }
    }
}