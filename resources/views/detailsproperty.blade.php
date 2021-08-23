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
                        <h1 class="page-title">Property Details</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section class="post">
                            <div class="text-center padding-b-50">
                                <h2 class="wow fadeInLeft animated">{{$data->pname}}</h2>
                                <div class="title-line wow fadeInRight animated"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">
                                        By <a href="#">M.K.Parmar & Shyam Geriya</a>
                                        in <a href="">Webdesign</a>
                                    </p>
                                </div>
                                <div class="col-sm-6 right" >
                                    <p class="date-comments">
                                        <a href=""><i class="fa fa-calendar-o"></i> {{$data->created_at}}</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="">
                                    <img src="/uploads/userpro/1/{{$data->pics1}}" class="img-responsive" style="height: 600px;" alt="Example blog post alt">
                                </a>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="">
                                    <img src="/uploads/userpro/2/{{$data->pics2}}" class="img-responsive" style="height: 600px;" alt="Example blog post alt">
                                </a>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="">
                                    <img src="/uploads/userpro/3/{{$data->pics3}}" class="img-responsive" style="height: 600px;" alt="Example blog post alt">
                                </a>
                            </div>
                            <div class="single-property-wrapper">
                            <div class="single-property-header">
                                <h1 class="property-title pull-left">{{$data->pname}}</h1>
                                <span class="property-price pull-right">₹ {{$data->pprice}}</span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-tag">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill-rule="evenodd" clip-rule="evenodd" fill="#FFA500" d="M47.199 24.176l-23.552-23.392c-.504-.502-1.174-.778-1.897-.778l-19.087.09c-.236.003-.469.038-.696.1l-.251.1-.166.069c-.319.152-.564.321-.766.529-.497.502-.781 1.196-.778 1.907l.092 19.124c.003.711.283 1.385.795 1.901l23.549 23.389c.221.218.482.393.779.523l.224.092c.26.092.519.145.78.155l.121.009h.012c.239-.003.476-.037.693-.098l.195-.076.2-.084c.315-.145.573-.319.791-.539l18.976-19.214c.507-.511.785-1.188.781-1.908-.003-.72-.287-1.394-.795-1.899zm-35.198-9.17c-1.657 0-3-1.345-3-3 0-1.657 1.343-3 3-3 1.656 0 2.999 1.343 2.999 3 0 1.656-1.343 3-2.999 3z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Status</span>
                                        <span class="property-info-value">For {{$data->pstatus}}</span>
                                    </span>
                                </div>


                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#FFA500" d="M21 48.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v31c0 1.104-.895 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.106 0 2 .896 2 2v7.001c0 1.104-.895 1.999-2 1.999zm25 37.001h-19c-1.104 0-2-.896-2-2v-31c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v31c0 1.104-.896 2-2 2zm0-37.001h-19c-1.104 0-2-.895-2-1.999v-7.001c0-1.104.896-2 2-2h19c1.104 0 2 .896 2 2v7.001c0 1.104-.896 1.999-2 1.999z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bedrooms</span>
                                        <span class="property-info-value">{{$data->bedroom}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bath">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#FFA500" d="M37.003 48.016h-4v-3.002h-18v3.002h-4.001v-3.699c-4.66-1.65-8.002-6.083-8.002-11.305v-4.003h-3v-3h48.006v3h-3.001v4.003c0 5.223-3.343 9.655-8.002 11.305v3.699zm-30.002-24.008h-4.001v-17.005s0-7.003 8.001-7.003h1.004c.236 0 7.995.061 7.995 8.003l5.001 4h-14l5-4-.001.01.001-.009s.938-4.001-3.999-4.001h-1s-4 0-4 3v17.005000000000003h-.001z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Bathrooms</span>
                                        <span class="property-info-value">{{$data->bathroom}}</span>
                                    </span>
                                </div>

                                <div class="col-xs-3 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-garage">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                        <path class="meta-icon" fill="#FFA500" d="M44 0h-40c-2.21 0-4 1.791-4 4v44h6v-40c0-1.106.895-2 2-2h31.999c1.106 0 2.001.895 2.001 2v40h6v-44c0-2.209-1.792-4-4-4zm-36 8.001h31.999v2.999h-31.999zm0 18h6v5.999h-2c-1.104 0-2 .896-2 2.001v6.001c0 1.103.896 1.998 2 1.998h2v2.001c0 1.104.896 2 2 2s2-.896 2-2v-2.001h11.999v2.001c0 1.104.896 2 2.001 2 1.104 0 2-.896 2-2v-2.001h2c1.104 0 2-.895 2-1.998v-6.001c0-1.105-.896-2.001-2-2.001h-2v-5.999h5.999v-3h-31.999v3zm8 12.999c-1.104 0-2-.895-2-1.999s.896-2 2-2 2 .896 2 2-.896 1.999-2 1.999zm10.5 2h-5c-.276 0-.5-.225-.5-.5 0-.273.224-.498.5-.498h5c.275 0 .5.225.5.498 0 .275-.225.5-.5.5zm1-2h-7c-.275 0-.5-.225-.5-.5s.226-.499.5-.499h7c.275 0 .5.224.5.499s-.225.5-.5.5zm-6.5-2.499c0-.276.224-.5.5-.5h5c.275 0 .5.224.5.5s-.225.5-.5.5h-5c-.277 0-.5-.224-.5-.5zm11 2.499c-1.104 0-2.001-.895-2.001-1.999s.896-2 2.001-2c1.104 0 2 .896 2 2s-.896 1.999-2 1.999zm0-12.999v5.999h-16v-5.999h16zm-24-13.001h31.999v3h-31.999zm0 5h31.999v3h-31.999z"></path>
                                        </svg>
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Garages</span>
                                        <span class="property-info-value">{{$data->garages}}</span>
                                    </span>
                                </div>


                            </div>
                            <!-- .property-meta -->
                                                        <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p>{{$data->pdesc}}</p>
                                </div>
                            </div>
                            <!-- End description area  -->

                            <div class="section additional-details">

                                <h4 class="s-property-title">Additional Details</h4>

                                <ul class="additional-details-list clearfix">
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Swimming-Pool</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$data->spool}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Built In</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$data->pbuilt}}</span>
                                    </li>
                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Parking</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$data->parking}}</span>
                                    </li>

               0                     <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Garden</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$data->garden}}</span>
                                    </li>

                                    <li>
                                        <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Store Room</span>
                                        <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry">{{$data->storeroom}}</span>
                                    </li>

                                </ul>
                            </div>
                            <!-- End additional-details area  -->

                            <div class="section property-features">

                                <h4 class="s-property-title">Features</h4>
                                <ul>
                                    <li><a href="../userpro">Swimming Pool</a></li>
                                    <li><a href="../userpro">{{$data->storeroom}} Store Rooms</a></li>
                                    <li><a href="../userpro">{{$data->storeroom}} Parking</a></li>
                                    <li><a href="../userpro">Garden</a></li>
                                </ul>

                            </div>
                            <!-- End features area  -->




                            <p class="read-more">
                                <a href="../userpro" class="btn btn-default btn-border">Show More</a>
                            </p>
                        </section>
                        <section id="comments" class="comments wow fadeInRight animated">
                            <h4 class="text-uppercase wow fadeInLeft animated">comments</h4>

                            @foreach ($com as $x)
                            @foreach ($user as $c)
                            @if($data->id == $x->property_id && $x->user_id == $c->id)

                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="/uploads/avatars/{{$c->avatar}}" style="width: 100px; margin-right:50px" class="img-responsive img-circle">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">{{$c->name}}</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> {{$x->created_at}}</p>
                                    <p>{{$x->msg}}</p>

                                    </p>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endforeach
                            <!-- /.comment -->
                        </section>

                        <section id="comment-form" class="add-comments">
                            <h4 class="text-uppercase wow fadeInLeft animated">Leave comment</h4>
                            <form method="post" action="/sendDetails">
                                @csrf
                                <div class="row wow fadeInLeft animated">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="property_id" value="{{ $data->id }}" id="property_id" type="hidden">
                                            <input class="form-control" name="user_id" value="{{ Auth::user()->id }}" id="user_id" type="hidden">
                                        </div>
                                    </div>
                                </div>
                                <div class="row wow fadeInLeft animated">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="comment">Comment <span class="required">*</span>
                                            </label>
                                            <textarea class="form-control" name="msg" id="comment" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row wow fadeInLeft animated">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary" name="like" value="like"><i class="fa fa-comment-o"></i> Add Comment</button>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>

@include('layouts.footer')
@endguest
