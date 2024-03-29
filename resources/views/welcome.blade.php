@include('header')

<header class="slider white-space-bottom">
    <div class="container">
        <div class="swiper-container slider-content">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b>  @lang('app.construction') </b> </h2>
                        <p>@lang('services.construction_copy')</p>
                            <a href="{{route('mshenebloba')}}"> @lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                    <!-- end inner -->
                </div>
                 <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b> @lang('app.renovation')</b> </h2>
                        <p>@lang('services.remont_copy')</p>
                        <a href="{{ route('remonti') }}">@lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                    <!-- end inner -->
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b> @lang('app.design') / @lang('app.architecture') </b> </h2>
                        <p>@lang('services.design_copy')</p>
                        <a href="{{ route('dizaini') }}">@lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                    <!-- end inner -->
                </div>
                 <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b>@lang('app.sales')</b> </h2>
                        <p> @lang('services.sales_copy')</p>
                        <a href="{{ route('gayidvebi') }}">@lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                    <!-- end inner -->
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b>@lang('app.technique rental')</b> </h2>
                        <p> @lang('services.technique_copy')</p>
                        <a href="{{ route('teqnikis-gaqiraveba') }}">@lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                    <!-- end inner -->
                </div>
                 <div class="swiper-slide">
                    <div class="inner">
                        <h2> <b>@lang('app.cleaning')</b> </h2>
                        <p> @lang('services.cleaning_copy')</p>
                        <a href="{{ route('dasuftaveba') }}">@lang('app.details') <i class="lni lni-arrow-right"></i></a> </div>
                 </div>
            </div>

            <!-- end swiper-wrapper -->
            <div class="controls">
                <div class="swiper-pagination"></div>
                <!-- end swiper-pagination -->
                <div class="button-prev"><i class="lni lni-arrow-left"></i></div>
                <!-- end button-prev -->
                <div class="button-next"><i class="lni lni-arrow-right"></i></div>
                <!-- end button-next -->
            </div>
            <!-- end controls -->

        </div>
        <!-- end slider-content -->


        <div class="swiper-container slider-content images">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/mshenebloba.svg')}}" alt="mshenebloba">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/remont2.svg')}}" alt="remonti">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/architecture.svg' )}}" alt="architecture">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/gayidvebi.svg')}}" alt="gayidvebi">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/technique1.svg')}}" alt="technique">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="inner">
                        <img src="{{asset('images/dasuftaveba1.svg')}}" alt="dasuftaveba">
                 </div>
            </div>
            </div>
        </div>

    </div>
</header>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 oqroyana-background" >
                <div class="icon-content no-background black-frame-border">
                    <h3>@lang('sales.mtatsminda-hills')</h3>
                    <small class="sales-content oqroyana-content"> <br> @lang('sales.residental-complex') @lang('sales.hills-price') </small> <a href="{{route('oqroyana')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 didube">
                <div class="icon-content no-background black-frame-border">
                    <h3>@lang('sales.didube')</h3>
                    <small class="sales-content oqroyana-content"> <br> @lang('sales.residental-complex') @lang('sales.didube-price')</small> <a href="{{route('megadidube')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 m2">
                <div class="icon-content no-background black-frame-border">
                    <h3> @lang('sales.mirtskhulava')  </h3>
                    <small class="sales-content oqroyana-content"> <br> @lang('sales.residental-complex')  @lang('sales.mirtskhulava-price')</small> <a href="{{route('mirtskhulava')}}">+</a> </div>
            </div>
        </div>
    </div>
</section>



{{--<section class="content-section no-spacing">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h6>OUR HISTORY</h6>--}}
{{--                    <h2>Quality & Passion With<br>--}}
{{--                        Our Services</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-12 -->--}}
{{--            <div class="col-lg-6">--}}
{{--                <figure class="side-image"><img src="images/side-image01.png" alt="Image"></figure>--}}
{{--                <!-- end side-image -->--}}
{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="side-content">--}}
{{--                    <h5>Departure performed exquisite</h5>--}}
{{--                    <p>In it except to so temper mutual tastes working. Interested cultivated its continuing now yet are. Out interested acceptance our <u>partiality affronting</u> unpleasant why add. Esteem garden men yet shy course. Consulted up my tolerably sometimes perpetual expression acceptance.</p>--}}
{{--                    <p>In astonished apartments resolution so an it. Unsatiable on by contrasted to <b>reasonable</b> companions an. Amounted repeated as believed in confined juvenile. </p>--}}
{{--                    <figure><img src="images/signature.png" alt="Image"></figure>--}}
{{--                    <h6>Dennis Rodman</h6>--}}
{{--                    <small>Main Engineer of Consto</small> </div>--}}
{{--                <!-- end side-content -->--}}
{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
<!-- end content-section -->




<section class="content-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                @if ( Config::get('app.locale') == 'ge')
                    <div class="counter-box"> <span class="odometer" data-count="100" data-status="yes">0</span> <span class="value">$-დან</span><br>
                        @elseif( Config::get('app.locale') == 'ru')
                            <div class="counter-box"> от <span class="odometer" data-count="100" data-status="yes">0</span> <span class="value">$</span><br>
                                @else
                                    <div class="counter-box"> from <span class="odometer" data-count="100" data-status="yes">0</span> <span class="value">$</span><br>
                                        @endif                    <h6>@lang('4block.remont')</h6>
                    <p>@lang('4block.block1')</p>
                </div>
                <!-- end counter-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                @if ( Config::get('app.locale') == 'ge')
                    <div class="counter-box"> <span class="odometer" data-count="160" data-status="yes">0</span> <span class="value">$-დან</span><br>
                    @elseif( Config::get('app.locale') == 'ru')
                    <div class="counter-box"> от <span class="odometer" data-count="160" data-status="yes">0</span> <span class="value">$</span><br>
                    @else
                    <div class="counter-box"> from <span class="odometer" data-count="160" data-status="yes">0</span> <span class="value">$</span><br>
                    @endif
                    <h6>@lang('4block.premium-remont')</h6>
                    <p>@lang('4block.block2')</p>
                </div>
                <!-- end counter-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                @if ( Config::get('app.locale') == 'ge')
                    <div class="counter-box"> <span class="odometer" data-count="120" data-status="yes">0</span> <span class="value">$-დან</span><br>
                    @elseif( Config::get('app.locale') == 'ru')
                    <div class="counter-box"> от <span class="odometer" data-count="120" data-status="yes">0</span> <span class="value">$</span><br>
                    @else
                    <div class="counter-box"> from <span class="odometer" data-count="120" data-status="yes">0</span> <span class="value">$</span><br>
                    @endif
                    <h6>@lang('4block.construction')</h6>
                    <p>@lang('4block.block3')</p>
                </div>
                <!-- end counter-box -->
            </div>
            <!-- end col-3 -->
            <div class="col-lg-3 col-md-6">
                @if ( Config::get('app.locale') == 'ge')
                    <div class="counter-box"> <span class="odometer" data-count="600" data-status="yes">0</span> <span class="value">$-დან</span><br>
                    @elseif( Config::get('app.locale') == 'ru')
                    <div class="counter-box"> от <span class="odometer" data-count="600" data-status="yes">0</span> <span class="value">$</span><br>
                    @else
                    <div class="counter-box"> from <span class="odometer" data-count="600" data-status="yes">0</span> <span class="value">$</span><br>
                    @endif
                    <h6>@lang('4block.houses')</h6>
                    <p>@lang('4block.block4')</p>
                </div>
                <!-- end counter-box -->
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->
{{--<section class="content-section white-space-bottom" data-background="#f7f6f1">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="section-title text-left">--}}
{{--                    <h6>FRIEND SALES TEAM</h6>--}}
{{--                    <h2>Projects Completed</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-7 -->--}}
{{--            <div class="col-lg-5">--}}
{{--                <p>Our diverse portfolio represents decades of construction experience backed by a passion for quality, outstanding client service industry technologies.</p>--}}
{{--            </div>--}}
{{--            <!-- end col-5 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--    <div class="swiper-container project-slider">--}}
{{--        <div class="swiper-wrapper">--}}
{{--            <div class="swiper-slide">--}}
{{--                <figure class="project-box"> <a href="#"><img src="images/slide02.jpg" alt="Image"></a>--}}
{{--                    <figcaption>--}}
{{--                        <h5>Life Science Center</h5>--}}
{{--                        <p>The building opened in 2020 and includes more than 120+ flats</p>--}}
{{--                    </figcaption>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <!-- end swiper-slide -->--}}
{{--            <div class="swiper-slide">--}}
{{--                <figure class="project-box"> <a href="#"><img src="images/slide03.jpg" alt="Image"></a>--}}
{{--                    <figcaption>--}}
{{--                        <h5>Life Science Center</h5>--}}
{{--                        <p>The building opened in 2020 and includes more than 120+ flats</p>--}}
{{--                    </figcaption>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <!-- end swiper-slide -->--}}
{{--            <div class="swiper-slide">--}}
{{--                <figure class="project-box"> <a href="#"><img src="images/slide01.jpg" alt="Image"></a>--}}
{{--                    <figcaption>--}}
{{--                        <h5>Life Science Center</h5>--}}
{{--                        <p>The building opened in 2020 and includes more than 120+ flats</p>--}}
{{--                    </figcaption>--}}
{{--                </figure>--}}
{{--            </div>--}}
{{--            <!-- end swiper-slide -->--}}
{{--        </div>--}}
{{--        <!-- Add Pagination -->--}}
{{--        <div class="swiper-pagination"></div>--}}
{{--    </div>--}}
{{--    <!-- end project-slider -->--}}
{{--</section>--}}
<!-- end content-section -->
{{--<section class="content-section no-spacing">--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-title text-left">--}}
{{--                    <h6>ESTIMATIED PRICE</h6>--}}
{{--                    <h2>Sectors We Work In</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-12 -->--}}
{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Commercial</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}

{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Apartments</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}

{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Flats</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}

{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Villas</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}

{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Medical</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}

{{--            <div class="col-lg-4 col-md-6"> <a href="#" class="sector-box"> <span>Industrial</span> <i class="lni lni-arrow-right"></i> </a> </div>--}}
{{--            <!-- end col-4 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
<!-- end content-section -->
{{--<section class="content-section calculator">--}}
{{--    <div class="bg-image" data-background="images/section-bg01.jpg"></div>--}}
{{--    <!-- end bg-image -->--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-title text-left">--}}
{{--                    <h6>ESTIMATIED PRICE</h6>--}}
{{--                    <h2>Mortage Calculator</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-12 -->--}}
{{--            <div class="col-lg-10">--}}
{{--                <form class="form">--}}
{{--                    <div class="row">--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <p>How many rooms :</p>--}}
{{--                            <div class="range-slider">--}}
{{--                                <input class="range-slider__range" type="range" value="4" min="0" max="8" step="1">--}}
{{--                                <span class="range-slider__value">0</span> </div>--}}
{{--                            <!-- edn range-slider -->--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <p>Number of floor :</p>--}}
{{--                            <div class="range-slider">--}}
{{--                                <input class="range-slider__range" type="range" value="2" min="0" max="12" step="2">--}}
{{--                                <span class="range-slider__value">0</span> </div>--}}
{{--                            <!-- edn range-slider -->--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}
{{--                        <div class="form-group col-lg-4 col-md-6">--}}
{{--                            <p>Energy Type :</p>--}}
{{--                            <select>--}}
{{--                                <option>Bank of America</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}

{{--                        <div class="form-group col-lg-4 col-md-6">--}}
{{--                            <p>Bathroom :</p>--}}
{{--                            <select>--}}
{{--                                <option>Bank of America</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}

{{--                        <div class="form-group col-lg-4 col-md-12">--}}
{{--                            <p>Terrace :</p>--}}
{{--                            <div class="yes-no">--}}
{{--                                <input type="radio" name="rdo" id="yes" checked />--}}
{{--                                <input type="radio" name="rdo" id="no"/>--}}
{{--                                <div class="switch">--}}
{{--                                    <label for="yes">Yes</label>--}}
{{--                                    <label for="no">No</label>--}}
{{--                                    <span></span> </div>--}}
{{--                            </div>--}}
{{--                            <!-- end yes-no -->--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <p>Building Materials</p>--}}
{{--                            <input type="checkbox" id="one" checked>--}}
{{--                            <label class="custom-checkbox" for="one"> Cellular Concrete </label>--}}
{{--                            <input type="checkbox" id="two">--}}
{{--                            <label class="custom-checkbox" for="two"> Ventilated Brick </label>--}}
{{--                            <input type="checkbox" id="three">--}}
{{--                            <label class="custom-checkbox" for="three"> Wood </label>--}}
{{--                            <input type="checkbox" id="four">--}}
{{--                            <label class="custom-checkbox" for="four"> Prefabricated </label>--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}
{{--                        <div class="form-group col-12">--}}
{{--                            <div class="info-box"> <i class="lni lni-checkmark-circle"></i> Explore Cheatsheet to Start Using With Your Projects. </div>--}}
{{--                            <!-- end info-box -->--}}
{{--                            <div class="price-box"> <small>Estimated Price :</small> <span>$ 67.800</span> </div>--}}
{{--                            <!-- end price-box -->--}}
{{--                        </div>--}}
{{--                        <!-- end form-group -->--}}
{{--                    </div>--}}
{{--                    <!-- end form row -->--}}
{{--                </form>--}}
{{--                <!-- end mortgage-form -->--}}
{{--            </div>--}}
{{--            <!-- end col-9 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
<!-- end content-section -->
{{--<section class="content-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h6>FRIEND SALES TEAM</h6>--}}
{{--                    <h2>Sales Representives</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-12 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col">--}}
{{--                <div class="sales-team">--}}
{{--                    <figure><img src="images/team01.jpg" alt="Image"></figure>--}}
{{--                    <div class="infos">--}}
{{--                        <h6>Jane O'neil</h6>--}}
{{--                        <small>Chief Financial Offer</small> <b>+ 850 955 26 84</b>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- end infos -->--}}
{{--                </div>--}}
{{--                <!-- end sales-team -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--            <div class="col">--}}
{{--                <div class="sales-team">--}}
{{--                    <figure><img src="images/team02.jpg" alt="Image"></figure>--}}
{{--                    <div class="infos">--}}
{{--                        <h6>Bob Voss</h6>--}}
{{--                        <small>Chief Financial Offer</small> <b>+ 850 955 26 84</b>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- end infos -->--}}
{{--                </div>--}}
{{--                <!-- end sales-team -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--            <div class="col">--}}
{{--                <div class="sales-team">--}}
{{--                    <figure><img src="images/team03.jpg" alt="Image"></figure>--}}
{{--                    <div class="infos">--}}
{{--                        <h6>Christina Eden</h6>--}}
{{--                        <small>Chief Financial Offer</small> <b>+ 850 955 26 84</b>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- end infos -->--}}
{{--                </div>--}}
{{--                <!-- end sales-team -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--            <div class="col">--}}
{{--                <div class="sales-team">--}}
{{--                    <figure><img src="images/team04.jpg" alt="Image"></figure>--}}
{{--                    <div class="infos">--}}
{{--                        <h6>Eric Mendes</h6>--}}
{{--                        <small>Chief Financial Offer</small> <b>+ 850 955 26 84</b>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- end infos -->--}}
{{--                </div>--}}
{{--                <!-- end sales-team -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--            <div class="col">--}}
{{--                <div class="sales-team">--}}
{{--                    <figure><img src="images/team05.jpg" alt="Image"></figure>--}}
{{--                    <div class="infos">--}}
{{--                        <h6>Marie Sheldon</h6>--}}
{{--                        <small>Chief Financial Offer</small> <b>+ 850 955 26 84</b>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>--}}
{{--                            <li><a href="#"><i class="lni lni-instagram-original"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <!-- end infos -->--}}
{{--                </div>--}}
{{--                <!-- end sales-team -->--}}
{{--            </div>--}}
{{--            <!-- end col -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
<!-- end content-section -->
<section class="content-section no-spacing white-space-top" data-background="#f7f6f1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-box">
                    <iframe class="home-youtube-video" src="https://www.youtube.com/embed/CvAJePSEIYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <!-- end video-box -->
            </div>
            <!-- end col-12 -->
        {{--            <div class="col-12">--}}
        {{--                <div class="testimonials-slider">--}}
        {{--                    <div class="swiper-wrapper">--}}
        {{--                        <div class="swiper-slide">--}}
        {{--                            <div class="testimonial">--}}
        {{--                                <p>Consto Construction is one of the best general contractors we've worked with. The entire team tactfully delivered a project of exceptional quality while staying on schedule and under budget. We hope to work with Consto again in the near future!</p>--}}
        {{--                                <i class="lni lni-quotation"></i>--}}
        {{--                                <h6>William James</h6>--}}
        {{--                                <small>Life Touch LLC</small> </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                        </div>--}}
        {{--                        <!-- end swiper-slide -->--}}
        {{--                        <div class="swiper-slide">--}}
        {{--                            <div class="testimonial">--}}
        {{--                                <p>Consto was completely respectful of the building and its surroundings - they immediately became part of our team and they know teamwork! They kept the jobsite clean and safe; working with Consto is nothing short of a first class experience!</p>--}}
        {{--                                <i class="lni lni-quotation"></i>--}}
        {{--                                <h6>William James</h6>--}}
        {{--                                <small>Life Touch LLC</small> </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                        </div>--}}
        {{--                        <!-- end swiper-slide -->--}}
        {{--                        <div class="swiper-slide">--}}
        {{--                            <div class="testimonial">--}}
        {{--                                <p>Thank you for all of your hard work on our project…I seriously don’t know how you did it but it came together SO WELL. I know we are a particular bunch and want things a certain way but you guys did such an amazing job!</p>--}}
        {{--                                <i class="lni lni-quotation"></i>--}}
        {{--                                <h6>William James</h6>--}}
        {{--                                <small>Life Touch LLC</small> </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                        </div>--}}
        {{--                        <!-- end swiper-slide -->--}}
        {{--                        <div class="swiper-slide">--}}
        {{--                            <div class="testimonial">--}}
        {{--                                <p>I was truly impressed with Consto’s quality workmanship and the final product. Consto provided an outstanding team that completed our project on-time and on schedule with no disruption to the staff.</p>--}}
        {{--                                <i class="lni lni-quotation"></i>--}}
        {{--                                <h6>William James</h6>--}}
        {{--                                <small>Life Touch LLC</small> </div>--}}
        {{--                            <!-- end testimonial -->--}}
        {{--                        </div>--}}
        {{--                        <!-- end swiper-slide -->--}}
        {{--                    </div>--}}
        {{--                    <!-- end swiper-wrapper -->--}}
        {{--                    <div class="controls">--}}
        {{--                        <div class="button-prev"><i class="lni lni-arrow-left"></i></div>--}}
        {{--                        <!-- end button-prev -->--}}
        {{--                        <div class="button-next"><i class="lni lni-arrow-right"></i></div>--}}
        {{--                        <!-- end button-next -->--}}
        {{--                    </div>--}}
        {{--                    <!-- end controls -->--}}
        {{--                </div>--}}
        {{--                <!-- end testimonials-slider -->--}}
        {{--            </div>--}}
        <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->
{{--<div class="content-section" data-background="#f7f6f1">--}}
{{--    <div class="container">--}}
{{--        <div class="row no-gutters">--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo01.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo02.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo03.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo04.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo05.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--            <div class="col-lg-2 col-md-4 col-6">--}}
{{--                <figure class="logo-item"> <img src="images/logo06.png" alt="Image"> </figure>--}}
{{--            </div>--}}
{{--            <!-- end col-2 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</div>--}}


{{--<!-- end content-section -->--}}
{{--<section class="content-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="section-title">--}}
{{--                    <h6>REACH UPDATES</h6>--}}
{{--                    <h2>Recent News</h2>--}}
{{--                </div>--}}
{{--                <!-- end section-title -->--}}
{{--            </div>--}}
{{--            <!-- end col-12 -->--}}
{{--            <div class="col-lg-5">--}}
{{--                <div class="recent-news">--}}
{{--                    <figure> <img src="images/slide01.jpg" alt="Image"> </figure>--}}
{{--                    <div class="content"> <small>29 February, 2020</small>--}}
{{--                        <h3><a href="#">Result of a challenge I participated in as a guest on The Futuristic</a></h3>--}}
{{--                        <div class="author"> <img src="images/author01.jpg" alt="Image"> <span>by <b>Consto Editor</b></span> </div>--}}
{{--                        <!-- end author -->--}}
{{--                    </div>--}}
{{--                    <!-- end content -->--}}
{{--                </div>--}}
{{--                <!-- end recent-news -->--}}
{{--            </div>--}}
{{--            <!-- end col-5 -->--}}
{{--            <div class="col-lg-7">--}}
{{--                <div class="row inner">--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="recent-news">--}}
{{--                            <figure> <img src="images/slide02.jpg" alt="Image"> </figure>--}}
{{--                            <div class="content"> <small>29 February, 2020</small>--}}
{{--                                <h3><a href="#">Challenge I participated in as a guest on all font</a></h3>--}}
{{--                                <div class="author"> <img src="images/author01.jpg" alt="Image"> <span>by <b>Consto Editor</b></span> </div>--}}
{{--                                <!-- end author -->--}}
{{--                            </div>--}}
{{--                            <!-- end content -->--}}
{{--                        </div>--}}
{{--                        <!-- end recent-news -->--}}
{{--                    </div>--}}
{{--                    <!-- end col-4 -->--}}
{{--                    <div class="col-md-6">--}}
{{--                        <div class="recent-news">--}}
{{--                            <figure> <img src="images/slide03.jpg" alt="Image"> </figure>--}}
{{--                            <div class="content"> <small>29 February, 2020</small>--}}
{{--                                <h3><a href="#">Participated challenge in as a guest on The Future</a></h3>--}}
{{--                                <div class="author"> <img src="images/author01.jpg" alt="Image"> <span>by <b>Consto Editor</b></span> </div>--}}
{{--                                <!-- end author -->--}}
{{--                            </div>--}}
{{--                            <!-- end content -->--}}
{{--                        </div>--}}
{{--                        <!-- end recent-news -->--}}
{{--                    </div>--}}
{{--                    <!-- end col-4 -->--}}
{{--                </div>--}}
{{--                <!-- end row inner -->--}}
{{--            </div>--}}
{{--            <!-- end col-7 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}
{{--<!-- end content-section -->--}}
@include('footer')

