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

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" >
                <img src="{{asset('images/block_ka.jpeg')}}">
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8" >

                <img src="{{asset('images/w2-bigger.png')}}">
            </div>

            <!-- end col-4 -->
            <div class="col-lg-4">
                    <small class="sales-content"> ესაა ეკომეგობრული კომპლექსი, რომელიც მოიცავს სხვადასხვა სიმაღლის საცხოვრებელ სახლებს, ვრცელ შიდა ეზოს, გამწვანებულ პარკებს, სპორტულ მოედანსა და ავტოსადგომს. პროექტს აქვს იდეალური მდებარეობა სატრანსპორტო კუთხით, თუმცა სახლები დაპროექტებულია ისე, რომ ბინამდე ქალაქის ხმაური არ შემოაღწევს.

                        საცხოვრებელი სახლები შენდება უმაღლესი ხარისხის ეკოლოგიურად სუფთა მასალით. </small>
                <!-- end icon-content -->
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
                <small class="sales-content"> შენობების გარე და შიდა კედლები შენდება „იტონგის“ ენერგოეფექტური, დათბუნებული ბლოკით.

                    სახლი აღჭურვილი იქნება სახანძრო სისტემებით. კომპლექსი იზოლირებულია მეზობელი კორპუსებისგან და წარმოადგენს დამოუკიდებელ უბანს.

                    თითოეულ ბინაში ასევე იქნება რუხი ფერის ორმაგი მინა-პაკეტის დაბალემისიური კარ-ფანჯარა, რაც დამატებით ხმის იზოლაციას უზრუნველყოფს.

                    ბინა ჩაგბარდებათ თეთრი კარკასის მდგომარეობაში.

                    პროექტი დასრულდება: 31.03.2023  </small>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/w2-whole.jpg')}}">
            </div>
        </div>
        <!-- end row -->
    </div>
</section>



@include('footer')
