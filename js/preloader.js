const PRELOADER = document.querySelector(".container_Proloader");

export function preloader(status){
    status ? PRELOADER.style.display = "inline" : PRELOADER.style.display = "none"
}