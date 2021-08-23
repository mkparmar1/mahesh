<!-- Header Content -->
@include('admin.adminlayouts.header')
<!-- End Header Content -->

<!-- Sidebar Content -->
@include('admin.adminlayouts.sidebar')
<!-- End Sidebar Content -->

<!-- Navbar Content -->
@include('admin.adminlayouts.navbar')
<!-- End NavBar Content -->

                <!-- Begin Page Content -->
                    <div class="container-fluid py-4">
                        <div class="row">
                          <div class="col-12">
                            <div class="card mb-4">
                              <div class="card-header pb-0">
                                <h6>ADD SERVICES TABLE</h6>
                              </div>
                              <div class="card-body px-0 pt-0 pb-2">
                                <div class="table-responsive p-0">
                                  <table class="table align-items-center mb-0">
                                    <thead>
                                      <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USERS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED_AT</th>
                                      </tr>
                                    </thead>
                                    <form action="addservice" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <tbody>

                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Full Name</label>
                                                                        <input type="text" name="name" class="form-control" placeholder="Full name">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputState">Phone Number</label>
                                                                        <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                                                                      </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Other Phone Number</label>
                                                                        <input type="text" name="newphone" class="form-control" placeholder="Other Phone Number">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputEmail4">City</label>
                                                                        <select id="inputState" name="city" class="form-control">
                                                                            <option selected>Choose City</option>
                                                                            <option >Junagadh</option>
                                                                            <option >Rajkot</option>
                                                                            <option >Ahemdabad</option>
                                                                            <option >Baroda</option>
                                                                            <option >Vadodra</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Gender</label>
                                                                        <select id="inputState" name="gender" class="form-control">
                                                                            <option selected disabled>Choose Gender</option>
                                                                            <option >Male</option>
                                                                            <option>Female</option>
                                                                            <option>Other</option>
                                                                        </select>
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputEmail4">Work</label>
                                                                        <select id="inputState" name="work" class="form-control">
                                                                            <option selected>Choose Work</option>
                                                                            <option>Water Supplay</option>
                                                                            <option>Transport</option>
                                                                            <option>Kuli</option>
                                                                            <option>Mechinic</option>
                                                                            <option>Any Other-Service</option>

                                                                        </select>
                                                                      </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Add Picture</label>
                                                                        <input type="FILE" name="profile" class="form-control">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                                                    </td>
                                                                </tr>
                                    </tbody>
                                    </form>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                            <div class="row">
                              <div class="col-12">
                                <div class="card mb-4">
                                  <div class="card-header pb-0">
                                    <h6>SERVICES TABLE</h6>
                                  </div>
                                  <div class="card-body px-0 pt-0 pb-2">
                                    <div class="table-responsive p-0">
                                      <table class="table align-items-center mb-0">
                                        <thead>
                                          <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USERS</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ID</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MOBILE NO.</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER ID</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED_AT</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated_At</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                            <th class="text-secondary opacity-7"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $i)


                                                                    <tr>
                                                                        <td>
                                                                          <div class="d-flex px-2 py-1">
                                                                            <div>
                                                                                <img src="/uploads/service/{{$i->profile}}" style="width:100px;height: 100px;">
                                                                            </div>
                                                                            <div class="d-flex flex-column justify-content-center">
                                                                              <h6 class="mb-0 text-sm">{{$i->name}}</h6>
                                                                              <p class="text-xs text-secondary mb-0"></p>
                                                                            </div>
                                                                          </div>
                                                                        </td>
                                                                          <td class="align-middle text-center text-sm">
                                                                            <span class="badge badge-sm bg-gradient-success">{{$i->phone}}</span>
                                                                          </td>
                                                                          <td class="align-middle text-center">
                                                                            <span class="text-secondary text-xs font-weight-bold">{{$i->newphone}}</span>
                                                                          </td>
                                                                          <td class="align-middle text-center text-sm">
                                                                            <span class="badge badge-sm bg-gradient-success">{{$i->city}}</span>
                                                                          </td>
                                                                          <td class="align-middle text-center">
                                                                            <span class="text-secondary text-xs font-weight-bold">{{$i->gender}}</span>
                                                                          </td>
                                                                          <td class="align-middle text-center">
                                                                            <span class="text-secondary text-xs font-weight-bold">{{$i->work}}</span>
                                                                          </td>
                                                                    <td>
                                                        <a type="button" href="{{url('adminserviceupdate')}}/{{\Crypt::encrypt($i->id)}}" class="btn btn-primary">Update</a> &nbsp;

                                                        <form method="get" action="{{url('AdminServicedelete') }}/{{\Crypt::encrypt($i->id)}}" style="display:inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                                <button class="btn btn-danger" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                                                            </form>
                                                            </td>
                                                    </td>
                                                                </tr>


                                                                @endforeach
                                                            </tbody>
                                      </table>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
<!-- Footer Content -->
@include('admin.adminlayouts.footer')
<!-- Footer Content -->
