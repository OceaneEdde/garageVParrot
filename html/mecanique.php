<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mécanique</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
        include_once('./templates/header.php');
        ?>
    

    <div class="content mecanique-section">
        <h2>Nos Services de Mécanique</h2>

        <p>Confiez l'entretien mécanique de votre véhicule à notre équipe de professionnels qualifiés. Chez V.Parrot Garage Auto, nous offrons une gamme complète de services de mécanique pour assurer la santé de votre véhicule.</p>

        <div class="service-details">
            <img src="../images/diagnostic_moteur.jpg" alt="Diagnostic moteur" height="200" width="300">
            <h3>Diagnostic Moteur</h3>
            <p>Nos techniciens expérimentés utilisent des outils de diagnostic avancés pour identifier rapidement les problèmes potentiels de votre moteur. Un diagnostic précis permet une réparation efficace et préventive.</p>
        </div>

        <div class="service-details">
            <img src="../images/reparation_moteur.jpg" alt="Réparation moteur" height="200" width="300">
            <h3>Réparation Moteur</h3>
            <p>Que ce soit pour des réparations mineures ou majeures, notre équipe de mécaniciens qualifiés est équipée pour résoudre tous les problèmes de votre moteur et assurer un fonctionnement optimal.</p>
        </div>

        <div class="service-details">
            <img src="../images/entretien_preventif.jpg" alt="Entretien préventif" height="200" width="300">
            <h3>Entretien Préventif</h3>
            <p>Préservez la performance de votre véhicule avec notre service d'entretien préventif. Nous effectuons les vérifications et les réglages nécessaires pour éviter les problèmes futurs et prolonger la durée de vie de votre véhicule.</p>
        </div>
    </div>

    <script>
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".nav-links");

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });

    </script>

    <div class="rendez-vous-section">
        <h3>Prenez rendez-vous pour vos besoins mécaniques</h3>
        <form action="../php/traitement_rendezvous.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <br>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="telephone">Téléphone :</label>
            <input type="tel" id="telephone" name="telephone" required>
            <br>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <br>
            <button type="submit">Prendre rendez-vous</button>
        </form>
    </div>

    <?php
        include('./templates/footer.php');
        ?>
    
</body>
</html>
