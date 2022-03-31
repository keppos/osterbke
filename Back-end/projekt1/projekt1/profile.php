<?php include "handy_methods.php" ?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dennis Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <div id="container">

        <!-- Max 800px bred container-->

        <?php
        include "header.php"
        ?>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <h1>Min profil</h1>
            <p>Här hittar du t.ex sessionsdata</p>

            <?php
            $remoteuser = $_SERVER['REMOTE_USER'];
            print("Användarnamn: " . $remoteuser);
            ?>

            <?php include "profilepic.php" ?>
            

            <br><br><br>
            <form>
                <textarea id="profile-description" name="description" placeholder="Lägg till en profilbeskrivning..." form="usrform"></textarea>
            </form>


        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Webbdesign: Meisters<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>