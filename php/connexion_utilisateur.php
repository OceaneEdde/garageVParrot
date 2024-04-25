<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "SELECT id, nom, prenom FROM utilisateurs WHERE email='$email' AND mot_de_passe='$mot_de_passe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['nom'] = $row['nom'];
        $_SESSION['prenom'] = $row['prenom'];
        header("Location: dashboard.php");
    } else {
        echo "Identifiants invalides.";
    }
}

$conn->close();
?>