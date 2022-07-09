<nav id="menu" class="main-menu">
    <ul>
        <li><span><a href="{{url('/')}}/">Home</a></span>

        <li><span><a href="{{url('/')}}/africa-destinations-landing">Destinations</a></span>

        </li>
        <li><span><a href="{{url('/')}}/adventures-and-experiences">Adventure & Experiences</a></span>

        </li>
        <?php $Countries = DB::table('countries')->get(); ?>
        @foreach ($Countries as $country)
        <li><span><a href="{{url('/')}}/explore/{{$country->slung}}">{{$country->heading}}</a></span>
            <ul>
                <?php $Experiences = DB::table('destinations')->where('country',$country->id)->limit(10)->get(); ?>
                @foreach ($Experiences as $destinations)
                <li><a href="{{url('/')}}/africa-destinations/{{$destinations->slung}}">{{$destinations->title}}</a></li>
                @endforeach
            </ul>
        </li>
        @endforeach
        <li><span><a href="{{url('/')}}/plan-my-safaris">Plan My Safari</a></span></li>
        <li><span><a href="{{url('/')}}/make-payment"><i class="ti-credit-card"></i> Pay Online</a></span></li>
        <li><span><a href="{{url('/')}}/about-us">About Us</a></span>
            <ul>

                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                <li><a href="{{url('/')}}/about-us#why">Why Choose Us</a></li>

            </ul>
        </li>
        <?php $News = DB::table('blog')->get(); ?>
        @if($News->isEmpty())
        @else
        <li><span><a href="{{url('/')}}/latest-News">Latest News</a></span></li>
        @endif
        <li><span><a href="{{url('/')}}/contact-us">Contact Us</a></span></li>



    </ul>
</nav>
