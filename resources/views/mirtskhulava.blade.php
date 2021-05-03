@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('sales.mirtskhulava')</div></h1>
        <h6> @lang('sales.mirtskhulava-header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('sales.mirtskhulava')</li>
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
                    <small class="sales-content"> @lang('sales.mirtskhulava-first-block')
                       </small>
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
                <small class="sales-content"> @lang('sales.mirtskhulava-second-block')  </small>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/w2-whole.jpg')}}">
            </div>
        </div>
        <!-- end row -->
    </div>
</section>



@include('footer')
