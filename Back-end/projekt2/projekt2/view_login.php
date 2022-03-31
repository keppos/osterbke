<article>
    <h2>Logga in</h2>

    <form action="login.php" method="GET">

        <input type="text" name="username" placeholder="Användarnamn" class="form-input">
        <br>
        <input type="password" name="password" placeholder="Lösenord" class="form-input">
        <br>
        <input type="hidden" name="page" value="login">
        <input type="submit" value="Logga in" class="login-button">
    </form>
    <br>

    <?php

    if (!empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {

        // Testar att lägga till data i DB med PHP och PDO med en prepared statement
        $username = test_input($_REQUEST['username']);
        $password = test_input($_REQUEST['password']);

        $password = hash("sha256", $password);

        $sql = "SELECT id,username,password,fullname FROM annonser WHERE username = ? AND password = ?";
        $stmt = $conn->prepare($sql);

        $stmt->execute([$username,$password]);

        if ($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
            // Spara username i $_SESSION för att hålla login:en aktiv
            $_SESSION['username'] = $username;
            $_SESSION['receiver_ID'] = $row['id'];
            header("Refresh:0; url=profile.php");
        }

        else {
            print("<div class='wrong-login'>Fel användarnamn eller lösenord. Försök igen.</div>");
        }

    }
        
    ?>

    <br><br>
    <p>Har du inget konto? <a href="login.php?page=register" class="login-register-button">Registrera dig här.</a></p>

</article>