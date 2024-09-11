jQuery(document).ready(function($) {
  var mediaUploader;

  $('#upload_image_button').click(function(e) {
      e.preventDefault();

      // Se o mediaUploader já estiver aberto, apenas o reabre
      if (mediaUploader) {
          mediaUploader.open();
          return;
      }

      // Configura o uploader de mídia
      mediaUploader = wp.media({
          title: 'Escolha uma imagem',
          button: {
              text: 'Usar esta imagem'
          },
          multiple: false
      });

      // Quando a imagem for selecionada
      mediaUploader.on('select', function() {
          var attachment = mediaUploader.state().get('selection').first().toJSON();
          $('#custom_image_url').val(attachment.url);
      });

      // Abre o uploader de mídia
      mediaUploader.open();
  });
});
