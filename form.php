<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <form method="post" action="form.php" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" action="form.php"/>
        <button type="submit" name="submit">Upload</button>
    </form>
</body>
</html>

<?php

if (isset($_POST["submit"])){
    $targetDirectory = "./uploadedFiles/";
    $fileToUpload = $_FILES["uploadedFile"];
    $fileDirectory = $targetDirectory . basename($fileToUpload["name"]);
    move_uploaded_file($fileToUpload["tmp_name"], $fileDirectory);
}

?>