@extends('layouts.master')
@section('content')
    <!--  PAGE HEADING -->
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        News & Events
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="/">Home</a> / News & Events
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->
    <!--  MAIN CONTENT  -->
    <!--  SECTION CAMPAIGNS   -->
    <section class="section-content-block">
        <div class="container"> 
            <div class="row">
                @foreach ($newsevents as $newsevent)
                    <div class="col-md-6 col-sm-12 margin-bottom-24">
                        <div class="event-layout-1 theme-custom-box-shadow clearfix"> 
                            <figure class="event-img">
                                <a href="/{{$slug1->nav_name}}/{{$newsevent->nav_name}}">
                                    <img src="{{ $newsevent->banner_image ?? '' }}" alt="">
                                </a>
                            </figure>
                            <div class="event-info">
                                <a class="event-date" href="/{{$slug1->nav_name}}/{{$newsevent->nav_name}}"><i class="fa fa-calendar-o"></i> {{ $newsevent->date ?? '' }}</a> 
                                <h4>
                                    <a href="/{{$slug1->nav_name}}/{{$newsevent->nav_name}}">{{ $newsevent->caption ?? '' }}</a>
                                </h4>
                                <div class="event-exceprt">{!! htmlspecialchars_decode($newsevent->long_content ?? '') !!}</div>
                                <div class="event-time">
                                    <a href="/{{$slug1->nav_name}}/{{$newsevent->nav_name}}"><i class="fa fa-clock-o"></i>{!! htmlspecialchars_decode($newsevent->short_content ?? '') !!}</a>
                                    <a href="/{{$slug1->nav_name}}/{{$newsevent->nav_name}}"> <i class="fa fa-map-marker"></i>{{ $newsevent->place ?? '' }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> <!--  end .container  -->
    </section>
@endsection
