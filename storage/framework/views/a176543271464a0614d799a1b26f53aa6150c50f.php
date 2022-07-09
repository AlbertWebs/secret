 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
    <!-- Slider -->
		<div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%;height:750px;">
                <?php $Sliders = DB::table('slider')->limit(5)->get(); ?>
                <?php $__currentLoopData = $Sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<!-- first slide -->
				<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:85;">
					<img style="filter: brightness(50%);" src="<?php echo e(url('/')); ?>/uploads/slider/<?php echo e($sliders->image); ?>" class="ls-bg tinted" alt="<?php echo e($Settings->sitename); ?>">
					<h3 class="ls-l slide_typo" style="top: 47%; left: 50%;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;"><strong style="font-family: Papyrus, fantasy !important;">Passionate . Creative . Knowledgeable</strong></h3>
					<p class="ls-l slide_typo_2" style="top:55%; left:50%; text-transform: capitalize;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">
						<i><strong><?php echo e($sliders->name); ?></strong></i>
					</p>
					<p class="ls-l" style="top:70%; left:50%;" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;"><a class="btn_1 rounded" data-ls="durationin:2000;delayin:1400;easingin:easeOutElastic;" href='<?php echo e(url('/')); ?>/about-us'>Read more</a></p>
					
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		<!-- End layerslider -->
    
    
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2" style="max-width:600px; margin:0 auto;">
                <span><em></em></span>
                <h2 style="color:#000000;" class="bg-white wow slideInUp" data-wow-duration="1.2s">Welcome to <?php echo e($Settings->sitename); ?></h2><br>
                <p style="color:#000000;" class="bg-white wow slideInUp" data-wow-duration="1.6s"><?php echo html_entity_decode($Settings->welcome); ?></p>
                <p class="text-center wow slideInUp" data-wow-duration="1.9s"><a href="<?php echo e(url('/contact-us')); ?>" class="btn_1 rounded"><i class="ti-mobile"></i> Contact Us</a></p>
            </div>
        </div>
    </div>
    

        
        <?php $Banner = DB::table('banners')->where('section','experience')->get(); ?>
        <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div class="bg_color_1 testclass" style="background:url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($item->image); ?>') center center no-repeat fixed; ">
                <div class="container margin_60_35"  style="margin:0 auto;">
                    <div class="main_title_3 wow slideInUp" data-wow-duration="1.2s">
                        <span><em></em></span>
                        <h2 style="color:#ffffff;">Why Choose Us</h2><br><br>
                        <p style="color:#ffffff;">A few good reasons to book with Secret Trek Africa.<br><br> We know there are numerous choices out there to choose from! However, we hope our unrivaled knowledge, enthusiasm, and excellent services will win you over. Below is a little about us.</p>
                    </div>
                    <br><br>
                    <div class="list_articles add_bottom_30 clearfix wow slideInUp" data-wow-duration="1.2s">
                        <ul>
                            <li class="text-white">
                                <a style="color:#ffffff;" href="#0">
                                    <i class="icon-ok-squared"> We are experts</i>
                                </a>
                            </li>
                            <li>
                                <a style="color:#ffffff;" href="#0" href="#0">
                                    <i class="icon-ok-squared"> We offer excellent personalized service and quality guaranteed</i>
                                </a>
                            </li>
                            <li>
                                <a style="color:#ffffff;" href="#0" href="#0">
                                    <i class="icon-ok-squared">
                                        Emergency air evacuation to all our clients while on safari to ensure medical treatment and emergency transportation are available should the need arise.
                                    </i>
                            </a>
                           </li>
                           <li class="no-italics"><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">We take care of every detail so you can enjoy your safari</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">Clients have the freedom of booking any safari to suit their needs and we will design it.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">We use camps and lodges that we have inspected and vetted following strict quality standards to ensure our clients get the best accommodation and service while on safari.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">We have a close relationship with lodges, camps, airlines, and other suppliers that we use and get the best contract rates and availability. This makes your safari less expensive when booking with us.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">24 hours turn – around time for your requests. Furthermore, our help and support do not stop once you have booked and paid. We are on call 24/7 in case anything doesn’t go as planned while on the trip</i></a></li>
        
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">Meet and assist service on arrival and departure on all our safaris.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">Our tour consultants are passionate about what they do and have first-hand knowledge of the destinations we recommend to our clients.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">Our itineraries are perfected by experience and local knowledge</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">We use our own state of the art 4WD safari vehicles that are comfortable with large windows to maximize game viewing pleasure and each guest gets a window seat.</i></a></li>
                           <li><a style="color:#ffffff;" href="#0" href="#0"><i class="icon-ok-squared">Our driver-guides are well trained, experienced, and knowledgeable.</i></a></li>
                        </ul>
                    </div>
                    <!-- /list_articles -->
                </div>
                <!-- /container -->
            </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!-- /bg_color_1 -->
            


    <?php $Destinations = DB::table('destinations')->where('popular','1')->limit(4)->get(); ?>
    <div class="container container-custom margin_30_95">
       
        
        <section>
            <div class="main_title_3 wow slideInUp" data-wow-duration="1.2s">
                <span><em></em></span>
                <h2>Popular Experiences</h2>
                <p style="visibility: hidden">Most Popular Experiences</p>
            </div>
            <?php $Experiences = DB::table('experiences')->inRandomOrder()->limit(9)->get(); ?>
            <div class="row wow slideInUp" data-wow-duration="1.2s">
                <?php $__currentLoopData = $Experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-6 col-md-6">
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



    
       <?php $Samples = DB::table('samples')->limit(12)->get(); ?>
        <?php if($Samples->isEmpty()): ?>
        <?php else: ?>
            
        <div class="bg_color_1 add_bottom_45 mb-0">
            <div class="margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2 class="bg-white wow slideInUp" data-wow-duration="1.2s">Sample Safaris</h2><br>
                    <p class="wow slideInUp" data-wow-duration="1.2s" style="max-width:980px; margin:0 auto; color:#000000">
                        We handcraft any itineraries to suit you exclusively, providing that it is all logistically possible with your time frame and budget. So please note this page is merely here to give you an idea of some of our favourite combinations. We hope this serves as a useful tool for not just inspiration, but so you can work out the kind of trip you can get for your budget and time frame.
                    </p>
                </div>
                
                <div class="wrapper-grid wow slideInUp" data-wow-duration="1.2s">
                    <div class="row text-center">
                        <?php $__currentLoopData = $Samples; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $countries): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4 col-lg-4 col-sm-6 col-md-6" style="margin:0 auto;">
                            <div class="box_grid">
                                <a href="<?php echo e(url('')); ?>/itineraries/<?php echo e($countries->slung); ?>" class="grid_item latest_adventure">
                                    <figure class="ke-tz">
                                        <div class="score"><strong>View Itinerary</strong></div>
                                        <img class="sample-image" src="<?php echo e(url('/')); ?>/uploads/samples/<?php echo e($countries->image_one); ?>" class="img-fluid" alt="">
                                        <div class="info">
                                            <h3><?php echo e($countries->title); ?></h3>
                                            
                                            <em>Duration: <?php $Itinerary = DB::table('itineries')->where('product_id',$countries->id)->count(); echo $Itinerary; ?> Days</em>    
                                            
                                        </div>
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <!-- /box_grid -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                         
            </div>
            <!-- /container -->
        </div>

        <?php endif; ?>
    
    

    
    

    
    <div class="container container-custom margin_80_55 wow" data-wow-offset="250" id="secret">
        <section class="add_bottom_45">
            <div class="main_title_3 wow slideInUp" data-wow-duration="2s">
                <span><em></em></span>
                <h2>Our Popular Destinations</h2>
                <p>Best Destinations Handpicked For Just You</p>
            </div>
            <?php $FeaturedExperience = DB::table('destinations')->OrderBy('country')->limit(24)->get() ?>
  
                <div class="row">
                    <?php $__currentLoopData = $FeaturedExperience; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $features): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6" style="margin:0px auto">
                        <a href="<?php echo e(url('')); ?>/africa-destinations/<?php echo e($features->slung); ?>" class="grid_item latest_adventure">
                            <figure>
                                
                                <img style="min-height:233px;" src="<?php echo e(url('/')); ?>/uploads/destinations/<?php echo e($features->image_one); ?>" class="img-fluid" alt="">
                                <div class="info">
                                    <em><?php echo e($features->location); ?></em>
                                    <h3><?php echo e($features->title); ?></h3>
                                </div>
                            </figure>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- /grid_item -->
                </div>
               
        </section>
        <!-- /section -->

      
    </div>
    <!-- /container -->

    

   

    
    <?php $Blog = DB::table('blog')->limit(4)->get(); ?>
    <?php if($Blog->isEmpty()): ?>

    <?php else: ?>
    <div class="">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h3>News and Events</h3>
                <p>Stay updated</p>
            </div>
            <div class="row">
                <?php $__currentLoopData = $Blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6">
                    <?php 
                        $RawDate = $item->created_at;
                        $FormatDate = strtotime($RawDate);
                        $Month = date('M',$FormatDate);
                        $month = date('m',$FormatDate);
                        $Date = date('d',$FormatDate);
                        $Year = date('Y',$FormatDate);

                    ?>
                    <a class="box_news" href="<?php echo e(url('/')); ?>/latest-news/<?php echo e($item->slung); ?>">
                        <figure><img src="<?php echo e(url('/')); ?>/uploads/blog/<?php echo e($item->image_one); ?>" alt="">
                            <figcaption><strong><?php echo e($Date); ?></strong><?php echo e($Month); ?></figcaption>
                        </figure>
                        <ul>
                            <li><?php echo e($item->author); ?></li>
                            <li><?php echo e($Date); ?>.<?php echo e($month); ?>.<?php echo e($Year); ?></li>
                        </ul>
                        <h4><?php echo e($item->title); ?></h4>
                        <p><?php echo html_entity_decode($item->meta); ?></p>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="<?php echo e(url('/')); ?>/latest-news" class="btn_1 rounded">View all News</a></p>
        </div>
        <!-- /container -->
    </div>
    <?php endif; ?>
    <!-- /bg_color_1 -->

    <?php echo $__env->make('front.experience_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</main>
<!-- /main -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/secret/resources/views/front/index.blade.php ENDPATH**/ ?>