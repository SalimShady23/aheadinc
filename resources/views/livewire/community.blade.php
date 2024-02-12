<div>
    <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ url('images/background/community.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">Community</div>
                <ul class="bread-crumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Community</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- blog-gird -->
    <section class="news-section blog-grid blog-page overlay-style-one sec-pad-2">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-12 news-column">
                    <div class="single-news-content inner-box">
                        <figure class="image-box">
                            <img src="images/resource/news-1.jpg" alt="">
                            <!--Overlay Box-->
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="{{ route('view-post', ['id' => $blog->id]) }}" class="link"><i class="icon fa fa-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </figure>
                        <div class="lower-content">
                            <h4><a href="{{ route('view-post', ['id' => $blog->id]) }}">{{ $blog->blogTitle }}</a></h4>
                            <div class="time">{{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</div>
                            <div class="text">
                                <p>{{ $blog->blogDescription }}</p>
                            </div>
                            <div class="link text-center"><a href="{{ route('view-post', ['id' => $blog->id]) }}" class="theme-btn-two">Read More</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- blog-grid end -->
</div>
