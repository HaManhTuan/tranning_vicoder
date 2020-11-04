@extends('layout.master') 
@section('content')
@include('layout.slider')  
<div class="detail_wrapper">
    <div class="new-page-wrapper">
        <div class="breadcrumb">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 title_bread">
                      <a href="">Trang chủ</a> <span class=""></span> <a>Sản phẩm</a> <span class=""></span> <a> Đồng hồ Longines L</a> 
                  </div>
              </div>
        </div>
    </div>
    <div class="container main_v2">
        <div class="product_detail row mt-60">
            <div class="col-lg-9 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <ul id="lightSlider">
                            <li data-thumb="./assets/images/K2241620_FXA.png" class="text-center">
                             <img src="./assets/images/K2241620_FXA.png" width="250px" height="250px"/> 
                           </li>  
                             <li data-thumb="https://img.vn/uploads/thuvien/viber-image-2019-08-06-10-40-38-jpg-20190807145944LO3qbinQdG.jpg" class="text-center"> 
                             <img src="https://img.vn/uploads/thuvien/viber-image-2019-08-06-10-40-38-jpg-20190807145944LO3qbinQdG.jpg" width="250px" height="250px"/>
                           </li>
                              <li data-thumb="./assets/images/dongho3.png" class="text-center">
                             <img src="./assets/images/dongho3.png" width="250px" height="250px"/> 
                           </li>
                             <li data-thumb="./assets/images/dongho6.png" class="text-center">
                             <img src="./assets/images/dongho6.png" width="250px" height="250px"/>
                           </li>
                         </ul>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <div class="product_summary">
                            <h1 class="product_title">Đồng hồ Longines L</h1>
                            <hr  width="100%" align="center" class="contact_hr"/>
                            <div class="product_summary_detail">
                                <p class="code_product">Mã sản phẩm: </p>
                                <p class="status_product">Tình trạng: Hết hàng</p>
                                <p class="price_product">Giá bán: <span class="default_text_color_sale">27,000 đ </span> / sản phẩm</p>
                                <div class="number">
                                    <div class="dib"><p>Số lượng:</p></div>
                                    <div class="dib"><input type="text" class="form-control" value="1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"></div>
                                </div>
                                <p class="mt-4 title_subtotal">Tổng tiền: <span class="sub_total">27,000 đ</span></p>
                            </div>
                            <div class="button-product">
                                <a class="btn-buy-now" href="/gio-hang">Mua ngay</a>
                                <a class="btn-add-cart" href="/gio-hang">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="hotline mt-5">
                                <img src="./assets/images/75dcf054-dd4c-4d69-b73e-b3909d675bf6.svg" alt="" width="20px" height="20px">
                                <p class="number_hotline dib ml-1">Hottline: +84 868 21 08 62</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('layout.cate')
        </div>
        <div class="new-detail-wrapper list-comment">
            <div class="col-lg-9 col-md-12 col-sm-12 comment">
                <p class="title_comment">Bình luận</p>
                <hr  width="100%" align="center" class="horizontal_line"/>
                <form action="">
                    <input type="text" class="form-control col-lg-5 col-sm-12 mb-3"  placeholder="Nhập email của bạn . . .">
                    <input type="text" class="form-control col-lg-5 col-sm-12 mb-3"  placeholder="Nhập tên của bạn . . .">
                    <textarea name=""  class="form-control col-lg-5 col-sm-12 mb-3" id="" cols="30" rows="5" placeholder="Nhập nội dung bình luận . . ."></textarea>
                    <button class="btn-comment mb-5">Gửi</button>
                </form>
            </div>
        </div>
        <div class="product_new row">
            <div class="col-lg-9">
               <div class="box-title" style="">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6 col-smm-6">
                        <p class="p_title" style="margin: 0 auto;">Tissot(12)</p>
                     </div>
                  </div>
               </div>
               <div class="row cate_product">
                  <div class="col-lg-3 col-md-4 col-sm-6 product_item">
                     <div class="card item">
                        <a href="/chi-tiet">
                           <div class="card-img">
                              <img src="./assets/images/K2241620_FXA.png" class="card-img-top center cover" alt="">
                           </div>
                        </a>
                        <div class="card-body">
                           <p class="text-center pro_name"><a href="" class="">Đồng hồ Longines L</a></p>
                           <div class="price_list text-center">
                              <p class="price">Giá bán: 73,260,000</p>
                              <p class="sale">Giá NY: 149,000,000</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 product_item">
                     <div class="card item">
                        <a href="/chi-tiet">
                           <div class="card-img">
                              <img src="./assets/images/K2241620_FXA.png" class="card-img-top center cover" alt="">
                           </div>
                        </a>
                        <div class="card-body">
                           <p class="text-center pro_name"><a href="" class="">Đồng hồ Longines L</a></p>
                           <div class="price_list text-center">
                              <p class="price">Giá bán: 73,260,000</p>
                              <p class="sale">Giá NY: 149,000,000</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 product_item">
                     <div class="card item">
                        <a href="/chi-tiet">
                           <div class="card-img">
                              <img src="./assets/images/K2241620_FXA.png" class="card-img-top center cover" alt="">
                           </div>
                        </a>
                        <div class="card-body">
                           <p class="text-center pro_name"><a href="" class="">Đồng hồ Longines L</a></p>
                           <div class="price_list text-center">
                              <p class="price">Giá bán: 73,260,000</p>
                              <p class="sale">Giá NY: 149,000,000</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-4 col-sm-6 product_item">
                     <div class="card item">
                        <a href="/chi-tiet">
                           <div class="card-img">
                              <img src="./assets/images/K2241620_FXA.png" class="card-img-top center cover" alt="">
                           </div>
                        </a>
                        <div class="card-body">
                           <p class="text-center pro_name"><a href="" class="">Đồng hồ Longines L</a></p>
                           <div class="price_list text-center">
                              <p class="price">Giá bán: 73,260,000</p>
                              <p class="sale">Giá NY: 149,000,000</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
    </div>
</div>
@endsection