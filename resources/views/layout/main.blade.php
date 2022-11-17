<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title', $title)</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/main/vendor/bootstrap/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="/general/css/alertify.min.css">
  <link rel="stylesheet" href="/main/css/modern-business.css">
  <script src="/main/vendor/jquery/jquery.min.js"></script>
  <script src="/main/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/general/js/alertify.min.js"></script>
  <script src="/general/js/general.js"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @if(!Auth::guest() && Auth::user()->type == 'admin')
          <li class="nav-item">
            <a class="nav-link" href="/admin/panel">panel</a>
          </li>
          @endif

          @if(Auth::guest())
          <li class="nav-item">
            <a class="nav-link" href="/login">login</a>
          </li>
          @endif

          <li class="nav-item">
            <a class="nav-link" href="/">home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/blogs">blogs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/pages">pages</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/contact">contact</a>
          </li>

          {{-- 
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Portfolio
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
              <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Blog
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
              <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
              <a class="dropdown-item" href="blog-post.html">Blog Post</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Other Pages
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="full-width.html">Full Width Page</a>
              <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
              <a class="dropdown-item" href="faq.html">FAQ</a>
              <a class="dropdown-item" href="404.html">404</a>
              <a class="dropdown-item" href="pricing.html">Pricing Table</a>
            </div>
          </li>
           --}}
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="wrapper">
    <div class="container mt-5">
      @yield('content')
    </div>
  </div>


  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">{{$copyright}}</p>
    </div>
  </footer>
  
    @if(session()->has('success'))
        <script>alertify.success('{{session('success')}}')</script>
    @endif
    
    @if(session()->has('error'))
        <script>alertify.error('{{session('error')}}')</script>
    @endif

     @if(session()->has('warning'))
        <script>alertify.warning('{{session('warning')}}')</script>
    @endif

    @foreach($errors->all() as $error)
        <script>alertify.error('{{$error}}')</script>
    @endforeach

</body>
</html>
