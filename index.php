<?php include_once("header.html"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><span>Privacy Policy | HAUKAI RESTAURANT</span></title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <p>This page is for The Haukai's employees.</p>

    <!-- button for connecting to the authentication page for staff -->
    <div class="col-12 pb-4 text-center" aria-label="Staff login button">
        <a href="private/private.html" id="btn_book" 
           class="btn btn-outline-dark fs-5" role="button">STAFF LOGIN</a>
    </div>

    <!-- button for connecting to the main page -->
    <div class="col-12 pb-4 text-center" aria-label="Back to the main page button">
        <a href="index.html" id="btn_book" 
           class="btn btn-outline-dark fs-5" role="button">BACK TO MAIN</a>
    </div>

    <?php include_once("footer.html"); ?>

  </body>
</html>