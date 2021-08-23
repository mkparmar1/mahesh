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
                        <h1 class="page-title">Your Property</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FFF;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 pr-30 padding-top-40 properties-page user-properties">
                        <div class="section">
                            <div id="list-type" class="proerty-th-list">
                                @foreach($data as $i)
                                @if(Auth::user()->email==$i->email)
                                <div class="col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}" ><img src="/uploads/userpro/1/{{$i->pics1}}"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}"> {{$i->pname}} </a><span class="proerty-pric pull-right">
                                                <span class="proerty-price pull-right">
                                                    <form method="post" action="{{url('SubmitProuserlike') }}">
                                                        @csrf

                                                        <input name="like" value="like" hidden>
                                                        <input name="property_id" value="{{$i->id}}" hidden>
                                                        <input name="user_id" value="{{Auth::user()->id}}" hidden>

                                                        <button class="btn btn-primary">Like</button>
                                                    </form>
                                                </span>
                                <!--<form action="/update1" method="post">

                                    <button  name="like" value="like">Like</button>
                                    <button name="Unlike" value="Unlike"> Unlike</button>
                                </form>-->
                                        </span></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Built In :</b> {{$i->pbuilt}} </span>
                                            <span class="proerty-price pull-right"> ₹{{$i->pprice}} </span><br>
                                            <span class="pull-left"><b> Posted Date :</b> {{$i->created_at}} </span>
                                            <span class="proerty-price pull-right"><u> <i>{{$i->pstatus}}</i></u> </span>
                                            <p style="display: none;">{{$i->pdesc}}</p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">({{$i->bedroom}})|
                                                <img src="assets/img/icon/shawer.png">({{$i->bathroom}})|
                                                <img src="assets/img/icon/cars.png">({{$i->parking}})

                                                <div class="dealer-action pull-right">
                                                    <a href="{{url('SubmitProedit')}}/{{\Crypt::encrypt($i->id)}}" class="button">Edit </a>
                                                    <a onclick="return confirm('Sure to Delete !!!')" href="{{url('SubmitProdelete') }}/{{\Crypt::encrypt($i->id)}}" class="button delete_user_car">Delete</a>
                                                    <a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}" class="button">View</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="section">
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
