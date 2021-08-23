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
                        <h1 class="page-title">Update property</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" >
                    <div class="wizard-container">

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form action="/update{{$data->id}}" method="post" enctype="multipart/form-data" >
                                @csrf


                                <div class="tab-pane">
                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <hr>
                                                    <div class="picture">
                                                        <label>Property Photo-1 <small>(required)</small></label>
                                                        <input type="file" id="wizard-picture" name="pics1" >
                                                    </div><br><hr>
                                                    <div class="picture">
                                                        <label>Property Photo-2 <small>(required)</small></label>
                                                        <input type="file" id="wizard-picture"  name="pics2">
                                                    </div>
                                                    <br><hr>
                                                    <div class="picture">
                                                        <label>Property Photo-3 <small>(required)</small></label>
                                                        <input type="file"  id="wizard-picture"  name="pics3">
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Property name <small>(required)</small></label>
                                                    <input name="pname" value="{{$data->pname}}" type="text" class="form-control" >
                                                </div>

                                                <div class="form-group">
                                                    <label>Property price <small>(required)</small></label>
                                                    <input name="pprice" value="{{$data->pprice}}" type="text" class="form-control" placeholder="3330000">
                                                </div>
                                                <div class="form-group">
                                                    <label>Built In <small>(For Ex. 1990/2010/2020)</small></label>
                                                    <input name="pbuilt" type="text" value="{{$data->pbuilt}}" class="form-control" placeholder="(For Ex. 1990/2010/2020)">
                                                </div>
                                                <div class="form-group">
                                                    <label>Telephone <small>(empty if you wanna use default phone number)</small></label>
                                                    <input name="phone2" value="{{$data->phone2}}" type="text" class="form-control" value="{{ Auth::user()->phone }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input name="email" type="text" class="form-control" readonly value="{{ $data->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->
<hr>
                                        <h4 class="info-text"> How much your Property is Beautiful ? </h4>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Property Description :</label>
                                                        <input name="pdesc" value="{{$data->pdesc}}" placeholder="BEAUTIFUL PROPERTY WITH AMAZING SERENITY" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Country  :</label>
                                                        <select name="country"  class="show-tick form-control">
                                                            <option> -Status- </option>
                                                            <option value="India" id="India" selected>India </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property State :</label>
                                                        <select name="state" id="lunchBegins" class="show-tick form-control"  data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option value="Gujrat" id="Gujrat" selected>Gujrat</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property City :</label>
                                                        <select name="city" id="lunchBegins" class="show-tick form-control" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option value="Junagadh"  selected>Junagadh</option>
                                                            <option value="Rajkot">Rajkot</option>
                                                            <option value="Ahemdabad">Ahemdabad</option>
                                                            <option value="Surat">Surat</option>
                                                            <option value="Vadodara">Vadodara</option>
                                                            <option value="Jamnagar">Jamnagar</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>STOREROOMS</label>
                                                        <select name="storeroom" id="lunchBegins" class="show-tick form-control" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option value="{{$data['storeroom']}}" selected>None</option>
                                                            <option >1</option>
                                                            <option >2</option>
                                                            <option >3</option>
                                                            <option >4</option>
                                                            <option >5</option>
                                                            <option >6</option>
                                                            <option >7</option>
                                                            <option >8</option>
                                                            <option >9</option>
                                                            <option >10</option>
                                                            <option >11</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>BEDROOMS</label>
                                                        <select id="lunchBegins" name="bedroom" class="show-tick form-control" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option selected>1</option>
                                                            <option >2</option>
                                                            <option >3</option>
                                                            <option >4</option>
                                                            <option >5</option>
                                                            <option >6</option>
                                                            <option >7</option>
                                                            <option >8</option>
                                                            <option >9</option>
                                                            <option >10</option>
                                                            <option >11</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>BATHROOMS</label>
                                                        <select id="lunchBegins" name="bathroom" class="show-tick form-control" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option selected>1</option>
                                                            <option >2</option>
                                                            <option >3</option>
                                                            <option >4</option>
                                                            <option >5</option>
                                                            <option >6</option>
                                                            <option >7</option>
                                                            <option >8</option>
                                                            <option >9</option>
                                                            <option >10</option>
                                                            <option >11</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Parking  :</label>
                                                        <select id="basic" name="parking" class=" show-tick form-control">
                                                          <option selected>None </option>
                                                            <option >Bike </option>
                                                            <option >Cars</option>
                                                            <option >Both</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Ac/Non :</label>
                                                        <select id="basic" name="ac" class=" show-tick form-control">
                                                            <option selected>AC </option>
                                                            <option >Non-AC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                         <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Kitchen</label>
                                                        <select name="kitchen" id="lunchBegins" class="show-tick form-control"  data-live-search-style="begins" title="Select your city">
                                                            <option selected>Yes</option>
                                                            <option >No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Garden</label>
                                                        <select name="garden" id="lunchBegins" class="show-tick form-control"  data-live-search-style="begins" title="Select your city">
                                                            <option >Yes</option>
                                                            <option selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Swimming Pool</label>
                                                        <select id="lunchBegins" name="spool" class="show-tick form-control"  data-live-search-style="begins" title="Select your city">
                                                            <option >Yes</option>
                                                            <option selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Garages</label>
                                                        <select id="lunchBegins" name="garages" class="show-tick form-control" data-live-search-style="begins" title="Select your city">
                                                            <option >Yes</option>
                                                            <option selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->
<hr>
                                    <div class="tab-pane" id="step3">
                                        <div class="col-sm-12">
                                            <div class="col-sm-3">
                                                <div class="form-group">
                                                    <label>Property Statue  :</label>
                                                    <select id="basic" name="pstatus" class=" show-tick form-control">
                                                        <option >Rent </option>
                                                        <option selected>Sell</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <!--  End step 3 -->
                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">

                                        <input type='submit' name="submit" class='btn btn-finish btn-primary ' value='Finish' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                        <!-- End submit form -->
                    </div>
                </div>
            </div>
        </div>


@include('layouts.footer')
@endguest


