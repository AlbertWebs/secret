@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Country as $country)
<main>
		
    <?php $Banner = DB::table('banners')->where('section','destination')->get(); ?>
    @foreach ($Banner as $banners)
    <section class="hero_in tours" style="background: url('{{url('/')}}/uploads/countries/{{$country->banner}}') center top no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span> {{$country->title}}</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    @endforeach
  
        
    {{-- Text Area --}}
    <div class="bg_color_1 " style="text-align:left !important;">
        <div class="container margin_30_95" style="text-align:left !important;">
            <div class="main_title_2" style="text-align:left !important;">
                {{-- <span style="text-align:left !important;"><em style="text-align:left !important;"></em></span> --}}
                <h2 class="bg-white"> {{$country->heading}}</h2><br>
                <p class="bg-white">{!!html_entity_decode($country->content)!!}</p>
            </div>
        </div>
    </div>
   
    {{-- Places To Visit --}}
    <div class="container container-custom margin_30_95">
       

        <?php $Destinations = DB::table('destinations')->where('country',$country->id)->get(); ?>
    <div class="container container-custom margin_30_95">
        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Where To Explore</h2>
                <p>Best Desinations in {{$country->title}}</p>
            </div>
            <div class="row">
                @foreach ($Destinations as $dest)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="{{url('')}}/africa-destinations/{{$dest->slung}}" class="grid_item">
                        <figure>
                            <div class="score"><strong><i class="ti-location-pin"></i></strong></div>
                            <img style="min-height:233px;" src="{{url('/')}}/uploads/destinations/{{$dest->image_one}}" class="img-fluid" alt="">
                            <div class="info text-center">
                                <h3>{{$dest->title}}</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                @endforeach
            </div>
            <!-- /row -->
            {{-- <a class="btn_1" href="{{url('/')}}/africa-destinations"><strong>View Other Destinations ( <?php $Destinations = DB::table('destinations')->get(); echo count($Destinations); ?>) <i class="arrow_carrot-right"></i></strong></a> --}}
        </section>
        <!-- /section -->
        
        <section>
            <div class="main_title_3">
                <span><em></em></span>
                <h2>HandPicked Experiences in {{$country->title}}</h2>
                <p>Selected Just For You</p>
            </div>
            <?php $Experiences = DB::table('experiences')->where('country',$country->id)->inRandomOrder()->get(); ?>
            <div class="row">
                @foreach ($Experiences as $exp)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="{{url('')}}/adventures-and-experiences/{{$exp->slung}}" class="grid_item latest_adventure">
                        <figure>
                            {{-- <div class="score"><strong>8.5</strong></div> --}}
                            <img style="min-height:233px;" src="{{url('/')}}/uploads/experiences/{{$exp->image_one}}" class="img-fluid" alt="">
                            <div class="info text-center">
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
            {{-- <a class="btn_1" href="{{url('/')}}/adventures-and-experiences"><strong>View All Experiences ( <?php $Destinations = DB::table('experiences')->get(); echo count($Destinations); ?>) <i class="arrow_carrot-right"></i></strong></a> --}}
        </section>
        <!-- /section -->

    </div>
    <!-- /container -->
        
        {{-- <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Explore {{$country->title}}</h2>
                <p>When to visit Kenya</p>
                <p>{!!html_entity_decode($country->content)!!}</p>
            </div>
        </section> --}}
        <!-- /section -->

 

    </div>
    {{-- Places To Visit --}}
    
</main>
<!--/main-->
@endforeach
@endforeach
@endsection
