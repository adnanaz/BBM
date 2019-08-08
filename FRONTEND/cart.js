function cart () {
  var price = $('#totalPrice'),
  quantity = $('#totalQuantity');
$('.add').click(function() {
  if(price.val()===""){
    price.val(0)
  }
  if(quantity.val()===""){
    quantity.val(0)
  }
  var totalPrice = parseFloat(price.val()) + parseFloat($(this).prev().find('.item-price').html()),
      itemQuantity = $(this).find('.item-quantity');
  price.val(totalPrice);
  quantity.val(parseInt(quantity.val()) + 1);
  itemQuantity.show();
  itemQuantity.html(parseInt(itemQuantity.html()) + 1)
})

//get image
$('.items').on('click', '.add', function (){
  function getimage() {
    //title
    const peritm = $('.card .card-title').html();
    console.log(peritm);
    //link source 
    const img = $('.items img').attr('src');
    if(img) {
    $('.images').html(`<img class="float-right img-thumbnail" src="`+img+`" style="width: 85px; height: 85px">`);
}
}
  getimage();
})
}

cart();
