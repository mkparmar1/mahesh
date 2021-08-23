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
<!DOCTYPE html>
            <html lang="en">
              <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>ITVMH</title>
                <!-- main style sheet -->
                <link rel="stylesheet" href="3d/css/style.css" />
                <!-- style switcher link -->
                <link rel="stylesheet" href="3d/css/style-switcher.css" />
                <!-- Default color skin style sheet -->
                <link rel="stylesheet" href="3d/css/skins/color.css" />
                <!-- loader css -->
                <link rel="stylesheet" href="3d/css/loader.css" />

                <!-- color switcher  -->
                <link
                  rel="stylesheet"
                  href="3d/css/skins/color-1.css"
                  class="alternate-style"
                  title="color-1"
                />
                <link
                  rel="stylesheet"
                  href="3d/css/skins/color-2.css"
                  class="alternate-style"
                  title="color-2"
                  disabled
                />
                <link
                  rel="stylesheet"
                  href="3d/css/skins/color-3.css"
                  class="alternate-style"
                  title="color-3"
                  disabled
                />
                <link
                  rel="stylesheet"
                  href="3d/css/skins/color-4.css"
                  class="alternate-style"
                  title="color-4"
                  disabled
                />
                <link
                  rel="stylesheet"
                  href="3d/css/skins/color-5.css"
                  class="alternate-style"
                  title="color-5"
                  disabled
                />

                <!-- fontawesome -->
                <link
                  rel="stylesheet"
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
                  integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
                  crossorigin="anonymous"
                />
                <style type="text/css">
                    .sdk1{

                      margin-top: -92px;
                    }
                    .sdk22{
                      border: 1px solid;
                      color: red;
                    }
                    .sdk4{
                    margin-left: 100px;
                      border: 1px solid;
                      color: red;
                    }
                  </style>
              </head>
              <body>
            <!-- contact section -->
            <form enctype="multipart/form-data" action="/profiles" method="POST">
                @csrf
                    <section class="about-section1 section1" id="about">
                <div class="container1">
                  <div class="row">
                    <div class="section-title">
                      <h2 data-heading="main info" style="margin:-50px;">Profile</h2>
                    </div>
                  </div>
                  <div class="row sdk2">
                    <div class="about-img">
                      <div class="img-box inner-shadow">
                        <img
                          src="/uploads/avatars/{{Auth::user()->avatar}}"
                          class="outer-shadow"
                          alt="profile pic"
                        />
                      </div>

                      <div class="social-links">
                        <!--<a href="#" class="outer-shadow hover-in-shadow"
                          ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a href="#" class="outer-shadow hover-in-shadow"
                          ><i class="fab fa-twitter"></i
                        ></a>
                        <a href="#" class="outer-shadow hover-in-shadow"
                          ><i class="fab fa-instagram"></i
                        ></a>
                        <a href="#" class="outer-shadow hover-in-shadow"
                          ><i class="fab fa-linkedin-in"></i
                        ></a>-->
                      </div>
                    </div>

                    <section class="contact-section1 section sdk" id="contact">
                      <div class="container1 sdk1">
                        <div class="row">
                            <div class="contact-item1">
                                <div class="contact-item-inner1 outer-shadow">
                                  <i class="fas fa-user"></i>
                                  <span>Name</span>
                                  <p>{{ Auth::user()->name}}</p>
                                </div>
                              </div>
                            <!-- contact item start -->
                          <div class="contact-item1">
                            <div class="contact-item-inner1 outer-shadow">
                              <i class="fas fa-phone"></i>
                              <span>Phone</span>
                              <p>+91 {{ Auth::user()->phone}}</p>
                            </div>
                          </div>
                          <!-- contact item end -->

                          <!-- contact item start -->
                          <div class="contact-item1">
                            <div class="contact-item-inner1 outer-shadow">
                              <i class="fas fa-envelope"></i>
                              <span>Email</span>
                              <p>{{ Auth::user()->email}}</p>
                            </div>
                          </div>
                          <!-- contact item end -->

                          <!-- contact item start -->



                          <!-- contact item end -->
                        </div>
                        <div class="row">
                            <!-- contact item start -->
                            <div class="contact-item1">
                              <div class="contact-item-inner1 outer-shadow">
                                <i class="fas fa-user"></i>
                                <span>User id</span>
                                <p> {{ Auth::user()->userid}}</p>
                              </div>
                            </div>
                            <!-- contact item end -->

                            <!-- contact item start -->
                            <div class="contact-item1">
                              <div class="contact-item-inner1 outer-shadow">
                                <i class="fas fa-user"></i>
                                <span>About</span>
                                <p>{{ Auth::user()->about}}</p>
                              </div>
                            </div>
                            <!-- contact item end -->

                            <!-- contact item start -->
                            <div class="contact-item1" hidden>
                              <div class="contact-item-inner1 outer-shadow" hidden>
                                <i class="" hidden></i>
                                <span hidden></span>
                                <p hidden></p>
                              </div>
                            </div>


                            <!-- contact item end -->
                          </div>
                        <div class="row1 ">
                          <div class="contact-form1 ">
                            <form action="#">
                              <div class="row1">
                                <div class="w-50 ">
                                  <div class="input-group1 outer-shadow hover-in-shadow">
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{Auth::user()->name}}"
                                      placeholder="Enter Your Name Here"
                                      class="input-control"
                                    />
                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                  </div>

                                  <div class="input-group1 outer-shadow hover-in-shadow">
                                    <input
                                      type="text"
                                      name="phone"
                                      value="{{Auth::user()->phone}}"
                                      placeholder="Enter Your Phone Number Here"
                                      class="input-control"
                                    />
                                    <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                                  </div>


                                  <div class="input-group1 outer-shadow hover-in-shadow">
                                    <input
                                      type="text"
                                      name="about"
                                      value="{{Auth::user()->about}}"
                                      placeholder="Enter Your About Here"
                                      class="input-control"
                                    />
                                    <span class="text-danger">@error('about') {{ $message }} @enderror</span>
                                  </div>
                                  <div class="input-group1 outer-shadow hover-in-shadow">
                                    <input
                                      type="file"
                                      name="avatar"
                                      placeholder="Enter Your topic Here"
                                      class="input-control"
                                    />
                                    <span class="text-danger">@error('avatar') {{ $message }} @enderror</span>
                                  </div>
                                  <input type="hidden" name="_token" value="{{ csrf_token()}}" />
                                  <input type="hidden" name="userid" value="{{Auth::user()->userid}}" />
                                </div>
                              </div>
                              <div class="row">
                                <div class="submit-btn1">
                                  <button name='finish' value='Finish' type="submit" class="btn-l outer-shadow hover-in-shadow">
                                    Update Profile
                                  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div></div></section></form>
                <!-- contact section end -->

                   <div class="style-switcher outer-shadow">
                  <div class="style-switcher-toggle s-icon outer-shadow hover-in-shadow">
                    <i class="fas fa-cog fa-spin"></i>
                  </div>
                  <div class="day-night s-icon outer-shadow hover-in-shadow">
                    <i class="fas fa-moon"></i>
                  </div>
                  <h4>Theme Colors</h4>
                  <div class="colors">
                    <span class="color-1" onclick="setActiveStyle('color-1');"></span>
                    <span class="color-2" onclick="setActiveStyle('color-2');"></span>
                    <span class="color-3" onclick="setActiveStyle('color-3');"></span>
                    <span class="color-4" onclick="setActiveStyle('color-4');"></span>
                    <span class="color-5" onclick="setActiveStyle('color-5');"></span>
                  </div>
                </div>
                <script
                  type="text/javascript"
                  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
                ></script>
                <script src="3d/js/style-switcher.js"></script>
                <script src="3d/js/index.js"></script>
              </body>
            </html>


@include('layouts.footer')
@endguest
