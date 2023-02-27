<section class="section-content-block">

    <div class="container wow fadeInUp">

        <div class="row section-heading-wrapper">

            <div class="col-md-12 col-sm-12 text-center no-img-separator">
                <h2>Recent Project</h2>
                <span class="heading-separator heading-separator-horizontal"></span>
            </div> <!-- end .col-sm-10  -->

        </div> <!-- end .row  -->

        <div class="row">
            @if (isset($projectlist))
                @foreach ($projectlist as $project)
                    {{-- @php
                        $projectlistdetail = App\Models\Navigation::query()->where('parent_page_id',$project->id)->where('page_status',1)->first();     
                    @endphp --}}
                        <div class="col-lg-4 col-md-offset-0 col-md-4 col-md-offset-0 col-sm-10 col-sm-offset-1 col-xs-12">
                            <div class="latest-news-container theme-custom-box-shadow theme-custom-box-animation">
                                <a href="/project/{{ $project->nav_name ?? "" }}">
                                    <figure>
                                        <img src="{{ $project->banner_image ?? '' }}" alt="latest news">
                                    </figure>
                                </a>
                                <div class="news-content">
                                    <div class="news-meta-info">
                                        <i class="fa fa-clock-o"></i>{!! htmlspecialchars_decode($project->date ?? '') !!}
                                        &nbsp;
                                    </div>
                                    <h3>
                                        <a href="#" class="text-capitalize">{{ $project->caption ?? '' }}</a>
                                    </h3>
                                    <div class="update-details">{!! htmlspecialchars_decode($project->short_content ?? '') !!}

                                    </div>
                                </div>
                            </div><!--  end .update-info  -->
                        </div> <!--  end col-lg-4  -->
                    @endforeach
            @endif 
        </div> <!-- end row  -->

        <div class="row">
            <div class="col-sm-12 col-md-4 col-md-offset-4 text-center">
                <a href="/project" class="btn btn-theme margin-top-24">- Load More -</a>
            </div>
        </div> <!-- end .row  -->
    </div> <!-- end .container  -->
</section> <!--  end .section-latest-project -->
