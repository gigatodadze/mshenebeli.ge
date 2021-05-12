<div id="sales-specialist-form">
    <form>
        <div class="form-group"> <span>Full Name</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Phone Number</span>
            <input type="text">
        </div>
        <!-- end form-group -->
        <div class="form-group"> <span>Current E-mail</span>
            <input type="email">
        </div>
        <!-- end form-group -->
        <div class="form-group">
            <input type="submit" value="REQUEST A CALL">
        </div>
        <!-- end form-group -->
    </form>
</div>
<!-- end sales-specialist-form -->

@include('scripts')

<footer class="footer">
    <div class="container">
{{--        <div class="row">--}}
{{--            <div class="col-lg-4 col-md-6">--}}
{{--                <h6 class="widget-title">HEADQUARTER</h6>--}}
{{--                <address>--}}
{{--                    <p>228 Cardigan Road, Leeds<br>--}}
{{--                        Geneva Switzerland</p>--}}
{{--                    <p>+1 (850) 344 0 66 #20</p>--}}
{{--                    <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox data-width="640" data-height="360">FIND US ON MAP</a>--}}
{{--                </address>--}}
{{--            </div>--}}
            <!-- end col-4 -->

    <div class="row">
        <div class="col-lg-7 col-md-7 ">
{{--        <h6 class="widget-title">SALES OFFICES</h6>--}}
        <address>
            <p>@lang('footer.address') :&nbsp <a class="footer-address" href="https://www.google.com/maps/@41.7453148,44.7738537,18.9z" data-fancybox data-width="640" data-height="360">@lang('footer.alio mirtskhulava str. 9/11') </a></p>
            <p>@lang('footer.contact us') :&nbsp <a class="footer-address" href="tel:(+995) 558 348 000">(+995) 558 348 000</a></p>
            <p>@lang('footer.message us') :&nbsp <a class="footer-address" href="mailto:info@mshenebeli.ge">info@mshenebeli.ge</a><br></p>
        </address>
        </div>
        <div class="col-lg-5 col-md-5">
            @include('ajaxRequest')

        </div>
        <!-- end col-4 -->
    </div>
            <!-- end col-4 -->
{{--            <div class="col-lg-4">--}}
{{--                <h6 class="widget-title">SUBSCRIPTION</h6>--}}
{{--                <p>For more information, please join us.</p>--}}
{{--                <form>--}}
{{--                    <input type="email" placeholder="Type your e-mail">--}}
{{--                    <input type="submit" value="JOIN NOW">--}}
{{--                </form>--}}
{{--            </div>--}}
            <!-- end col-4 -->
            <div class="col-12">
                <div class="footer-bottom"> <span>© 2021 <a class="footer-web" href="http://mshenebeli.ge/">mshenebeli.ge</a> | @lang('footer.rights') |
                        @if ( Config::get('app.locale') == 'ge')
                            დამზადებულია <a class="giga footer-address" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/giga-todadze/"> გიგა თოდაძის</a> მიერ
                    @elseif( Config::get('app.locale') == 'ru')
                            Создатель <a class="giga footer-address"  target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/giga-todadze/"> Гига Тодадзе </a>
                    @else
                            Created by <a class="giga footer-address"   target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/giga-todadze/"> Giga Todadze </a>
                    @endif
                    </span>
                    <ul>
                        <li><a href="https://www.facebook.com/mshenebeli.ge">Facebook</a></li>
                        <li><a href="https://www.instagram.com/mshenebeli.ge/">Instagram</a></li>
{{--                        <li><a href="#">Twitter</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scroll-top"><i class="lni lni-arrow-up"></i>  </a>
</footer>
