@include('header');


<section class="content-section about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="section-title">
                    <h6>
                        @lang('about-us.header')
                    </h6>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-6">
                <figure class="side-image"><img src="{{asset('images/about-us.jpg')}}" alt="Image"></figure>
                <!-- end side-image -->
            </div>
            <!-- end col-6 -->
            <div class="col-lg-6">
                <div class="side-content">
                    <h6>
                        @lang('about-us.header')
                    </h6>
                   <p>
                    @lang('about-us.first-paragraph')
                   </p>
            </div>
            <!-- end col-6 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    </div>
</section>

@include('footer');
