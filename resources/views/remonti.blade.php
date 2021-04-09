@include('header');


<header class="page-header remonti">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.renovation') </div> </h1>

        <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;აირიდეთ თავიდან რემონტის ხარჯების გაორმაგება, დაივიწყეთ გაურკვეველი სამუშაო ეთიკისა და ექსპერტიზის მქონე ხალხთან მუშაობა, ბრიგადების გამოცვლა და უკვე შესრულებული სამუშაოების ხელახლა დაწყება
            ჩვენი თანამშრომლები გაგიკეთებენ ზუსტად ისეთ რემონტს, როგორიც თქვენ გსურთ: შავი ან თეთრი კარკასიდან - გასაღების ჩაბარებამდე (შედი-იცხოვრე).
        </h6>

        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.renovation')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/icon03.png')}}" alt="Image"></figure>
                    <h3>@lang('app.black frame')</h3>
                    <small> მ² 150$ დან </small> <a class="black-frame" href="{{route('black-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-3">
                <div class="icon-content white-frame-border">
                    <figure><img src=" {{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.white frame')</h3>
                    <small>მ² 110$ დან</small> <a class="white-frame" href="{{route('white-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-3">
                <div class="icon-content green-frame-border">
                    <figure><img src="{{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>@lang('app.green frame')</h3>
                    <small> მ² 100$ დან </small> <a class="green-frame" href="{{route('green-frame')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->

            <div class="col-lg-3">
                <div class="icon-content premium-frame-border">
                    <figure><img src="{{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>პრემიუმ ხარისხი</h3>
                    <small> მ² 160$ დან </small> <a class="premium-frame" href="{{route('premium')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
        </div>
        <!-- end row -->
    </div>
</section>

<div class="cta-box-yellow">
{{--    <h4>The first thing we build is relationships</h4>--}}
    <p>

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;სარემონტო სამუშაოები ძვირიან თავის ტკივილად რომ არ გექცეთ, ჩვენი კომპანია მხოლოდ მაღალი კვალიფიკაციის მქონე, გამოცდილ კონტრაქტორებთან და ხელოსნებთან თანამშრომლობს, რომლებიც უზრუნველყოფენ იმას რომ თქვენი რემონტი იყოს იაფი, გარანტირებულად ხარისხიანი და სწრაფი. <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;სარემონტო სამუშაოების დაწყებამდე თქვენი პროექტის პასუხისმგებელი მენეჯერი თქვენთან თანამშრომლობით შეადგენს და მოგაწვდით დაწვრილებით ხარჯთაღრიცხვას და მასალების სიას რომელიც რემონტის პროცესში აღარ გაიზრდება(!). <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ჩვენი განხორციელებული სამუშაოები მკაცრი ზედამხედველობისა და მუდმივი აღწერის ქვეშ მიმდინარეობს, ბოლოს კი ხარისხის სრულ კონტროლს გადის: როცა რემონტს ჩვენ გვიკვეთავთ, თქვენი ინტერესები კონტრაქტითაა დაცული.
    </p>                      <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a>

</div>

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
