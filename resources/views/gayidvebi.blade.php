@include('header');

<header class="page-header gayidvebi">
    <div class="container">
        <h1><div class="header-headings">@lang('app.sales')</div></h1>
        <h6>
            @lang('sales.header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.sales')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 oqroyana-background" >
                <div class="icon-content no-background black-frame-border">
                    <h3>@lang('sales.mtatsminda-hills')</h3>
                    <small class="sales-content oqroyana-content"> @lang('sales.residental-complex')<br>  @lang('sales.hills-price') </small> <a href="{{route('oqroyana')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 didube">
                <div class="icon-content no-background black-frame-border">
                    <h3>@lang('sales.didube')</h3>
                    <small class="sales-content oqroyana-content"> @lang('sales.residental-complex')<br>  @lang('sales.didube-price')</small> <a href="{{route('megadidube')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
            <div class="col-lg-4 m2">
                <div class="icon-content no-background black-frame-border">
                    <h3> @lang('sales.mirtskhulava')  </h3>
                    <small class="sales-content oqroyana-content"> @lang('sales.residental-complex')<br>  @lang('sales.mirtskhulava-price')</small> <a href="{{route('mirtskhulava')}}">+</a> </div>
                <!-- end icon-content -->
            </div>
            <!-- end col-4 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@include('footer');
