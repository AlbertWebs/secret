 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $Country = DB::table('countries')->get(); ?>
<main>
    <?php $Banner = DB::table('banners')->where('section','kenya')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero_in tours" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banners->image); ?>') center top no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Destinations</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  
    
   



        
    
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2" style="max-width:600px; margin:0 auto">
                <span><em></em></span>
                
                <p class="bg-white">Twenty years from now you will be more disappointed by the things you didn't do than by the 
                    ones you did do, so throw off the bowlines, sail away from the safe harbor
                catch the trade winds in your sails.<br>
              <strong>Explore  .  Dream  .  Discover</strong> </p>
              <br><br>
              <i style="font-size: 1.5rem;">~Mark Twain</i>
            </div>
        </div>
    </div>
    
    
    
    <div class="margin_60_35" style="padding:10px">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Explore Our Destinations</h2>
            
        </div>
        <div class="row wow slideInUp" data-wow-duration="1.2s">
            <?php $__currentLoopData = $Country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <a href="<?php echo e(url('')); ?>/destinations/<?php echo e($country->slung); ?>" class="grid_item latest_adventure">
                    <figure style="max-height:364px">
                        <div class="score"><strong><?php echo e($country->heading); ?></strong></div>
                        <img style="height:100%" src="<?php echo e(url('/')); ?>/uploads/countries/<?php echo e($country->image); ?>" class="img-fluid" alt="">
                        <div class="info text-center">
                            
                            <h3 style="text-shadow: 2px 2px #384820;"><?php echo e($country->title); ?></h3>
                            
                            
                        </div>
                    </figure>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /grid_item -->
        </div>
    </div>
    <!-- /container -->
    
    <!-- /bg_color_1 -->

   

    
     <section class="add_bottom_45 bg_color_1" style="padding-top:100px">
        <div class="container bg_color_1 wow" data-wow-offset="250" id="secret">
            <div class="main_title_3 wow slideInUp" data-wow-duration="2s">
                <span><em></em></span>
                <h2>Sample Safaris</h2>
                
            </div>
            <?php $FeaturedExperience = DB::table('samples')->inRandomOrder()->get() ?>

            <div id="reccomended_adventure" class="owl-carousel owl-theme wow slideInUp" data-wow-duration="2.5s">
                <?php $__currentLoopData = $FeaturedExperience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item">
                    <a href="<?php echo e(url('')); ?>/itineraries/<?php echo e($features->slung); ?>" class="grid_item_adventure">
                        <figure>
                            
                            <img style="min-height:200px;" src="<?php echo e(url('/')); ?>/uploads/samples/<?php echo e($features->image_one); ?>" class="img-fluid" alt="">
                            <div class="info">
                                <em><?php echo e($features->location); ?></em>
                                <h3><?php echo e($features->title); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
     </section>
     </div>
     
    
</main>
<!--/main-->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/destinations-landing.blade.php ENDPATH**/ ?>