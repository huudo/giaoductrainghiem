
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title>Giáo dục trải nghiệm</title>
    <meta name="description" content="nicdark Framework"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <!--START CSS--> 
    <link rel="stylesheet" href="{{asset('public/css/nicdark_style.css')}}"> <!--style-->
    <link rel="stylesheet" href="{{asset('public/css/nicdark_responsive.css')}}"> <!--nicdark_responsive-->

    <!--revslider-->
    <link rel="stylesheet" href="{{asset('public/css/revslider/settings.css')}}"> <!--revslider-->

    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->
    @yield('css-area')
    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="{{asset('public/img/favicon/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('public/img/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <!--END FAVICONS-->
</head>  
<body id="start_nicdark_framework"> 
    <style type="text/css">
        .nicdark_preloader_center{
            position: relative;
            top: 250px;
        }
        .nicdark_preloader img{
            position: relative;
            top: 50%;
            width: 100px;
            -webkit-animation:spin 3s linear infinite;
            -moz-animation:spin 3s linear infinite;
            animation:spin 3s linear infinite;
        }
        @-moz-keyframes spin { 100% { -moz-transform: rotateY(360deg); } }
        @-webkit-keyframes spin { 100% { -webkit-transform: rotateY(360deg); } }
        @keyframes spin { 100% { -webkit-transform: rotateY(360deg); transform:rotateY(360deg); } }
    </style>
    <!--start preloader-->
    <div class="nicdark_preloader">
        <!-- <i class="icon-cog green"></i> -->
        <div class="nicdark_preloader_center">
            <img src="public/img/icon-preload.png">
        </div>
        
    </div>
    <!--end preloader-->

    <div class="nicdark_site">
        <div class="nicdark_site_fullwidth nicdark_site_fullwidth_boxed nicdark_clearfix">

        @include('layouts.header')            
        @yield('content')
        @include('layouts.footer')
        </div>
    </div>

    <!--main-->
    <script src="{{asset('public/js/main/jquery.min.js')}}"></script> <!--Jquery-->
    <script src="{{asset('public/js/main/jquery-ui.js')}}"></script> <!--Jquery UI-->
    <script src="{{asset('public/js/main/excanvas.js')}}"></script> <!--canvas need for ie-->

    <!--plugins-->
    <script src="{{asset('public/js/plugins/revslider/jquery.themepunch.tools.min.js')}}"></script> <!--revslider-->
    <script src="{{asset('public/js/plugins/revslider/jquery.themepunch.revolution.min.js')}}"></script> <!--revslider-->

    <!--menu-->
    <script src="{{asset('public/js/plugins/menu/superfish.min.js')}}"></script> <!--superfish-->
    <script src="{{asset('public/js/plugins/menu/tinynav.min.js')}}"></script> <!--tinynav-->

    <!--other-->
    <script src="{{asset('public/js/plugins/isotope/isotope.pkgd.min.js')}}"></script> <!--isotope-->
    <script src="{{asset('public/js/plugins/mpopup/jquery.magnific-popup.min.js')}}"></script> <!--mpopup-->
    <script src="{{asset('public/js/plugins/scroolto/scroolto.js')}}"></script> <!--Scrool To-->
    <script src="{{asset('public/js/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script> <!--Nice Scroll-->
    <script src="{{asset('public/js/plugins/inview/jquery.inview.min.js')}}"></script> <!--inview-->
    <script src="{{asset('public/js/plugins/parallax/jquery.parallax-1.1.3.js')}}"></script> <!--parallax-->
    <script src="{{asset('public/js/plugins/countto/jquery.countTo.js')}}"></script> <!--jquery.countTo-->
    <script src="{{asset('public/js/plugins/countdown/jquery.countdown.js')}}"></script> <!--countdown-->
    
    
    <!--forms-->
    <script src="{{asset('public/js/plugins/forms/nicdark_form_contact.js')}}"></script>
    <script src="{{asset('public/js/plugins/forms/nicdark_form_footer.js')}}"></script>
    <script src="{{asset('public/js/plugins/forms/nicdark_form_newsletter.js')}}"></script>
    <script src="{{asset('public/js/plugins/forms/nicdark_form_booking.js')}}"></script>

    <!--settings-->
    <script src="{{asset('public/js/settings.js')}}"></script> <!--settings-->
    <script src="{{asset('public/js/cost-calculator.js')}}"></script> <!--settings-->
    
    <!--start preloader-->
    <script type="text/javascript">

        jQuery(window).load(function() {
            jQuery(".nicdark_preloader").delay(1000).fadeOut("slow");
            //START PARALLAX SECTIONS
            $('#nicdark_parallax_booking').parallax("50%", 0.3);
            $('#nicdark_parallaxx_img2').parallax("50%", 0.3);
            $('#nicdark_parallax_2_btns').parallax("50%", 0.3);
            $('#nicdark_parallax_countdown').parallax("50%", 0.3);
            $('#nicdark_parallax_counter').parallax("50%", 0.3);
            //END PARALLAX SECTIONS
            
        })

    </script>
		
		<!--custom js for each page-->
 		@yield('custom-js-page')
</body>
