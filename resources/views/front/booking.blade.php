
    <div class="box_detail booking">
        <h5><strong>Booking:</strong> {{$destinations->title}}</h5>
        <p>{{$destinations->meta}} </p>
        <div class="form-group" id="input_date">
            <input required class="form-control" type="text" name="dates" placeholder="When..">
            <i class="icon_calendar"></i>
        </div>
        @if(Auth::user())
        {{-- From Socialite --}}
        <input class="form-control" type="hidden" name="name" value="{{Auth::user()->name}}">
        <input class="form-control" type="hidden" name="email" value="{{Auth::user()->email}}">
        @endif
        {{-- From Socialite --}}
        <div class="form-group">
            <input required class="form-control" type="text" name="phone_contact" placeholder="Phone Number">
        </div>
        <div class="panel-dropdown">
            <a href="#">Guests <span class="qtyTotal">1</span></a>
            <div class="panel-dropdown-content right">
                <div class="qtyButtons">
                    <label>No of People</label>
                    <input type="text" name="qtyInput" value="1">
                </div>
                {{-- <div class="qtyButtons">
                    <label>Childrens</label>
                    <input type="text" name="qtyInput" value="0">
                </div> --}}
            </div>
        </div>
        <button type="submit" class=" add_top_30 btn_1 full-width purchase">Book now</button>
        {{-- <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Add to wishlist</a> --}}
        <div class="text-center"><small>No money charged in this step</small></div>
    </div>
