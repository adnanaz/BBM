function getmv() {
    var fns = {},
      productData = {},
      cartCounter = 0,
      cartTotal = 0,
      productCounter = 1,
      timer = '',
      addDetail = $('.add-detail'),
      addCart = $('.add-cart'),
      deleteCart = $('.cart-product-delete');
  
  fns.getProductData = function(a){
    var p = a.closest('.product');
    productData.id = p.data('product-id');
    productData.id = parseInt(productData.id);
    productData.img = p.find('.product-img img').attr('src');
    productData.brand = p.find('.product-brand').text();
    productData.decription = p.find('.product-decription').text();
    productData.volume = p.find('.product-volume').text();
    productData.price = p.find('.product-price').text();
    productData.price = parseInt(productData.price);
    /*console.log('id: '            + productData.id + 
                '\n img: '            + productData.img + 
                '\n brand: '       + productData.brand +
                '\n decription: '  + productData.decription +
                '\n volume: '      + productData.volume +
                '\n price: '       + productData.price);*/
  }
    
    $.getJSON(url, function (e) {
        let movie = e.results;
        $.each(movie, function(i,mv){
            $('.mv').append(`
                <div class="card mb-3 d-inline-flex" style="width: 18rem;">
                  <img src="`+img+mv.poster_path+`" class="card-img-top" alt="..." width="320px" height="430px">
                  <div class="card-body">
                    <p class="card-text">`+mv.original_title+`</p>
                    <a href="#" class="info" data-toggle="modal" data-target="#exampleModal" data-id="`+mv.id+`">Detail</a>
                  </div>
                </div>
            `);
    
        });
    });
    }
    
    getmv();
    getinfo();
    
    function getinfo(){
        var url = "https://api.themoviedb.org/3/movie/now_playing?api_key=fc8a85389fd8c9fe48f1cfd0a55297e4";
        var img = "http://image.tmdb.org/t/p/w300/";
        
    
        $('.mv').on('click', '.info', function (){
        var x = $(this).data('id');
        $.getJSON(url, function (g) {
        let info = g.results;
        $.each(info, function(i,mv){
            if(mv.id == x){
            $('.modal-body').html(`
                <div class="row">
                    <img src="`+img+mv.poster_path+`">
                <div class="col-md-7">
                    <div class="card" style="width: 18rem;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">`+mv.overview+`</li>
                        <li class="list-group-item">Realese Date : `+mv.release_date+`</li>
                      </ul>
                    </div>
                </div>
            `);
        }
        });
    });
    
        });
    }
    
    