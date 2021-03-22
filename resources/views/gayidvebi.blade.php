@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.sales')</div></h1>
        <h6>აქაც ბლა ბლა ბლა
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.sales')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon03.png')}}" alt="Image"></figure>
                    <h3>ოქროყანა</h3>
                    <small> ფასი 400$ დან </small> <a  href="{{route('black-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src=" {{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>m2</h3>
                    <small>ფასი 420$ დან</small> <a  href="{{route('white-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>mega didube</h3>
                    <small> ფასი 440$ დან </small> <a href="{{route('green-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
</section>


{{--<section class="content-section no-bottom-spacing">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-5">--}}



{{--            </div>--}}
{{--            <!-- end col-7 -->--}}
{{--            <div class="col-lg-5 offset-lg-2">--}}
{{--                <ul class="custom-list">--}}
{{--                    <div class="section-title text-left"> <h6>სარემონტო მომსახურებები რომლებსაც ჩვენ გთავაზობთ მოიცავს, მაგრამ შეზღუდული არაა შემდეგით:</h6> </div>--}}
{{--                    <li><i class="lni lni-checkmark"></i> ელექტროგაყვანილობა - დაქსელვა, კაბელების შერჩევა, როზეტების და განათების მონტაჟი</li>--}}
{{--                    <li><i class="lni lni-checkmark"></i> Teamwork and collabration</li>--}}
{{--                    <li><i class="lni lni-checkmark"></i> Culture of mutual trust and respect</li>--}}
{{--                    <li><i class="lni lni-checkmark"></i> Being leader in our profession</li>--}}
{{--                    <li><i class="lni lni-checkmark"></i> Pride in our works and excellences</li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <!-- end col-5 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}


@include('footer');
