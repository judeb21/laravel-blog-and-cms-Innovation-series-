@extends('layouts.user.app')

@section('head')
<meta name="description" content="Dodo is a design, strategy and innovation Company in Lagos Nigeria, offering exceptional services in UX/UI design, Design Research, Branding & Workshops for innovative Companies & teams in Lagos, Nigeria.">
<meta name="keywords" content="design, startegy, innovation, workshops, UX/UI, Branding, Design Research.">
<link rel="canonical" href="/">
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
<header class="header">
    <nav class="nav-center">
    	<div class="container">
			<a href="/">
                <img src="{{ asset('asset/image/icons/Innovation-LOGO.png')}}" alt="DODO logo" class="logo">
            </a>
            <ul class="main-nav js-main-nav" style="padding: 4px 0;">
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
                    <a href="/"><img src="https://dodo.ng/asset/images/dodo-logo.png" alt="DODO logo" class="logo"></a>
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
    <div class="header__description animated fadeInUp delay-2s navbar">
    	<div class="container">
    		<div class="col-sm-12 col-md-12 col-lg-12">
    			<div class="description">
    				<div class="description-img">
    					<img src="asset/image/icons/Innovation-header.png">
    				</div>

    				<h1>A conversation with innovation and <br>strategy leaders around the World</h1>
    			</div>
    		</div>
    	</div>
    </div>  
</header>
@endsection
@section('content')
<main>
	<section class="body_section">
		<div class="container">
			<div class="row">
			@foreach ($posts as $post) 
				<div class="col-lg-6 col-md-6 col-sm-12 post-card">
					<div class="post-card__img">
						<a href="{{ route('post',$post->slug) }}">
							<img src="\images\{{$post->image}}">
						</a>
					</div>
					<div class="post-card__body">
						<a href=""><h2>{{$post->title}}</h2></a>
						<p>{{$post->excerpt}}</p>
						<div class="read-more">
							<span class="spans">
						    	<a class="learners" href="{{ route('post',$post->slug) }}" style="position: relative;"> Read more </a>
					    	</span>
						</div>
					</div>
				</div>
			@endforeach
			</div>
			<div class="col-12 col-md-12 feature">
				<span class="featured">
					 Want To Be Featured? <a class="learners" href="{{ route('contact') }}" style="position: relative;"> Contact Us </a>
				</span>
			</div>
		</div>
	</section>
</main>
@endsection

@section('footer') 
<script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('asset/js/script.js')}}"></script>
@endsection