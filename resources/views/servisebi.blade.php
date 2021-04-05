@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.services') </div> </h1>

            <h6>გარდა სამშენებლო და სარემონტო სამუშაოებისა, ასევე შეგიძლიათ დაგვიქირაოთ ცალკეული მომსახურებების გასაწევადაც. ჩვენ გთავაზობთ მუდმივად ზრდად მომსახურებათა სიას:
            </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.services')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.construction')</h3>
                    <small>  აიშენეთ თქვენი საოცნებო სახლი. ჩვენ გთავაზობთ სამშენებლო მომსახურებათა ვრცელ ჩამონათვალს.
                    </small> <a href="{{route('mshenebloba')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src=" {{asset('images/homerepair.jpg')}}" alt="Image"></figure>
                    <h3>@lang('app.renovation')</h3>
                    <small>აირიდეთ თავიდან რემონტის ხარჯების გაორმაგება, დაივიწყეთ გაურკვეველი სამუშაო ეთიკისა და ექსპერტიზის მქონე ხალხთან მუშაობა, ბრიგადების გამოცვლა და უკვე შესრულებული სამუშაოების ხელახლა დაწყება</small> <a href="{{route('remonti')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/design-icon.png')}}" alt="Image"></figure>
                    <h3>@lang('app.design')/@lang('app.architecture')</h3>
                    <small> ჩვენი კვალიფიცირებული დიზაინერები და ინჟინრები დაგეხმარებიან თქვენი არქიტექტურული იდეების რეალიზებაში...</small> <a href="{{route('dizaini')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src=" {{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>@lang('app.sales')</h3>
                    <small>არ გსურთ აშენებას დაელოდოთ? შეიძინეთ საოცნებო ბინა დღეს. გამწვანება, ენერგოეფექტური მასალებით მშენებლობა და თქვენზე მორგებული ფასები...</small> <a href="{{route('gayidvebi')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/tech-rent.jpg')}}" alt="Image"></figure>
                    <h3>@lang('app.technique rental')</h3>
                    <small>დაიქირავეთ სამშენებლო და სხვა ტიპის სპეც-ტექნიკა თქვენი მიზნებისთვის...</small> <a href="{{route('teqnikis-gaqiraveba')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.cleaning')</h3>
                    <small>ჩვენ გთავაზობთ მშენებლობის/რემონტის შემდგომი დასუფთავების სერვისების სრულ სიას...</small> <a href="{{route('dasuftaveba')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->

        </div>
        <!-- end row -->
    </div>


@include('footer')
