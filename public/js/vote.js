$(function() {
    let flag = true;
    $('.p-rating i').on('click', function() {
        if (!flag) {
            return;
        }
        let id = $(this).attr('for');
        console.log(id);
        let productId = $(`#${id}`).data('productid');
        $('.preloader').show();
        $.post(`/product/${productId}/vote`, {vote: id, token : TOKEN})
            .done(function(val) {
                flag = false;
                $(`.p-rating i[for="rating${val}"]`).click();
                flag = true;
            })
            .always(function() {
                $('.preloader').hide();
            });
    });
});