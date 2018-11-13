<nav class="main_menu fixed_menu" id="top_header_menu">
    <div class="container">
        <div class="row top_menubox">
            <div class="main_logo">
                <a href="index.php" class="top_logo_box">
                    <div class="logo_img_containner"><img src="images/taj_logo.png">
                    </div>
                    <div class="logo_caption">
                        Taj Tailors
                    </div>
                </a>
            </div>
            <div class="menu_all_containner">
                <div class="login_with_baskit">
                    <ul>
                        <li><a class="head_a" href="index.php">Home</a></li>
                        <li onclick="How_slide();">How it works</li>
                        <li onclick="Price_slide();">Prices</li>
                        <li><a class="head_a" href="product_list.php">Product</a></li>
                        <li><a class="head_a" href="BookAppointment.php" class="menu_main_txt">Appointment</a></li>
                        <li onclick="ShowLoginSignup('signin');">Sign In</li>
                        <li onclick="ShowLoginSignup('signup');">Sign Up</li>
                     <!--   <li>Sign In</li>
                        <li>Sign Up</li>         -->
                        <li>
                            <div class="my_account_box glo_menuclick">My Account
                                <div class="menu_basic_popup menu_popup_account scale0">
                                    <div class="menu_popup_account">
                                        <div class="menu_popup_settingrow">
                                            <a href="index.php" class="menu_setting_row">
                                                <i class="mdi mdi-home"></i>
                                                Home
                                            </a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a href="my_profile.php" class="menu_setting_row">
                                                <i class="mdi mdi-account-edit"></i>
                                                Edit Profile
                                            </a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a href="product_list.php" class="menu_setting_row">
                                                <i class="mdi mdi-basket"></i>
                                                Product List
                                            </a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a href="order_list.php" class="menu_setting_row">
                                                <i class="mdi mdi-format-list-checks"></i>
                                                Order List
                                            </a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a href="product_feedback.php" class="menu_setting_row">
                                                <i class="mdi mdi-message-draw"></i>
                                                Review &amp; Rating
                                            </a>
                                        </div>
                                        <div onclick="ChangePasswordShow();" class="menu_popup_settingrow"
                                             data-target="#myModal_UpdatePassword" data-toggle="modal">
                                            <a class="menu_setting_row" href="#">
                                                <i class="mdi mdi-lock-open-outline"></i>
                                                Change Password
                                            </a>
                                        </div>
                                        <div class="menu_popup_settingrow">
                                            <a href="index.php" class="menu_setting_row">
                                                <i class="mdi mdi-logout"></i>
                                                Logout
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="border-right: none;">
                            <div class="baskit_containner glo_menuclick">
                                <span class="baskit_counter" id="baskit_counter">1</span>
                                <i class="mdi mdi-cart" id="baskit_block"></i>
                                <div class="menu_basic_popup cart_popbox scale0">
                                    <div class="header_popup">
                                        <div class="total_item_count">
                                            <span class="basic_icon mdi mdi-basket-fill"></span>
                                            04 Item
                                        </div>
                                        <div class="total_item_amt pull-right">
                                            <span class="basic_icon mdi mdi-currency-inr"></span>
                                            1350.00
                                        </div>
                                    </div>
                                    <div class="menu_popup_containner style-scroll">
                                        <table class="table table-striped table_addcard">
                                            <tbody>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name"
                                                                         title="Dove Daily Shine Shampoo Pouch"
                                                                         href="#">Bandhgala Suit</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>100.00</td>
                                                <td class="text-right">
                                                    <a href="#" class="mdi mdi-close cart-delete" data-toggle="tooltip"
                                                       title="Remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name"
                                                                         title="Dove Shampoo Dandruff Care Sachet"
                                                                         href="#">Bandi</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>200.00</td>
                                                <td class="text-right">
                                                    <a href="#" class="mdi mdi-close cart-delete" data-toggle="tooltip"
                                                       title="Remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name" title="Blueberry"
                                                                         href="#">Kurta Pyjama</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>150.00</td>
                                                <td class="text-right">
                                                    <a href="#" class="mdi mdi-close cart-delete" data-toggle="tooltip"
                                                       title="Remove"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-left"><a class="cart_product_name"
                                                                         title="Fortune Plus Soya Oil Pouch 1 LT"
                                                                         href="#">Sherwani</a></td>
                                                <td class="text-center"> x1</td>
                                                <td class="text-center"><i class="fa fa-inr"></i>300.00</td>
                                                <td class="text-right">
                                                    <a href="#" class="mdi mdi-close cart-delete" data-toggle="tooltip"
                                                       title="Remove"></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="cart_btn_box">
                                        <a href="mycart.php" class="btn btn-warning btn-sm">
                                            <span class="mdi mdi-basket basic_icon_margin"></span>View Cart
                                        </a>
                                        <a href="checkout.php" class="btn btn-primary btn-sm pull-right">
                                            <span class="mdi mdi-cart basic_icon_margin"></span>Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="page_loader" id="page_loader">
    <div class="loaders">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ldi-e99453" width="271px" height="271px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" style="background: none;"><!--?xml version="1.0" encoding="utf-8"?--><!--Generator: Adobe Illustrator 21.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="圖層_1" x="0px" y="0px" viewBox="0 0 100 100" style="transform-origin: 50px 50px 0px;" xml:space="preserve"><g style="transform-origin: 50px 50px 0px;"><g style="transform-origin: 50px 50px 0px; transform: scale(0.6);"><g style="transform-origin: 50px 50px 0px;"><g><style type="text/css" class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -3.4s; animation-direction: normal;">.st0{fill:#f47e60;stroke:#333;stroke-width:3;stroke-miterlimit:10}.st1,.st2{stroke-linecap:round;stroke-linejoin:round}.st1{stroke:#333;stroke-width:3;stroke-miterlimit:10;fill:#e0e0e0}.st2{fill:#fff}.st2,.st3,.st4,.st5,.st6{stroke:#333;stroke-width:3;stroke-miterlimit:10}.st3{stroke-linecap:round;stroke-linejoin:round;fill:#666}.st4,.st5,.st6{fill:#c33737}.st5,.st6{fill:#666}.st6{fill:#e0e0e0}.st7{fill:#f47e60;stroke-linecap:round;stroke-linejoin:round}.st10,.st7,.st8,.st9{stroke:#333;stroke-width:3;stroke-miterlimit:10}.st8{stroke-linecap:round;stroke-linejoin:round;fill:none}.st10,.st9{fill:#f8b26a}.st10{fill:#e15b64;stroke-linecap:round;stroke-linejoin:round}.st11{fill:#333}.st12,.st13,.st14{fill:#a0c8d7;stroke:#333;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10}.st13,.st14{fill:#f8b26a}.st14{fill:#f5e169}.st15{fill:#fff}.st16,.st17,.st18{fill:#fff;stroke:#333;stroke-width:3;stroke-miterlimit:10}.st17,.st18{fill:#a0c8d7}.st18{fill:#f5e6c8}.st19{fill:#abbd81}.st19,.st20,.st21{stroke:#333;stroke-width:3;stroke-miterlimit:10}.st20{stroke-linecap:round;stroke-linejoin:round;fill:#77a4bd}.st21{fill:#abbd81}.st21,.st22,.st23{stroke-linecap:round;stroke-linejoin:round}.st22{stroke:#333;stroke-width:3;stroke-miterlimit:10;fill:#849b87}.st23{fill:#fdfdfd}.st23,.st24,.st25{stroke:#333;stroke-width:3;stroke-miterlimit:10}.st24{stroke-linecap:round;stroke-linejoin:round;fill:#c33737}.st25{fill:#e15b64}.st26{fill:#f5e6c8;stroke-linecap:round;stroke-linejoin:round}.st26,.st27,.st28,.st29,.st30,.st31,.st32{stroke:#333;stroke-width:3;stroke-miterlimit:10}.st27{stroke-linecap:round;stroke-linejoin:round;fill:#66503a}.st28,.st29,.st30,.st31,.st32{fill:#849b87}.st29,.st30,.st31,.st32{fill:#77a4bd}.st30,.st31,.st32{fill:#66503a}.st31,.st32{fill:#4a3827}.st32{stroke-linecap:round;stroke-linejoin:round}</style><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -3.2s; animation-direction: normal;"><path class="st17" d="M88.6,48.4c-0.4-3-1.3-5.9-2.8-8.4c-0.1-0.2-0.2-0.3-0.3-0.5c-4-6.7-9.2-12.6-14.1-16.8l-0.6-0.5 c-1.6-1.3-3.1-2.4-4.6-3.3h-5.7c0,14.4-20.7,14.4-20.7,0h-6c-1.5,0.9-3,2-4.6,3.3l-0.6,0.5c-4.9,4.2-10.1,10.2-14.1,16.8 c-0.1,0.2-0.2,0.3-0.3,0.5c-1.5,2.5-2.4,5.4-2.8,8.4L7.5,78.3l10.7,2.6l6.4-29.3l4.8-5.2l1.2,39.5h38.7l1.2-39.5l4.8,5.2l6.4,29.3 l10.7-2.6L88.6,48.4z" fill="#0d1a99" stroke="rgb(51, 51, 51)" style="fill: rgb(13, 26, 153);stroke: #d8d8d8;"></path></g><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -3s; animation-direction: normal;"><path class="st5" d="M62.4,18.8c0,0.1-24.6-0.1-24.6,0h0C37.9,35.9,62.4,35.9,62.4,18.8z" stroke="rgb(51, 51, 51)" fill="rgb(102, 102, 102)" style="stroke: rgb(51, 51, 51);fill: #d8d8d8;"></path></g><g style="transform-origin: 50px 50px 0px;"><g><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -2.8s; animation-direction: normal;"><path class="st6" d="M64.2,15c-0.2-0.5-0.7-0.9-1.3-0.9h-0.6h-1H38.6h-0.8H37c-0.6,0-1.1,0.3-1.3,0.9l-1.6,4.1l5.4,19.3l8.5-9.1 c-3.2-1.1-5.2-5.1-7-10.5h17.8c-1.8,5.3-3.8,9.3-7,10.5l8.5,9.1l5.4-19.3L64.2,15z" stroke="rgb(51, 51, 51)" fill="rgb(224, 224, 224)" style="stroke: rgb(93, 93, 93);fill: rgb(187, 187, 187);"></path></g><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -2.6s; animation-direction: normal;"><circle class="st16" cx="50" cy="45.6" r="3.8" stroke="rgb(51, 51, 51)" fill="rgb(255, 255, 255)" style="stroke: rgb(51, 51, 51);fill: #bbb8b8;"></circle></g><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -2.4s; animation-direction: normal;"><circle class="st16" cx="50" cy="59.6" r="3.8" stroke="rgb(51, 51, 51)" fill="rgb(255, 255, 255)" style="stroke: rgb(51, 51, 51);fill: #bbb8b8;"></circle></g><g class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -2.2s; animation-direction: normal;"><circle class="st16" cx="50" cy="73.6" r="3.8" stroke="rgb(51, 51, 51)" fill="rgb(255, 255, 255)" style="stroke: rgb(51, 51, 51);fill: #bbb8b8;"></circle></g></g></g><metadata xmlns:d="http://www.w3.org/2000/svg" class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -2s; animation-direction: normal;">
                                    <d:name class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -1.8s; animation-direction: normal;">long sleeve</d:name>
                                    <d:tags class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -1.6s; animation-direction: normal;">long sleeve,sweatshirt,cloth,hoodie,caftan,polo</d:tags>
                                    <d:license class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -1.4s; animation-direction: normal;">cc-by</d:license>
                                    <d:slug class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -1.2s; animation-direction: normal;">e99453</d:slug>
                                </metadata></g></g></g></g><style type="text/css" class="ld ld-bounce-px" style="transform-origin: 50px 50px 0px; animation-duration: 3.4s; animation-delay: -1s; animation-direction: normal;">path,ellipse,circle,rect,polygon,polyline,line { stroke-width: 0; }@keyframes ld-bounce-px {                                                   0%, 90% {            animation-timing-function: linear;                                                                                           }                                                                                                                    10% {                                                                                                                     animation-timing-function: cubic-bezier(0, 0.4, 0.6, 1);                                                                                                                                                                                           }
                                                                                                                                                                                                                                                                                                       50% {
                                                                                                                                                                                                                                                                                                           animation-timing-function: cubic-bezier(0.4, 0, 1, 0.6);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                       0% {
                                                                                                                                                                                                                                                                                                           -webkit-transform: translate(0, 30px) scaleY(0.5);
                                                                                                                                                                                                                                                                                                           transform: translate(0, 30px) scaleY(0.5);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                       10% {
                                                                                                                                                                                                                                                                                                           -webkit-transform: translate(0, 5px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                           transform: translate(0, 5px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                       50% {
                                                                                                                                                                                                                                                                                                           -webkit-transform: translate(0, -37px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                           transform: translate(0, -37px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                       90% {
                                                                                                                                                                                                                                                                                                           -webkit-transform: translate(0, 5px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                           transform: translate(0, 5px) scaleY(1.1);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                       100% {
                                                                                                                                                                                                                                                                                                           -webkit-transform: translate(0, 30px) scaleY(0.5);
                                                                                                                                                                                                                                                                                                           transform: translate(0, 30px) scaleY(0.5);
                                                                                                                                                                                                                                                                                                       }
                                                                                                                                                                                                                                                                                                   }
                    @-webkit-keyframes ld-bounce-px {
                        0%, 90% {
                            animation-timing-function: linear;
                        }
                        10% {
                            animation-timing-function: cubic-bezier(0, 0.4, 0.6, 1);
                        }
                        50% {
                            animation-timing-function: cubic-bezier(0.4, 0, 1, 0.6);
                        }
                        0% {
                            -webkit-transform: translate(0, 30px) scaleY(0.5);
                            transform: translate(0, 30px) scaleY(0.5);
                        }
                        10% {
                            -webkit-transform: translate(0, 5px) scaleY(1.1);
                            transform: translate(0, 5px) scaleY(1.1);
                        }
                        50% {
                            -webkit-transform: translate(0, -37px) scaleY(1.1);
                            transform: translate(0, -37px) scaleY(1.1);
                        }
                        90% {
                            -webkit-transform: translate(0, 5px) scaleY(1.1);
                            transform: translate(0, 5px) scaleY(1.1);
                        }
                        100% {
                            -webkit-transform: translate(0, 30px) scaleY(0.5);
                            transform: translate(0, 30px) scaleY(0.5);
                        }
                    }
                    .ld.ld-bounce-px {
                        -webkit-animation: ld-bounce-px 1s infinite;
                        animation: ld-bounce-px 1s infinite;
                    }
                </style></svg></svg>
    </div>
</div>
<!--<div class="fixed_button fixed_top" id="top_scroll_btn" onclick="ScrollBottom();">
    <i class="mdi mdi-mdi mdi-arrow-expand-down"></i>
</div>-->
<div class="fixed_button fixed_bottom" id="bottom_scroll_btn" onclick="ScrollTop();">
    <i class="mdi mdi-mdi mdi-arrow-expand-up"></i>
</div>
<div class="fixed_asked" data-toggle="tooltip" data-placement="left" title="How Taj Tailors works" id="ask_call" >
    <span class="" data-toggle="modal" data-target="#AskForCall">
    <i class="mdi mdi-phone"></i>
    </span>
</div>
<div class="modal right fade" id="AskForCall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel2" style="color:#0058c7;">Ask For Call</h4>
                <div class="headphone_forask">
                    <i class="mdi mdi-headphones-settings"></i>
                </div>
            </div>
            <div class="modal-body">
                <span class="small_note">Can we answer questions on how Taj Tailors works?
Enter your contact number below</span>
                <div class="deli_row">
                    <input type="text" name="ask_number" autocomplete="off" class="form-control login_txt" placeholder="Enter Mobile Number" />
                </div>
                <span class="small_note">We’ll call back soon</span>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="AskSubmit">Call me back</button>
            </div>
        </div>
    </div>
</div>
<div id="myModal_UpdatePassword" class="modal fade" role="dialog" aria-hidden="false" >
    <div class="modal-dialog forgotpass_lb">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">UPDATE PASSWORD ?</h4>
            </div>
            <div class="modal-body">
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder="Old Password"
                           id="txtChange_previousPsd" autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class="mdi mdi-lock mdi-16px"></i></div>
                </div>
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder="New Password" id="txtchange_newPsd"
                           autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                </div>
                <div class="basic_lb_row">
                    <input type="text" class="form-control forgot_txt" placeholder=" Re-type Password"
                           id="txtchange_retypePsd" autocomplete="off" data-validate="TT_btnChangepass">
                    <div class="forgot_icon"><i class=" mdi mdi-lock-open-outline mdi-16px"></i></div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="TT_btnChangepass">Update</button>
            </div>
        </div>

    </div>
</div>
<!------Popup Box -->
<div class="modal popup_bgcolor" id="sucess_popup">
    <div class="popup_box">
        <div class="alert_popup success_bg">
            <div class="popup_verified"><i class="mdi mdi-check"></i></div>
            <h4 class="popup_mainhead">Thank You!</h4>
            <p class="popup-text dynamic_popuptxt">You have successfully Submit</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn success_bg sucess_btn" type="submit" onclick="HidePopoupMsg();">Ok
            </button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor" id="error_popup">
    <div class="popup_box">
        <div class="alert_popup error_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Error Massage!</h4>
            <p class="popup-text dynamic_popuptxt">You have entered wrong text</p>
        </div>
        <div class="popup_submit">
            <button class="popup_submitbtn error_bg error_btn" type="submit" onclick="HidePopoupMsg();">ok</button>
        </div>
    </div>
</div>
<div class="modal popup_bgcolor" id="conformation_popup">
    <div class="popup_box">
        <div class="alert_popup conformation_bg">
            <div class="popup_verified"><i class="mdi mdi-close"></i></div>
            <h4 class="popup_mainhead">Confirmation Massage!</h4>
            <p class="popup-text dynamic_popuptxt">Do you really want to delete this record.t</p>
        </div>
        <div class="popup_submit">
            <a class="popup_submitbtn conformation_bg conformation_btn" type="submit" id="ConfirmBtn"
               onclick="HidePopoupMsg();">Yes
            </a>
            <a class="popup_submitbtn conformation_nobtn" type="submit" onclick="HidePopoupMsg();">No</a>
        </div>
    </div>
</div>

<div class="modal popup_bgcolor" id="loginSignup_popup">
    <div class="login_popup_box">
        <div class="close_login" onclick="HidePopoupMsg();"><i class="mdi mdi-close"></i></div>
        <div class="login_lefttxtbox">
            <div class="left_block login">
                <h1>Login</h1>
                <p>Get access to your Orders, and Recommendations.</p>
                <img src="images/signin_images.png">
            </div>
            <div class="left_block registration">
                <h1>Registration</h1>
                <p>We do not share your personal details with anyone.</p>
                <img src="images/signup_image.png">
            </div>
            <div class="left_block forgot">
                <h1>Forgot</h1>
                <p>Enter mobile phone number associated with your Taj Tailors account.</p>
                <img src="images/forgot_image.png" />
            </div>
        </div>
        <div class="login_right_txt">
            <div class="right_block login">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt" placeholder="Email/Mobile Number ">
                </div>
                <div class="deli_row">
                    <input type="password" name="login_password" autocomplete="off" class="form-control login_txt" placeholder="Password">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-primary login_btn">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-warning" onclick="ShowLoginSignup('forgot')">
                        <i class="mdi mdi-account-alert basic_icon_margin"></i>Forgot</div>
                    <div class="btn btn-default pull-right" onclick="ShowLoginSignup('signup');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign Up</div>
                </div>
            </div>
            <div class="right_block forgot">
                <div class="deli_row">
                    <input type="text" name="email_pass" autocomplete="off" class="form-control login_txt" placeholder="Enter Mobile Number ">
                </div>
                <hr>
                <div class="deli_row">
                    <button class="btn btn-primary login_btn">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Submit
                    </button>
                </div>
                <hr>
                <div class="product_btn_box">
                    <div class="btn btn-warning login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-edit basic_icon_margin"></i>Sign In</div>
                </div>
            </div>
            <div class="right_block registration">
                <div class="deli_row">
                    <input type="text" name="reg_name" autocomplete="off" class="form-control login_txt" placeholder="Enter Name">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_email" autocomplete="off" class="form-control login_txt" placeholder="Enter Email Id">
                </div>
                <div class="deli_row">
                    <input type="text" name="reg_number" autocomplete="off" class="form-control login_txt" placeholder="Enter Mobile Number">
                </div>
                <div class="deli_row">
                    <input type="password" name="reg_password" autocomplete="off" class="form-control login_txt" placeholder="Enter Password">
                </div>
                <div class="deli_row">
                    <input type="password" name="reg_password" autocomplete="off" class="form-control login_txt" placeholder="Confirmation Password">
                </div>
                <div class="deli_row">
                    <button class="btn btn-primary login_btn">
                        <i class="mdi mdi-account basic_icon_margin"></i>Registerd
                    </button>
                </div><hr>
                <div class="deli_row">
                    <button class="btn btn-default login_btn" onclick="ShowLoginSignup('signin');">
                        <i class="mdi mdi-account-check basic_icon_margin"></i>Existing User? Log In
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
<!--<style type="text/css">

</style>
<script type="text/javascript">

</script>-->
<script type="text/javascript">
    var pagemenuclick = false;
    function gotomainpage() {
       // window.location.href = "{{url('/')}}";
        window.location.href = "http://localhost:8080/TajTailors/index.php";
    }
    function How_slide() {
        if (pagemenuclick) {
            var position = $('#how_row_block').offset().top;
            $('html, body').animate({scrollTop: position - 50}, 1000);
        } else {
            gotomainpage();
        }
    }
    function Price_slide() {
        if (pagemenuclick) {
            var position = $('#price_row_block').offset().top;
            $('html, body').animate({scrollTop: position - 50}, 1000);
        } else {
            gotomainpage();
        }
    }
    function Review_slide() {
        if (pagemenuclick) {
            var position = $('#review_row_block').offset().top;
            $('html, body').animate({scrollTop: position - 50}, 1000);
        } else {
            gotomainpage();
        }
    }
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>