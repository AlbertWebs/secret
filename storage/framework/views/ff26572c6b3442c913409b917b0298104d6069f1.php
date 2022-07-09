<nav id="menu" class="main-menu">
    <ul>
        <li><span><a href="<?php echo e(url('/')); ?>/">Home</a></span>

        <li><span><a href="<?php echo e(url('/')); ?>/africa-destinations-landing">Destinations</a></span>

        </li>
        <li><span><a href="<?php echo e(url('/')); ?>/adventures-and-experiences">Adventure & Experiences</a></span>

        </li>
        <?php $Countries = DB::table('countries')->get(); ?>
        <?php $__currentLoopData = $Countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><span><a href="<?php echo e(url('/')); ?>/explore/<?php echo e($country->slung); ?>"><?php echo e($country->heading); ?></a></span>
            <ul>
                <?php $Experiences = DB::table('destinations')->where('country',$country->id)->limit(10)->get(); ?>
                <?php $__currentLoopData = $Experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destinations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(url('/')); ?>/africa-destinations/<?php echo e($destinations->slung); ?>"><?php echo e($destinations->title); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <li><span><a href="<?php echo e(url('/')); ?>/plan-my-safaris">Plan My Safari</a></span></li>
        <li><span><a href="<?php echo e(url('/')); ?>/make-payment"><i class="ti-credit-card"></i> Pay Online</a></span></li>
        <li><span><a href="<?php echo e(url('/')); ?>/about-us">About Us</a></span>
            <ul>

                <li><a href="<?php echo e(url('/')); ?>/about-us">About Us</a></li>
                <li><a href="<?php echo e(url('/')); ?>/about-us#why">Why Choose Us</a></li>

            </ul>
        </li>
        <?php $News = DB::table('blog')->get(); ?>
        <?php if($News->isEmpty()): ?>
        <?php else: ?>
        <li><span><a href="<?php echo e(url('/')); ?>/latest-News">Latest News</a></span></li>
        <?php endif; ?>
        <li><span><a href="<?php echo e(url('/')); ?>/contact-us">Contact Us</a></span></li>



    </ul>
</nav>
<?php /**PATH /home/designekta/secret/resources/views/front/menu.blade.php ENDPATH**/ ?>