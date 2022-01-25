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
<?php
    include "header.html";
?>

    <!-- Main -->
    <main class="row">
        <!-- Index main banner -->
        <div class="col-12 banner">
            <img src="img/banner_slogan.png" lang="mi" alt="The Haukai Restaurant - Tradirional Māori &amp; Modern Māori Fusion"> 
        </div>
        <div class="col-12 container">
            <!-- Index main text section-->
            <div class="row" role="contentinfo" aria-label="The Haukai restaurant introduction">
                <div class="col-12 py-5">
                    <h1 class="title">THE HAUKAI RESTAURANT</h1>
                    <div class="blank-box"></div>
                    <h2 class="main-h2"><span lang="mi">Traditional Māori &amp; Modern Māori Fusion</span></h2>
                    <div class="text-content-container">
                        <p lang="mi">"Drawing inspiration from trditional Māori cuisine, The Haukai reinvents dishes to create a timeless
                            fusion of old and new, blending familiar comforts with an inventive, playful modern flair."</p>
                    </div>
                </div>
            </div>
        </div>
        <section class="col-12 bg-container" role="contentinfo" aria-label="Main to others link">
            <!-- Index main content link section-->
            <div class="row">
                <div class="main-bg-cover">
                    <div class="container">
                        <div class="main-wrapper" aria-label="Main to menus page link">
                            <div class="img-menu" role="img" aria-label="A lamb and salmon dish for menu page"></div>
                            <div id="text-menu" aria-labelledby="menus-page_link">
                                <div class="img-cover">
                                    <a href="menu.html"><h4 id="menus-page_link">OUR<br>MENUS</h4></a>
                                </div>
                            </div>
                        </div>
                        <div class="main-wrapper" aria-label="Main to about page link">
                            <div id="text-abouthaukai" aria-labelledby="about-page_link">
                                <div class="img-cover">
                                    <a href="about_us.html"><h4 id="about-page_link">ABOUT<br>HAUKAI</h4></a>
                                </div>
                            </div>
                            <div class="img-abouthaukai" role="img" aria-label="Table setting for about us page"></div>
                        </div>
                        <div class="main-wrapper">
                            <div class="img-restaurant_1" role="img" aria-label="Around of entrance"></div>
                            <div class="img-restaurant_2" role="img" aria-label="Interior"></div>
                        </div>
                        <div class="main-wrapper" aria-label="Main to location page link">
                            <div class="img-location"></div>
                            <div id="text-location" aria-labelledby="location-page_link">
                                <div class="img-cover" role="img" aria-label="Sunset for location page">
                                    <a href="contact.html"><h4 id="location-page_link">LOCATION</h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Index main posting link section-->
            <div class="container p-0">
                <div class="section-head">
                    <h2>BLOG</h2>
                </div>
                <div class="row space-between">
                    <!-- main post 1 -->
                    <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post one">
                        <div class="img-fluid">
                            <img src="img/blog_1_400x400.jpg" alt="The potatoes pouring from the envelope in the black background">
                        </div>
                        <h4 class="mt-3">Potato dishes from the central North Island</h4>
                        <p class="text-end">2021.12.30</p>
                        <p class="pr-5 p-clamp">
                            Lorem ipsum dolor sit amet, consec adiping elit,
                            sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                            Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                        </p>
                    </div>
                    <!-- main post 2 -->
                    <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post two">
                        <div class="img-fluid">
                            <img src="img/blog_2_400x400.jpg" alt="Six Oysters and two sliced lemons in a round blue plate">
                        </div>
                        <h4 class="mt-3">Fusion style using Bluff Oyster</h4>
                        <p class="text-end">2022.01.15</p>
                        <p class="pr-5 p-clamp">
                            Lorem ipsum dolor sit amet, consec adiping elit,
                            sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                            Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                        </p>
                    </div>
                    <!-- main post 3 -->
                    <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post three">
                        <div class="img-fluid">
                            <img src="img/blog_3_400x400.jpg" alt="Round stones that are being heated up by fire">
                        </div>
                        <h4 class="mt-3">The ingredients of Hāngi using heated rocks</h4>
                        <p class="text-end">2022.02.06</p>
                        <p class="pr-5 p-clamp">
                            Lorem ipsum dolor sit amet, consec adiping elit,
                            sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                            Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End main -->


<?php
    include "footer.html";
?>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- custom javascript -->    
    <script src="custom.js"></script>
</body>

</html>