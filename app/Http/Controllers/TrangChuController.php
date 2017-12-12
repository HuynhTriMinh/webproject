<?php

namespace App\Http\Controllers;
use App\SanPham;
use Illuminate\Http\Request;

class TrangChuController extends Controller
{


    public function getTrangChu()
    {
    	$dienthoai = SanPham::where('idLoaiSP','1')->orderBy("GiaSP","decs")->limit(5)->get();
    	$sanpham_noibat=SanPham::orderBy("SoLanXem","decs")->limit(5)->get();
    	$maytinhbang = SanPham::where('idLoaiSP','2')->orderBy("GiaSP","decs")->limit(5)->get();
    	$phukien = SanPham::where('idLoaiSP','3')->orderBy("GiaSP","decs")->limit(5)->get();
    	return view('page.trangchu',compact('dienthoai','sanpham_noibat','maytinhbang','phukien'));
    }


    public function getChiTietSanPham($id){
    	$sanpham = SanPham::orderBy("GiaSP","decs")->limit(5)->get();
    	return view('page.trangchu',compact('sanpham'));
    }
}
