@guest
@if(Route::has('login'))
    @include('newLogin')
@endif
@else
@include('layouts.header')

        <div class="page-head">
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Rent Properties</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">
                <div class="row">


                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear">


                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">
                                @foreach ($data as $i)
                                @if($i->pstatus=="Rent")
                                <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}" ><img src="/uploads/userpro/1/{{$i->pics1}}"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}"> {{$i->pname}} </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Built In Year:</b> {{$i->pbuilt}} </span>
                                            <span class="proerty-price pull-right"> ₹ {{$i->pprice}}</span>
                                            <p style="display: none;">{{$i->pdesc}}</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">({{$i->bedroom}})|
                                                <img src="assets/img/icon/shawer.png">({{$i->bathroom}})|
                                                <img src="assets/img/icon/cars.png">({{$i->parking}})
                                            </div>
                                            <span class="proerty-price pull-right">
                                                <form method="post" action="{{url('SubmitProuserlike') }}">
                                                    @csrf

                                                    <input name="like" value="like" hidden>
                                                    <input name="property_id" value="{{$i->id}}" hidden>
                                                    <input name="user_id" value="{{Auth::user()->id}}" hidden>

                                                    <button class="btn btn-primary">Like</button>

                                                </form>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footer')
@endguest
