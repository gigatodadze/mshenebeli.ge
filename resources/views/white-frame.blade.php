@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.white frame') </div> </h1>

        <h6>TBD
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('remonti')}}">@lang('app.renovation')</a></li>
            <li>@lang('app.white frame')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-left">
                    <h6>@lang('app.white frame')</h6>
                    <h2>@lang('white-frame.price')</h2>
                </div>
                <!-- end section-title -->
                <p> @lang('white-frame.paragraph') </p>
{{--                <h2><strong>110$ დან</strong></h2>--}}
{{--                <b> @lang('white-frame.header') </b>--}}
            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li1') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li2') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li3') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li4') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li5') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li6') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li7') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li8') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li9') </li>
                    <li><i class="lni lni-checkmark"></i> @lang('white-frame.li10') </li>
                    @if ( Config::get('app.locale') == 'ru')
                        <li><i class="lni lni-checkmark"></i> @lang('white-frame.li11') </li>
                        <li><i class="lni lni-checkmark"></i> @lang('white-frame.li12') </li>
                    @endif

                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

<br>
<br>
<br>
<br>
<br>


@include('footer');
