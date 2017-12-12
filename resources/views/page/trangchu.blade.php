@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Sản Phẩm Nổi Bật</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($sanpham_noibat as $sp)
             <div class="col">
                <div class="row">
                    <img src="images/sp_1.png">
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: 20.000.000 VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Điện Thoại</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($dienthoai as $sp)
            <div class="col">
                <div class="row">
                    <img src="images/sp_1.png">
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: 20.000.000 VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Máy Tính Bảng</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($maytinhbang as $sp)
            <div class="col">
                <div class="row">
                    <img src="images/sp_1.png">
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: 20.000.000 VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">LAPTOP</a>
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
    <div class="container-fluid san-pham">
        <div class="row justify-content-md-center san-pham-noi-bat">
            <a href="#">Linh Phụ Kiện</a>
        </div>
        <div class="row justify-content-md-center">
            <img src="images/icon_trang.png" alt="">
        </div>
        <div class="row home">
            @foreach($phukien as $sp)
            <div class="col">
                <div class="row">
                    <img src="images/sp_1.png">
                </div>
                <div class="row ghi-chu">
                    <ul>
                        <a href="{{route('chitietsanpham', $sp->idSP)}}">{{$sp->TenSP}}</a>
                        <li>Giá cũ: 20.000.000 VNĐ</li>
                        <li>Giá: {{number_format($sp->GiaSP)}} VNĐ</li>
                        <div class="addtocart">
                            <a href="#">Mua hàng</a>
                        </div>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection