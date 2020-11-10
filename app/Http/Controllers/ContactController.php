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
    $contact = $this->repository->createContact($request);
    if ($contact) {
      return redirect('lien-he')->with('flash_message_success', 'Bạn đã gửi thành công.');
    } else {
      return redirect('lien-he')->with('flash_message_error', 'Lỗi. Vui lòng thử lại sau');
    }
  }
}
