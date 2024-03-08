<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <title>Acceuil</title>
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" type="text/css" media="screen" href="assets/style/bootperso.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="assets/style/style.css" />
   </head>
   <body>
      <main class="centered">
         <div class="row col-12 col-sm-9 col-md-6 col-lg-3 centered">
            <div class="box" >
               
               <?php
               include 'pages/layout/header.php';
               ?>
               
               <div class="centeredBis">
                  <div style="display: flex">
                     <img src="assets/image/joyca.webp" alt="Joyca" />
                     <img src="assets/image/maxenss.webp" alt="Maxenss" />
                  </div>
                  <div> Jordan Rondelli</div>
                  <div> Maxence LANDA, Reda Khouya</div>
               </div>

               <p><a href="pages/uploadPage.php">Upload your file !</a></p>
               <?php include "./pages/layout/footer.php" ?>
            </div>
         </div>
      </main>
   </body>
</html>
