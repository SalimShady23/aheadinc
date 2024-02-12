<div>
    <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ url('images/background/post.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">{{ $postTitle }}</div>
                <ul class="bread-crumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Post</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- blog-details -->
    <section class="news-section blog-details blog-page sec-pad-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="content-style-one">
                            <!-- <figure class="img-box"><img src="{{ url('images/resource/blog-details.jpg') }}" alt=""></figure> -->
                            <div class="sec-title">{{ $postTitle }}</div>
                            <div class="date">{{ \Carbon\Carbon::parse($postCreatedAt)->diffForHumans() }}</div>
                            <div class="text">
                                <p>{{ $postDescription }}</p>
                            </div>
                        </div>
                        <div class="post-share-option clearfix">
                            <ul class="list">
                                <li><a href="#">{{ $postCategory }}</a></li>
                            </ul>
                            <div class="share">
                                <a href="#"><i class="fa fa-share"></i>Share This</a>
                                <div class="social-links">
                                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-google-plus"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="comment-area">
                            <div class="comment-title">Comments ({{ count($comments) }})</div>
                            @foreach($comments as $comment)
                            <div class="comment-box">
                                <div class="comment">
                                    <figure class="thumb-box"><img src="{{ url('images/icons/user.png') }}" alt=""></figure>
                                    <div class="comment-name">{{ ucwords(strtolower($comment->fullName)) }}</div>
                                    <div class="time">{{ \Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}</div>
                                    <!-- <div class="replay"><a href="#">Reply</a></div> -->
                                    <div class="text">{{ $comment->message }}</div>
                                </div>
                            </div>
                            @endforeach                        
                        </div>
                        <div class="comment-form-area">
                            <div class="comment-title">Leave a Comment</div>
                            <form wire:submit.prevent="comment"  method="POST" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" wire:model="fullName" placeholder="Full Name *" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" wire:model="email" placeholder="Email *" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea wire:model="message" placeholder="Message" required=""></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button type="submit" class="theme-btn">Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar default-sidebar-content blog-sidebar-content">
                        <div class="sidebar-categories sidebar-widget">
                            <div class="sidebar-title">Categories</div>
                            <ul class="categories-list">
                                <li><a href="#">{{ $postCategory }}</a></li>
                            </ul>
                        </div>
                        <!-- <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title">Recent News</div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ url('images/resource/post-1.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">No Hunger in South Africa</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ url('images/resource/post-2.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">Clean Water For Every Child</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                            <div class="single-post">
                                <figure class="img-box"><a href="blog-details.html"><img src="{{ url('images/resource/post-3.jpg') }}" alt=""></a></figure>
                                <h4><a href="blog-details.html">Collect Winter Cloths For..</a></h4>
                                <div class="link"><a href="blog-details.html">See Details <i class="fa fa-angle-right"></i></a></div>
                            </div>
                        </div> -->
                        <!-- <div class="sidebar-archive sidebar-widget">
                            <div class="sidebar-title">Keyword</div>
                            <ul class="archive-list clearfix">
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">Child</a></li>
                                <li><a href="#">Children</a></li>
                                <li><a href="#">Food</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details end -->

</div>
