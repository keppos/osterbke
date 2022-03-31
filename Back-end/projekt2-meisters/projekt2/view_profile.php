<article>
    <h2>Min profil</h2>

    <?php
    //Hämta profildata
    $username = test_input($_SESSION['username']);

    $sql = "SELECT username,fullname,preference,aboutme,salary,email,city FROM annonser WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    ?>

    <?php
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <div class="aboutme">
            <?php print ($row['fullname']) . "<br><br>"; ?>
            <?php print ($row['email']) . "<br>";  ?>
            <?php print ("Årliga inkomst: " . $row['salary']) . "<br>";  ?>
            <?php print ("Stad: " . $row['city']) . "<br>"; ?>
            <?php print ("Intresserad av: " . $row['preference']) . "<br>";  ?>
            <?php print("<br>" . $row['aboutme']);  ?>
        </div>

        <br><br><br><br><br>
        <h2>Redigera profilen</h2>


        <form action="profile.php" method="POST">
            Namn
            <input type="text" name="fullname" value="<?= $row['fullname'] ?>" class="form-input">
            <br>
            Email
            <input type="text" name="email" value="<?= $row['email'] ?>" class="form-input">
            <br>
            Lösenord
            <input type="password" placeholder="Byt lösenord" name="password" value="<?= $row['password'] ?>" class="form-input">
            <br>
            Stad
            <input type="text" name="city" value="<?= $row['city'] ?>" class="form-input">
            <br>
            Om mig
            <input type="text" name="aboutme" value="<?= $row['aboutme'] ?>" class="form-input">
            <br>
            Årliga lön
            <input type="text" name="salary" value="<?= $row['salary'] ?>" class="form-input">
            <br>
            Intresserad av
            <select name="preference" class="form-input" required>
                <option value="1">Män</option>
                <option value="2">Kvinnor</option>
                <option value="3">Annat</option>
                <option value="4">Alla kön</option>
            </select>
            <br>
            <input type="hidden" name="oldname" value="<?= $row['fullname'] ?>">
            <input type="submit" value="Spara ändringar" class="register-button" name="editchanges">
        </form>

        <?php
        if (isset($_POST['editchanges'])) {
            $oldname = test_input($_POST['oldname']);
            $fullname = test_input($_REQUEST['fullname']);
            $email = test_input($_REQUEST['email']);
            $password = test_input($_REQUEST['password']);
            $city = test_input($_REQUEST['city']);
            $aboutme = test_input($_REQUEST['aboutme']);
            $salary = test_input($_REQUEST['salary']);
            $preference = test_input($_REQUEST['preference']);

            $password = hash("sha256", $password);

            $update = "UPDATE annonser SET fullname=:fullname, email=:email, password=:password, city=:city, aboutme=:aboutme, salary=:salary, preference=:preference WHERE fullname=:oldname";
            $stmt = $conn->prepare($update);
            
            $parametrar = array(
                ":fullname" => $fullname,
                ":email" => $email,
                ":password" => $password,
                ":city" => $city,
                ":salary" => $salary,
                ":preference" => $preference,
                ":aboutme" => $aboutme,
                ":oldname" => $oldname
            );

            if ($stmt->execute($parametrar)) {
                print("<br>" . "Dina ändringar har sparats!");
            } 
            
            else {
                print("<br>" . "Uppdatering av uppgifter misslyckades. Försök igen.");
            }
        }
            
            ?>

    <?php endif; ?>
</article>