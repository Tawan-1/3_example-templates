  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="/">nana<span class="color-b">phan</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="/">หน้าแรก</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/new">สินค้าขายดี</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/product">สินค้าทั้งหมด</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="/content">contanct</a>
          </li>
        
          


      @if (Route::has('login'))
      @auth

   
    <li class="nav-item">
      <a class="nav-link " href="{{ url('/admin/home') }}">admin</a>
    </li>
  @else
    <li class="nav-item @@contact"><a class="nav-link" href="{{ route('login') }}">login</a></li>

    @if (Route::has('register'))
    <li class="nav-item @@contact"><a class="nav-link" href="{{ route('register') }}">register</a></li>

    @endif

    @endauth

  
    @endif
  </ul>
    </div>

  </nav>
  <!-- End Header/Navbar -->