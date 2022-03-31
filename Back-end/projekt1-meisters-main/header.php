<header>
    <!-- Logo och meny i headern -->
    <a href="../projekt1/index.php">
        <img src="../media/svg-seeklogo.com.svg" alt="Website logo" id="logopicture">
    </a>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="../projekt1/">Projekt 1</a></li>
            <li><a href="#">Projekt 2</a></li>
            <li><a href="../rapport/">Rapport</a></li>
            <!-- Visa profilsidan om man är inloggad -->
            <?php
            if (isset($_COOKIE['PHPSESSID'])) {
                // Visa länken till profilsidan om man är inloggad
                print("<li><a href='./profile.php'>My Profile</a></li>");
            }
            ?>
        </ul>
    </nav>
</header>

<div class="under-header">
    <nav>
        <ul>
            <li><a href="../projekt2/login.php">Logga in</a></li>
        </ul>
    </nav>
</div>