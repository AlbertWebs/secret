@extends('front.master') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<main>
	<?php $Banners = DB::table('banners')->where('section','contact')->get();  ?>
    @foreach ($Banners as $About)
    <section class="hero_in general" style="background: url('{{url('/')}}/uploads/banners/{{$About->image}}') center center no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
            <div class="container">
                <h1 class="fadeInUp"><span></span>photo credits </h1>
            </div>
        </div>
    </section>
    @endforeach
    <!--/hero_in-->

    <div class="container margin_60_35 adventure_description">
        <div class="row mb-5">
            
           
            <div class="col-lg-12">
                <div class="main_title_2">
                    <span><em></em></span>
                           
                </div>
                <div class="pl-lg-4">
                    <p class="lead" style="color:#000000;">
                        Secret Trek Africa is fortunate to have access to a number of image galleries through our partnerships with properties in each destination. <br>
                        Some of the photographs on our website come from these galleries, and where possible, we cite these sources. <br>
                        However, due to layout limitations, at times citation is not possible.<br><br>
                        
                        Thanks to the below photographer for allowing us to reproduce his images<br><br>
                        
                        <strong> Gilshe Photography</strong><br><br>
                        
                        In addition, our Trip Inspiration pages showcase photographs of numerous camps, hotels and lodges. Photo galleries in each itinerary are provided courtesy 
                        of each featured property.
                        
                    
                    </p>
                  
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
    

</main>
<!--/main-->

@endforeach


@endsection
