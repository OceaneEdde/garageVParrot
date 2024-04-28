<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les voitures d'occasion</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <body>
   
    <?php
        include_once('./templates/header.php');
        ?>

    <div class="contentform">
        <h2>Nous Contacter</h2>

        <form id="contactForm">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br>
            <button type="submit">Envoyer</button>
            <button type="reset">Réinitialiser</button>
        </form>
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
