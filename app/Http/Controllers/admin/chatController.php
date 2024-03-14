<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class chatController extends Controller
{
    public function index()
    {
        $data = khuvucfpt::orderBy('id','desc')->paginate(15);
        return view('admin.khuvuc.index', compact('data'));
    }
}
