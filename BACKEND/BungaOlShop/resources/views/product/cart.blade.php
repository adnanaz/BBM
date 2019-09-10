<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/bibit/css/allcart.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body>
  <a href="{{ route('shop.index') }} ">Kembali ke menu utama</a>
    @if (session()->has('success_message'))
      <div class="alert alert-success">
          {{ session()->get('success_message') }}
      </div>
    @endif
    @if(count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    
  <main>
    <div class="basket">
      <div class="basket-module">
        <label for="promo-code">Masukkan Kode Promo</label>
        <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
        <button class="promo-code-cta">Apply</button>
      </div>
      <div class="basket-labels">
        <ul>
          <li class="item item-heading">Item</li>
          <li class="price">Harga</li>
          <li class="quantity">Jumlah</li>
        </ul>
      </div>
      @foreach (Cart::content() as $item)
          
      
      <div class="basket-product">
        <div class="item">
          <div class="product-image">
            <a href="{{ route('produk.show', $item->model->slug) }}"><img src="{{ asset('storage/'.$item->model->foto1) }}" alt="Placholder Image 2" class="product-frame"></a>
          </div>
          <div class="product-details">
            <a href="{{ route('produk.show', $item->model->slug) }}"><h1><strong><span class="item-quantity">1</span> x </strong>{{ $item->model->nama }}</h1></a>
            <p><strong>{{ $item->model->isi }}</strong></p>
            <p><strong>{{ $item->model->berat }}</strong> </p>
          </div>
        </div>
        <div class="price">{{ $item->model->harga}}</div>
        <div class="quantity">
          <input type="number" value="1" min="1" class="quantity-field" data-id="{{ $item->rowId }}">
        </div>
        <div class="remove">
          <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit">Hapus</button>
          </form>
        </div>
      </div>
      @endforeach

      <a href="{{ route('checkout.index') }}"><button type="button" class="btn btn-success mt-2" style="float: right">
        Bayar Sekarang
      </button></a>


      <!-- MODAL BUY NOW! -->
      {{-- <button type="button" class="btn btn-success mt-2" style="float: right" data-toggle="modal"
        data-target="#myModal">
        Bayar Sekarang
      </button> --}}

      <!-- The Modal -->
      {{-- <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <h5 class="modal-title">Terimakasih telah membeli produk kami </h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <h5 class="modal-title text-center">Silahkan Transfer Ke nomor Rekening Berikut</h5>
              <h5 class="text-center"><span class="warna">1234-1234-1234-1234</span></h5>
              <h5 class="an text-center"><span class="khusus">atas nama : Nadya Shalma Evani</h5></span>
              <div class="mid"><span class="small">Atau</span></div>
              <h5 class="text-center"><span class="warna">1234-1234-1234-1234</span></h5>
              <h5 class="an text-center"><span class="khusus">atas nama : Lily Widyanto</h5></span>
              <div class="mid"><span>Sebesar</span></div>
              <div class="st">
                <div class="subtotal-value final-value rp" id="basket-subtotal">130.00</div>
              </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
              <h5 class="modal-title text-center">Upload Bukti Pembayaran <a href="#">Disini</a></h5>

            </div> --}}

          </div>
        </div>
      </div>

      <!-- END MODAL -->

    </div>
    <aside>
      <div class="summary">
        <div class="summary-total-items"><span class="total-items"></span> Item di keranjang anda</div>
        <div class="summary-subtotal">
            <div class="subtotal-title">Subtotal</div>
            <div class="subtotal-value final-value" id="basket-subtotal">{{ Cart::subtotal() }}</div>
          <div class="summary-promo hide">
            <div class="promo-title">Promotion</div>
            <div class="promo-value final-value" id="basket-promo"></div>
          </div>
        </div>
        <div class="summary-delivery">
          <select name="delivery-collection" class="summary-delivery-selection">
            <option value="0" selected="selected">Pilih jasa paket</option>
            <option value="collection">JNE</option>
            <option value="first-class">JNT</option>
            <option value="second-class">Tiki</option>
            <option value="signed-for">Cargo</option>
          </select>
        </div>
        <div class="summary-total">
          <div class="total-title">Tax</div>
          <div class="total-value final-value" id="basket-total">{{ Cart::tax() }}</div>
        </div>
        <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total">{{ Cart::total() }}</div>
        </div>
        <div class="summary-checkout">
          <!-- button harga isi disini -->
        </div>
      </div>
    </aside>
  </main>


  <script src="{{ asset('js/app.js') }}"></script>
  <script>
    (function(){
      const classname = document.querySelectorAll('.quantity-field')

      Array.from(classname).forEach(function(element){
        element.addEventListener('change', function(){
          const id = element.getAttribute('data-id')
          axios.patch(`/cart/${id}`, {
            quantity: this.value
          })
          .then(function (response) {
            // console.log(response);
            window.location.href = '{{ route('cart.index') }}'
          })
          .catch(function (error) {
            console.log(error);
          });
        })
      })
    })();
  </script>

</body>

</html>
</body>
<script src="/bibit/js/allcart.js"></script>

</html>