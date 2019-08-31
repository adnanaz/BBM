@extends('layout.app')

@section('title','Informasi Produk')

@section('side-cart')
    <div class="wrapper">
        <section id="cart">
          <span class="cart-title"><i class="fa fa-shopping-cart fa-fw"><span class="cart-counter">0</span></i>Keranjang</span>
          <article class="cart-total">
            <span class="product-price"></i><b>0</b></span><br>
            <button type="button" class="btn btn-outline-info" style="width: 170px;">Lihat Semua</button>
          </article>
          <div class="close"><i class="fa fa-times fa-fw"></i></div>
        </section>
    </div>
@endsection


@section('content')
<style type="text/css">
  #carouselExampleFade.carousel.slide.carousel-fade {
  width: 230px;
  height: 300px;
}

.carousel-inner {
  width: 230px;
  height: 300px;
}
</style>
<div class="container-fluid info" style="margin-top:80px;">
    <div class="d-flex justify-content-start mb-3">
        <div class="produk-img p-2">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="/bibit/assets/products/{{ $diskon->foto1 }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/bibit/assets/products/{{ $diskon->foto2 }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="/bibit/assets/products/{{ $diskon->foto3 }}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <div class="container-fluid">
          <div class="title">{{ $diskon->nama }}</div>
          <div class="harga-awal" style="margin-left: 30px;"><strike>Rp.{{ $diskon->harga_awal }}</strike></div>
          <div class="rp" style="margin-bottom:10px; margin-left: 30px;">Rp.{{ $diskon->harga_diskon }}</div>
          <div class="rating">{!! $diskon->rating !!}</div>
          <div class="gaya">Isi: {{ $diskon->isi }}</div>
          <div class="gaya">Keterangan: {{ $diskon->keterangan }}</div>
          <div class="stock">Stok: {{ $diskon->stok }}</div>

          <div class="xQty">
              <input type='button' value='-' class='qtyminus' field='quantity' />
              <input type='text' name='quantity' value='1' class='qtyValue' min="1" />
              <input type='button' value='+' class='qtyplus' field='quantity' />
          </div><br>
          <div class="buy">
          <button type="button" class="btn btn-outline-info" style="margin-left: 30px;">Beli Sekarang</button>
          <button type="button" class="btn btn-info">Masukkan keranjang</button>
          </div>
        </div>
    </div>


    <div class="d-flex justify-content-start mb-3">
        <div class="">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" role="tab" aria-controls="profile" aria-selected="false">Tips Menanam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu2" role="tab" aria-controls="contact" aria-selected="false">Ulasan</a>
                </li>
              </ul> 
          <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
              <h3>Deskripsi</h3>
              <p>{{ $diskon->deskripsi }}</p>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
              <h3>Tips Menanam</h3>
              <p>{{ $diskon->tips }}</p>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
              <h3>Ulasan</h3>
              <p>{{ $diskon->ulasan }}</p>
            </div>
          </div>
        </div>
      </div>  
</div>   
@endsection

@section('kategori-pilihan')
  <div class="container-fluid info">
  <!-- CATEGORIES OPTION -->
  <div class="jdl ml-4 mt-2">KATEGORI PILIHAN</div>
  <!-- CAROUSEL CATEGORIES -->
  <div class="row mt-2">
    <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
      <div class="MultiCarousel-inner">
        <div class="item">
          <div class="pad15">
            <a href="#">
              <div class="card border-info mx-sm-1 p-1">
                <div class="card border-info shadow text-info p-2 my-card" ><span class="fa fa-seedling" aria-hidden="true"></span></div>
                <div class="text-info text-center"><h6 style="color: #5bc0de; margin-top: 5px;">Bibit Bunga</h6></div>
              </div>
            </a>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <a href="#">
              <div class="card border-success mx-sm-1 p-1">
                <div class="card border-success shadow text-success p-2 ml-1 my-card"><span class="fa fa-tree" aria-hidden="true"></span></div>
                <div class="text-success text-center"><h6 style="color: #5cb85c; margin-top: 5px;">Pohon</h6></div>
                
              </div>
            </a>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-danger mx-sm-1 p-1">
              <div class="card border-danger shadow text-danger p-2 my-card" ><span class="fa fa-apple-alt" aria-hidden="true"></span></div>
              <div class="text-danger text-center"><a href="#"><h6 style="color: #d9534f; margin-top: 5px;">Buah</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Terlaris</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-info mx-sm-1 p-1">
              <div class="card border-info shadow text-warning p-2  my-card"> <span class="fas fa-hands" style="color:#5bc0de;"></span></div>
              <div class="text-info text-center"><a href="#"><h6 style="color: #5bc0de; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="pad15">
            <div class="card border-warning mx-sm-1 p-1">
              <div class="card border-warning shadow text-warning p-2 my-card" ><span class="fa fa-inbox" aria-hidden="true"></span></div>
              <div class="text-warning text-center"><a href="#"><h6 style="color: #f0ad4e; margin-top: 5px;">Tips Menanam</h6></a></div>
            </div>
          </div>
        </div>
        
      </div>
      <button class="btn btn-success leftLst"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-left.png"></button>
      <button class="btn btn-success rightLst" style="margin-right: 15px;"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-right.png"></button>
    </div>
  </div> 
</div>
@endsection

@section('rekomendasi')

<div class="container-fluid info">
<div class="jdl ml-4 mt-2">REKOMENDASI</div>

<div class="d-flex justify-content-start mb-3 flex-wrap">
    <div class="">
      <section id="catalog" class="text-center">
    <article class="product" style="margin-right:50px;" data-product-id="1">
      <div class="product-wrapper">
        <div class="product-img">
          <img src="/bibits/assets/products/aster.jpg"/>
        </div>
        <div class="product-info">
          <span class="product-brand">Bibit Aster</span><!-- 
          <span class="product-decription">Bibit Aster</span> -->
          <span class="product-volume">isi 100</span>
          <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i>
          <div class="d-flex justify-content-start mb-3"> 
          <div class="rp">Rp.</div><span class="product-price">15000</span>
          <div class="product-footer">  
          <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
          </div>
        </div>
      </div>
      </div>
    </article>

    <article class="product" style="margin-right:50px;" data-product-id="2">
      <div class="product-wrapper">
        <div class="product-img">
          <img src="assets/products/bunga_kenop.jpg" alt="">
        </div>
        <div class="product-info">
          <span class="product-brand">Bunga Kenop</span>
          <!-- <span class="product-decription">Bunga Kenop</span> -->
          <span class="product-volume">isi 100</span></a>
         <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i>
          <div class="d-flex justify-content-start mb-3"> 
          <div class="rp">Rp.</div><span class="product-price">15000</span>
          <div class="product-footer">  
          <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
          </div>
        </div>
      </div>
    </div>
  </article>

  <article class="product" style="margin-right:50px;" data-product-id="3">
      <div class="product-wrapper">
        <div class="product-img">
          <img src="assets/products/bunga_kenop.jpg" alt="">
        </div>
        <div class="product-info">
          <span class="product-brand">Bunga Kenop</span>
          <!-- <span class="product-decription">Bunga Kenop</span> -->
          <span class="product-volume">isi 100</span></a>
         <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i>
          <div class="d-flex justify-content-start mb-3"> 
          <div class="rp">Rp.</div><span class="product-price">15000</span>
          <div class="product-footer">  
          <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
          </div>
        </div>
      </div>
    </div>
  </article>

  <article class="product" style="margin-right:50px;" data-product-id="4">
      <div class="product-wrapper">
        <div class="product-img">
          <img src="assets/products/bunga_kenop.jpg" alt="">
        </div>
        <div class="product-info">
          <span class="product-brand">Bunga Kenop</span>
          <!-- <span class="product-decription">Bunga Kenop</span> -->
          <span class="product-volume">isi 100</span></a>
         <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
class="fas fa-star text-warning"></i>
          <div class="d-flex justify-content-start mb-3"> 
          <div class="rp">Rp.</div><span class="product-price">15000</span>
          <div class="product-footer">  
          <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
          </div>
        </div>
      </div>
    </div>
  </article>
  
    
    </div>
  </div>
</div>
@endsection