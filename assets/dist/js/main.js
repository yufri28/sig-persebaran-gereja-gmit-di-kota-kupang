$('.menu').on('click', (parameter) => {
    $('.'+parameter.currentTarget.dataset.page).show();
    $('.menus').hide();
});

$('.menu-show').on('click',(parameter) => {
    $('.'+parameter.currentTarget.dataset.page).hide();
    $('.menus').show();
})