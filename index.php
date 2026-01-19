<?php
/**
 * Fichier : index.php
 * Site : Anonymous SOS FR
 * Fonction : Gestionnaire d'accueil et de contact
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous SOS FR - Officiel</title>
    <style>
        /* Design Moderne et Sombre */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #0d1117;
            color: #c9d1d9;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 60px 20px;
        }
        h1 {
            color: #ffffff;
            font-size: 2.5em;
            letter-spacing: 2px;
        }
        /* Le badge certifié */
        .badge-certified {
            color: #3897f0;
            font-size: 0.7em;
            vertical-align: middle;
            margin-left: 10px;
        }
        /* Boite de contact */
        .contact-card {
            background-color: #161b22;
            border: 1px solid #30363d;
            border-radius: 15px;
            display: inline-block;
            padding: 30px;
            margin-top: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }
        .info-item {
            font-size: 1.2em;
            margin: 15px 0;
        }
        .info-label {
            color: #8b949e;
            font-weight: bold;
        }
        /* Bouton SOS */
        .sos-button {
            display: block;
            background-color: #da3633;
            color: white;
            text-decoration: none;
            padding: 20px 40px;
            border-radius: 50px;
            font-weight: bold;
            font-size: 1.4em;
            margin-top: 25px;
            transition: transform 0.2s, background-color 0.2s;
            border: 2px solid #f85149;
        }
        .sos-button:hover {
            background-color: #f85149;
            transform: scale(1.05);
        }
        footer {
            margin-top: 50px;
            color: #484f58;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>
            Anonymous SOS FR 
            <span class="badge-certified">✔ CERTIFIÉ</span>
        </h1>

        <div class="contact-card">
            <h2>Tableau de Bord de Gestion</h2>
            <p>Système de licence et assistance en direct.</p>

            <hr style="border: 0; border-top: 1px solid #30363d; margin: 20px 0;">

            <div class="info-item">
                <span class="info-label">📞 TÉLÉPHONE :</span><br>
                <span>+32456894335</span> </div>

            <div class="info-item">
                <span class="info-label">📧 EMAIL :</span><br>
                <span>despreschez@gmail.com</span> </div>

            <a href="tel:+32456894335" class="sos-button">🚨 APPEL SOS 🚨</a>
        </div>
    </div>

    <footer>
        <p>© <?php echo date("Y"); ?> Anonymous SOS FR | Sécurisé par PHP 8.x</p>
    </footer>

</body>
