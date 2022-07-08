 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<main>
    <?php $__currentLoopData = $About; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $About): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero_in general" style="background: url('<?php echo e(url('/')); ?>/uploads/images/<?php echo e($About->image); ?>') center center no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
            <div class="container">
                <h1 class="fadeInUp"><span></span>About Secret Trek Africa</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->
    

  

    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Our Origins and Story</h2>
                <p>Our Story is Simple</p>
            </div> 
            
            <div class="row justify-content-between">
                <div class="col-lg-6 wow" data-wow-offset="150">
                    <figure class="block-reveal">
                        <div class="block-horizzontal"></div>
                        <img src="<?php echo e(url('/')); ?>/uploads/images/<?php echo e($About->image); ?>" class="img-fluid" alt="">
                    </figure>
                </div>
                <div class="col-lg-5">
                    <br><br>
                    <?php echo html_entity_decode($About->content); ?>

                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <!--/row-->
        </div>
        <!--/container-->
    </div>
    <!--/bg_color_1-->


        
        <?php $Banner = DB::table('banners')->where('section','experience')->get(); ?>
        <?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <div id="why" class="bg_color_1 testclass" style="background:url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($item->image); ?>') center center no-repeat fixed; ">
                <div class="container margin_60_35"  style="margin:0 auto;">
                    <div class="main_title_3 wow slideInUp" data-wow-duration="1.2s">
                        <span><em></em></span>
                        <h2 style="color:#ffffff;">Why Choose Us</h2><br><br>
                        <p style="color:#ffffff;">A few good reasons to book with Secret Trek Africa.<br><br> We know there are numerous choices out there to choose from! However, we hope our unrivaled knowledge, enthusiasm, and excellent services will win you over. Below is a little about us.</p>
                    </div>
                    <br>
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
            

</main>
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/about.blade.php ENDPATH**/ ?>