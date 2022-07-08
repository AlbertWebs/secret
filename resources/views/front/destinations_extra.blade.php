@extends('front.master-experience') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Destinations as $destinations)	
<?php  $Extra = App\Models\Extra::where('slung',$slung)->get();  ?>
@foreach ($Extra as $Extra)
<main>
    <section class="hero_in adventure_detail" style="background: url('{{url('/')}}/uploads/extras/{{$Extra->image_one}}') {{$Extra->banner_position}} no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="d-flex align-items-center justify-content-between mb-3"><em></em><div class="score"><span>Superb<em>{{$destinations->id}} Reviews</em></span><strong>8.9</strong></div></div> --}}
                        <h1> {{$Extra->title}}</h1>
                        <p> {{$destinations->title}},{{$destinations->location}}</p>
                    </div>
                    {{-- <div class="col-lg-8">
                        <div class="pl-lg-4">
                        <h3>{!!html_entity_decode($destinations->meta)!!}</h3>
                        <em>{{$destinations->location}}</em>
                        </div>
                    </div> --}}
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
                    <div><h6 class="m-0"> {{$Extra->title}} </h6></div>
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
               
                <div class="col-lg-12">
                    <div class="pl-lg-4">
                        <p class="lead" style="color:#000000">{!!html_entity_decode($Extra->content)!!}</p>
                        {{-- <h6>Galley</h6> --}}
                        {{-- <div class="pictures magnific-gallery clearfix">
                            <figure style="min-width:250px;"><a href="{{url('/')}}/uploads/destinations/{{$destinations->image_one}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/destinations/{{$destinations->image_one}}" alt=""></a></figure>
                            <figure style="min-width:250px;"><a href="{{url('/')}}/uploads/destinations/{{$destinations->image_two}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/destinations/{{$destinations->image_two}}" alt=""></a></figure>
                            <figure style="min-width:250px;"><a href="{{url('/')}}/uploads/destinations/{{$destinations->image_three}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/destinations/{{$destinations->image_three}}" alt=""></a></figure>
                            <figure style="min-width:250px;"><a href="{{url('/')}}/uploads/destinations/{{$destinations->image_four}}" title="Photo title" data-effect="mfp-zoom-in"><img src="{{url('/')}}/uploads/destinations/{{$destinations->image_four}}" alt=""></a></figure>

                        </div> --}}
                        <!-- /pictures -->
                    </div>
                </div>
            </div>
            <!-- /row -->

        


        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    @if($Extra->highlights == null)

    @else
    {{-- activities --}}
    <div class="banner mb-0" style="min-height:650px; background: url('{{url('/')}}/uploads/extras/{{$Extra->image}}') {{$Extra->banner_position_bottom}} no-repeat">
        <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div style="margin:0 auto">
             
                <p>{!!html_entity_decode($Extra->highlights)!!}</p>
               
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    {{-- activities --}}
    @endif
    
</main>
<!--/main-->
@endforeach

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
