@include('header')

<header class="page-header servisebi">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.services') </div> </h1>

            <h6>@lang('services.header')
            </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.services')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.construction')</h3>
                    <small>@lang('services.construction_copy')
                    </small> <a href="{{route('mshenebloba')}}">+</a> </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border remonti-block">
                    <figure><img src=" {{asset('images/homerepair.jpg')}}" alt="Image"></figure>
                    <h3>@lang('app.renovation')</h3>
                    <small> @lang('services.remont_copy')</small> <a href="{{route('remonti')}}">+</a> </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/design-icon.png')}}" alt="Image"></figure>
                    <h3>@lang('app.design')/@lang('app.architecture')</h3>
                    <small>@lang('services.design_copy') </small> <a href="{{route('dizaini')}}">+</a> </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src=" {{asset('images/icon02.png')}}" alt="Image"></figure>
                    <h3>@lang('app.sales')</h3>
                    <small> @lang('services.sales_copy')</small> <a href="{{route('gayidvebi')}}">+</a> </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/tech-rent.jpg')}}" alt="Image"></figure>
                    <h3>@lang('app.technique rental')</h3>
                    <small>@lang('services.technique_copy')</small> <a href="{{route('teqnikis-gaqiraveba')}}">+</a> </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-content black-frame-border">
                    <figure><img src="{{asset('images/icon01.png')}}" alt="Image"></figure>
                    <h3>@lang('app.cleaning')</h3>
                    <small>@lang('services.cleaning_copy')</small> <a href="{{route('dasuftaveba')}}">+</a> </div>
            </div>
        </div>
    </div>


@include('footer')
