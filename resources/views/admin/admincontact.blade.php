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
            <h6>CONTACT TABLE</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">first name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">subject</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">message</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED_AT</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated_At</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($data as $i)
                                            <tr>
                                                  <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->id}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->firstname}}</span>
                                                  </td>
                                                  <td class="align-middle text-center text-sm">
                                                    <span class="badge badge-sm bg-gradient-success">{{$i->email}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->subject}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->message}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->created_at}}</span>
                                                  </td>
                                                  <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">{{$i->updated_at}}</span>
                                                  </td>
                                            <td>
                                    <form method="get" action="{{url('AdminCondelete') }}/{{\Crypt::encrypt($i->id)}}" style="display:inline-block">
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
