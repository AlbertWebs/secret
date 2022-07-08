
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO --}}
    {!! SEOMeta::generate() !!}
    {{-- SEO --}}

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/uploads/logo/{{$Settings->favicon}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    @if($page_title == 'Elegant Hotels')
    <!--  -->
    <link href="{{asset('theme/css/hotel.css')}}" rel="stylesheet" type="text/css">
    @elseif($page_title == 'Car Hire - Transfers')
   <!--Custom CSS-->
   <link href="{{asset('theme/css/car.css')}}" rel="stylesheet" type="text/css">
   
    @else
   <!--Custom CSS-->
   <link href="{{asset('theme/css/style.css')}}" rel="stylesheet" type="text/css">
    @endif

    

     
 
    <!--Flaticons CSS-->
    <link href="{{asset('theme/font/flaticon.css')}}" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="{{asset('theme/css/plugin.css')}}" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5e972a5569e9320caac3e042/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

     <!--Floating WhatsApp css-->
     <link rel="stylesheet" href="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.css">
       <!--Jquery-->
</head>
<body>

<!--Div where the WhatsApp will be rendered-->  
<div style="z-index:100000" id="WAButton"></div>  

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div id="status"></div>
    </div> --}}
    <!-- Preloader Ends -->

    @if($page_title == 'African Retreat Tours and Travels')
    <!-- Header -->
    <header class="head-style-1">
        <div class="upper-head clearfix">
            <div class="container">
                <div class="upper-head-inner">
                    <div class="contact-info pull-left">
                        <div class="contact-info-item"><i class="flaticon-phone-call"></i><p> Phone: <span>{{$Settings->mobile}}</span></p></div>
                        <i class="flaticon-mail"></i><p> Mail: <span>{{$Settings->email}}</span></p>
                        <i class="flaticon-maps-and-flags"></i><p> Location: <span>{{$Settings->location}}</span></p>
                    </div>
                    <div class="login-btn pull-right">
                        <a href="{{url('/traveler-infomation')}}"><i class="fa fa-info"></i> Travel Infomation</a>
                        <a href="{{url('/about-us')}}"><i class="fa fa-info"></i> About Us</a>
                        <a href="{{url('/contact-us')}}"><i class="fa fa-phone"></i> Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Bar --> 
        <div class="navigation head-style-1">  
            <div class="container">
                <div class="navigation-content">
                    <div class="header_menu">
                        <!-- start Navbar (Header) -->
                        <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                            <div class="logo pull-left">
                                <a href="{{url('/')}}">
                                        <img alt="Image"  src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}" class="logo-white">
                                        <img alt="Image"  src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" class="logo-color">
                                    </a>
                            </div>
                            @include('front.menu') 
                            <div id="slicknav-mobile"></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Bar Ends -->

    </header>
    <!-- Header Ends --> 
    @else
<!-- Header -->
<header>
    <div class="upper-head clearfix">
        <div class="container">
            <div class="contact-info">
                <p><i class="flaticon-phone-call"></i> Phone: {{$Settings->mobile}}</p>
                <p><i class="flaticon-mail"></i> Mail: {{$Settings->email}}</p>
                <p><i class="flaticon-maps-and-flags"></i> Location: <span>{{$Settings->location}}</span></p>
            </div>
            <div class="login-btn pull-right">
                    <a href="{{url('/traveler-infomation')}}"><i class="fa fa-info"></i> Travel Infomation</a>
                    <a href="{{url('/about-us')}}"><i class="fa fa-info"></i> About Us</a>
                    <a href="{{url('/contact-us')}}"><i class="fa fa-phone"></i> Contact Us</a>
            </div> 
        </div>
    </div>
</header>
<!-- Header Ends -->

    <!-- Navigation Bar -->
    <div class="navigation">  
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">
                    <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="{{url('/')}}"><img alt="Image" src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}"></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper">
                           @include('front.menu')
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Bar Ends -->
    @endif

    <!-- Content Here -->
    @yield('content')
    <!-- Content Here -->

    <!-- Footer -->
    <footer>
        <div class="footer-upper">
            <div class="container">
                @if($page_title == 'Car Hire - Transfers')

                @else
                <div class="newsletter text-center">
                    <div class="section-title section-title-white text-center">
                        <h2>Newsletter Signup</h2>
                        <div class="section-icon section-icon-white">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <p>Subscribe to our weekly newsletter to get updated on our latest deals</p>
                    </div>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="search">
                            <a href="#"><span class="search_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Sign Up</span></a>
                        </div>
                    </form>
                </div>
                @endif
                <div class="footer-links text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="footer-about footer-margin">
                                <div class="about-logo">
                                    <a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}" alt="Image"></a>
                                </div>
                                <br><br>
                                <div class="about-location">
                                    <ul>
                                        <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> {{$Settings->location}}</li>
                                        <li><i class="flaticon-phone-call"></i> {{$Settings->mobile}}</li> 
                                        <li><i class="flaticon-phone-call"></i> {{$Settings->mobile_one}}</li>                                        
                                        <li><i class="flaticon-mail"></i> {{$Settings->email}}</li>
                                    </ul>
                                </div>
                                <div class="footer-social-links">
                                    <ul>
                                        <li class="social-icon"><a href="{{$Settings->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="{{$Settings->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="{{$Settings->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-icon"><a href="{{$Settings->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        <!-- <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li> -->
                                    </ul>
                                </div>    
                            </div>
                        </div>
                     
                        <div class="col-md-4 col-sm-4">
                            <div class="footer-links-list footer-margin">
                                <h3>Quick Links</h3>
                                <ul>
                                <li><a href="{{url('/')}}/about-us"> About Us <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/')}}/about-us#services"> Our Services <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/')}}/traveler-infomation"> Traveler infomation <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/')}}/copyright"> Copyright <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/')}}/terms-and-conditions"> Terms and Conditions <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                <li><a href="{{url('/')}}/privacy-policy"> Privacy Policy <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="footer-links-list footer-margin">
                                <h3>Featured Tours</h3>
                                <ul>
                                <?php $Destinations = DB::table('category')->OrderBy('orderBy','ASC')->limit('6')->get(); $count = 1; ?>
                                <!-- Remove Space In Link -->
				                @foreach($Destinations as $destination)
                                <?php $uri = str_replace(' ', '-', $destination->cat);  ?>
                                    <li><a href="{{url('/')}}/tour-packages/{{$destination->slung}}"> {{$destination->cat}} <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <div class="copyright-content">
                            <!--<p> <?php echo date('Y'); ?> <i class="fa fa-copyright" aria-hidden="true"></i> {{$Settings->sitename}} | Powered by <a href="https://www.designekta.com" target="_blank">Designekta Studios</a></p>-->
                             <p>2004 - <?php echo date('Y'); ?> <i class="fa fa-copyright" aria-hidden="true"></i> {{$Settings->sitename}} All Rights Reserved</p>
                        
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="payment-content">
                            <ul>
                                <li>We Accept</li>
                                <li>
                                    <img src="{{asset('theme/images/payment1.png')}}" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('theme/images/payment2.png')}}" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('theme/images/payment3.png')}}" alt="Image">
                                </li>
                                <li>
                                    <img src="{{asset('theme/images/payment4.png')}}" alt="Image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->  

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="{{asset('theme/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/plugin.js')}}"></script>
    <script src="{{asset('theme/js/main.js')}}"></script>
    <script src="{{asset('theme/js/main-1.js')}}"></script>
    <script src="{{asset('theme/js/custom-countdown.js')}}"></script>
    <script src="{{asset('theme/js/preloader.js')}}"></script>
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="1cc1aae132f0d651df8707de-|49" defer=""></script>
        <script>
            $('#subscribe-form').on('submit', function (e) {
			$('#subscribe-btn').html('Working..')
				e.preventDefault();

				$.ajax({

					type: 'post',
					url: '{{url('/')}}/subscribe',
					data: $('#subscribe-form').serialize(),
					success: function ($results) {
					$('#email').val('')
					$('#subscribe-btn').html('<i class="fa fa-check"></i>SUBSCRIBED')
					
					}
				});

			});
		</script>

        <script>
            $('#messageForm').on('submit', function (e) {
			$('#messageBtn').html('Working..')
				e.preventDefault();

				$.ajax({

					type: 'post',
					url: '{{url('/')}}/submitMessage',
					data: $('#messageForm').serialize(),
					success: function ($results) {
					$('#email').val('')
					$('#name').val('')
					$('#subject').val('')
					$('#comment').val('')
					$('#messageBtn').html('<i class="fa fa-check"></i> SEND YOUR MESSAGE')
					
					}
				});

			});
		</script>

        <script>
            $('#tour-booking-form').on('submit', function (e) {
			$('#tour-booking-btn').html('Working..')
				e.preventDefault();

				$.ajax({

					type: 'post',
					url: '{{url('/')}}/booktour',
					data: $('#tour-booking-form').serialize(),
					success: function ($results) {
					$('#message').val('')
					$('#name').val('')
					$('#email').val('')
					$('#mobile').val('')
					$('#tour-booking-btn').html('<i class="fa fa-check fa-3x"></i> Your Booking Request Has Been Received')
					
					}
				});

			});
		</script>

        <script>
            $('#hotel-booking-form').on('submit', function (e) {
			$('#hotel-booking-btn').html('Working..')
				e.preventDefault();

				$.ajax({

					type: 'post',
					url: '{{url('/')}}/booktour',
					data: $('#hotel-booking-form').serialize(),
					success: function ($results) {
					$('#message').val('')
					$('#name').val('')
					$('#email').val('')
					$('#mobile').val('')
					$('#hotel-booking-btn').html('<i class="fa fa-check fa-3x"></i> Your Booking Request Has Been Received')
					
					}
				});

			});
		</script>

        <script>
            $('#car-booking-form').on('submit', function (e) {
			$('#car-booking-btn').html('Working..')
				e.preventDefault();

				$.ajax({

					type: 'post',
					url: '{{url('/')}}/booktour',
					data: $('#car-booking-form').serialize(),
					success: function ($results) {
					$('#message').val('')
					$('#name').val('')
					$('#email').val('')
					$('#mobile').val('')
					$('#car-booking-btn').html('<i class="fa fa-check fa-3x"></i> Your Booking Request Has Been Received')
					
					}
				});

			});
		</script>


<!-- Ajax Review -->

 <!--Floating WhatsApp javascript-->
 <script type="text/javascript" src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/floating-wpp.min.js"></script>

<script type="text/javascript">  
    $(function () {
        $('#WAButton').floatingWhatsApp({
            phone: '+254722884773', //WhatsApp Business phone number
            headerTitle: 'Chat with us on WhatsApp!', //Popup Title
            popupMessage: 'Hello, how can we help you?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="{{url('/')}}/uploads/icon/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right" //Position: left | right

        });
    });
</script>  
</body>
@endforeach
</html>