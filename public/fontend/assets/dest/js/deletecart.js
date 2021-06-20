 function cartDelete(event){
     event.preventDefault();
   let urlDelete = $(this).data('url');
    let id = $(this).data('id');   
    $.ajax({
       type:"GET",
        url:urlDelete,
        data:{'id':id},
        success:function(data){
            if(data.code==200){
             $('.row').html(data.cart);
        }
    },
    error:function(){

    }});    

 }

 $(function(){
    $('.cart-delete').on('click',cartDelete);
 });

// function removeCart(e, id) {
//     let t = $(e);

//     let cur_html = t.html();

//     t.html(loading);

//     $.get('/gio-hang/remove', { id: id }, function(data, status) {
//         if (status == 'success' && data.status != 'error') {
//             load(data);
//             toastr.success('Đã xóa sản phẩm khỏi giỏ hàng!', 'Thành công', { "closeButton": true });
//         } else {
//             toastr.warning('Có lỗi xảy ra!', 'Thất bại', { "closeButton": true });
//         }
//         t.html(cur_html);
//     });
// }


