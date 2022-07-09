@extends('front.master-pesapal')
@section('content')
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)

<main>

<br><br><br>



    <div class="bg_color_1">
        <div class="container margin_80_55" style="">

            <center>
                <h1 class="text-success">Payment Success</h1>
                <h2>Tracking ID</h2>:{{ Request::get('tracking_id') }}
                <h2>Merchant Reference</h2>:{{ Request::get('merchant_reference') }}
            </center>

        </div>
        <!--/container-->
    </div>
    <!--/bg_color_1-->

</main>
<!--/main-->
@endforeach

@endsection
