@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.premium quality') </div> </h1>

        <h6>
            @lang('premium-quality.header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('remonti')}}">@lang('app.renovation')</a></li>
            <li>@lang('app.premium quality')</li>
        </ul>
    </div>
</header>

<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-left">
                    <h6>@lang('app.premium quality')</h6>
                    <h2>@lang('premium-quality.price')</h2>
                </div>
                <!-- end section-title -->
                <p>  @lang('premium-quality.second-paragraph')  </p>
                {{--                <h2><strong>150$ დან</strong></h2>--}}
{{--                                <b>YEARS OF EXPERIENCE</b>--}}
            </div>
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">

                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li1')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li2')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li3')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li4')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li5')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li6')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li7')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li8')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li9')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li10')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li11')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li12')</li>
                <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li13')</li>
                @if ( Config::get('app.locale') == 'en' || Config::get('app.locale') == 'ge')
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li14')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li15')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li16')</li>
                @endif
                @if ( Config::get('app.locale') == 'ge')
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li17')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li18')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('premium-quality.li19')</li>
                @endif

                </ul>
        </div>
        <!-- end col-5 -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
</section>


@include('footer');
