@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.black frame') </div> </h1>

        <h6>TBD
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('remonti')}}">@lang('app.renovation')</a></li>
            <li>@lang('app.black frame')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-left">
                    <h6>@lang('app.black frame')</h6>
                    <h2>@lang('black-frame.Starting at $150 per m²')</h2>
                </div>
                <!-- end section-title -->
                <p> @lang('black-frame.list-header')</p>
{{--                <h2><strong>150$ დან</strong></h2>--}}
{{--                <b>YEARS OF EXPERIENCE</b>--}}
            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li1')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li2')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li3')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li4')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li5')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li6')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li7')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li8')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li9')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li10')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li11')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li12')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li13')</li>
                    <li><i class="lni lni-checkmark"></i>   @lang('black-frame.li14')</li>
                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@include('footer');
