@extends('layout/app')

@section('title','Bibit Bunga Murah')

@section('side-cart')
    <div class="wrapper">
        <section id="cart">
        <span class="cart-title"><i class="fa fa-shopping-cart fa-fw"><span class="cart-counter">0</span></i>Keranjang</span>
        <article class="cart-total">
            <span class="product-price"></i><b>0</b></span><br>
            <button class="button order">Beli Sekarang</button>
        </article>
        <div class="close"><i class="fa fa-times fa-fw"></i></div>
        </section>
    </div>
@endsection


@section('carousel')
     <!-- BANNER -->
           <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/bibit/assets/banner1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/bibit/assets/banner2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/bibit/assets/banner3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection

@section('category-option')
    <!-- CATEGORIES OPTION -->
    <div class="jdl ml-4 mt-2">KATEGORI PILIHAN</div>
    <!-- CAROUSEL CATEGORIES -->
    <div class="row mt-2">
      <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
        <div class="MultiCarousel-inner">
          @foreach ($categories as $category)
              
          <div class="item">
            <div class="pad15">
              <a href="{{ route('shop.index', ['category' => $category->slug]) }}">
                <div class="card border-info mx-sm-1 p-1">
                  <div class="card border-info shadow text-info p-2 my-card" ><span class="fa fa-seedling" aria-hidden="true"></span></div>
                  <div class="text-info text-center"><h6 style="color: #5bc0de; margin-top: 5px;">{{ $category->nama }}</h6></div>
                </div>
              </a>
            </div>
          </div>

          @endforeach
          
        </div>
        <button class="btn btn-success leftLst"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-left.png"></button>
        <button class="btn btn-success rightLst" style="margin-right: 15px;"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-right.png"></button>
      </div>
    </div> 
@endsection

@section('content')
  <!-- CONTENT -->
   <div class="container-fluid" style="padding: 0;">
    <div class="flashsale row" style="height: 400px; background-color:#31c4b5;">
      
  <div class="jdl ml-4" style="margin: 15px 2px 0 5px; padding: 0 15px;">DISKON CEPAT</div>
<section class="mod-countdown js-countdown mt-3">
  <div class="judul">Berakhir dalam : </div>
  <div class="days primary">
    <span class="count"></span> 
    <span class="label"> : </span>  
  </div>
  <div class="hours secondary">
    <span class="count"></span>
    <span class="label"> : </span>
  </div>
  <div class="minutes secondary">
    <span class="count"></span>
    <span class="label"> : </span>
  </div>
  <div class="seconds secondary">
    <span class="count"></span>
    <span class="label"><img src="https://img.icons8.com/metro/15/000000/lightning-bolt.png"></span>
  </div>
</section>
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">
                <div class="d-flex justify-content-start mb-3">
   
@foreach ($diskon as $dis)

  <div class="item">
    <div class="pad15" style="background-color: #ffff;">                 
      <a href="{{ route('diskon.show_diskon', $dis->slug) }}">
      <figure class="produk">
      <div class="cover">
        {{-- <img src="{{ asset('storage/'.$dis->image) }}"/> --}}
        <img src="{{ asset('storage/'.$dis->foto1) }}"/>
      </div>
      <h2 style="margin:0;">{{ $dis->nama }}</h2>
      <div class="price">
        <p><strike>{{ $dis->harga_awal }}</strike></p>
        <h6>{{ $dis->harga_diskon }}</h6>
        <p>{!! $dis->rating !!}</p>
      </div>
      </figure>
      </a>  
    </div>
  </div>

@endforeach
            </div>
           
        </div>
         <button class="btn btn-success leftLst" style="margin-top: 10px;"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-left.png"></button>
            <button class="btn btn-success rightLst"style="margin-top: 10px;"><img src="https://img.icons8.com/ios-filled/15/000000/long-arrow-right.png"></button>
    </div>

        </div>

          
  <!-- PRODUCTS -->
  <div class="container-fluid mt-2" style="padding-left: 2px;padding-right: 2px;margin-left: 7px;margin-right: auto;">
    <div class="d-flex justify-content-start flex-wrap">
    <section id="catalog" class="text-center">
    @foreach ($produk as $bibit)
    <a href="{{ route('produk.show', $bibit->slug) }}">
    <article class="product" data-product-id="{{$bibit ->id}}">
      <div class="product-wrapper">
        <div class="product-img">
          <img src="{{ asset('storage/'.$bibit->foto1) }}"/>
        </div>
      </a>
        <div class="product-info">
          <span class="product-brand">{{ $bibit->nama }}</span><!-- 
          <span class="product-decription">Bibit Aster</span> -->
          <span class="product-volume">{{ $bibit->isi }}</span>
          <p>{!! $bibit->rating !!}</p>
          <div class="d-flex justify-content-start mb-3"> 
          <div class="rp">Rp.<span class="product-price">{{ $bibit->harga }}</span></div>
          <div class="product-footer">
              
          <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
          </div>
        </div>
      </div>
      </div>
    </article>
    @endforeach
    {{-- {{ $produk->links() }} --}}
  </section>
   </div>
   </div>
          
        
            
   <div class="d-flex justify-content-center">	
    <div class="blank"></div>
    {{-- <div class="load mb-3 mt-3">
      <button type="button" class="btn btn-outline-success">Muat lebih banyak</button>
    </div> --}}
    <div class="blank"></div>
    </div>

          <div class="line"></div>
          <div class="d-flex justify-content-between">
            <div class="mitra"><h6 style="text-align: left;">Mau ikut jualan bunga? bermitra dengan bibit bunga murah sekarang! Mudah,nyaman,dan transaksi mudah GRATIS!</h6></div>
            <div class="null"></div>
            <div class="sosmed"><text>Temukan kami di :</text>
              <a href="#"><img src="/bibit/assets/tokped.png" class="image-fluid" style="width: 40px; height: 40px;"></a>
              <a href="#"><img src="/bibit/assets/bukalapak3.png" class="image-fluid" style="width: 38px; height: 38px; margin-top: 4px;"></a>
              <a href="#"><img src="/bibit/assets/instagram.png" class="image-fluid" style="width: 38px; height: 38px;margin-top: 4px;"></a>
              <a href="#"><img src="/bibit/assets/wa.png" class="image-fluid" style="width: 45px; height: 45px; margin-top: 10px;"></a>
            </div>
          </div>
          <div class="d-flex justify-content-start">
            <div class="daftar"><button type="button" class="btn btn-outline-success">Ikut Berjualan GRATIS</button></div>
            <div class="more"><a href="#">Pelajari lebih lanjut</a></div>
          </div>
          <div class="line"></div>
          <div id="summary">
            <p class="collapse" id="collapseSummary">
              Bibit Bunga Murah merupakan situs jual beli online di Indonesia yang memiliki banyak produk tanaman dan menjual berbagai macam produk untuk memenuhi kebutuhan tanaman Anda. Belanja online terasa semakin mudah dan menyenangkan saat ini karena apapun yang Anda inginkan pasti bisa ditemukan di Bibit Bunga Murah. Cari tanaman kesukaanmu, belanja untuk menghias taman anda, beli berbagai kebutuhan bercocok tanam, semua bisa kamu lakukan hanya dengan sekali klik.
            </p>
            <a class="collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a> </div>
            <div class="line"></div>
            <div class="d-flex justify-content-start mb-3">
              <div class="p-2"> <img src="/bibit/assets/logoj.png" alt="logo" style="width:58px;"></div>
              <div class="p-2"><small>@Bibit Bunga Murah 2019-2019</small><br><small>Server process time: 0.106 secs.</small></div>
            </div>  
@endsection