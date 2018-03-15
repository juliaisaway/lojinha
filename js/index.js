$(function(){
    //Lista todos os produtos da lojinha
    getProds('todos');
});

$(".categorias li").click(function () {
    if(!$(this).hasClass("ativo")) {
        $(".categorias li").removeClass("ativo");
        $(this).addClass("ativo");
    }
});

function getProds(category) {
    $.ajax({
        type: 'GET',
        url: 'produtos.php',
        data: {'category': category},
        success: function (data) {
            $('#prods').fadeOut('slow', function () {
                $('#prods').html(data);
                $(this).fadeIn('slow');
            });

        }
    });
}