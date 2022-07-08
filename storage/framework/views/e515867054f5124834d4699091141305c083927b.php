<?php $__env->startSection('content'); ?>

<main>
	<section class="hero_in general">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Terms & Conditions</h1>
			</div>
		</div>
	</section>
	<!--/hero_in-->

	<div class="container margin_60_35">
		<div class="row">
			<aside class="col-lg-3" id="sidebar">
					<div class="box_style_cat" id="faq_box">
					
						<ul id="cat_nav">
							<?php $__currentLoopData = $Term; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li><a href="#term_<?php echo e($term->id); ?>" class="active"><i class="icon_document_alt"></i><?php echo e($term->title); ?></a></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<!--/sticky -->
			</aside>
			<!--/aside -->
			
			<div class="col-lg-9" id="faq">
				<h4 class="nomargin_top">Terms of Service</h4>
				<?php $__currentLoopData = $Term; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div role="tablist" class="add_bottom_45 accordion_2" id="term_<?php echo e($term->id); ?>">
					<div class="card">
						<div class="card-header" role="tab">
							<h5 class="mb-0">
								<a data-toggle="collapse" href="#collapseOne_payment" aria-expanded="true"><i class="indicator ti-minus"></i><?php echo e($term->title); ?></a>
							</h5>
						</div>

						<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
							<div class="card-body">
								<p><?php echo html_entity_decode($term->content); ?></p>
							</div>
						</div>
					</div>
					<!-- /card -->
				</div>
				<!-- /accordion payment -->
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!--/container-->
</main>
<!--/main-->


<?php $__env->stopSection(); ?>

     
<?php echo $__env->make('front.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/secrettr/public_html/resources/views/front/terms.blade.php ENDPATH**/ ?>