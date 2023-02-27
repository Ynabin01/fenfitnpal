<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FenFIT - Federation of Forest Based Industry and Trade, Nepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="FenFIT - Federation of Forest Based Industry and Trade, Nepal">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="/uploads/icons/{{ $global_setting->favicon }}" />

    <!-- The styles -->
    <link rel="stylesheet" href="/website/css/bootstrap.min.css">

    <link rel="stylesheet" href="/website/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    <link href="/website/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/website/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/website/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/website/css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/website/css/styles.css" />

<body>
    <div id="preloader">
        <span class="margin-bottom"><img src="/website/images/loader.gif" alt="" /></span>
    </div>
    <!--  HEADER -->
    <header class="main-header clearfix">
        <div class="top-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 hidden-xs hidden-sm">
                        <p>
                            <span><i class="fa fa-phone-square text-primary-color"></i>
                                {{-- <a href="tel:015147074">{{ $global_setting->phone }}</a> / --}}
                                <a href="tel:015147152">{{ $global_setting->phone }}</a></span>
                            <span>&nbsp;<i class="fa fa-paper-plane text-primary-color"></i> <a href="mailto:fenfitnepal@gmail.com">{{ $global_setting->site_email }}</a></span>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">
                        <div class="language-selector">
                            <div id="google_element"></div>
                            <script src="//translate.google.com/translate_a/element.js?cb=loadGoogleTranslate&tl=en"></script>
                            <script>
                                function loadGoogleTranslate() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                        , includedLanguages: 'en,ne'
                                        , layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                                    , }, 'google_element');
                                }
                                // $("#google_translate_element").on("click", function () {
                                //     var languages = $("iframe").contents().find(".text").get();
                                //     console.log(languages);
                                // });

                            </script>
                            <style>
                                #google_element span {
                                    display: none;
                                }

                                .skiptranslate {
                                    font-size: 0;
                                }

                                .skiptranslate div {
                                    font-size: 16px;
                                }

                                .goog-te-combo {
                                    padding: 6px;
                                }

                            </style>
                        </div>
                        <div class="top-bar-social hidden-xs hidden-sm">
                            <a href="{{ $global_setting->facebook ?? '' }}" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $global_setting->twitter ?? '' }}" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="{{ $global_setting->linkedin ?? '' }}" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="{{ $global_setting->other ?? '' }}" target="_blank"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <a href="http://app.fenfitnepal.com/login?next=/" class="free-estimate" target="_blank">Application Form</a>
                    </div>
                </div>
            </div> <!--  end .container -->
        </div> <!--  end .top-bar  -->
        <section class="header-wrapper navgiation-wrapper">

            <div class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="index.html"><img alt="" src="/uploads/icons/{{ $global_setting->site_logo }}"></a>
                </div>
                <div class="container">
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            {{-- <li class="active"><a href="/">Home</a>
                            </li> --}}
                            @foreach ($menus as $menu)
                            <li>
                                <a href="#">{{ $menu->caption }}</a>
                                <ul class="drop-down">
                                    @foreach ($menu->childs as $submenu)
                                    <li>
                                        <a href="/{{ $menu->nav_name }}/{{ $submenu->nav_name }}">{{ $submenu->caption }}</a>
                                        <!-- sub-drop-down -->
                                        @if (preg_match('/_submenu/i', $menu->nav_name))
                                        <ul class="drop-down   sub-drop-down">
                                            @foreach ($submenu->childs as $subsubmenu)
                                            @if ($subsubmenu->page_type == "Team")
                                            @continue
                                            @endif
                                            <li>
                                                <a href="/{{ $submenu->nav_name }}/{{ $subsubmenu->nav_name }}?group=sub">{{ $subsubmenu->caption }}</a>
                                                <!-- sub-drop-down -->
                                                <ul class="drop-down sub-drop-down">
                                                    @foreach ($subsubmenu->childs as $subsubsubmenu)
                                                    @if ($subsubsubmenu->page_type == "Team")
                                                    @continue
                                                    @endif
                                                    <li><a href="/{{ $submenu->nav_name }}/{{ $subsubsubmenu->nav_name }}?group=sub">{{ $subsubsubmenu->caption }}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <!-- sub-drop-down -->
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                        <!-- sub-drop-down -->
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach

                            <li><a href="/newsevents">News and Events</a></li>
                            <li><a href="/project">Project</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                        </ul>
                        {{-- <ul class="nav navbar-nav">

                            <li>
                                <a href="/">Home</a>
                            </li>

                            <li>
                                <a href="#">About Us</a>
                                <ul class="drop-down">
                                    <li><a href="normal">About Fenfit</a></li>
                                    <li><a href="normal">Our History</a></li>
                                    <li><a href="normal">Mission / Vision</a></li>
                                    <li><a href="normal">Message From Chairman</a></li>
                                    <li><a href="team">Our Staff</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">FenFIT-Committee</a>
                                <ul class="drop-down">
                                    <li><a href="team">Executive Committee</a></li>
                                    <li><a href="team">Advisory Committee</a></li>
                                    <li><a href="team">Organizational Development Committee</a></li>
                                    <li><a href="team">Judiciary and Discipline Committee</a></li>
                                    <li><a href="team">Disaster Management Committee</a></li>
                                    <li><a href="team">Foreign Coordination Committee</a></li>
                                    <li><a href="team">Account and Monitoring Committee</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Province Executive Committee</a>
                                <ul class="drop-down">
                                    <li><a href="team">Province No.1</a></li>
                                    <li><a href="team">Madesh Province</a></li>
                                    <li><a href="team">Bagmati Province</a></li>
                                    <li><a href="team">Gandaki Province</a></li>
                                    <li><a href="team">Lumbini Province</a></li>
                                    <li><a href="team">Karnali Province</a></li>
                                    <li><a href="team">Sudurpashchim Province</a></li>
                                    <li><a href="team">Valley Special Zone Committee</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Members</a>
                                <ul class="drop-down">
                                    <li><a href="team">District Members</a></li>
                                    <li><a href="team">Commodity Members</a></li>
                                    <li><a href="team">Associate Members</a></li>
                                </ul>
                            </li>
                            <li><a href="eventlist">News & Events</a></li>
                            <li><a href="projectlist">Project</a></li>
                            <li><a href="contact">Contact Us</a></li>
                        </ul> --}}
                    </div>
                </div>
            </div>

        </section>

    </header> <!-- end main-header  -->

    @yield('content')

    <!--  HOME SLIDER BLOCK  -->

    <!--  ABOUT US SECTION   -->

    <!--  NOTICE BOARD FAQ -->

    <!--  EVENTS SECTION  -->

    <!--  SECTION GALLERY  -->

    {{-- videogallery --}}

    <!-- Project SECTION  -->

    <!--  START LOGO LAYOUT -->

    <!-- START FOOTER  -->

    <footer>

        <section class="section-content-block footer-widget-area-bg section-custom-bg" data-bg_img="/website/img/footer_bg.jpg" data-bg_opacity="0.5">

            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-widget-area footer-about">

                            <div class="row">

                                <div class="footer-widget-area">

                                    <div class="col-md-5">
                                        <div class="footer-logo">
                                            <img src="/uploads/icons/{{ $global_setting->site_logo }}" alt="Logo">
                                        </div>
                                    </div>

                                    <div class="col-md-7">
                                        <div class="contact-info footer-content">
                                            <p class="text-light-color">{{ $global_setting->page_description }}
                                            </p>
                                        </div>
                                    </div>

                                </div> <!-- end .footer-widget-area  -->

                            </div> <!--  end .row  -->

                        </div>

                    </div>

                </div>

                <!-- FOOTER WIDGET AREA -->

                <div class="row">


                    <div class="col-md-6 col-sm-6 col-xs-12">

                        <div class="footer-widget-area">

                            <h3>FenFIT-Nepal Info</h3>

                            <div class="contact-info divider-line">

                                <div class="contact-heading">Address : </div>

                                <div class="contact-details">
                                    {{ $global_setting->website_full_address }}
                                </div>

                            </div>

                            <div class="contact-info divider-line">

                                <div class="contact-heading">Phone : </div>
                                <div class="contact-details">
                                    <a href="tel:015147074">{{ $global_setting->phone }}</a>
                                    {{-- <a href="tel:015147152">01-5147152</a> --}}
                                </div>

                            </div>

                            <div class="contact-info">

                                <div class="contact-heading">Email : </div>

                                <div class="contact-details">
                                    <a href="mailto:fenfitnepal@gmail.com">{{ $global_setting->site_email }}</a>
                                </div>

                            </div>

                        </div> <!-- end .footer-widget-area  -->

                    </div> <!-- end .col-md-4  -->

                    <div class="col-md-6 col-sm-6 col-xs-12">

                        <div class="footer-widget-area newsletter-footer">

                            <div class="row">

                                <div class="col-sm-12">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56533.729573862714!2d85.339708!3d27.675325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdc1e615d716fcaf!2sFederation%20Of%20Forest%20based%20Industry%20and%20Trade%2C%20Nepal!5e0!3m2!1sen!2snp!4v1670152029478!5m2!1sen!2snp" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div> <!-- row  -->

                        </div> <!-- end .footer-widget-area  -->

                    </div> <!-- end .col-md-6  -->

                </div> <!-- end .row  -->

            </div> <!-- end .container  -->

        </section> <!--  end .footer-widget-area-bg -->

        <!--FOOTER NAVIGATION  -->

        <section class="footer-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">

                        <span class="copyright-text">Copyright ©
                            <script>
                                document.write(new Date().getFullYear())

                            </script> FenFIT-Nepal All Rights Reserved. Developed By <a href="http://radiantnepal.com/" target="_blank">Radiant Infotech Nepal</a>
                        </span>

                    </div> <!-- end .col-md-6  -->

                </div> <!-- end .row  -->
            </div> <!-- end .container  -->
        </section> <!--  end .footer-area -->

    </footer>

    <!--  END OF FOOTER -->

    <!-- Back To Top Button  -->

    <a id="backTop">Back To Top</a>
    <script src="/website/js/jquery.min.js"></script>
    <script src="/website/js/bootstrap-select.min.js"></script>
    <script src="/website/js/bootstrap.min.js"></script>
    <script src="/website/js/wow.min.js"></script>
    <script src="/website/js/jquery.backTop.min.js "></script>
    <script src="/website/js/waypoints.min.js"></script>
    <script src="/website/js/waypoints-sticky.min.js"></script>
    <script src="/website/js/owl.carousel.min.js"></script>
    <script src="/website/js/jquery.stellar.min.js"></script>
    <script src="/website/js/jquery.counterup.min.js"></script>
    <script src="/website/js/venobox.min.js"></script>
    <script src="/website/js/jquery.countdown.min.js"></script>
    <script src="/website/js/custom-scripts.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.selectpicker').selectpicker();
        });

    </script>
</body>

</html>
