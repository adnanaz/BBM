<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/bibit/css/coba3.css">
    <link rel="stylesheet" type="text/css" href="/bibit/css/cat.css">
    <link rel="stylesheet" type="text/css" href="/bibit/css/style1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  
    <link rel="stylesheet" href="/bibit/css/magnify.css">
    <link rel="stylesheet" type="text/css" href="/bibit/css/quantity.css">

  </head>
  <body>
    <!--NAV -->
    <div class="container-fluid">
     <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color:#2BBBAD;">
<div class="container-fluid">
  <a class="navbar-brand" href="/"><img src="/bibit/assets/title1.png" style="width: 121px; height: 20px;"></a>
  <div class="navbar-category">
          <a href="#" class="category-button">
            
            <div class="category-btn">
              Category
            </div>
          </a>
          <ul class="category-menu">
            @foreach ($categories as $category)
              <li class="category">
                <a href="{{ route('shop.index', ['category' => $category->slug]) }}"><img src="https://img.icons8.com/color/20/000000/sesame.png">{{ $category->nama }}</a>
              </li>
            @endforeach
          </ul>
        </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <form action="/produk/search" method="POST" class="form-inline md-2 md-lg-0">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" name="cari" type="search" value="{{ request()->input('cari') }}" placeholder="Cari Bibit,Tanaman">
      <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Search</button>
    </form>
    
    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Masuk</button>
    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Daftar</button>
    <a href="{{ route('cart.index') }}"><button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Cart</button></a>
    {{-- <a href="produk/checkout/{{ $sayur ->id }}" class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Daftar</a> --}}
  </div>  
 </div>
</nav>
    </div>
      {{-- end navbar --}}

      @yield('side-cart')

      @yield('carousel')

      @yield('category-option')

      @yield('content')

      @yield('kategori-pilihan')
      
      @yield('rekomendasi')

   
        </body>

        <script type="text/javascript" src="/bibit/js/countdown.js"></script>
        <script type="text/javascript" src="/bibit/js/coba3.js"></script>
        <script type="text/javascript" src="/bibit/js/quantity.js"></script>
        <script type="text/javascript" src="/bibit/js/info.js"></script>
      </html>