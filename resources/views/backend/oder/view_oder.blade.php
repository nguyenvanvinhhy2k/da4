@extends('backend.layout.master')
@section('title',' Admin Oder')
@section('main')   
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Chi tiết đơn hàng
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">   
        </select>
        {{--  <a href="{{ asset('admin/category/add_category') }}" class="btn btn-sm btn-primary">Thêm loại sản phẩm</a>                  --}}
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          {{-- <input type="text" class="input-sm form-control" placeholder="Search"> --}}
          {{-- <span class="input-group-btn">
            {{-- <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button> --}}
          {{-- </span> --}} 
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          
          <tr>
            <th>ID</th> 
            <th>Tên sản phẩm</th> 
            <th>Ảnh </th> 
            <th>Số lượng</th>               
            <th>Đơn giá </th>          
            <th>Tổng tiền</th>                        
               
            <th style="width:30px;"></th>
          </tr>       
        </thead>
        <tbody>         
          <?php $total = 0;$stt=0; ?>
     @foreach ($oderdetail as $item)
     <?php 
     $total+= $item['unit_price']*$item['quantity'];    
     $stt+=1;
 ?>
         
     
          <tr>          
            <td>{{$item->getParentProduct->product_id}}</td>  
            <td>{{$item->getParentProduct->product_name}}</td>
            <td><img style="width:200px;" src="{{asset('storage/app/upload/'.$item->getParentProduct->product_image)}}" alt=""></td>
            <td>{{$item->quantity}}</td>
            <td>{{number_format($item->unit_price)}}vnđ</td>
            <td>{{number_format($item->quantity*$item->unit_price)}}vnđ</td>                  
            <td>
             
               {{--  <a href="" class="active" ui-toggle-class="">
                <i class="fa fa-check text-success text-active"></i></a>
              <a href=""><i class="fa fa-times text-danger text"></i></a>   --}}
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
   
  </div>
  <a href="{{ asset('/oder/manage_oder') }}">thoat<i class="fa fa-times text-danger text"></i></a>
  <div class="col-12" style="text-align:right">
    <h3>Tổng thanh toán tiền :<?php echo number_format($total)?> vnđ</h3>

  </div>
</div>

<br><br>

	
		{{-- <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
     Thông tin người mua
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">   
        </select>
         <a href="{{ asset('admin/category/add_category') }}" class="btn btn-sm btn-primary">Thêm loại sản phẩm</a>               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          
          <tr>
            <th>Tên người mua</th>          
            <th>Địa chỉ</th>               
            <th style="width:30px;"></th>
          </tr>       
        </thead>
        <tbody>         
          <tr>                
            <td></td>
            <td></td>
            <td></td>
            <td>
              --}}
               {{--  <a href="" class="active" ui-toggle-class="">
                <i class="fa fa-check text-success text-active"></i></a>
              <a href=""><i class="fa fa-times text-danger text"></i></a>   --}}
            {{-- </td>
          </tr>
       
        </tbody>
      </table>
    </div>
  
  </div>
</div>
<br><br>
<div class="table-agile-info">
<div class="panel panel-default">
  <div class="panel-heading">
    Liệt kê đơn hàng
  </div>
  <div class="row w3-res-tb">
    <div class="col-sm-5 m-b-xs">   
      </select> --}}
      {{--  <a href="{{ asset('admin/category/add_category') }}" class="btn btn-sm btn-primary">Thêm loại sản phẩm</a>                  --}}
    {{-- </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-3">
      <div class="input-group">
        <input type="text" class="input-sm form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn btn-sm btn-default" type="button">Tìm kiếm</button>
        </span>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-striped b-t b-light">
      <thead>
        <tr>
       
          <th>Tên người đặt</th>
          <th>Địa chỉ</th>
          <th>Thanh toán </th>
          <th>Mô tả</th>
          <th style="width:30px;"></th>
        </tr>       
      </thead>
      <tbody>
      
        <tr>
      
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> --}}
           
             {{--  <a href="" class="active" ui-toggle-class="">
              <i class="fa fa-check text-success text-active"></i></a>
            <a href=""><i class="fa fa-times text-danger text"></i></a>   --}}
          {{-- </td>
        </tr>
     
      </tbody>
    </table>
  </div>
  <footer class="panel-footer">
    <div class="row">
      
      <div class="col-sm-5 text-center">
        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
      </div>
      <div class="col-sm-7 text-right text-center-xs">       --}}
          {{-- {{$cate->links()}}           --}}
{{--         
      </div>
    </div>
  </footer>
</div>
</div>
</section> --}}
    @endsection