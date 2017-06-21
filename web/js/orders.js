$( document ).ready(function() {

  setTimeout(function(){
      window.location.reload();
    },30000);

    $('.check').click(function() {

        $.ajax({
          url: window.url_check,
          method: 'POST',
          data: 'id=' + $(this).attr('data-id'),
          success: function(status) {
            if(status == 1) {
              window.location.reload();
            } else {
              // MESSAGE
              $('#modal-body-senha').html('Ocorreu um problema ao salvar. Tente novamente.');
              $('#myModal').modal('show');
            }
          },
          error: function(err) {
            // MESSAGE
            $('#modal-body-senha').html('Ocorreu um problema ao salvar. Tente novamente.');
            $('#myModal').modal('show');
          }
        });

    });

});
