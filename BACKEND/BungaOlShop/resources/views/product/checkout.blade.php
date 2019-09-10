<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/bibit/css/checkout.css">

    <title>Halaman Checkout</title>
  </head>
  <body>
   
<div class="container">
  <main>
    <h3 class="mt-4">Isi Formulir Pengiriman<br>Bibit Bunga Murah</h3><br>
  <div class="row">
    <div class="col">
             
<form action="{{ route('checkout.store') }} " method="POST" class="needs-validation" novalidate>
  {{ csrf_field() }}
  <div class="form-place">

    <div class="form-group">
        <label for="email">email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
    </div>
    <div class="form-group">
        <label for="name">nama</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
    </div>

    <div class="half-form">
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ old('kecamatan') }}" required>
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ old('kabupaten') }}" required>
        </div>
    </div> <!-- end half-form -->

    <div class="half-form">
        <div class="form-group">
            <label for="kodepos">Code pos</label>
            <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{ old('kodepos') }}" required>
        </div>
        <div class="form-group">
            <label for="nohp">No HP.</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="{{ old('nohp') }}" required>
        </div>
    </div> <!-- end half-form -->

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
</div>
  <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

    </div>
    <div class="col">
          <aside>
      <div class="summary" style="margin-top: 33px;">
        @foreach (Cart::content() as $item)
            
        <div class="basket-product">
                <div class="item">
                  <div class="summary-total-items mb-3"><span class="total-items"></span> Item di keranjang anda</div>
                  <div class="product-image">
                    <img src="{{ asset('storage/'.$item->model->foto1) }}" alt="Placholder Image 2" class="product-frame" style="width:100%;">

                    <div class="product-details">
                    <h1 class="custom ml-3"><strong>{{ $item->model->nama }}</strong></h1>
                    <p class="custom ml-3">{{ $item->model->isi }}</p>
                    <p class="custom ml-3">{{ $item->model->berat }}</p>
                      <div class="price custom ml-3">{{ $item->model->harga}}</div>
                    <p class="custom ml-3">{{ $item->qty }}</p>
                  </div>
                  </div>
                  

                </div>
          </div>

          @endforeach

        <div class="summary-delivery mt-2">
          <select name="delivery-collection" class="summary-delivery-selection">
            <option value="0" selected="selected">Pilih jasa paket</option>
            <option value="collection">JNE</option>
            <option value="first-class">JNT</option>
            <option value="second-class">Tiki</option>
            <option value="signed-for">Cargo</option>
          </select>
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


    


    

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> 