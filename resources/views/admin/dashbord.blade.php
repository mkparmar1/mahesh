<!-- Header Content -->
@include('admin.adminlayouts.header')
<!-- End Header Content -->

<!-- Sidebar Content -->
@include('admin.adminlayouts.sidebar')
<!-- End Sidebar Content -->

<!-- Navbar Content -->
@include('admin.adminlayouts.navbar')
<!-- End NavBar Content -->

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <a href="{{url('adminuserpro')}}"><div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Properties</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $data1}}
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <a href="{{url('dashbord')}}"><div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Clients</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $data2}}
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <a href="{{url('admincontact')}}"><div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Contact</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $data3}}
                    <span class="text-danger text-sm font-weight-bolder"></span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div></a>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6">
        <div class="card">
          <div class="card-body p-3">
            <a href="{{url('admincomment')}}"><div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-capitalize font-weight-bold">Comment</p>
                  <h5 class="font-weight-bolder mb-0">
                    {{ $data4}}
                    <span class="text-success text-sm font-weight-bolder"></span>
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                  <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div></a>
          </div>
        </div>
      </div>
    </div>
</div>
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
                        @foreach($users as $user)
                        @if ($user->role_id == "1")

                        @else
                                                <tr>
                                                    <td>
                                                      <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="/uploads/avatars/{{$user['avatar']}}" style="width:100px;height: 100px;">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                          <h6 class="mb-0 text-sm">{{$user['name']}}</h6>
                                                          <p class="text-xs text-secondary mb-0">{{$user['email']}}</p>
                                                        </div>
                                                      </div>
                                                    </td>
                                                      <td class="align-middle text-center text-sm">
                                                        <span class="badge badge-sm bg-gradient-success">{{$user['id']}}</span>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">{{$user['phone']}}</span>
                                                      </td>
                                                      <td class="align-middle text-center text-sm">
                                                        <span class="badge badge-sm bg-gradient-success">{{$user['userid']}}</span>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">{{$user['created_at']}}</span>
                                                      </td>
                                                      <td class="align-middle text-center">
                                                        <span class="text-secondary text-xs font-weight-bold">{{$user['updated_at']}}</span>
                                                      </td>
                                                <td>
                                        <form method="get" action="{{url('AdminUserdelete') }}/{{\Crypt::encrypt($user->id)}}" style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                            <button class="btn btn-danger" onclick="return confirm('Sure to Delete !!!')">Delete</button>
                                        </form>
                                        </td>
                                </td>
                                            </tr>
                                   @endif
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
