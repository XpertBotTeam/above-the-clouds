
<style>
    .log{

    }

    </style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{url('images/logo.png')}}" alt="logo" style="width: 80px;">
    </a>

    <div class="mx-auto" style="width: 600px;">

    <div class="collapse navbar-collapse" id="navbarNav" >

      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="{{url('/airlines')}}">Airlines </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/hotels')}}">Hotels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tours')}}">Tours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/route')}}">Route</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">✈️ ☁️ ✈️ 🌥️</a>
          </li>



                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>



  </ul>
    </div>

  </div>
  <div class="nav-item" style="width: 300px;">
  <form class="form-inline my-3 my-lg-0" action="{{url('/search')}}" method="get">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0 float-end" type="submit">Search</button>
        </form>
    </div>
  </nav>
