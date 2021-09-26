let header = document.querySelector("header");
let headerLink = document.querySelector(".navList a")

function activateHeader(){
    console.log("Scrolled");
    if(window.scrollY >= 60){
        header.style.backgroundColor = "black";
    }else{
        header.style.backgroundColor = "";
    }
};


window.addEventListener("scroll", activateHeader)