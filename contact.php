<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="essai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="essai.js" defer></script>
    <title>contact</title>
</head>
<body>
<div class="menu-btn">
  <div class="btn-line"></div>
  <div class="btn-line"></div>
  <div class="btn-line"></div>
</div>

<nav class="menu">
  <ul>
    <li><a href="index.html">Accueil</a></li>
    <li><a href="transports.html">Transports en commun</a></li>
    <li><a href="tutos.html">Vidéos Tutos</a></li>
    <li><a href="collectif.html">Le collectif</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav>

    <div class="espace_contact"></div>
    <div class="container">
        
        <img src="images/logo.png" alt="logo" style="width: 150px; height:150px;  border-radius: 8px">
        
        <h2>Contactez-nous</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required><br><br>
            
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="message">Message :</label><br>
            <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
            
            <input type="submit" name="submit" value="Envoyer">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupération des données du formulaire
            $nom = $_POST["nom"];
            $email = $_POST["email"];
            $message = $_POST["message"];

            // Adresse email où vous recevrez les messages
            $destinataire = "marypreux@aol.com";

            // Sujet du message
            $sujet = "Nouveau message de $nom du site mobilité en Matheysine";

            // Corps du message
            $contenu = "Nom: $nom\n";
            $contenu .= "Email: $email\n\n";
            $contenu .= "Message:\n$message";

            // Envoi du mail
            $envoi = mail($destinataire, $sujet, $contenu);

            if ($envoi) {
                echo '
                    <script type="text/javascript">
                    alert("formulaire envoyé");
                    </script>';
            } 
            else {
                echo '
                <script type="text/javascript">
                    alert("Une erreur s est produite lors de l envoi de votre message");
                    </script>';
               
            }
        }
        ?>
    </div>
</body>
</html>
