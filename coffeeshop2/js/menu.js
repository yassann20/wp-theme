var trigger = document.getElementById("Hum-menu");

if(trigger){
    trigger.addEventListener("click", function(){
        var target1 = document.getElementById("Hum1");
        var target2 = document.getElementById("Hum2");
        var target3 = document.getElementById("Hum3");
        var nav = document.getElementById("Side-nav");
        target1.classList.toggle("active1");
        target2.classList.toggle("active2");
        target3.classList.toggle("active3");
        nav.classList.toggle("nav-active");
}, false);
}