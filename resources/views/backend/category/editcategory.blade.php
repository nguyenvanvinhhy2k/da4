@extends('backend.layout.master')
@section('title','EditCategory')
@section('main')
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Category
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form class="form-horizontal" role="form" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="inputEmail1"  class="col-lg-2 col-sm-2 control-label">Tên loại</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" value="{{ $cates->name }}" class="form-control" id="inputEmail1" placeholder="Email">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class=" col-lg-2">
                                    <label for="" class="text-black control-label">Status</label>
                                </div>
                                <div class="form-group col-lg-10">
                                    Có:<input type="radio" name="Status" value="1" checked id="">
                                    Không:<input type="radio" name="Status" value="0" id="">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class=" col-lg-10">
                                    <button type="submit" class="btn btn-danger">Sửa</button>
                                </div>
                            </div>
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


function ShowCategory($categories,$parentId = 0,$char = '')
{
    foreach ($categories as $key => $item) {
        if($item->ParentId == $parentId){
            echo "<option value='$item->id'>$char $item->name</option>";
            unset($categories[$key]);
            ShowCategory($categories,$item->id,$char.'---');
        }
    }
}


?>