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
                <div class="container-fluid">
                    <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                      <span class="mask bg-gradient-primary opacity-6"></span>
                    </div>
                    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                      <div class="row gx-4">
                        <div class="col-auto">
                          <div class="avatar avatar-xl position-relative">
                            <img src="/uploads/avatars/{{Auth::user()->avatar}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                          </div>
                        </div>
                        <div class="col-auto my-auto">
                          <div class="h-100">
                            <h5 class="mb-1">
                              {{Auth::user()->name}}
                            </h5>
                            <h6>
                                {{Auth::user()->about}}
                            </h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="container-fluid py-4">

                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-4">
                        <div class="card-header pb-0">
                          <h6>REGISTER TABLE</h6>
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
                                                          <tr>
                                                              <td>
                                                                <div class="d-flex px-2 py-1">
                                                                  <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{Auth::user()->name}}</h6>
                                                                    <p class="text-xs text-secondary mb-0">{{Auth::user()->email}}</p>
                                                                  </div>
                                                                </div>
                                                              </td>
                                                                <td class="align-middle text-center text-sm">
                                                                  <span class="badge badge-sm bg-gradient-success">{{Auth::user()->id}}</span>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                  <span class="text-secondary text-xs font-weight-bold">{{Auth::user()->phone}}</span>
                                                                </td>
                                                                <td class="align-middle text-center text-sm">
                                                                  <span class="badge badge-sm bg-gradient-success">{{Auth::user()->userid}}</span>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                  <span class="text-secondary text-xs font-weight-bold">{{Auth::user()->created_at}}</span>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                  <span class="text-secondary text-xs font-weight-bold">{{Auth::user()->updated_at}}</span>
                                                                </td>
                                                          <td>
                                                  <form method="get" action="{{url('AdminUserdelete') }}/{{\Crypt::encrypt(Auth::user()->id)}}" style="display:inline-block">
                                                  @csrf
                                                  @method('DELETE')
                                                      <button class="btn btn-danger" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                                                  </form>
                                                  </td>
                                          </td>
                                                      </tr>


                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- Footer Content -->
                  </div>
                  <div class="container-fluid py-4">
                        <div class="row">
                          <div class="col-12">
                            <div class="card mb-4">
                              <div class="card-header pb-0">
                                <h6>UPDATE ADMIN TABLE</h6>
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
                                    <form action="profiles1" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <tbody>

                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Name</label>
                                                                        <input value="{{Auth::user()->name}}" type="text" name="name" class="form-control" placeholder="Enter name">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputState">Phone Number</label>
                                                                        <input type="text" name="phone" value="{{Auth::user()->phone}}" class="form-control" placeholder="Enter Phone Number">
                                                                        <input value="{{Auth::user()->userid}}" name="userid" hidden>
                                                                      </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Email</label>
                                                                        <input type="text" value="{{Auth::user()->email}}" name="email" class="form-control" placeholder="Enter Email">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputState">About</label>
                                                                        <input type="text" name="about" value="{{Auth::user()->about}}" class="form-control" placeholder="About You">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Add Picture</label>
                                                                        <input type="file" name="avatar" class="form-control" value="{{Auth::user()->avatar}} required>
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

@include('admin.adminlayouts.footer')
<!-- Footer Content -->
