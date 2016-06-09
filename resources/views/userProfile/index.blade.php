
 <html>
  <link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dasboardstyle.css') }}">
  <script  src="{{asset('js/angular.min.js') }}"></script>
  <script src="{{asset('js/jquery.min.js') }}"></script>
  <script src="{{asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $('.mainMenuItem').click(function () {
        $('.mainMenuItem').children("ul").hide();
        $(this).children("ul").show();
      });
    });
  </script>
  <title>  
    @yield('title')
  </title>
</head>
<body>
  <!-- this section goes for navbar -->
  <section>
     <nav class="navbar  navbar-static-top" style="background:#263238;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                 welcome to UserProfile section
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
               

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
  </section>
  <!-- navbar section ends  -->
  <!-- rightside section starta  -->
  <div  class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-4 col-lg-2 leftside " >
        <section>
          <div class="menuItems" >
           <ul class="menu" >
             <!-- for dashaborrd -->
             <li class="mainMenuItem dashboard" > 
              <a href="#"><i class="fa fa-tachometer"></i> &nbsp;
               your orders </a>
               <ul class="subMenu " >                            
               <li><a href="{{url('product') }} ">view  products</a></li>
               <li><a href="{{  url('product/create')  }}">add products</a></li>
               </ul>
             </li>
             <!-- for events and news -->
             <li class="mainMenuItem events">
              <a href="#"><i class="fa fa-newspaper-o"></i>&nbsp;
              update profile</a>
               <ul class="subMenu">
                <li><a href="{{url('category') }} ">view  Category</a></li>
               <li><a href="{{  url('category/create')  }}">add Category</a></li>
               </ul>
             </li>
             <!-- for posta -->
            
          </ul>
        </div>
      </section>
    </div>
    <!-- end of the section of the leftside items -->
    <!-- this section for rightside -->
    <div class=" col-md-10 col-sm-9 col-lg-10 col-xs-8 rightside">
      <section style="padding:20px">

     <h1>welcome {{ Auth::user()->name }}</h1>

      </section>
    </div>
  </div>
<!-- end of row -->
</div>
<!-- end of container -->
<!-- end of rightside section -->
</body>
<!-- end of boydy -->
<html>