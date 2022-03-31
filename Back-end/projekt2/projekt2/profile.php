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
        <section>

            <?php
            if (!empty($_SESSION['username'])) {
                if (!empty($_REQUEST['profile.php'])) {
                    include "view_ad.php";
                }
                else {
                    include "view_profile.php";
                    include "view_delete.php";
                    include "view_comments.php";
                }

            } else {
                print("Du är inte inloggad. <a href='login.php?page=login'>Logga in här.</a><br><br>");
            }
            ?>

            <?php
            if ($_REQUEST['page'] == "modify")

                $sql = "INSERT INTO annonser (id, username, fullname, password, email, city, aboutme, salary, preference) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
                $stmt = $conn->prepare($sql);
                if ($stmt->execute([$username, $fullname, $password, $email, $city, $aboutme, $salary, $preference])) {
                print("<br>" . "Din profil har uppdaterats.");
                }

            ?>


        </section>
        <footer>
            Webbdesign: Meisters<sup>&#169;</sup>
        </footer>
    </div>
</body>

</html>