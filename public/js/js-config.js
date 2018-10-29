// acive and of
var baseUrl = window.location.pathname;
$('.toggle').click(function (e) {
    var id = $(this).attr('id');
    var getId = id.replace('toggle', '');
    var value = '';
    if ($(this).attr('checked')) {
        $(this).val(0);
        value = 0
    }
    else {
        $(this).val(1);
        value = 1;
    }
    $.ajax({
        type: 'get',
        data:{'getId':getId, value},
        url:baseUrl + '/save-active',
        success:function () {
        }
    });
});
$(".toggle").click(function(){
    return confirm("Xác nhận thay đổi mục này ?");
});

//
jQuery(document).ready(function() {
    Demo.init(); // init demo features
    TableEditable.init();
});
