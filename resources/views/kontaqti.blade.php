@include('header');

<header class="page-header">
    <div class="container">
        <h1> <div class="header-headings"> @lang('app.contact')</div></h1>
        <ul>
            <li><a href="{{route('index')}}">@lang('app.main')</a></li>
            <li>@lang('app.contact')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <figure><img src="{{asset('images/icon-global.png')}}" alt="Image"></figure>
                    <h6>Head Office</h6>
                    <p>@lang('footer.address') :
                        <br>
                        <a href="https://www.google.com/maps/@41.7453148,44.7738537,18.9z" data-fancybox data-width="640" data-height="360">@lang('footer.alio mirtskhulava str. 9/11') </a></p>

                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <figure><img src="{{asset('images/icon-phone.png')}}" alt="Image"></figure>
                    <h6>Phones</h6>
                    <p>@lang('footer.contact us')
                        <br>
                        <a href="tel:(+995) 558 348 000">(+995) 558 348 000</a></p>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="contact-box">
                    <figure><img src="{{asset('images/icon-email.png')}}" alt="Image"></figure>
                    <h6>Write Us</h6>
                    <p>@lang('footer.message us')<br>
                        <a href="mailto:info@mshenebeli.ge">info@mshenebeli.ge</a></p>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title text-left">
                    <h6>OUR HISTORY</h6>
                    <h2>Quality & Passion With<br>
                        Our Services</h2>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-6 -->
                {{--            <div class="col-lg-6">--}}
                {{--                <form class="contact-form">--}}
                {{--                    <div class="form-group">--}}
                {{--                        <span>Full Name</span>--}}
                {{--                        <input type="text"></input>--}}
                {{--                    </div>--}}
                {{--                    <!-- end form-group -->--}}
                {{--                    <div class="form-group">--}}
                {{--                        <span>Your E-mail</span>--}}
                {{--                        <input type="text"></input>--}}
                {{--                    </div>--}}
                {{--                    <!-- end form-group -->--}}
                {{--                    <div class="form-group">--}}
                {{--                        <span>Subject</span>--}}
                {{--                        <input type="text"></input>--}}
                {{--                    </div>--}}
                {{--                    <!-- end form-group -->--}}
                {{--                    <div class="form-group">--}}
                {{--                        <span>Your Message</span>--}}
                {{--                        <textarea></textarea>--}}
                {{--                    </div>--}}
                {{--                    <!-- end form-group -->--}}
                {{--                    <div class="form-group">--}}
                {{--                        <input type="submit" value="Send Now">--}}
                {{--                    </div>--}}
                {{--                    <!-- end form-group -->--}}
                {{--                </form>--}}
                {{--                <!-- end contact-form -->--}}
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->
<section class="content-section no-spacing">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2976.8537164076133!2d44.77325848583909!3d41.74524803875764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044728dcca6790b%3A0x4f7976feeb7ef2ff!2z4YOQ4YOa4YOY4YOdIOGDm-GDmOGDoOGDquGDruGDo-GDmuGDkOGDleGDkOGDoSDhg6Xhg6Phg6nhg5AsIFQnYmlsaXNp!5e0!3m2!1sen!2sge!4v1614939559270!5m2!1sen!2sge" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></section>
<!-- end content-section -->
<section class="footer-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <figure class="logo"> <img src="{{asset('/img/logo.png')}}" alt="Image"> </figure>
                <h2>Live <b>better</b> and <b>beautiful</b></h2>
                <a href="#" class="button">GET A CONSULTATION <i class="lni lni-arrow-right"></i></a>
                <div class="sales-representive">
                    <figure>
                        <img src="images/author01.jpg" alt="Image">
                    </figure>Sales representative

                    <b>+1 (850) 344 0 66 #20</b> free call !
                </div>
                <!-- end sales-representive -->
            </div>
            <!-- end col-12  -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

</section>



@include('footer');
