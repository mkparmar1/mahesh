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
                        <h1 class="page-title">Contact-Us<span class="orange strong"></span></h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
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
          </head>
          <body>
        <!-- contact section -->
            <section class="contact-section section" id="contact">
              <div class="container">
                <div class="row">
                  <div class="section-title">
                    <h2 data-heading="contact">Get In Touch</h2>
                  </div>
                </div>
                <div class="row">
                  <!-- contact item start -->
                  <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                      <i class="fas fa-phone"></i>
                      <span>Phone</span>
                      <p>+91 99 25 24 32 38</p>
                    </div>
                  </div>
                  <!-- contact item end -->

                  <!-- contact item start -->
                  <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                      <i class="fas fa-envelope"></i>
                      <span>Email</span>
                      <p>Mkparmar.131@gmail.com</p>
                    </div>
                  </div>
                  <!-- contact item end -->

                  <!-- contact item start -->
                  <div class="contact-item">
                    <div class="contact-item-inner outer-shadow">
                      <i class="fas fa-map-marker-alt"></i>
                      <span>Address</span>
                      <p>Bava Nu Gam</p>
                      <p>Junagadh</p>
                    </div>
                  </div>
                  <!-- contact item end -->
                </div>
                <div class="row">
                  <div class="contact-form">
                    <form action="submit" method="post">
                        @csrf {{ method_field('POST') }}  <div class="row">
                        <div class="w-50">
                          <div class="input-group outer-shadow hover-in-shadow">
                            <input
                              type="text"
                              value="{{ Auth::user()->name }}"
                              placeholder="Enter Your Name Here"
                              class="input-control"
                              name="firstname"
                              readonly
                            />
                            <span class="text-danger">@error('firstname') {{ $message }} @enderror</span>
                          </div>

                          <div class="input-group outer-shadow hover-in-shadow">
                            <input
                              type="text"
                              value="{{ Auth::user()->email }}"
                              placeholder="Enter Your Email Here"
                              class="input-control"
                              name="email"
                              readonly
                            />
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                          </div>
                          <div class="input-group outer-shadow hover-in-shadow">
                            <input
                              type="text"
                              placeholder="Enter Your topic Here"
                              class="input-control"
                              name="subject"
                            />
                            <span class="text-danger">@error('subject') {{ $message }} @enderror</span>
                          </div>
                        </div>
                        <div class="w-50">
                          <div class="input-group outer-shadow hover-in-shadow">
                            <textarea
                              placeholder="Enter Your Message Here"
                              class="input-control"
                              name="message"
                            ></textarea>
                            <span class="text-danger">@error('message') {{ $message }} @enderror</span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="submit-btn">
                          <button
                            type="submit"
                            class="btn-l outer-shadow hover-in-shadow"
                          >
                            Send Message
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
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
