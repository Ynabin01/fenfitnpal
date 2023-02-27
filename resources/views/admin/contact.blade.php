{{-- 

@extends('layouts.master')
@section('content')
    <!-- Breadcrumb area Start -->
    <section class="page-title-area bg-image ptb--80" data-bg-image="/website/images/page-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="page-title">Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="current"><span>Contact Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->


    <main class="main-content-wrapper">
        <div class="inner-page-content">
            <!-- Contact Area Start -->
            <section class="contact-area ptb--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-5 mb-md--50">
                            <div class="heading mb--42">
                                <h2>Get In Touch</h2>
                                <hr class="delimeter">
                            </div>
                            <div class="contact-info mb--30">
                                <p><i class="fa fa-map-marker"></i>{{ $global_setting->website_full_address }} </p>
                                <p><i class="fa fa-phone"></i> <a
                                        href="tel:{{ $global_setting->phone }}">{{ $global_setting->phone }}</a>, <a
                                        href="tel:{{ $global_setting->phone_ne }}">{{ $global_setting->phone_ne }}</a></p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->site_email }}">{{ $global_setting->site_email }}</a>
                                </p>
                                <p><i class="fa fa-envelope"></i> <a
                                        href="mailto:{{ $global_setting->page_description }}">{{ $global_setting->page_description }}</a>
                                </p>
                            </div>
                            <ul class="social social-outline">
                                <li class="social__item">
                                    <a href="{{ $global_setting->facebook ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->extra_one ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->twitter ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="{{ $global_setting->linkedin ?? '' }}" class="social__link" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 offset-lg-1">
                            <div class="heading mb--42">
                                <h2>Contact Us</h2>
                                <hr class="delimeter">
                            </div>
                            <form action="{{ route('contactstore') }}" class="form" method="post" id="contact-form"
                                enctype='multipart/form-data'>
                                @csrf
                                <input type="email" name="email" id="email" class="form__input mb--30"
                                    placeholder="Email*">
                                <input type="text" name="first_name" id="first_name" class="form__input mb--30"
                                    placeholder="Name*">
                                <textarea class="form__input form__input--textarea mb--30" placeholder="Message" id="con_message" name="message"></textarea>
                                <button type="submit" class="btn btn-shape-round form__submit">Send Request</button>
                                <div class="form__output"></div>

                                @if (Session::has('contact'))
                                    <p class="alert alert-info">{{ Session::get('contact') }}</p>
                                @endif

                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact Area End -->

            <!-- Google Map Area Start -->
            <!-- Google Map -->
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.845659969248!2d85.31929851541567!3d27.722051231451736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1919f7dd0685%3A0xc59baa0caae9c83d!2sLazimpat%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1670754752618!5m2!1sen!2snp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            <!-- Google Map Area End -->
        </div>
       
    </main>
@endsection --}}


@extends('layouts.master')

@section('content')
    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Contact Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="/">Home</a> / Contact
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-md-12">
                    <h2 class="contact-title">Contact us</h2>
                </div>

                <div class="col-md-4">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-home"></i></span>
                            <address> {{ $global_setting->website_full_address }}</address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-4">

                    <ul class="contact-info">

                        <li>
                            <span class="icon-container"><i class="fa fa-phone"></i></span>
                            <address><a href="tel:015147074">{{ $global_setting->phone }}</a>
                                {{-- <a href="tel:015147152">01-5147152</a></address> --}}
                        </li>

                    </ul>

                </div>

                <div class="col-md-4">
                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-envelope"></i></span>
                            <address><a href="mailto:fenfitnepal@gmail.com">{{ $global_setting->site_email }}</a></address>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 wow fadeInLeft">

                    <div class="contact-form-block">

                        <h2 class="contact-title">Get In Touch</h2> 

                        <form role="form" action="{{ route('contactstore') }}" method="post" id="contact-form"
                            enctype='multipart/form-data'>
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="first_name"
                                    placeholder="Name" data-msg="Please Write Your Name" />
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="email"
                                    placeholder="Email" data-msg="Please Write Your Valid Email" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_subject" name="number"
                                    placeholder="Phone" data-msg="Please Write Your Message Subject" />
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" id="email_message" placeholder="Please Write Your Message"
                                    data-msg="Please Write Your Message"></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-theme" value="Send Now" />
                            </div>
                            
                        </form>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

                <div class="col-sm-6 wow fadeInRight">

                    <h2 class="contact-title">Our Location</h2>


                    <div class="section-google-map-block wow fadeInUp">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28266.864786931357!2d85.339708!3d27.675325!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcdc1e615d716fcaf!2sFederation%20Of%20Forest%20based%20Industry%20and%20Trade%2C%20Nepal!5e0!3m2!1sen!2snp!4v1670310975726!5m2!1sen!2snp"
                            width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div> <!-- end .section-content-block  -->

                </div> <!--  end col-sm-6  -->

            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->
@endsection
