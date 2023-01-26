// Frame menu

$('#app-menu-icon').click(function () {
    if (document.getElementById('menu-container-box').style.display == 'none') {
        $('#menu-container-box').show();
    } else {
        $('#menu-container-box').hide();
    }
});

$('#menu-background-box').click(function () {
    $('#menu-container-box').hide();
});

$('#menu-cancel-box').click(function () {
    $('#menu-container-box').hide();
});