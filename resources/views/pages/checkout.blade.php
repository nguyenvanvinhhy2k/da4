@extends('layout')
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thanh toán</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href="index.html">Home</a> / <span>Thanh toán</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        
        <form action="{{asset('dathang')}}"  method="post" class="beta-form-checkout" >
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <h4>Địa chỉ thanh toán</h4>
                    <div class="space20">&nbsp;</div>

                    <div class="form-block">
                        <label for="name">Họ tên</label>
                        <input type="text"   name="name" placeholder="Nhập Họ và tên" required>
                    </div>
                    {{--  <div class="form-block">
                        <label for="adress">Giới tính</label>
                        <input type="radio" id="exampleInputEmail" class="input-radio" name="gender" value="nam
                        " checked="checked" style="width:10%"> <span style="margin-right:10%">nam</span>
                        <input type="radio" id="exampleInputEmail" class="input-radio" name="gender" value="nữ"  style="width:10%"> <span >nữ</span>
                    </div>  --}}

                   
                    <div class="form-block">
                        <label for="country/state">Địa chỉ</label>
                        <input type="text" id="exampleInputEmail" name="address" placeholder="Nhập địa chỉ" required>
                    </div>

                    <div class="form-block">
                        <label for="email">Email</label>
                        <input type="email" id="exampleInputEmail" name="email" placeholder="Nhập email" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">SĐT</label>
                        <input type="text" id="exampleInputEmail" name="phone" placeholder="Nhập SĐT"  required>
                    </div>
                                       
                    <div class="form-block">
                        <label for="notes">Ghi chú</label>
                        <textarea id="exampleInputEmail" name="notes"  ></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                  
                    <div class="your-order">
                        <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                        <div class="your-order-body">
                            <div class="your-order-item">
                                <div>
                                   
                          
                                  
                                    <?php $total = 0;$stt=0; ?>
                                    @foreach ($carts as $id => $cart_item)
                                    <?php 
                                        $total+= $cart_item['price']*$cart_item['quantity'];    
                                        $stt+=1;
                                    ?>
                            
                                  
                                <!--  one item	 -->
                                    <div class="media">
                                        <img width="35%" src="{{asset('storage/app/upload/'.$cart_item['image'])}}" alt="" class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large">{{$cart_item['name']}}</p>
                                            <span class="color-gray your-order-info">Đơn giá: {{number_format($cart_item['price'])}}vnđ</span>                                          
                                            <span class="color-gray your-order-info">Số lượng: {{$cart_item['quantity']}}</span>
                                        </div>
                                    </div>
                                  
                                
                                                                                                                                  
                                    @endforeach                                                                                      
                                
                                                                                                                             
                                  
                                <!-- end one item -->
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">Tổng tiền: <?php echo number_format($total)?> vnđ</p></div>
                                <div class="pull-right"><h5 class="color-black"></h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>      
                        <div class="your-order-head"><h5>Phương thức thanh toán</h5></div>
                        
                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="ATM" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">Chuyển tiền trực tiếp qua ngân hàng </label>
                                    
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="COD" data-order_button_text="">
                                    <label for="payment_method_cheque">Thanh toán khi nhận hàng  </label>
                                  
                                </li>
                                
                                
                            </ul>
                        </div>

                        <div class="text-center"><button type="submit" class="beta-btn primary" href="#">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
                    </div> <!-- .your-order -->
                </div>
            </div>
        </form>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection