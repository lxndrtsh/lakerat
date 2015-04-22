<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lake Rat Bar and Grill is a lakeside restaurant located in the Lake of the Ozarks. Open weekdays and Saturdays from 11am to 2am and Sundays until midnight and located off of Bagnell Dam Blvd.">
    <meta name="keywords" content="lake rat bar grill, lake of the ozarks, bar, grill, restaurant, lake side bar, lake side grill">
    <meta name="author" content="lxndrtsh">

    <title>Lake Rat Bar &amp; Grill</title>

    <!-- Retina.js -->
    <!-- WARNING: Retina.js doesn't work if you view the page via file:// -->
    <script src="assets/js/plugins/retina.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animate CSS -->
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Economica%7COld+Standard+TT:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href="assets/fonts/fontawesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Main CSS -->
    <link href="assets/css/foodster.css" rel="stylesheet">

    <!-- For demo purposes only -->
    <link href="assets/css/demo.css" rel="stylesheet">

    <!-- Your custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/plugins/htmlshiv.min.js"></script>
    <script src="assets/js/plugins/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index grill solid-red">

<div class="loading-screen">
    <div class="content animated fadeInDown">
        <i class="fa fa-circle-o-notch fa-spin"></i>
        <h2 class="section-heading">Grilling the page</h2>
        <h3 class="section-subheading">Please wait...</h3>
    </div>
</div>

@yield('main-content')

<!-- Footer Section -->
<footer id="footer">
    <div class="container inner">
        <div class="row">

            <div class="col-md-12 text-center">
                <h2 class="section-heading wow fadeInDown" >Contact Lake Rat</h2>
            </div>

            <div class="col-md-3 col-sm-6 inner">
                <h3 class="section-subheading">Who we are <span>M</span></h3>
                <p>We're a fun loving Bar & Grill dedicated to serving the best drinks and food around.</p>
                {{--<a href="about.html" class="txt-btn">More about us</a>--}}
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 inner">
                <h3 class="section-subheading">Opening Times <span>X</span></h3>
                <p><em>Mon &ndash; Sat</em>&nbsp;&nbsp;<strong>11am &ndash; 2am</strong></p>
                <p><em>Sunday</em>&nbsp;&nbsp;<strong>11am &ndash; Midnight</strong></p>

            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 inner">
                <h3 class="section-subheading">Get in Touch <span>V</span></h3>
                <p>We're always answering the phone during normal business hours.</p>
                <ul class="contacts">
                    <li><i class="icon-location contact"></i> 1104 Bagnell Dam Boulevard, Lake Ozark, Missouri</li>
                    <li><i class="icon-mobile contact"></i> (573) 693-9000</li>
                    <li><a href="#"><i class="icon-mail-1 contact"></i> info@lake-rat.com</a></li>
                </ul><!-- /.contacts -->
            </div><!-- /.col -->

            <div class="col-md-3 col-sm-6 inner">
                <h3 class="section-subheading">Drinking Club <span>x</span></h3>
                <p>Join our mailing list for updates on new events, specials and the occasional offers.</p>
                <div id="mc_embed_signup">
                    <form id="newsletter" class="form-inline newsletter" role="form" action="mailchimp_code_here" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                        <div id="mc_embed_signup_scroll">
                            <input type="email" value="" name="EMAIL" class="required email form-control input-large" id="mce-EMAIL" placeholder="Email address*" required>
                            <div id="mce-responses" class="clear">
                                <div class="response hide" id="mce-error-response"></div>
                                <div class="response hide" id="mce-success-response"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div class="bots"><input type="hidden" name="b_d3e5ba7f28f3f616054cdc3f7_8dd74308df" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-default btn-block btn-submit btn-primary"></div>
                        </div>
                    </form>
                </div><!--End mc_embed_signup-->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- .container -->

    <div class="footer-bottom">
        <div class="container inner">
            <p class="pull-left">&copy; 2015 Lake Rat Bar &amp; Grill. All rights reserved.</p>
            <ul class="footer-menu pull-right">
                <li><a href="/">Home</a></li>
                <li><a href="/#unique">The Grill</a></li>
                <li><a href="/#menus">The Drinks</a></li>
                <li><a href="#">The Food</a></li>
                <li><a href="/#events">The Events</a></li>
            </ul><!-- .footer-menu -->
        </div><!-- .container -->
    </div><!-- .footer-bottom -->
</footer><!-- footer -->
<!-- End Footer Section -->

<div class="scroll-up">
    <a class="page-scroll" href="#header"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- jQuery Version 1.11.0 -->
<script src="assets/js/plugins/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- jQuery Easing -->
<script src="assets/js/plugins/jquery.easing.1.3.min.js"></script>

<!-- WOW plugin (used for animated sections) -->
<script src="assets/js/plugins/wow.min.js"></script>

<!-- jQuery Bootstrap Validation for Booking Form -->
<script src="assets/js/plugins/jqBootstrapValidation.js"></script>

<!-- Google Maps -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<!-- Foodster JavaScript -->
<script src="assets/js/foodster.js"></script>

<!-- Your Custom JavaScript -->
<script src="assets/js/custom.js"></script>

<!-- Only run this JS on this page -->
<script>
    $(document).scroll( function() {
        "use strict";
        // Add and remove the navbar-shrink class for fixed navigation on page scroll
        if ( $(this).scrollTop()>=$('header').position().top ) {
            $('nav').addClass('navbar-shrink');
        }

        if ( $(window).scrollTop() < $('header').height() + 1 ) {
            $('nav').removeClass('navbar-shrink');
        }
    });
</script>

<!-- Placeholders.js provides IE 6-9 support of HTML5 placeholder -->
<!--[if lte IE 9]>
<script src="assets/js/plugins/placeholders.min.js"></script>
<![endif]-->

</body>
</html>