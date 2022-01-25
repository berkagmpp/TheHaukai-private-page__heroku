<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | HAUKAI RESTAURANT</title>
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
                <source media="(min-width: 1600px)" srcset="img/contact_2200x1162.jpg">
                <source media="(min-width: 991px)" srcset="img/contact_900x475.jpg">
                <source media="(max-width: 576px)" srcset="img/contact_411x217.jpg">
                <img src="img/contact_411x217.jpg" alt="Contact background: A AT, a mail and a phone simbol">
            </picture>
            <div class="position-relative w-100 1z-index tb-head">
                <div class="m-auto top-banner-head">
                    <h1>CONTACT</h1>
                </div>
            </div>
        </div>
        <!-- page sub menu -->
        <div class="col-12 sub-menu-container">
            <ul class="nav justify-content-center p-4" role="navigation" aria-label="sub menu">
                <li class="nav-item">
                <a class="nav-link link-dark" aria-current="page" href="#section-one">ENQUIRY</a>
                </li>
                <li class="nav-item">
                <a class="nav-link link-dark" href="#section-two">ADDRESS</a>
                </li>
            </ul>
        </div>

        <!-- content -->
        <section class="col-12 bg-container" role="contentinfo" aria-label="Contact information">
            <!-- enquiry section -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-one" aria-label="Enquiry form">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">ENQUIRY</h2>
                    </div>
                    <form class="col-12 py-4 form-cover" id="enquiryform" action="#" method="post" aria-label="Submit enquiry">
                        <div aria-label="Name">
                            <label class="form-label" for="cus_name">Name:</label>
                            <input type="text" class="form-control" id="cus_name" name="cus_name" maxlength="25" required
                                   onkeyup="nameCharCheck(this)" onkeydown="nameCharCheck(this)"
                                   placeholder=" Plese enter your name"><br>
                            <div class="alert px-3 py-2" id="name-error"></div>
                        </div>
                        <div aria-label="Email">
                            <label class="form-label" for="cus_email">Email:</label>
                            <input type="email" class="form-control" id="cus_email" name="cus_email" maxlength="50" required
                                   onkeyup="emailCharCheck(this)" onkeydown="emailCharCheck(this)"
                                   placeholder=" Plese enter your email adress"><br>
                            <div class="alert px-3 py-2" id="email-error"></div>
                        </div>
                        <div class="pb-4" aria-label="Content">
                            <label class="form-label" for="cus_content">Content:</label>
                            <textarea rows="6" class="form-control" cols="60" id="cus_content" name="cus_content" maxlength="3000" required
                                      onkeyup="contentCharCheck(this)" onkeydown="contentCharCheck(this)"
                                      placeholder="Please fill out the details of your inquiry"></textarea>
                            <div class="alert d-flex align-items-center px-3 py-2 my-3" id="content-error"></div>
                        </div>
                        <div class="d-block btn btn-outline-secondary justify-content-center mb-3" aria-labelledby="submit">
                            <input type="submit" class="bg-transparent" id="submit" value="SUBMIT">
                        </div>
                    </form>
                </article>
            </div>
            <!-- address section -->
            <div class="container my-5 px-0 py-5 container-px-sm">
                <article class="row justify-content-center" id="section-two" aria-label="Address and phone">
                    <div class="col-12 py-3 head-cover">
                        <h2 class="mb-0 heading-area">Address</h2>
                    </div>
                    <div class="col-12 pt-5 pb-4 text-cover">
                        <div class="text-area">
                            <div class="mb-4 text-center">
                                <span class="border border-2 rounded py-1 px-3 con-phone">Tel: 09 401 4019</span>
                            </div>
                            <p class="px-5 mb-0">1 Island Street<br>Kerikeri, Bay of Islands<br>New Zealand</p>
                        </div>
                    </div>
                    <div class="col-12 text-cover" aria-label="Google map">
                        <div class="d-block mx-auto cal-box">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11615.282571345257!2d174.00238844449052!3d-35.22069815766716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0bb73e31b0728b%3A0x500ef6143a2d500!2sKerikeri!5e0!3m2!1sen!2snz!4v1642044788042!5m2!1sen!2snz" 
                            title="Google map for location" width="100%" height="250px" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- End content -->

    </main>
    <!-- End main -->
    
    <?php
        include "footer.html";
    ?>