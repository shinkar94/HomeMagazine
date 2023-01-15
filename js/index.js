import * as sendOperation from "./contentOperation.js";
// анимация блока DATA
const TIT_DATE = document.querySelectorAll(".tittleData");
const DATA_BLOCK = document.querySelectorAll(".Data");
const INFO_BLOCK= document.querySelectorAll(".Info");

function animTitDat(dataB, infoB){  
    TIT_DATE.forEach(tit => {
        tit.addEventListener('click', ()=>{
            console.log("click title");
        });
    });
}
animTitDat(DATA_BLOCK, INFO_BLOCK);