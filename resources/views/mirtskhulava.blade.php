@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">მირცხულავა</div></h1>
        <h6> ახალი 10 კორპუსიანი საცხოვრებელი უბანი თბილისში, დიდუბის რაიონში, მირცხულავას ქუჩაზე შენდება.
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>მირცხულავა</li>
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
                        ესაა ეკომეგობრული კომპლექსი, რომელიც მოიცავს სხვადასხვა სიმაღლის საცხოვრებელ სახლებს, ვრცელ შიდა ეზოს, გამწვანებულ პარკებს, სპორტულ მოედანსა და ავტოსადგომს. პროექტს აქვს იდეალური მდებარეობა სატრანსპორტო კუთხით, თუმცა სახლები დაპროექტებულია ისე, რომ ბინამდე ქალაქის ხმაური არ შემოაღწევს.

                        საცხოვრებელი სახლები შენდება უმაღლესი ხარისხის ეკოლოგიურად სუფთა მასალით. შენობების გარე და შიდა კედლები შენდება „იტონგის“ ენერგოეფექტური, დათბუნებული ბლოკით.

                        სახლი აღჭურვილი იქნება სახანძრო სისტემებით. კომპლექსი იზოლირებულია მეზობელი კორპუსებისგან და წარმოადგენს დამოუკიდებელ უბანს.

                        თითოეულ ბინაში ასევე იქნება რუხი ფერის ორმაგი მინა-პაკეტის დაბალემისიური კარ-ფანჯარა, რაც დამატებით ხმის იზოლაციას უზრუნველყოფს.

                        ბინა ჩაგბარდებათ თეთრი კარკასის მდგომარეობაში.

                        პროექტი დასრულდება: 31.03.2023                    </p>

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
