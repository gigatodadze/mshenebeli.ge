@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.construction')</div></h1>
        <h6>@lang('construction.header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.construction')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/mshenebloba-in.jpg')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box mshenebloba">
                    <p>
                        @lang('construction.first-paragraph')                    </p>
                        @lang('construction.second-paragraph')
                    <ul>
                        <li>@lang('construction.li1')</li>
                        <li>@lang('construction.li2')</li>
                        <li>@lang('construction.li3')</li>
                        <li>@lang('construction.li4')</li>
                        <li>@lang('construction.li5')</li>
                        <li>@lang('construction.li6')</li>
                        <li>@lang('construction.li7')</li>

                    </ul>
                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a>
            </div>
        </div>
    </div>
    </div>
</section>





<!-- end container -->
<!-- end content-section -->
{{--<section class="footer-bar">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <figure class="logo"> <img src="{{asset('images/logo.png')}}" alt="Image"> </figure>--}}
{{--                <h2>Live <b>better</b> and <b>beautiful</b></h2>--}}
{{--                <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a>--}}
{{--                <div class="sales-representive">--}}
{{--                    <figure> <img src="images/author01.jpg" alt="Image"> </figure>--}}
{{--                    Sales representative <b>+1 (850) 344 0 66 #20</b> free call ! </div>--}}
{{--                <!-- end sales-representive -->--}}
{{--            </div>--}}
{{--            <!-- end col-12  -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}


@include('footer')

