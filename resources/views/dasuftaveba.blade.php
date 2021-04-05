@include('header')

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings">@lang('app.cleaning')</div></h1>
        <h6>                    ჩვენ გთავაზობთ მშენებლობის/რემონტის შემდგომი დასუფთავების სერვისების სრულ სიას...

        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li>@lang('app.cleaning')</li>
        </ul>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->


<section class="content-section no-spacing" data-background="{{asset('images/dasuftaveba.jpg')}}">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6 col-md-9">
                <div class="services-list-box">
<ul>
    <li>რემონტის შემდგომი დალაგება :</li>
    <li>სამშენებლო ნაგვის გატანა</li>
    <li>ზედაპირების წმენდა და გასუფთავება></li>
    <li>სადეზინფექციო ხსნარებით დამუშავება</li>
</ul>
                <p><a class="footer-address button" href="tel:(+995) 558 348 000">@lang('footer.contact us')</a></p>
            </div>
        </div>
    </div>
    </div>
</section>

@include('footer')
