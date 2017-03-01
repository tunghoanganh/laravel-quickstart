
<nav class="navbar navbar-default navbar-toggleable-md navbar-light bg-faded">

  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="{{ url('/') }}">
      Task List
  </a>

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
                </div>
            </li>
        @endif
    </ul>
  </div>
  
</nav>
