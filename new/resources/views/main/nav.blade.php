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
      <a class="navbar-brand page-scroll logo" href="#intro"><img src="{{url('img/logo_light.png')}}"></a>
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
        @if(isset($user)&&$user)

        <li><a href="#user" class="menu-anim page-scroll">
               <span>
                <span>Account</span>
                <span>Account</span>
               </span>
            </a>
        </li>

        @else

        <li><a href="#login" class="menu-anim page-scroll">
               <span>
                <span>Login</span>
                <span>Login</span>
               </span>
            </a>
        </li>

        @endif

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
