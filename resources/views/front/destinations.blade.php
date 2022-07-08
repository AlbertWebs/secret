@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<main>
    @if ($countries == 'kenya')
    <?php $Banner = DB::table('banners')->where('section','destination')->get(); ?>
    @else 
    <?php $Banner = DB::table('banners')->where('section','third')->get(); ?>
    @endif
   
    @foreach ($Banner as $banners)
    <section class="hero_in tours" style="background: url('{{url('/')}}/uploads/banners/{{$banners->image}}') center center no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>{{$countries}}</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    @endforeach
    
  
    
       {{-- Text Area --}}
       <div class="bg_color_1">
        <div class="container margin_80_55" >
            <div class="main_title_2" style="text-align:left !important;">
                {{-- <span><em></em></span> --}}
                @foreach ($Country as $country)
                <h2  class="bg-white">Why go on a custom safari to <strong style="text-transform:capitalize">{{$countries}}?</strong></h2><br>
                <p class="bg-white">{!!html_entity_decode($country->content)!!}</p> 
                @endforeach
                
            </div>
        </div>
    </div>
    {{--  </TextArea>--}}


    <div class="container margin_80_55" >
    <div class="wrapper-grid">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Where to explore</h2><br>                
        </div>
        <div class="row">
          
            @foreach ($Destinations as $features)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                   
                        <a href="{{url('')}}/africa-destinations/{{$features->slung}}" class="grid_item latest_adventure">
                            <figure>
                                {{-- <div class="score"><strong>8.5</strong></div> --}}
                                <img style="min-height:233px;" src="{{url('/')}}/uploads/destinations/{{$features->image_one}}" class="img-fluid" alt="">
                                <div class="info">
                                    {{-- <em>{{$features->location}}</em> --}}
                                    <h3>{{$features->title}}</h3>
                                </div>
                            </figure>
                        </a>
                    
                
                </div>
            </div>
            <!-- /box_grid -->
            @endforeach
        </div>
        <!-- /row -->
        </div>
        <!-- /wrapper-grid -->
        
        {{-- <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p> --}}
        
    </div>
    <!-- /container -->
    
    
    
    <!-- /bg_color_1 -->
    
</main>
<!--/main-->

@endforeach
@endsection
