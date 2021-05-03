@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.design') / @lang('app.architecture')</div></h1>
        <h6> @lang('design.header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.design') / @lang('app.architecture')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->



<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" >
                <img src="{{asset('images/design-architecture.jpg')}}" alt="oqroyana mshenebeli">
            </div>
            <div class="col-lg-7">
                <div class="icon-content design">
                    <strong>@lang('design.list-header')</strong>
                   @lang('design.list-paragraph')
                  <ul>
                  <li>@lang('design.li1')</li>
                  <li>@lang('design.li2')</li>
                  <li>@lang('design.li3')</li>
                  <li>@lang('design.li4')</li>
                  <li>@lang('design.li5')</li>
                  <li>@lang('design.li6')</li>
                  <li>@lang('design.li7')</li>

                  </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" >
                <img src="{{asset('images/11111.jpg')}}" alt="oqroyana mshenebeli">
            </div>
            <div class="col-lg-7">
                <div class="icon-content design">
                    <strong>@lang('design.2list-header')</strong>
                    @lang('design.2list-paragraph')
                    <ul>
                        <li>@lang('design.2li1')</li>
                        <li>@lang('design.2li2')</li>
                        <li>@lang('design.2li3')</li>
                        <li>@lang('design.2li4')</li>
                        <li>@lang('design.2li5')</li>
                        <li>@lang('design.2li6')</li>
                        <li>@lang('design.2li7')</li>
                        <li>@lang('design.2li8')</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
{{--<section class="content-section no-spacing" data-background="{{asset('images/design-architecture.jpg')}}">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-end">--}}
{{--            <div class="col-lg-6 col-md-9">--}}
{{--                <div class="services-list-box">--}}
{{--                    <p>--}}
{{--                    <li>დიზაინერული მომსახურება :</li>--}}
{{--                    <li>ინტერიერის დიზაინი</li>--}}
{{--                    <li> ექსტერიერის დიზაინი</li>--}}
{{--                    <li>3D დიზაინი </li>--}}
{{--                    <li> მოდელირება</li>--}}
{{--                    <li> საინჟინრო გეგმის დახაზვა</li>--}}
{{--                    <li> სახლის/ბინის პროექტირება</li>--}}
{{--                    <li> 3D მოდელირება</li>--}}
{{--                    <li> ვირტუალური ტურები</li>--}}
{{--                     </p>--}}
{{--                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a>--}}
{{--                 </div>--}}
{{--                <!-- end services-list-box -->--}}
{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}



@include('footer')
