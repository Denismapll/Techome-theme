jQuery(document).ready(function($) {
    var frame;
    var galleryContainer = $('#gallery_images_list');

    // Função para abrir a biblioteca de mídia e adicionar imagem
    $('#add_image_button').on('click', function(e) {
        e.preventDefault();

        if (frame) {
            frame.open();
            return;
        }

        frame = wp.media({
            title: 'Selecione ou faça o upload de imagens',
            button: {
                text: 'Adicionar Imagem'
            },
            multiple: true // Permite selecionar várias imagens
        });

        frame.on('select', function() {
            var attachments = frame.state().get('selection').toJSON();

            // Para cada imagem selecionada
            attachments.forEach(function(attachment) {
                var image_url = attachment.sizes.thumbnail.url; // URL da miniatura
                var image_id = attachment.id;

                // Adiciona a imagem na lista
                galleryContainer.append('<li><input type="hidden" name="gallery_images[]" value="' + image_id + '" />' +
                    '<img src="' + image_url + '" style="max-width: 100px; margin: 5px;" />' +
                    '<button class="remove_image_button button">Remover</button></li>');
            });
        });

        frame.open();
    });

    // Função para remover imagem
    galleryContainer.on('click', '.remove_image_button', function(e) {
        e.preventDefault();
        $(this).closest('li').remove();
    });
});
