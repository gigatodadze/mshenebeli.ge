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
                <img src="{{asset('images/renderi-1.jpg')}}">
            </div>
<div class="col-lg-4">
    <div class="icon-content">

    ჩვენი პატარა, 4 სართულიანი სახლებისგან შემდგარი საცხოვრებელი კომპლექსიდან ულამაზესი ბუნების ხედები იშლება,
        ხოლო გვერდიდან დასახლებას სტადიონი და სკვერი ემიჯნება. ახლოს მდებარეობს ბომბორას პარკი და თბილისის ფუნიკულიორი,
        ხოლო თბილისის მერიის განკარგულებით მიმდინარეობს გრძელი საფეხმავლო ბილიკის დაგება კუს ტბამდე.
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

                ოქროყანაში მშენებარე, პემზის ბლოკით აგებული და ბუნებრივი თიხის აგურით მოპირკეთებული,
                ეკოლოგიურად სუფთა დასახლების ბინები უკეთ ინარჩუნებენ სითბოსაც და სიგრილესაც,
                რის წყალობითაც მნიშვნელოვანი ოდენობის ფულს დაზოგავთ.
                </div>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/renderi-2.jpg')}}">
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" >
                <img src="{{asset('images/renderi-3.jpg')}}">
            </div>
            <div class="col-lg-4">
                <div class="icon-content">

                გადმოიყვანეთ თქვენი ოჯახი საცხოვრებლად ოქროყანაში,
                    მოერიდეთ ქალაქის დაბინძურებულ ჰაერს და გააკეთეთ ყოველდღიური ეკონომია კომუნალურ გადასახადებში.
                    პროექტი დასრულდება 2021 წლის ბოლოს.
                </div>
            </div>

        </div>
    </div>
</section>

@include('footer')
