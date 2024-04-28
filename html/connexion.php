

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

 
<?php
        include_once('./templates/header.php');
        ?>

    <div class="contentform">
        <h2>Connexion</h2>
        <form id="loginForm" method="post" action="">
            <label for="userType">Type d'utilisateur :</label>
            <select id="userType" name="userType">
                <option value="admin">Administrateur</option>
                <option value="user">Utilisateur</option>
            </select>
            <br>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Se Connecter</button>
        </form>
    </div>

    <footer><p>© 2024 V.Parrot Garage Auto. Tous droits réservés</p></footer>

    <script>
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".nav-links");

        menuHamburger.addEventListener('click', () => {
            navLinks.classList.toggle('mobile-menu');
        });

        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var userType = document.getElementById('userType').value;
            if (userType === 'admin') {
                this.action = 'connexion.php'; 
            } else if (userType === 'user') {
                this.action = 'connexion_utilisateur.php'; 
            }
        });
    </script>
</body>
</html>
