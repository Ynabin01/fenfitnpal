@extends('layouts.master')

@section('content')
    <!--  PAGE HEADING -->
    <section class="page-header" data-stellar-background-ratio="1.2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Blood Donation
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="/">Home</a> / Blood Donation
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div><!-- end .container  -->
    </section> <!-- end .page-header  -->
    <!--  GALLERY CONTENT  -->
    <section class="section-content-block section-secondary-bg">
        <div class="container wow fadeInUp">
            <div class="row no-padding-gallery">
                @foreach ($photos as $photo)
                    <div class="col-md-3 col-sm-12 gallery-container">
                        <a class="gallery-light-box" data-gall="myGallery"
                            href="/uploads/photo_gallery/{{$photo->file}}">
                            <figure class="gallery-img">
                                <img src="/uploads/photo_gallery/{{$photo->file}}" alt="gallery image"/>
                            </figure> <!-- end .cause-img  -->
                        </a> <!-- end .gallery-light-box  -->
                    </div><!-- end .col-sm-3  -->
                @endforeach
            </div> <!-- end .row  -->
        </div><!-- end .container-fluid  -->
    </section> <!-- end .section-content-block  -->
@endsection
