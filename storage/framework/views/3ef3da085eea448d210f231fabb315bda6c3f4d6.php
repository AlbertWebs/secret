<footer class="footer-styles">
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-4 col-md-12 p-r-5">
                <p><img src="<?php echo e(url('/')); ?>/uploads/logo/<?php echo e($Settings->logoo); ?>" width="250" alt=""></p>
        
                <div class="follow_us">
                    <ul>
                        <li>Follow us</li>
                        <li><a href="<?php echo e($Settings->facebook); ?>"><i class="ti-facebook"></i></a></li>
                        <li><a href="<?php echo e($Settings->twitter); ?>"><i class="ti-twitter-alt"></i></a></li>
                        <li><a href="<?php echo e($Settings->linkedin); ?>"><i class="ti-linkedin"></i></a></li>
                    
                        <li><a href="<?php echo e($Settings->instagram); ?>"><i class="ti-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 ml-lg-auto">
                <h5>Quick Links</h5>
                <ul class="links" >
                    <?php $Destination = DB::table('experiences')->inRandomOrder()->limit(5)->get(); ?>
                    
                    <li style="float: left;"><a href="<?php echo e(url('/')); ?>/contact-us"> Contact Us &nbsp; &nbsp; </a></li>
                    <li style="float: left;"><a href="<?php echo e(url('/')); ?>/about-us"> About us &nbsp; &nbsp;</a></li>
                    <li style="float: left;" ><a href="<?php echo e(url('/')); ?>/africa-destinations-landing"> Destinations &nbsp; &nbsp;</a></li>
                    <li style="float: left;"><a href="<?php echo e(url('/')); ?>/adventures-and-experiences"> Experiences &nbsp; &nbsp;</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5>Contact with Us</h5>
                <ul class="contacts">
                    <li><a href="#"><i class="ti-check"></i> <?php echo e($Settings->sitename); ?></a></li>
                    <li><a href="tel:<?php echo e($Settings->mobile_one); ?>"><i class="ti-mobile"></i> <?php echo e($Settings->mobile_one); ?></a></li>
                    <li><a href="tel:<?php echo e($Settings->mobile); ?>"><i class="ti-mobile"></i> <?php echo e($Settings->mobile); ?></a></li>
                    <li><a href="mailto:<?php echo e($Settings->email); ?>"><i class="ti-email"></i> <?php echo e($Settings->email); ?></a></li>
                    <li><a href="<?php echo e($Settings->url); ?>"><i class="ti-world"></i> <?php echo e($Settings->url); ?></a></li>
                    
                </ul>
                
            </div>
            <hr>
            
        </div>
        <!--/row-->
        <hr>
        <div class="row text-center">
            <div class="col-lg-10 col-sm-12 col-xl-12">
                <ul id="additional_links">
                    <li><a href="<?php echo e(url('/terms-and-conditions')); ?>">Terms and conditions</a></li>
                    <li><a href="<?php echo e(url('/credits')); ?>">Photo Credits</a></li>
                    <li><a href="<?php echo e(url('/privacy-policy')); ?>">Privacy</a></li>
                    <li><span><a href="<?php echo e(url('/copyright')); ?>">Copyright </a> © <?php echo date('Y'); ?> <?php echo e($Settings->sitename); ?> All Rights Reserved</span></li>
                    <li style="color: #555 !important; opacity:5;">Powered By <a href="https://designekta.com">Designekta Studios </a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer><?php /**PATH /home/designekta/secret/resources/views/front/footer.blade.php ENDPATH**/ ?>