@extends('front.master')
@section('content')

<main>
	<section class="hero_in general">
		<div class="wrapper">
			<div class="container">
				<h1 class="fadeInUp"><span></span>Copyright Statement</h1>
			</div>
		</div>
	</section>
	<!--/hero_in-->

	<div class="container margin_60_35">
		<div class="row">
			<aside class="col-lg-3" id="sidebar">
					<div class="box_style_cat" id="faq_box">
					
						<ul id="cat_nav">
							@foreach ($Copyright as $term)
							<li><a href="#term_{{$term->id}}" class="active"><i class="icon_document_alt"></i>Copyright Statement</a></li>
							@endforeach
						</ul>
					</div>
					<!--/sticky -->
			</aside>
			<!--/aside -->
			
			<div class="col-lg-9" id="faq">
				<h4 class="nomargin_top">Copyright Statement</h4>
				@foreach ($Copyright as $term)
				<div role="tablist" class="add_bottom_45 accordion_2" id="term_{{$term->id}}">
					<div class="card">
						

						<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
							<div class="card-body">
								<p>{!!html_entity_decode($term->content)!!}</p>
							</div>
						</div>
					</div>
					<!-- /card -->
				</div>
				<!-- /accordion payment -->
				@endforeach
				
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!--/container-->
</main>
<!--/main-->

<!-- END: CONTENT SECTION -->
@endsection

     