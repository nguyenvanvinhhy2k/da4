@extends('backend.layout.master')
@section('title',' Admin EditProduct')
@section('main')   
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sửa sản phẩm
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                 <label for="exampleInputEmail1">Tên sản phẩm </label>
                                <input type="text" name="product_name" value="{{ $prod->product_name }}" class="form-control" id="exampleInputEmail" placeholder="Tên sản phẩm">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gía sản phẩm </label>
                               <input type="text" name="product_price" value="{{ $prod->product_price }}" class="form-control" id="exampleInputEmail" placeholder="Gía sản phẩm">
                           </div>                                         
                           <div class="form-group ">
                            
                            <div class="col-lg-9">
                                <label>Ảnh </label>
                                <input id="img" type="file" multiple="multiple" name="product_image" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail"  width="150px" src="{{ asset('storage/app/upload/'.$prod->product_image) }}">                    
                            </div>
                            <script type="text/javascript">
                                function changeImg(input){
                                    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
                                    if(input.files && input.files[0]){
                                        var reader = new FileReader();
                                        //Sự kiện file đã được load vào website
                                        reader.onload = function(e){
                                            //Thay đổi đường dẫn ảnh
                                            $('#avatar').attr('src',e.target.result);
                                        }
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                
                                }
                                $(document).ready(function() {
                                    $('#avatar').css('cursor','pointer');
                                    $('#avatar').click(function(){
                                        $('#img').click();
                                    });
                                });
                            </script>
                        </div>  
							<div class="form-group"> 
								<label for="exampleInputPassword1">Mô tả </label>
								<textarea  class="form-control" value="" name="product_desc" id="exampleInputPassword1" placeholder="Mô tả sản phẩm">{{$prod->product_desc}}</textarea>
							</div>
							<div class="form-group"> 
								<label for="exampleInputPassword1">Nội dung </label>
								<textarea  class="form-control" values="{{$prod->product_content}}" name="product_content" id="exampleInputPassword1" placeholder="Nội dung sản phẩm">{{$prod->product_content}}</textarea>
							</div>
                            
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                                    <select name="category_id" class="form-control input-sm m-bot15">
                                      
                                        <?php
                                        showCategory($cates,$prod->category_id)    
                                    ?>                                           
                                    </select>
                                </div>
                            
                            <div class="form-group">
								<label for="exampleInputEmail1">Hiển Thị </label>
								<select name="product_status" class="form-control input-sm m-bot15">
									<option value="0">Ẩn</option>
									<option value="1">Hiển thị</option>
									
								</select>
							</div>
                        <button type="submit" name="edit_product" class="btn btn-info">Sửa sản phẩm</button>
                        </form>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <!-- page end-->
        </div>
@endsection

<?php
function showCategory($categories,$cate_id,$parent_id=0,$char=''){
    foreach ($categories as $key => $item) {
        if($item->parent_id == $parent_id){
            if($item->parentId==$cate_id){
                echo "<option selected  value='$item->id'>$char $item->name</option>";
                unset($categories[$key]);
                showCategory($categories,$cate_id,$item->id, $char.' ---');
            }
            else {
                echo "<option  value='$item->id'>$char $item->name</option>";
                unset($categories[$key]);
                showCategory($categories,$cate_id,$item->id, $char.' ---');
            }         
        }
    };
};
?>