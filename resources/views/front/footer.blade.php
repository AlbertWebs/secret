<footer class="footer-styles">
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-4 col-md-12 p-r-5">
                <p><img src="{{url('/')}}/uploads/logo/{{$Settings->logoo}}" width="250" alt=""></p>
        
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="{{$Settings->facebook}}"><i class="ti-facebook"></i></a></li>
                        <li><a href="{{$Settings->twitter}}"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="{{$Settings->linkedin}}"><i class="ti-linkedin"></i></a></li>
                    
                        <li><a href="{{$Settings->instagram}}"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 ml-lg-auto">
                <h5>Quick Links</h5>
                <ul class="links" >
                    <?php $Destination = DB::table('experiences')->inRandomOrder()->limit(5)->get(); ?>
                    {{-- @foreach ($Destination as $item)
                    <li><a href="{{url('/')}}/africa-destinations/{{$item->slung}}"> {{$item->title}}</a></li>	
                    @endforeach --}}
                    <li style="float: left;"><a href="{{url('/')}}/contact-us"> Contact Us &nbsp; &nbsp; </a></li>
                    <li style="float: left;"><a href="{{url('/')}}/about-us"> About us &nbsp; &nbsp;</a></li>
                    <li style="float: left;" ><a href="{{url('/')}}/africa-destinations-landing"> Destinations &nbsp; &nbsp;</a></li>
                    <li style="float: left;"><a href="{{url('/')}}/adventures-and-experiences"> Experiences &nbsp; &nbsp;</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="#"><i class="ti-check"></i> {{$Settings->sitename}}</a></li>
                    <li><a href="tel:{{$Settings->mobile_one}}"><i class="ti-mobile"></i> {{$Settings->mobile_one}}</a></li>
                    <li><a href="tel:{{$Settings->mobile}}"><i class="ti-mobile"></i> {{$Settings->mobile}}</a></li>
                    <li><a href="mailto:{{$Settings->email}}"><i class="ti-email"></i> {{$Settings->email}}</a></li>
                    <li><a href="{{$Settings->url}}"><i class="ti-world"></i> {{$Settings->url}}</a></li>
                    
                </ul>
                
            </div>
            <hr>
            {{-- <p style="margin:0 auto; max-width:600px; font-size:11px">
                Secret Trek Africa is fortunate to have access to a number of image galleries through our partnerships with properties in each destination. <br>
                Some of the photographs on our website come from these galleries, and where possible, we cite these sources. 
                However, due to layout limitations, at times citation is not possible.<br><br>
                
                <a style="height:20px; line-height:1px !important;" href="{{url('/credits')}}"  class="btn_1" title="Photo Credit">Photo Credit</a>
            </p> --}}
        </div>
        <!--/row-->
        <hr>
        <div class="row text-center">
            <div class="col-lg-10 col-sm-12 col-xl-12">
                <ul id="additional_links">
                    <li><a href="{{url('/terms-and-conditions')}}">Terms and conditions</a></li>
                    <li><a href="{{url('/credits')}}">Photo Credits</a></li>
                    <li><a href="{{url('/privacy-policy')}}">Privacy</a></li>
                    <li><span><a href="{{url('/copyright')}}">Copyright </a> © <?php echo date('Y'); ?> {{$Settings->sitename}} All Rights Reserved</span></li>
                    <li style="color: #555 !important; opacity:5;">Powered By <a href="https://designekta.com">Designekta Studios </a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>