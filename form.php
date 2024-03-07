<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>EPSILON - Upload</title>
</head>
<body class="bg-no-repeat min-h-[100vh] bg-gradient-to-b from-fuchsia-300 to-violet-400">
    <div class="w-1/4 mx-auto mt-32 bg-gradient-to-b from-white text-center rounded-lg">
        <form method="post" action="form.php" enctype="multipart/form-data">
            <input type="file" name="uploadedFile" action="form.php"/>
            <button type="submit" name="submit" class="underline">Upload</button>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST["submit"])){
    $targetDirectory = "./uploadedFiles/";
    $fileToUpload = $_FILES["uploadedFile"];
    $fileName = basename($fileToUpload["name"]);
    $fileDirectory = $targetDirectory . $fileName;
    $fileExtension = substr($fileName, strpos($fileName, "."), strlen($fileName)-1);
    $extensions_allowed = [".pdf", ".png", ".jpg", ".webp"];
    var_dump(in_array($fileExtension, $extensions_allowed));

    if (in_array($fileExtension, $extensions_allowed)){
        if (move_uploaded_file($fileToUpload["tmp_name"], $fileDirectory)){
            echo "<p class='text-center'>Fichier uploadé avec succès.</p>";
        } else {
            echo "<p class='text-center'>Echec dans l'upload du fichier.</p>";
        }
    } else {
        echo "<p class='text-center'>L'extension du fichier n'est pas valide.</p>";
    }
}

?>