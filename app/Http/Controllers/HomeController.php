<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
class HomeController extends BaseController
{
    public function index()
    {
       $contact = $this->repository->find(1);
       return view('index', compact('contact'));
    }
}
