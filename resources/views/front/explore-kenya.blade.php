@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<main>
		
    <section class="header-video">
        <div id="hero_video">
            <div class="wrapper">
                <div class="container">
                    <h3>Explore Kenya</h3>
                    <p>Thousands Of Destinations</p>
                    {{-- <form>
                        <div class="row no-gutters custom-search-input-2">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="What are you looking for..."><i class="icon_search"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Where"><i class="icon_pin_alt"></i>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <select class="wide"><option>All Categories</option><option>Tours</option><option>Hotels</option><option>Restaurants</option></select></div>
                            <div class="col-lg-2">
                                <input type="submit" class="btn_search" value="Search"></div>
                        </div>
                        <!-- /row -->
                    </form> --}}
                    <form>
						<div class="row no-gutters custom-search-input-2">
							<div class="col-lg-4">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="What are you looking for...">
									<i class="icon_search"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Where" id="autocomplete">
									<i class="icon_pin_alt"></i>
								</div>
							</div>
							<div class="col-lg-3">
								<select class="wide">
									<option>All Categories</option>	
									<option>Tours</option>
									<option>Hotels</option>
									<option>Restaurants</option>
								</select>
							</div>
							<div class="col-lg-2">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
						<!-- /row -->
					</form>
                </div>
            </div>
        </div>
        <img src="{{asset('theme/images/img-video_fix.png')}}" alt="" class="header-video--media dark-overlay" data-video-src="{{url('/')}}/uploads/video/intro" data-teaser-source="{{url('/')}}/uploads/video/intro" data-provider="" data-video-width="1920" data-video-height="960">
    </section>
    <!--/hero_in-->
  
        
    {{-- Text Area --}}
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2 class="bg-white">{{$Settings->sitename}} Explore Kenya</h2><br>
                <p class="bg-white">{!!html_entity_decode($Settings->welcome)!!}</p>
            </div>
        </div>
    </div> 
   
    {{-- Places To Visit --}}
    <div class="container container-custom margin_30_95">
        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Where To Visit</h2>
                <p>Kenya has lots of amazing places to visit, We have handpicked some of the best places possible just for you</p>
                <br>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.9</strong></div>
                            <img src="{{asset('theme/img/hotel_1.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Mariott Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.9</strong></div>
                            <img src="{{asset('theme/img/hotel_2.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Concorde Hotel </h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.0</strong></div>
                            <img src="{{asset('theme/img/hotel_3.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Louvre Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.9</strong></div>
                            <img src="{{asset('theme/img/hotel_4.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Park Yatt Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>8.9</strong></div>
                            <img src="{{asset('theme/img/hotel_1.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Mariott Hotel</h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="hotel-detail.html" class="grid_item">
                        <figure>
                            <div class="score"><strong>7.9</strong></div>
                            <img src="{{asset('theme/img/hotel_2.jpg')}}" class="img-fluid" alt="">
                            <div class="info">
                                <div class="cat_star"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i></div>
                                <h3>Concorde Hotel </h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
            <a href="hotels-grid-isotope.html"><strong>View all Places(157) <i class="arrow_carrot-right"></i></strong></a>
        </section>
        <!-- /section -->
        
        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Explore Kenya</h2>
                <p>More Stuff about kenya goes here</p>
            </div>
        </section>
        <!-- /section -->

 

    </div>
    {{-- Places To Visit --}}
    
</main>
<!--/main-->

@endforeach
@endsection
