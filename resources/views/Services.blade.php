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
                        <h1 class="page-title">Buy Properties</h1>
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


                        <!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear">
                        <div id="list-type" class="proerty-th">
                                @foreach ($data as $i)
                                @if ($i)
                                <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a ><img src="/uploads/service/{{$i->profile}}"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="detailsproperty"> {{$i->name}} </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Contact :</b> {{$i->phone}} </span><br>
                                            <span class="pull-left"><b> City :</b> {{$i->city}} </span><br>
                                            <span class="pull-left"><b> Work :</b> {{$i->work}} </span>
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
