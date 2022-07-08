 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
		
    <?php $Banner = DB::table('banners')->where('section','destination')->get(); ?>
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero_in tours" style="background: url('<?php echo e(url('/')); ?>/uploads/countries/<?php echo e($country->banner); ?>') center top no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span> <?php echo e($country->title); ?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
        
    
    <div class="bg_color_1 " style="text-align:left !important;">
        <div class="container margin_30_95" style="text-align:left !important;">
            <div class="main_title_2" style="text-align:left !important;">
                
                <h2 class="bg-white"> <?php echo e($country->heading); ?></h2><br>
                <p class="bg-white"><?php echo html_entity_decode($country->content); ?></p>
            </div>
        </div>
    </div>
   
    
    <div class="container container-custom margin_30_95">
       

        <?php $Destinations = DB::table('destinations')->where('country',$country->id)->get(); ?>
    <div class="container container-custom margin_30_95">
        <section class="add_bottom_45">
            <div class="main_title_3">
                <span><em></em></span>
                <h2>Where To Explore</h2>
                <p>Best Desinations in <?php echo e($country->title); ?></p>
            </div>
            <div class="row">
                <?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="<?php echo e(url('')); ?>/africa-destinations/<?php echo e($dest->slung); ?>" class="grid_item">
                        <figure>
                            <div class="score"><strong><i class="ti-location-pin"></i></strong></div>
                            <img style="min-height:233px;" src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($dest->image_one); ?>" class="img-fluid" alt="">
                            <div class="info text-center">
                                <h3><?php echo e($dest->title); ?></h3>
                            </div>
                        </figure>
                    </a>
                </div>
                <!-- /grid_item -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /row -->
            
        </section>
        <!-- /section -->
        
        <section>
            <div class="main_title_3">
                <span><em></em></span>
                <h2>HandPicked Experiences in <?php echo e($country->title); ?></h2>
                <p>Selected Just For You</p>
            </div>
            <?php $Experiences = DB::table('experiences')->where('country',$country->id)->inRandomOrder()->get(); ?>
            <div class="row">
                <?php $__currentLoopData = $Experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <a href="<?php echo e(url('')); ?>/adventures-and-experiences/<?php echo e($exp->slung); ?>" class="grid_item latest_adventure">
                        <figure>
                            
                            <img style="min-height:233px;" src="<?php echo e(url('/')); ?>/uploads/experiences/<?php echo e($exp->image_one); ?>" class="img-fluid" alt="">
                            <div class="info text-center">
                                
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
        
        
        <!-- /section -->

 

    </div>
    
    
</main>
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/countries.blade.php ENDPATH**/ ?>