// Min första scriptfil :)
// window.alert("God jul!");


// Definitioner, variabel scope
let player1, player2; //Global variabel


// Funktioner i JS
// Uppg1
function handleUserDetails() {

    let firstName = document.userDetails.firstName.value;
    let lastName = document.userDetails.lastName.value;
    firstName = firstName.charAt(0).toUpperCase() + firstName.slice(1);
    lastName = lastName.charAt(0).toUpperCase() + lastName.slice(1);

    console.log("Efternamn: " + lastName);
    console.log("Förnamn: " + firstName);
    console.log("Namn: " + lastName + " " + firstName);

}



// Uppg 8
function startaSpelet() {
    player1 = prompt("Sten, sax eller påse? (Spelare 1) ");
    player2 = prompt("Sten, sax eller påse? (Spelare 2) ");
    console.log("Spelare 1 valde " + player1)
    console.log("Spelare 2 valde " + player2)
    vemVann(player1, player2);
}

function vemVann(p1, p2) {

    if (p1 == p2) {
        alert("Jämnt spel");
    }

    else if (p1 == "sten") {

        if (p2 == "sax") {
            alert("Spelare 1 vann.")
        }
        else {
            alert("Spelare 2 vann.")
        }
    }

    else if (p1 == "sax") {

        if (p2 == "påse") {
            alert("Spelare 1 vann.")
        }
        else {
            alert("Spelare 2 vann.")
        }
    }

    else if (p1 == "påse") {

        if (p2 == "sten") {
            alert("Spelare 1 vann.")
        }
        else {
            alert("Spelare 2 vann.")
        }
    }

}

// Hantera siffror och pengar
function moneyHandler() {
    let amount = document.money.amount.value;
    amount.replace(",", "."); // ersätt kommatecken med punkt
    console.log(amount);

    let amountInt = parseInt(amount);
    console.log(amountInt);

}

function myFunction(event) {
    let x = event.key;
    document.getElementById("demo").innerHTML = "The pressed key was: " + x;
}

// Funktion som gömmer element - Uppg 6
function hideApp() {
    document.querySelector("#demo").style.display = "none";
}

function generateNames() {
    let letters = ["a", "b", "d", "e", "f"];
    console.log(letters);
    let numLetters = letters.length;
    let slumpFornamn = "";
    for (i = 0; i < numLetters; i++) {
        let slump = Math.floor(Math.random() * 5);
        console.log(letters[slump]);
        slumpFornamn = slumpFornamn + letters[slump];
        slumpFornamn = slumpFornamn.charAt(0).toUpperCase() + slumpFornamn.slice(1);
    }
    console.log("Du spelar mot " + slumpFornamn);
    document.querySelector("#genereratNamn").innerText = slumpFornamn;
}

function generateReference() {
    let numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];
    console.log(numbers);
    let numLetters = numbers.length;
    let slumpLetters = "";
    let RF = "RF";
    for (i = 0; i < numLetters; i++) {
        let slump = Math.floor(Math.random() * 9);
        console.log(numbers[slump]);
        slumpLetters = slumpLetters + numbers[slump];
    }
    console.log("Ditt referensnummer är " + RF + slumpLetters);
    document.querySelector("#genereratNummer").innerText = RF + slumpLetters;
}

let t = 0;
let timerVar;
function sekundKlocka() {
    t += 1;
    document.querySelector("#tid").innerText = t;
}


function timer() {
    timerVar = setInterval(sekundKlocka, 1000);
}


// Händelsehanterare

document.querySelector("#startTimer").addEventListener("click", timer);

document.querySelector("#playButton").addEventListener("click", startaSpelet);
document.querySelector("#moneyButton").addEventListener("click", moneyHandler);
document.querySelector("#moneyButton").addEventListener("click", hideApp);
document.querySelector("#keyBox").addEventListener("keydown", myFunction);
document.querySelector("#generateButton").addEventListener("click", generateNames);
document.querySelector("#generateButton2").addEventListener("click", generateReference);



