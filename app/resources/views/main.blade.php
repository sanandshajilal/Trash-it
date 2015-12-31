<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Trash it.</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand"href="#">TRASH IT</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="#intro" class="menu-anim page-scroll">
                 <span>
                  <span>Home</span>
                  <span>Home</span>
                 </span>
              </a>
          </li>
          <li><a href="#service" class="menu-anim page-scroll">
                 <span>
                  <span>Service</span>
                  <span>Service</span>
                 </span>
              </a>
          </li>
          <li><a href="#about" class="menu-anim page-scroll">
                 <span>
                  <span>About </span>
                  <span>About </span>
                 </span>
              </a>
          </li>

          <li><a href="#how" class="menu-anim page-scroll">
                 <span>
                  <span>How ?</span>
                   <span>How ?</span>
                 </span>
              </a>
          </li>
          <li><a href="#blog" class="menu-anim page-scroll">
                 <span>
                  <span>Blog</span>
                   <span>Blog</span>
                 </span>
              </a>
          </li>
          <li><a href="#login" class="menu-anim page-scroll">
                 <span>
                  <span>Login</span>
                  <span>Login</span>
                 </span>
              </a>
          </li>
          <li><a href="#contact" class="menu-anim page-scroll">
                 <span>
                  <span>Contact </span>
                  <span>Contact </span>
                 </span>
              </a>
          </li>

        </ul>
      </div>
          <!-- /.navbar-collapse -->
    </div>
          <!-- /.container-fluid -->
  </nav>
<!--Navbar Over-->

<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Intro</h1>
                <a class="btn btn-default page-scroll" href="#service">Call Our Hero</a>
            </div>
        </div>
    </div>
</section>
<!-- Services Section -->
<section id="service" class="services-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Services Section</h1>
            </div>
        </div>
    </div>
</section>
<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:#fff">About Section</h1>
            </div>
        </div>
    </div>
</section>

<!-- How Section -->
<section id="how" class="how-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>How Section</h1>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->
<section id="blog" class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:#fff">Blog Section</h1>
            </div>
        </div>
    </div>
</section>
<!-- Login Section -->
<section id="login" class="login-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Login Section</h1>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 style="color:#fff">Contact Us</h2>

            </div>
        </div>

        @if(isset($values))
          <h3 style="color:#fff">Successfull</h3>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" method="POST" id="contactForm" action="{{url('/contact#contact')}}" novalidate>
                  {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text"  class="form-control" placeholder="Your Name *" name="name">

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" name="email">

                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Your Phone *" name="phone">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" name="message"></textarea>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery.easing.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
<script src="{{url('js/nav-scroll.js')}}"></script>

</body>
</html>