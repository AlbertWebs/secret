 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
<?php  $Extra = App\Models\Extra::where('slung',$slung)->get();  ?>
<?php $__currentLoopData = $Extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <section class="hero_in adventure_detail" style="background: url('<?php echo e(url('/')); ?>/uploads/extras/<?php echo e($Extra->image_one); ?>') <?php echo e($Extra->banner_position); ?> no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1> <?php echo e($Extra->title); ?></h1>
                        <p> <?php echo e($destinations->title); ?>,<?php echo e($destinations->location); ?></p>
                    </div>
                    
                </div>
                <!-- /row -->
            </div>
                <!-- /main_info -->
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div><h6 class="m-0"> <?php echo e($Extra->title); ?> </h6></div>
                    <div>
                        <h6 class="m-0">
                            <center>
                                <?php if(Session::has('message')): ?>
                                        <div class="alert alert-success"><?php echo html_entity_decode(Session::get('message')); ?></div>
                               <?php endif; ?>
                                </center>
                        </h6>
                    </div> 
                    <?php if(Auth::user()): ?>
                    <div><a class="aside-panel-bt btn_1" href="#0">Book Now</a></div>
                    <?php else: ?>
                    <div>
                        <a href="#sign-in-dialog" id="sign-in" class="login btn_1" title="Sign In">Book Now</a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
        <div class="container margin_60_35 adventure_description">
            <div class="row mb-5">
               
                <div class="col-lg-12">
                    <div class="pl-lg-4">
                        <p class="lead" style="color:#000000"><?php echo html_entity_decode($Extra->content); ?></p>
                        
                        
                        <!-- /pictures -->
                    </div>
                </div>
            </div>
            <!-- /row -->

        


        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    <?php if($Extra->highlights == null): ?>

    <?php else: ?>
    
    <div class="banner mb-0" style="min-height:650px; background: url('<?php echo e(url('/')); ?>/uploads/extras/<?php echo e($Extra->image); ?>') <?php echo e($Extra->banner_position_bottom); ?> no-repeat">
        <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div style="margin:0 auto">
             
                <p><?php echo html_entity_decode($Extra->highlights); ?></p>
               
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    
    <?php endif; ?>
    
</main>
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
<div id="panel_dates" class="menu_fixed">
    <a class="aside-panel-bt" href="#0"><i class="icon_close"></i></a>
    <form method="post" action="<?php echo e(url('/submitBooking')); ?>" id="bookingform" autocomplete="off">
        <input class="form-control" type="hidden" name="type" value="destinations">
        <input class="form-control" type="hidden" value="<?php echo e($destinations->id); ?>" name="id">
        <?php echo e(csrf_field()); ?>

        <?php echo $__env->make('front.booking', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
            
        <!-- /box_detail booking -->
        <?php echo $__env->make('front.cancellation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="layer"></div><!-- /Overlay mask -->
<!-- panel_dates -->

</div>
<!-- page -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master-experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/destinations_extra.blade.php ENDPATH**/ ?>