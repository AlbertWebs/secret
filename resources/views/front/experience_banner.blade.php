<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<?php $Banner = DB::table('banners')->where('section','experience')->get(); ?>
@foreach ($Banner as $item)
<div class="call_section adventure" style="background:url('{{url('/')}}/uploads/banners/{{$item->image}}') center bottom no-repeat fixed;">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1" style="border-radius:10px">
                    <h3>Enjoy Great Experiences with us</h3>
                    <p>{!!html_entity_decode($Settings->welcome)!!}</p>
                    <a href="{{url('/')}}/adventures-and-experiences" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endforeach