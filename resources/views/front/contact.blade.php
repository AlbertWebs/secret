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
                <h1 class="fadeInUp"><span></span>Contact Us</h1>
            </div>
        </div>
    </section>
    @endforeach
    <!--/hero_in-->

	<div class="contact_info">
		<div class="container">
			<ul class="clearfix">
				<li>
					<i class="pe-7s-map-marker"></i>
					<h4>Address</h4>
					<span>{{$Settings->address}} <br >{{$Settings->location}}</span>
				</li>
				<li>
					<i class="pe-7s-mail-open-file"></i>
					<h4>Email address</h4>
					<span>{{$Settings->email}} <br> {{$Settings->email_one}}<br></span>

				</li>
				<li>
					<i class="pe-7s-phone"></i>
					<h4>Contacts info</h4>
					<span>{{$Settings->mobile}} | {{$Settings->mobile}}<br><small>Monday to Friday 0830hrs - 1730hrs </small><br>
						<small>Saturday 0900hrs - 1300hrs </small><br>
						<small>Sunday Closed </small>
					</span>
				</li>
			</ul>
		</div>
	</div>
	<!--/contact_info-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="row justify-content-between">
			
				<div class="col-lg-12">
					<h4>Send a message</h4>
					<p>Feel Free To Write To Us</p>
					<div class="alert-success" id="message-contact"></div>
					<form method="post" action="{{url('/submitMessage')}}" id="contactform" autocomplete="off">
						<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input required class="form-control" type="text" id="name_contact" name="name_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last name</label>
									<input required class="form-control" type="text" id="lastname_contact" name="lastname_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input required class="form-control" type="email" id="email_contact" name="email_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Telephone</label>
									<input required class="form-control" type="text" id="phone_contact" name="phone_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
						</div>
						<?php
						$ops = array('-', '+');
						$answer = -1;
					
						$num1 = rand(0, 15);
						$num2 = rand(0, 15);

						$answer = $num1 + $num2;
						
						?>
						<input type="hidden" name="correct_answer" id="correct_answer" value="{{$answer}}">
                        <input required class="form-control" value="{{$answer}}" type="hidden" id="verify_contact" name="verify_contact">
						{{-- <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Are you human? {{$num1}} + {{$num2}} =</label>
									<input required class="form-control" value="{{$answer}}" type="text" id="verify_contact" name="verify_contact">
								</div>
							</div>
                        </div> --}}
                        <div class="clearfix"></div>
                        <br>
                        <div class="col-lg-12 col-md-12" id="TheCapcha">
                            <div class="g-recaptcha" data-sitekey="6LfS8h4aAAAAAByJ5fk0AuZXNCDscT0y6T8CvbpP" data-callback="correctCaptcha"></div>
                            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <br>
						<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
					</form>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->
</main>
<!--/main-->
<script>
    $("form").each(function() {
        $(this).find(':input[type="submit"]').prop('disabled', true);
    });
    function correctCaptcha() {
        $("form").each(function() {
            $(this).find(':input[type="submit"]').prop('disabled', false);
        });
    }
</script>
@endforeach


@endsection
