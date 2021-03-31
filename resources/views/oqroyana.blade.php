@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">ოქროყანა</div></h1>
        <h6> გსურთ, ქალაქისგან მოშორებით, სუფთა ჰაერზე, ენერგოეფექტური ტექნოლოგიებით აშენებულ სახლში ცხოვრება?
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>ოქროყანა</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/oqroyana.jpg')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box">
                    <p>
                        ოქროყანაში მშენებარე, პემზის ბლოკით აგებული და ბუნებრივი თიხის აგურით მოპირკეთებული, ეკოლოგიურად სუფთა დასახლების ბინები უკეთ ინარჩუნებენ სითბოსაც და სიგრილესაც, რის წყალობითაც მნიშვნელოვანი ოდენობის ფულს დაზოგავთ.

                        ჩვენი პატარა, 4 სართულიანი სახლებისგან შემდგარი საცხოვრებელი კომპლექსიდან ულამაზესი ბუნების ხედები იშლება, ხოლო გვერდიდან დასახლებას სტადიონი და სკვერი ემიჯნება. ახლოს მდებარეობს ბომბორას პარკი და თბილისის ფუნიკულიორი, ხოლო თბილისის მერიის განკარგულებით მიმდინარეობს გრძელი საფეხმავლო ბილიკის დაგება კუს ტბამდე.

                        გადმოიყვანეთ თქვენი ოჯახი საცხოვრებლად ოქროყანაში, მოერიდეთ ქალაქის დაბინძურებულ ჰაერს და გააკეთეთ ყოველდღიური ეკონომია კომუნალურ გადასახადებში.
                    </p>

  <p> პროექტი დასრულდება 2021 წლის ბოლოს. </p>
                    <a class="footer-address button" href="tel:(+995) 558 348 000">@lang('app.contact')</a>
                <!-- end services-list-box -->
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


@include('footer')
