 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $Destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>	
<main>
    <section class="hero_in adventure_detail" style="background: url('<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_three); ?>') <?php echo e($destinations->banner_position); ?> no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <div class="main_info">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1><?php echo e($destinations->title); ?></h1>
                        <p><?php echo e($destinations->location); ?></p>
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
                    <?php if($destinations->price == null or $destinations->price == '0'): ?>
                    <div><h6 class="m-0"> </h6></div>
                    <?php else: ?>
                    <div><h6 class="m-0"> </h6></div>
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
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2><?php echo e($destinations->title); ?></h2><br>                
                    </div>
                    <div class="pl-lg-4">
                        <p class="lead" style="color:#000000"><?php echo html_entity_decode($destinations->content); ?></p>
                        
                    </div>
                </div>
            </div>
            <!-- /row -->

         <?php $Extra = DB::table('extras')->where('type','dest')->where('product_id',$destinations->id)->get(); ?>
         <?php if($Extra->isEmpty()): ?>

         <?php else: ?>
         
         <div class="bg_color_1">
			<div class="container margin_80_55">
				
                <?php $Count = 1; ?>
                <?php $__currentLoopData = $Extra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($Count % 2 == 0): ?>
                <div class="row">
                    <!-- /box_news -->
					<div class="col-lg-6 wow" data-wow-offset="150">
						<a class="" href="#0">
							<figure><img style="max-width:100%; float:left;" src="<?php echo e(url('/')); ?>/uploads/extras/<?php echo e($extra->image); ?>" alt="">
								
							</figure>
						</a>
                    </div>
                    <div class="col-lg-6">
						<a class="" href="#0">
                            <br><br><br>
                            <h4><?php echo e($extra->title); ?></h4>
                            
                            <p style="color:#000000; font-size:16px;  display: table-cell;  vertical-align: middle;"><?php echo \Illuminate\Support\Str::limit(html_entity_decode($extra->content),500,"..."); ?></p>
                            <center>
                                <a href="<?php echo e(url('/africa-destinations')); ?>/extra/<?php echo e($extra->slung); ?>" id="sign-in" class="login btn_1" title="Sign In">View More</a>
                            </center>
						</a>
					</div>
                </div>
                <?php else: ?> 
                <div class="row bg_color_1">
                    <!-- /box_news -->
					<div class="col-lg-6">
						<a class="" href="#0">
                            <br><br><br>
							<h4><?php echo e($extra->title); ?></h4>
                            <p style="color:#000000; font-size:16px;"><?php echo \Illuminate\Support\Str::limit(html_entity_decode($extra->content),500,"..."); ?></p>
                            <center>
                                <a href="<?php echo e(url('/africa-destinations')); ?>/extra/<?php echo e($extra->slung); ?>" id="sign-in" class="login btn_1" title="Sign In">View More</a>
                            </center>
						</a>
					</div>
					<div class="col-lg-6 wow" data-wow-offset="150">
						<a class="" href="#0">
							<figure><img style="max-width:100%" src="<?php echo e(url('/')); ?>/uploads/extras/<?php echo e($extra->image); ?>" alt="">
							</figure>
						</a>
					</div>
					
                </div>
                <?php endif; ?>
                <?php $Count = $Count+1 ?>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
				
			</div>
			<!-- /container -->
		</div>
        <!-- /bg_color_1 -->
        <?php endif; ?>
         
       
       

        </div>
        <!-- /container -->
    </div>
    <!-- /bg_color_1 -->
    <?php if($destinations->highlights == null): ?>

    <?php else: ?>
    
    <div class="banner mb-0" style="min-height:650px; background: url('<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_two); ?>') <?php echo e($destinations->banner_position_bottom); ?> no-repeat">
        <div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div style="margin:0 auto">
             
                <p><?php echo html_entity_decode($destinations->highlights); ?></p>
               
            </div>
        </div>
        <!-- /wrapper -->
    </div>
    
    <?php endif; ?>
    
    <div class="container margin_60_35 adventure_description">
        <div class="row mb-5">
            
           
            <div class="col-lg-12">
                <div class="main_title_2">
                    <span><em></em></span>
                           
                </div>
                <div class="pl-lg-4">
               
                    <br><br><br>
                    <h2 class="text-center">Photo Galley</h2>
                    <div class="pictures magnific-gallery clearfix text-center" style="margin:0 auto;">
                        <?php if($destinations->image_one == null or $destinations->image_one == 0): ?>
                        <?php else: ?> 
                        <figure style="min-width:30%; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_one); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_one); ?>" alt=""></a></figure>
                        <?php endif; ?>
                        <?php if($destinations->image_two == null or $destinations->image_two == 0): ?>
                        <?php else: ?> 
                        <figure style="min-width:30%; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_two); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_two); ?>" alt=""></a></figure>
                        <?php endif; ?>
                        <?php if($destinations->image_three == null or $destinations->image_three == 0): ?>
                        <?php else: ?> 
                        <figure style="min-width:30%; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_three); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_three); ?>" alt=""></a></figure>
                        <?php endif; ?>
                        <?php if($destinations->image_four == null or $destinations->image_four == 0): ?>
                        <?php else: ?> 
                        <figure style="min-width:30%; min-height:250px;"><a href="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_four); ?>" title="Photo title" data-effect="mfp-zoom-in"><img src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($destinations->image_four); ?>" alt=""></a></figure>
                        <?php endif; ?>

                    </div>
                    <!-- /pictures -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>

    
   
</main>
<!--/main-->
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

<?php echo $__env->make('front.master-experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/destination.blade.php ENDPATH**/ ?>