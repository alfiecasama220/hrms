let burgerIcon = document.getElementById("burgerIcon");
let close = document.getElementById("close");
let showSidebar = document.getElementById("showSidebar");

burgerIcon.addEventListener("click", function () {
    showSidebar.classList.add("burgerActive");
});

close.addEventListener("click" , function () {
    showSidebar.classList.remove("burgerActive");
});

let fixedAction = document.getElementById("fixedAction");

document.querySelectorAll("#actionMode").forEach(e => {
    e.addEventListener("click", function () {
        fixedAction.classList.add("fixedActionActive")
    });
});

document.getElementById("closeButton").addEventListener("click", function () {
    fixedAction.classList.remove("fixedActionActive");
});

// NAVIGATION BAR DIRI HAHAHA

document.querySelectorAll("#div1").forEach(e => {
    e.addEventListener("click", function () {
       if(e.classList.contains("active")) {
        e.classList.remove("active")
       } else {
        e.classList.remove("active");
       }
    });
});