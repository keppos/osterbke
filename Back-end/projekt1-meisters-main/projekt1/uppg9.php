<article>
    <h2>9. Gästbok</h2>


    <form action="index.php" method="POST" id="usrform">
    <textarea name="comment" form="usrform" placeholder="Kommentera här..."></textarea>
    <input type="submit" name="submit">
    </form>

    <?php

    $remoteuser = $_SERVER['REMOTE_USER'];
    $comment = $_REQUEST['comment'];

    if(isset($_POST["submit"])) {
    $mycomments = fopen("kommentarer.txt","a") or die("Filen gick inte att öppna.");
    fwrite($mycomments, " " . date("d" . " " . "F" . " " . "Y" . " " . "H:i") . " " . $remoteuser . ": " . $comment . "\n");
    fclose($mycomments);
    }
    echo file_get_contents( "kommentarer.txt" ); // get the contents, and echo it out.
    ?>


</article>