<nav class="navbar navbar-expand-lg navbar-light bg-light">
 <a class="navbar-brand" href="{{url('/') }}"> <img class="ms-5 brand-logo " src="{{asset('images/logo.png')}}"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/') }}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about') }}">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="{{url('/portfolio') }}" >Portfolio </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link " href="{{url('/service') }}" >Service </a>
      </li>
   
    </ul>

    </form>
  </div>
</nav>