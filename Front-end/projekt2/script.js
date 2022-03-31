
// Memory - uppg 1


function flipCard(ev) {
    console.log(ev);
}
let cards = document.querySelectorAll(".frontcard");
for (i = 0; i < cards.length; i++) {
    cards[i].addEventListener("click", flipCard);
}


let timern;
let targetSrc;

function swapImg(ev) {
    clearTimeout(timern);
    targetSrc = ev.target.src;
    fadeOut();
}

function fadeOut() {
    document.querySelector("#galleri").style.opacity = 1;
    timern = setInterval(fadeOutStep, 100);
}

function fadeOutStep() {
    if (document.querySelector("#galleri").style.opacity > 0) {
        document.querySelector("#galleri").style.opacity -= 0.05;
    }
    else {
        clearTimeout(timern);
        document.querySelector("#galleri").src = targetSrc;
        fadeInStep();

    }
}

function fadeInStep() {

    document.querySelector("#galleri").style.opacity = 1;

}




let thumbs = document.querySelectorAll(".thumb");
for (i = 0; i < thumbs.length; i++) {
    thumbs[i].addEventListener("click", swapImg);
}


// Chart uppgift

google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Sover', 9],
        ['Äter', 1],
        ['Tränar', 1],
        ['Umgås', 3],
        ['Skolarbete (not csgo)', 10]
    ]);

    var options = {
        title: 'Min dagliga rutin',
        is3D: true,
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}

Highcharts.getJSON('https://demo-live-data.highcharts.com/aapl-c.json', function (data) {
    // Create the chart
    Highcharts.stockChart('highchart', {


        rangeSelector: {
            selected: 1
        },

        title: {
            text: 'AAPL Stock Price'
        },

        series: [{
            name: 'AAPL',
            data: data,
            tooltip: {
                valueDecimals: 2
            }
        }]
    });
});





// uppgift3 - slider

function updateColor() {
    let selectedColor = document.querySelector("#redSlider").value;
    document.querySelector("#redAmount").innerText = selectedColor;
    document.querySelector("#container").style.backgroundColor = "rgb(" + selectedColor + ",128,128)"
}

function updateColour() {
    let selectedColor = document.querySelector("#greenSlider").value;
    document.querySelector("#greenAmount").innerText = selectedColor;
    document.querySelector("body").style.backgroundColor = "rgb(" + selectedColor + ",128,128)"
}

function updateColorr() {
    let selectedColor = document.querySelector("#blueSlider").value;
    document.querySelector("#blueAmount").innerText = selectedColor;
    document.querySelector("header").style.backgroundColor = "rgb(" + selectedColor + ",128,128)"
}

// Event listeners

document.querySelector("#redSlider").addEventListener("input", updateColor);
document.querySelector("#greenSlider").addEventListener("input", updateColour);
document.querySelector("#blueSlider").addEventListener("input", updateColorr);

// Uppg 4 - JQuery och andra JS bibliotek

// Här kommer jQuery kod

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






// Uppg 5 - Cookies

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let kakor = document.cookie.split(";"); //Hämtar alla kakor
    console.log(kakor[0]); //Skriver ut första kakan
}

function logIn() {
    let username = prompt("Användarnamn:", ""); //be om användarnamn
    let password = prompt("Lösenord:", ""); //be om användarnamn
    setCookie("username", username, 2); //kakan ska vara i kraft 2 dagar
    setCookie("password", password, 2); //kakan ska vara i kraft 2 dagar
    getCookie("username"); //kolla inmatad kaka - vem är inloggad?
    getCookie("password"); //kolla inmatad kaka - vem är inloggad?
    localStorage.setItem("username", username);
    localStorage.setItem("password", password);
    alert("Välkommen " + localStorage.getItem("username"));
}
//kör login funktionen när man klickar på logga in
document.getElementById("login").addEventListener("click", logIn);

// Uppg 6 - AJAX
function loadDoc() {
    let xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "data.txt", true);
    xhttp.send();
}

$("#laddaData").click(loadDoc);

// Uppg 7 - JSON
function loadApi() {
    let xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        if (this.readyState == 4 && this.status == 200) {
            let json = JSON.parse(this.responseText);
            console.log(json.posts[0]);
            document.getElementById("json").innerHTML = json.posts[0].text;
            // http://ip-api.com/json/
        }
    };
    xhttp.open("GET", "data.json", true);
    xhttp.send();
}

$("#laddaApi").click(loadApi);