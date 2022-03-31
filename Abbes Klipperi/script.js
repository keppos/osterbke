$("#go-to-home").on('click', function() {
    $('html, body').animate({
        'scrollTop': $("article").position().top
    });
});

$("#go-to-booking").on('click', function() {
    $('html, body').animate({
        scrollTop: $(".booking").offset().top - 50
    }, 500)
});

$("#go-to-about").on('click', function() {
    $('html, body').animate({
        scrollTop: $(".about").offset().top - 50
    }, 500)
});

$("#go-to-contact").on('click', function() {
    $('html, body').animate({
        'scrollTop': $(".contact").position().top
    });
});

$(".booking-button").on('click', function() {
    $('html, body').animate({
        scrollTop: $(".booking").offset().top - 50
    }, 500)
});

$("#abbes-logo").on('click', function() {
    $('html, body').animate({
        'scrollTop': $(".home").position().top
    });
});

    

let menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
    } 
    else {
        menuBtn.classList.remove('open');
        menuOpen = false;
    }
});

$(".menu-btn").click(function(){
    $("nav").slideToggle(0);
});


var list = window.matchMedia("(max-width: 1050px)")
hideList(list) // Call listener function at run time
list.addListener(hideList) // Attach listener function on state changes

function hideList(x) {

    if (list.matches && !menuOpen) { // If media query matches
        $("li").click(function(){
            $("nav").slideToggle(0);
            menuBtn.classList.remove('open');
        menuOpen = false;
            
        });
    } 
    
    
    else if (list.matches) { // If media query matches
        $("li").click(function(){
            $("nav").slideToggle(0);
        });
    } 
   
}

