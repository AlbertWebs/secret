 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<main>
    <section class="header-video adventure">
        <div id="hero_video">
            <div class="wrapper">
            <div class="container container-custom">
                <small>Introducing</small>
                <h3 style="text-transform: capitalize"><?php echo e($Settings->sitename); ?> Adventures</h3>
                <p>Hosted journeys to extraordinary and unique places.</p>
                <a href="#secret" class="btn_1">Read more</a>
            </div>
        </div>
        </div>
        <img src="<?php echo e(asset('theme/img/video_fix.png')); ?>" alt="" class="header-video--media" data-video-src="<?php echo e(asset('uploads/video/adventure')); ?>" data-teaser-source="<?php echo e(asset('uploads/video/adventure')); ?>" data-provider="" data-video-width="1920" data-video-height="960">
    </section>
    <!-- /header-video -->

    


    <div class="bg_color_1">
    <section class="wow slideInUp" data-wow-duration="2s">
        <div class="container margin_80_55" >
        <div class="main_title_3" >
            <span><em></em></span>
            <p style="max-width:600px">Choose your dates, choose your travel partners, choose your comfort level.
                We do the rest. Let’s start planning your journey.</p>
                 
                 <a href="<?php echo e(url('/')); ?>/plan-my-safaris" class="btn_1">Plan Now</a>
        </div>
        </div>
    </section>
    </div>
    
    
    <div class="container container-custom margin_80_55 wow" data-wow-offset="250" id="secret">
        
        <!-- /section -->

        <section class="wow slideInUp" data-wow-duration="2s">
            <div class="main_title_3" >
                <span><em></em></span>
                <h2>All Experiences</h2>
   
            </div>
            <?php $Experiences = DB::table('experiences')->inRandomOrder()->get(); ?>
            <div class="row">
                <?php $__currentLoopData = $Experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6" style="margin:0px auto">
                    <a href="<?php echo e(url('')); ?>/adventures-and-experiences/<?php echo e($exp->slung); ?>" class="grid_item latest_adventure">
                        <figure>
                            
                            <img style="min-height:233px;" src="<?php echo e(url('/')); ?>/uploads/experiences/<?php echo e($exp->image_one); ?>" class="img-fluid" alt="">
                            <div class="info">
                                
                                <h3><?php echo e($exp->title); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- /grid_item -->
            </div>
            <!-- /row -->
          
        </section>
        <!-- /section -->
    </div>
    <!-- /container -->

    <div class="bg_color_1">
        <div class="container container-custom margin_80_55">
            <div class="main_title_2">
                <h2>Plan Your Trip Easly</h2>
                <p>Planning a trip should never be difficult, we are here to work just that for you</p>
            </div>
            <div class="row adventure_feat text-center">
                <div class="col-md-4">
                    <img src="<?php echo e(asset('theme/img/adventure_icon_1.svg')); ?>" alt="" width="75" height="75">
                    <h3>Itineraries Explained in detail</h3>
                   
                </div>
                <div class="col-md-4">
                    <img src="<?php echo e(asset('theme/img/adventure_icon_2.svg')); ?>" alt="" width="75" height="75">
                    <h3>Room and food included</h3>
                    
                </div>
                <div class="col-md-4">
                    <img src="<?php echo e(asset('theme/img/adventure_icon_3.svg')); ?>" alt="" width="75" height="75">
                    <h3>Everything Well Organized</h3>
                    
                </div>
              
            </div>
            <!-- /container -->
            <br>
            <center><a href="<?php echo e(url('/')); ?>/plan-my-safaris" class="btn_1">Plan My Safari Now</a></center>
            
        </div>
        
    </div>
    <!-- /bg_color_1 -->

    <?php echo $__env->make('front.experience_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/call_section-->
</main>
<!-- /main -->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/adventure.blade.php ENDPATH**/ ?>