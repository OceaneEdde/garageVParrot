<?php
session_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["telephone"]) && isset($_POST["message"])) {
        $nom = htmlspecialchars($_POST["nom"]);
        $email = htmlspecialchars($_POST["email"]);
        $telephone = htmlspecialchars($_POST["telephone"]);
        $message = htmlspecialchars($_POST["message"]);

        
        include 'connexion.php';

        
        $sql = "INSERT INTO rendezvous (nom, email, telephone, message) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nom, $email, $telephone, $message);

        if ($stmt->execute()) {
            echo "Rendez-vous pris avec succès.";
        } else {
            echo "Erreur lors de la prise de rendez-vous : " . $conn->error;
        }


        $stmt->close();
        $conn->close();
    } else {
        
        header("Location: erreur.php");
        exit();
    }
} else {
    
    header("Location: index.php");
    exit();
}
?>
