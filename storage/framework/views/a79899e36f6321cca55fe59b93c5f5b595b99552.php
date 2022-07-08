 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <?php if($countries == 'kenya'): ?>
    <?php $Banner = DB::table('banners')->where('section','destination')->get(); ?>
    <?php else: ?> 
    <?php $Banner = DB::table('banners')->where('section','third')->get(); ?>
    <?php endif; ?>
   
    <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banners): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero_in tours" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($banners->image); ?>') center center no-repeat;">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span><?php echo e($countries); ?></h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
  
    
       
       <div class="bg_color_1">
        <div class="container margin_80_55" >
            <div class="main_title_2" style="text-align:left !important;">
                
                <?php $__currentLoopData = $Country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2  class="bg-white">Why go on a custom safari to <strong style="text-transform:capitalize"><?php echo e($countries); ?>?</strong></h2><br>
                <p class="bg-white"><?php echo html_entity_decode($country->content); ?></p> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        </div>
    </div>
    


    <div class="container margin_80_55" >
    <div class="wrapper-grid">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Where to explore</h2><br>                
        </div>
        <div class="row">
          
            <?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="box_grid">
                   
                        <a href="<?php echo e(url('')); ?>/africa-destinations/<?php echo e($features->slung); ?>" class="grid_item latest_adventure">
                            <figure>
                                
                                <img style="min-height:233px;" src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($features->image_one); ?>" class="img-fluid" alt="">
                                <div class="info">
                                    
                                    <h3><?php echo e($features->title); ?></h3>
                                </div>
                            </figure>
                        </a>
                    
                
                </div>
            </div>
            <!-- /box_grid -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- /row -->
        </div>
        <!-- /wrapper-grid -->
        
        
        
    </div>
    <!-- /container -->
    
    
    
    <!-- /bg_color_1 -->
    
</main>
<!--/main-->

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/destinations.blade.php ENDPATH**/ ?>