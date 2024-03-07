<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col items-center justify-center min-h-screen bg-gradient-to-b from-rose-300 to-violet-400">

    <div class="container w-1/2 mx-auto bg-white text-center rounded-lg p-8 box-border">

        <form method="post" action="form.php" enctype="multipart/form-data" class="form-container flex flex-col items-center">

            <input type="file" name="uploadedFile" accept=".pdf, .jpg, .jpeg, .png, .gif" class="upload-input w-80 p-2 mb-4 box-border" />

            <button type="submit" name="submit" class="upload-button underline w-80 p-2 cursor-pointer bg-white hover:bg-gray-100 text-pink-500 border border-pink-500 rounded-md" onclick="changeBackgroundColor(this)">Upload</button>

        </form>

    </div>

    <?php
    if (isset($_POST["submit"])){
        $targetDirectory = "./uploadedFiles/";
        $fileToUpload = $_FILES["uploadedFile"];
        $fileDirectory = $targetDirectory . basename($fileToUpload["name"]);
        
        // Vérifiez si le fichier est un PDF ou une image
        $allowedTypes = ['application/pdf', 'image/jpeg', 'image/png', 'image/gif'];
        if (in_array($fileToUpload['type'], $allowedTypes)) {
            move_uploaded_file($fileToUpload["tmp_name"], $fileDirectory);
            echo "Le fichier a été téléchargé avec succès.";
        } else {
            echo "Veuillez télécharger uniquement des fichiers PDF ou des images.";
        }
    }
    ?>

    <script>
        // JavaScript pour ajuster la hauteur du corps
        window.onload = function () {
            document.body.style.minHeight = window.innerHeight + 'px';
        };

        function changeBackgroundColor(button) {
            button.style.backgroundColor = '#FFC0CB';
            button.style.color = 'pink';
        }
    </script>
</body>
</html>
