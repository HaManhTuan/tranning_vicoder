@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="cart-page-wrapper">
    <div class="breadcrumb">
        <div class="container ht-50">
            <div class="row ht-50">
                <div class="col-md-12 ht-50">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">Trang chủ</li>
                          <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container main_v2">
        <div class="product_new row">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="box-title"> 
                    <p class="p_title">Giỏ hàng</p>
                </div>
                <div class="row list_product mb-90">
                    <div class="" style="padding: 3px;width:100%;max-width:100%;">
                        <table class="table table-bordered cart-product">
                            <tr class="tr-title">
                                <th style="width: 60px" class="text-center">STT</th>
                                <th  class="text-center">TÊN SẢN PHẨM</th>
                                <th style="width: 140px" class="text-center">SỐ LƯỢNG</th>
                                <th style="width: 170px" class="text-center">ĐƠN GIÁ</th>
                                <th style="width: 187px" class="text-center">THÀNH TIỀN</th>
                            </tr>
                            <tr class="list-product-cart">
                                <th class="text-center th-stt">01</th>
                                <th class="text-center cart-infor" style="padding: 20px 13px;">
                                    <img src="./assets/images/b8d3dd90-eb7c-453c-8270-4895f4f50475.png">
                                     <span>Đồng hồ Longines L</span>
                                </th>
                                <th class="text-center th-quantity" >
                                    <input type="text" class="form-control" value="01" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </th>
                                <th class="text-center th-price-item">
                                        73,260,000 đ
                                                                       
                                    <a href="#" class="remove-cart"> Xóa </a>
                                </th>
                                <th class="text-center th-total-item">
                                    <span>73,260,000 đ</span>
                                </th>
                            </tr>
                            <tr class="list-product-cart">
                                <th class="text-center th-stt">01</th>
                                <th class="text-center cart-infor" style="padding: 20px 13px;">
                                    <img src="./assets/images/b8d3dd90-eb7c-453c-8270-4895f4f50475.png">
                                     <span>Đồng hồ Longines L</span>
                                </th>
                                <th class="text-center th-quantity" >
                                    <input type="text" class="form-control" value="01" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </th>
                                <th class="text-center th-price-item">
                                        73,260,000 đ
                                                                       
                                    <a href="#" class="remove-cart"> Xóa </a>
                                </th>
                                <th class="text-center th-total-item">
                                    <span>73,260,000 đ</span>
                                </th>
                            </tr>
                            <tr class="list-product-cart">
                                <th class="text-center th-stt">01</th>
                                <th class="text-center cart-infor" style="padding: 20px 13px;">
                                    <img src="./assets/images/b8d3dd90-eb7c-453c-8270-4895f4f50475.png">
                                     <span>Đồng hồ Longines L</span>
                                </th>
                                <th class="text-center th-quantity" >
                                    <input type="text" class="form-control" value="01" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                </th>
                                <th class="text-center th-price-item">
                                        73,260,000 đ
                                                                       
                                    <a href="#" class="remove-cart"> Xóa </a>
                                </th>
                                <th class="text-center th-total-item">
                                    <span>73,260,000 đ</span>
                                </th>
                            </tr>
                            <tr class="subtotal">
                                <th colspan="4" class="text-right">TỔNG HÓA ĐƠN :</th>
                                <th class="number_subtotal">73,260,000 đ</th>
                            </tr>
                        </table>
                    </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 cl_btn mt-5">
                            <button class="btn-continue">Tiếp tục mua hàng</button>
                            <button class="btn-checkout" onclick="window.location.href='/thanh-toan'">Đặt hàng</button>
                        </div>
                </div>
            </div>
            @include('layout.cate')
        </div>
    </div>
</div>
@endsection
