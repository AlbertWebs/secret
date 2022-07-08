@extends('front.master-blog') 
@section('content') 
<?php $SiteSettings = DB::table('sitesettings')->get(); ?>
@foreach($SiteSettings as $Settings)
<main>
    <section class="hero_in general">
        <div class="wrapper">
            <div class="container">
                <h1 class="fadeInUp"><span></span>{{$Settings->sitename}} Latest News</h1>
            </div>
        </div>
    </section>
    <!--/hero_in-->

    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-9">
                @foreach ($Blog as $blog)
                <?php 
                    $RawDate = $blog->created_at;
                    $FormatDate = strtotime($RawDate);
                    $Month = date('M',$FormatDate);
                    $month = date('m',$FormatDate);
                    $Date = date('d',$FormatDate);
                    $Year = date('Y',$FormatDate);

                ?>
                <article class="blog wow fadeIn">
                    <div class="row no-gutters">
                        <div class="col-lg-7">
                            <figure>
                                <a href="{{url('/')}}/latest-news/{{$blog->slung}}"><img src="{{url('/')}}/uploads/blog/{{$blog->image_one}}" alt="">
                                    <div class="preview"><span>Read more</span></div>
                                </a>
                            </figure>
                        </div>
                        <div class="col-lg-5">
                            <div class="post_info">
                                <small>{{$Date}}.{{$Month}}.{{$Year}}</small>
                                <h3><a href="{{url('/')}}/latest-news/{{$blog->slung}}">{{$blog->title}}</a></h3>
                                <p>{!!html_entity_decode($blog->meta)!!}</p>
                                <ul>
                                    <li>
                                        <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> {{$blog->author}}
                                    </li>
                                    {{-- <li><i class="icon_comment_alt"></i> 20</li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <!-- /article -->  
                @endforeach
                

                {{-- <nav aria-label="...">
                    <ul class="pagination pagination-sm">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
                <!-- /pagination -->
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
@endsection
