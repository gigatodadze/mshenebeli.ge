@include('header')

<header class="page-header">
    <div class="container">
        <h1>@lang('app.services')</h1>

            <h6>TBD
            </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.services')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>We plan with sensetive</h3>
                    <small>The awards for design, creativity and innovation on the Internet</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src=" {{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>For futuristic buildings</h3>
                    <small>Twenty spring of in esteem spirit likely estate continue new building</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon03.png')}}" alt="Image"></figure>
                    <h3>Make living beautiful</h3>
                    <small>Sympathize it projection ye insipidity celebrated our pianoforte</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>We plan with sensetive</h3>
                    <small>The awards for design, creativity and innovation on the Internet</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src=" {{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>For futuristic buildings</h3>
                    <small>Twenty spring of in esteem spirit likely estate continue new building</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4">
                <div class="icon-content">
                    <figure><img src="{{asset('images/icon03.png')}}" alt="Image"></figure>
                    <h3>Make living beautiful</h3>
                    <small>Sympathize it projection ye insipidity celebrated our pianoforte</small> <a href="#">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->



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
