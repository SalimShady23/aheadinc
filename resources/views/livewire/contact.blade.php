<div>

    <!-- page-title -->
    <section class="page-title centred" style="background-image: url({{ url('images/background/contact.jpg') }});">
        <div class="container">
            <div class="content-box">
                <div class="title">Contact Us</div>
                <ul class="bread-crumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 contact-column">
                    <div class="contact-info">
                        <div class="contact-title">Get In Touch</div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="left-column single-info centred">
                                    <div class="icon-box"><i class="fa-solid fa-map contact-icon"></i></div>
                                    <h5>USA</h5>
                                    <div class="text">P.O Box 2172 Rockville, MD 20847-2172</div>
                                    <h5>Tanzania</h5>
                                    <div class="text">P.O Box 1649 Bukoba, Tanzania</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 column">
                                <div class="right-column single-info">
                                    <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                                    <h5>Email</h5>
                                    <div class="text">info@aheadinc.org</div>
                                </div>
                                <div class="right-column single-info">
                                    <div class="icon-box"><i class="fa-solid fa-phone"></i></div>
                                    <h5>Phone No</h5>
                                    <div class="text">(301)530-3697</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 contact-column">
                    <div class="contact-form-area">
                        <div class="contact-title">Send Us A Message</div>
                        <form wire:submit.prevent="contact" class="default-form" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Full Name</label>
                                    <input type="text" wire:model="fullName" placeholder="Enter Full Name" required="">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label>Email Address</label>
                                    <input type="email" wire:model="emailAddress" placeholder="Enter Email Address"  required="">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label>Subject</label>
                                    <input type="text" wire:model="subject" placeholder="Enter Subject" required="">
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <label>Messsage</label>
                                    <textarea wire:model="messages" placeholder="Enter Message" required=""></textarea>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn" data-loading-text="Please wait...">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->

</div>
