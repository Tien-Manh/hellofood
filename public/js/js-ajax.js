// xóa sản phẩm
var pathUrl = location.href;
$(".deletePro").confirm({
    title:"Cảnh báo",
    text:"Bạn có muốn xóa nó đi không?",
    confirm: function(e) {
        var getId = e[0].id;
        $.ajax({
            type: 'get',
            data: {'getId':getId},
            url: pathUrl + '/xoa-san-pham',
            success:function (data) {
                $('tr#'+getId).remove();
            }

        });
    },
    cancel: function(button) {
    },
    confirmButton: "Xóa",
    cancelButton: "Quay lại"
});

// xóa danh mục
$(".deleteCate").confirm({
    title:"Cảnh báo",
    text:"Bạn có muốn xóa nó đi không?",
    confirm: function(e) {
        var getId = e[0].id;
        $.ajax({
            type: 'get',
            data: {'getId':getId},
            url: 'danh-muc/xoa-cate',
            success:function (data) {
                $('tr#'+getId).remove();
            }

        });
    },
    cancel: function(button) {
    },
    confirmButton: "Xóa",
    cancelButton: "Quay lại"
});

//xóa shop
$(".deleteShop").confirm({
    title:"Cảnh báo",
    text:"Bạn có muốn xóa nó đi không?",
    confirm: function(e) {
        var getId = e[0].id;
        $.ajax({
            type: 'get',
            data: {'getId':getId},
            url: 'xoa-shop',
            success:function (data) {
                $('tr#'+getId).remove();
            }

        });
    },
    cancel: function(button) {
    },
    confirmButton: "Xóa",
    cancelButton: "Quay lại"
});

//xóa user
$(".deleteUser").confirm({
    title:"Cảnh báo",
    text:"Bạn có muốn xóa nó đi không?",
    confirm: function(e) {
        var getId = e[0].id;
        $.ajax({
            type: 'get',
            data: {'getId':getId},
            url: 'xoa-tai-khoan',
            success:function (data) {
                $('tr#'+getId).remove();
            }

        });
    },
    cancel: function(button) {
    },
    confirmButton: "Xóa",
    cancelButton: "Quay lại"
});

// validate---add
$('form').on('submit', function (e) {
    e.preventDefault();
    data = $(this).serialize();
    url = $(this).attr('action');
    var nameValue = $('.cate_name').val();
    var slugValue = $('.cate_slug').val();
    let getId = $('.inputId').attr('value');
    $.ajax({
        url: url,
        type: 'POST',
        data: data,
        success:function (data) {
            if (data.error == true){
                $('.successs').hide();
                $('.error').hide();
                if(data.message.cate_name != undefined){
                    $('.errorname').show().text(data.message.cate_name[0]);
                }
                if (data.message.cate_slug != undefined){
                    $('.errorslug').show().text(data.message.cate_slug[0]);
                }
            }
            else {
                $('.successs').show();
                if (getId == undefined || getId == ''){
                    $('.successErr').text('Dữ liệu đã được thêm');
                    $('.error').hide();
                    $('.fixct').val('');
                }
                else {
                    $('.successErr').text('Dữ liệu đã được cập nhật');
                    $('.error').hide();
                }

            }
            return;
        }
    });
});

$(document).ready(function (){
    $('.cate_name').keyup(function (e) {
        var title, slug;
        title = $(this).val();
        slug = title.toLowerCase();

        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd')
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        $('.cate_slug').val(slug);
    })
});


// validate-update
$(document).ready(function () {
    let getId = $('.inputId').attr('value');
  if (typeof urlUadd != 'undefined' || typeof urlUpdate != 'undefined'){
      if (getId == undefined || getId == ''){
          $('form').attr("action", urlUadd);
      }
      else {
          $('form').attr("action", urlUpdate);
      }
  }
});
