<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrosserie</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<?php
        include_once('./templates/header.php');
        ?>

    <div class="content">
        <h2>Nos Services de Carrosserie</h2>

        <p>Confiez votre véhicule à nos experts en carrosserie pour redonner à votre voiture son aspect d'origine. Chez V.Parrot Garage Auto, nous offrons une gamme complète de services de carrosserie pour répondre à vos besoins.</p>

        <div class="service-details">
            <img src="../images/reparation_carrosserie.jpg" alt="Réparation de carrosserie" height="200" width="300">
            <h3>Réparation de Carrosserie</h3>
            <p>Nos carrossiers experts sont spécialisés dans la réparation de carrosserie, que ce soit pour de petites éraflures ou des dommages plus importants suite à un accident. Nous utilisons des techniques avancées pour garantir une restauration de qualité.</p>
        </div>

        <div class="service-details">
            <img src="../images/peinture_vehicule.jpg" alt="Peinture de véhicule" height="200" width="300">
            <h3>Peinture de Véhicule</h3>
            <p>Donnez une nouvelle vie à votre voiture avec notre service de peinture de véhicule. Que vous souhaitiez une nouvelle couleur ou une retouche, notre équipe utilise des peintures de haute qualité pour assurer un résultat durable et esthétique.</p>
        </div>

        <div class="service-details">
            <img src="../images/restauration_esthetique.jpg" alt="Restauration esthétique" height="200" width="300">
            <h3>Restauration Esthétique</h3>
            <p>Offrez à votre voiture une seconde jeunesse avec notre service de restauration esthétique. Nous nous occupons de l'esthétique intérieure et extérieure pour que votre véhicule retrouve son éclat d'origine.</p>
        </div>

        <div class="rendez-vous-section">
            <h3>Prenez rendez-vous pour vos besoins de carrosserie</h3>
            <form action="../php/traitement_rendezvous.php" method="post">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" required>
                <br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <br>
                <label for="telephone">Téléphone:</label>
                <input type="tel" id="telephone" name="telephone" required>
                <br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <br>
                <button type="submit">Prendre rendez-vous</button>
            </form>
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
