<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tous les Avis - Garage V.Parot</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
        include_once('./templates/header.php');
        ?>

    <div class="content">
        <h2>Tous les Avis</h2>

        <div class="avis">
            <div class="note note-5">
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
            </div>
            <p>Très bon service, je recommande!</p>
        </div>

        <div class="avis">
            <div class="note note-4">
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile vide"></span>
            </div>
            <p>Service professionnel.</p>
        </div>

        <div class="avis">
            <div class="note note-3">
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile pleine"></span>
                <span class="etoile vide"></span>
                <span class="etoile vide"></span>
            </div>
            <p>Peut faire mieux.</p>
        </div>
    </div>

    <?php
        include('./templates/footer.php');
        ?>
    
    
    <script>
    const menuHamburger = document.querySelector(".menu-hamburger");
    const navLinks = document.querySelector(".nav-links");

    menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu');
    });
    </script>


</body>
</html>
