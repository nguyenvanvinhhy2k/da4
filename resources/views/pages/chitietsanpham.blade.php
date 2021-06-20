@extends('layout')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm {{$sanpham->product_name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{asset('trang_chu')}}">Trang chủ</a> / <span>Chi tiết sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-9">

                <div class="row">
                    <div class="col-sm-4">
                        <img src="image/product/{{$sanpham->product_image}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <div class="single-item-body">
                            <p class="single-item-title"><h2>{{$sanpham->product_name}}</h2></p>
                            <p class="single-item-price">
                                <span>{{number_format($sanpham->product_price)}} đồng</span>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{$sanpham->product_content}}</p>
                        </div>
                        <div class="space20">&nbsp;</div>
                                       
                        <p>Số lượng:</p>
                        <div class="single-item-options">
                           
                            <select class="wc-select" name="color">
                                <option>0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <a class="add-to-cart" data-url="{{asset('add-to-cart/'.$sanpham->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Mô tả</a></li>
                        
                    </ul>

                    <div class="panel" id="tab-description">
                        <p>{{$sanpham->product_desc}}</p>
                        
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Sản phẩm tương tự</h4>                
                    <div class="row">
                        @foreach ($sp_tuongtu as $sptt)                                                   
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="{{asset('chitiet_sanpham/'.$sptt->product_id)}}"><img src="image/product/{{$sptt->product_image}}" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{$sptt->product_name}}</p>
                                    <p class="single-item-price">
                                        <span>{{number_format($sptt->product_price)}} vnđ</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" data-url="{{asset('add-to-cart/'.$sptt->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{asset('chitiet_sanpham/'.$sptt->product_id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                    
                </div> <!-- .beta-products-list -->
            </div>
            <div class="col-sm-3 aside">
                <div class="widget">
                    <h3 class="widget-title">Best Sellers</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="{{asset('chitiet_sanpham/'.$sptt->product_id)}}"><img src="image/product/6.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/9.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/8.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/7.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
                <div class="widget">
                    <h3 class="widget-title">New Products</h3>
                    <div class="widget-body">
                        <div class="beta-sales beta-lists">
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/3.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/2.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/1.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                            <div class="media beta-sales-item">
                                <a class="pull-left" href="product.html"><img src="image/product/4.jpg" alt=""></a>
                                <div class="media-body">
                                    Sample Woman Top
                                    <span class="beta-sales-price">$34.55</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- best sellers widget -->
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection