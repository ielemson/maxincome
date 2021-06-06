<header id="header" class="d-flex align-items-center">
    
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{url('/')}}">
        
        <img src="/img/maxincome-logo.png"/>
        <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Packages</a></li>
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              {{-- <li><a href="{{route('login')}}">Login</a></li>
              <li><a href="{{route('register')}}">Register</a></li> --}}

              @if (Route::has('login'))
                  @auth
                  @php
                    $username = Auth::user()->name;
                  @endphp
                  <li><a href="{{route("user-dashboard",Auth::user()->username)}}">Dashboard</a></li> 

                      <li class="li"><a href="{{ route('logout') }}" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">Logout</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                          @csrf
                      </form>
                  @else
                      <li ><a href="{{ route('login') }}"> Login</a>
                      </li>
                      <li><a href="{{ route('register') }}">Register</a>
                      </li>
                     
                  @endauth
              
          @endif

            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header>