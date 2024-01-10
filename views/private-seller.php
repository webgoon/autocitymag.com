<?php require_once("db_public.php"); ?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Auto City Mag</title>  
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Plugin CSS-->
        <link href="dist/css/plugins.min.css" rel="stylesheet">

        <!--main Css-->
        <link href="dist/css/main.min.css" rel="stylesheet">
    </head>
    <body> 

        <!-- Header-->
        <?php require_once("_inc.header.php"); ?>
        <!-- End Header-->
        
        <!-- Page Inner-->
        <section>
            <div class="background-image-maker gradient gradient-lr"></div>
            <div class="holder-image">
                <img src="dist/images/bg2.jpg" alt="" class="img-fluid d-none" />
            </div>
            <div class="black-overlay overlay-full"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 justify-content-center text-center">
                        <h1 class="text-white c-font-weight-700">Sell car</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Inner-->
        
        <!-- Breadcrumb -->
        <section class="py-0 h-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-sm-5 col-lg-3 text-center">
                        <ol class="breadcrumb justify-content-center mb-0 c-bg-primary text-white py-3 position-relative">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sell car</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Breadcrumb -->
        
        <!-- Sell Car -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <h1 class="c-font-weight-300 c-line-height-1_2"> Sell your used car at <span class="c-primary c-font-weight-700">Guaranteed</span> best price</h1>
                        <ul class="list-unstyled service-list text-white mb-0">
                            <li class="list-one mb-3">
                                <div class="media d-block d-sm-flex c-bg-primary p-3 p-sm-2 text-center text-sm-left">
                                    <h2 class="rounded-circle bg-white list-icon d-sm-flex mr-sm-4 mb-0 text-center mx-auto mb-3 mb-sm-0"><span class="lnr lnr-magic-wand"></span></h2>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-1 text-white">It's all Free!</h5>
                                        Cras ultricies mi eu turpis
                                    </div>
                                </div>
                            </li>
                            <li class="list-two mb-3">
                                <div class="media d-block d-sm-flex c-bg-primary p-3 p-sm-2 text-center text-sm-left">
                                    <h2 class="rounded-circle bg-white list-icon d-sm-flex mr-sm-4 mb-0 text-center mx-auto mb-3 mb-sm-0"><span class="lnr lnr-users"></span></h2>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-1 text-white">Genuie Buyers</h5>
                                        Cras ultricies mi eu turpis
                                    </div>
                                </div>
                            </li>
                            <li class="list-three">
                                <div class="media d-block d-sm-flex c-bg-primary p-3 p-sm-2 text-center text-sm-left">
                                    <h2 class="rounded-circle bg-white list-icon d-sm-flex mr-sm-4 mb-0 text-center mx-auto mb-3 mb-sm-0"><span class="lnr lnr-alarm"></span></h2>
                                    <div class="media-body align-self-center">
                                        <h5 class="mb-1 text-white">Instant Notifications</h5>
                                        Cras ultricies mi eu turpis
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-xl-6 ml-auto text-center text-xl-right">
                        <img src="dist/images/sell-car.png" alt="" class="img-fluid" />
                    </div> 
                </div>
            </div>
        </section>
        <!-- End Sell Car -->
        
        <!-- Post Ad -->
        <section class="pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-7">
                        <h3>Post Your Ad</h3>
                        <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card c-brd-light condition">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Make Year</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Year ---</option>
                                                <option value="2016">2016 </option>
                                                <option value="2015">2015 </option>
                                                <option value="2014">2014 </option>
                                                <option value="2013">2013 </option>
                                                <option value="2012">2012 </option>
                                                <option value="2011">2011 </option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Make Month</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Month ---</option>
                                                <option value="january">January </option>
                                                <option value="fabuary">Fabuary </option>
                                                <option value="march">March </option>
                                                <option value="april">April </option>
                                                <option value="may">May </option>
                                                <option value="june">June </option>
                                                <option value="july">July </option>
                                                <option value="august">August </option>
                                                <option value="september">September </option>
                                                <option value="octomber">Octomber </option>
                                                <option value="november">November </option>
                                                <option value="december">December </option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Brand</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Brand ---</option>
                                                <option value="Ford">Ford </option>
                                                <option value="Volvo">Volvo</option>
                                                <option value="BMW">BMW</option>
                                                <option value="Aston">Aston</option>
                                                <option value="Chevrolet">Chevrolet</option>
                                                <option value="Honda">Honda City i VTEC SV</option>
                                                <option value="Volkswagen">Volkswagen</option>
                                                <option value="Tata">Tata</option>.
                                                <option value="Skoda">Skoda</option>
                                                <option value="Audi">Audi</option>
                                                <option value="Ranault">Ranault</option>
                                                <option value="Nissan">Nissan</option>
                                                <option value="Mahindra">Mahindra</option>
                                                <option value="Toyota">Toyota</option>
                                                <option value="Maruti">Maruti</option>
                                                <option value="Hyundai">Hyundai</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Model</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Model ---</option>
                                                <option value="Ford Mustang">Mustang </option>
                                                <option value="Volvo XC90 Inscription">Volvo XC90 Inscription</option>
                                                <option value="BMW X6 M">BMW X6 M</option>
                                                <option value="Aston Martin DB5">Aston Martin DB5</option>
                                                <option value="Chevrolet Camaro">Chevrolet Camaro</option>
                                                <option value="Honda City i VTEC SV">Honda City i VTEC SV</option>
                                                <option value="Volkswagen Jetta">Volkswagen Jetta</option>
                                                <option value="Tata Aria Pure 4x2">Tata Aria Pure 4x2</option>.
                                                <option value="Skoda Octavia Ambition 1.4 TSI MT">Skoda Octavia Ambition 1.4 TSI MT</option>
                                                <option value="Audi A4 35 TDI Premium">Audi A4 35 TDI Premium</option>
                                                <option value="Renault Fluence E4 D">Renault Fluence E4 D</option>
                                                <option value="Nissan Micra AT">Nissan Micra AT</option>
                                                <option value="Mahindra Scorpio S10 AT 2WD">Mahindra Scorpio S10 AT 2WD</option>
                                                <option value="Toyota Etios G">Toyota Etios G</option>
                                                <option value="Maruti Swift ZXI">Maruti Swift ZXI</option>
                                                <option value="Hyundai I20">Hyundai I20</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Variant</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Variant ---</option>
                                                <option value="Sedan">Sedan</option>
                                                <option value="Hatchback">Hatchback</option>
                                                <option value="SUV">SUV</option>
                                                <option value="Minivan">Minivan</option>
                                                <option value="Pickup">Pickup</option>
                                                <option value="Coupe Car">Coupe Car</option>
                                                <option value="Convertible">Convertible</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Color</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select an Color ---</option>
                                                <option value="Gray">Gray</option>
                                                <option value="White">White</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Green">Green</option>
                                                <option value="Black">Black</option>
                                                <option value="Pink">Pink</option>
                                                <option value="Red">Red</option>
                                                <option value="Yellow">Yellow</option>
                                                <option value="More Colors">More Colors</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Alternate Fuel</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select One ---</option>
                                                <option value="Petrol">Petrol</option>
                                                <option value="Diesal">Diesal</option>
                                                <option value="CNG">CNG</option>
                                                <option value="Electric">Electric</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Kilometers Driven</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option value="50,000 km">50,000 km</option>
                                                <option value="20,000 km">20,000 km</option>
                                                <option value="15,000 km">15,000 km</option>
                                                <option value="60,000 km">60,000 km</option>
                                                <option value="70,000 km">70,000 km</option>
                                                <option value="30,000 km">30,000 km</option>
                                                <option value="80,000 km">80,000 km</option>
                                                <option value="90,000 km">90,000 km</option>
                                                <option value="100,000 km">100,000 km</option>
                                            </select>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Owner</label>
                                        <div class="form-group">
                                            <select class="form-control rounded">
                                                <option>--- Select One ---</option>
                                                <option value="first owner">First Owner</option>
                                                <option value="second owner">Second Owner</option>
                                                <option value="third owner">Third Owner</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <label class="c-dark">Price Expectation</label>
                                        <div class="form-group position-relative">
                                            <select class="form-control rounded pl-4">
                                                <option value="12,50,000">e.g. 12,50,000</option>
                                                <option value="11,00,000">e.g. 11,00,000</option>
                                                <option value="10,00,000">e.g. 10,00,000</option>
                                                <option value="9,50,000">e.g. 9,00,000</option>
                                                <option value="7,00,000">e.g. 7,00,000</option>
                                                <option value="5,00,000">e.g. 5,00,000</option>
                                            </select>
                                            <small>Twelve Lakh Fifty Thousand Dollar Only</small>
                                            <div class="price position-absolute c-dark"><i class="fa fa-usd"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class='row'>
                                            <div class='col-12 col-lg-3 col-xl-2 align-self-end'>
                                                <span class="good"><i class="fa fa-usd"></i> 1.25 Lakh <br /> Good Condition</span>
                                            </div>
                                            <div class='col-12 col-lg-6 col-xl-7  mb-3 mb-lg-0'>
                                                <img src="dist/images/condition.png" alt="" class="img-fluid" />
                                            </div>
                                            <div class='col-12 col-lg-3 col-xl-3 align-self-end'>
                                                <span class="superb"><i class="fa fa-usd"></i> 13.50 Lakh <br /> Superb Condition</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4"></div>
                                    <div class="col-12 col-sm-4 col-lg-2 ml-auto mt-3 mt-sm-0">
                                        <a href="sell-car2.html" class="btn btn-primary btn-md btn-block text-uppercase">Next</a>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Post Ad -->
        

        <!-- Footer Bottom -->
        <?php require_once("_inc.footer.php"); ?>
        <!-- End Footer Bottom -->
        
        <!-- jQuery -->
        <script src="dist/js/plugins.min.js"></script>
        <script src="dist/js/common.js"></script>
    </body>
</html>
<?php require_once("_inc.end_mysql.php"); ?>