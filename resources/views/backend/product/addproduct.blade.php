@extends('backend.layout.master')
@section('title',' Admin AddProduct')
@section('main')   
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm sản phẩm
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="form-group">
                                 <label for="exampleInputEmail1">Tên sản phẩm </label>
                                <input type="text" name="product_name" class="form-control" id="exampleInputEmail" placeholder="Tên danh mục">
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gía sản phẩm </label>
                               <input type="number" name="product_price" class="form-control" id="exampleInputEmail" placeholder="Tên danh mục">
                           </div>                                         
                            <div class="form-group">
								<label for="exampleInputEmail1">Hình ảnh </label>
								<input type="file" name="product_image" class="form-control" id="exampleInputEmail" >
							</div>
							<div class="form-group"> 
								<label for="exampleInputPassword1">Mô tả </label>
								<textarea  class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
							</div>
							<div class="form-group"> 
								<label for="exampleInputPassword1">Nội dung </label>
								<textarea  class="form-control" name="product_content" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
							</div>
                            
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Loại sản phẩm</label>
                                    <select  name="category_id" class="form-control">
                                        <?php
                                            showCategory($cates)    
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
                        <button type="submit" class="btn btn-info">Thêm sản phẩm</button>
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
function showCategory($categories,$parent_id=0,$char=''){
    foreach ($categories as $key => $item) {
        if($item->parentId == $parent_id){
                echo "<option  value='$item->id'>$char $item->name</option>";
                unset($categories[$key]);
                showCategory($categories,$item->id, $char.' ---');                
        }
    };
};
?>

<script src="https://cdn.ckeditor.com/4.16.0/full-all/ckeditor.js"></script>