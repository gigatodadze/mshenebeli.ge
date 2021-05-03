@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.green frame') </div> </h1>

        <h6>TBD
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('remonti')}}">@lang('app.renovation')</a></li>
            <li>@lang('app.green frame')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-left">
                    <h6>@lang('app.green frame')</h6>
                    <h2>@lang('green-frame.price')</h2>
                </div>
                <p> @lang('green-frame.top-paragraph') </p>
            </div>
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li1')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li2')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li3')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li4')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li5')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li6')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li7')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li8')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li9')</li>
                    <li><i class="lni lni-checkmark"></i> @lang('green-frame.li10')</li>
                    @if ( Config::get('app.locale') == 'ru')
                        <li><i class="lni lni-checkmark"></i> @lang('green-frame.li11')</li>
                     @endif
                </ul>
            </div>
        </div>
    </div>
]</section>

@include('footer');
