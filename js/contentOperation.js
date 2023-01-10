const btnSendOperation = document.querySelectorAll(".btnSend");
console.log(btnSendOperation)
btnSendOperation.forEach(e => {
    e.addEventListener('click',() => {
        sendOperation(e.classList[1]);
    })
});

function sendOperation(nameBtn){
    let blockOperation;
    nameBtn == "expenseBtn" 
        ? blockOperation = document.querySelector(".expenseData")
        : blockOperation = document.querySelector(".incomeData")
    ;
    console.log(blockOperation)
}