<footer class="main-footer pt-0 pb-3 bg-dark" style="background-color:#231f20 !important;">
    <style>
        ul li a {
            font-size: 13px
        }
    </style>
    <section class="vc_row" style="background-color:#231f20 !important;">
        <div class="container footer-mobile">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12 pl-0">
                    @if(App::getLocale()=='en')
                    <h3 class="text-white mb-1 mt-4">REACH US ON</h3>
                    @else
                    <h3 class="text-white mb-1 mt-4">Связаться с нами</h3>
                    @endif
                    <a href="https://twitter.com/">
                    <ion-icon name="logo-twitter" class="text-white"></ion-icon>
                    </a> &nbsp;&nbsp;
                    <a href="https://www.facebook.com/">
                    <ion-icon name="logo-facebook" class="text-white"></ion-icon>
                    </a>
                   &nbsp;&nbsp;
                   <a href="https://www.instagram.com/">
                   <ion-icon name="logo-instagram" class="text-white"></ion-icon>
                   </a>
                     &nbsp;&nbsp;
                     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                     <a href="https://t.me/">
                <i class="fa fa-telegram" style="color:white;"></i>
                   </a>
                   &nbsp;&nbsp;
{{--                    <span class="text-white">@atecafoundation </span><span class="text-white "> &nbsp;&nbsp;&nbsp;gm@atecafoundation.com</span>--}}
                </div>
            </div>
            <div class="row">

                <div class="lqd-column col-md-8 col-xs-8 mb-0">


                    <div class="row mt-4">
                        <!-- <div class="col-sm-12 col-lg-3 col-md-3 ml-0 mr-0 pl-0 ">
                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">
                                <li><b class="text-white">Dubai</b></li>
                                <li class="mb-1"><a href="#" class="text-white">1– E, Silver Tower, Cluster </a></li>
                                <li class="mb-1"><a href="#" class="text-white">I
                                        Jumeirah Lakes Tower</a></li>
                                <li class="mb-1"><a href="#" class="text-white">
                                        +971 50 697 5146</a></li>

                            </ul>
                        </div> -->
                        @if(App::getLocale()=='en')
                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">
                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">
                                <li><b class="text-white">Tashkent</b></li>
                                <li class="mb-1"><a href="#" class="text-white">   7, Namunaviy street, Muchum SHFY, Sohibkor MFY, Chartak area, Namangan district, Uzbekistan</a></li>

                                <li class="mb-1"><a href="#" class="text-white">
                                        +998900363111</a></li>


                            </ul>
                        </div>
{{--                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">--}}
{{--                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">--}}
{{--                                <li><b class="text-white">Queensland</b></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">P.O. Box 1301, Noosa</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">Heads Queensland</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                        4567 Australia</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">--}}
{{--                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">--}}
{{--                                <li><b class="text-white">Los Angeles</b></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">18580 Ventura Boulevard</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">Tarzana </a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                    California 91356</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                        @else
{{--                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">--}}
{{--                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">--}}
{{--                                <li><b class="text-white">Ташкент</b></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">Ташкент, Чиланзарский  </a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                    район, улица Новза, 10 </a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                        +998 71150 36 63</a></li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">--}}
{{--                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">--}}
{{--                                <li><b class="text-white">Квинсленд: </b></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">P.O. Box 1301, Noosa</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">Heads Queensland</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                        4567 Australia</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-12 col-lg-4 col-md-4 ml-0 mr-0 pl-0 ">--}}
{{--                            <ul class="lqd-custom-menu reset-ul font-size-18 lh-1">--}}
{{--                                <li><b class="text-white">Лос-Анжелес: </b></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">18580 Ventura Boulevard</a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">Tarzana </a></li>--}}
{{--                                <li class="mb-1"><a href="#" class="text-white">--}}
{{--                                    California 91356</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                        @endif
                    </div>


                    </li>
                </div>
                <!-- /.col-md-2 -->

                <div class="lqd-column col-md-4 col-xs-4 mb-0">

                    @if(App::getLocale()=='en')

                    <div class="row mt-4">
                        <div class="lqd-column col-md-6 col-sm-12 ml-0 mr-0 pl-0  ">
                            <ul class="lqd-custom-menu reset-ul font-size-13 lh-2 ">
                                <!-- <li><a href="/About-ATECA-Foundation" class="text-white ">About Chortoq Foundation</a></li> -->

                                <li><a href="/Who-We-are " class="text-white ">Who we are</a></li>
                                <li><a href="/What-We-Do" class="text-white ">What we do</a></li>
                                <li><a href="/Where-We-Work" class="text-white ">Where we work</a></li>
                                <li><a href="/Get-Involved " class="text-white ">Get involved</a></li>
                            </ul>
                        </div>
                        <!-- /.lqd-column col-md-6 -->
                        <div class="lqd-column col-md-6 col-sm-12 ml-0 mr-0 pl-0  ">
                            <ul class="lqd-custom-menu reset-ul font-size-13 lh-2 ">

                                <li><a href="/press" class="text-white ">Press</a></li>
                                <li><a href="/careers" class="text-white ">Careers</a></li>
                                <li><a href="/contact-us" class="text-white ">Contact Us</a></li>

                            </ul>
                        </div>
                        <!-- /.lqd-column col-md-6 -->

                    </div>
                    @else
                    <div class="row mt-4">
                        <div class="lqd-column col-md-6 col-sm-12 ml-0 mr-0 pl-0  ">
                            <ul class="lqd-custom-menu reset-ul font-size-13 lh-2 ">
                                <!-- <li><a href="/About-ATECA-Foundation" class="text-white ">About Chortoq Foundation</a></li> -->

                                <li><a href="/Who-We-are " class="text-white ">Кто мы</a></li>
                                <li><a href="/What-We-Do" class="text-white ">Что мы делаем</a></li>
                                <li><a href="/Where-We-Work" class="text-white ">Где мы работаем</a></li>
                                <li><a href="/Get-Involved " class="text-white ">Вовлечение</a></li>
                            </ul>
                        </div>
                        <!-- /.lqd-column col-md-6 -->
                        <div class="lqd-column col-md-6 col-sm-12 ml-0 mr-0 pl-0  ">
                            <ul class="lqd-custom-menu reset-ul font-size-13 lh-2 ">

                                <li><a href="/press" class="text-white ">Пресса</a></li>
                                <li><a href="/careers" class="text-white ">Карьера</a></li>
                                <li><a href="/contact-us" class="text-white ">Связаться с нами</a></li>

                            </ul>
                        </div>
                        <!-- /.lqd-column col-md-6 -->

                    </div>
                    @endif
                    <!-- /.row -->

                </div>
                <!-- /.col-md-4 -->


            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>


</footer>
