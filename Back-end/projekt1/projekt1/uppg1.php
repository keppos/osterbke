<article>
    <h2>1. Användar och serverdata</h2>
    <p>Hej alla! Idag är en fin dag.</p>
    <?php
    print("Välkommen " . $_SERVER["REMOTE_USER"]);
    ?>
    <br><br>
    <?php
    print("Servern snurrar på port: " . $_SERVER["SERVER_PORT"]);
    ?>
    <br><br>
    <?php
    print("Din ip-adress är: " . $_SERVER["REMOTE_ADDR"]);
    ?>

    <br><br>

    <?php
    print("Serverns ip-adress är: " . $_SERVER['SERVER_ADDR']);
    ?>


    <br><br>
    <?php
    $version = apache_get_version();
    print("Versionen av Apache som körs är: " . "$version");
    ?>
    <br><br>

    <?php
    $phpversion = phpversion();
    print("Versionen av PHP som körs är: " . "$phpversion");
    ?>
    <br><br>
    <?php
    print("Serverns adress och namn är: " . "$_SERVER[HTTP_HOST]");
    ?>

</article>
<div class="separator"></div>