<article>
    <h2>4. Registreringsformulär </h2>

    <form action="index.php" method="get">
        Användarnamn: <input type="text" name="username">
        <br>
        E-post: <input type="text" name="email">
        <br>
        
        <input type="submit" name="skicka" value="Skapa konto" id="submit">
    </form>

    <?php

    if ( (!empty($_GET['username'])) && !(empty($_GET['email'])) ) {
        // Hämta get data
        $username = test_input($_GET ['username']);
        $email = test_input($_GET ['email']);
        
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $pass = substr( str_shuffle( $chars ), 0, 8 );

        mail($email, "Your randomly generated password for Meisters is: ", $pass );

        //Spara email till en sessionsvariabel för att visa att man är inloggad
        $_SESSION['email'] = $email;

        print("Signing up as " . $username . "... check your email.");
        print("You will be redirected to the login page in 5 seconds.");
        header("Refresh:5; url=index.php");

    }

    ?>



</article>
<div class="separator"></div>