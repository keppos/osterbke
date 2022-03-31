<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekt 2 | Meisters</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>
    <div id="container">
        <?php include "header.php" ?>
        <!-- Logo och huvudmeny -->
        <section>
            <?php
            if (!empty($_REQUEST['page']) && $_REQUEST['page'] == "login") : ?>
                <?php include "view_login.php" ?>

            <?php else : ?>
                <?php include "view_register.php" ?>

            <?php endif; ?>

        </section>
        <footer>
            Made by Meisters<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>