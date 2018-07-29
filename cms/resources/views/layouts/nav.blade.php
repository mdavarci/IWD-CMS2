     <header class="header">
      <!-- Main Navbar-->
         @include('layouts.errors')
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand">Mirkan Blog</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
            @if (Auth::check())
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="/menus" class="nav-link ">Menu</a>
              </li>
              <li class="nav-item"><a href="/posts" class="nav-link active ">Posts</a>
              </li>
        
                <a href="#" class="nav-link ">{{Auth::user()->name}}</a>
           
              </li>

            </ul>

            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>

            <ul class="langs navbar-text"><a href="#" class="active">EN</a></ul>@endif

            <ul class="navbar-nav ml-auto">

            @auth
            <a class="btn btn-sm btn-outline-secondary" href="/posts/create">Create new post</a>

            <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
            @endauth

           @guest
            <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a><span>    </span>
            <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a></ul>
           @endguest
          </div>
        </div>
      </nav>
    </header>