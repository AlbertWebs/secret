<aside class="col-lg-3">
    {{-- <div class="widget">
        <form>
            <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
            </div>
            <button type="submit" id="submit" class="btn_1 rounded"> Search</button>
        </form>
    </div> --}}
    <!-- /widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>Related Posts</h4>
        </div>
        <ul class="comments-list">
            <?php $LatestBlog = DB::table('blog')->limit(4)->inRandomOrder()->get(); ?>
            @foreach ($LatestBlog as $latest)
            <?php 
                $RawDate = $latest->created_at;
                $FormatDate = strtotime($RawDate);
                $Month = date('M',$FormatDate);
                $month = date('m',$FormatDate);
                $Date = date('d',$FormatDate);
                $Year = date('Y',$FormatDate);

            ?>
            <li>
                <div class="alignleft">
                    <a href="{{url('/')}}/latest-news/{{$latest->slung}}"><img src="{{url('/')}}/uploads/blog/{{$latest->image_one}}" alt=""></a>
                </div>
                <small>{{$Date}}.{{$Month}}.{{$Year}}</small>
                <h3><a href="{{url('/')}}/latest-news/{{$latest->slung}}" title="">{{$latest->title}}</a></h3>
            </li>
            @endforeach
           
            
        </ul>
    </div>
    <!-- /widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>Blog Categories</h4>
        </div>
        <ul class="cats">
            <?php $Category = DB::table('category')->get(); ?>
            @foreach ($Category as $category)
            <li><a href="{{url('/')}}/latest-news/cat/{{$category->slung}}">{{$category->cat}} <span>(<?php echo $BlogsCount = DB::table('blog')->where('cat',$category->id)->count(); ?>)</span></a></li>  
            @endforeach
        </ul>
    </div>
    <!-- /widget -->
    <div class="widget">
        <div class="widget-title">
            <h4>Popular Tags</h4>
        </div>
        <div class="tags">
            <?php $Category = DB::table('category')->get(); ?>
            @foreach ($Category as $category)
            <a href="{{url('/')}}/latest-news/cat/{{$category->slung}}">{{$category->cat}}</a>
            @endforeach
        </div>
    </div>
    <!-- /widget -->
</aside>