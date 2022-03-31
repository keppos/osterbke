<?php include "handy_methods.php" ?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meisters</title>
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

            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <?php include "uppg1.php" ?>

            <?php include "uppg2.php" ?>

            <?php include "uppg3.php" ?>

            <?php include "uppg4.php" ?>

            <?php include "uppg5.php" ?>

            <?php include "uppg6.php" ?>

            <?php include "uppg7.php" ?>

            <?php include "uppg8.php" ?>

            <?php include "uppg9.php" ?>


        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Webbdesign: Meisters<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>