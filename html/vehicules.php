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
    <h2>Nos Véhicules</h2>

    <div class="filter-section">
        <label for="filtre">Filtrer par:</label>
        <select id="filtre">
            <option value="tous">Tous les véhicules</option>
            <option value="Année+">+2010</option>
            <option value="Année-">-2010</option>
            <option value="SUV">SUV</option>
            <option value="Berline">Berline</option>
            <option value="Coupée">Coupée</option>
            <option value="Compact">Compact</option>
        </select>
        <label for="prix-min">Prix min:</label>
        <input type="number" id="prix-min" min="0">
        <label for="prix-max">Prix max:</label>
        <input type="number" id="prix-max" min="0">
        <button onclick="appliquerFiltres()">Appliquer</button>
    </div>

    <div class="vehicules-section" id="vehicules-section">

        <?php
        $voitures = [
            ['nom' => 'Alfa Romeo Giulia',
            'infos' => 'Alfa Romeo Guilia 2023 210cv 1200km',
            'img' => 'alfa-romeo-giulia.jpg',
            'options' => 'Sièges en cuir, Système de navigation, Toit ouvrant panoramique',
            'prix' => '63500',
            'type' => 'Berline',
            'askInfo' => 'alfa-romeo-giulia'],

            ['nom' => 'Nissan 370z',
            'infos' => 'Nissan 370z 2014 328cv 138000km',
            'img' => 'nissan370z.jpg',
            'options' => 'Sièges baquets, Système audio premium, Jantes en alliage léger',
            'prix' => '34900',
            'type' => 'Sportive',
            'askInfo' => 'nissan370z'],

            ['nom' => 'Mercedes ML',
            'infos' => 'Mercedes ML 320 CDI 2010 224cv 138000km',
            'img' => 'mercedesml.jpg',
            'options' => 'Intérieur en cuir, Toit ouvrant électrique, Caméra de recul',
            'prix' => '14900',
            'type' => 'SUV',
            'askInfo' => 'Merced-ML'],
            
            ['nom' => 'Audi A1',
            'infos' => 'Audi a1 130cv 2013 93000km',
            'img' => 'audia1.jpg',
            'options' => 'Intérieur en cuir, Toit ouvrant électrique, Caméra de recul',
            'prix' => '13900',
            'type' => 'coupée',
            'askInfo' => 'audi-a1'],

            ['nom' => 'Alfa romeo 4c',
            'infos' => 'Alfa romeo 4c 2021 240cv 52000km',
            'img' => 'alfaromeo4c.jpg',
            'options' => 'Pack S-Line, Système d\'info-divertissement MMI, Feux LED',
            'prix' => '69800',
            'type' => 'coupée',
            'askInfo' => 'Alfa-romeo-4c'],

            ['nom' => 'Jeep Grand cherokee',
            'infos' => 'Alfa romeo 4c 2021 240cv 52000km',
            'img' => 'JeepGrandcherokee.jpg',
            'options' => 'Transmission intégrale, Système de surveillance des angles morts, Sièges chauffants',
            'prix' => '53500',
            'type' => 'SUV',
            'askInfo' => 'Jeep-Grand-cherokee'],

            ['nom' => 'Mercedes AMG GT',
            'infos' => 'AMG GT 2020 476cv 15000km',
            'img' => 'mercedesamggt.jpg',
            'options' => 'Intérieur en cuir Nappa, Système d\'échappement sport AMG, Toit panoramique en verre',
            'prix' => '155800',
            'type' => 'berline',
            'askInfo' => 'Mercedes-AMG-GT'],

            ['nom' => 'Audi A8',
            'infos' => 'Audi A8 2016 310cv 183000km',
            'img' => 'audia8.jpg',
            'options' => 'Phares Matrix LED, Sièges massants, Système de vision nocturne',
            'prix' => '62800',
            'type' => 'berline',
            'askInfo' => 'Audi-A8'],

            ['nom' => 'Mercedes classe A',
            'infos' => 'Mercedes classe A 170cv 2016 76000km',
            'img' => 'Mercedesclassea.jpg',
            'options' => 'Système de freinage d\'urgence, Interface multimédia MBUX, Assistance au stationnement',
            'prix' => '22500',
            'type' => 'berline',
            'askInfo' => 'Mercedes-classe-A'],
        ];

        ?>
        <div class="content vehicules-section" id="vehicules-section">
        <?php
        foreach ($voitures as $voiture) {
            echo('
            <div class="vehicule-card" data-categorie="' . $voiture['type'] .'" data-prix="' . $voiture['prix'] .'">
            <img src="../images/' . $voiture['img'] . '" alt="alfa-romeo-giulia" height="200" width="300">
            <h3>' . $voiture['nom'] . '</h3>
            <p>' . $voiture['infos'] . '</p>
            <p>Options :' . $voiture['options'] . '</p>
            <h4>' . $voiture['prix'] . '€</h4>
            <button onclick="demanderInformation('. $voiture['askInfo'] . ')">Demander plus d\'informations</button>
            </div>
            ');
        }
        ?>
    
    </div>
</div>

<?php
        include('./templates/footer.php');
        ?>
    

    <div id="overlay" class="modal">
        <div class="modal-content">
            <span class="close" onclick="fermerModal()">&times;</span>
            <h2>Demande d'informations</h2>
            <form id="demandeForm">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="message">Message :</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </div>
   
    <script>
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".nav-links");

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });

        function demanderInformation(nomVehicule) {
            document.getElementById('overlay').style.display = 'block';
        }

        function fermerModal() {
            document.getElementById('overlay').style.display = 'none';
        }

        document.getElementById('demandeForm').addEventListener('submit', function (event) {
            event.preventDefault();
            alert('Formulaire soumis avec succès!');
            fermerModal();
        });

    
const filtreSelect = document.getElementById('filtre');
const prixMinInput = document.getElementById('prix-min');
const prixMaxInput = document.getElementById('prix-max');
const vehiculesSection = document.getElementById('vehicules-section');
const vehiculesCards = vehiculesSection.querySelectorAll('.vehicule-card');

function appliquerFiltres() {
    const filtre = filtreSelect.value;
    const prixMin = prixMinInput.value ? parseInt(prixMinInput.value) : 0;
    const prixMax = prixMaxInput.value ? parseInt(prixMaxInput.value) : Number.MAX_SAFE_INTEGER;
    vehiculesCards.forEach(card => {
        const categorie = card.getAttribute('data-categorie');
        const prix = parseInt(card.getAttribute('data-prix'));
        const annee = parseInt(card.querySelector('p').innerText.match(/\d{4}/)[0]);
        card.style.display = (filtre === 'tous' || filtre === categorie) &&
            (prix >= prixMin && prix <= prixMax) &&
            (filtre !== 'Année+' || annee > 2010) &&
            (filtre !== 'Année-' || annee <= 2010)
            ? 'block' : 'none';
    });
}

filtreSelect.addEventListener('change', appliquerFiltres);
prixMinInput.addEventListener('input', appliquerFiltres);
prixMaxInput.addEventListener('input', appliquerFiltres);

appliquerFiltres();


    </script>


</body>

</html>

