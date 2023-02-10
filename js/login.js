// #region Localstorage
if (localStorage.getItem('username') !== null) {
    $('#save-info-check').prop('checked', 'true');
    $('#username-input').val(localStorage.getItem('username'));
}
//#endregion