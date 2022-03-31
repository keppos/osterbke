<article>
    <h2>Kontaktannons</h2>

    <?php
    //Hämta profildata
    $profile = test_input($_REQUEST['profile']);
    $sql = "SELECT username,fullname,preference,aboutme,salary,email,city FROM annonser WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$profile]);
    ?>

    <?php
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>

        <p><strong>Profilen för <?= $row['username'] ?> </strong></p>
        Namn: <?= $row['fullname'] ?>
        Om mig: <?= $row['aboutme'] ?>

    <?php endif; ?>
</article>