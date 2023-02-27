<section class="section-content-block section-secondary-bg">
    <div class="container">
        <div class="row section-heading-wrapper">
            <div class="col-md-12 col-sm-12 text-center no-img-separator">
                <h2>Associate Member</h2>
                <span class="heading-separator heading-separator-horizontal"></span>
            </div> <!-- end .col-sm-10  -->
        </div> <!-- end .row  -->
        
        <div class="row">
            <div class="logo-layout-1 logo-items owl-carousel" data-nav="true" data-dots="false">
                @if (isset($partners))
                    @foreach ($partners as $partner)
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <div class="client-logo">
                                <img src="{{ $partner->banner_image }}" alt="" />
                            </div>
                        </div>
                    @endforeach
                @endif
            </div> <!-- end .logo-items  -->
        </div> <!-- end row  -->

    </div> <!-- end .container  -->
</section> <!--  end .section-client-logo -->
