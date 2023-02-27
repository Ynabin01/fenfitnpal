<section class="section-content-block no-padding">

    <div class="container-fluid no-padding-gallery">
        <div class="row">
            @if (isset($gallerysection))
            <div class="no-padding-gallery gallery-carousel owl-carousel" data-items='5' data-dots="false"
                data-autoplaytimeout="3000">
                @foreach ($gallerysection as $gall)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 gallery-container">
                    <a class="gallery-light-box-custom" href="/{{$gall->nav_name}}">
                        <figure class="gallery-img">
                            <img src="{{ $gall->banner_image ?? '' }}" alt="gallery image" />
                        </figure> <!-- end .gallery-img  -->
                        <h5>{{ $gall->caption ?? '' }}</h5>
                    </a>
                </div><!-- end .col-sm-3  -->
                @endforeach
            </div>
            @endif 
        </div> <!-- end .row  -->
 
    </div><!-- end .container-fluid  -->

</section> <!-- end .section-content-block  -->
