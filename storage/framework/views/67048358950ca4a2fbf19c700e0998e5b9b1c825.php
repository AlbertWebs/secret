<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<main>

<br><br><br>



    <div class="bg_color_1">
        <div class="container margin_80_55" style="">

            <?php echo html_entity_decode($iframe); ?>


        </div>
        <!--/container-->
    </div>
    <!--/bg_color_1-->

</main>
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/secret/resources/views/payments/business/pesapal.blade.php ENDPATH**/ ?>