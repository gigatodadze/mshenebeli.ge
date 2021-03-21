@include('header');

<div>
    &nbsp;
</div>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.black frame')</h3>
                    <small> </small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src=" {{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>@lang('app.white frame')</h3>
                    <small> </small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon03.png')}}" alt="Image"></figure>
                    <h3>@lang('app.green frame')</h3>
                    <small> </small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
</section>


<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">

                <p>
                    აირიდეთ თავიდან რემონტის ხარჯების გაორმაგება, დაივიწყეთ გაურკვეველი სამუშაო ეთიკისა და ექსპერტიზის მქონე ხალხთან მუშაობა, ბრიგადების გამოცვლა და უკვე შესრულებული სამუშაოების ხელახლა დაწყება - ჩვენი თანამშრომლები გაგიკეთებენ ზუსტად ისეთ რემონტს, როგორიც თქვენ გსურთ: შავი ან თეთრი კარკასიდან - გასაღების ჩაბარებამდე (შედი-იცხოვრე).
                    სარემონტო სამუშაოები ძვირიან თავის ტკივილად რომ არ გექცეთ, ჩვენი კომპანია მხოლოდ მაღალი კვალიფიკაციის მქონე, გამოცდილ კონტრაქტორებთან და ხელოსნებთან თანამშრომლობს, რომლებიც უზრუნველყოფენ იმას რომ თქვენი რემონტი იყოს იაფი, გარანტირებულად ხარისხიანი და სწრაფი.
                    სარემონტო სამუშაოების დაწყებამდე თქვენი პროექტის პასუხისმგებელი მენეჯერი თქვენთან თანამშრომლობით შეადგენს და მოგაწვდით დაწვრილებით ხარჯთაღრიცხვას და მასალების სიას რომელიც რემონტის პროცესში აღარ გაიზრდება(!).
                    ჩვენი განხორციელებული სამუშაოები მკაცრი ზედამხედველობისა და მუდმივი აღწერის ქვეშ მიმდინარეობს, ბოლოს კი ხარისხის სრულ კონტროლს გადის: როცა რემონტს ჩვენ გვიკვეთავთ, თქვენი ინტერესები კონტრაქტითაა დაცული.
                </p>

            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <div class="section-title text-left"> <h6>სარემონტო მომსახურებები რომლებსაც ჩვენ გთავაზობთ მოიცავს, მაგრამ შეზღუდული არაა შემდეგით:</h6> </div>
                    <li><i class="lni lni-checkmark"></i> ელექტროგაყვანილობა - დაქსელვა, კაბელების შერჩევა, როზეტების და განათების მონტაჟი</li>
                    <li><i class="lni lni-checkmark"></i> Teamwork and collabration</li>
                    <li><i class="lni lni-checkmark"></i> Culture of mutual trust and respect</li>
                    <li><i class="lni lni-checkmark"></i> Being leader in our profession</li>
                    <li><i class="lni lni-checkmark"></i> Pride in our works and excellences</li>
                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>


@include('footer');
