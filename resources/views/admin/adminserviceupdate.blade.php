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
                                <h6>UPDATE SERVICES TABLE</h6>
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

                                    <form action="/upservice{{$data->id}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                    <tbody>



                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Full Name</label>
                                                                        <input type="text" value="{{$data->name}}" name="name" class="form-control" placeholder="Full name">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputState">Phone Number</label>
                                                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone Number">
                                                                      </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <label for="inputState">Other Phone Number</label>
                                                                        <input type="text" name="newphone" value="{{$data->newphone}}" class="form-control" placeholder="Other Phone Number">
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputEmail4">City</label>
                                                                        <select id="inputState" value="{{$data->city}}" name="city" class="form-control">
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
                                                                        <select id="inputState" value="{{$data->gender}}" name="gender" class="form-control">
                                                                            <option selected disabled>Choose Gender</option>
                                                                            <option >Male</option>
                                                                            <option>Female</option>
                                                                            <option>Other</option>
                                                                        </select>
                                                                      </td>
                                                                      <td class="align-middle text-center">
                                                                        <label for="inputEmail4">Work</label>
                                                                        <select id="inputState" value="{{$data->work}}" name="work" class="form-control">
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
                                                                        <input type="FILE" value="{{$data->profile}}" name="profile" class="form-control">
                                                                    </td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="align-middle text-center">
                                                                        <button type="submit" class="btn btn-primary">Update</button>
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



<!-- Footer Content -->
@include('admin.adminlayouts.footer')
<!-- Footer Content -->
