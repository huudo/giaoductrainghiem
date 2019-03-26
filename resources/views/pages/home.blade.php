@extends('layouts.master')
@section('css-area')
  <link href='{{asset("public/css/home.css")}}' rel='stylesheet' type='text/css'>
@endsection
@section('content')
<div class="nicdark_space90"></div>

<!--start-->
<!--start section-->
<div class="nicdark_section">

    <div class="slider">
        <div class="slider__slide slider__slide--active" data-slide="1">
        <div class="slider__wrap">
          <div class="slider__back"></div>
        </div>
        <div class="slider__inner">
          <div class="slider__content">
            <h1>Giáo dục<br>trải nghiệm</h1><a class="go-to-next" onclick="return nextSlide()">next</a>
          </div>
        </div>
        </div>
        <div class="slider__slide" data-slide="2">
        <div class="slider__wrap">
          <div class="slider__back"></div>
        </div>
        <div class="slider__inner">
          <div class="slider__content">
            <h1>Hoà mình vào<br> Thiên nhiên xanh</h1><a class="go-to-next" onclick="return nextSlide()" >next</a>
          </div>
        </div>
        </div>
        <div class="slider__slide" data-slide="3">
        <div class="slider__wrap">
          <div class="slider__back"></div>
        </div>
        <div class="slider__inner">
          <div class="slider__content">
            <h1>Học qua <br> Thực tế trải nghiệm</h1><a class="go-to-next" onclick="return nextSlide()">next</a>
          </div>
        </div>
        </div>
        <div class="slider__slide" data-slide="4">
        <div class="slider__wrap">
          <div class="slider__back"></div>
        </div>
        <div class="slider__inner">
          <div class="slider__content">
            <h1>Phát triển<br> Kỹ năng & Tư duy</h1><a class="go-to-next" onclick="return nextSlide()">next</a>
          </div>
        </div>
        </div>
		<div class="slider__indicators"></div>
    </div>
    
</div>
<!--end section-->

<!--start section-->
<div class="nicdark_section nicdark_bg_greydark">
    
    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">
        

        <div class="grid grid_12">
            
            <!--start nicdark_tabs-->
            <div class="nicdark_tab nicdark_margintop53_negative nicdark_relative" style="z-index: 2">
                
                <ul class="nicdark_tabslist greydark">
                    <li class="nicdark_width100_iphonepotr"><a title="BOOK YOUR HOLIDAY" href="#tabs-1" class="nicdark_width100_iphonepotr nicdark_sizing nicdark_tooltip nicdark_btn nicdark_bg_yellow medium white text-uppercase"><i class="icon-tree nicdark_displaynone_iphoneland nicdark_displaynone_iphonepotr nicdark_marginright10"></i>{{__('register')}}</a></li>
                    <li class="nicdark_width100_iphonepotr"><a title="AMAZING EVENTS" href="#tabs-2" class="nicdark_width100_iphonepotr nicdark_sizing nicdark_tooltip nicdark_btn nicdark_bg_orangedark medium white text-uppercase"><i class="icon-calendar-2 nicdark_displaynone_iphoneland nicdark_displaynone_iphonepotr nicdark_marginright10"></i>{{__('events')}}</a></li>
                    <li class="nicdark_width100_iphonepotr"><a title="REQUEST A FREE QUOTE" href="#tabs-3" class="nicdark_width100_iphonepotr nicdark_sizing nicdark_tooltip nicdark_btn nicdark_bg_green medium white text-uppercase"><i class="icon-mail nicdark_displaynone_iphoneland nicdark_displaynone_iphonepotr nicdark_marginright10"></i>{{__('contacts')}}</a></li>
                </ul>

                <div class="nicdark_tabs">
                    
                    <div class="nicdark_margin20" id="tabs-1">
                        <div class="nicdark_focus nicdark_width_percentage25">

                            <div class="nicdark_focus nicdark_relative nicdark_icon_select">

                                <select class="nicdark_bg_greydark2   grey medium subtitle">
                                    <option>ACCOMODATION</option>
                                    <option>TENT</option>
                                    <option>PITCH</option>
                                    <option>CARAVAN</option>
                                    <option>BOUNGALOW</option>
                                    <option>COTTAGE</option>
                                    <option>APPARTMENT</option>
                                </select> 

                            </div> 

                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                
                                <div class="nicdark_focus nicdark_relative nicdark_icon_text">

                                    <input class="nicdark_bg_greydark2   grey medium subtitle" type="text" placeholder="N° PEOPLE" value="" size="200">

                                </div>

                            </div>
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">

                                <div class="nicdark_focus nicdark_relative nicdark_icon_date">
                                    <input class="nicdark_bg_greydark2   grey medium subtitle nicdark_calendar" placeholder="DATE" type="text" value=""  >       
                                </div>

                            </div>       
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                <input class="nicdark_btn fullwidth nicdark_bg_orangedark medium   white nicdark_press" type="submit" value="SEARCH"  >     
                            </div>
                        </div>    
                    </div>
                    
                    <div class="nicdark_margin20" id="tabs-2">
                        <div class="nicdark_focus nicdark_width_percentage25">

                            <div class="nicdark_focus nicdark_relative nicdark_icon_text">
                                <input class="nicdark_bg_greydark2   grey medium subtitle" type="text" placeholder="EVENT NAME" value="" size="200">
                            </div>

                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                
                                <div class="nicdark_focus nicdark_relative nicdark_icon_select">
                                    <select class="nicdark_bg_greydark2   grey medium subtitle">
                                        <option>TYPOLOGY</option>
                                        <option>KIDS</option>
                                        <option>FAMILY</option>
                                        <option>EXCURSION</option>
                                        <option>SPORT</option>
                                    </select> 
                                </div>

                            </div>
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                
                                <div class="nicdark_focus nicdark_relative nicdark_icon_date">
                                    <input class="nicdark_bg_greydark2   grey medium subtitle nicdark_calendar" placeholder="DATE" type="text" value=""  >       
                                </div>

                            </div>       
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                <input class="nicdark_btn fullwidth nicdark_bg_orange medium   white nicdark_press" type="submit" value="SEARCH"  >     
                            </div>
                        </div>
                    </div>
                    
                    <div class="nicdark_margin20" id="tabs-3">
                        <div class="nicdark_focus nicdark_width_percentage25">

                            <div class="nicdark_focus nicdark_relative nicdark_icon_text">
                                <input name="nicdark_form_contact_name" class="nicdark_bg_greydark2   grey medium subtitle" type="text" placeholder="NAME" value="" size="200">
                            </div>

                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                
                                <div class="nicdark_focus nicdark_relative nicdark_icon_mail">
                                    <input name="nicdark_form_contact_email" class="nicdark_bg_greydark2   grey medium subtitle" type="text" placeholder="EM@IL" value="" size="200">  
                                </div>

                            </div>
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                
                                <div class="nicdark_focus nicdark_relative nicdark_icon_msg">
                                    <input name="nicdark_form_contact_message" class="nicdark_bg_greydark2   grey medium subtitle" type="text" placeholder="MESS" value="" size="200"> 
                                </div>

                            </div>       
                        </div>
                        <div class="nicdark_focus nicdark_width_percentage25">
                            <div class="nicdark_marginleft20 nicdark_disable_marginleft_iphoneland nicdark_disable_marginleft_iphonepotr">
                                <input onclick="nicdark_form_contact()" class="nicdark_btn fullwidth nicdark_bg_red medium   white nicdark_press" type="submit" value="CONTACT"  >     
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--end nicdark_tabs-->   

        </div>


    </div>
    <!--end nicdark_container-->

</div>
<!--end section-->

<!--start section: tours-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>
        <div class="grid grid_12">
            <h1 class="center">DANH MỤC TOURS</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle center">Đa dạng các tours du lịch & giáo dục trải nghiệm phù hợp mọi lứa tuổi và sở thích </h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider center big"><span class="nicdark_bg_grey2"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        
				<div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour1.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">KỸ NĂNG SINH TỒN CƠ BẢN</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: trẻ từ 4-8 tuổi</br>
											Nội dung: Các hoạt động phát triển kỹ năng tự lập, tìm hiểu văn hoá, thực hành tre luồng, vv.</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>5.000.000</h3>
                  <p>3 ngày 2 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>
        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour2.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">NÔNG TRẠI VUI VẺ</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: học sinh từ 8-14 tuổi</br>
											Nội dung: Tham gia trồng hoa, lúa, tìm hiểu quy trình sản xuất mật đường và trồng tre.</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>2.000.000</h3>
                  <p>2 ngày 1 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>
        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour3.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">KHÁM PHÁ THIÊN NHIÊN</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: học sinh từ 8-17 tuổi</br>
											Nội dung: Khám phá khu công viên tre luồng Thanh Tam, khu di tích Lam Kinh</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>5.000.000</h3>
                  <p>3 ngày 2 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>

				<div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour4.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">VƯỢT QUA CHÍNH MÌNH</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: trẻ từ 4-8 tuổi</br>
											Nội dung: Các hoạt động phát triển kỹ năng tự lập, tìm hiểu văn hoá, thực hành tre luồng, vv.</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>5.000.000</h3>
                  <p>3 ngày 2 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>
        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour5.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">NGƯỢC DÒNG LỊCH SỬ</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: học sinh từ 8-17 tuổi</br>
											Nội dung: Hành trình khám phá lịch sử, theo mô hình tái hiện lại cuộc khởi nghĩa Lê Lợi.</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>2.000.000</h3>
                  <p>2 ngày 1 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>
        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus tour-element">
                <img class="nicdark_width_percentage100" alt="" src="public/img/tours/tour6.png">
                
                <!--title e descr-->
                <div class="nicdark_margin0  nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520"><a href="#">CUỘC ĐUA KỲ THÚ</a></h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_display_inlineblock">
											Đối tượng: học sinh từ 8-17 tuổi</br>
											Nội dung: Các nhóm nhỏ 5-8 em sẽ tham gia vào cuộc đua đòi hỏi các kỹ năng và kiến thức đã học</br>
											Số lượng theo nhóm: 20-40 em
										</p>
                </div>
                <div class="price-tours">
                  <p>Giá từ</p>
                  <h3>5.000.000</h3>
                  <p>3 ngày 2 đêm</p>
                </div>
            </div>
            <!--end accomodation-->

        </div>



        <div class="nicdark_focus">
            <div class="grid_12 grid nicdark_center">
                <div class="nicdark_space10"></div>
                <a href="accomodations" class="nicdark_btn nicdark_bg_green   medium white"><i class="icon-th"></i>&nbsp;&nbsp;&nbsp;XEM TẤT CẢ LỰA CHỌN</a>
                <div class="nicdark_space20"></div>
            </div>
        </div>

    </div>
    <!--end container-->

</div>
<!--end section accommodation-->


<!--start section: accommodations-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        
        <div class="grid grid_12">
            <h1 class="center">CHỖ ĂN Ở</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle center">Chúng tôi có nhiều lựa chọn phù hợp với từng lứa tuổi và số lượng theo nhóm hoặc gia đình. </h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider center big"><span class="nicdark_bg_grey2"></span></div>
            <div class="nicdark_space10"></div>
        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img class="nicdark_width_percentage100" alt="" src="public/img/accomodations/img1.jpg">
                
                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    

                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">LỀU NHỎ CHO 2 NGƯỜI</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_width100_iphonepotr nicdark_width100_iphoneland  nicdark_sizing nicdark_btn nicdark_bg_blue left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_width100_iphonepotr nicdark_width100_iphoneland  nicdark_sizing nicdark_btn nicdark_border_grey nicdark_bg_white right medium grey">From 200 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img alt="" class="nicdark_width_percentage100" src="public/img/accomodations/img2.jpg">
                
                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    

                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">LỀU CỠ VỪA CHO MỘT GIA ĐÌNH</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_green left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_border_grey nicdark_bg_white right medium grey">From 170 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img alt="" class="nicdark_width_percentage100" src="public/img/accomodations/img3.jpg">
                
                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    

                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">XE VAN LỚN CHO 1 GIA ĐÌNH</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_violet left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_border_grey nicdark_bg_white right medium grey">From 520 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img alt="" class="nicdark_width_percentage100" src="public/img/accomodations/img4.jpg">
            

                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">LỀU NHỎ CHO TRẺ EM</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_yellow left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_border_grey nicdark_bg_white right medium grey">From 130 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img alt="" class="nicdark_width_percentage100" src="public/img/accomodations/img3.jpg">
                
                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">KHU CAMPING CHO NHIỀU XE VAN</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_orange left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_white nicdark_border_grey right medium grey">From 500 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="grid grid_4">
            
            <!--start accomodation-->
            <div class="nicdark_focus">
                <img alt="" class="nicdark_width_percentage100" src="public/img/accomodations/img6.jpg">
                
                <!--title e descr-->
                <div class="nicdark_margin020 nicdark_border_bottom_none nicdark_relative nicdark_sizing nicdark_bg_white nicdark_margintop30_negative">
                    
                    <div class="nicdark_focus nicdark_sizing nicdark_bg_greydark "> 
                        <h4 class="white nicdark_margin1520">KHU CAMPING CÓ CẢ KHU LỬA TRẠI</h4>
                    </div>
                    <p class="nicdark_padding20 nicdark_border_grey nicdark_border_bottom_none nicdark_display_inlineblock">
											Một lều ngoài trời trong khu camping, đủ cho 2 người lớn. Có đầy đủ nước, điện và wifi, dịch vụ y tế 24/24.
										</p>
                
                </div>
                <!--end title e descr-->

                <!--icons-->
                <div class="nicdark_focus nicdark_padding020  nicdark_border_grey nicdark_sizing nicdark_bg_grey">
                    <a title="Wifi" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                    <a title="Air Conditional" class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                    <a title="Medical Care" class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                    <a title="People" class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                </div>
                <!--end icons-->

                <!--btns-->
                <div class="nicdark_paddingtop0 nicdark_focus nicdark_sizing nicdark_padding20  nicdark_relative nicdark_sizing nicdark_bg_white ">
                    <div class="nicdark_border_top_none nicdark_focus nicdark_padding20 nicdark_sizing nicdark_border_grey ">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_red left  medium white">VIEW ALL</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_border_grey nicdark_btn nicdark_bg_white right grey medium">From 450 $</a>
                        </div>
                    </div>
                </div>
                <!--end btns-->

            </div>
            <!--end accomodation-->

        </div>


        <div class="nicdark_focus">
            <div class="grid_12 grid nicdark_center">
                <div class="nicdark_space10"></div>
                <a href="accomodations" class="nicdark_btn nicdark_bg_green   medium white"><i class="icon-th"></i>&nbsp;&nbsp;&nbsp;XEM TẤT CẢ LỰA CHỌN</a>
                <div class="nicdark_space20"></div>
            </div>
        </div>

    </div>
    <!--end container-->

</div>
<!--end section accommodation-->

<!--start section: cost calculator-->
<div class="nicdark_space30"></div> 
<div id="nicdark_parallax_booking" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img1">

    <div class="nicdark_filter ">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_6">
                <div class="nicdark_space20"></div>   
            </div>

            <!--start grid-->
            <div class="grid grid_5">
                <div class="nicdark_space50"></div>  
                

                <div class="nicdark_focus nicdark_bg_greydark">
                    
                    <!--start tile-->
                    <div class="nicdark_focus nicdark_bg_greydark2">    
                        <h4 class="white nicdark_margin20">TÍNH TOÁN CHI PHÍ</h4>
                    </div>
                    <!--end title-->
                        
                    <!--descr-->            
                    <!--<div class="nicdark_focus nicdark_paddingbottom0 nicdark_padding20 nicdark_sizing"> 
                        <p class="white">Lorem ipsum dolor sit amet, consec adipiscing elit. Pellentesque tincidunt rutrum sapien, sed ultricies diam, lorem ipsum dolor sit amet consecteur elite done sami.</p>
                    </div>-->
                    <!--end descr-->

                    <!--start form-->
                    <div class="nicdark_focus nicdark_sizing nicdark_padding10">

                        
                        <div class="grid grid_12 percentage">
                            <div class="nicdark_focus nicdark_sizing nicdark_padding10">
                                <div class="select_label nicdark_relative nicdark_focus">

                                    <p class="nicdark_paddingleft0 nicdark_btn left medium grey nicdark_cursor_text">KIỂU CHỖ Ở : </p>
                                    
                                    <div class="nicdark_float_right nicdark_width_percentage45 nicdark_width100_responsive nicdark_bg_greydark2  nicdark_relative nicdark_icon_select">
                                        <select id="nicdark_cost_calculator_accomodation" name="nicdark_cost_calculator_accomodation" onchange="nicdark_cost_calculator()" class="nicdark_bg_greydark2 grey nicdark_padding1020 medium subtitle">
                                            <option value="50">PITCH</option>
                                            <option value="80">TENT</option>
                                            <option value="120">CARAVAN</option>
                                            <option value="140">BOUNGALOW</option>
                                            <option value="160">COTTAGE</option>
                                            <option value="200">APPARTMENT</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="grid grid_12 percentage">
                            <div class="nicdark_focus nicdark_sizing nicdark_padding10">
                                <div class="select_label nicdark_relative nicdark_focus">

                                    <p class="nicdark_paddingleft0 nicdark_btn left medium nicdark_cursor_text grey">SỐ LƯỢNG NGƯỜI : </p>

                                    <div class="nicdark_float_right nicdark_width_percentage45 nicdark_width100_responsive nicdark_bg_greydark2  nicdark_relative nicdark_icon_select">
                                        <select id="nicdark_cost_calculator_person" name="nicdark_cost_calculator_person" onchange="nicdark_cost_calculator()" class="nicdark_bg_greydark2 grey nicdark_padding1020 medium subtitle">
                                            <option value="1">1 NGƯỜI</option>
                                            <option value="2">2 NGƯỜI</option>
                                            <option value="3">3 NGƯỜI</option>
                                            <option value="4">4 NGƯỜI</option>
                                            <option value="5">5 NGƯỜI</option>
                                            <option value="6">6 NGƯỜI</option>
                                            <option value="7">7 NGƯỜI</option>
                                            <option value="8">8 NGƯỜI</option>
                                            <option value="9">9 NGƯỜI</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="grid grid_12 percentage">
                            <div class="nicdark_focus nicdark_sizing nicdark_padding10">
                                <div class="select_label nicdark_relative nicdark_focus">

                                    <p class="nicdark_paddingleft0 nicdark_btn left nicdark_cursor_text medium grey">SỐ NGÀY :</p>
                                    <div class="nicdark_float_right nicdark_width_percentage45 nicdark_width100_responsive  nicdark_relative nicdark_icon_select">
                                        <select name="nicdark_cost_calculator_day" id="nicdark_cost_calculator_day" onchange="nicdark_cost_calculator()" class="nicdark_slider_range_select nicdark_bg_greydark2 grey nicdark_padding1020 medium subtitle" style="float:right; width:40%" >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option selected value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="grid grid_12 percentage">
                            <div class="nicdark_focus nicdark_sizing nicdark_padding10">
                                <div class="select_label nicdark_relative nicdark_focus">

                                    <p class="nicdark_paddingleft0 nicdark_btn left nicdark_cursor_text medium grey">CHỌN MÙA THAM GIA :</p>

                                    <div class="nicdark_float_right nicdark_width_percentage45 nicdark_width100_responsive nicdark_bg_greydark2  nicdark_relative nicdark_icon_select">
                                        <select id="nicdark_cost_calculator_season" name="nicdark_cost_calculator_season" onchange="nicdark_cost_calculator()" class="nicdark_bg_greydark2 grey nicdark_padding1020 medium subtitle">
                                            <option value="0">MÙA THU</option>
                                            <option value="10">MÙA ĐÔNG</option>
                                            <option value="20">MÙA XUÂN</option>
                                            <option value="30">MÙA HÈ</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="grid grid_12 percentage ">
                            <div class="nicdark_focus nicdark_sizing nicdark_padding10">
                                <a href="#" class="nicdark_btn nicdark_bg_red fullwidth right big white">
                                    GIÁ TỪ <span class="nicdark_ajax_cost_calculator_result">1,000,000</span> vnđ
                                </a>
                            </div>
                        </div>

                    </div>
                    <!--end form-->
                    
                </div>


                <div class="nicdark_space50"></div>
            </div>
            <!--end grid-->


        </div>
        <!--end nicdark_container-->

    </div>
     
</div>
<!--end section:cost calculator-->

<!--start section: best services-->
<div class="nicdark_space30"></div> 
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space20"></div>

        <div class="grid grid_12">
            <h1 id="nicdark_services" class="center">NHỮNG DỊCH VỤ TỐT NHẤT</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle center">Những dịch vụ tốt nhất dành cho bạn</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider center big"><span class="nicdark_bg_grey2"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        <div class="grid grid_4">
            
            <div class="nicdark_focus nicdark_border_grey nicdark_sizing nicdark_border_bottom_none nicdark_bg_grey ">  
                <h4 class="grey nicdark_margin20">MỘT SỐ THÔNG TIN QUAN TRỌNG</h4>
            </div>

            <div class="nicdark_focus nicdark_border_grey  nicdark_bg_white nicdark_padding20 nicdark_sizing">

                <ul class="nicdark_list border">
                    <li class="nicdark_border_grey">
                        <h5 class="grey subtitle">Giờ Check In<a class="nicdark_btn nicdark_bg_green extrasmall   white right" href="#">12 – 18</a></h5>
                        <div class="nicdark_space15"></div>
                    </li>
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <h5 class="grey subtitle">Giờ Check Out<a class="nicdark_btn nicdark_bg_green extrasmall   white right" href="#">09 – 10</a></h5>
                        <div class="nicdark_space15"></div>
                    </li>
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <h5 class="grey subtitle">Giờ yên tĩnh ban ngày <a class="nicdark_btn nicdark_bg_red extrasmall   white right" href="#">14 – 16</a></h5>
                        <div class="nicdark_space15"></div>
                    </li>
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <h5 class="grey subtitle">Giờ yên tĩnh ban đêm <a class="nicdark_btn nicdark_bg_red extrasmall   white right" href="#">24 – 07</a></h5>
                        <div class="nicdark_space15"></div>
                    </li>
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <h5 class="grey subtitle">Câu lạc bộ dành cho trẻ<a class="nicdark_btn nicdark_bg_blue extrasmall   white right" href="#">09 – 12</a></h5>
                        <div class="nicdark_space15"></div>
                    </li>
                    <li class="nicdark_border_grey">
                        <div class="nicdark_space15"></div>
                        <h5 class="grey subtitle">Cabaret Shows<a class="nicdark_btn nicdark_bg_orange extrasmall   white right" href="#">21 – 24</a></h5>
                    </li>
                </ul>

            </div>
   
            <div class="nicdark_focus nicdark_center">
                <div class="nicdark_space20"></div>
                <div class="nicdark_space10"></div>
                <a href="#" class="nicdark_btn nicdark_bg_green  medium white"><i class="icon-th"></i>&nbsp;&nbsp;&nbsp;XEM TẤT CẢ CÁC DỊCH VỤ</a>
            </div>

        </div> 

        <div class="grid grid_4">
            
            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img1.svg">
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Quầy đồ uống</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Phục vụ tất cả các loại đồ uống dành cho mọi lứa tuổi: cafe, nước giải khát,vv.</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->

            <div class="nicdark_space20"></div>

            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img2.svg">
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Tiệm cắt tóc</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Tiệm cắt tóc phục cho khách tại khu du lịch Bamboo Ecopark Thanh Tam</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->


            <div class="nicdark_space20"></div>

    
            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img3.svg">
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Khu tổ hợp thể thao đa năng</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Bao gồm nhà thi đấu đa năng và các các sân bóng đá, tennis</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->


        </div> 

        <div class="grid grid_4">
            
            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img4.svg">
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Bể bơi tiêu chuẩn</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Bể bơi tiêu chuẩn olympic dành cho khách, mở cửa 24/7.</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->



            <div class="nicdark_space20"></div>

            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img5.svg">
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Đường đi dạo ngắm cảnh</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Nhiều tuyến đường mòn dành cho những ai yêu thích tản bộ và ngắm cảnh.</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->


            <div class="nicdark_space20"></div>

            
            <!--start service-->
            <div class="nicdark_textevidence nicdark_border_grey nicdark_relative">
         
                <!--link-->
                <div class="nicdark_width_fix_100 nicdark_oblique45 nicdark_float_right nicdark_marginright40_negative nicdark_bg_grey nicdark_border_grey">
                    <p class="center white">
                        <a title="DETAILS" class="grey nicdark_tooltip" href=""><small><i class="icon-cancel"></i></small></a>
                    </p>
                </div>
                <!--end link-->
                
                <img class="nicdark_width_fix_50 nicdark_absolute_left nicdark_absolute" alt="" src="public/img/svg/img6.svg">

                <!--icon font
                <a style="margin-top: 15px; margin-left: 10px; " href="#" class="nicdark_btn_icon extrabig green nicdark_absolute ">
                    <i class="icon-waves"></i>
                </a>
                end icon-->
                
                <!--descr-->
                <div class="nicdark_activity nicdark_marginleft100">
                    <h4>Bãi đỗ xe miễn phí</h4>                        
                    <div class="nicdark_space20"></div>
                    <p>Khu để xe rộng và miễn phí có thể đỗ các loại xe cỡ nhỏ tới cỡ lớn nhất.</p>
                    <div class="nicdark_space20"></div>
                </div>
                <!--end descr-->

            </div>
            <!--end service-->


        </div> 

    </div>
    <!--end container-->

</div>
<!--end section-->

<!--start section: family packet-->
<div class="nicdark_space50"></div>
<div id="nicdark_parallaxx_img2" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img2">

    <div class="nicdark_filter ">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="grid grid_5">
                <div class="nicdark_space50"></div>  
                

                <!--start focus-->
                <div class="nicdark_focus nicdark_bg_white nicdark_overflow nicdark_relative">

                    <!--ribbon-->
                    <div class="nicdark_oblique45 nicdark_width_fix_200 nicdark_absolute_right nicdark_marginright70_negative nicdark_focus nicdark_bg_greydark">
                        <p class="center white">SALE</p>
                    </div>
                    <!--end ribbon-->
                    
                    <!--title-->
                    <div class="nicdark_focus nicdark_bg_green">    
                        <h4 class="white nicdark_margin20">GÓI KHÁM PHÁ <span class="nicdark_margin020">|</span>  2,000,000 vnđ cho &nbsp;&nbsp;&nbsp; <a class="nicdark_btn nicdark_bg_greendark extrasmall   white right" href="#">3 NGÀY</a></h4>
                    </div>
                    <!--end title-->
                    
                    <!--descr-->            
                    <div class="nicdark_focus nicdark_padding20 nicdark_sizing">    
                        <p class="">Gói khám phá dành cho học sinh từ cấp 2 đến cấp 3 có thể khám phá nhà máy mía đường, tham gia 
													hoạt động tại khu nông nghiệp công nghệ cao và học các kỹ năng sinh tồn không sử dụng các thiết bị điện tử.
													Điều hoà lại cuộc sống và hoạt động nhóm.</p>
                    </div>
                    <!--end descr-->

                    <!--icons-->
                    <div class="nicdark_focus nicdark_padding020 nicdark_border_top_grey nicdark_border_bottom_grey nicdark_sizing nicdark_bg_grey">
                        <a title=" WiFi " class=" nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey  nicdark_marginleft0"><i class="greydark nicdark_marginright10 icon-rss"></i> Wifi</a>
                        <a title=" Air Conditional " class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-snow"></i> Yes</a>
                        <a title=" Medical Care " class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-medkit"></i> 24 h</a>
                        <a title=" Pet Allowed " class="nicdark_border_right_grey nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-paw"></i> Allowed</a>
                        <a title=" People " class=" nicdark_bg_grey_hover nicdark_tooltip nicdark_transition nicdark_btn_icon  small grey "><i class="greydark nicdark_marginright10 icon-users"></i> 4</a>
                    </div>
                    <!--end icons-->

                    <!--btns-->
                    <div class="nicdark_focus nicdark_padding20 nicdark_sizing">
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_green left  medium white">XEM CHI TIẾT</a>
                        </div>
                        <div class="grid grid_6 percentage nicdark_width100_ipadpotr">
                            <a href="#" class="nicdark_width100_ipadpotr nicdark_sizing nicdark_width100_iphonepotr nicdark_width100_iphoneland nicdark_btn nicdark_bg_green right medium white">KHUYẾN MẠI</a>
                        </div>
                    </div>
                    <!--end btns-->
           
                </div>
                <!--end focus-->



                <div class="nicdark_space50"></div>
            </div>

            <div class="grid grid_6">
                <div class="nicdark_space20"></div>   
            </div>

            <div class="grid grid_1">
                <div class="nicdark_space50"></div>
                <div class="nicdark_focus">


                    <div class="nicdark_countdown nicdark_displaynone_responsive"></div>

     
                </div>   
            </div>



        </div>
        <!--end nicdark_container-->

    </div>
     
</div>
<!--end section-->

<!--start section:best activities-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">


        <div class="nicdark_space50"></div>


        <div class="grid grid_12">
            <h1 id="nicdark_activities" class="center">CÁC HOẠT ĐỘNG NỔI BẬT</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle center">Các hoạt động nổi bật nhất tại công viên Thanh Tam.</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider center big"><span class="nicdark_bg_grey2"></span></div>
            <div class="nicdark_space10"></div>
        </div>

        
        <div class="nicdark_masonry_btns nicdark_center">
            <div class="nicdark_margin10">
                <a data-filter="*" class="nicdark_bg_greydark2_hover nicdark_transition nicdark_btn  small nicdark_border_greydark nicdark_bg_greydark  white">TẤT CẢ</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".sport" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_border_grey   grey">THỂ THAO</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".family" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_border_grey  grey">HOẠT ĐỘNG GIA ĐÌNH</a>
            </div>
            <div class="nicdark_margin10">
                <a data-filter=".kids" class="nicdark_bg_grey2_hover nicdark_transition nicdark_btn nicdark_bg_grey small nicdark_border_grey  grey">TRẺ EM</a>
            </div>
            <div class="nicdark_space10"></div>
        </div>


        <!--start nicdark_masonry_container-->
        <div class="nicdark_masonry_container">


            <div class="grid grid_4 nicdark_masonry_item sport">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_blue white medium nicdark_absolute_left">ĐÁ BÓNG<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img1.jpg">
                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item sport">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_yellow white medium nicdark_absolute_left">ĐẠP XE<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img2.jpg">
                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item family">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_violet white medium nicdark_absolute_left">CÂU CÁ<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img3.jpg">
                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item family">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_red white medium nicdark_absolute_left">LEO NÚI<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img4.jpg">
                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item kids">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_orange white medium nicdark_absolute_left">TRẺ NHỎ<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img5.jpg">
                </div>
            </div>
            <div class="grid grid_4 nicdark_masonry_item kids">
                <div class="nicdark_archive1 nicdark_bg_blue nicdark_relative  ">
                    <a href="#" class="nicdark_btn nicdark_bg_green white medium nicdark_absolute_left">ĐẠP XE<i class="icon-angle-right"></i></a>
                    <img alt=""  src="public/img/activities/img6.jpg">
                </div>
            </div>


            
           
            

        </div>
        <!--end nicdark_masonry_container-->

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section-->

<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    
        <div class="nicdark_focus">
            <div class="grid_12 grid nicdark_center">
                <div class="nicdark_space30"></div>
                <a href="#" class="nicdark_btn nicdark_bg_greydark   medium white"><i class="icon-th-list"></i>&nbsp;&nbsp;&nbsp;TẤT CẢ CÁC HOẠT ĐỘNG</a>
            </div>
        </div>


    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section-->

<!--start section: news-->
<div class="nicdark_space50"></div>
<div id="nicdark_parallax_counter" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img3">

    <div class="nicdark_filter greydark">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>


            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_btn_icon nicdark_bg_blue extrabig  white "><i class="icon-food-1"></i></a>
                    <div class="nicdark_space20"></div>
                    <h1 class="white nicdark_counter " data-to="69" data-speed="1000">100,000+</h1>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">LƯỢT HỌC SINH</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_btn_icon nicdark_bg_green extrabig  white "><i class="icon-key-2"></i></a>
                    <div class="nicdark_space20"></div>
                    <h1 class="white nicdark_counter" data-to="23" data-speed="1000">100+</h1>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">CHỖ Ở</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_btn_icon nicdark_bg_orange extrabig  white "><i class="icon-shop"></i></a>
                    <div class="nicdark_space20"></div>
                    <h1 class="white nicdark_counter" data-to="130" data-speed="1000">130+</h1>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">TRƯỜNG HỌC ĐÃ THAM GIA</h4>
                </div>
            </div>
            <div class="grid grid_3">
                <div class="nicdark_textevidence center">
                    <a href="#" class="nicdark_btn_icon nicdark_bg_red extrabig  white "><i class="icon-fire-1"></i></a>
                    <div class="nicdark_space20"></div>
                    <h1 class="white nicdark_counter" data-to="45" data-speed="1000">10+</h1>
                    <div class="nicdark_space20"></div>
                    <h4 class="white">CHƯƠNG TRÌNH HOẠT ĐỘNG</h4>
                </div>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space50"></div>

        </div>
        <!--end nicdark_container-->

    </div>
            
</div>
<!--end section-->

<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space50"></div>

        <div class="grid grid_12">
            <h1 class="center">TIN TỨC MỚI</h1>
            <div class="nicdark_space20"></div>
            <h3 class="subtitle center">Các thông tin mới nhất liên quan tới Bamboo Ecopark Thanh Tam</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider center big"><span class="nicdark_bg_grey2"></span></div>
            <div class="nicdark_space10"></div>
        </div>
        
        <div class="grid grid_6 ">

            <div class="nicdark_focus nicdark_relative">
                
                <a href="#" class=" nicdark_btn nicdark_bg_white medium grey nicdark_absolute">08<br><small>Th2</small></a>
                <div class="nicdark_featured_image"><img class="nicdark_focus" alt="" src="public/img/blog/img1-home.jpg"></div>
                    
                <div class="nicdark_textevidence nicdark_bg_greydark">
                    <h4 class="white nicdark_margin20">Lễ hội khai trương khu du lịch Bamboo Ecopark</h4>
                </div>
                <div class="nicdark_focus nicdark_bg_orange">
                    <div class="nicdark_bg_orangedark nicdark_focus nicdark_padding1020 nicdark_sizing nicdark_width_percentage50">
                        <p class="white"><i class="icon-user"></i> admin</p>
                    </div>
                    <div class="nicdark_focus nicdark_padding1020 nicdark_sizing nicdark_width_percentage50">
                        <p class="white"><i class="icon-chat"></i> Chưa có bình luận</p>
                    </div>
                </div>

                <div class="nicdark_focus nicdark_border_grey nicdark_sizing nicdark_padding20">
                    <p>Lễ hội khai trương khu du lịch công viên tre luồng Thanh Tam sẽ được tổ chức bắt đầu từ ngày mùng 4 Tết âm lịch,
											với nhiều các hoạt động văn hoá, diễn kịch và ẩm thực đặc sắc, quy tụ nhiều dàn diễn viên, ca sỹ nổi tiếng về biểu diễn.
										</p>
                    <div class="nicdark_space20"></div>
                    <a class="nicdark_btn nicdark_press nicdark_bg_orange white medium  " href="#">XEM CHI TIẾT</a>
                </div>
            </div>

        </div>

        <div class="grid grid_6">
            
            
            <!--blog preview-->
            <div class="nicdark_focus nicdark_img_blog2 nicdark_bg_cover nicdark_bg_green nicdark_relative">

                <a href="#" class="nicdark_displaynone_responsive nicdark_btn nicdark_bg_white medium grey nicdark_absolute">01<br><small>TH4</small></a>

                <div class="nicdark_displaynone_responsive nicdark_width_percentage40 nicdark_focus">
                    <div class="nicdark_space1"></div>
                </div>

                <div class="nicdark_width100_responsive nicdark_width_percentage60 nicdark_float_right nicdark_bg_white nicdark_border_grey nicdark_sizing">
                    <div class="nicdark_textevidence nicdark_bg_grey nicdark_borderbottom_grey">
                        <h4 class="grey nicdark_margin20">Ngày hội giáo viên & học sinh</h4>
                    </div>
                    <div class="nicdark_margin20">
                        <p>Tour đầu tiên trong năm 2019 hướng tới đối tượng là giáo viên, học sinh sẽ được tổ chức nhằm tri ân
													các thầy cô giáo, và học sinh đã ủng hộ khu công viên tre luồng Thanh Tam.
												</p>
                  
                        <div class="nicdark_space20"></div>
                        <a class="nicdark_btn nicdark_press nicdark_bg_blue white small  " href="#">XEM CHI TIẾT</a>
                    </div>
                </div>

            </div>
            <!--end preview-->



            <div class="nicdark_space20"></div>


            <div class="nicdark_focus nicdark_img_blog3 nicdark_bg_cover nicdark_bg_green nicdark_relative">

                <a  href="#" class="nicdark_displaynone_responsive nicdark_btn nicdark_bg_white medium grey nicdark_absolute">01<br><small>Th6</small></a>

                <div class="nicdark_displaynone_responsive nicdark_width_percentage40 nicdark_focus">
                    <div class="nicdark_space1"></div>
                </div>


                <div class="nicdark_width100_responsive nicdark_width_percentage60 nicdark_float_right nicdark_bg_white nicdark_border_grey nicdark_sizing">
                    <div class="nicdark_textevidence nicdark_bg_grey nicdark_borderbottom_grey">
                        <h4 class="grey nicdark_margin20">Hoạt động trải nghiệm cho học sinh cấp 1</h4>
                    </div>
                    <div class="nicdark_margin20">
                        <p>Các khoá trải nghiệm cho học sinh cấp 1 đầu tiên trong năm 2019 sẽ được tổ chức vào ngày 01.06.2019 nhân dịp 
													tết thiếu nhi.
												</p>
                        <div class="nicdark_space20"></div>
                    <a class="nicdark_btn nicdark_press nicdark_bg_green white small  " href="#">XEM CHI TIẾT</a>
                  </div>
                </div>
            </div>
        </div>

        <div class="nicdark_focus">
            <div class="grid_12 grid nicdark_center">
                <div class="nicdark_space30"></div>
                <a href="#" class="nicdark_btn nicdark_bg_greydark   medium white"><i class="icon-th"></i>&nbsp;&nbsp;&nbsp;XEM TẤT CẢ TIN TỨC</a>
                <div class="nicdark_space50"></div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
            
</div>
<!--end section-->

<!--<div class="nicdark_space3 nicdark_bg_gradient"></div>-->

@endsection
@section('custom-js-page')
<script type="text/javascript">
  $(document).ready(function(){
    for (var i=1; i <= $('.slider__slide').length; i++){
      $('.slider__indicators').append('<div class="slider__indicator" data-slide="'+i+'"></div>')
    }
    setTimeout(function(){
      $('.slider__wrap').addClass('slider__wrap--hacked');
    }, 1000);
    setInterval(function() {
      nextSlide();
    }, 6000);
  });

  function goToSlide(number){
    $('.slider__slide').removeClass('slider__slide--active');
    $('.slider__slide[data-slide='+number+']').addClass('slider__slide--active');
  }

  function nextSlide(){
    var currentSlide = Number($('.slider__slide--active').data('slide'));
    var totalSlides = $('.slider__slide').length;
    currentSlide++
    if (currentSlide > totalSlides){
      currentSlide = 1;
    }
    goToSlide(currentSlide);
  }
  // $('.slider__next, .go-to-next').on('click', function(){
    
  // });
</script>


@endsection