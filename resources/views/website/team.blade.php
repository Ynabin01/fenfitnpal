@extends('layouts.master')

@section('content')
    <!--  PAGE HEADING -->
    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        {{ $slug1->caption }}
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="/">Home</a> / {{ $slug2->caption }} 
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section> <!-- end .page-header  -->

    <!-- TEAM SECTION 01 -->
    @if(app('request')->input('group') == "sub")
   
    @if (@isset($team))
    <section class="section-content-block">
        <div class="container">
            <div class="row">
                <h2 class="text-center members">Members</h2>
                <div class="scroll">
                    <table>
                        <tr class="table-header">
                            <th class="simple-th">S.N</th>
                            <th class="simple-th">Position</th>
                            <th class="simple-th">Name</th>
                            <th class="simple-th">Contact</th>
                            <th class="simple-th">Addres</th>
                        </tr>
                    @foreach ($team as $teams)
                        <tr>
                            <td>{{ $teams->place }}</th>
                            <td>{{ $teams->position_extra }}</td>
                            <td>{{ $teams->caption ?? '' }}</td>
                            <td>{{ $teams->phone_extra }}</td>
                            <td>{{ $teams->short_content }}</td>
                        </tr>
                    @endforeach

                    </table>
                </div>
            </div> <!--  end .row  -->
        </div> <!--  end container -->
    </section> <!-- end .section-content-block  -->
    @endif
    
    @else
    <section class="section-content-block section-team-bg">
        <div class="container">
            <div class="row section-heading-wrapper margin-bottom-24">
                <div class="col-md-12 col-sm-12 text-left no-img-separator">
                    <h2> {{ $slug2->caption }}</h2>
                </div> <!-- end .col-sm-10  -->
            </div>
            @if (@isset($team))
                <div class="row text-center">
                    {{-- <div class=""> --}}
                        @foreach ($team as $teams)
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="team-layout-1">
                                    <figure class="team-member">
                                        <a href="#" title=" ">
                                            <img src="{{ $teams->banner_image ?? '' }}" alt="Mr. Manjil Babu Maskey" />
                                        </a>
                                    </figure> <!-- end. team-member  -->
                                    <article class="team-info">
                                        <h3>{{ $teams->caption ?? '' }}</h3>
                                        <h4>{{ $teams->position_extra }}</h4>
                                        <p>{{ $teams->place }}</p> 
                                        <p><a href="tel:9855055166">{{ $teams->phone_extra }}</a> </p>
                                    </article>
                                    <div class="team-content">
                                        <div class="team-social-share text-center clearfix">
                                            <a target="_blank" class="fa fa-facebook rectangle"
                                                href="{{ $teams->facebook_extra }}" title="Facebook"></a>
                                            <a target="_blank" class="fa fa-twitter rectangle"
                                                href="{{ $teams->twitter_extra }}" title="Twitter"></a>
                                            <a target="_blank" class="fa fa-instagram rectangle"
                                                href="{{ $teams->instagram_extra }}" title="Google Plus"></a>
                                            <a target="_blank" class="fa fa-linkedin rectangle"
                                                href="{{ $teams->linkedin_extra }}" title="Linkedin"></a>
                                        </div> <!-- end .author-social-box  -->
                                    </div>
                                </div> <!--  end team-layout-1 -->
                            </div>
                        @endforeach
                    {{-- </div> <!-- end .row  --> --}}
                </div> <!-- end .container  -->
            @endif

             <!-- <div class="container"> -->
                <div class="row section-heading-wrapper margin-bottom-24">

                    <div class="col-md-12 col-sm-12 text-left no-img-separator">
                        <h2>Province 1 Member</h2>

                    </div>  

                </div>
                <div class="row text-center">

                    <div class="">

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Rajesh Karki">
                                        <img src="/website/img/New-Picture-5-1-150x138.png" alt="Mr. Rajesh Karki" />
                                    </a>

                                </figure>  
                                <article class="team-info">
                                    <h3>Mr. Rajesh Karki</h3>
                                    <h4>Member</h4>
                                    <p>Udayapur, Nepal</p>
                                    <p><a href="tel:9852830326">9852830326</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div>  
                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Manoj Kumar Raut">
                                        <img src="/website/img/New-Picture-5.png" alt="Mr. Manoj Kumar Raut" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Manoj Kumar Raut</h3>
                                    <h4>Member</h4>
                                    <p>Sunsari, Nepal</p>
                                    <p><a href="tel:9852047931">9852047931</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Shyam Prasad Neupane">
                                        <img src="/website/img/New-Picture-4-150x149.png" alt="Mr. Shyam Prasad Neupane" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Shyam Prasad Neupane</h3>
                                    <h4>Member</h4>
                                    <p>Jhapa, Nepal</p>
                                    <p><a href="tel:9852674106">9852674106</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Binod Nemwang">
                                        <img src="/website/img/New-Picture-3.png" alt="Mr. Binod Nemwang" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Binod Nemwang</h3>
                                    <h4>Member</h4>
                                    <p>Ilam, Nepal</p>
                                    <p><a href="tel:9867069677">9867069677</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Narayan Kumar Shrestha">
                                        <img src="/website/img/New-Picture-1-150x143.png"
                                            alt="Mr. Narayan Kumar Shrestha" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Narayan Kumar Shrestha</h3>
                                    <h4>Member</h4>
                                    <p>Morang, Nepal</p>
                                    <p><a href="tel:9852031110">9852031110</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Rajendra Prasad Prajapati">
                                        <img src="/website/img/Rajendra-Pra-150x135.png"
                                            alt="Mr. Rajendra Prasad Prajapati" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Rajendra Prasad Prajapati</h3>
                                    <h4>Second Vice President</h4>
                                    <p>Bhaktapur, Nepal</p>
                                    <p><a href="tel:9851031061">9851031061</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

                            <div class="team-layout-1">

                                <figure class="team-member">
                                    <a href="#" title="Mr. Bir Bahadur Budhathoki">
                                        <img src="/website/img/Bir-Bahadur-150x150.png"
                                            alt="Mr. Bir Bahadur Budhathoki" />
                                    </a>

                                </figure> <!-- end. team-member  -->

                                <article class="team-info">
                                    <h3>Mr. Bir Bahadur Budhathoki</h3>
                                    <h4>Third Vice President</h4>
                                    <p>Kanchanpur, Nepal</p>
                                    <p><a href="tel:9858750446">9858750446</a> </p>
                                </article>

                                <div class="team-content">

                                    <div class="team-social-share text-center clearfix">
                                        <a class="fa fa-facebook rectangle" href="#" title="Facebook"></a>
                                        <a class="fa fa-twitter rectangle" href="#" title="Twitter"></a>
                                        <a class="fa fa-instagram rectangle" href="#" title="Google Plus"></a>
                                        <a class="fa fa-linkedin rectangle" href="#" title="Linkedin"></a>
                                    </div> <!-- end .author-social-box  -->

                                </div>

                            </div> <!--  end team-layout-1 -->

                        </div> <!--  end .col-lg-3 col-md-3 col-sm-6 col-xs-12 -->

                    </div>

                </div> <!-- end .row  -->

            <!-- </div> -->
             

    </section> <!--  end .section-our-team -->
    @endif

@endsection
