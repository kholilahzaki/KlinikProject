const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");

nextBtnFirst.addEventListener("click", function(){
    slidePage.style.marginLeft = "-25%";
});