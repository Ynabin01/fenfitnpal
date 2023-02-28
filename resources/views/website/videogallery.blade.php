<!-- VIDEO GALLAERY -->


<section class="section-content-block  video-gallery">
    <div class="container-fluid no-padding-gallery">
        {{-- @if (isset($videos)) --}}
        <div class="row">
            <div class="no-padding-gallery gallery-carousel owl-carousel" data-items='5' data-dots="false"
            data-autoplaytimeout="3000">
            
            @foreach ($videos as $video)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 gallery-container">
                    <a class="gallery-light-box-custom" href="">
                        <figure class="gallery-video">
                            <video width="100%" height="" controls>
                                <source src="/uploads/main_attachment/{{ $video->main_attachment }}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                            </video>
                        </figure> <!-- end .gallery-video  -->
                        <h5>{{ $video->caption }}</h5>
                    </a>
                </div><!-- end .col-sm-3  -->
                @endforeach
            </div>
        </div> <!-- end .row  -->
        {{-- @endisset --}}
    </div><!-- end .container-fluid  -->
</section> <!-- end .section-content-block  -->
<!-- VIDEO GALLAERY -->