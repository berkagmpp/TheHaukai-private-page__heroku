<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title lang="mi">HAUKAI RESTAURANT | Māori kai</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Deleted <header> tag because of <nav> sticky-top classList -->
    <!-- Top menu navigation -->
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <!-- nav static space -->
            <div id="navbar-static">
                <a href="index.html" class="navbar-brant mb-0 h1">
                    <img class="d-inline-block align-center"
                        src="img/logo_109x38.png"
                        width="109" height="38">
                </a>
                <button type="button" id="btn_menu"
                    aria-label="Toggle navigation">
                    <input type="image" class="--bs-white"
                            src="img/bars.png" alt="Hamburger button">
                </button>
            </div>
            <!-- nav list above lg size -->
            <div class="navbar-dis" id="navbars-dis">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link active">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a href="about_us.html" class="nav-link active">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
                        <a href="contact.html" class="nav-link active">CONTACT</a>
                    </li>
                    <li class="nav-item active">
                        <a href="blog.html" class="nav-link active">BLOG</a>
                    </li>
                    <li class="nav-item active">
                        <a href="menu.html" class="nav-link active">MENU</a>
                    </li>
                    <li class="nav-item active" id="booking-po">
                        <a href="booking_buy.html" class="booking-box">BOOKING &amp; BUY</a>
                    </li>
                </ul>
            </div>
            <!-- nav list up to md size -->
            <div class="navbar-full bg-white" id="navbar-full">
                <ul class="navbar-nav">
                    <button type="button" id="btn_cancel">
                        <input type="image" src="img/times.png" alt="Hamburger button">
                    </button>
                    <li class="nav-item active">
                        <a href="index.html" class="nav-link active">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a href="about_us.html" class="nav-link active">ABOUT US</a>
                    </li>
                    <li class="nav-item active">
                        <a href="contact.html" class="nav-link active">CONTACT</a>
                    </li>
                    <li class="nav-item active">
                        <a href="blog.html" class="nav-link active">BLOG</a>
                    </li>
                    <li class="nav-item active">
                        <a href="menu.html" class="nav-link active">MENU</a>
                    </li>
                    <li class="nav-item active" id="booking-bo">
                        <a href="booking_buy.html" class="booking-box">BOOKING &amp; BUY</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <!-- custom javascript -->    
    <script src="custom.js"></script>
</body>

</html>