<article>
    <h2>2. Tid och datum</h2>


    <?php
    $manader = array("Ingenting", "Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
    $dagar = array("Ingenting", "Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");

    $dennamanad = date("n");
    $dennadag = date("N");

    print("Dagens datum är ");

    print($dagar[$dennadag] . " " . date("j") . " " . $manader[$dennamanad] . " " . date("Y") . ".");
    ?>
    <br><br>


    <?php
    print("Klockan är ");
    $tid = date("H.i");
    print($tid);
    print(" i Finland.");
    ?>

    <br><br>

    <?php
    print ("Veckonumret är " . date("W") . ".");
    ?>

</article>
<div class="separator"></div>