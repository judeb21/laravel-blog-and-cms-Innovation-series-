@extends('layouts.user.app')

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
    <div class="header-description">
    	<div class="container">
    		<div class="row full-width">
    			<div class="col-sm-9 col-md-8 col-lg-9 header-description__content">
    				<h1>{{$post->author}}</h1>
        			<h2>{{$post->bio}}</h2>
                    <h4>{{$post->authorDescription}}</h4>
    			</div>
    			<div class="col-sm-3 col-md-4 col-lg-3">
                    <div class="header-description__image">
                        <img src="\images\{{$post->image}}">
                    </div>
    			</div>
    		</div>
            <div class="line-break">
                
            </div>
    	</div>
    </div>  
</header>

@endsection

@section('content')
<main>

    <section class="post__body">
        <div class="container">
            <div class="col-lg-9 col-md-9 post__body-content">
            {!!htmlspecialchars_decode($post->body)!!}
            </div>
            
            <div id="social-icon">
                <a class="twitterBtn smGlobalBtn" href="http://twitter.com/share?text=@DODO_Nigeria did this research &url={{route('post', $post->slug)}}" target="_blank"></a>
                <a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/sharer/sharer.php?u={{ route('post', $post->slug)}}" target="_blank"></a>
                <a class="linkedinBtn smGlobalBtn" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('post', $post->slug)}}" target="_blank"></a>
            </div>

            <div class="col-lg-10 col-md-10 post__paginate">
                <div class="row">
                    <div class="col-md-5">
                        @if($prev)
                        <div class="prev">
                            <a href="{{route('post', $prev->slug)}}">
                                <img class="paginate__img" src="\images\{{$prev->image}}" alt="">
                                <p class="title">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.494 31.494" style="enable-background:new 0 0 31.494 31.494; height: 10px;" xml:space="preserve">
                                    <path style="fill:#1E201D;" d="M10.273,5.009c0.444-0.444,1.143-0.444,1.587,0c0.429,0.429,0.429,1.143,0,1.571l-8.047,8.047h26.554  c0.619,0,1.127,0.492,1.127,1.111c0,0.619-0.508,1.127-1.127,1.127H3.813l8.047,8.032c0.429,0.444,0.429,1.159,0,1.587  c-0.444,0.444-1.143,0.444-1.587,0l-9.952-9.952c-0.429-0.429-0.429-1.143,0-1.571L10.273,5.009z"/>
                                    <g></g></svg> Previous post
                                </p>
                                <p class="subtitle">{{ $prev->title }}</p>
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-5 next-post">
                        @if($next)
                        <div class="next">
                            <a href="{{route('post', $next->slug)}}">
                                <img class="paginate__img" src="\images\{{$next->image}}" alt="" srcset="">
                                <p class="title">Next post 
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.49 31.49" style="enable-background:new 0 0 31.49 31.49; height: 10px;" xml:space="preserve">
                                    <path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"/>
                                    <g></g></svg>
                                </p>
                                <p class="subtitle">{{ $next->title }}</p>
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
@endsection

@section('footer')
<script>
    $(document).ready(function(){
    $('.post__body-content a').attr('target', '_blank');
});
</script>
@endsection
