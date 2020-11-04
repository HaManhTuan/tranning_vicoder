@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="checkout-page-wrapper">
    <div class="breadcrumb">
        <div class="container ht-50">
            <div class="row ht-50">
                <div class="col-md-12 ht-50">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">Trang chủ</li>
                          <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container main_v2">
        <div class="product_new row">
            <div class="col-md-9">
                <div class="row list_product checkout mb-90">
                    <form class="form-checkout .mb-90">
                        <h6>Thông Tin Đặt Hàng</h6>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Họ và tên</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Số điện thoại</label>
                                    <input type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" >
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label>Hình thức thanh toán</label>
                                    <select name="" id="" class="form-control">
                                        <option value=""></option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 col-md-12 col-sm-12 text-center" >
                                <button class="btn-save">Lưu</button>
                                <button class="btn-trash">Xóa</button>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
            @include('layout.cate')
        </div>
    </div>
</div>
@endsection
