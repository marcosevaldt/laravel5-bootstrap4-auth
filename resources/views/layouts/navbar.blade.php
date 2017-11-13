<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    @guest
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
    </ul>
    @else
    <ul class="navbar-nav mr-auto">
      <!--  -->
    </ul>
    <ul class="navbar-nav">
    	<li class="nav-item dropdown">
    	  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    	    {{ Auth::user()->name }}
    	  </a>
    	  <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
              Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
    	  </div>
    	</li>
    </ul>
    @endguest
  </div>
</nav>