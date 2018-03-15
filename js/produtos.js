$(function(){

    // Inicializa o Isotopo de mosaico do site
    $('#isotope').isotope({
        itemSelector : '.sortable'
    });

    // Inicializa o plugin de overlay de imagens
    $('.image-popup').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: true
        }
    });

})