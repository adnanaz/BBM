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
  <a class="navbar-brand" href="#"><img src="/bibit/assets/title1.png" style="width: 121px; height: 20px;"></a>
  <div class="navbar-category">
          <a href="#" class="category-button">
            
            <div class="category-btn">
              Category
            </div>
          </a>
          <ul class="category-menu">
            <li class="category-dropdown">
              <a href="#"><img src="https://img.icons8.com/color/20/000000/sesame.png">Benih</a>
              <ul class="category-submenu">
                <!-- <li class="submenu-header"></li> -->
                <li class="submenu-header">Benih</li>
                <li><a href="#">Benih Celosia</a></li>
                <li><a href="#">Benih Matahari</a></li>
                <li><a href="#">Benih Aster</a></li>
                <li><a href="#">Benih Vinca</a></li>
                <li><a href="#">Kenop Putih</a></li>
                <li class="submenu-divider"></li>
                <li><a href="#">Tampilkan lebih lanjut</a></li>
              </ul>
            </li>
            <li class="category-dropdown">
              <a href="#"><img src="https://img.icons8.com/color/20/000000/paper-bag-with-seeds.png">Bibit</a>
              <ul class="category-submenu">
                <!-- <li class="submenu-header"></li> -->
                <li class="submenu-header">Bibit</li>
                <li><a href="#">Bibit Celosia</a></li>
                <li><a href="#">Benih Matahari</a></li>
                <li><a href="#">Benih Aster</a></li>
                <li><a href="#">Benih Vinca</a></li>
                <li><a href="#">Kenop Putih</a></li>
                <li class="submenu-divider"></li>
                <li><a href="#">Tampilkan lebih lanjut</a></li>
              </ul>
            </li>
            <li class="category-dropdown">
              <a href="#"><img src="https://img.icons8.com/dusk/20/000000/flower.png">Tanaman</a>
              <ul class="category-submenu">
                <!-- <li class="submenu-header"></li> -->
                <li class="submenu-header">Tanaman</li>
                <li><a href="#">Bunga Matahari</a></li>
                <li><a href="#">Bunga Kamboja</a></li>
                <li><a href="#">Bunga Aster</a></li>
                <li class="submenu-divider"></li>
                <li><a href="#">Tampilkan lebih lanjut</a></li>
              </ul>
            </li>
            <li class="category-dropdown">
              <a href="#"><img src="https://img.icons8.com/cotton/20/000000/tree.png">Pohon</a>
              <ul class="category-submenu">
                <!-- <li class="submenu-header"></li> -->
                <li class="submenu-header">Pohon</li>
                <li><a href="#">Pohon Stroberi</a></li>
                <li><a href="#">Bunga Mangga</a></li>
                <li><a href="#">Bunga jeruk</a></li>
                <li class="submenu-divider"></li>
                <li><a href="#">Tampilkan lebih lanjut</a></li>
              </ul>
            </li>
            <li class="category-dropdown">
              <a href="#"><img src="https://img.icons8.com/color/20/000000/orchid.png">bunga</a>
              <ul class="category-submenu">
                <!-- <li class="submenu-header"></li> -->
                <li class="submenu-header">Bunga</li>
                <li><a href="#">Bunga Anggrek</a></li>
                <li><a href="#">Bunga Mangga</a></li>
                <li><a href="#">Bunga jeruk</a></li>
                <li class="submenu-divider"></li>
                <li><a href="#">Tampilkan lebih lanjut</a></li>
              </ul>
            </li>
          </ul>
        </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <form action="/produk/search" method="POST" class="form-inline md-2 md-lg-0">
      {{ csrf_field() }}
      <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari Bibit,Tanaman">
      <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Search</button>
      <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Masuk</button>
    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit" style="color: #fff; border-color: #fff;">Daftar</button>
    </form>
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