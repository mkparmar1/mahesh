<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Top submitted property</h2>
                <p>Recently Added New Properties </p>
            </div>
        </div>

        <div class="row">
            <div class="proerty-th">
                @foreach ($data as $i)
                    @if(Auth::user()=="")
                        <div class="col-sm-6 col-md-3 p0" >
                            <div class="box-two proerty-item" style="box-shadow:7px 7px 6px 0px rgba(50, 50, 50, 0.75);">
                                <div class="item-thumb">
                                    <a href="login" ><img src="/uploads/userpro/1/{{$i->pics1}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="login" >{{$i->pname}}</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Built In :</b> {{$i->pbuilt}}</span>
                                    <span class="proerty-price pull-right">₹ {{$i->pprice}}</span>

                                    <span class="pull-left"><b>Property Status :</b> {{$i->pstatus}}</span>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item" style="box-shadow:7px 7px 6px 0px rgba(50, 50, 50, 0.75);">
                                <div class="item-thumb">
                                    <a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}" ><img src="/uploads/userpro/1/{{$i->pics1}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="{{url('SubmitProshow')}}/{{\Crypt::encrypt($i->id)}}" >{{$i->pname}} </a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Built In :</b> {{$i->pbuilt}}</span>
                                    <span class="proerty-price pull-right">₹ {{$i->pprice}}</span>
                                    <span class="pull-left"><b>Property Status :</b> {{$i->pstatus}}</span>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
