@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.architecture')</div></h1>
        <h6> ჩვენი კვალიფიცირებული დიზაინერები და ინჟინრები დაგეხმარებიან თქვენი არქიტექტურული იდეების რეალიზებაში...
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.architecture')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/livingroom.jpg')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box">
                    <p>
                    <li>დიზაინერული მომსახურება :</li>
                    <li>ინტერიერის დიზაინი</li>
                    <li> ექსტერიერის დიზაინი</li>
                    <li>3D დიზაინი></li>
                    <li> მოდელირება</li>
                    <li> საინჟინრო გეგმის დახაზვა</li>
                    <li> სახლის/ბინის პროექტირება</li>
                    <li> 3D მოდელირება</li>
                    <li> ვირტუალური ტურები</li>
                     </p>
                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a>
                 </div>
                <!-- end services-list-box -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>





<!-- end container -->
<!-- end content-section -->
<section class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <figure class="logo"> <img src="{{asset('images/logo.png')}}" alt="Image"> </figure>
                <h2>Live <b>better</b> and <b>beautiful</b></h2>
                <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a>
                <div class="sales-representive">
                    <figure> <img src="images/author01.jpg" alt="Image"> </figure>
                    Sales representative <b>+1 (850) 344 0 66 #20</b> free call ! </div>
                <!-- end sales-representive -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


@include('footer')
</body>
</html>
