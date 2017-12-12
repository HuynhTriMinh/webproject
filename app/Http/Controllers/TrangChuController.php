<?php

namespace App\Http\Controllers;
use App\SanPham;
use App\HangSanXuat;
use Cart;
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
    	$sanpham = SanPham::with('HangSanXuat')->where('idSP',$id)->first();
    	return view('page.sanpham_chitiet',compact('sanpham'));
    }


    // public function getGioHang($id){
    //     $sanpham = SanPham::where('idSP', $id)->first();
    //     Cart::add(array('id'=>$id, 'name'=>$sanpham->TenSP, 'qty'=>1, 'price'=>$sanpham->GiaSP, 'options'=>array('img', $sanpham->urlHinhSP)));
    //     $content = Cart::content();
       
    //     return view('page.giohang',compact('sanpham'));
    // }
}
