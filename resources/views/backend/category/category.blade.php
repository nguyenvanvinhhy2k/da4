@extends('backend.layout.master')
@section('title',' Admin Category')
@section('main')   
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Loại Sản Phẩm
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
            <th>STT</th>
            <th>Tên loại</th>
            <th>ParentId</th>
            <th>Mô tả</th>
            <th style="width:30px;"></th>
          </tr>       
        </thead>
        <tbody>
          <?php $i=0?>             
            @foreach($cate as $item)
            <?php $i++?>
          <tr>
            <td><?php echo $i?></td>
            <td>{{$item->name }}</td>
            <td>{{$item->parentId }}</td>
            <td>{{$item->Status }}</td>
            <td>
             
              <a href="{{ asset('admin/category/edit_category/'.$item->id)  }}" class="active" ui-toggle-class="">
                <i class="fa fa-check text-success text-active"></i></a>
              <a href="{{ asset('admin/category/delete/'.$item->id)  }}"><i class="fa fa-times text-danger text"></i></a>
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