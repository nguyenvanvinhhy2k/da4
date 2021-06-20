
@extends('layout')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Loại sản phẩm</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach ($loai as $l)                                                  
                        <li><a href="{{ asset('loai_sanpham/'.$l->id)}}">{{$l->name}}</a></li>
                    
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            
                            @foreach ($sp_theoloai as $sp)                                                       
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{asset('chitiet_sanpham/'.$sp->product_id)}}"><img src="image/product/{{$sp->product_image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$sp->product_name}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($sp->product_price)}}vnđ</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" data-url="{{asset('add-to-cart/'.$sp->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{asset('chitiet_sanpham/'.$sp->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>  
                            @endforeach
                            </div>
                            <div class="row">{{$sp_theoloai->links()}}</div>

                            </div>
                          
                         
                           
                        
                    <div class="space50">&nbsp;</div>
                   
                            

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy{{count($sp_khac)}}sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sp_khac as $khac)                                                       
                            <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="{{asset('chitiet_sanpham/'.$khac->product_id)}}"><img src="image/product/{{$khac->product_image}}" alt=""></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title">{{$khac->product_name}}</p>
                                        <p class="single-item-price">
                                            <span>{{number_format($khac->product_price)}} $</span>
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" data-url="{{asset('add-to-cart/'.$khac->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="{{asset('chitiet_sanpham/'.$khac->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>                                                          
                            </div>
                            @endforeach                          
                        </div>
                        <div class="row">{{$sp_khac->links()}}</div>
                        <div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection