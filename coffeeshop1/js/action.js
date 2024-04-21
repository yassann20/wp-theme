var controll1 = document.getElementById("controll1");
var controll2 = document.getElementById("controll2");
var controll3 = document.getElementById("controll3");
var controll4 = document.getElementById("controll4");

var slideshow = document.getElementById("Slider");

controll1.style.backgroundColor="gray";

controll1.addEventListener("click", function(){
    controll2.style.backgroundColor="";
    controll3.style.backgroundColor="";
    controll4.style.backgroundColor="";
    this.style.backgroundColor="gray";
    slideshow.style.transform="translateX(0)";
})

controll2.addEventListener("click", function(){
    controll1.style.backgroundColor="";
    controll3.style.backgroundColor="";
    controll4.style.backgroundColor="";
    this.style.backgroundColor="gray";
    slideshow.style.transform="translateX(-25%)";
})

controll3.addEventListener("click", function(){
    controll1.style.backgroundColor="";
    controll2.style.backgroundColor="";
    controll4.style.backgroundColor="";
    this.style.backgroundColor="gray";
    slideshow.style.transform="translateX(-50%)";
})

controll4.addEventListener("click", function(){
    controll1.style.backgroundColor="";
    controll2.style.backgroundColor="";
    controll3.style.backgroundColor="";
    this.style.backgroundColor="gray";
    slideshow.style.transform="translateX(-75%)";
})

