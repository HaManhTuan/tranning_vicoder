@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="login-page-wrapper">
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
                    <p class="p_title">Đăng nhập</p>
                </div>
                <div class="row mb-90">
                    <div class="content_login">
                        <form action="/gio-hang" class="form_login" method="get">
                                <div class="form-group">
                                  <label for="username">Tên đăng nhập</label>
                                  <input type="email" class="form-control" id="username" name="username">
                                </div>
                                <div class="form-group">
                                  <label for="password">Mật khẩu</label>
                                  <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-muted forgot"><a href="/quen-mat-khau  ">Quên mật khẩu ?</a></small>
    
                                </div>
                                <button type="submit" class="btn btn-login">Đăng nhập</button>
                                <button type="button" class="btn btn-res" onclick="window.location.href='/dang-ki'">Đăng kí</button>
                        </form>
                    </div>
                </div>
            </div>
            @include('layout.cate')
        </div>
    </div>
</div>
@endsection
