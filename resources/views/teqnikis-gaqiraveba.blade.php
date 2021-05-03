@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.technique rental')</div></h1>
        <h6>@lang('tech.header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.technique rental')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/katlavani.jpg')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box">
                    <p>
                        @lang('tech.list-header')
                      </p>
                    <ul>
                        <li>@lang('tech.li1')</li>
                        <li>@lang('tech.li2')</li>
                        <li>@lang('tech.li3')</li>
                        <li>@lang('tech.li4')</li>
                        <li>@lang('tech.li5')</li>
                        <li>@lang('tech.li6')</li>
                        <li>@lang('tech.li7')</li>
                        <li>@lang('tech.li8')</li>
                        @if ( Config::get('app.locale') == 'en' || Config::get('app.locale') == 'ru')
                            <li>@lang('tech.li9')</li>
                        @endif
                    </ul>
                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('app.contact')</a>
                <!-- end services-list-box -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>




@include('footer')
