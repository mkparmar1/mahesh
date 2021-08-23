        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img width="200px" src="assets/img/logo3.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        @guest
                            @if (Route::has('login'))
                                    <a href="{{ route('register') }}" ><button class="navbar-btn nav-button wow bounceInRight login"
                                        data-wow-delay="0.45s">Registration</button></a>
                                    <a href="{{ route('login') }}" ><button class="navbar-btn nav-button wow bounceInRight login"
                                        data-wow-delay="0.45s">Login</button></a>
                            @endif
                        </div>
                        @else

                            <ul class="main-nav nav navbar-nav navbar-right">
                                <li class="dropdown ymm-sw ">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                        data-delay="200"><img src="/uploads/avatars/{{Auth::user()->avatar}}" alt="" style="width: 30px;border-radius:50%; height:30px;"/>
                                        {{ Auth::user()->name }}
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu navbar-nav">
                                        <li>
                                            <a href="{{url('profiles')}}" title="Profile"> Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{url('submit-property')}}" title="Submit-Property"> Submit Property</a>
                                        </li>
                                        <li >
                                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"> Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        @endguest


                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="dropdown ymm-sw ">
                            <a href="/" class="active" data-delay="200">Home </a>
                        </li>
                        <li class="dropdown ymm-sw ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                data-delay="200">Properties<b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="{{url('buyproperty')}}">Buy Properties</a>
                                </li>
                                <li>
                                    <a href="{{url('submit-property')}}">Sell Properties</a>
                                </li>
                                <li>
                                    <a href="{{url('rentproperty')}}">Rent Properties</a>
                                </li>

                            </ul>
                        </li>
                        <li class="wow fadeInDown"><a href="{{url('service')}}" title="Service">Service</a></li>
                        <li class="wow fadeInDown"><a href="{{url('contact ')}}" title="Contact">Contact</a></li>

                        @guest
                            @if (Route::has('login'))
                            @endif
                        @else
                            <li class="wow fadeInDown"><a href="{{url('userpro')}}">Your Properties</a></li>
                            <li class="wow fadeInDown"><a href="{{url('watchlist')}}">Your WatchList</a></li>
                        @endguest


                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
