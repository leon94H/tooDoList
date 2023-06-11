

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow nav">




    <div class="container-fluid">

      <a class="navbar-brand" href="{{route('index')}}">home</a>

      <button class="navbar-toggler" type="button"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          @guest
              
         
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>

          @else

          <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();" >Logout</a></li>


        

          <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none"> 
            @csrf 
          </form>

      
              
          @endguest


          
        </ul>




        @auth

        <li class="nav-item mt-2 me-2 ms-2">

         Welcome {{Auth::user()->name}}

        </li>

      @else

        <li class="nav-item mt-2 me-2 ms-2">

         Hi! Log in!

        </li>
          
      @endauth
    
      </div>
    </div>
  </nav>