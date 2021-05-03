@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('sales.didube')</div></h1>
        <h6>  @lang('sales.didube-header')
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('sales.didube')</li>
        </ul>
    </div>
</header>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{asset('images/megadidube-1.jpeg')}}">
            </div>

            <div class="col-lg-4">
        <h4>
           @lang('sales.didube-first-block')
        </h4>
            </div>
        </div>
    </div>

</section>


<section class="content-section">
    <div class="container">
        <div class="row">
            <!-- end col-4 -->
            <div class="col-lg-4">
            <h6>
                   <ul>
                       <li>@lang('sales.didube-li1')</li>
                       <li>@lang('sales.didube-li2')</li>
                       <li>@lang('sales.didube-li3')</li>
                       <li>@lang('sales.didube-li4')</li>
                       <li>@lang('sales.didube-li5')</li>
                       <li>@lang('sales.didube-li6')</li>
                       <li>@lang('sales.didube-li7')</li>
                       <li>@lang('sales.didube-li8')</li>

                   </ul>

                </h6>
            </div>

            <div class="col-lg-8" >
                <img src="{{asset('images/Structurama_Didube.png')}}">
            </div>
        </div>
    </div>
</section>


<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{asset('images/megadidube-2.jpeg')}}">
            </div>

            <!-- end col-4 -->
            <div class="col-lg-4">
                <h5>
                     <ul>
                        <li>@lang('sales.didube-2li1') </li>
                         <li>@lang('sales.didube-2li2') </li>
                         <li>@lang('sales.didube-2li3') </li>
                         <li>@lang('sales.didube-2li4') </li>
                         <li>@lang('sales.didube-2li5') </li>
                         <li>@lang('sales.didube-2li6') </li>
                         <li>@lang('sales.didube-2li7') </li>
                         <li>@lang('sales.didube-2li8') </li>
                         <li>@lang('sales.didube-2li9') </li>
                         <li>@lang('sales.didube-2li10') </li>
                         <li>@lang('sales.didube-2li11') </li>
                     </ul>
                </h5>
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
                <h3>
                    @lang('sales.didube-material-block')
                </h3>
            </div>
            <div class="col-lg-8" >
                <img src="{{asset('images/didube.jpeg')}}">
            </div>

        </div>
    </div>
</section>

@include('footer')
