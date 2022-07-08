 
<?php $__env->startSection('content'); ?> 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<main>
	<?php $Banners = DB::table('banners')->where('section','contact')->get();  ?>
    <?php $__currentLoopData = $Banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $About): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <section class="hero_in general" style="background: url('<?php echo e(url('/')); ?>/uploads/banners/<?php echo e($About->image); ?>') center center no-repeat;">
        <div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.7)">
            <div class="container">
                <h1 class="fadeInUp"><span></span>Contact Us</h1>
            </div>
        </div>
    </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--/hero_in-->

	<div class="contact_info">
		<div class="container">
			<ul class="clearfix">
				<li>
					<i class="pe-7s-map-marker"></i>
					<h4>Address</h4>
					<span><?php echo e($Settings->address); ?> <br ><?php echo e($Settings->location); ?></span>
				</li>
				<li>
					<i class="pe-7s-mail-open-file"></i>
					<h4>Email address</h4>
					<span><?php echo e($Settings->email); ?> <br> <?php echo e($Settings->email_one); ?><br></span>

				</li>
				<li>
					<i class="pe-7s-phone"></i>
					<h4>Contacts info</h4>
					<span><?php echo e($Settings->mobile); ?> | <?php echo e($Settings->mobile); ?><br><small>Monday to Friday 0830hrs - 1730hrs </small><br>
						<small>Saturday 0900hrs - 1300hrs </small><br>
						<small>Sunday Closed </small>
					</span>
				</li>
			</ul>
		</div>
	</div>
	<!--/contact_info-->

	<div class="bg_color_1">
		<div class="container margin_80_55">
			<div class="row justify-content-between">
			
				<div class="col-lg-12">
					<h4>Send a message</h4>
					<p>Feel Free To Write To Us</p>
					<div class="alert-success" id="message-contact"></div>
					<form method="post" action="<?php echo e(url('/submitMessage')); ?>" id="contactform" autocomplete="off">
						<input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
									<input required class="form-control" type="text" id="name_contact" name="name_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last name</label>
									<input required class="form-control" type="text" id="lastname_contact" name="lastname_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input required class="form-control" type="email" id="email_contact" name="email_contact">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Telephone</label>
									<input required class="form-control" type="text" id="phone_contact" name="phone_contact">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
						</div>
						<?php
						$ops = array('-', '+');
						$answer = -1;
					
						$num1 = rand(0, 15);
						$num2 = rand(0, 15);

						$answer = $num1 + $num2;
						
						?>
						<input type="hidden" name="correct_answer" id="correct_answer" value="<?php echo e($answer); ?>">
                        <input required class="form-control" value="<?php echo e($answer); ?>" type="hidden" id="verify_contact" name="verify_contact">
						
                        <div class="clearfix"></div>
                        <br>
                        <div class="col-lg-12 col-md-12" id="TheCapcha">
                            <div class="g-recaptcha" data-sitekey="6LfS8h4aAAAAAByJ5fk0AuZXNCDscT0y6T8CvbpP" data-callback="correctCaptcha"></div>
                            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <br>
						<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
					</form>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_color_1 -->
</main>
<!--/main-->
<script>
    $("form").each(function() {
        $(this).find(':input[type="submit"]').prop('disabled', true);
    });
    function correctCaptcha() {
        $("form").each(function() {
            $(this).find(':input[type="submit"]').prop('disabled', false);
        });
    }
</script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/contact.blade.php ENDPATH**/ ?>