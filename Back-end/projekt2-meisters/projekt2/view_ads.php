<article>
    <h2>Annonser</h2>

    <?php
    $sql = "SELECT * FROM annonser"; // SQL kommandot vi vill köra
    $stmt = $conn->query($sql); // Query är metoden. Returnerar FALSE eller mysqli_result objekt

    // Om endast första resultate behövs så behövs ingen while loop
    // $result = $stmt->fetch_assoc(); // Fetch_assoc returnerar FALSE eller Assoc array
    // print("Användarnamn: ".$result['username']); // Endast ett resultat? Lämna bort while

    // Om vi vill gå igenom många resultat
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        print($row['fullname'] . "<br><br>");

        print("Användarnamn: " . $row['username'] . "<br>");
        print("Årliga lön: " . $row['salary'] . "<br>");
        print("Stad: " . $row['city'] . "<br>");
        print("Intresserad av: " . $row['preference'] . "<br><br>");
        print($row['aboutme'] . "<br><br> ________ <br><br><br>" );
    }

    ?>
</article>