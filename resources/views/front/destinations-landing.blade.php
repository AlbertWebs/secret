@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<?php $Country = DB::table('countries')->get(); ?>
<main>
    <?php $Banner = DB::table('banners')->where('section','kenya')->get(); ?>
    @foreach ($Banner as $banners)
    <section class="hero_in tours" style="background: url('{{url('/')}}/uploads/banners/{{$banners->image}}') center top no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Destinations</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    @endforeach
    
  
    
   



        
    {{-- Text Area --}}
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2" style="max-width:600px; margin:0 auto">
                <span><em></em></span>
                
                <p class="bg-white">Twenty years from now you will be more disappointed by the things you didn't do than by the 
                    ones you did do, so throw off the bowlines, sail away from the safe harbor
                catch the trade winds in your sails.<br>
              <strong>Explore  .  Dream  .  Discover</strong> </p>
              <br><br>
              <i style="font-size: 1.5rem;">~Mark Twain</i>
            </div>
        </div>
    </div>
    {{--  </TextArea>--}}
    
    
    <div class="margin_60_35" style="padding:10px">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Explore Our Destinations</h2>
            {{-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> --}}
        </div>
        <div class="row wow slideInUp" data-wow-duration="1.2s">
            @foreach ($Country as $country)
            <div class="col-xl-6 col-lg-6 col-md-6">
                <a href="{{url('')}}/destinations/{{$country->slung}}" class="grid_item latest_adventure">
                    <figure style="max-height:364px">
                        <div class="score"><strong>{{$country->heading}}</strong></div>
                        <img style="height:100%" src="{{url('/')}}/uploads/countries/{{$country->image}}" class="img-fluid" alt="">
                        <div class="info text-center">
                            
                            <h3 style="text-shadow: 2px 2px #384820;">{{$country->title}}</h3>
                            {{-- <em class="hide-mobile" style="text-transform: lowercase">{{$country->meta}}</em> --}}
                            {{-- <a class="btn_1" href="{{url('/')}}/adventures-and-experiences"><strong>Explore <i class="arrow_carrot-right"></i></strong></a> --}}
                        </div>
                    </figure>
                </a>
            </div>
            @endforeach
            <!-- /grid_item -->
        </div>
    </div>
    <!-- /container -->
    
    <!-- /bg_color_1 -->

   

    
     <section class="add_bottom_45 bg_color_1" style="padding-top:100px">
        <div class="container bg_color_1 wow" data-wow-offset="250" id="secret">
            <div class="main_title_3 wow slideInUp" data-wow-duration="2s">
                <span><em></em></span>
                <h2>Sample Safaris</h2>
                {{-- <p>Best Destinations Handpicked For Just You</p> --}}
            </div>
            <?php $FeaturedExperience = DB::table('samples')->inRandomOrder()->get() ?>

            <div id="reccomended_adventure" class="owl-carousel owl-theme wow slideInUp" data-wow-duration="2.5s">
                @foreach ($FeaturedExperience as $features)
                <div class="item">
                    <a href="{{url('')}}/itineraries/{{$features->slung}}" class="grid_item_adventure">
                        <figure>
                            {{-- <div class="score"><strong>7.9</strong></div> --}}
                            <img style="min-height:200px;" src="{{url('/')}}/uploads/samples/{{$features->image_one}}" class="img-fluid" alt="">
                            <div class="info">
                                <em>{{$features->location}}</em>
                                <h3>{{$features->title}}</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
     </section>
     </div>
     
    
</main>
<!--/main-->

@endforeach
@endsection
