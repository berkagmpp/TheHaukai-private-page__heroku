<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | HAUKAI RESTAURANT</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Google Programmable Search -->
    <script async src="https://cse.google.com/cse.js?cx=cfc94dceefe4eb426"></script>
</head>

<body>

    <?php
        include "header.html";
    ?>

    <!-- Main -->
    <main class="row">
        <!-- top img banner -->
        <div class="col-12 position-relative top-page-banner" role="banner" aria-label="The top page banner">
            <!-- responsive picture srcset for 415w, 900w, 1600w -->
            <picture>
                <source media="(min-width: 1600px)" srcset="img/blog_2200x1162.jpg">
                <source media="(min-width: 991px)" srcset="img/blog_900x475.jpg">
                <source media="(max-width: 576px)" srcset="img/blog_411x217.jpg">
                <img src="img/blog_411x217.jpg" alt="Blog background: A AT, a mail and a phone simbol">
            </picture>
            <div class="position-relative w-100 1z-index tb-head">
                <div class="m-auto top-banner-head">
                    <h1>BLOG</h1>
                </div>
            </div>
        </div>
        <!-- page sub menu -->
        <div class="col-12 sub-menu-container">
            <ul class="nav justify-content-center p-4" role="navigation" aria-label="sub menu">
                <li class="nav-item">
                <a class="nav-link link-dark" aria-current="page" href="#section-one">TRADITIONAL RECIPES</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-dark" href="#section-two">CULTURE &#38; KAI</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <section class="col-12 bg-container" role="contentinfo" aria-label="Blog lists">

            <!-- Google Programmable Search -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <div id="cse">
                    <div class="gcse-search"></div>
                </div>
            </div>

            <!-- traditional recipes blog section -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-one" aria-label="Traditional recipes blog section">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">TRADITIONAL RECIPES</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <div class="container p-0">
                            <div class="row space-between">
                                <!-- main post 1 -->
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post one of traditional recipes section">
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
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post two of traditional recipes section">
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
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post three of traditional recipes section">
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
                    </div>
                </article>
            </div>
            <!-- culture and kai blog section -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-two" aria-label="Culture and Kai blog section">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">CULTURE &#38; KAI</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <div class="container p-0">
                            <div class="row space-between">
                                <!-- main post 1 -->
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post one of culture and Kai section">
                                    <div class="img-fluid">
                                        <img src="img/blog_4_400x400.jpg" alt="The potatoes pouring from the envelope in the black background">
                                    </div>
                                    <h4 class="mt-3" lang="mi">Tamaki Māori culture near the west coast</h4>
                                    <p class="text-end">2021.12.24</p>
                                    <p class="pr-5 p-clamp">
                                        Lorem ipsum dolor sit amet, consec adiping elit,
                                        sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                                        Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                                    </p>
                                </div>
                                <!-- main post 2 -->
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post two of culture and Kai section">
                                    <div class="img-fluid">
                                        <img src="img/blog_5_400x400.jpg" lang="mi" alt="A sculpture of Māori, a piece of paper with whanau written on it, and a lawn">
                                    </div>
                                    <h4 class="mt-3" lang="mi">Te Ahi Kōmau brings indigenous kai to the forefront</h4>
                                    <p class="text-end">2022.01.15</p>
                                    <p class="pr-5 p-clamp">
                                        Lorem ipsum dolor sit amet, consec adiping elit,
                                        sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                                        Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                                    </p>
                                </div>
                                <!-- main post 3 -->
                                <div class="col-lg-4 col-md-12 px-3 my-5 colPost" aria-label="Blog post three of culture and Kai section">
                                    <div class="img-fluid">
                                        <img src="img/blog_6_400x400.jpg" lang="mi" alt="A sculpture of Māori, a piece of paper with whanau written on it, and a lawn">
                                    </div>
                                    <h4 class="mt-3">Traditional and Contemporary Māori Art</h4>
                                    <p class="text-end">2022.02.15</p>
                                    <p class="pr-5 p-clamp">
                                        Lorem ipsum dolor sit amet, consec adiping elit,
                                        sed do eiuso tempor incdunt ut labre et dolore magna alqua.
                                        Semper feugia nibh sed pulvinar proin gravida. Vel orci porta non pulvinar neque laoreet suspendisse.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- End content -->

    </main>
    <!-- End main -->
    
    <?php
        include "footer.php";
    ?>