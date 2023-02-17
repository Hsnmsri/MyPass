//#region Frame menu
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
//#endregion

// #region Pages links
// Page Links
let host = window.location.host;
let fileType = "";
function SetLink(element, filename) {
    element.addEventListener("click", function () {
        window.location.assign("http://" + host + "/" + filename + fileType);
    });
}
SetLink(document.getElementById('password-list-icon'), 'passwordlist');
SetLink(document.getElementById('app-home-icon'), 'index');
// #endregion