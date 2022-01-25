<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | HAUKAI RESTAURANT</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row py-2 py-sm-4">
                <!-- footer links -->
                <div class="col-lg-4 col-md-12 py-5 colFoot" aria-label="Footer links">
                    <ul class="nav navbar-nav col-subnav">
                        <li class="nav-item">
                            <a class="nav-link p-3" href="privacy_policy.html">PRIVACY POLICY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="#">TERMS &amp; CONDITIONS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="contact.html">CONTACT &amp; HELP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-3" href="#">FOR EMPLOYEES</a>
                        </li>
                    </ul>
                </div>
                <!-- wheather info -->
                <div class="col-lg-4 col-md-12 py-5 colFoot" aria-label="Wheather infomation">
                    <h4 class="pb-4">WHEATHER INFO</h4>
                    <div class="d-block mx-auto">
                        <iframe id="widget-iframe" width="300px" height="167px" 
                        src="https://services.metservice.com/weather-widget/widget?params=white|small|portrait|days-3|classic&amp;loc=auckland&amp;type=urban"></iframe>
                    </div>
                </div>
                <!-- contact info -->
                <div class="col-lg-4 col-md-12 py-5 mt-4 colFoot" aria-label="Contanct information">
                    <span class="border border-2 rounded py-1 px-3 con-phone">09 401 4019</span>
                    <p class="con-address">1 Island Street<br>Kerikeri, Bay of Islands<br>New Zealand</p>
                </div>
            </div>
            <div class="container pb-5 colFoot" aria-label="Copyright display" aria-labelledby="copyright-text">
                <span id="copyright-text" aria-label="Copyright information"></span>
                <div class="font-09" aria-label="Copyright reserved">&nbsp;All Rights Reserved.</div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- custom javascript -->    
    <script src="custom.js"></script>
    </body>

</html>