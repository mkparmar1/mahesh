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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Property Picture </th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Property Name & Email</th>


                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">price</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">built in</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">mobile no.</th>

                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">country</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">state</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">city</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">store room</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">bedroom</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">bathroom</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">parking</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ac</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kitchen</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">garden</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">swiming pool</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">garages</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">terms</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">created at</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">updated at</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>


                </tr>

                </thead>
                <tbody>
                    @foreach($data as $i)
                                            <tr>

                                                <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->id}}</span>
                                                  </td>
                                                <td>
                                                  <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/uploads/userpro/1/{{$i->pics1}}" style="width:100px;height: 100px;">&nbsp;
                                                    </div>
                                                    <div>
                                                        <img src="/uploads/userpro/1/{{$i->pics2}}" style="width:100px;height: 100px;">&nbsp;
                                                    </div>
                                                    <div>
                                                        <img src="/uploads/userpro/1/{{$i->pics3}}" style="width:100px;height: 100px;">&nbsp;
                                                    </div>

                                                  </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{$i->pname}}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{$i->email}}</p>
                                                      </div>
                                                </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->pprice}}</span>
                                                  </td>
                                                  <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->pbuilt}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->phone2}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->pdesc}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->country}}</span>
                                                  </td>
                                                  <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->state}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->city}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->storeroom}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->bedroom}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->bathroom}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->parking}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->ac}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->kitchen}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->garden}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->spool}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->garages}}</span>
                                                  </td>
                                                  <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->pstatus}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->termes}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->created_at}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->updated_at}}</span>
                                                  </td>
                                            <td>
                                    <form method="get" action="{{url('AdminProdelete') }}/{{\Crypt::encrypt($i->id)}}" style="display:inline-block">
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
