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
                <h1 class="page-title">Hello : <span class="orange strong">Profiles</span></h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area user-profiel " style="background-color: #FCFCFC;">&nbsp;
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 profiel-container">
                <form enctype="multipart/form-data" action="/profiles" method="POST">
                    @csrf
                    <div class="profiel-header">
                        <h3>
                            <b>BUILD</b> YOUR PROFILE <br>
                            <small>This information will let us know more about you.</small>
                        </h3>
                        <hr>
                    </div>
                    <div class="col-sm-6 col-sm-offset-1">
                        <img  src="/uploads/avatars/{{Auth::user()->avatar}}" name="image" class="picture-src" style="width:300px; border-radius:50%; height:300px; margin-top:50px;">
                        <span class="text-danger">@error('avatar') {{ $message }} @enderror</span>
                    </div>
                    {{csrf_field()}}
                    <div class="card">
                        <div class="col-sm-3 padding-top-25">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input style="box-shadow: 5px 5px 15px 5px #000000;" type="text" value="{{ Auth::user()->name}}" class="form-control" name="name" placeholder="" />
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>

                            </div>

                            <div class="form-group">
                                <label for="name">Mobile</label>
                                <input type="text" style="box-shadow: 5px 5px 15px 5px #000000;" value="{{ Auth::user()->phone}}" class="form-control" name="phone" placeholder="" />
                                <span class="text-danger">@error('phone') {{ $message }} @enderror</span>

                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" value="{{ Auth::user()->email}}" class="form-control" name="email" placeholder="" readonly />
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>

                            </div>
                            <div class="form-group">

                                <label for="avatar">Avatar</label>
                                <input type="file" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" name="avatar" class="form-control" />
                                <span class="text-danger">@error('avatar') {{ $message }} @enderror</span>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token()}}" />



                            <div class="col-sm-5 col-sm-offset-1">
                                <button type='submit' style="box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;" class='btn btn-finish btn-primary' name='finish' value='Finish'>Submit</button>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div><!-- end row -->
</div>
</div>


@include('layouts.footer')
@endguest
