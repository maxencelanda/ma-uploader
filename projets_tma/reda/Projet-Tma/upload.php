<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
    <style>
        /*  styles  body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            color: green;
        }

        /* Styles  container */
        .result-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
            margin: auto;
        }

        /* Header styles */
        h1 {
            margin-bottom: 20px;
        }

        /* Paragraph styles */
        p {
            margin-bottom: 10px;
        }

        .profile-pic {
            display: flex;
        }

        img {
            width: 25%;
            margin: auto;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Result container to display upload result -->
    <div class="result-container">
        <h1>Upload Result</h1>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_pic"])) {
            $uploadDir = "Dossier-dest/";

            $uploadedFile = $_FILES["profile_pic"];
            $fileName = basename($uploadedFile["name"]);
            $targetPath = $uploadDir . $fileName;
            $imageFileType = strtolower(pathinfo($targetPath,PATHINFO_EXTENSION));

            $allowedFileTypes = ["pdf", "png", "jpg", "webp", "doc", "docx", "dot", "dotx"]; // tableau pour une modification + facile

            if(!(in_array($imageFileType, $allowedFileTypes))) {
                echo "Sorry, only JPG, JPEG, PNG, PDF & WORD files are allowed.";
                header("Location: ./upload.php");
                exit;
            }

            // Envoyer le fichier vers la destination
            if (move_uploaded_file($uploadedFile["tmp_name"], $targetPath)) {
                echo '<p class="success-message">Le fichier a été téléchargé avec succès dans le dossier spécifique.</p>';
            } else {
                echo '<p class="error-message">Une erreur s\'est produite lors du téléchargement du fichier.</p>';
            }
        } else {
            // message d'erreur
            echo '<p class="error-message">Erreur : Aucun fichier n\'a été envoyé.</p>';
        }
        ?>
    </div>
    <?php include "./footer.php" ?>
</body>
</html>
