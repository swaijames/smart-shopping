<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords"
        content="SmartShopping, bootstrap-5, bootstrap, sass, css, HTML Template, HTML,html, bootstrap template, free template, figma, web design, web development,front end, bootstrap datepicker, bootstrap timepicker, javascript, ecommerce template">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./assets/images/core/icon.png">

    <!--title  -->
    <title>SmartShopping | Create-Account</title>


    <!--------------- swiper-css ---------------->
    <link rel="stylesheet" href="./css/swiper10-bundle.min.css">

    <!--------------- bootstrap-css ---------------->
    <link rel="stylesheet" href="./css/bootstrap-5.3.2.min.css">

    <!---------------------- Range Slider ------------------->
    <link rel="stylesheet" href="css/nouislider.min.css">

    <!---------------------- Scroll ------------------->
    <link rel="stylesheet" href="css/aos-3.0.0.css">

    <!--------------- additional-css ---------------->
    <link rel="stylesheet" href="./css/style.css">



</head>

<body>

    <!--------------- header-section --------------->
    <?php
         include "header.php";
    ?>
    <!--------------- header-section-end --------------->

    <!--------------- login-section--------------->
    <section class="login account footer-padding">
        <div class="container">
            <div class="login-section account-section">
                <div class="review-form">
                    <h5 class="comment-title">Create Account</h5>
                    <div class=" account-inner-form">
                        <div class="review-form-name">
                            <label for="fname" class="form-label">First Name*</label>
                            <input type="text" id="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="review-form-name">
                            <label for="lname" class="form-label">Last Name*</label>
                            <input type="text" id="lname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class=" account-inner-form">
                        <div class="review-form-name">
                            <label for="email" class="form-label">Email*</label>
                            <input type="email" id="email" class="form-control" placeholder="user@gmail.com">
                        </div>
                        <div class="review-form-name">
                            <label for="phone" class="form-label">Phone*</label>
                            <input type="tel" id="phone" class="form-control" placeholder="+255766000000">
                        </div>
                    </div>
                    <div class="review-form-name">
                        <label for="country" class="form-label">Country*</label>
                        <select id="country" class="form-select">
                            <option>Choose...</option>
                            <option>Bangladesh</option>
                            <option>United States</option>
                            <option selected>Tanzania</option>
                        </select>
                    </div>
                    <div class="review-form-name address-form">
                        <label for="address" class="form-label">Address*</label>
                        <input type="text" id="address" class="form-control" placeholder="Enter your Address">
                    </div>
                    <div class=" account-inner-form city-inner-form">
                        <div class="review-form-name">
                            <label for="city" class="form-label">Town / City*</label>
                            <select id="city" class="form-select">
                                <option>Choose...</option>
                                <option>Newyork</option>
                                <option>Dhaka</option>
                                <option selected>London</option>
                            </select>
                        </div>
                        <div class="review-form-name">
                            <label for="number" class="form-label">Postcode / ZIP*</label>
                            <input type="number" id="number" class="form-control" placeholder="0000">
                        </div>
                    </div>


                    <div class="review-form-name checkbox">
                        <div class="checkbox-item">
                            <input type="checkbox">
                            <p class="remember">
                                I agree all terms and condition in <span class="inner-text">SmartSgopping.</span></p>
                        </div>
                    </div>
                    <div class="login-btn text-center">
                        <a href="#" class="shop-btn">Create an Account</a>
                        <span class="shop-account">Already have an account ?<a href="login.html">Log In</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------- login-section-end --------------->

    <!--------------- footer-section--------------->
    <?php
         include "footer.php";
    ?>
    <!--------------- footer-section-end--------------->






    <!--------------- jQuery ---------------->
    <script src="assets/js/jquery_3.7.1.min.js"></script>

    <!--------------- bootstrap-js ---------------->
    <script src="assets/js/bootstrap_5.3.2.bundle.min.js"></script>

    <!--------------- Range-Slider-js ---------------->
    <script src="assets/js/nouislider.min.js"></script>

    <!--------------- scroll-Animation-js ---------------->
    <script src="assets/js/aos-3.0.0.js"></script>

    <!--------------- swiper-js ---------------->
    <script src="assets/js/swiper10-bundle.min.js"></script>

    <!--------------- additional-js ---------------->
    <script src="assets/js/core.js"></script>


</body>

</html>