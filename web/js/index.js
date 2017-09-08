function formatReal(n) {
  return n.toFixed(2).replace('.', ',').replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
}

function getTotais() {

  $.ajax({
    url: window.url_totais,
    method: 'POST',
    dataType: "json",
    success: function(result) {

      var totais = '<p>Qtd Vendidos:</p>';

      for(i=0;i<result.length;i++) {
        var total = result[i];
        totais += total.name + ' - ' + total.quantity + '<br />';
      }

      $('#totais-geral').html(totais);

    }
  });

}

function calculaValores() {

  var total = 0;

  $('.quantity-input').each(function() {
    var quantity = $(this).val();
    var price    = $(this).attr('data-price');

    if(quantity <=0) {
      return true;
    }

    total += (quantity * price);
  });

  console.log(formatReal(total));

  total = formatReal(total);

  $('.total').html('<b>Total</b>: R$ ' + total);

  getTotais();

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

            getTotais();

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
