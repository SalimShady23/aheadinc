<!-- subscribe-section -->
<section class="subscribe-section">
        <div class="container">
            <div class="subscribe-content">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-title">Subscribe To Our Newsletter</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 column">
                        <div class="subscribe-form">
                            <form action="{{ route('subscribe') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your Email Address" required="">
                                    <button type="submit" class="theme-btn">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->


    <!-- main-footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="logo-box"><a href="{{ route('home') }}"><img src="{{ url('images/logo.png') }}" class="image-logo" alt=""></a></figure>
                            <div class="text">
                                <p>Adventures in Health, Education, and Agricultural Development is a 501(c)(3) qualified non-profit and non-governmental organization based in Rockville, Maryland with affiliates in Tanzania, The Gambia and Bermuda.</p>
                            </div>
                            <ul class="footer-social">
                            <li>Follow Us:</li>
                                <li><a href="https://www.facebook.com/aheadinc" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/AHEADINC_ORG" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/aheadinc_50years/" target="_blank"><i class="fa-brands fa-instagram" target="_blank"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCysYuXJt1piGms0nTnfziYw" target="_blank"><i class="fa-brands fa-youtube"></i></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-2 footer-column">
                        <div class="service-widget footer-widget">
                            <div class="footer-title">Explore</div>
                            <ul class="list">
                                <li><a href="{{ route('vision') }}">Vision</a></li>
                                <li><a href="{{ route('board-of-directors') }}">Board Of Directors</a></li>
                                <li><a href="{{ route('health') }}">Health</a></li>
                                <li><a href="{{ route('agriculture') }}">Agriculture (Environmental Sustainability)</a></li>
                                <li><a href="{{ route('adventures') }}">Adventures (Gallery)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-widget">
                        <div class="contact-widget footer-widget">
                            <div class="footer-title">Contacts</div>
                            <div class="text">
                                <p>P.O Box 2172 Rockville, MD 20847-2172</p>
                                <p>P.O Box 1649 Bukoba, Tanzania</p>
                                <p>(301)530-3697</p>
                                <p>info@aheadinc.org</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->