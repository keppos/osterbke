<article>
    <h2>5. Cookies</h2>

    <?php

    $cookie_name = "username";
    $cookie_value = $_SERVER["REMOTE_USER"];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 2), "/"); //86400 secs = 1 day

    if (isset($_COOKIE['username'])) {
        print("Välkommen tillbaka " . $_COOKIE['username']);
    }
    ?>
    <br><br>
    <?php

    $manader = array("Ingenting", "Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
    $dagar = array("Ingenting", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
    $dennamanad = date("n");
    $dennadag = date("N");

    $firstvisit = $dagar[$dennadag] . " " . date("j") . " " . $manader[$dennamanad] . " " . date("Y") . " " . date("H:i");
    print ("Du besökte oss första gången " . $firstvisit);

    ?>

    <br><br>

    <?php
    $manader = array("Ingenting", "Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
    $dagar = array("Ingenting", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
    $dennamanad = date("n");
    $dennadag = date("N");

    
    $inTwoMonths = 60 * 60 * 24 * 60 + time();
    setcookie('senasteBesok', $dagar[$dennadag] . " " . date("j") . " " . $manader[$dennamanad] . " " . date("Y") . " " . date("H:i"), $inTwoMonths);
    if (isset($_COOKIE['senasteBesok'])) {
        $besok = $_COOKIE['senasteBesok'];
        print "Du besökte oss senast " . $besok;
    } else
        print "Välkommen till vår sida för första gången. :>";
    ?>



</article>
<div class="separator"></div>