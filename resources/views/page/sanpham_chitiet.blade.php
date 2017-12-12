@extends('layout.master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <img src="images/sony-z4.jpg" alt="">
                </div>
                <div class="chitiet-sanphamcon">
                    <img src="images/sp_10.png" alt="">
                    <img src="images/sp_10.png" alt="">
                    <img src="images/sp_10.png" alt="">
                </div>
            </div>
            <div class="col-md-7 thongtin">
                <h2>{{$sanpham->TenSP}}</h2>
                <hr>
                <div class="chitiet-gia">
                    <p>Giá cũ: <b>{{number_format($sanpham->GiaSP)}}đ</b></p>
                    <p>Giá mới: <b>3.000.000đ</b></p> 
                </div>
                <div class="chitiet-thuonghieu">
                    <p>Thương hiệu: <a href="#">{{$sanpham->HangSanXuat->TenHangSX}}</a></p>
                    <p>Tình trạng: Còn hàng</p>
                </div>
                <br>
                <div class="chitiet-mota">
                    <h4>Mô Tả:</h4>
                    
                    {!!$sanpham->MoTaSP!!}

                </div>
                <br>
                <div class="chitiet-soluong addtocart">
                    <label for="soluong">Số lượng</label>
                    <input type="number" title="soluong" value="1">
                    <a href="#">Mua hàng</a>
                </div> 
            </div>
        </div>
        <div class="row">
            <div class="thongtinchitiet">
                <h3>Thông Tin Chi Tiết</h3>
            </div>
            <div>
                {{$sanpham->ChiTietSP}}
            </div>
        </div>
    </div>
    <div class="container-fluid san-pham">
            <div class="row justify-content-md-center san-pham-noi-bat">
                <a href="#">SẢN PHẨM LIÊN QUAN</a>
            </div>
            <div class="row justify-content-md-center">
                <img src="images/icon_trang.png" alt="">
            </div>
            <div class="row home">
                <div class="col">
                    <div class="row">
                        <img src="images/sp_1.png">
                    </div>
                    <div class="row ghi-chu">
                        <ul>
                            <a href="#">IPHONE 7 PLUS</a>
                            <li>Giá cũ: 20.000.000 VNĐ</li>
                            <li>Giá: 18.000.000 VNĐ</li>
                            <div class="addtocart">
                                <a href="#">Mua hàng</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <img src="images/sp_1.png">
                    </div>
                    <div class="row ghi-chu">
                        <ul>
                            <a href="#">IPHONE 7 PLUS</a>
                            <li>Giá cũ: 20.000.000 VNĐ</li>
                            <li>Giá: 18.000.000 VNĐ</li>
                            <div class="addtocart">
                                <a href="#">Mua hàng</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <img src="images/sp_1.png">
                    </div>
                    <div class="row ghi-chu">
                        <ul>
                            <a href="#">IPHONE 7 PLUS</a>
                            <li>Giá cũ: 20.000.000 VNĐ</li>
                            <li>Giá: 18.000.000 VNĐ</li>
                            <div class="addtocart">
                                <a href="#">Mua hàng</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <img src="images/sp_1.png">
                    </div>
                    <div class="row ghi-chu">
                        <ul>
                            <a href="#">IPHONE 7 PLUS</a>
                            <li>Giá cũ: 20.000.000 VNĐ</li>
                            <li>Giá: 18.000.000 VNĐ</li>
                            <div class="addtocart">
                                <a href="#">Mua hàng</a>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="col">
                        <div class="row">
                            <img src="images/sp_1.png">
                        </div>
                        <div class="row ghi-chu">
                            <ul>
                                <a href="#">IPHONE 7 PLUS</a>
                                <li>Giá cũ: 20.000.000 VNĐ</li>
                                <li>Giá: 18.000.000 VNĐ</li>
                                <div class="addtocart">
                                    <a href="#">Mua hàng</a>
                                </div>
                            </ul>
                        </div>
                    </div>
            </div>
    </div>
@endsection