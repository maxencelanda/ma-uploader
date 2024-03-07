<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-no-repeat min-h-[100vh] bg-gradient-to-b from-fuchsia-300 to-violet-400">
    <div class="w-1/4 mx-auto mt-32 bg-gradient-to-b from-white text-center rounded-lg">
        <?php echo '<p class="font-semibold text-3xl pt-5 header" style="background-color: red; padding: 10px; color: white;">EPSILON</p>'; ?>
        <p>Plateforme de peer-learning</p>
        <p>EPSI Lille</p>
        <img src="./assets/maxenss.webp" class="w-[8.5rem] h-32 mx-auto rounded-full my-5"/>
        <p>Reda Khouya</p>
        <p>Groupe: Reda, Jordan, Maxence
        <a href="./form.php" class="underline">Upload your file !</a>
    </div>


    <script>
        window.onload = function () {
            document.querySelector('.header').style.backgroundColor = 'red';
            document.querySelector('.header').style.padding = '10px';
            document.querySelector('.header').style.color = 'white';
        };
    </script>
</body>
</html>
