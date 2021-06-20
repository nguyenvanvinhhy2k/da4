@extends('backend.layout.master')
@section('title',' Admin Product')
@section('main')   
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Sản Phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">   
        </select>
        <a href="{{ asset('admin/product/add_product') }}" class="btn btn-sm btn-primary">Thêm sản phẩm</a>                
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
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Tên loại</th>
            <th>Gía</th>
            <th>Ảnh</th>
            <th>Status</th>
            <th>Mô tả</th>

            <th style="width:30px;"></th>
          </tr>       
        </thead>
        <tbody>
          <?php $i=0?>     
          @foreach($cate as $item)
          <?php $i++?>
          <tr>
            <td style="vertical-align: middle;"><?php echo $i?></td>
            <td style="vertical-align: middle;">{{$item->product_name }}</td>
            <td style="vertical-align: middle;">{{$item->cate->name }}</td>
            <td style="vertical-align: middle;">{{number_format($item->product_price)}} vnđ</td>
            <td><img style="width:200px;" src="{{asset('storage/app/upload/'.$item->product_image)}}" alt=""></td>
            <td style="vertical-align: middle;">{{$item->product_status }}</td>
            <td style="vertical-align: middle;">{!!$item->product_desc!!}</td>
            <td style="vertical-align: middle;">
             
              <a href="{{ asset('admin/product/edit_product/'.$item->product_id)}}" class="active" ui-toggle-class="">
                <i class="fa fa-check text-success text-active"></i></a>
              <a href="{{ asset('admin/product/delete/'.$item->product_id)  }}"><i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
         
        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">      
          {{$cate->links()}}  
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
    @endsection