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
                    <h2>120$ დან</h2>
                </div>
                <!-- end section-title -->
                <p> ბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლაბლა ბლა ბლა  .</p>
                <h2><strong>120$ დან</strong></h2>
                <b>YEARS OF EXPERIENCE</b>
            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i> აქ რაღაცეები რაც ამაში შედის</li>
                    <li><i class="lni lni-checkmark"></i> Teamwork and collabration</li>
                    <li><i class="lni lni-checkmark"></i> Culture of mutual trust and respect</li>
                    <li><i class="lni lni-checkmark"></i> Being leader in our profession</li>
                    <li><i class="lni lni-checkmark"></i> Pride in our works and excellences</li>
                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@include('footer');
