<section class="section-content-block section-faq section-secondary-bg">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion">

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne">Notice and Announcements</a>
                        </h4>
                    </div>
                    @if (isset($noticeboard))
                       
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    @foreach ($noticeboard as $notice)
                                    <ul class="scrollbar-custom">
                                        <li><a href="{{ $notice->nav_name }}">{{ $notice->caption }}</a> </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                       
                    @endif 
                </div>
            </div> <!-- end .col-md-6  -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="accordion2">

                <div class="panel panel-default faq-box">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2"
                                href="#collapseFive">Downloads</a>
                        </h4>
                    </div>
                    @if (isset($download))
                            <div id="collapseFive" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    @foreach ($download as $down)
                                    <ul class="scrollbar-custom">
                                        <li><a href="{{ $down->nav_name }}">{{ $down->caption }}</a> </li>
                                    </ul>
                                    @endforeach
                                </div>
                            </div>
                      
                    @endif
                </div>
            </div> <!-- end .col-md-12  -->

        </div> <!-- end .row  -->

    </div> <!-- end .container  -->

</section> <!--  end .section-faq -->
