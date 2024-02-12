<!-- Main Header -->
<header class="main-header">
        <!-- header-top -->
        <div class="header-top bg-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 column">
                        <div class="top-left">
                            <ul class="social-content">
                                <li>Follow Us:</li>
                                <li><a href="https://www.facebook.com/aheadinc" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/AHEADINC_ORG" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/aheadinc_50years/" target="_blank"><i class="fa-brands fa-instagram" target="_blank"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCysYuXJt1piGms0nTnfziYw" target="_blank"><i class="fa-brands fa-youtube"></i></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 column">
                        <div class="top-right">
                            <ul class="right-content">
                                <li>
                                    <div class="search-box-area">
                                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                                        <div class="search-box">
                                            <div class="form-group">
                                                <input type="search" name="search" placeholder="Search Here" required>
                                                <button type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="tel: (301)530-3697"><i class="fa fa-phone"></i>Call: (301)530-3697</a></li>
                                <li><a href="mailto:info@aheadinc.org"><i class="fa fa-envelope"></i>Email:  info@aheadinc.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- header-top end -->

        <!-- header-bottom -->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 column">
                        <figure class="logo-box">
                            <a href="{{ route('home') }}">
                                <img src="{{ url('images/ahead-logo.png') }}" class="image-logo" alt="">
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li @if(Request::is('/')) class="current" @endif><a href="{{ route('home') }}">Home</a>
                                        </li>
                                        @if(Request::is('about/vision') || Request::is('about/board-of-directors') || Request::is('about/honorary-board') || Request::is('about/ahead-tanzania'))
                                        <li class="current dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('vision') }}">Vision</a></li>
                                                <li><a href="{{ route('board-of-directors') }}">Board of Directors</a></li>
                                                <li><a href="{{ route('honorary-board') }}">Honorary Board</a></li>
                                                <li><a href="{{ route('ahead-tanzania') }}">AHEAD Tanzania</a></li>
                                            </ul>
                                        </li>
                                        @else 
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('vision') }}">Vision</a></li>
                                                <li><a href="{{ route('board-of-directors') }}">Board of Directors</a></li>
                                                <li><a href="{{ route('honorary-board') }}">Honorary Board</a></li>
                                                <li><a href="{{ route('ahead-tanzania') }}">AHEAD Tanzania</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                        @if(Request::is('projects/health') || Request::is('projects/aheadinc-wogo-health-proposal') || Request::is('projects/oral-health') || Request::is('projects/education') || Request::is('projects/agriculture'))
                                        <li class="current dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="{{ route('health') }}">Health</a></li>
                                                <li><a href="{{ route('oral-health') }}">Oral Health</a></li>
                                                <li><a href="{{ route('education') }}">Education</a></li>
                                                <li><a href="{{ route('agriculture') }}">Agriculture (Environmental Sustainability)</a></li>
                                            </ul>
                                        </li>
                                        @else 
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="{{ route('health') }}">Health</a></li>
                                                <li><a href="{{ route('oral-health') }}">Oral Health</a></li>
                                                <li><a href="{{ route('education') }}">Education</a></li>
                                                <li><a href="{{ route('agriculture') }}">Agriculture (Environmental Sustainability)</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                        <li @if(Request::is('adventures')) class="current" @endif><a href="{{ route('adventures') }}">Adventures (Gallery)</a>
                                        </li>  
                                        <!-- <li @if(Request::is('community')) class="current" @endif><a href="{{ route('community') }}">Community</a>
                                        </li>                               -->
                                        <li @if(Request::is('contact')) class="current" @endif><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 clearfix column">
                        <ul class="nav-right pull-right">
                            <li class="donate-box"><button onclick="openDonate()" class="donate-box-btn1">Donate Now</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- header-bottom end -->


        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 column">
                        <figure class="logo-box"><a href="{{ route('home') }}"><img src="{{ url('images/ahead-logo.png') }}" class="image-logo" alt=""></a></figure>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 menu-column">
                        <div class="menu-area">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->      
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix" style="margin: 15px auto!important;">
                                        <li @if(Request::is('/')) class="current" @endif><a href="{{ route('home') }}">Home</a>
                                        </li>
                                        @if(Request::is('about/vision') || Request::is('about/board-of-directors') || Request::is('about/honorary-board') || Request::is('about/ahead-tanzania'))
                                        <li class="current dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('vision') }}">Vision</a></li>
                                                <li><a href="{{ route('board-of-directors') }}">Board of Directors</a></li>
                                                <li><a href="{{ route('honorary-board') }}">Honorary Board</a></li>
                                                <li><a href="{{ route('ahead-tanzania') }}">AHEAD Tanzania</a></li>
                                            </ul>
                                        </li>
                                        @else 
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('vision') }}">Vision</a></li>
                                                <li><a href="{{ route('board-of-directors') }}">Board of Directors</a></li>
                                                <li><a href="{{ route('honorary-board') }}">Honorary Board</a></li>
                                                <li><a href="{{ route('ahead-tanzania') }}">AHEAD Tanzania</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                        @if(Request::is('projects/health') || Request::is('projects/aheadinc-wogo-health-proposal') || Request::is('projects/oral-health') || Request::is('projects/education') || Request::is('projects/agriculture'))
                                        <li class="current dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="{{ route('health') }}">Health</a></li>
                                                <li><a href="{{ route('oral-health') }}">Oral Health</a></li>
                                                <li><a href="{{ route('education') }}">Education</a></li>
                                                <li><a href="{{ route('agriculture') }}">Agriculture (Environmental Sustainability)</a></li>
                                            </ul>
                                        </li>
                                        @else 
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="{{ route('health') }}">Health</a></li>
                                                <li><a href="{{ route('oral-health') }}">Oral Health</a></li>
                                                <li><a href="{{ route('education') }}">Education</a></li>
                                                <li><a href="{{ route('agriculture') }}">Agriculture (Environmental Sustainability)</a></li>
                                            </ul>
                                        </li>
                                        @endif
                                        <li @if(Request::is('adventures')) class="current" @endif><a href="{{ route('adventures') }}">Adventures (Gallery)</a>
                                        </li>  
                                        <!-- <li @if(Request::is('community')) class="current" @endif><a href="{{ route('community') }}">Community</a>
                                        </li>                               -->
                                        <li @if(Request::is('contact')) class="current" @endif><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 clearfix column">
                        <ul class="nav-right pull-right">
                            <li class="donate-box"><button onclick="openDonate()" class="donate-box-btn1 mt-4">Donate Now</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- sticky-header end -->
    </header>
    <!-- End Main Header -->