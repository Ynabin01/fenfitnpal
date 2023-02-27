<section class="section-content-block">
    <div class="container wow fadeInUp">
        <div class="row">
            @if (isset($eventsection))
                @foreach ($eventsection as $event)
                    <div class="col-md-5 col-sm-12">
                        <div class="row section-heading-wrapper">
                            <div class="col-md-12 col-sm-12 text-left no-img-separator">
                                <h2>{{ $event->caption }}</h2>
                                <p>{{ $event->short_content }}</p>
                                <a href="/newsevents"
                                    class="btn btn-theme btn-capitalize margin-top-12 margin-bottom-12">Check All</a>
                            </div> <!-- end .col-sm-10  -->
                        </div>
                    </div> <!--  end .col-md-4 col-sm-12  -->
                @endforeach
            @endif

            @if (isset($newsevents))
                <div class="col-md-7 col-sm-12">
                    <div class="row">
                        <div class="event-carousel owl-carousel" data-dots="false" data-nav="false" data-items="1"
                            data-autoplaytimeout="100000">
                            @foreach ($newsevents as $newsevent)
                            <div class="col-md-6 col-sm-12">
                               
                                    <div class="event-layout-1 theme-custom-box-shadow clearfix">
                                        <figure class="event-img">
                                            <a href="/newsevents/{{$newsevent->nav_name}}">
                                                <img src="{{ $newsevent->banner_image ?? '' }}" alt="">
                                            </a>
                                        </figure>
                                        <div class="event-info">
                                            <a class="event-date" href="#"><i class="fa fa-calendar-o"></i>
                                                {{ $newsevent->date ?? '' }}</a>
                                            <h4>
                                                <a href="/newsevents/{{$newsevent->nav_name}}">{{ $newsevent->caption ?? '' }}</a>
                                            </h4>
                                            <div class="event-exceprt">
                                                <p>{{ $newsevent->long_content ?? '' }}</p>
                                            </div>
                                            <div class="event-time">
                                                <a href="/newsevents/{{$newsevent->nav_name}}"><i class="fa fa-clock-o"></i>
                                                    {!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}</a>
                                                <a href="#"> <i class="fa fa-map-marker"></i>
                                                    {{ $newsevent->place ?? '' }}</a>
                                            </div>
                                        </div>
                                    </div>
                               
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            @endif
        </div> <!-- end .row  -->

    </div> <!-- end .container  -->
</section> <!-- end .event-section  -->
