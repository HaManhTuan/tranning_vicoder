@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="forgot-page-wrapper">
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
                    <p class="p_title">Quên mật khẩu</p>
                </div>
                <div class="row mb-90">
                    <div class="content_forgot">
                        <form action="" class="form_forgot">
                                <div class="form-group">
                                  <label >Email đăng kí tài khoản</label>
                                  <input type="email" class="form-control">
                                </div>
                                <div class="mt-50">
                                    <button type="submit" class="btn btn-send">Gửi</button>
                                    <button type="button" class="btn btn-cancel">Hủy</button>
                                </div>
                
                        </form>
                    </div>
                </div>
            </div>
            @include('layout.cate')
        </div>
    </div>
</div>
@endsection
