<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title> მშენებელი.ჯი | mshenebeli.ge </title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="For all kind of construction company website">
    <meta name="keywords" content="consto, business, construction, company, industrial, building, projects, corporate, apartments, flat, condo, brick, website, design, animation, transition, themezinho">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="მშენებელი.ჯი | mshenebeli.ge">
    <meta property="og:image" content="http://www.themezinho.net/consto/preview.png">
    <meta property="og:site_name" content="მშენებელი.ჯი | mshenebeli.ge">
    <meta property="og:title" content="მშენებელი.ჯი | mshenebeli.ge" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://mshenebeli.ge" />

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@consto">
    <meta name="twitter:creator" content="@consto">
    <meta name="twitter:title" content="consto">
    <meta name="twitter:description" content="Consto | Industrial Construction Company">
    <meta name="twitter:image" content="http://www.themezinho.net/consto/preview.png">

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-55TLDD4');</script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55TLDD4"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- CSS FILES -->
    @include('styles')
</head>
<body>
<div class="first-transition"></div>
<!-- end first-transition -->
<div class="page-transition"></div>
<!-- end page-transition -->
<div class="search-box">
    <div class="inner">
        <form>
            <input type="search" placeholder="Tyhe here to search">
            <input type="submit" value="SEARCH">
        </form>
    </div>
</div>
<!-- end search-box -->
<aside class="side-widget">
    <div class="inner">
        <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Image"></a> </div>
        <!-- end logo -->
        <div class="hide-mobile">
            <p>Extremity direction existence as dashwoods do up. Securing <u>marianne led</u> welcomed offended but offering six raptures. </p>
            <figure class="gallery"><img src="images/slide02.jpg" alt="Image"><img src="images/slide03.jpg" alt="Image"></figure>
            <h6 class="widget-title">ADDRESS</h6>
            <address class="address">
                <p>228 Cardigan Road, Leeds<br>
                    Geneva Switzerland</p>
                <p>+1 (850) 344 0 66 #20</p>
            </address>
            <h6 class="widget-title">FOLLOW US</h6>
            <ul class="social-media">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        <!-- end hide-mobile -->
        <div class="show-mobile">
            <div class="languages">
                <ul>
                    <li><a href="#">en</a></li>
                    <li><a href="#">ru</a></li>
                </ul>
            </div>
            <!-- end languages -->
            <div class="site-menu">
                <ul>
                    <li><a href="#">Consto</a><i class="lni lni-chevron-down-circle"></i>
                        <ul>
                            <li><a href="about-company.html">About Company</a></li>
                            <li><a href="core-values.html">Core Values</a></li>
                            <li><a href="leadership.html">Leadership</a></li>
                            <li><a href="our-history.html">Our History</a></li>
                            <li><a href="offices.html">Offices</a></li>
                            <li><a href="certificates.html">Certificates</a></li>
                        </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="projects.html">Projects</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <!-- end site-menu -->
        </div>
        <!-- end show-mobile -->
        <small>© 2020 Consto | Industrial Construction Company</small> </div>
    <!-- end inner -->
</aside>
<!-- end side-widget -->
<nav class="navbar">
    <div class="container">
        <div class="logo"> <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Image"></a> </div>
        <!-- end logo -->

        <div class="site-menu">
            <ul>
                <li><a href="{{ route('services') }}">@lang('app.services')</a>
                    <ul>
                        <li><a href="{{route(\Illuminate\Support\Facades\Route::currentRouteName(),\Illuminate\Support\Facades\App::getLocale()).'/momsakhurebebi'}}">{{__('დაგეგმარება')}}</a></li>
                        <li><a href="core-values.html">ხარჯთაღრიცხვა</a></li>
                    </ul>
                </li>
                <li><a href="services">მომსახურებები</a>
                    <ul>
                        <li><a href="news.html">რემონტი</a>
                        <li><a href="news.html">დასუფთავება</a>
                        <li><a href="news.html">ინტერიერი/ექსტერიერი</a>
                        {{--                    <li><a href="news.html">ექსტერიერი</a>--}}
                    </ul>
                </li>
                <li><a href="contact.html">ფასები</a></li>
                <li><a href="contact.html">ჩვენს შესახებ</a></li>
            </ul>
        </div>
        <div class="languages">
            <ul>
                @foreach (config('app.locales') as $key => $data)
                    <li><a href="{{ route(request()->route()->getName(), array_merge(request()->route()->parameters(), ['locale' => $key])) }}">{{ $data['display'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <!-- end languages -->
    {{--        <li><a href="services.html">მშენებლობა</a></li>--}}
    {{--        <li><a href="projects.html">რემონტი</a></li>--}}
    {{--        <li><a href="about-company.html">დაგეგმარებაZ</a></li>--}}
    {{--        <li><a href="core-values.html">ხარჯთაღრიცხვა</a></li>--}}
    {{--        <li><a href="leadership.html">შავი კარკასი</a></li>--}}
    {{--        <li><a href="our-history.html">თეთრი კარკასი</a></li>--}}
    {{--        <li><a href="offices.html">Offices</a></li>-->--}}
    {{--        მწვანე--}}
    <!-- end site-menu -->
        <div class="search"> <i class="lni lni-search-alt"></i> </div>
        <!-- end search -->

        <div class="hamburger">
            <div id="hamburger"> <span></span> <span></span> <span></span> </div>
            <div id="cross"> <span></span> <span></span> </div>
        </div>
        <!-- end hamburger -->
        <!-- end hamburher -->
        <a href="#sales-specialist-form" class="navbar-button" data-fancybox><i class="lni lni-mobile"></i> <span>SALES SPECIALIST</span></a> </div>
    <!-- end container -->


    <!-- მესენჯერის ჩატი  -->
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v9.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
         attribution="setup_tool"
         page_id="102772504685302"
         theme_color="#ff7e29"
         logged_in_greeting="გამარჯობა! რით შემიძლია დაგეხმაროთ? "
         logged_out_greeting="გამარჯობა! რით შემიძლია დაგეხმაროთ? ">
    </div>

</nav>

