var newToday = document.getElementById('today');
var today = new Date();
var todayYear = today.getFullYear();
newToday.textContent = todayYear;



// var greeting = document.getElementById('greetings');
// var DateToday = new Date();
// var DateTime = DateToday.getHours();

// if (DateTime > 18 ) {
//     greeting.textContent = "Good evening";
// } else if (DateTime > 12 ) {
//     greeting.textContent = "Good afternoon";
// } else if (DateTime > 0 ) {
//     greeting.textContent = "Good morning";
// } else {
//    greeting.textContent = "Welcome";
// }





function isElementInViewport(el){
    if(typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }

var rect = el.getBoundingClientRect();
    return (
        (rect.bottom >= 0) || (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) && rect.top <= (window.innerHeight || document.documentElement.clientHeight)) || (rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}




$(document).ready(function(){
    $(".bar-container").on("click", function(){
         $(".mobileNav").toggleClass("show");

         $("ul.bar-container li:nth-child(1)").toggleClass("li-one");
         $("ul.bar-container li:nth-child(2)").toggleClass("li-two");
         $("ul.bar-container li:nth-child(3)").toggleClass("li-three");
    });
    
    $(".logo").addClass("red");
});

var form = document.querySelector("form");
console.log(form);

form.addEventListener("submit", function(e){
    e.preventDefault();
});

var thanks = document.querySelector(".thanks");


console.log(thanks.offsetTop);
window.addEventListener("scroll", function(){

    if(document.documentElement.scrollTop >= thanks.offsetTop){
        thanks.classList.add("scroll");
   
    }
    
    if(document.documentElement.scrollTop < 653){
        thanks.classList.remove("scroll");
        console.log(document.documentElement.scrollTop);
    }
});



