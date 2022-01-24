



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





  

  



/* jquery 

$(document).ready(function () {

    $("#hide").on("click", function () {
        $("#hide").hide();
    })

    $("#show").on("click", function () {
        $("#hide").show();
    })
})

$(document).ready(function () {

    $("#fade").on("click", function () {
        $("#fade").fadeOut(3000);
    })
    $("#fadeIn").on("click", function () {
        $("#fade").fadeIn(3000);
    })
})

$(document).ready(function () {

    $("#animate").on("click", function () {
        $(animate).slideUp(1000);
    })

    $("#animateIn").on("click", function () {
        $(animate).slideDown(1000);
    })
})
hehe */