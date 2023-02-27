@extends('layouts.master')

@section('content')
    <!--  PAGE HEADING -->
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
         
                    <p class="page-breadcrumb">
                        {{ $noticepage->caption ?? '' }}
                        <br><br> 
                        <a href="/">Home</a>  
                        {{-- / <a href="/project">Our Project</a>  --}}
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->
    <section class="section-content-block">
        <div class="container">
            @if (isset($noticepage))
            <div class="row">
                <div class="article-event clearfix">
     
                            <div class="col-sm-12">
                                <article class="post single-post-inner">
                                    <div class="post-inner-featured-content">
                                        <img alt="" src="{{ $noticepage->banner_image ?? '' }}">
                                    </div>
                                    {{-- <div class="single-post-inner-title">
                                        <h2>{{ $noticepage->caption ?? '' }}</h2>
                                    </div> --}}
                                    <div class="single-post-inner-content">
                                        <p>
                                            {!! htmlspecialchars_decode($noticepage->long_content ?? '') !!}
                                        </p>
                                    </div>
                                </article> <!--  end single-post-container -->
                            </div> <!--  end .single-post-container -->
                 
                        </div>
                    </div> <!--  end .row  -->
                </div> <!--  end container -->
                @endif
    </section> <!-- end .section-content-block  -->
    <!-- START FOOTER  -->
@endsection
