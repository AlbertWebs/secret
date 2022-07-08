@extends('front.master-experience') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Destinations as $destinations)	
<main>
    <section class="hero_in adventure_detail" style="background: url('{{url('/')}}/uploads/samples/{{$destinations->image_one}}') center center no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>{{$destinations->title}}</h1>
                        <p>{{$destinations->location}}, <?php $Country = DB::table('countries')->where('id',$destinations->country)->get(); ?> @foreach($Country as $country) {{$country->title}} @endforeach</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="pl-lg-4">
                        <h3>{{$destinations->meta}}</h3>
                        
                        </div>
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
                    <div><h6 class="m-0">Ask For Cost Per Person</h6></div>
                    @else
                    <div><h6 class="m-0">From ${{$destinations->price}} per person</h6></div>
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
                    @if(Auth::user())
                    <div><a class="aside-panel-bt btn_1" href="#0">Book Now</a></div>
                    @else
                    <div>
                        <a href="#sign-in-dialog" id="sign-in" class="login btn_1" title="Sign In">Book Now</a>
                    </div>
                    @endif
                </div>
            </div>
        </nav>
        <div class="container margin_60_35 adventure_description">
            <div class="row mb-5">
                <div class="col-lg-4 fixed_title">
                    <h2>Details</h2>
                </div>
                <div class="col-lg-8">
                    <div class="pl-lg-4">
                        <p class="lead">{!!html_entity_decode($destinations->content)!!}</p>
                        <h6>Galley</h6>
                        <div class="pictures magnific-gallery clearfix">
                            <figure><a href="{{url('/')}}/uploads/samples/{{$destinations->image_one}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/samples/{{$destinations->image_one}}" alt=""></a></figure>
                            <figure><a href="{{url('/')}}/uploads/samples/{{$destinations->image_two}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/samples/{{$destinations->image_two}}" alt=""></a></figure>
                            <figure><a href="{{url('/')}}/uploads/samples/{{$destinations->image_three}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/samples/{{$destinations->image_three}}" alt=""></a></figure>
                            <figure><a href="{{url('/')}}/uploads/samples/{{$destinations->image_four}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/samples/{{$destinations->image_four}}" alt=""></a></figure>
                            <figure><a href="{{url('/')}}/uploads/samples/{{$destinations->image_one}}" title="Photo title" data-effect="mfp-zoom-in"><span class="d-flex align-items-center justify-content-center">+2</span><img src="{{url('/')}}/uploads/samples/{{$destinations->image_one}}" alt=""></a></figure>
                        </div>
                        <!-- /pictures -->
                    </div>
                </div>
            </div>
            <!-- /row -->

       
            <?php $itineries = DB::table('itineries')->where('type','Experience')->where('product_id',$destinations->id)->get(); ?>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="pl-lg-4">
                        <div class="timeline">
                            
                            <center>
                                <a href="#sign-in-dialog" id="sign-in" class="login btn_1" title="Sign In">View Itinerary</a>
                            </center>
                            
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
        <input class="form-control" type="hidden" name="type" value="destinations">
        <input class="form-control" type="hidden" value="{{$destinations->id}}" name="id">
        {{csrf_field()}}
        @include('front.booking')
    </form>
            
        <!-- /box_detail booking -->
        @include('front.cancellation')
    </div>
    <div class="layer"></div><!-- /Overlay mask -->
<!-- panel_dates -->

</div>
<!-- page -->
@endforeach

{{-- Booking --}}
@endsection
