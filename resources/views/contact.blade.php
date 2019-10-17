@extends ('layouts.user.app')

@section('head')
<meta name="description" content="Dodo is a design, strategy and innovation Company in Lagos Nigeria, offering exceptional services in UX/UI design, Design Research, Branding & Workshops for innovative Companies & teams in Lagos, Nigeria.">
<meta name="keywords" content="design, startegy, innovation, workshops, UX/UI, Branding, Design Research.">
<link rel="canonical" href="index.html">
<meta property=og:site_name content="DIP - DODO Innovation Podcast">
<meta property=og:title content="DIP - DODO Innovation Podcast">
<meta property=og:description content="This is the Design and Innovation Podcast or DIP as we like to call it. Here we break down what design is and its relevance to businesses. Through this podcast, we aim to bring to the forefront the power of design as it relates to business.">
<meta property=og:url content="https://dodo.ng">
<meta property=og:type content=website>
<meta property=og:image content="https://dodo.ng/asset/images/Workshops-page-image.jpg">
<meta property=og:locale content="en-gb">
<meta name=twitter:card content=summary_large_image>
<meta name=twitter:site content="DIP - DODO Innovation Podcast">
<meta name=twitter:title content="DIP - DODO Innovation Podcast">
<meta name=twitter:description content="This is the Design and Innovation Podcast or DIP as we like to call it. Here we break down what design is and its relevance to businesses. Through this podcast, we aim to bring to the forefront the power of design as it relates to business.">
<meta name=twitter:image:src content="https://dodo.ng/asset/images/Workshops-page-image.jpg">
</head>
<body>
<header>
    <nav class="nav-full">
    	<div class="container">
            <a href="/">
                <img src="{{ asset('asset/image/icons/Innovation-LOGO.png')}}" alt="DODO logo" class="logo">
            </a>
            <ul class="main-nav js-main-nav" style="padding: 6px 0;">
                <li class="menu-item"><a class="menu-item-name" href="/">Home</a></li>
                <li class="menu-item"><a class="menu-item-name" href="http://dip.dodo.ng">PODCAST</a></li>
                <li class="menu-item"><a class="menu-item-name" href="https://dodo.ng/workshops">WORKSHOP</a></li>
                <li class="menu-item"><a class="menu-item-name" href="{{ route('contact')}}">CONTACT US</a></li>
            </ul>
            <div class="mobile-nav">
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="overlay">
                    <a href="/"><img src="{{ asset('asset/image/icons/Innovation-LOGO.png')}}" alt="DODO logo" class="logo"></a>
                    <div class="overlayContent">
                        <a href="/">Home</a>
                        <a href="http://dip.dodo.ng">Podcast</a>
                        <a href="https://dodo.ng/workshops">About Us</a>
                        <a href="{{ route('contact')}}">Contact</a>
                    </div>
                </div>  
            </div>
        </div>
    </nav>
</header>
@endsection

@section('content')
<section class="contact">
    <div class="container">
        <div class="col-md-8 col-sm-8">
            <h2>Get In Touch With Us</h2>
        </div>

        <div class="row">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-12 col-md-10 col-sm-12">
                        <div class="career-form">
                            <!-- Begin Mailchimp Signup Form -->
                            <div id="mc_embed_signup career_input_area">
                                <form method="POST" action="{{route('store')}}" id="contact-us" name="mc-embedded-subscribe-form" class="validate" novalidate>
                                    @csrf
                                    <div id="mc_embed_signup_scroll">
                                        <div class="indicates-required text-right"><span class="asterisk">*</span> indicates required</div>
                                        <div class="col-12">
                                            <div class="mc-field-group">
                                                <label for="mce-NAME">Name <span class="asterisk">*</span> </label>
                                                <input type="text" value="" name="NAME" class=" form-control required" required id="mce-NAME">
                                            </div>
                                        </div>
                                        <div class="row ml-3">
                                            <div class="col-12 col-md-6">
                                                <div class="mc-field-group">
                                                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                                                    <input type="email" value="" name="EMAIL" class="form-control required email" required id="mce-EMAIL">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mc-field-group">
                                                    <label for="mce-PHONE">Phone Number </label>
                                                    <input type="text" name="PHONE" class="form-control" value="" id="mce-PHONE">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mc-field-group">
                                                    <label for="mce-COMPANY">Company <span class="asterisk">*</span> </label>
                                                    <input type="text" value="" name="COMPANY" class="form-control" required id="mce-COMPANY">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="mc-field-group">
                                                    <label for="mce-ROLE">Role <span class="asterisk">*</span> </label>
                                                    <input type="text" value="" name="ROLE" class="form-control" required id="mce-ROLE">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mc-field-group">
                                                <label for="mce-MESSAGE">Message <span class="asterisk">*</span> </label>
                                                <textarea type="text" value="" name="MESSAGE" class="form-control required" id="mce-MESSAGE message" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none"></div>
                                            <div class="response" id="mce-success-response" style="display:none"></div>
                                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_26622333f91e30792644adb18_bb61fc8fd0" tabindex="-1" value=""></div>
                                        <div class="col-12">
                                            <button type="submit" class="button contact" id="subscribe">Send Message</button>
                                            <div id="success" style="font-family: Gilroy Bold; color: #000; text-align:center;"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        <!--End mc_embed_signup-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>

@endsection

@section('footer')
<script>
$(document).ready(function() {
$('#contact-us').submit(function(e) {
    e.preventDefault();
    $("#subscribe").html("Sending....");
    $.ajax({
        type: "POST",
        url: '/store',        
        data: $('form#contact-us').serialize(),
        datatype: 'json',
        success : function (data)
           {
                $('#contact-us').trigger("reset");
                $('#subscribe').remove();
                $('#success').html("THANK YOU! YOUR MESSAGE IS NOW RECEIVED, WE WILL GET BACK TO YOU SHORTLY.");
           }
        });

        //just to be sure its not submiting form
        return false;
    });
});
</script>
@endsection