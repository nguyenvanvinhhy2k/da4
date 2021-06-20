@extends('layout')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
	style=".bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
"
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Giỏ hàng</h1>
     </div>
</section>
<div class="container mb-4">
	@if(isset($carts))	
    <div class="row" >
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped" >
                    <thead>
                        <tr>
                            <th scope="col">STT </th>
                            <th scope="col"  >Ảnh</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col" class="text-center" style="text-align:center">Số lượng</th>
                            <th scope="col" class="text-right">Giá</th>
							<th scope="col" class="text-right" >Thành tiền</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
						    $i = 1;
						?>
						
                        <?php $total = 0;$stt=0; ?>
						@foreach ($carts as $id => $cart_item)
                        <?php 
                            $total+= $cart_item['price']*$cart_item['quantity'];    
                            $stt+=1;
                        ?>
				
                        <tr>
							<td>{{$i}}</td>
                            <td ><img style="width:150px" src="{{asset('storage/app/upload/'.$cart_item['image'])}}" alt="" /> </td>
                            <td>{{$cart_item['name']}}</td>
                            <td style="text-align:center;verlical align:middle"><input style="width:150px"  type="number" value="{{$cart_item['quantity']}}" min="1" /></td>
                            <td class="text-right">{{number_format($cart_item['price'])}}vnđ</td>
							<td class="text-right">{{number_format($cart_item['price']*$cart_item['quantity'])}}vnđ</td>
                            <td>
							<a href="#" data-url="{{asset('delete-cart')}}"  data-id="{{$id}}" class="btn btn-sm btn-danger cart-delete"><i class="fa fa-trash"></i> </a> 
							<a href="#" data-url="{{asset('update-to-cart')}}" data-id="{{$id}}" class="btn btn-sm btn-edit cart-update"><i class="fa fa-edit"></i> </a> 
                        </td>
                        </tr>
                        
                        <?php
						$i ++	
						?>
                                                                                                                      
						@endforeach
                    </tbody>
                </table>
            </div>
        </div>
		<div class="col-12" style="text-align:right">
			<h3>Tổng tiền: <?php echo number_format($total)?> vnđ</h3>

		</div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-block btn-light"  href="{{ asset('/trang_chu') }}">Tiếp tục mua</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a class="btn btn-lg btn-block btn-success text-uppercase" href="{{ asset('/check-out') }}">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<h2>Giỏ hàng trống</h2>
@endif
    @endsection


   