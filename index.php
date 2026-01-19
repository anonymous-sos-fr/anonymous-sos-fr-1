<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous sos fr</title>
    <style>
        /* Style de base pour garder l'esprit Anonymous */
        body {
            background-color: #000;
            color: #0f0; /* Vert matrice */
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            border: 1px solid #0f0;
            padding: 20px;
            box-shadow: 0 0 15px #0f0;
            max-width: 800px;
            width: 100%;
        }

        h1 {
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        .status-box {
            background: #111;
            padding: 10px;
            margin-bottom: 20px;
            border-left: 5px solid #0f0;
        }

        /* Les pseudos colorés permanents (Exemple) */
        .user-id {
            font-weight: bold;
            color: #ff00ff; /* Couleur personnalisée qui restera */
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Anonymous sos fr</h1>
        
        <div class="status-box">
            <?php
                // Simulation de la vérification de connexion
                $user = "Anonymous"; 
                echo "Connecté en tant que : <span class='user-id'>" . $user . "</span>";
            ?>
        </div>

        <div id="main-content">
            <p>Bienvenue sur le système.</p>
            <p>Ici, vous pouvez gérer vos accès et vos licences sans limite.</p>
        </div>
    </div>

    <audio id="anonymousAudio" style="display:none;">
        <source src="anonymous_msg.mp3" type="audio/mpeg">
    </audio>

    <script>
        // Lecture automatique du message d'accueil
        window.addEventListener('load', function() {
            const audio = document.getElementById('anonymousAudio');
            
            // Tentative de lecture automatique
            const playPromise = audio.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    // Les navigateurs bloquent souvent le son auto sans interaction.
                    // On force la lecture au premier clic n'importe où sur la page.
                    document.body.addEventListener('click', () => {
                        audio.play();
                    }, { once: true });
                });
            }
        });
    </script>

</body>
</html>
