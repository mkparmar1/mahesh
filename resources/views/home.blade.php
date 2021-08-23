
@include('layouts.header')

<div class="slider-area">
    <div class="slider">
        <div id="bg-slider" class="owl-carousel owl-theme">

            <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="GTA V"></div>
            <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div>
            <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="GTA V"></div>

        </div>
    </div>
    <div class="slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2>@guest
                    @if(Route::has('login'))



@endif
@else
<div style="color: darkgoldenrod">
{{Auth::User()->name}}
</div>

@endguest

property Searching Just Got So Easy</h2>
                <p >Buying real estate is not only the best way, the quickest way, the safest way, but the only way to become wealthy</p>
                <!--<div class="search-form wow pulse" data-wow-delay="0.8s">

                    <form action="" class=" form-inline">
                        <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Key word">
                        </div>
                        <div class="form-group">
                            <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">

                                <option selected>Junagadh</option>
                                <option>Rajkot</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="basic" class="selectpicker show-tick form-control">
                                <option> -Status- </option>
                                <option>Rent </option>
                                <option>Buy</option>
                                <option>Sell</option>

                            </select>
                        </div>
                        <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>


                    </form>
                </div>-->
            </div>
        </div>
    </div>
</div>

<!-- property area -->

    @include('propertylist')

<!--Welcome area -->

<div class="Welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 Welcome-entry  col-sm-12">
                <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
                    <div class="welcome_text wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="100">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                                <!-- /.feature title -->
                                <h2>MS ESTATE </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12">
                    <div  class="welcome_services wow fadeInRight" data-wow-delay="0.3s" data-wow-offset="100">
                        <div class="row">
                            <div class="col-xs-6 m-padding">
                                <div class="welcome-estate">
                                    <div class="welcome-icon">
                                        <a href="{{url('buyproperty')}}"> <i class="pe-7s-home pe-4x"></i></a>
                                    </div>
                                    <h3>Any property</h3>
                                </div>
                            </div>
                            <div class="col-xs-6 m-padding">
                                <div class="welcome-estate">
                                    <div class="welcome-icon">
                                        <a href="{{url('service')}}"><i class="pe-7s-users pe-4x"></i></a>
                                    </div>
                                    <h3>Any Services</h3>
                                </div>
                            </div>


                            <div class="col-xs-12 text-center">
                                <i class="welcome-circle"></i>
                            </div>

                            <div class="col-xs-6 m-padding">
                                <div class="welcome-estate">
                                    <div class="welcome-icon">
                                        <a href="{{url('faq')}}"><i class="pe-7s-notebook pe-4x"></i></a>
                                    </div>
                                    <h3>Easy to use</h3>
                                </div>
                            </div>

                            <div class="col-xs-6 m-padding">
                                <div class="welcome-estate">
                                    <div class="welcome-icon">
                                        <a href="{{url('contact')}}"><i class="pe-7s-help2 pe-4x"></i></a>
                                    </div>
                                    <h3>Any help </h3>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--TESTIMONIALS -->
<div class="testimonial-area recent-property"  style="background-color: rgb(240, 240, 240);">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Our Team</h2>
            </div>
        </div>

        <div class="row">
            <div class="row testimonial">
                <div class="col-md-12">
                        <div class="col-md-6">
                        <div class="item">
                            <div class="client-text">
                                <h4><strong>Shyam Geriya</strong></h4>
                                <h5><i>Web Designer</i></h5>
                            </div>
                            <div class="client-face wow translate-middle" data-wow-delay=".9s">
                                <img src="assets/img/sg1.jpg" alt="">
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="item">
                            <div class="client-text">
                                <h4><strong>Mahesh Parmar</strong></h4>
                                <h5><i>Web Developer</i></h5>
                            </div>
                            <div class="client-face">
                                <img src="assets/img/mk.jpg" alt="">
                            </div>
                        </div>
                        </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Count area -->
<div class="count-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>You can trust Us </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                <div class="row">

                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-home"></span>
                            </div>
                            <div class="chart" >
                                <h2 >{{ $data1}}</h2>
                                <h5>Properties in stock</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-flag"></span>
                            </div>
                            <div class="chart" >
                                <h2 >{{ $data2}}</h2>
                                <h5> Registered Users </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-graph2"></span>
                            </div>
                            <div class="chart" >
                                <h2 >{{ $data3}}</h2>
                                <h5>Property Contacts</h5>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-users"></span>
                            </div>
                            <div class="chart" >
                                <h2>
                                    {{ $data4}}
                                </h2>
                                <h5>Contact Us </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- boy-sale area -->
<div class="boy-sale-area">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                <div class="asks-first">
                    <div class="asks-first-circle">
                        <span class="fa fa-search"></span>
                    </div>
                    <div class="asks-first-info">
                        <h2>ARE YOU LOOKING FOR A Property?</h2>
                        <p> If you want to buy property then click now</p>
                    </div>
                    <div class="asks-first-arrow">
                        <a href="buyproperty"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                <div  class="asks-first">
                    <div class="asks-first-circle">
                        <span class="fa fa-rupee"></span>
                    </div>
                    <div class="asks-first-info">
                        <h2>DO YOU WANT TO SELL A Property?</h2>
                        <p>
                            If you want to sell property, that too on a good platform</p>
                    </div>
                    <div class="asks-first-arrow">
                        <a href="submit-property"><span class="fa fa-angle-right"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong">+91 992 524 3238</span></p>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
