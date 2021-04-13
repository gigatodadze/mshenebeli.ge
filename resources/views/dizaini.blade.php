@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.design') / @lang('app.architecture')</div></h1>
        <h6> ჩვენი კვალიფიცირებული დიზაინერები და ინჟინრები დაგეხმარებიან თქვენი არქიტექტურული იდეების რეალიზებაში.
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.design') / @lang('app.architecture')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->



<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" >
                <img src="{{asset('images/design-architecture.jpg')}}" alt="oqroyana mshenebeli">
            </div>
            <div class="col-lg-7">
                <div class="icon-content design">
                    <strong>დიზაინერული მომსახურება</strong>
                    სწორად დაგეგმილი სახლი ესთეტიკურად, ფუნქციურად და ენერგომოხმარების მხრივ ოპტიმიზირებულია. ჩვენი დიზაინერები თქვენთან ერთად დაგეგმავენ ზუსტად ისეთ სახლს, როგორზეც ოცნებობთ.
                    <br> დიზაინერული მომსახურებები რომლებსაც ჩვენ გთავაზობთ მოიცავს:
                  <ul>
                    <li>სიტუაციური შეფასება და გეგმის ჩამოყალიბება</li>
                    <li> ინტერიერის დიზაინი, ზონირება</li>
                    <li>განათების დიზაინი </li>
                    <li> ექსტერიერის დიზაინი </li>
                    <li> დენდროლოგიური დიზაინი, ეზოს დაგეგმარება, ზონირება</li>
                    <li> 3D დიზაინი, მოდელირება</li>
                    <li>ვირტუალური ტურები</li>
                  </ul>

                </div>
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>

</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5" >
                <img src="{{asset('images/11111.jpg')}}" alt="oqroyana mshenebeli">
            </div>
            <div class="col-lg-7">
                <div class="icon-content design">
                    <strong>არქიტექტურული მომსახურება</strong>
                    ჩვენი არქიტექტორები მათი თანამედროვე, მოდერნისტული მიდგომებით დაგეხმარებიან თქვენთვის იდეალური სახლის აშენებაში.
                    <br>ჩვენ გთავაზობთ შემდეგ მომსახურებებს:
                  <ul>
                    <li>საბუთების მოძიება, შედგენა და შესაბამის ორგანოებთან კომუნიკაცია</li>
                    <li> მთლიანი არქიტექტურული გეგმის შედგენა</li>
                    <li>საინჟინრო კომუნიკაციები, წყალგაყვანილობის სისტემის და ელექტროობის დაგეგმარება </li>
                    <li> 3D ვიზუალიზაცია </li>
                    <li> კონსტრუქციული პროექტის შედგენა</li>
                    <li> არქიტექტურული პროექტის შედგენა </li>
                    <li>არქიტექტურული პროექტის ექსპერტის მიერ შეფასება</li>
                    <li>არქიტექტურული პროექტის ექსპერტის მიერ შეფასება</li>
                  </ul>
                </div>
            </div>

        </div>
    </div>
</section>
{{--<section class="content-section no-spacing" data-background="{{asset('images/design-architecture.jpg')}}">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-end">--}}
{{--            <div class="col-lg-6 col-md-9">--}}
{{--                <div class="services-list-box">--}}
{{--                    <p>--}}
{{--                    <li>დიზაინერული მომსახურება :</li>--}}
{{--                    <li>ინტერიერის დიზაინი</li>--}}
{{--                    <li> ექსტერიერის დიზაინი</li>--}}
{{--                    <li>3D დიზაინი </li>--}}
{{--                    <li> მოდელირება</li>--}}
{{--                    <li> საინჟინრო გეგმის დახაზვა</li>--}}
{{--                    <li> სახლის/ბინის პროექტირება</li>--}}
{{--                    <li> 3D მოდელირება</li>--}}
{{--                    <li> ვირტუალური ტურები</li>--}}
{{--                     </p>--}}
{{--                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a>--}}
{{--                 </div>--}}
{{--                <!-- end services-list-box -->--}}
{{--            </div>--}}
{{--            <!-- end col-6 -->--}}
{{--        </div>--}}
{{--        <!-- end row -->--}}
{{--    </div>--}}
{{--    <!-- end container -->--}}
{{--</section>--}}



@include('footer')
