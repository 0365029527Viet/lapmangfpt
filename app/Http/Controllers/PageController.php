<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // controller Menu
    public function trangchu(){
        return view('page.menu.trangchu');
    }
    public function internetfpt(){
        return view('page.menu.internetfpt');
    }
    public function camerafpt(){
        return view('page.menu.camerafpt');
    }
    public function truyenhinh(){
        return view('page.menu.truyenhinh');
    }
    public function fptplaybox(){
        return view('page.menu.fptplaybox');
    }
    public function hotro(){
        return view('page.menu.hotro');
    }
    public function goicuoccoban(){
        return view('page.menu.goicuoccoban');
    }
    public function goimorong(){
        return view('page.menu.goimorong');
    }
    public function danhsachkenh(){
        return view('page.menu.danhsachkenh');
    }
    public function spkithuat(){
        return view('page.menu.spkithuat');
    }
    public function thutucchinhsach(){
        return view('page.menu.thutucchinhsach');
    }
    // nhan tin voi shop
    public function nhantinvoishop(){
        return view('page.menu.nhantinvoishop');
    }
}
