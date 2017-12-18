@extends('layout.master')

@section('content')
 <div class="container-fluid san-pham">
        
        <div class="container">
        <div class="row" style="margin-top: 20px">
	        
	   
	        	<div class="row">
	        	
	        		<div class="col-md-12">
	        			<div class="row justify-content-md-center san-pham-noi-bat">
				            <a href="#">LIÊN HỆ</a>
				        </div>
				       
				        <div class="row justify-content-md-center">
				            <img src="images/icon_trang.png" alt="">
				        </div>
	        
	        			<div class="container-info">
	        		
        <div class="contact-info">
                    <div class="general__title">
                        <h2>Thông tin liên hệ</h2>
                    </div>
                    <div class="item-info">
                        <div class="item-info__icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <address>Địa chỉ: 180 Cao Lỗ, Phường 4, Quận 8, Hồ Chí Minh</address>
                    </div>
                    <div class="item-info">
                        <div class="item-info__icon">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                        </div>
                        <p>Hotline 1: <a href="tel:">(04) 3737 2332</a></p>
                        <p>Hotline 2: <a href="tel:">1900 6789</a></p>
                    </div>
                    <div class="item-info">
                        <div class="item-info__icon">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <p>Email: <a href="mailto:support@mobile.com">support@mobile.com</a></p>
                    </div>
                    <div class="general__title">
                        <h2>Gửi liên hệ</h2>
                    </div>
                </div>
        <div class="contact-form">
                            <form accept-charset="UTF-8" action="/contact" id="contact" method="post">
        <input name="FormType" type="hidden" value="contact">
        <input name="utf8" type="hidden" value="true">
                    
                    
                    <fieldset>
                        <input name="form_type" type="hidden" value="contact"><input name="utf8" type="hidden" value="?">               
                        <div class="customer-name">
                            <div class="input-box">
                                <label class="hidden" for="name">Họ tên</label>
                                <input type="text" size="35" required="" id="name" class="input-text" placeholder="Họ tên" value="" name="contact[Name]">
                            </div>
                            <div class="input-box">        
                                <label class="hidden" for="email">Email</label>
                                <input type="email" size="35" required="" id="email" placeholder="Email" value="" class="input-text" name="contact[email]">
                            </div>
                        </div>
                        <div style="float:none" class="">
                            <label class="hidden" for="comment">Nội dung</label>
                            <textarea name="contact[Body]" required="" id="comment" title="Nội dung" placeholder="Nội dung" class="input-text" cols="150" rows="3"></textarea>                        
                        </div>
                    </fieldset>
                    <div class="buttons-set">
                        <button type="submit" title="Submit" class="button submit" aria-label="Gửi"> <span> Gửi </span> </button>
                    </div>
                    </form>
                </div>
			    </div>
	
    
			
	    	
	        </div>
        </div>
        </div>

    </div>
   
@endsection