
@if (isset($sliders))
        <div class="slider-wrap">
            <div id="slider_1" class="owl-carousel" data-nav="false" data-dots="true" data-autoplay="true" data-autoplaytimeout="50000">
                @foreach ($sliders as $slider)
                <div class="slider_item_container" data-bg_img="{{ $slider->banner_image }}" data-bg_color="#111111" data-bg_opacity="0.25">
                    <div class="item">
                        <div class="slider-content">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">
                                        <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">
                                            <h2 class="text-medium">
                                                {{ $slider->caption }}
                                            </h2>
                                        </div>
                                    </div> <!-- end .col-sm-12  -->
                                </div> <!-- end .row  -->
                            </div><!-- end .container -->
                        </div> <!--  end .slider-content -->
                    </div> <!-- end .item  -->
                </div> <!-- end .slider_item_container  -->
                @endforeach
            </div> <!-- end .slider_1  -->
        </div> <!-- end .slider-wrap.  -->
@endif