@extends('layout.app')

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
@if(isset($details))
<p>Pencarian untuk <b> {{$query}} </b> adalah :</p>
<div class="container-fluid mt-2" style="padding-left: 2px;padding-right: 2px;margin-left: 7px;margin-right: auto;">
        <div class="d-flex justify-content-start flex-wrap" style="margin-top:50px;">
        <section id="catalog" class="text-center">
        @foreach ($details as $produk)
        <a href="/produk/{{$produk->id}}">
        <article class="product" data-product-id="{{$produk -> id}}">
          <div class="product-wrapper">
            <div class="product-img">
              <img src="/bibit/assets/products/{{ $produk->foto1 }}"/>
            </div>
          </a>
            <div class="product-info">
              <span class="product-brand">{{ $produk->nama }}</span><!-- 
              <span class="product-decription">Bibit Aster</span> -->
              <span class="product-volume">{{ $produk->isi }}</span>
              <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
              class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i
              class="fas fa-star text-warning"></i>
              <div class="d-flex justify-content-start mb-3"> 
              <div class="rp">Rp.</div><span class="product-price">{{ $produk->harga }}</span>
              <div class="product-footer">
                  
              <button class="add-cart btn btn-outline-success">Masukkan keranjang</button>
              </div>
            </div>
          </div>
          </div>
        </article>
        @endforeach
      </section>
       </div>
@elseif(isset($message))
    <h2>{{ $message }}</h2>
@endif
@endsection