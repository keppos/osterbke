<article>
    <h2>6. Login</h2>
    <p>Logga in för att se din profil.</p>

    <form action="index.php" method="GET">
        Användarnamn: <input type="text" name="user">
        <button type="submit">Logga in</button>
    </form>

    <?php


    if (!empty($_REQUEST['user'])) {
        // Stoppa XSS
        $username = test_input($_REQUEST['user']);
        $_SESSION['user'] = $username;
        print("Signing in as " . $username) . "<br>";
        print("You will be redirected to your profile page in 3 seconds.");
        header("Refresh:3; url=./profile.php");
    }


    // Skriv ut användarens profil
    // Användarnamnet lagrade vi i en cookie
    // print("Användarnamn: " . $_COOKIE['username']);
    // Session storage är smartare än att lagara 1000 cookies
    // Dessutom är session storage osynlig för användaren
    // Skriv ut data från session
    // print("E-mail: " . $_COOKIE['email']);

    ?>

</article>
<div class="separator"></div>