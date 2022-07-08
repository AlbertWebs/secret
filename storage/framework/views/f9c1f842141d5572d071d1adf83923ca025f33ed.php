<div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>">
                    <img width="64" height="64" class="media-object img-thumbnail user-img" alt="<?php echo e(Auth::user()->name); ?>" src="<?php echo e(url('/')); ?>/uploads/admins/<?php echo e(Auth::user()->image); ?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"><small><b> <?php echo e(Auth::user()->name); ?></b></small> </h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a href="<?php echo e(url('/admin')); ?>/editAdmin/<?php echo e(Auth::user()->id); ?>" class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="<?php echo e(url('/admin')); ?>" >
                        <i class="icon-home"></i> Dashboard
	    
                       
                    </a>                   
                </li>

                <li><a href="<?php echo e(url('admin/addExperience')); ?>"><i class="icon-plus"></i>  <i class="icon-map-marker"></i> Add Holiday/Experience </a></li>
                <li><a href="<?php echo e(url('admin/addSample')); ?>"><i class="icon-plus"></i>  <i class="icon-map-marker"></i> Add Sample Safaris </a></li>
                <li><a href="<?php echo e(url('admin/addExtra')); ?>"><i class="icon-plus"></i>  <i class="icon-map-marker"></i> Add Extra Info </a></li>
                
                
                <!-- <li><a href="<?php echo e(url('admin/addCarType')); ?>"><i class="icon-plus"></i>  <i class="icon-truck"></i> Add Car Types </a></li> -->
                <!-- <li><a href="<?php echo e(url('admin/addItinery')); ?>"><i class="icon-plus"></i>  <i class="icon-check"></i> Add Itineries </a></li> -->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-folder-open"></i>  Add itineraries
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <!-- <li><a href="<?php echo e(url('/admin/addItinery')); ?>/Destination"><i class="icon-angle-right"></i> Destination Itineries  </a></li> -->
                        <li><a href="<?php echo e(url('/admin/addItinery')); ?>/Experience"><i class="icon-angle-right"></i> Experiences Itineries   </a></li>
                        
                        
                    </ul>
                </li>
                
                
                
                
                <li><a href="<?php echo e(url('admin/addCategory')); ?>"><i class="icon-plus"></i>  <i class="icon-check"></i> Add Category </a></li>
                <li><a href="<?php echo e(url('admin/addBlog')); ?>"><i class="icon-plus"></i>  <i class="icon-check"></i> Add Blog/News </a></li>
                
                <li><a href="<?php echo e(url('admin/addTestimonial')); ?>"><i class="icon-plus"></i>  <i class="icon-check"></i> Add Testimonial </a></li>
                <li><a href="<?php echo e(url('admin/addAdmin')); ?>"><i class="icon-plus"></i>  <i class="icon-user-md"></i> Add Admin </a></li>
                
                <li class="panel">
                    <a href="#error-navv" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-navv">
                        <i class="icon-folder-open"></i>  Pages
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-navv">
                        <li><a href="<?php echo e(url('/admin/about')); ?>"><i class="icon-angle-right"></i> About  </a></li>
                        <li><a href="<?php echo e(url('/admin/abouts')); ?>"><i class="icon-angle-right"></i> About-2  </a></li>
                        <li><a href="<?php echo e(url('/admin/privacy')); ?>"><i class="icon-angle-right"></i> Privacy  </a></li>
                        <li><a href="<?php echo e(url('/admin/terms')); ?>"><i class="icon-angle-right"></i> Terms  </a></li>
                        <li><a href="<?php echo e(url('/admin/copyright')); ?>"><i class="icon-angle-right"></i> Copyright  </a></li>
                        
                    </ul>
                </li>
                <li><a href="<?php echo e(url('admin/sitesettings')); ?>"><i class="icon-cog"></i> Site Settings </a></li>
                <li><a href="<?php echo e(url('admin/logout')); ?>"><i class="icon-signin"></i> Log Out </a></li>
                 <!-- <center><h5>Inactive Features</h5></center>

                <li><a href="<?php echo e(url('admin/addDaily')); ?>"><i class="icon-plus"></i>  <i class="icon-quote-left"> </i <i class="icon-quote-right"></i>  Add Daily Quote </a></li>
                <li><a href="<?php echo e(url('admin/addBlog')); ?>"><i class="icon-plus"></i>  <i class="icon-pencil"> </i>  Add Blog </a></li>
                <li><a href="<?php echo e(url('admin/addService_rendered')); ?>"><i class="icon-plus"></i>  <i class="icon-wrench"></i> <i class="icon-thumbs-up-alt"></i> Add Service Delivered </a></li>
                <li><a href="<?php echo e(url('admin/addTestimonial')); ?>"><i class="icon-plus"></i>  <i class="icon-thumbs-up-alt"></i> Add Testimonial </a></li>
                <li><a href="<?php echo e(url('admin/addGallery')); ?>"><i class="icon-plus"></i>  <i class="icon-image "></i> Add Gallery </a></li>
                <li><a href="<?php echo e(url('admin/addPricing')); ?>"><i class="icon-plus"></i>  <i class="icon-usd "></i> Add Pricing </a></li>
                <li><a href="<?php echo e(url('admin/addPortfolio')); ?>"><i class="icon-plus"></i>  <i class="icon-suitcase"></i> Add Portfolio </a></li>
                <li><a href="<?php echo e(url('admin/addTraceServices')); ?>"><i class="icon-plus"></i>  <i class="icon-wrench"></i> Add Active Services </a></li>
                <li><a href="<?php echo e(url('admin/addService')); ?>"><i class="icon-plus"></i>  <i class="icon-wrench"></i> Add Services </a></li>
                <li><a href="<?php echo e(url('admin/addPage')); ?>"><i class="icon-plus"></i>  <i class="icon-folder-open"></i> Create Page </a></li>
                <li><a href="<?php echo e(url('admin/addSlider')); ?>"><i class="icon-plus"></i>  <i class="icon-film"></i> Add Slider </a></li>
                <li><a href="<?php echo e(url('admin/gallery')); ?>"><i class="icon-film"></i> Image Gallery </a></li>
                <li><a href="<?php echo e(url('admin/maps')); ?>"><i class="icon-map-marker"></i> Maps </a></li> -->

               
                

               
              

            </ul>

        </div><?php /**PATH /home/secrettr/public_html/resources/views/admin/left.blade.php ENDPATH**/ ?>