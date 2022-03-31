<article>
    <h2>Ta bort din profil</h2>

    <form action="" method="GET">
        <input type="text" name="username" placeholder="Användarnamn" class="form-input">
        <br>
        <input type="password" name="password" placeholder="Lösenord" class="form-input">
        <br>
        <input type="hidden" name="page" value="delete">
        <input type="submit" value="Ta bort" class="login-button">
    </form>


    <?php

    if (!empty($_REQUEST['username']) || !empty($_REQUEST['password'])) {

        // Testar att lägga till data i DB med PHP och PDO med en prepared statement
        $username = test_input($_REQUEST['username']);
        $password = test_input($_REQUEST['password']);


        $password = hash("sha256", $password);

        $sql = "DELETE FROM annonser WHERE annonser.id = 60";
        // $sql = "DELETE FROM annonser WHERE annonser.id = id";

        $stmt = $conn->prepare($sql);

        $stmt->execute([$username, $password]);

        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Ta bort data från databasen här under
            print("Din profil är borttagen.");
        } else {
            print("<div class='wrong-login'>Fel användarnamn eller lösenord. Försök igen.</div>");
        }
    }

    ?>

</article>