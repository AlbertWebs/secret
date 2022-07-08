 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Itineraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itineraries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
<?php $Destinations = DB::table('samples')->where('id',$itineraries->product_id)->get(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    
    <section class="hero_in general" style="background: url('<?php echo e(url('/')); ?>/uploads/samples/<?php echo e($destinations->image_one); ?>') <?php echo e($itineraries->banner_position); ?> no-repeat;">
        
            <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
                <div class="container">
                    <h1 class="fadeInUp"><span></span><?php echo e($destinations->title); ?></h1>
                </div>
            </div>
               
        
    </section>
    <!--/hero_in-->

    <div class="bg_color_1">
        <nav class="secondary_nav sticky_horizontal">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <?php if($destinations->price == null or $destinations->price == '0'): ?>
                    <div><h6 class="m-0">Your itinerary</h6></div>
                    <?php else: ?>
                    <div><h6 class="m-0">Your itinerary</h6></div>
                    <?php endif; ?>
                    <div>
                        <h6 class="m-0">
                            <center>
                                <?php if(Session::has('message')): ?>
                                        <div class="alert alert-success"><?php echo html_entity_decode(Session::get('message')); ?></div>
                               <?php endif; ?>
                                </center>
                        </h6>
                    </div>
                    <div><a class="aside-panel-bt btn_1" href="#0">Book Now</a></div>
                </div>
            </div>
        </nav>

        

        <div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="main_title_2">
					<span><em></em></span>
					
					
				</div>
				<div class="row justify-content-between">
					<div class="col-lg-6 wow" data-wow-offset="150">
						<figure class="block-reveal">
							<div class="block-horizzontal"></div>
							<img src="<?php echo e(url('/')); ?>/uploads/samples/<?php echo e($destinations->image_one); ?>" class="img-fluid" alt="">
						</figure>
					</div>
					<div class="col-lg-5">
                        <br><br>
						<p><?php echo html_entity_decode($destinations->content); ?></p>
					</div>
				</div>
				<!--/row-->
			</div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->
        
        <div class="container margin_60_35 adventure_description">
            

       
            <?php $itineries = DB::table('itineries')->where('type','Experience')->where('product_id',$destinations->id)->get(); ?>
            <div class="row mb-5">
               
                <div class="col-lg-12">
                    <div class="pl-lg-4">
                        <div class="timeline">
                            <?php $__currentLoopData = $itineries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itineries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="mb-5">
                                <h3><?php echo e($itineries->day); ?></h3>
                                
                                <p><?php echo html_entity_decode($itineries->content); ?></p>
                                <div class="pictures magnific-gallery clearfix">
                                    <figure style="min-width:400px; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/itineries/<?php echo e($itineries->image_one); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/itineries/<?php echo e($itineries->image_one); ?>" alt=""></a></figure>
                                    <figure style="min-width:400px; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/itineries/<?php echo e($itineries->image_two); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/itineries/<?php echo e($itineries->image_two); ?>" alt=""></a></figure>
                                </div>
                            </div>
                            <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->
       


        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
</main>
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
<div id="panel_dates" class="menu_fixed">
    <a class="aside-panel-bt" href="#0"><i class="icon_close"></i></a>
    <form method="post" action="<?php echo e(url('/submitBooking')); ?>" id="bookingform" autocomplete="off">
        <?php echo e(csrf_field()); ?>

        <input class="form-control" type="hidden" name="type" value="experiences">
        <input class="form-control" type="hidden" value="<?php echo e($destinations->id); ?>" name="id">
        <?php echo $__env->make('front.booking', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
        <?php echo $__env->make('front.cancellation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="layer"></div><!-- /Overlay mask -->
<!-- panel_dates -->

</div>
<!-- page -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master-experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/itineraries.blade.php ENDPATH**/ ?>