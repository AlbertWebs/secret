@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)

<main>
    <section class="header-video adventure">
        <div id="hero_video">
            <div class="wrapper">
            <div class="container container-custom">
                <small>Introducing</small>
                <h3 style="text-transform: capitalize">{{$Settings->sitename}} Adventures</h3>
                <p>Hosted journeys to extraordinary and unique places.</p>
                <a href="#secret" class="btn_1">Read more</a>
            </div>
        </div>
        </div>
        <img src="{{asset('theme/img/video_fix.png')}}" alt="" class="header-video--media" data-video-src="{{asset('uploads/video/adventure')}}" data-teaser-source="{{asset('uploads/video/adventure')}}" data-provider="" data-video-width="1920" data-video-height="960">
    </section>
    <!-- /header-video -->

    


    <div class="bg_color_1">
    <section class="wow slideInUp" data-wow-duration="2s">
        <div class="container margin_80_55" >
        <div class="main_title_3" >
            <span><em></em></span>
            <p style="max-width:600px">Choose your dates, choose your travel partners, choose your comfort level.
                We do the rest. Let’s start planning your journey.</p>
                 {{--Call To Action  --}}
                 <a href="{{url('/')}}/plan-my-safaris" class="btn_1">Plan Now</a>
        </div>
        </div>
    </section>
    </div>
    
    
    <div class="container container-custom margin_80_55 wow" data-wow-offset="250" id="secret">
        {{-- <section class="add_bottom_45">
            <div class="main_title_3 wow slideInUp" data-wow-duration="2s">
                <span><em></em></span>
                <h2>Popular Adventures Tours</h2>
                <p>Best Experiences Handpicked For Just You</p>
            </div>
            <?php $FeaturedExperience = DB::table('experiences')->where('featured','1')->get() ?>

            <div id="reccomended_adventure" class="owl-carousel owl-theme wow slideInUp" data-wow-duration="2.5s">
                @foreach ($FeaturedExperience as $features)
                <div class="item">
                    <a href="{{url('')}}/adventures-and-experiences/{{$features->slung}}" class="grid_item_adventure">
                        <figure>
                            <img src="{{url('/')}}/uploads/experiences/{{$features->portrait}}" class="img-fluid" alt="">
                            <div class="info">
                                <em>{{$features->duration}}</em>
                                <h3>{{$features->title}}</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                @endforeach
           
            </div>
            
        </section> --}}
        <!-- /section -->

        <section class="wow slideInUp" data-wow-duration="2s">
            <div class="main_title_3" >
                <span><em></em></span>
                <h2>All Experiences</h2>
   
            </div>
            <?php $Experiences = DB::table('experiences')->inRandomOrder()->get(); ?>
            <div class="row">
                @foreach ($Experiences as $exp)
                <div class="col-xl-4 col-lg-6 col-md-6" style="margin:0px auto">
                    <a href="{{url('')}}/adventures-and-experiences/{{$exp->slung}}" class="grid_item latest_adventure">
                        <figure>
                            {{-- <div class="score"><strong>8.5</strong></div> --}}
                            <img style="min-height:233px;" src="{{url('/')}}/uploads/experiences/{{$exp->image_one}}" class="img-fluid" alt="">
                            <div class="info">
                                {{-- <em>{{$exp->duration}}</em> --}}
                                <h3>{{$exp->title}}</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                @endforeach
                <!-- /grid_item -->
            </div>
            <!-- /row -->
          
        </section>
        <!-- /section -->
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container container-custom margin_80_55">
            <div class="main_title_2">
                <h2>Plan Your Trip Easly</h2>
                <p>Planning a trip should never be difficult, we are here to work just that for you</p>
            </div>
            <div class="row adventure_feat text-center">
                <div class="col-md-4">
                    <img src="{{asset('theme/img/adventure_icon_1.svg')}}" alt="" width="75" height="75">
                    <h3>Itineraries Explained in detail</h3>
                   
                </div>
                <div class="col-md-4">
                    <img src="{{asset('theme/img/adventure_icon_2.svg')}}" alt="" width="75" height="75">
                    <h3>Room and food included</h3>
                    
                </div>
                <div class="col-md-4">
                    <img src="{{asset('theme/img/adventure_icon_3.svg')}}" alt="" width="75" height="75">
                    <h3>Everything Well Organized</h3>
                    
                </div>
              
            </div>
            <!-- /container -->
            {{-- Button --}}<br>
            <center><a href="{{url('/')}}/plan-my-safaris" class="btn_1">Plan My Safari Now</a></center>
            {{-- Button --}}
        </div>
        
    </div>
    <!-- /bg_color_1 -->

    @include('front.experience_banner')
    <!--/call_section-->
</main>
<!-- /main -->

@endforeach
@endsection
