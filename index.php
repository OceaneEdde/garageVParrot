<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garage V.Parot accueil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
        include_once('./templates/header.php');
        ?>
    

    <script>
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".nav-links");

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });

      
        let avis = [];

        function ajouterAvis() {
            const note = document.getElementById("note").value;
            const commentaire = document.getElementById("commentaire").value;

            avis.push({ note, commentaire });

            afficherAvis();
        }

        function afficherAvis() {
            const listeAvisDiv = document.getElementById("listeAvis");
            listeAvisDiv.innerHTML = "";

            avis.forEach(avis => {
                const avisDiv = document.createElement("div");
                avisDiv.innerHTML = `<img class="note" src="evaluation.png" alt="${avis.note} étoiles" width="70" height="70">
                                     ${avis.commentaire}`;
                listeAvisDiv.appendChild(avisDiv);
            });
        }
    </script>

    <div class="content">
    
        <img class="integration" src="images/voiture.jpeg" alt="voiture">
        
            <h2>Le mot du directeur</h2>
        <p>Chers amis de V.Parrot,<br> 
        Bienvenue sur notre site dédié aux amoureux de l'automobile ! Chez V.Parrot, nous sommes passionnés par les voitures, de la vente de véhicules d'occasion à l'entretien mécanique et carrosserie. Notre équipe dévouée met tout en œuvre pour vous offrir des services de qualité.
        Explorez notre sélection de voitures d'occasion fiables et découvrez nos services professionnels. Nous sommes là pour rendre votre expérience automobile agréable et sans tracas.<br>
        Merci de faire partie de la famille V.Parrot.<br>
        Bien à vous,</p>
        <p>Directeur, V.Parrot Garage Auto</p>

        
        <table>
            <tr>
                
                <td><img class="carrosserie" src="images/carrosserie.jpeg" alt="carrosserie" height="200" width="250"></td>
                <td>
                    <h3>Service Carrosserie</h3>
                    <p>
                        Redonnez à votre véhicule son allure d'origine avec les services de carrosserie de V.Parrot Garage Auto. Notre équipe dédiée de carrossiers experts s'engage à traiter tout, des petites éraflures aux réparations complexes après un accident. Offrez à votre voiture une seconde jeunesse avec notre expertise en restauration esthétique et structurelle.
                    </p>
                    <ul>
                        <li class="active"><a href="html/carrosserie.html">Service Carrosserie</a></li>
                    </ul>
                </td>
            </tr>
        </table>
        
        <table>
            <tr>
                
                <td>
                    <h3>Service Mécanique</h3>
                    <p>
                        Chez V.Parrot Garage Auto, nos services mécaniques vont au-delà de l'entretien routinier. Nos techniciens expérimentés veillent à la santé de votre véhicule en proposant des diagnostics avancés, des réparations efficaces, et un entretien préventif. Faites-nous confiance pour maintenir votre voiture en excellent état de fonctionnement.
                    </p>
                    <ul>
                        <li class="active"><a href="html/mecanique.html">Service Mécanique</a></li>
                    </ul>
                </td>
                <td><img class="mecanique" src="images/mecanique.jpeg" alt="mecanique" height="200" width="250"></td>
            </tr>
        </table>

        <div class="avis-section">
            <h3>Avis clients</h3>
            <p>Nos clients recommandent</p>
            <div id="listeAvis"></div>
        </div>

       
        <div class="avis-section">
            <h3>Laissez votre avis</h3>
            <form id="avisForm" action="#">
                <label for="note">Note:</label>
                <select id="note" name="note" required>
                    <option value="5">5 étoiles</option>
                    <option value="4">4 étoiles</option>
                    <option value="3">3 étoiles</option>
                    <option value="2">2 étoiles</option>
                    <option value="1">1 étoile</option>
                </select>
                <br>
                <label for="commentaire">Commentaire:</label>
                <textarea id="commentaire" name="commentaire" rows="4" required></textarea>
                <br>
                <button type="button" onclick="ajouterAvis()">Ajouter l'avis</button>
            </form>
        </div>


        <?php
        include('./templates/footer.php');
        ?>
    
</body>
</html>
