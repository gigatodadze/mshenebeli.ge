@include('header')

<header class="page-header">
    <div class="container">
        <h1>@lang('app.construction')</h1>
        <h6>ჩვენი პროფესიონალებისგან შემდგარი გუნდი უზრუნველყოფს თქვენი აგარაკის, სასტუმროსა თუ კორპუსის დაპროექტებას, სამშენებლო სამუშაოების ხარჯთაღრიცხვას და სწრაფ, ხარისხიან მშენებლობას უახლესი ტექნოლოგიებით.
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.construction')</li>
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
                        ჩვენ შემოგთავაზებთ მოქნილ ფასებს, შეგიდგენთ პროექტს, დაგეხმარებით იურიდიული და საბუღალტრო საბუთების მოგვარებაში, მოგაწვდით დეტალურ, წინასწარ ხარჯთაღრიცხვას და მოგცემთ კონტრაქტით უზრუნველყოფილ მაღალი ხარისხის გარანტიას.
                    </p>
                    კომპანიის სამშენებლო მომსახურებების ფართო და არასრული სპექტრი ასე გამოიყურება:

                    <ul>
                        <li>კერძო სახლის მშენებლობა;</li>
                        <li>სასტუმროს მშენებლობა;</li>
                        <li>აგარაკის მშენებლობა;</li>
                        <li>კორპუსის მშენებლობა;</li>
                        <li>აუზების მშენებლობა;</li>
                        <li>სეისმომედეგი მშენებლობა;</li>
                        <li>კატლავანის ამოღება/გატანა.</li>
                    </ul>
                    <a href="#" class="button">GET AN ESTIMATE</a> </div>
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
