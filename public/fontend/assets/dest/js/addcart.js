function addToCart(event){
     event.preventDefault();
    let urlData=$(this).data('url');
    
    $.ajax({
        type:"GET",
        url:urlData,
        dataType:'json',
        success:function(data){
            if(data.code==200){
            alert('Đã thêm vào giỏ hàng');
        }
    },
    error:function(){

    }});    
}

$(function(){
    $('.add-to-cart').on('click',addToCart);
});

