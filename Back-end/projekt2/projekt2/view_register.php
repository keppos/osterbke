<article>
    <h2>Registrera dig</h2>
    <p>Har du inget konto än? Skapa ett genom att fylla i formuläret.</p>

    <form action="login.php" method="GET">

        <input type="text" name="username" placeholder="Användarnamn" class="form-input" required>*
        <br>
        <input type="text" name="fullname" placeholder="Namn" class="form-input" required>*
        <br>
        <input type="password" name="password" placeholder="Lösenord" class="form-input" required>*
        <br>
        <input type="text" name="email" placeholder="Email" class="form-input" required>*
        <br>
        <input type="text" name="city" placeholder="Stad" class="form-input" required>*
        <br>
        <input type="message" name="aboutme" placeholder="Berätta om dig själv" class="form-input" required>*
        <br>
        <input type="number" name="salary" placeholder="Årliga lön" class="form-input" required>*
        <br>

        <select name="preference" class="form-input" required>
            <option value="1">Män</option>
            <option value="2">Kvinnor</option>
            <option value="3">Annat</option>
            <option value="4">Alla kön</option>
        </select> *
        <br>

        <input type="submit" value="Registrera dig" class="register-button">

    </form>
    <p>Har du redan ett konto? <a href="login.php?page=login" class="login-register-button">Logga in här.</a></p>


    <?php

    if (!empty($_REQUEST['username']) && !empty($_REQUEST['password']) && !empty($_REQUEST['email'])) {

        // Testar att lägga till data i DB med PHP och PDO med en prepared statement
        $username = test_input($_REQUEST['username']);
        $fullname = test_input($_REQUEST['fullname']);
        $password = test_input($_REQUEST['password']);

        $password = hash("sha256", $password);
        print($password); //TA BORT SENARE!! Blir mycket snyggare.

        $email = test_input($_REQUEST['email']);
        $city = test_input($_REQUEST['city']);
        $aboutme = test_input($_REQUEST['aboutme']);
        $salary = test_input($_REQUEST['salary']);
        $preference = test_input($_REQUEST['preference']);

        $sql = "INSERT INTO annonser (id, username, fullname, password, email, city, aboutme, salary, preference) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
        $stmt = $conn->prepare($sql);
        if ($stmt->execute([$username, $fullname, $password, $email, $city, $aboutme, $salary, $preference])) {
            print("<br>" . "Du har registrerats!");
        }
    }

    ?>


</article>