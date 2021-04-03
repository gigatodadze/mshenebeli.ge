@include('header');

<header class="page-header">
    <div class="container">
        <h1><div class="header-headings"> @lang('app.black frame') </div> </h1>

        <h6>TBD
        </h6>
        <ul>
            <li><a href="{{route('index')}}">HOME</a></li>
            <li><a href="{{route('remonti')}}">@lang('app.renovation')</a></li>
            <li>@lang('app.black frame')</li>
        </ul>
    </div>
    <!-- end container -->
</header>

<section class="content-section no-bottom-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title text-left">
                    <h6>@lang('app.black frame')</h6>
                    <h2>150$ დან</h2>
                </div>
                <!-- end section-title -->
                <p> შავი კარკასიდან გასაღების ჩაბარებამდე ბინის სარემონტო სამუშაოები გამოიყურება შემდეგნაირად:</p>
{{--                <h2><strong>150$ დან</strong></h2>--}}
{{--                <b>YEARS OF EXPERIENCE</b>--}}
            </div>
            <!-- end col-7 -->
            <div class="col-lg-5 offset-lg-2">
                <ul class="custom-list">
                    <li><i class="lni lni-checkmark"></i> გიფსოკარდონის (თაბაშირ-მუყაოს) გაკვრა - ტიხრების ამოყვანა და თაბაშირ-მუყაოს ჭერი, შიდა კედლების ამოყვანა და გალესვა</li>
                    <li><i class="lni lni-checkmark"></i>   ბეტონის დასხმა - მოჭიმული იატაკი (სწიაჟკა)</li>
                    <li><i class="lni lni-checkmark"></i>   ელექტროგაყვანილობა - კაბელებით დაქსელვა, როზეტების და განათების დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i>   სანტექნიკური სამუშაოები - სველი წერტილების, აბაზანის და ტუალეტის გაყვანილობის დამონტაჟება, უნიტაზების, სააბაზანო აქსესუარების დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i>   შიდა კარებების, რკინის მთავარი კარების და ფანჯრების მონტაჟი - ანჯამებისა და საკეტების დაყენება</li>
                    <li><i class="lni lni-checkmark"></i>   კაფელ-მეტლახის დაგება</li>
                    <li><i class="lni lni-checkmark"></i>   ვენტილაცია - სავენტილაციო სისტემა და მილები</li>
                    <li><i class="lni lni-checkmark"></i>   ხმის და თბოიზოლაციური სამუშაოების ჩატარება</li>
                    <li><i class="lni lni-checkmark"></i>    ლამინატის/პარკეტის დაგება</li>
                    <li><i class="lni lni-checkmark"></i>    გათბობის სისტემის, რადიატორების, გათბობის ქვაბის დამონტაჟება</li>
                    <li><i class="lni lni-checkmark"></i>    სამღებრო და მოსაპირკეთებელი სამუშაოების ჩატარება</li>
                    <li><i class="lni lni-checkmark"></i>     ჭერის დამონტაჟება - ბარისოლი, ფრანგული გასაჭიმი ჭერი</li>
                    <li><i class="lni lni-checkmark"></i>     რემონტის შემდგომი დალაგება</li>
                </ul>
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@include('footer');
