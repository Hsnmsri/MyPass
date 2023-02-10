// #region Username frame
$('#change-username-btn').click(function () {
    $('#change-username-frame').show();
    $('#setting-frame').hide();
});
$('#cancel-username-button').click(function () {
    $('#change-username-frame').hide();
    $('#setting-frame').show();
});
//#endregion

// #region Password frame
$('#change-password-btn').click(function () {
    $('#change-password-frame').show();
    $('#setting-frame').hide();
});
$('#cancel-password-button').click(function () {
    $('#change-password-frame').hide();
    $('#setting-frame').show();
});
//#endregion