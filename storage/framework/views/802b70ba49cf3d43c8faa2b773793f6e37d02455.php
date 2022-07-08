
    <div class="box_detail booking">
        <h5><strong>Booking:</strong> <?php echo e($destinations->title); ?></h5>
        <p><?php echo e($destinations->meta); ?> </p>
        <div class="form-group" id="input_date">
            <input required class="form-control" type="text" name="dates" placeholder="When..">
            <i class="icon_calendar"></i>
        </div>
        <?php if(Auth::user()): ?>
        
        <input class="form-control" type="hidden" name="name" value="<?php echo e(Auth::user()->name); ?>">
        <input class="form-control" type="hidden" name="email" value="<?php echo e(Auth::user()->email); ?>">
        <?php endif; ?>
        
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
                
            </div>
        </div>
        <button type="submit" class=" add_top_30 btn_1 full-width purchase">Book now</button>
        
        <div class="text-center"><small>No money charged in this step</small></div>
    </div>
<?php /**PATH /home/secrettr/public_html/resources/views/front/booking.blade.php ENDPATH**/ ?>