
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hébergeur d'images</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include_once("main.php") ?>

    <!-- HEADER -->
    <header>
        <h1>HÉBERGEUR D'IMAGES</h1>
    </header>

    <h3>Vous pouvez déposer vos images, puis les visionner</h3>
    
    <div class="container">
      
            <form method="post" action="index.php" enctype="multipart/form-data">
                    <input type="file" name="image" required>
                    <br>
                    <button type="submit">Héberger</button>
            </form>

            <?php
                if (isset($error) && $error == 0) {

                    echo    '<div>
                                <img src="'.$address.'" id="image"/>
                                <br/>
                                <a href="http://localhost:8888/Cours/PROJET-2%23HEBERGEUR-IMAGE/'.$address.'" target="_blank">Agrandir Image</a>
                            </div>';     
                }

                else if (isset($error) && $error == 1) {
                    echo "<p>Votre image ne peut pas être envoyée, vérifiez son extension et sa taille maximum de 3Mo</p>";
                }
            ?>
        
    </div>

</body>
</html>