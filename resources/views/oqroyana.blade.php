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

</header>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" >
                <img src="{{asset('images/oqroyana-outside-1.jpg')}}">
            </div>
<div class="col-lg-4">
    <div class="icon-content">
        ამ ოქროყანაში მშენებარე მყუდრო, 4 სართულიანი საცხოვრებელი კომპლექსიდან ულამაზესი ბუნების ხედები იშლება. გვერდიდან დასახლებას სტადიონი და სკვერი უდგება. ახლოს მდებარეობს ბომბორას პარკი და თბილისის ფუნიკულიორი, ხოლო ახლოს, ქალაქის მერიის განკარგულებით მიმდინარეობს საფეხმავლო ბილიკის დაგება კუს ტბამდე.
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

            <div class="col-lg-4">
                <div class="icon-content">
                    კომპლექსი უმაღლესი ხარისხის მასალებითაა აგებული და ბუნებრივი თიხის აგურით მოპირკეთებული. ოქროყანის ეკოლოგიურად სუფთა დასახლების ბინები უკეთ ინარჩუნებენ სითბოსაც და სიგრილესაც, რის წყალობითაც მნიშვნელოვანი ოდენობის ფულს დაზოგავთ.

                    გადმოიყვანეთ თქვენი ოჯახი საცხოვრებლად ოქროყანაში, მოერიდეთ ქალაქის დაბინძურებულ ჰაერს და გააკეთეთ ყოველდღიური ეკონომია კომუნალურ გადასახადებში.

                    პროექტი დასრულდება 2021 წლის ბოლოს.
                </div>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/oqroyana-outside-2.jpg')}}">
            </div>
        </div>
    </div>
</section>


{{--<section class="content-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}

{{--            <div class="col-lg-12">--}}

{{--                <div class="oqroyana-slider">--}}
{{--                    <div class="swiper-wrapper">--}}
{{--                        <div class="oqroyana-slide"></div>--}}
{{--                        <div class="oqroyana-slide blue "></div>--}}
{{--                        <div class="oqroyana-slide-slide red"></div>--}}
{{--                    </div>--}}
{{--                    <div class="swiper-pagination"></div>--}}
{{--                    <div class="swiper-button-prev"></div>--}}
{{--                    <div class="swiper-button-next"></div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}



{{--<div id="myCarousel" class="carousel slide"> <!-- slider -->--}}
{{--    <div class="carousel-inner">--}}
{{--        <div class="active item"> <!-- item 1 -->--}}
{{--            <img src={{asset('images/renderi-1.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--        <div class="item"> <!-- item 2 -->--}}
{{--            <img src={{asset('images/renderi-2.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--        <div class="item"> <!-- item 3 -->--}}
{{--            <img src={{asset('images/renderi-3.jpg')}} alt="">--}}
{{--        </div> <!-- end item -->--}}
{{--    </div> <!-- end carousel inner -->--}}
{{--    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>--}}
{{--    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>--}}
{{--</div> <!-- end slider -->--}}


{{--<section class="content-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8" >--}}
{{--                <img src="{{asset('images/renderi-3.jpg')}}">--}}
{{--            </div>--}}
{{--            <div class="col-lg-4">--}}
{{--                <div class="icon-content">--}}
{{--                    --}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

@include('footer')
