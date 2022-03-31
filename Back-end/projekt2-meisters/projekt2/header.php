<header>
    <!-- Logo och meny i headern -->
    <a href="index.php">
        <img src="../media/dejta.se (2).png" alt="Website logo" id="logopicture">
    </a>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="../projekt2/index.php">Hitta vänner</a></li>
            <li><a href="../projekt2/login.php">Logga in</a></li>
            <!-- Visa profilsidan om man är inloggad -->
            <?php
            if (isset($_COOKIE['PHPSESSID'])) {
                // Visa länken till profilsidan om man är inloggad
                print("
                <li><a href='../projekt2/profile.php'>Profil</a></li>
                ");
            }
            ?>
        </ul>
    </nav>
</header>