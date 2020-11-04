@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="res-page-wrapper">
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
                    <p class="p_title">Đăng kí</p>
                </div>
                <div class="row mb-90">
                    <div class="content_res">
                        <form action="" class="form_res">
                                <div class="form-group">
                                    <label >Họ và tên</label>
                                    <input type="email" class="form-control"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                  <label >Tên tài khoản</label>
                                  <input type="email" class="form-control"  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                  <label >Mật khẩu</label>
                                  <input type="password" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Xác nhận mật khẩu</label>
                                    <input type="password" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="password" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Xác nhận Email</label>
                                    <input type="password" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Địa chỉ</label>
                                    <input type="password" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Số điện thoại</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="row flex-center mt-50">
                                    <button type="submit" class="btn btn-login" >Đăng kí</button>
                                    <button type="button" class="btn btn-res" onclick="window.location.href='/dang-nhap'">Đăng nhập</button>
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
