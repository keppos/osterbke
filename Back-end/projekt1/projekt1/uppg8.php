<article>
    <h2>8. Besöksräknare</h2>

    <?php

    $remoteuser = $_SERVER['REMOTE_USER'];
    $ip = $_SERVER['REMOTE_ADDR'];

    $mycomments = fopen("besok.txt","a+") or die("Filen gick inte att öppna.");
    fwrite($mycomments, $remoteuser . " " . $_SERVER["REMOTE_ADDR"] . " var här klockan " . date("H:i "));
    fclose($mycomments);

    print("Hej " .$remoteuser.", ditt besök har skrivits i loggen.");

    ?>

</article>
<div class="separator"></div>