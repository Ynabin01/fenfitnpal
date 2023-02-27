@extends('layouts.master')

@section('content')
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Our Project
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="/">Home</a> / Our Project
                    </p>
                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->
    <section class="main-content">
        <div class="container wow fadeInUp">
            <div class="row">
                @if (isset($projectlist)) 
                    @foreach ($projectlist as $project)
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                            <div class="latest-news-container theme-custom-box-shadow theme-custom-box-animation">
                                <a href="/{{ $slug1->nav_name }}/{{ $project->nav_name }}">
                                    <figure>
                                        <img src="{{ $project->banner_image ?? '' }}" alt="latest news">
                                    </figure>
                                </a>
                                <div class="news-content">
                                    <div class="news-meta-info">
                                        <i class="fa fa-clock-o"></i> {{ $project->date ?? '' }}
                                        &nbsp;
                                    </div>
                                    <h3>
                                        <a href="{{ $slug1->nav_name }}/{{ $project->nav_name }}"
                                            class="text-capitalize">{{ $project->caption ?? '' }}</a>
                                    </h3>
                                    <div class="update-details">
                                        {!! htmlspecialchars_decode($project->short_content ?? '') !!} 
                                    </div>
                                </div>
                            </div><!--  end .update-info  -->
                        </div> <!--  end col-lg-4  -->
                    @endforeach
                @endif
            </div> <!-- end row  -->
        </div> <!-- end .container  -->   
    </section> <!-- end .main-content  -->
@endsection
