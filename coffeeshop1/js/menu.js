var trigger = document.getElementById("Hum");

if(trigger){
    trigger.addEventListener("click", function(){
        var target1 = document.getElementById("span1");
        var target2 = document.getElementById("span2");
        var target3 = document.getElementById("span3");
        var nav = document.getElementById("Nav-menu");
        target1.classList.toggle("active1");
        target2.classList.toggle("active2");
        target3.classList.toggle("active3");
        nav.classList.toggle("nav-active");
}, false);
}