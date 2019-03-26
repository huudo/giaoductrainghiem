@extends('layouts.master')
@section('content')
<section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img7" style="background-position: 50% 0px;">

    <div class="nicdark_filter">

        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">

            <div class="nicdark_space100"></div>
            <div class="nicdark_space100"></div>

            <div class="nicdark_space70"></div> <!--for header 1-->

            <div class="grid grid_6">
                <h1 class="white subtitle">CART</h1>
            </div>
            <div class="grid grid_6 nicdark_displaynone_responsive">
                <div class="nicdark_space5"></div>
                <h4 class="white right subtitle">Home <span class="nicdark_marginleft10 nicdark_marginright10 grey2">|</span> Pages <span class="nicdark_marginleft10 nicdark_marginright10 grey2">|</span> Cart</h4>
            </div>

            <div class="nicdark_space40"></div>
            <div class="nicdark_space40"></div>

        </div>
        <!--end nicdark_container-->

    </div>
     
</section>
<section class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space40"></div>

        <div class="grid grid_12">

            <div class="nicdark_textevidence  left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_orange ">
                    <thead class="nicdark_border_orange">
                        <tr>
                            <td class="nicdark_width_percentage1"><h4 class="white"></h4></td>
                            <td class="nicdark_width_percentage1"><h4 class="white"></h4></td>
                            <td><h4 class="white">ACCOMODATION</h4></td>
                            <td><h4 class="white">PRICE</h4></td>
                            <td><h4 class="white">PEOPLE</h4></td>
                            <td><h4 class="white">TOTAL</h4></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_white nicdark_border_grey">
                        <tr>
                            <td><h1><a href="#"><i class="icon-cancel-circled-1 red"></i></a></h1></td>
                            <td><img alt="" class=" nicdark_opacity" src="public/img/shop/img1.jpg" width="70"></td>
                            <td><p>BIG CARAVAN</p></td>
                            <td><p>$ 20,00</p></td>
                            <td><p>1</p></td>
                            <td><p>$ 20,00</p></td>
                        </tr>
                        <tr>
                            <td><h1><a href="#"><i class="icon-cancel-circled-1 red"></i></a></h1></td>
                            <td><img alt="" class=" nicdark_opacity" src="public/img/shop/img2.jpg" width="70"></td>
                            <td><p>MEDIUM COTTAGE</p></td>
                            <td><p>$ 40,00</p></td>
                            <td><p>2</p></td>
                            <td><p>$ 80,00</p></td>
                        </tr>
                        <tr>
                            <td><h1><a href="#"><i class="icon-cancel-circled-1 red"></i></a></h1></td>
                            <td><img alt="" class=" nicdark_opacity" src="public/img/shop/img3.jpg" width="70"></td>
                            <td><p>SMALL CARAVAN</p></td>
                            <td><p>$ 60,00</p></td>
                            <td><p>1</p></td>
                            <td><p>$ 60,00</p></td>
                        </tr>
                        <tr>
                            <td><h1><a href="#"><i class="icon-cancel-circled-1 red"></i></a></h1></td>
                            <td><img alt="" class=" nicdark_opacity" src="public/img/shop/img4.jpg" width="70"></td>
                            <td><p>XLARGE PITCH</p></td>
                            <td><p>$ 50,00</p></td>
                            <td><p>2</p></td>
                            <td><p>$ 100,00</p></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            <div class="nicdark_textevidence nicdark_bg_grey nicdark_border_grey nicdark_sizing  right ">
                <div class="nicdark_space10"></div>
                <a href="#" class="nicdark_btn nicdark_bg_red nicdark_bg_reddark_hover nicdark_transition medium   white nicdark_margin10"><i class="icon-spin3"></i>&nbsp;&nbsp;&nbsp;UPDATE CART</a>
                <a href="shop-checkout.html" class="nicdark_btn nicdark_bg_orange nicdark_transition nicdark_bg_orangedark_hover medium   white nicdark_margin10"><i class="icon-basket-1"></i>&nbsp;&nbsp;&nbsp;CHECKOUT</a>&nbsp;&nbsp;
                <div class="nicdark_space10"></div>
            </div>

        </div>

        <div class="nicdark_space20"></div>

        <div class="grid grid_6">
            <div class="nicdark_archive1 nicdark_bg_white nicdark_border_grey nicdark_sizing  ">
                <div class="nicdark_textevidence nicdark_bg_blue">
                    <h4 class="white nicdark_margin20">INFORMATION</h4>
                </div>
                <div class="nicdark_margin20">
                    <p>ADDRESS:</p>
                    <div class="nicdark_space5"></div>
                    <input class="nicdark_bg_grey  nicdark_border_grey  grey small subtitle" type="text" value="" size="200">
                    <div class="nicdark_space20"></div>
                    <p>CITY:</p>
                    <div class="nicdark_space5"></div>
                    <input class="nicdark_bg_grey  nicdark_border_grey grey small subtitle" type="text" value="" size="200">
                    <div class="nicdark_space20"></div>
                    <p>ZIP:</p>
                    <div class="nicdark_space5"></div>
                    <input class="nicdark_bg_grey nicdark_border_grey grey small subtitle" type="text" value="" size="200">
                    <div class="nicdark_space20"></div>
                    <input class="nicdark_btn nicdark_bg_blue medium   white nicdark_press" type="submit" value="UPDATE">
                </div>
            </div>    
        </div>

        <div class="grid grid_6">
            <div class="nicdark_textevidence nicdark_bg_grey left overflow_scroll">   
                <table class="nicdark_table extrabig nicdark_bg_green  ">
                    <thead class="nicdark_border_green">
                        <tr>
                            <td><h4 class="white">CART TOTALS</h4></td>
                            <td class="nicdark_width_percentage1"></td>
                        </tr>
                    </thead>
                    <tbody class="nicdark_bg_grey nicdark_border_grey">
                        <tr>
                            <td><p>CART SUBTOTAL</p></td>
                            <td><p>300,00</p></td>
                        </tr>
                        <tr>
                            <td><p>SHIPPING:</p></td>
                            <td><p>Free</p></td>
                        </tr>
                        <tr>
                            <td><p><strong>ORDER TOTAL:</strong></p></td>
                            <td><p>300,00</p></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->

    <div class="nicdark_space50"></div>
     
</section>
<div class="nicdark_section nicdark_bg_greydark">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="nicdark_space30"></div>

        <div class="grid grid_3 nomargin percentage">

            <div class="nicdark_space20"></div>

            <div class="nicdark_margin10">
                <h4 class="white">OUR CAMPING</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white "></span></div>
                <div class="nicdark_space20"></div>
                <p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas scelerisque velit ac elit accumsan, at aliquet leo sodales, in convallis sodales libero, eu imperdiet.</p>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white "></span></div>
                <div class="nicdark_space20"></div>
                <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_green small   white"><i class="icon-mail nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_green small   white"><i class="icon-tree nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_green small   white"><i class="icon-phone nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            </div>
        </div>

        <div class="grid grid_3 nomargin percentage">
            
            <div class="nicdark_space30"></div>

            <div class="nicdark_marginleft10">
                <h4 class="white">OUR TAGS</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white "></span></div>
            </div>
            <div class="nicdark_space10"></div>

            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Camping</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Tend</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Kids</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Family</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Cottage</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Dogs</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Swim</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Camp</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Caravan</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Camper</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Kids</a>
            <a href="#" class="nicdark_btn nicdark_bg_greydark2 small   white subtitle nicdark_margin10">Friends</a>

        </div>

        <div class="grid grid_3 nomargin percentage">

            <div class="nicdark_space20"></div>
            
            <div class="nicdark_margin10">
                <h4 class="white">OUR CAMPING IMAGES</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white "></span></div>
            </div>
            

            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img1.jpg">
                </div>
            </div>
            
            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img2.jpg">
                </div>
            </div>
            
            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img3.jpg">
                </div>
            </div>
            
            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img4.jpg">
                </div>
            </div>
            
            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img5.jpg">
                </div>
            </div>
            
            <div class="grid nomargin grid_4 percentage">
                <div class="nicdark_margin10">
                    <img alt="" class=" nicdark_opacity nicdark_focus" src="public/img/footer/img6.jpg">
                </div>
            </div>
            

        </div>

        <div class="grid grid_3 nomargin percentage">

            <div class="nicdark_space20"></div>

            <div class="nicdark_margin10">
                <h4 class="white">CONTACT US</h4>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left small"><span class="nicdark_bg_white "></span></div>
                <div class="nicdark_space20"></div>
                

                <input name="nicdark_form_footer_email" class="nicdark_bg_greydark2   white small subtitle" type="text" value="" placeholder="EMAIL">
                <div class="nicdark_space20"></div>
                <textarea name="nicdark_form_footer_message" rows="3" class="nicdark_bg_greydark2   white small subtitle" placeholder="MESSAGE"></textarea>
                <div class="nicdark_space20"></div>
                <!--<input class="nicdark_btn nicdark_bg_green small   white nicdark_press" type="submit" value="SEND">-->
                <a onclick="nicdark_form_footer()" class="nicdark_btn nicdark_bg_green small nicdark_outline  white nicdark_press">SEND</a>
            </div>
        </div> 

        <div class="nicdark_space50"></div> 

    </div>
    <!--end nicdark_container-->
            
</div>
<div class="nicdark_section nicdark_bg_greydark2 ">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

        <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
            <div class="nicdark_space20"></div>
            <p class="white">© Copyright 2014 by <span class="grey">NicDark</span>Themes.com - Made With <i class="icon-heart-filled red nicdark_zoom"></i> In Venice</p>
        </div>


        <div class="grid grid_6">
            <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_bg_greydark nicdark_press right nicdark_btn_icon small  white"><i class="icon-facebook-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_greydark  small  white"><i class="icon-gplus"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_greydark  small  white"><i class="icon-twitter-1"></i></a>
                </div>
                <div class="nicdark_margin10">
                    <a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small  white"><i class="icon-angle-up"></i></a>
                </div>
            </div>
        </div>

    </div>
    <!--end nicdark_container-->
            
</div>
@endsection
