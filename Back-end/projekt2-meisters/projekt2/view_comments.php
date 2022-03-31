<article>
    <h2>Kommentarer</h2>

    <form action="profile.php">
        
    </form>

    <?php
    //Hämta profildata
    $username = test_input($_SESSION['username']);
    $receiver_ID = test_input($_SESSION['receiver_ID']);
    $sql = "SELECT kommentarer.comment, annonser.username FROM kommentarer INNER JOIN annonser ON kommentarer.sender_ID = annonser.id WHERE kommentarer.receiver_ID = 36";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$receiver_ID]);
    ?>

    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
        <p>
            <strong>
                <a href="profile.php?profile=<?= $row['username'] ?>">
                    <?= $row['username'] ?>
                </a>

            </strong> <br>
            <?= $row['comment']; ?>
        </p>

    <?php endwhile; ?>

</article>