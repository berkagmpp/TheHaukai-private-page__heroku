<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking &amp; BUY | HAUKAI RESTAURANT</title>
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
                <source media="(min-width: 1600px)" srcset="img/booking_2200x1162.jpg">
                <source media="(min-width: 991px)" srcset="img/booking_900x475.jpg">
                <source media="(max-width: 576px)" srcset="img/booking_411x217.jpg">
                <img src="img/booking_411x217.jpg" alt="Booking &amp background: White trees in snow">
            </picture>
            <div class="position-relative w-100 1z-index tb-head">
                <div class="m-auto top-banner-head">
                    <h1>BOOKING &amp; BUY</h1>
                </div>
            </div>
        </div>

        <!-- content -->
        <section class="col-12 container" role="contentinfo" aria-label="Notice for booking">
            <div class="row whole-text" aria-label="Covid-19 vaccination information for all guests">
                <p class="col-12 my-4 fs-101 mw-700">
                    Dear Guest.<br><br>
                    The directive of the New Zealand government is that hospitality 
                    venues are required to ensure that all guests aged 12 and over are 
                    <strong>double vaccinated </strong>for bookings from 03/12/21 until further notice.<br><br>
                    Please indicate below that you acknowledge this directive before proceeding to book. 
                    Proof of vaccination will be required until New Zealand Health mandates 
                    that hospitality venues may welcome unvaccinated guests.
                </p>
                <!-- button for opening the modal -->
                <div class="col-12 py-4 text-center" aria-label="Booking button">
                    <button type="button" class="btn btn-outline-dark"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">I ACKNOWLEDGE</button>
                </div>
            </div>
            <!-- modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" 
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
                aria-label="Opening Google form modal for booking a table">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down text-center">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0 img-fluid">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSci4dXFoLO9jb2-HN1GLrOw9uhUBbQ-1tlnNEvXlKVBbP6eeg/viewform?embedded=true" 
                                    scrolling="no" width="100%" height="1440" frameborder="0" marginheight="0" marginwidth="0"
                                    title="Google form for booking a table">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End content -->
    </main>
    <!-- End main -->
    
    <?php
        include "footer.php";
    ?>