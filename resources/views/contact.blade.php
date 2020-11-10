@extends('layout.master')
@section('content')
@include('layout.slider')
<div class="contact-page-wrapper">
  <div class="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 title_bread">
                <a href="">Trang chủ</a> <span></span> <a> Liên hệ</a>
            </div>
        </div>
    </div>
</div>

@if(Session::has('flash_message_success'))

<script>
  $(document).ready(function() {
      $.notify("{{ Session::get('flash_message_success') }}", "success");
  });
</script>
@else
<script>
  $(document).ready(function() {
      $.notify("{{ Session::get('flash_message_error') }}", "error");
  });
</script>
 @endif

<div class="container main_v2">
    <div class="product_new row">
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="content_contact">
                <div class="title_contact">
                    <h5>LIÊN HỆ</h5>
                </div>
                <hr  width="100%" align="center" class="horizontal_line"/>
                <div class="row body_contact">
                    <div class="col-lg-6 col-md-12 col-sm-12 ">
                        <div class="infor_contact">
                            <form method="POST" action="{{ url('lien-he-post') }}" id="form-contact">
                                @csrf
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Họ tên:</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="name" name="full_name" data-rule-required="true" data-msg-required="Vui lòng nhập tên.">
                                      @error('full_name')
                                        <div class="error">{{ $message }}</div>
                                      @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Địa chỉ:</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" data-rule-required="true" data-msg-required="Vui lòng nhập địa chỉ.">
                                        @error('address')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Số điện thoại:</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone" name="phone_number" data-rule-required="true" data-msg-required="Vui lòng nhập số điện thoại.">
                                        @error('phone_number')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Số điện thoại cố định:</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control @error('phone_ct') is-invalid @enderror" id="phone_ct" name="phone_ct" data-rule-required="true" data-msg-required="Vui lòng nhập sđt cố định.">
                                        @error('phone_ct')
                                            <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Fax:</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control @error('fax') is-invalid @enderror" id="fax" name="fax" data-rule-required="true" data-msg-required="Vui lòng nhập fax.">
                                      @error('fax')
                                      <div class="error">{{ $message }}</div>
                                    @enderror
                                    </div>

                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Email:</label>
                                    <div class="col-sm-7">
                                      <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" data-rule-required="true" data-msg-required="Vui lòng nhập email.">
                                      @error('email')
                                      <div class="error">{{ $message }}</div>
                                  @enderror
                                    </div>

                                  </div>
                                  <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Nội dung:</label>
                                    <div class="col-sm-7">
                                        <textarea name="note" id="note" cols="30" rows="4" class="form-control @error('content') is-invalid @enderror" data-rule-required="true" data-msg-required="Vui lòng nhập nội dung."></textarea>
                                        @error('content')
                                            <div class="error">{{ $message }}</div>
                                         @enderror
                                    </div>
                                  </div>
                                  {{-- <div class="form-group row @error('g-recaptcha-response') is-invalid @enderror">
                                    <label for="name" class="col-sm-5 col-form-label"></label>
                                    <div class="col-sm-7">
                                        {!! app('captcha')->display() !!}
                                        @error('g-recaptcha-response')
                                        <div class="error">{{ $message }}</div>
                                         @enderror
                                    </div>
                                  </div> --}}
                                  <div class="form-group row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 text-right">
                                    <button  type="button" class="btn-cancel" onclick="window.location.href='{{ url('/') }}'">Hủy</button>
                                        <button type="submit" class="btn-send"> Gửi</button>
                                    </div>
                                  </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="maps_contact">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.320127189215!2d105.80386291424514!3d21.019873193459045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab677bc39f5d%3A0x56040324152646c8!2zVOG6p25nIDMsIDE0IFBow6FvIMSQw6BpIEzDoW5nLCBMw6FuZyBUaMaw4bujbmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1603099338231!5m2!1svi!2s"
                          width="600" height="450" frameborder="0" style="border:1;" allowfullscreen="false" aria-hidden="false" tabindex="0" style="width: 100%"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-60">
                        <p class="Website-Sn-phm-bn-hng">Website Sản phẩm bán hàng</p>
                        <p class="custom_text1">Địa chỉ : Tầng 2, Số 42, Ngõ 178, Thái Hà, Trung Liệt, Đống Đa, Hà Nội</p>
                        <p class="custom_text1">
                            Hãy liên hệ với chúng tôi để có một sản phẩm tốt nhất cho bạn
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @include('layout.cate')
    </div>
</div>
</div>
@endsection
