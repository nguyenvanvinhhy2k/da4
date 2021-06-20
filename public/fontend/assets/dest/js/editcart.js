function cartUpdate(event){
    event.preventDefault();
   let upDateCart=$('.update_cart_url').data('url');
   let id = $(this).data('id');
   let quantity = $(this).parents('tr').find('input.quantity').val();
   $.ajax({
       type:"GET",
       url:upDateCart,
       data:{'id':id,quantity:quantity},
       success:function(data){
           if(data.code===200){
           $('.row').html(data.cart);
           location.reload();
       }
   },
   error:function(){

   }});    
}

$(function(){
   $(document).on('click','.cart-update',cartUpdate);
});


// function changeQty(e, id) {
//     $.get('/gio-hang/change', { id: id, quantity: e.value }, function(data, status) {
//         if (status == 'success' && data.status != 'error') {
//             load(data);
//         }
//     });
// }