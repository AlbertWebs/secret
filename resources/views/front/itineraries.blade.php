@extends('front.master-experience') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Itineraries as $itineraries)	
<?php $Destinations = DB::table('samples')->where('id',$itineraries->product_id)->get(); ?>
@endforeach
@foreach ($Destinations as $destinations)
<main>
    
    <section class="hero_in general" style="background: url('{{url('/')}}/uploads/samples/{{$destinations->image_one}}') {{$itineraries->banner_position}} no-repeat;">
        
            <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>{{$destinations->title}}</h1>
                </div>
            </div>
               
        
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    @if($destinations->price == null or $destinations->price == '0')
                    <div><h6 class="m-0">Your itinerary</h6></div>
                    @else
                    <div><h6 class="m-0">Your itinerary</h6></div>
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

        {{-- Highlights --}}

        <div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					{{-- <h2>Highlights</h2> --}}
					
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="{{url('/')}}/uploads/samples/{{$destinations->image_one}}" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
                        <br><br>
						<p>{!!html_entity_decode($destinations->content)!!}</p>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->
        {{-- Highlights --}}
        <div class="container margin_60_35 adventure_description">
            

       
            <?php $itineries = DB::table('itineries')->where('type','Experience')->where('product_id',$destinations->id)->get(); ?>
            <div class="row mb-5">
               
                <div class="col-lg-12">
                    <div class="pl-lg-4">
                        <div class="timeline">
                            @foreach($itineries as $itineries)
                            <div class="mb-5">
                                <h3>{{$itineries->day}}</h3>
                                
                                <p>{!!html_entity_decode($itineries->content)!!}</p>
                                <div class="pictures magnific-gallery clearfix">
                                    <figure style="min-width:400px; min-height:250px;"><a href="{{url('/')}}/uploads/itineries/{{$itineries->image_one}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/itineries/{{$itineries->image_one}}" alt=""></a></figure>
                                    <figure style="min-width:400px; min-height:250px;"><a href="{{url('/')}}/uploads/itineries/{{$itineries->image_two}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/itineries/{{$itineries->image_two}}" alt=""></a></figure>
                                </div>
                            </div>
                            <hr>
                            @endforeach
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
       


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
