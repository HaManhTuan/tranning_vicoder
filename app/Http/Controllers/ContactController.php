<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{

    public function index()
    {
        return view('contact');
    }
    public function create(Request $request)
    {

        $this->validate(
            $request,
            [
                'full_name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'phone_ct' => 'required',
                'fax' => 'required',
                'email' => 'required|email',
                'note' => 'required',
                //'g-recaptcha-response' => 'required|captcha',
            ],
            [
                'full_name.required' => 'Tên không được để trống',
                'address.required' => 'Địa chỉ không được để trống',
                'phone_number.required' => 'SĐT không được để trống',
                'phone_ct.required' => 'SĐT không được để trống',
                'fax.required' => 'Fax không được để trống',
                'email.required' => 'email không được để trống',
                'email.email' => 'Định dạng mail không đúng',
                'note.required' => 'Nội dung không được để trống',
                //'g-recaptcha-response.required' => 'Nội dung này không được để trống',
            ]
        );
        $contact = $this->repository->create($request->all());
        if ($contact) {
            return redirect('lien-he')->with('flash_message_success', 'Bạn đã gửi thành công.');
        } else {
            return redirect('lien-he')->with('flash_message_error', 'Lỗi. Vui lòng thử lại sau');
        }
    }
}
