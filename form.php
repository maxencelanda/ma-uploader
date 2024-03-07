<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "./header.php" ?>
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
    $fileDirectory = $targetDirectory . basename($fileToUpload["name"]);
    if (move_uploaded_file($fileToUpload["tmp_name"], $fileDirectory)){
        echo "<p class='text-center'>Document uploadé avec succès.</p>";
    }
}

?>