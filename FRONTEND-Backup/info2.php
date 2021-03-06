<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="magnify.css">
  <link rel="stylesheet" type="text/css" href="quantity.css">
   <link rel="stylesheet" type="text/css" href="cat.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body> 


  <!-- header -> navbar -->
  <div class="container-fluid">
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#2BBBAD;">
        <a class="navbar-brand" href="#">
          <img src="assets/logoj.png" alt="logo" style="width:58px;">
        </a>
        <a class="nav-link mt-2" href="#">Bibit Bunga Murah
          <span class="sr-only">(current)</span>
        </a>
        <div class="navbar-category">
          <a href="javascript:;" class="category-button">
            
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
        <form class="form-inline my-1 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari Bibit,pohon,tanaman" aria-label="Search" style="width: 300px;">
          <a href="#" class="btn btn-outline">Search</a>
          <a href="#" class="btn btn-outline ml-2">Masuk</a>
           <a href="#" class="btn btn-outline ml-2">Daftar</a>
         
        </form>
      </nav>
<?php 
include 'connect.php';
$data = mysqli_query($koneksi,"select * from benih");
if($d = mysqli_fetch_array($data)){
?>
<div class="wrapper">
        <section id="cart">
          <span class="cart-title"><i class="fa fa-shopping-cart fa-fw"><span class="cart-counter">0</span></i>Keranjang</span>
          <article class="cart-total">
            <span class="product-price"></i><b>0</b></span><br>
            <button type="button" class="btn btn-outline-info" style="width: 170px;">Lihat Semua</button>
          </article>
          <div class="close"><i class="fa fa-times fa-fw"></i></div>
        </section>
  
     <div class="col-md-8 ml-4 pt-2 " style="margin-top:80px;">
        
        <div class="card" style="max-width: 900px;">
  <div class="row no-gutters mt-5">
    <div class="col-md-4 ml-4">
      
      <img id="sample-watch" src="<?php echo $d['foto']; ?>" alt="Sample image" class="zoom" data-magnify-src="<?php echo $d['foto']; ?>" class="image-fluid">

    </div>
<article class="detail-total">
<div class="row">
    <div class="col-md-12">
            
   <table>
            <tr>
              <th><h4><?php echo $d['benih_nama']; ?></h4>
                     <i class="fas fa-star text-success"></i>
                     <i class="fas fa-star text-success"></i>
                     <i class="fas fa-star text-success"></i>
                     <i class="fas fa-star text-success"></i>
              </th>

            <tr>
            <td><h5>Rp <?php echo $d['harga']; ?></h5></td>
            </tr>
            <tr>
              <th><h5>Stok : <?php echo $d['stok']; ?></h5></th>
            </tr>
          </tr>
           
        </table>
         <div class="xQty">
    <input type='button' value='-' class='qtyminus' field='quantity' />
    <input type='text' name='quantity' value='1' class='qtyValue' min="1" />
    <input type='button' value='+' class='qtyplus' field='quantity' />
</div><br>
<div class="buy">
<button type="button" class="btn btn-outline-info">Beli Sekarang</button>
<button type="button" class="btn btn-info">Masukkan keranjang</button>
</div>

    </div>
    </div>
</div>

<div class="container-fluid">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Deskripsi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Ulasan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Catatan Produk</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Deskripsi</h3>
      <p><?php echo $d['deskripsi']; ?></p>
      </strong>
      <strong>Tips perawatan</strong>
      <ul>
        <li><p><?php echo $d['tips']; ?></p></li>
      </ul>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Ulasan</h3>
      <p>Belum ada ulasan</p>
      <p>Hanya pelanggan yang telah membeli produk ini yang dapat memberikan ulasan.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Catatan Produk</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
</div>
<?php
}
?>


 <!-- PRODUCTS -->
          <section id="catalog">
<?php 
include 'connect.php';
$kolom = 5;
$i = 1;
$data = mysqli_query($koneksi,"select * from benih");
while($d = mysqli_fetch_array($data)){
  if(($i) % $kolom== 1) {
    echo'<div class="row">';
  }
?>
            <article class="product" data-product-id="<?php echo $d['benih_id']; ?>">
              <div class="product-wrapper">
                <div class="product-img">
                  <img src="<?php echo $d['foto']; ?>" alt="">
                </div>
                <div class="product-info">
                  <span class="product-brand"><a href class="add-detail"><?php echo $d['benih_nama']; ?></a></span>
                  <span class="product-decription"><?php $num_char = 15; $text = $d['deskripsi']; echo substr($text, 0, $num_char) . '...';?></span>
                  <span class="product-volume">Isi <?php echo $d['isi']; ?></span></a>
                  <div class="product-footer">
                    <button class="add-cart button">Add to cart</button>
                    <span class="product-price"><?php echo $d['harga']; ?></span>
                  </div>
                </div>
              </div>
            </article>
    <?php
    if(($i) % $kolom== 0) {
      echo'</div>';
    }
    $i++;
    }
    ?>


<!--  Modal lOGIN -->
<!-- <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Silahkan Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="p-3">
                <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </div>
      </div>





<div >
<button type="button" class="btn btn-secondary"
data-dismiss="modal">Kembali</button>
<button type="button" class="btn btn-danger">Beli</button>
</div> --> 

</div>
</div>
</div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--<![endif]-->
<script src="jquery.magnify.js"></script>
<script>
var $zoom;
$(document).ready(function() {
  // Initiate magnification powers
  $zoom = $('.zoom').magnify({
      afterLoad: function() {
        console.log('Magnification powers activated!');
      }
    });
});
$('button').click(function() {
  $zoom.destroy();
});
$('html').on({
  magnifystart: function() {
    console.log('\'magnifystart\' event fired');
  },
  magnifyend: function() {
    console.log('\'magnifyend\' event fired');
  }
});
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-2843793-6', 'auto');
ga('send', 'pageview');
</script>

<script type="text/javascript" src="quantity.js"></script>
<script type="text/javascript" src="info.js"></script>
<script type="text/javascript" src="info2.js"></script>


</body>
</html>
