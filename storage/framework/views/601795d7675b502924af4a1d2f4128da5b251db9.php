<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $Banner = DB::table('banners')->where('section','experience')->get(); ?>
<?php $__currentLoopData = $Banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="call_section adventure" style="background:url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($item->image); ?>') center bottom no-repeat fixed;">
    <div class="container clearfix">
        <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
            <div class="block-reveal">
                <div class="block-vertical"></div>
                <div class="box_1" style="border-radius:10px">
                    <h3>Enjoy Great Experiences with us</h3>
                    <p><?php echo html_entity_decode($Settings->welcome); ?></p>
                    <a href="<?php echo e(url('/')); ?>/adventures-and-experiences" class="btn_1 rounded">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/designekta/secret/resources/views/front/experience_banner.blade.php ENDPATH**/ ?>