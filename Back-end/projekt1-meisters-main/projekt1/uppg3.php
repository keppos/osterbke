<article>
    <h2>3. Användarinmatning</h2>

    <form action="index.php" method="get">
        Dag: <input type="text" name="dag">
        <br>
        Månad: <input type="text" name="manad">
        <br>
        År: <input type="text" name="ar">
        <br>
        <input type="submit" name="skicka" value="Räkna" id="submit">
    </form>

    <?php
    //Checka ifall vi klickat räkna
    if (isset($_GET["dag"]) && !empty($_GET["manad"])) {
 
    $dag = test_input($_GET["dag"]);
    $manad = test_input($_GET["manad"]);
    $ar = test_input($_GET["ar"]);

    if (($dag > 0) && ($dag <= 30)) {
        //Hitta tiden nu
        $tidnu = time();
        //Skapa en timestamp baserat på inmatning
        $giventid = mktime(12, 0, 0, $manad, $dag, 2022);
        //floor() för att avrunda neråt
        print ("Det är " . $dag . " till det inmatade dautmet.");

    }

    else {
        print("Din inmatning är felaktig.");
    }

}

    ?>

    
</article>
<div class="separator"></div>