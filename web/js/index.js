function formatReal(numero) {
    var tmp = numero + '';
    var neg = false;

    if (tmp - (Math.round(numero)) == 0) {
        tmp = tmp + '00';
    }

    if (tmp.indexOf(".")) {
        tmp = tmp.replace(".", "");
    }

    if (tmp.indexOf("-") == 0) {
        neg = true;
        tmp = tmp.replace("-", "");
    }

    if (tmp.length == 1) tmp = "0" + tmp

    tmp = tmp.replace(/([0-9]{2})$/g, ",$1");

    if (tmp.length > 6)
        tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");

    if (tmp.length > 9)
        tmp = tmp.replace(/([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g, ".$1.$2,$3");

    if (tmp.length = 12)
        tmp = tmp.replace(/([0-9]{3}).([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g, ".$1.$2.$3,$4");

    if (tmp.length > 12)
        tmp = tmp.replace(/([0-9]{3}).([0-9]{3}).([0-9]{3}).([0-9]{3}),([0-9]{2}$)/g, ".$1.$2.$3.$4,$5");

    if (tmp.indexOf(".") == 0) tmp = tmp.replace(".", "");
    if (tmp.indexOf(",") == 0) tmp = tmp.replace(",", "0,");

    return (neg ? '-' + tmp : tmp);
}

function calculaValores() {

  var total = 0;

  $('.quantity-input').each(function() {
    var quantity = $(this).val();
    var price    = $(this).attr('data-price');
    console.log(quantity);
    if(quantity <=0) {
      return true;
    }

    total += quantity * price;

  });

  total = formatReal(total);

  $('.total').html('<b>Total</b>: R$ ' + total);

}

$( document ).ready(function() {

  $('.more').click(function() {
    var id    = $(this).attr('data-id');
    var total = ($('.quantity-input-'+id).val() == '') ? 0 : $('.quantity-input-'+id).val() ;

    total = parseInt(total) + 1;

    $('.quantity-input-'+id).val(total);

    calculaValores();

  });

  $('.less').click(function() {
    var id    = $(this).attr('data-id');
    var total = ($('.quantity-input-'+id).val() == '') ? 0 : $('.quantity-input-'+id).val() ;

    total = parseInt(total) - 1;

    if(total < 0) {
      total = 0;
    }

    $('.quantity-input-'+id).val(total);

    calculaValores();

  });

  $('.submit').click(function() {
    var items = 0;
    var total = 0;

    $('.quantity-input').each(function() {
      var quantity = $(this).val();

      items += quantity;
    });

    if(items <= 0) {
      alert('Selecione a quantidade de pelo menos um produto!');
    } else {
    // CASO TENHA PRODUTOS SALVA NO BANCO

      $.ajax({
        url: window.url_save,
        method: 'POST',
        data: $('form').serialize(),
        success: function(id) {
          if(id == 0 || id == '0') {
            // MESSAGE
            $('#modal-body-senha').html('Ocorreu um problema ao salvar. Tente novamente.');
            $('#myModal').modal('show');
          } else {
            // MESSAGE
            $('#modal-body-senha').html('<h3>Pedido salvo com sucesso. <br /><br /><b class="btn btn-success btn-lg">Senha ' + id + '</b></h3>');
            $('#myModal').modal('show');

            // RESET
            $('.quantity-input').each(function() {
              $(this).val(0);
            });
            $('.total').html('<b>Total</b>: R$ 0,00');
          }
        },
        error: function(err) {
          // MESSAGE
          $('#modal-body-senha').html('Ocorreu um problema ao salvar. Tente novamente.');
          $('#myModal').modal('show');
        }
      });

    }

  });

});
