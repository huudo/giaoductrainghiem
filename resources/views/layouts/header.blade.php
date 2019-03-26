
<!--start header-->
<div class="nicdark_section nicdark_navigation">
    <div class="nicdark_menu_fullwidth">
        <div class="nicdark_section nicdark_navigation">

            <div class="nicdark_menu_fullwidth nicdark_menu_fullwidth_boxed">

                <div class="nicdark_section nicdark_bg_grey nicdark_border_bottom_grey nicdark_displaynone_responsive">
                    <div class="nicdark_container nicdark_clearfix">
                        <div class="grid grid_6">
                            <div class="nicdark_focus">
                                <h6 class="grey subtitle">
                                    <a class="grey" href="#"><span class="greydark">THỜI TIẾT </span>&nbsp;&nbsp;&nbsp;&nbsp;LAM SƠN - THỌ XUÂN&nbsp;&nbsp;&nbsp;&nbsp;<i class=" icon-cloud-sun"></i>&nbsp;&nbsp;&nbsp;&nbsp;25 F° / 13 C° </a>
                                </h6>
                            </div>
                        </div>
                        <div class="grid grid_6 right">
                            <div class="nicdark_focus right">
                                <h6 class="grey subtitle">
                                    <i class="greydark icon-flag"></i>&nbsp;&nbsp;<a class="grey nicdark_mpopup_window nicdark_outline text-uppercase" href="#nicdark_window">{{__('lang')}}</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="greydark icon-plus"></i>&nbsp;&nbsp;<a class="grey nicdark_mpopup_window nicdark_outline text-uppercase" href="#register_window">{{__('register')}}</a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span class="grey2">|</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="greydark icon-lock"></i>&nbsp;&nbsp;<a class="grey nicdark_mpopup_window nicdark_outline text-uppercase" href="#login_window">{{__('login')}}</a>
                                </h6>
                            </div>
                        </div>

                        <!--info window for languages-->
                        <div id="nicdark_window" class="nicdark_bg_white  zoom-anim-dialog mfp-hide">
                            
                            <div class="nicdark_textevidence nicdark_bg_red">
                                <div class="nicdark_margin20">
                                    <h4 class="white">{{__('lang')}}</h4>
                                </div>
                            </div>

                            <div class="nicdark_margin20">
                                
                                <ul class="nicdark_list border">
                                		<li class="nicdark_border_grey">
                                    		<p><a class="grey" href="{{route('changeLang',['lang' => 'vi'])}}">VIETNAMESE</a><a href="/" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="public/img/flag/vi.png"></a></p>
                                    		<div class="nicdark_space15"></div>
                                		</li>
                								
                                    <li class="nicdark_border_grey">
                											<div class="nicdark_space15"></div>
                                        <p><a class="grey" href="{{route('changeLang',['lang' => 'en'])}}">ENGLISH</a><a href="/" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="public/img/flag/us.png"></a></p>
                                        <div class="nicdark_space15"></div>
                                    </li>

                                    <li class="nicdark_border_grey">
                                        <div class="nicdark_space15"></div>
                                        <p><a class="grey" href="/">RUSSIAN</a><a href="/" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="public/img/flag/ru.png"></a></p>   
                                        <div class="nicdark_space15"></div>
                                    </li>
                                        
                                    <li class="nicdark_border_grey">
                                        <div class="nicdark_space15"></div>
                                        <p><a class="grey" href="/">JAPANENSE</a><a href="/" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="public/img/flag/ja.png"></a></p>   
                                        <div class="nicdark_space15"></div>
                                    </li>

                                    <li class="nicdark_border_grey">
                                        <div class="nicdark_space15"></div>
                                        <p><a class="grey" href="/">KOREAN</a><a href="/" class="nicdark_btn right nicdark_opacity"><img alt="" width="30" src="public/img/flag/ko.png"></a></p>    
                                    </li>
                                        
                                </ul>

                            </div>
                        </div>
                        <!--end window-->
                        <div id="register_window" class="nicdark_bg_white  zoom-anim-dialog mfp-hide">
                            <div class="nicdark_textevidence nicdark_bg_red">
                                <div class="nicdark_margin20">
                                    <h4 class="white text-uppercase">{{__('register')}}</h4>
                                </div>
                            </div>
                            <div class="form-register nicdark_margin20">
                                <form>
                                    <input type="text" name="full_name" placeholder="Họ tên" class="nicdark_bg_grey nicdark_border_grey  grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input type="text" name="email_phone" placeholder="Email hoặc SĐT" class="nicdark_bg_grey nicdark_border_grey   grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input type="password" name="password" placeholder="Nhập mật khẩu" class="nicdark_bg_grey nicdark_border_grey   grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input type="password" name="re_password" placeholder="Nhập lại mật khẩu" class="nicdark_bg_grey nicdark_border_grey   grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input class="nicdark_btn nicdark_bg_orange medium   white" type="submit" value="ĐĂNG KÝ">
                                </form>
                            </div>
                        </div>
                        <div id="login_window" class="nicdark_bg_white  zoom-anim-dialog mfp-hide">
                            <div class="nicdark_textevidence nicdark_bg_red">
                                <div class="nicdark_margin20">
                                    <h4 class="white text-uppercase">{{__('login')}}</h4>
                                </div>
                            </div>
                            <div class="form-register nicdark_margin20">
                                <form>
                                    <input type="text" name="email_phone" placeholder="Email hoặc SĐT" class="nicdark_bg_grey nicdark_border_grey   grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input type="password" name="password" placeholder="Nhập mật khẩu" class="nicdark_bg_grey nicdark_border_grey   grey small subtitle">
                                    <div class="nicdark_space20"></div>
                                    <input class="nicdark_btn nicdark_bg_orange medium   white" type="submit" value="ĐĂNG NHẬP">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nicdark_displaynone_iphoneland nicdark_displaynone_ipadpotr nicdark_displaynone_iphonepotr nicdark_section nicdark_bg_white fade-down">
                    <div class="nicdark_container nicdark_clearfix">

                        <div class="grid grid_12 percentage">               
                                <div class="grid_4">
                                    <div class="nicdark_space5"></div>
                                    <a href="/"><img width="300" alt="" src="public/img/logo-wide.png"></a>
                                </div>


                                <div class="grid_2 nicdark_sizing nicdark_border_right_grey">
                                    <p><i class="icon-phone green"></i> Hotline</p>
                                    <div class="nicdark_space5"></div>
                                    <p class="greydark">1900.63.63.42</p>
                                </div>

                                <div class="grid_2 nicdark_sizing nicdark_border_right_grey">
                                    <p><i class="icon-clock green"></i> Giờ làm việc</p>
                                    <div class="nicdark_space5"></div>
                                    <p class="greydark">08:00 - 18:00</p>
                                </div>

                                <div class="grid_2">
                                    <p><i class="icon-mail-alt green"></i> Liên hệ email</p>
                                    <div class="nicdark_space5"></div>
                                    <p class="greydark">contact@blacasa.vn</p>
                                </div>

                                <div class="grid_2">
                                    <div class="nicdark_space5"></div>
                                    <a href="#register_window" class="nicdark_btn nicdark_bg_orange nicdark_mpopup_window right medium white">ĐĂNG KÝ NGAY</a>
                                    <div class="nicdark_space5"></div>
                                </div>
                        </div>

                    </div>
                <!--end container-->

                </div>
                <!--end header-->                    
                <div class="nicdark_section nicdark_bg_green fade-down">
                    <div class="nicdark_container nicdark_clearfix">

                        <div class="grid grid_12 percentage">


                                <div class="nicdark_space20"></div>

                                <!--logo mobile-->
                                <div class="nicdark_displaynone_desktop nicdark_displayblock_iphonepotr nicdark_displayblock_iphoneland nicdark_displayblock_ipadpotr nicdark_center nicdark_focus">
                                    <a href="/"><img width="250" alt="" src="public/img/logo-wide.png"></a>
                                </div>
                                <!--end logo mobile-->

                                <!--social-->
                                <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright10 nicdark_bg_greendark extrasmall  white right"><i class="icon-facebook"></i></a>
                                <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright20 nicdark_bg_greendark extrasmall  white right"><i class="icon-twitter"></i></a>
                                <a class="nicdark_btn_icon nicdark_displaynone_responsive nicdark_zoom nicdark_bg_blue_hover  nicdark_marginright20 nicdark_bg_greendark extrasmall  white right"><i class="icon-gplus"></i></a>
                                <!--end social-->

                                <nav>
                                    <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                                        <li class="greydark">
                                            <a href="/">{{__('home')}}</a>
                                        </li>
                                        <li class="greydark">
                                            <a class="#" href="prices">{{__('tours')}}</a>
                                            <ul class="sub-menu">
                                                <li>
                																	<a href="accomodations.html">Giáo dục trải nghiệm</a>
                                                  <ul class="sub-menu">
                                                      <li><a href="single-product">Chương trình mầm non</a></li>
                                                      <li><a href="single-product-1">Chương trình cho HS cấp 1</a></li>
                                                      <li><a href="single-product-2">Chương trình cho HS cấp 2</a></li>
                																			<li><a href="single-product-3">Chương trình cho HS cấp 3</a></li>
                																			<li><a href="single-product-4">Chương trình cho Sinh viên & người lớn</a></li>
                																			<li><a href="single-product-5">Chương trình cho gia đình</a></li>
                                                  </ul>
                																</li>
                                                <li><a href="single-product">Du lịch tâm linh</a></li>
                                                <li><a href="single-product">Du lịch nghỉ dưỡng</a></li>
                																<li><a href="single-product">Du lịch chữa bệnh</a></li>
                                            </ul>
                                        </li>
                                        <li class="greydark">
                                            <a href="#">{{__('accomodations')}}</a>
                                            <ul class="sub-menu">
                                                <li><a href="accomodations">Archive</a></li>
                                                <li><a href="single-accomodation">Single</a></li>
                                                <li><a href="shop-cart">Cart Page</a></li>
                                                <li><a href="shop-checkout">Checkout Page</a></li>
                                            </ul>
                                        </li>
                                        <li class="greydark">
                                            <a class="#" href="gallery">{{__('gallery')}}</a>
                                            <!--<ul class="sub-menu">
                                                <li><a href="accomodations.html">Công viên tre luồng</a></li>
                                                <li><a href="single-accomodation.html">Nông nghiệp công nghệ cao</a></li>
                                                <li><a href="shop-cart">Khu tâm linh</a></li>
                                                <li><a href="shop-checkout.html">Khu giáo dục trải nghiệm</a></li>
                                            </ul>-->
                                        </li>
                                        <li class="greydark">
                                            <a href="news">{{__('news')}}</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-masonry">Masonry Layout</a></li>
                                                <li>
                                                    <a href="single-post-right-sidebar.html">Single Post</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-post-left-sidebar">Left Sidebar</a></li>
                                                        <li><a href="single-post-right-sidebar">Right Sidebar</a></li>
                                                        <li><a href="single-post-full-width">Full Width</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="greydark nicdark_displaynone_ipadland">
                                            <a href="events">{{__('events')}}</a>
                                            <ul class="sub-menu">
                                                <li><a href="events">All Events</a></li>
                                                <li><a href="single-event">Single Event</a></li>
                                            </ul>
                                        </li>
                                        <li class="greydark">
                                            <a href="contact">{{__('contacts')}}</a>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="nicdark_space20"></div>

                        </div>

                    </div>
                    <!--end container-->

                </div>
            <!--end header-->
            </div>

        </div>
    </div>
</div>
<!--en header-->