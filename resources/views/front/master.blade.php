
<!DOCTYPE html>
<html lang="en">
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Secret Trek Africa | Best Tours and Travels Agency in Kenya">
    <meta name="author" content="Designekta Studios">

	
	{{-- SEO --}}
	{!! SEOMeta::generate() !!}
	{{-- SEO --}}

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="{{asset('theme/layerslider/css/layerslider.css')}}" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="{{asset('theme/css/css-bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('theme/css/css-style.css')}}" rel="stylesheet">
	<link href="{{asset('theme/css/css-vendors.css')}}" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Freehand' rel='stylesheet'>

	<!-- ALTERNATIVE COLORS CSS -->
    {{-- <link href="#" id="colors" rel="stylesheet"> --}}

    <!-- YOUR CUSTOM CSS -->
	<link href="{{asset('theme/css/css-custom.css')}}" rel="stylesheet">
	<!-- Modernizr -->
	<script src="{{asset('theme/js/modernizr.js')}}"></script>

	{{-- External Tags --}}
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MLVMMNG');
	</script>
	<!-- End Google Tag Manager -->
	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5fecb426df060f156a925386/1eqq9vdqm';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
	</script>
	<!--End of Tawk.to Script-->

	{{-- External Tags --}}
   <!--Floating WhatsApp css-->
   <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
   <!--Jquery-->
   @include('front.styles')
</head>

<body class="datepicker_mobile_full"><!-- Remove this class to disable datepicker full on mobile -->
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MLVMMNG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div style="z-index:100000;" id="WAButton"></div>  
	<div id="page"> 
		
	<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
		<div id="logo">
			<a href="{{url('/')}}">
				<img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" width="200" height="" alt="" class="logo_normal">
				<img src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}" width="100" height="56" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li style="display: none"><a href="cart-1.html" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
			@if(Auth::user())
			<li><a href="#sign-in-dialogs" id="sign-in" class="login" title="Welcome {{Auth::user()->name}}">Welcome {{Auth::user()->name}}</a></li>
			@else
			<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
			@endif
			{{-- <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li> --}}
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
	    @include('front.menu')
	</header>
	<!-- /header -->
	
	@yield('content')

	@include('front.footer')
	<!--/footer-->
	</div>
	<!-- page -->


	
	@include('front.sign-up')
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('theme/js/common_scripts.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>
	<script src="{{asset('theme/assets/validate.js')}}"></script>
	
	<!-- DATEPICKER  -->
	<script>
	$(function() {
	  'use strict';
	  $('input[name="dates"]').daterangepicker({
		  autoUpdateInput: false,
		  minDate:new Date(),
		  locale: {
			  cancelLabel: 'Clear'
		  }
	  });
	  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
		  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
	  });
	  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
		  $(this).val('');
	  });
	});
	</script>
	
	<!-- INPUT QUANTITY  -->
	<script src="{{asset('theme/js/input_qty.js')}}"></script>

	<!-- Autocomplete -->
    <script>
    function initMap() {
	  var input = document.getElementById('autocomplete');
	  var autocomplete = new google.maps.places.Autocomplete(input);
	 
	  autocomplete.addListener('place_changed', function() {
	    var place = autocomplete.getPlace();
	    if (!place.geometry) {
	      window.alert("Autocomplete's returned place contains no geometry");
	      return;
	    }

	    var address = '';
	    if (place.address_components) {
	      address = [
	        (place.address_components[0] && place.address_components[0].short_name || ''),
	        (place.address_components[1] && place.address_components[1].short_name || ''),
	        (place.address_components[2] && place.address_components[2].short_name || '')
	      ].join(' ');
	    } 
	  });
	}
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD27MfR6HORzvf3axkgJVmwXFzkWNhjEYo&libraries=places&callback=initMap"></script>

	<!-- FlexSlider -->
	<script defer src="{{asset('theme/js/jquery.flexslider.js')}}"></script>
	<script>
		$(window).on('load', function(){
			'use strict';
			$('#carousel_slider').flexslider({
				animation: "slide",
				controlNav: false,
				animationLoop: false,
				slideshow: true,
				itemWidth: 280,
				itemMargin: 25,
				asNavFor: '#slider'
			});
			$('#slider').flexslider({
				animation: "fade",
				controlNav: false,
				animationLoop: false,
				slideshow: true,
				sync: "#carousel_slider",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>	
	<!-- COLOR SWITCHER  -->
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('theme/js/video_header.js')}}"></script>
	<script>
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});
	</script>

	{{-- <script src="{{asset('theme/js/switcher.js')}}"></script> --}}
	<script>
		$(function() {
			//hang on event of form with id=myform
			$("#contactforms").submit(function(e) {
				// CheckArithmetic
				var verify_contact = getElementById('verify_contact');
				var correct_answer = getElementById('correct_answer');

				alert('correct_answer')
				alert('verify_contact')


				//prevent Default functionality
				e.preventDefault();

				//get the action-url of the form
				var actionurl = e.currentTarget.action;

				//do your own request an handle the results
				$.ajax({
						url: actionurl,
						type: 'post',
						dataType: 'application/json',
						data: $("#myform").serialize(),
						success: function(data) {
							... do something with the data...
						}
				});

			});

		});
	</script>

	  <!--Floating WhatsApp javascript-->
	  <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

	  <script type="text/javascript">  
		  $(function () {
			  $('#WAButton').floatingWhatsApp({
				  phone: '+254727271891', //WhatsApp Business phone number
				  headerTitle: 'Chat with us on WhatsApp!', //Popup Title
				  popupMessage: 'Hello, how can we help you?', //Popup Message
				  showPopup: true, //Enables popup display
				  buttonImage: '<img  src="{{url('/')}}/uploads/icon/whatsapp.svg" />', //Button Image
				  //headerColor: 'crimson', //Custom header color
				  //backgroundColor: 'crimson', //Custom background button color
				  position: "right" //Position: left | right

			  });
		  });
	  </script> 
	  
	  	<!-- DATEPICKER  -->
	<script>
        $('input[name="dates"]').daterangepicker({
            "singleDatePicker": true,
            "autoApply": true,
            parentEl:'#input_date',
            "linkedCalendars": false,
            minDate:new Date(),
            "showCustomRangeLabel": false
        }, function(start, end, label) {
          console.log('New date range selected: ' + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD') + ' (predefined range: ' + label + ')');
        });	
		</script>
		
		<script>
			$('#qtyInput-adult').keyup(function () {
				alert('a')
				$('#adult_').val(this.value);
			});
		</script>

		<!-- SPECIFIC SCRIPTS -->
		<script src="{{asset('theme/layerslider/js/greensock.js')}}"></script>
		<script src="{{asset('theme/layerslider/js/layerslider.transitions.js')}}"></script>
		<script src="{{asset('theme/layerslider/js/layerslider.kreaturamedia.jquery.js')}}"></script>
		<script>
			'use strict';
			$('#layerslider').layerSlider({
				autoStart: true,
				navButtons: false,
				navStartStop: false,
				showCircleTimer: false,
				responsive: true,
				responsiveUnder: 1280,
				layersContainer: 1200,
				skinsPath: 'layerslider/skins/'
					// Please make sure that you didn't forget to add a comma to the line endings
					// except the last line!
			});
		</script>
   
	
</body>
@endforeach
</html>