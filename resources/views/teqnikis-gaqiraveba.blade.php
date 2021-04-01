@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.technique rental')</div></h1>
        <h6>
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.technique rental')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/technique.png')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box">
                    <p>
                    სპეც-ტექნიკის გაქირავება :  </p>
                    <ul>
                        <li>ექსკავატორი,</li>
                        <li>ამწე-კრანი,</li>
                        <li>ბულდოზერი,</li>
                        <li>ბეტონმრევი,</li>
                        <li>ბობკატი,</li>
                        <li>სატვირთო,</li>
                        <li>თვითმცლელი</li>
                    </ul>
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
