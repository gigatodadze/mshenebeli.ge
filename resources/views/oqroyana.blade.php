@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('sales.mtatsminda-hills')</div></h1>
        <h6>@lang('sales.hills-header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('sales.mtatsminda-hills')</li>
        </ul>
    </div>

</header>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" >
                <img src="{{asset('images/oqroyana-outside-1.JPG')}}" alt="oqroyana mshenebeli">
            </div>
<div class="col-lg-4">
    <div class="icon-content">
        @lang('sales.first-block')
    </div>
</div>
<!-- end col-4 -->
</div>
<!-- end row -->
</div>

</section>

<section class="content-section">
    <div class="container">
        <div class="row">

            <div class="col-lg-4">
                <div class="icon-content">
                    @lang('sales.second-block')
                </div>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/oqroyana-outside-2.JPG   ')}}" alt="oqroyana mshenebeli">
            </div>
        </div>
    </div>
</section>


{{--<section class="content-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-lg-12">--}}

{{--                <div class="oqroyana-slider">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="oqroyana-slide"></div>--}}
{{--                        <div class="oqroyana-slide blue "></div>--}}
{{--                        <div class="oqroyana-slide-slide red"></div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                    <div class="swiper-button-prev"></div>--}}
{{--                    <div class="swiper-button-next"></div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}



{{--<div id="myCarousel" class="carousel slide"> <!-- slider -->--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="active item"> <!-- item 1 -->--}}
{{--            <img src={{asset('images/renderi-1.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--        <div class="item"> <!-- item 2 -->--}}
{{--            <img src={{asset('images/renderi-2.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--        <div class="item"> <!-- item 3 -->--}}
{{--            <img src={{asset('images/renderi-3.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--    </div> <!-- end carousel inner -->--}}
{{--    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>--}}
{{--    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>--}}
{{--</div> <!-- end slider -->--}}

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('images/renderi-1.jpg')}}" class="d-block w-100" alt="oqroyana renderi 1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/renderi-2.jpg')}}" class="d-block w-100" alt="oqroyana renderi 2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('images/renderi-3.jpg')}}" class="d-block w-100" alt="oqroyana renderi 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

@include('footer')
