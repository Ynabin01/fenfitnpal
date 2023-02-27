@extends('layouts.master')
@section('content')
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        @php echo $normal->caption; @endphp
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="/">Home</a> /  @php echo $normal->caption; @endphp
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->
    <section class="section-content-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <article class="post single-post-inner">
                        <div class="post-inner-featured-content">
                            <img alt="" src="{{ $normal->banner_image }}">
                        </div>
                        <div class="single-post-inner-content">
                            <p> @php echo $normal->long_content; @endphp </p>
                        </div>
                    </article> <!--  end single-post-container -->
                </div> <!--  end .single-post-container -->

                <div class="col-md-4 col-sm-12">
                    <div class="widget site-sidebar">
                        <h2 class="widget-title">Notice and Announcements</h2>
                        @if (isset($noticeboard))
                            @foreach ($noticeboard as $notice)
                                <ul class="widget-post-category clearfix">
                                    <li>
                                        <a title="View all posts filed under Environment"
                                            href="#">{{ $notice->caption }}</a>
                                    </li>
                                </ul>
                            @endforeach
                        @endif
                    </div> <!--  end .widget -->

                    <div class="widget site-sidebar">
                        <h2 class="widget-title">Recent News & Events</h2>
                        @php
                            $newsevents_id = App\Models\Navigation::query()->where('nav_category','Main')->where('nav_name', 'LIKE', "%newsevents%")->where('page_type','Group')->latest()->first()->id;
                            $newsevents = App\Models\Navigation::query()->where('parent_page_id',$newsevents_id)->latest()->limit(4)->get();
                        @endphp     
                        @if (isset($newsevents))
                            @foreach ($newsevents as $notice)
                                <div class="single-recent-post">
                                    <a href="#">{{ $notice->caption }}</a>
                                    <span><i class="fa fa-calendar icon-color"></i>&nbsp; {{ $notice->date }}</span>
                                </div>
                            @endforeach
                        @endif
                    </div> <!--  end .widget -->
                </div> <!-- end .col-sm-4  -->
            </div> <!--  end row  -->
        </div> <!--  end container -->

    </section> <!-- end .section-content-block  -->
    <!-- START FOOTER  -->
@endsection
