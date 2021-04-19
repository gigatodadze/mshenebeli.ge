@include('header');

<header class="page-header gayidvebi">
    <div class="container">
        <h1><div class="header-headings">@lang('app.sales')</div></h1>
        <h6>
            ქალაქგარეთ, ეკოლოგიურად სუფთა, უახლესი ტექნოლოგიებით აშენებულ სახლში ცხოვრება გსურთ? თუ ქალაქის გულში, გამწვანებულ, დაცულ, ენერგოეფექტურ დასახლებაში გირჩევნიათ დაიდოთ ბინა? ჩვენ დაგეხმარებით თქვენი საოცნებო სახლის შეძენაში.
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
            <div class="col-lg-4 oqroyana-background" >
                <div class="icon-content no-background black-frame-border">
                    <h3>მთაწმინდა ჰილს</h3>
                    <small class="sales-content oqroyana-content"> საცხოვრებელი კომპლექსი 990$-დან </small> <a href="{{route('oqroyana')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 didube">
                <div class="icon-content no-background black-frame-border">
                    <h3> დიდუბე </h3>
                    <small class="sales-content oqroyana-content"> საცხოვრებელი კომპლექსი 620$-დან</small> <a href="{{route('megadidube')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 m2">
                <div class="icon-content no-background black-frame-border">
                    <h3> მირცხულავა  </h3>
                    <small class="sales-content oqroyana-content"> საცხოვრებელი კომპლექსი </small> <a href="{{route('mirtskhulava')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
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
