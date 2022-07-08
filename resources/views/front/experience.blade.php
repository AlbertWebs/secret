@extends('front.master-experience') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Destinations as $destinations)	
<main>

    <section class="hero_in adventure_detail" style="background: url('{{url('/')}}/uploads/experiences/{{$destinations->image_one}}') {{$destinations->banner_position}} no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="d-flex align-items-center justify-content-between mb-3"><em>{{$destinations->duration}} Trip</em><div class="score"><span>Superb<em>{{$destinations->id}} Reviews</em></span><strong>8.9</strong></div></div> --}}
                        <h1>{{$destinations->title}}</h1>
                        <p>{{$destinations->location}}</p>
                    </div>
                  
                </div>
                <!-- /row -->
            </div>
                <!-- /main_info -->
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    @if($destinations->price == null or $destinations->price == '0')
                    <div><h6 class="m-0"> </h6></div>
                    @else
                    <div><h6 class="m-0"> </h6></div>
                    @endif
                    <div>
                        <h6 class="m-0">
                            <center>
                                @if(Session::has('message'))
                                        <div class="alert alert-success">{!!html_entity_decode(Session::get('message'))!!}</div>
                               @endif
                                </center>
                        </h6>
                    </div>
                    <div><a class="aside-panel-bt btn_1" href="#0">Book Now</a></div>
                </div>
            </div>
        </nav>
        <div class="container margin_60_35 adventure_description">
            <div class="row mb-5">
                
                <div class="col-lg-12">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>{{$destinations->title}}</h2><br>                
                    </div>
                    <div class="pl-lg-4">
                        <p class="lead">{!!html_entity_decode($destinations->content)!!}</p>
                        
                    </div>
                </div>
            </div>
            <!-- /row -->

            {{-- Extras --}}


         <?php $Extra = DB::table('extras')->where('type','exp')->where('product_id',$destinations->id)->get(); ?>
         @if($Extra->isEmpty())

         @else
         {{--  --}}
         <div class="bg_color_1">
			<div class="container margin_80_55">
				{{-- <div class="main_title_2">
					<span><em></em></span>
					<h3>{{$destinations->title}}</h3>
					
                </div> --}}
                <?php $Count = 1; ?>
                @foreach ($Extra as $extra)
                @if($Count % 2 == 0)
                <div class="row">
                    <!-- /box_news -->
					<div class="col-lg-6 wow" data-wow-offset="150">
						<a class="" href="#0">
							<figure><img style="max-width:100%; float:left;" src="{{url('/')}}/uploads/extras/{{$extra->image}}" alt="">
								{{-- <figcaption>{{$destinations->title}}</figcaption> --}}
							</figure>
						</a>
                    </div>
                    <div class="col-lg-6">
						<a class="" href="#0">
                            <br><br><br>
                            <h4>{{$extra->title}}</h4>
                            
                            <p style="color:#000000; font-size:16px;  display: table-cell;  vertical-align: middle;">{!!\Illuminate\Support\Str::limit(html_entity_decode($extra->content),800,"...")!!}</p>
                          
						</a>
					</div>
                </div>
                @else 
                <div class="row bg_color_1">
                    <!-- /box_news -->
					<div class="col-lg-6">
						<a class="" href="#0">
                            <br><br><br>
							<h4>{{$extra->title}}</h4>
                            <p style="color:#000000; font-size:16px;">{!!\Illuminate\Support\Str::limit(html_entity_decode($extra->content),800,"...")!!}</p>
                            {{-- <center>
                                <a href="{{url('/africa-destinations')}}/extra/{{$extra->slung}}" id="sign-in" class="login btn_1" title="Sign In">View More</a>
                            </center> --}}
						</a>
					</div>
					<div class="col-lg-6 wow" data-wow-offset="150">
						<a class="" href="#0">
							<figure><img style="max-width:100%" src="{{url('/')}}/uploads/extras/{{$extra->image}}" alt="">
							</figure>
						</a>
					</div>
					
                </div>
                @endif
                <?php $Count = $Count+1 ?>
                <hr>
                @endforeach
				
				
			</div>
			<!-- /container -->
		</div>
        <!-- /bg_color_1 -->
        @endif
         {{--  --}}

            {{-- Extras --}}

       
       


        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
@endforeach

@endforeach
{{-- Booking --}}
@foreach ($Destinations as $destinations)	
<div id="panel_dates" class="menu_fixed">
    <a class="aside-panel-bt" href="#0"><i class="icon_close"></i></a>
    <form method="post" action="{{url('/submitBooking')}}" id="bookingform" autocomplete="off">
        {{csrf_field()}}
        <input class="form-control" type="hidden" name="type" value="experiences">
        <input class="form-control" type="hidden" value="{{$destinations->id}}" name="id">
        @include('front.booking')
    </form>
        @include('front.cancellation')
    </div>
    <div class="layer"></div><!-- /Overlay mask -->
<!-- panel_dates -->

</div>
<!-- page -->
@endforeach

{{-- Booking --}}
@endsection
