@extends('layouts.master')

@section('content')
    <!--  PAGE HEADING -->
    @if (isset($noticedown))
                       
    <section class="page-header" data-stellar-background-ratio="1.2">
            
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        {{ $downone->caption ?? '' }}
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="/">Home</a>
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->
    <section class="section-content-block">
        <div class="container">
            <div class="row">
                <iframe src="/uploads/main_attachment/{{$noticedown->main_attachment}}" width="100%" height="900px">
                </iframe>
            </div> <!--  end .row  -->
        </div> <!--  end container -->
    </section> <!-- end .section-content-block  -->
    <!-- START FOOTER  -->
    @endif
@endsection
