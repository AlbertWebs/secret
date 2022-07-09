<?php $__env->startSection('content'); ?>
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
<?php $__currentLoopData = $SiteSettings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Settings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<style>
    iframe {
    height: 550px;
    width: 100%;
}
</style>
<main>


	<div class="bg_color_1" style='min-height:580px'>
		<div class="container">
			<div class="row justify-content-between">

				<div class="col-lg-12">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2 class="bg-white text-center" style="color:#384820; font-weight:600">Make Your Payment</h2><br>
                    </div>
					
					<div class="alert-success" id="message-contact"></div>
					<form method="post" action="<?php echo e(url('/make-payment')); ?>" autocomplete="off">
						<input type="hidden" id="_token" name="_token" value="<?php echo e(csrf_token()); ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input required class="form-control" type="text" id="name_contact" name="first_name">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input required class="form-control" type="text" id="name_contact" name="last_name">
								</div>
							</div>
						</div>

                        <div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Amount</label>
									<input required class="form-control" type="number" id="name_contact" name="amount">
								</div>
							</div>
						</div>
                        <!-- /row -->
                        <div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Phone Number</label>
									<input required class="form-control" type="text" id="phone_contact" placeholder="254723000000" name="mobile">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Email</label>
									<input required class="form-control" type="email" id="email_contact" name="email">
								</div>
							</div>
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
						<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-plan"></p>
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
<!--/main-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master-pesapal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/designekta/secret/resources/views/payments/business/make-payment.blade.php ENDPATH**/ ?>