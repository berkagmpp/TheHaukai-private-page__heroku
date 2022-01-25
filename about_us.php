<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preload" href="https://calendar.google.com/calendar/embed?height=500&wkst=1&bgcolor=%23ffffff&ctz=Pacific%2FAuckland&showNav=1&showDate=1&showPrint=0&showTabs=0&showTz=1&src=c2d0N2RzMjkwZmt1NGZkdWVzNThmOXZzNm9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%2333B679" as="document">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | HAUKAI RESTAURANT</title>
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
        <!-- top img banner -->
        <div class="col-12 position-relative top-page-banner" role="banner" aria-label="The top page banner">
            <!-- responsive picture srcset for 415w, 900w, 1600w -->
            <picture>
                <source media="(min-width: 1600px)" srcset="img/about_2200x1162.jpg">
                <source media="(min-width: 991px)" srcset="img/about_900x475.jpg">
                <source media="(max-width: 576px)" srcset="img/about_411x217.jpg">
                <img src="img/about_411x217.jpg" alt="About background: The ingredients and a spoon">
            </picture>
            <div class="position-relative w-100 1z-index tb-head">
                <div class="m-auto top-banner-head">
                    <h1>ABOUT US</h1>
                </div>
            </div>
        </div>
        <!-- page sub menu -->
        <div class="col-12 sub-menu-container">
            <ul class="nav justify-content-center p-4" role="navigation" aria-label="sub menu">
                <li class="nav-item">
                <a class="nav-link link-dark" aria-current="page" href="#section-one">OUR STORY</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-dark" href="#section-two">OWNER</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-dark" href="#section-three">REVIEW</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-dark" href="#section-four">OPENING HOURS</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <section class="col-12 bg-container" role="contentinfo" aria-label="About Haukai restaurant">
            <!-- our story -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-one" aria-label="Our story">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">OUR STORY</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <p class="text-start px-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Semper feugiat nibh sed pulvinar proin gravida. Vel orci porta non
                            pulvinar neque laoreet suspendisse.</p><br>
                        <p class="text-start px-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Semper feugiat nibh sed pulvinar proin.</p>
                    </div>
                </article>
            </div>
            <!-- owner -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-two" aria-label="Owner">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">OWNER</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <p class="text-start px-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Tellus cras adipiscing enim eu turpis egestas. 
                            Amet mattis vulputate enim nulla aliquet. 
                            Augue eget arcu dictum varius duis at consectetur lorem donec. 
                            Lacus laoreet non curabitur gravida arcu ac tortor dignissim. 
                            Nec ullamcorper sit amet risus nullam eget felis eget nunc.</p>
                    </div>
                </article>
            </div>
            <!-- review -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-three" aria-label="Review">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">REVIEW</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <p class="text-start px-5"> Facebook Reviews<br>
                                                    4.2 / 5.0<br><br>
                                                    Recent Reviews:<br>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt.</p>
                        <div class="nav-item text-end">
                            <a class="nav-link" href="#">Read More ></a>
                        </div>
                    </div>
                </article>
            </div>
            <!-- opening hours -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-four" aria-label="Opening hours">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">OPENING HOURS</h2>
                    </div>
                    <div class="col-12 py-4 text-cover">
                        <p class="px-5 pt-4">WEDNESDAY to SUNDAY :<br> 17:00 - 23:00<br><br>
                                            MONDAY & TUESDAY :<br> Closed</p>
                    </div>
                    <div class="col-12 py-4 text-cover" aria-label="Google calendar">
                        <div class="d-block mx-auto cal-box">
                            <iframe src="https://calendar.google.com/calendar/embed?height=500&wkst=1&bgcolor=%23ffffff&ctz=Pacific%2FAuckland&showNav=1&showDate=1&showPrint=0&showTabs=0&showTz=1&src=c2d0N2RzMjkwZmt1NGZkdWVzNThmOXZzNm9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%2333B679" 
                                    style="border-width:0" width="100%" height="450px" frameborder="0" scrolling="no"
                                    title="Google calendar for opening date and hour"></iframe>
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