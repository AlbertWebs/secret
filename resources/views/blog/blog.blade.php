@extends('front.master-blog') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
@foreach ($Blog as $blog)
<main>
    <section class="hero_in general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>{{$blog->title}}</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-9">
                <div class="bloglist singlepost">
                    <p><img alt="" class="img-fluid" src="{{url('/')}}/uploads/blog/{{$blog->image_one}}"></p>
                    <h1>{{$blog->title}}</h1>
                    <div class="postmeta">
                        <?php 
                            $RawDate = $blog->created_at;
                            $FormatDate = strtotime($RawDate);
                            $Month = date('M',$FormatDate);
                            $month = date('m',$FormatDate);
                            $Date = date('d',$FormatDate);
                            $Year = date('Y',$FormatDate);
        
                        ?>
                        <ul>
                            <li><a href="#"><i class="icon_folder-alt"></i> <?php $CategoryName = DB::table('category')->where('id',$blog->cat)->get(); ?> @foreach ($CategoryName as $catName)
                                {{$catName->cat}}
                            @endforeach</a></li>
                            <li><a href="#"><i class="icon_clock_alt"></i> {{$Date}}.{{$Month}}.{{$Year}}</a></li>
                            <li><a href="#"><i class="icon_pencil-edit"></i> {{$blog->author}}</a></li>
                            {{-- <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li> --}}
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content">
                        <div class="dropcaps">
                            <p>{!!html_entity_decode($blog->content)!!}</p>
                        </div>

                       
                    </div>
                    <!-- /post -->
                </div>
                <!-- /single-post -->

                

                <hr>

            </div>
            <!-- /col -->

            @include('blog.sidebar')
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!--/main-->
@endforeach
@endforeach
@endsection
