 <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
      <div class="container">
       <a class="navbar-brand" href="{{ url('home')}}">Vegefresh</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="{{ url('home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item ">
              <a href="{{ url('categories')}}" class="nav-link">Category</a>
            </li>
            <li class="nav-item">
              <a href="/index.html" class="nav-link">Reward</a>
            </li>
            {{-- <li class="nav-item">
              <a href="/register.html" class="nav-link">Sign up</a>
            </li>
            <li class="nav-item">
              <a href="/login.html" class="btn btn-success nav-link px-4 text-white">Sign in</a>
            </li> --}}
            
          </ul>
       </div>
      </div>
    </nav>