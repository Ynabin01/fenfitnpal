<section class="section-content-block">

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="row section-heading-wrapper">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h2>{{ $about->caption ?? '' }}</h2>

                    </div> <!-- end .col-sm-10  -->

                </div>

                <div class="about-details">

                    <p>{!! htmlspecialchars_decode($about->short_content ?? '') !!}</p>
                    <a href="/aboutus/about-one" class="btn btn-theme btn-capitalize margin-top-12 margin-bottom-12">Read
                        More</a>
                </div> <!--  end .about-details -->

            </div> <!--  end col-lg-6  -->

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
 
                <figure class="about-img theme-custom-box-shadow">
                    <img src="{{$about->banner_image ?? ''}}" alt="about" />
                </figure> <!-- end .cause-img  -->

            </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 hidden-xs hidden">

                <figure class="theme-custom-box-shadow">
                    <img src="{{$about->banner_image ?? ''}}" alt="achievements" class="db" />
                </figure>

            </div> <!--  end .col-lg-6 -->

        </div> <!--  end .row  -->

    </div> <!--  end .container -->

</section> <!--  end .about-us-section  -->
