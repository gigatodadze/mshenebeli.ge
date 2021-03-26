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
                    <h2>100$ დან</h2>
                </div>
                <!-- end section-title -->
                <p>  მწვანე კარკასის მდგომარეობაში მოყვანილი ფართი საცხოვრებლად გამზადდება შემდგომი სარემონტო სამუშაოების შემდეგ:</p>
{{--                <h2><strong>140$ დან</strong></h2>--}}
{{--                <b>YEARS OF EXPERIENCE</b>--}}
            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i> ელექტროგაყვანილობა - როზეტების და განათების დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i> სანტექნიკური სამუშაოები - უნიტაზების, სააბაზანო აქსესუარების დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i> სამზარეულო აქსესუარების დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i> შიდა კარებების დამონტაჟება, ანჯამებისა და საკეტების დაყენება</li>
                    <li><i class="lni lni-checkmark"></i> კაფელ-მეტლახის დაგება</li>
                    <li><i class="lni lni-checkmark"></i> ლამინატის/პარკეტის დაგება</li>
                    <li><i class="lni lni-checkmark"></i> გათბობის სისტემის, რადიატორების, გათბობის ქვაბის დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i> სამღებრო და მოსაპირკეთებელი სამუშაოების ჩატარება</li>
                    <li><i class="lni lni-checkmark"></i> სამღებრო და მოსაპირკეთებელი სამუშაოების ჩატარებ</li>
                    <li><i class="lni lni-checkmark"></i> რემონტის შემდგომი დალაგება</li>

                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@include('footer');
