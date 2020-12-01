<?php
defined('BASEPATH') or exit('No direct script access allowed');
 header("Access-Control-Allow-Origin: *");
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>KitKat隨心所欲 奇享時刻</title>
  <link rel="shortcut icon" href="./img/favicon.ico">
  <meta name=title content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
  <meta name=description content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
  <meta name=keywords content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
  <meta property=og:title content="KITKAT">
  <meta property=og:type content="Website">
  <meta property=og:image content="./img/fb-share.jpg">
  <meta property=og:description content="Kitkat隨心所欲‧奇享時刻巧克力樂園">
  <!-- plugin -->
  <link rel="stylesheet" href="./assets/swiper/swiper.min.css">
  <!-- main -->
  <link rel="stylesheet" href="./css/layout.css?asfasdf">
</head>

<body>
  <div class="header">
    <div class="header_ctn">
      <div class="kk_logo"><img src="./img/logo.png" alt="KITKAT"></div>
      <div class="kk_nav lg_hide">
        <a class="nav_item active" href="./">
          <img class="_default lg_hide" src="./img/header/menu_01.png">
          <img class="_hover lg_hide" src="./img/header/menu_01-hover.png">
        </a>
        <a class="nav_item" href="./invoice.html">
          <img class="_default lg_hide" src="./img/header/menu_02.png">
          <img class="_hover lg_hide" src="./img/header/menu_02-hover.png">
        </a>
        <a class="nav_item" href="./about.html">
          <img class="_default lg_hide" src="./img/header/menu_03.png">
          <img class="_hover lg_hide" src="./img/header/menu_03-hover.png">
        </a>
        <a class="nav_item" href="./rule.html">
          <img class="_default lg_hide" src="./img/header/menu_04.png">
          <img class="_hover lg_hide" src="./img/header/menu_04-hover.png">
        </a>
        <a class="nav_item" href="./lists.html">
          <img class="_default lg_hide" src="./img/header/menu_05.png">
          <img class="_hover lg_hide" src="./img/header/menu_05-hover.png">
        </a>
      </div>
      <div class="nav_btn up_lg_hide" onclick="navObj.active = !navObj.active">
        <div class="nav_line _1"></div>
        <div class="nav_line _2"></div>
        <div class="nav_line _3"></div>
      </div>
      <div class="nav_frame up_lg_hide">
        <div class="nav_close" onclick="navObj.active = false"></div>
        <div class="nav_ctn">
          <div class="nav_box">
            <a class="nav_item" href="./">奇享體驗</a>
            <a class="nav_item" href="./invoice.html">發票登錄</a>
            <a class="nav_item" href="./about.html">品牌介紹</a>
            <a class="nav_item" href="./rule.html">活動辦法</a>
            <a class="nav_item" href="./lists.html">得獎名單</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="frame">
    <div id="kk_swiper" class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="kv_frame _page _p1">
            <div class="kv_ctn">
              <div class="_bg2"><img class="kv_an" src="./img/p1/bg-2.png"></div>
              <div class="_bg3"><img class="kv_an" src="./img/p1/fire.png"></div>
              <div class="_child1"><img class="kv_an" src="./img/p1/child_15.gif"></div>
              <div class="_child2">
                <div an class="an_float _de2"><img class="kv_an" src="./img/p1/child_09.png"></div>
              </div>
              <div class="_child3"><img class="kv_an" src="./img/p1/child_03.gif"></div>
              <div class="_child4"><img class="kv_an" src="./img/p1/child_21.png"></div>
              <div class="_child5">
                <div an class="an_float _du4"><img class="kv_an" src="./img/p1/child_06.png"></div>
              </div>
              <div class="_child6"><img class="kv_an" src="./img/p1/child_18.gif"></div>
              <div class="_title"><img class="kv_an" src="./img/p1/title.png"></div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="preface_frame _page _p2">
            <div class="_bg_box lg_hide">
              <div class="_bg">
                <img src="./img/p2/bg_p2.png">
              </div>
            </div>
            <div class="_bg up_lg_hide">
              <img src="./img/p2/ground_bg_m.png">
            </div>
            <div an class="preface_ctn an_fadeDown">
              歡迎您蒞臨舒適無比的 KitKat 巧克力樂園<br class="md_hide">
              樂園裡充滿了各種奇享<br class="md_hide">
              讓您在為生活、工作奔波之餘<br class="md_hide">
              擁有短暫休息、放鬆片刻！
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="game_frame _page _p3">
            <div class="game_bg_box">
              <img class="game_bg" src="./img/p3/gatebg_1.png">
            </div>
            <div class="game_bg_road_m">
              <img class="_road" src="./img/road.png">
            </div>
            <div class="_page_ctn">
              <div class="game_bg_m">
                <img class="_castlel" src="./img/castlel_m.png">
                <img class="_gate" src="./img/p3/gate_2.png">
              </div>
              <div class="game_ctn">
                <div class="game_box">
                  <p class="p1">選擇喜愛的酥脆口感</p>
                  <p class="p2">在園區裡，除了可以享受到層次分明的酥脆口感，同時也為<br class="sm_hide">自己開啟「隨心所欲，奇享時刻」！</p>
                  <div class="sd_box _btn _p3">
                    <div class="sd_item _B">
                      <div class="L_box">
                        <img an class="_1" src="./img/L4/cookie1_1.png">
                        <img an class="_2" src="./img/L4/cookie1_2.png">
                        <img an class="_3" src="./img/L4/cookie1_3.png">
                        <img an class="_4" src="./img/L4/cookie1_4.png">
                        <img an class="_chips _B _5" src="./img/L4/cookie_chips4.png">
                      </div>
                      <div class="sd_btn" onclick="GObj.sd('B')">
                        <img class="_default lg_hide" src="./img/p3/btn1.png" style="max-width: 337px">
                        <img class="_hover lg_hide" src="./img/p3/btn1_on.png" style="max-width: 337px">
                        <img class="_default up_lg_hide" src="./img/p3/btn1_m.png" style="max-width: 178px">
                        <img class="_hover up_lg_hide" src="./img/p3/btn1_on_m.png" style="max-width: 178px">
                      </div>
                    </div>
                    <div class="sd_item _A">
                      <div class="L_box">
                        <img an class="_1" src="./img/L3/cookie2_1.png">
                        <img an class="_2" src="./img/L3/cookie2_2.png">
                        <img an class="_3" src="./img/L3/cookie2_3.png">
                        <img an class="_chips _A _4" src="./img/L3/cookie_chips3.png">
                      </div>
                      <div class="sd_btn _p3_option2" onclick="GObj.sd('A')">
                        <img class="_default lg_hide" src="./img/p3/btn2.png" style="max-width: 337px">
                        <img class="_hover lg_hide" src="./img/p3/btn2_on.png" style="max-width: 337px">
                        <img class="_default up_lg_hide" src="./img/p3/btn2_m.png" style="max-width: 178px">
                        <img class="_hover up_lg_hide" src="./img/p3/btn2_on_m.png" style="max-width: 178px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="game_frame _page _p4">
            <div class="game_bg_box">
              <img class="game_bg" src="./img/p4/gatebg_2.png">
            </div>
            <div class="game_bg_road_m">
              <img class="_road" src="./img/road.png">
            </div>
            <div class="_page_ctn">
              <div class="game_bg_m">
                <img class="_castlel" src="./img/castlel_m.png">
                <img class="_gate" src="./img/p4/gate_3.png">
              </div>
              <div class="game_ctn">
                <div class="game_box">
                  <p class="p1">調配您的奇享配方</p>
                  <p class="p2">品味細緻綿柔的巧克力與滑順牛奶，<br>每一口都散發濃郁芳香，一不小心就會上癮。</p>
                  <div class="sd_box">
                    <div class="sd_item w100">
                      <div class="M_box">
                        <!-- ////A -->
                        <div class="_template _A">
                          <div class="L_box _p4">
                            <img an class="_1" src="./img/L3/cookie2_1.png">
                            <img an class="_2" src="./img/L3/cookie2_2.png">
                            <img an class="_3" src="./img/L3/cookie2_3.png">
                            <div class="_chips_box">
                              <img an class="_chips _A _4" src="./img/L3/cookie_chips3.png">
                            </div>
                          </div>
                          <img class="_option _1" src="./img/L3/chips_milk.png">
                          <img class="_gif _option _1" _src="./img/L3/3_milkchoco.gif">
                          <img class="_option _2" src="./img/L3/chips_dark.png">
                          <img class="_gif _option _2" _src="./img/L3/3_darkchoco.gif">
                        </div>
                        <!-- ////B -->
                        <div class="_template _B">
                          <div class="L_box _p4">
                            <img an class="_1" src="./img/L4/cookie1_1.png">
                            <img an class="_2" src="./img/L4/cookie1_2.png">
                            <img an class="_3" src="./img/L4/cookie1_3.png">
                            <img an class="_4" src="./img/L4/cookie1_4.png">
                            <div class="_chips_box">
                              <img an class="_chips _B _5" src="./img/L4/cookie_chips4.png">
                            </div>
                          </div>
                          <img class="_option _1" src="./img/L4/chips_milk.png">
                          <img class="_gif _option _1" _src="./img/L4/4_milkchoco.gif">
                          <img class="_option _2" src="./img/L4/chips_milk.png">
                          <img class="_gif _option _2" _src="./img/L4/4_milkchoco.gif">
                          <img class="_unfade _gif _option _2" _src="./img/L4/4_popchoco.gif">
                        </div>
                        <img class="_milk _1 active" src="./img/p4/milk_1.png">
                        <img class="_milk _2" src="./img/p4/milk_2.png">
                      </div>
                    </div>
                  </div>
                  <div class="sd_box _btn _p4">
                    <div class="sd_item _1">
                      <div class="sd_btn" onclick="GObj.sd('1')">
                        <img class="_default lg_hide" src="./img/p4/btn3.png" style="max-width: 495px">
                        <img class="_hover lg_hide" src="./img/p4/btn3_on.png" style="max-width: 495px">
                        <img class="_default up_lg_hide" src="./img/p4/btn3_m.png" style="max-width: 253px">
                        <img class="_hover up_lg_hide" src="./img/p4/btn3_on_m.png" style="max-width: 253px">
                      </div>
                    </div>
                    <div class="sd_item _2">
                      <div class="sd_btn" onclick="GObj.sd('2')">
                        <!-- ////A -->
                        <div class="_template _A">
                          <img class="_default lg_hide" src="./img/p4/btn4.png" style="max-width: 495px">
                          <img class="_hover lg_hide" src="./img/p4/btn4_on.png" style="max-width: 495px">
                          <img class="_default up_lg_hide" src="./img/p4/btn4_m.png" style="max-width: 253px">
                          <img class="_hover up_lg_hide" src="./img/p4/btn4_on_m.png" style="max-width: 253px">
                        </div>
                        <!-- ////B -->
                        <div class="_template _B">
                          <img class="_default lg_hide" src="./img/p4/btn5.png" style="max-width: 495px">
                          <img class="_hover lg_hide" src="./img/p4/btn5_on.png" style="max-width: 495px">
                          <img class="_default up_lg_hide" src="./img/p4/btn5_m.png" style="max-width: 253px">
                          <img class="_hover up_lg_hide" src="./img/p4/btn5_on_m.png" style="max-width: 253px">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="game_frame _page _p5">
            <div class="game_bg_box">
              <img class="game_bg" src="./img/p5/gatebg_3.png">
            </div>
            <div class="game_bg_road_m">
              <img class="_road" src="./img/road.png">
            </div>
            <div class="_page_ctn">
              <div class="game_bg_m">
                <img class="_castlel" src="./img/castlel_m.png">
                <img class="_gate" src="./img/p5/gate_4.png">
              </div>
              <div class="game_ctn">
                <div class="game_box">
                  <p class="p1">立即啟動</p>
                  <p class="p2 _p5">完美裁切比例，隨身攜帶、<br class="up_sm_hide">易於入口，享受隨心所欲。</p>
                  <div class="sd_box _p5">
                    <div class="sd_item">
                      <img id="choco_gif" src="">
                    </div>
                  </div>
                  <div an class="sd_box _btn _1 an_show an_delay_5s _p5">
                    <div class="sd_item">
                      <div class="sd_btn" onclick="sp_kk_swiper('slideNext')">
                        <img class="_default lg_hide" src="./img/p5/btn6.png" style="max-width: 315px">
                        <img class="_hover lg_hide" src="./img/p5/btn6_on.png" style="max-width: 315px">
                        <img class="_default up_lg_hide" src="./img/p5/btn6_m.png" style="max-width: 315px">
                        <img class="_hover up_lg_hide" src="./img/p5/btn6_on_m.png" style="max-width: 315px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="game_frame _share _page _p6">
            <div class="game_bg_box">
              <img class="game_bg" src="./img/share/gatebg_4.png">
            </div>
            <div class="game_bg_road_m">
              <img class="_road" src="./img/road.png">
            </div>
            <div class="_page_ctn">
              <div class="game_bg_m">
                <img class="_castlel" src="./img/castlel_m.png">
                <img class="_gate" src="./img/share/gate_5.png">
              </div>
              <div class="game_ctn _share">
                <div class="game_box _share">
                  <p class="p1">打造專屬奇享時刻</p>
                  <div class="S_box">
                    <div class="S_item">
                      <div class="_template _A1">
                        <img class="_box" src="./img/share/kitkatbox_final1.png">
                        <img class="_hook" src="./img/share/kitkat_milk.png">
                      </div>
                      <div class="_template _A2">
                        <img class="_box" src="./img/share/kitkatbox_final2.png">
                        <img class="_hook" src="./img/share/kitkat_dark.png">
                      </div>
                      <div class="_template _B1">
                        <img class="_box" src="./img/share/kitkatbox_final4.png">
                        <img class="_hook _B" src="./img/share/kitkat_chunky1.png">
                      </div>
                      <div class="_template _B2">
                        <img class="_box" src="./img/share/kitkatbox_final3.png">
                        <img class="_hook _B" src="./img/share/kitkat_chunky2.png">
                      </div>
                      <div class="p2">
                        <div id="share_text2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="sd_box _share">
                    <div class="sd_item">
                      <div class="sd_btn" onclick="sp_kk_swiper('slideNext')">
                        <img class="_default lg_hide" src="./img/share/btn7.png" style="max-width: 222px">
                        <img class="_hover lg_hide" src="./img/share/btn7_on.png" style="max-width: 222px">
                        <img class="_default up_lg_hide" src="./img/share/btn7_m.png" style="max-width: 222px">
                        <img class="_hover up_lg_hide" src="./img/share/btn7_on_m.png" style="max-width: 222px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="game_frame _share _page _p7">
            <div class="game_bg_box">
              <img class="game_bg" src="./img/share/gatebg_4.png">
            </div>
            <div class="game_bg_road_m">
              <img class="_road" src="./img/road.png">
            </div>
            <div class="_page_ctn">
              <div class="game_bg_m">
                <img class="_castlel" src="./img/castlel_m.png">
                <img class="_gate" src="./img/share/gate_5.png">
              </div>
              <div class="game_ctn _share">
                <div class="game_box _share">
                  <p class="p1">打造專屬奇享時刻</p>
                  <div class="S_box">
                    <div class="S_item">
                      <div class="_template _A1">
                        <img class="_box" src="./img/share/kitkatbox_1.png">
                        <img class="_hook" src="./img/share/kitkat_milk.png">
                      </div>
                      <div class="_template _A2">
                        <img class="_box" src="./img/share/kitkatbox_2.png">
                        <img class="_hook" src="./img/share/kitkat_dark.png">
                      </div>
                      <div class="_template _B1">
                        <img class="_box" src="./img/share/kitkatbox_4.png">
                        <img class="_hook _B" src="./img/share/kitkat_chunky1.png">
                      </div>
                      <div class="_template _B2">
                        <img class="_box" src="./img/share/kitkatbox_3.png">
                        <img class="_hook _B" src="./img/share/kitkat_chunky2.png">
                      </div>
                      <form id="fbShareForm" action="#" method="post">
                      <p class="p1">輸入文字</p>
                      <textarea id="share_text" maxlength="28"></textarea>
                      </form>
                    </div>
                  </div>
                  <div class="sd_box _btn _share _p7">
                    <div class="sd_item">
                      <div class="sd_btn" onclick="GObj.replay()">
                        <img class="_default lg_hide" src="./img/share/btn8.png" style="max-width: 222px">
                        <img class="_hover lg_hide" src="./img/share/btn8_on.png" style="max-width: 222px">
                        <img class="_default up_lg_hide" src="./img/share/btn8_m.png" style="max-width: 222px">
                        <img class="_hover up_lg_hide" src="./img/share/btn8_on_m.png" style="max-width: 222px">
                      </div>
                    </div>
                    <div class="sd_item">
                      <!-- <div class="sd_btn" onclick="sp_kk_swiper('slideNext')"> -->
                      <div class="sd_btn" onclick="create_img()">
                        <img class="_default lg_hide" src="./img/share/btn9.png" style="max-width: 222px">
                        <img class="_hover lg_hide" src="./img/share/btn9_on.png" style="max-width: 222px">
                        <img class="_default up_lg_hide" src="./img/share/btn9_m.png" style="max-width: 222px">
                        <img class="_hover up_lg_hide" src="./img/share/btn9_on_m.png" style="max-width: 222px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- 下滑 -->
    <div class="scroll_ctn">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 139.7 240.2" class="scroll-icon">
        <defs></defs>
        <g>
          <g>
            <path d="M69 79a3 3 0 01-3-3V52a3 3 0 116 0v24a3 3 0 01-3 3z" class="scroll-icon__dot"></path>
            <path
              d="M70 235a66 66 0 01-66-66V70a66 66 0 01132 0v99a66 66 0 01-66 66zM70 9A61 61 0 009 70v99a61 61 0 00122 0V70A61 61 0 0070 9z"
              class="cls-1"></path>
          </g>
        </g>
      </svg>
      <p>下滑進入樂園</p>
    </div>
  </div>
  <div class="footer">Copyright &copy; 台灣雀巢股份有限公司版權所有</div> 
  <script>
  var fb_app_id  =  '2831458826964843';
  (function (d, s, id) {                      // Load the SDK asynchronously
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/zh_TW/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));



    function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
        console.log('statusChangeCallback');
        console.log(response);                   // The current login status of the person.
        if (response.status === 'connected') {   // Logged into your webpage and Facebook.
            testAPI();
        } else {                                 // Not logged into your webpage or we are unable to tell.
            FB.login(function(){});
        }
    }


    function checkLoginState() {               // Called when a person is finished with the Login Button.
        FB.getLoginStatus(function(response) {   // See the onlogin handler
            statusChangeCallback(response);
        });
    }


    window.fbAsyncInit = function() {
        FB.init({
            appId: '2831458826964843',
            cookie: true,
            xfbml: true,
            version: 'v6.0'
        });
checkLoginState();


    };

    function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
        console.log('Welcome!  Fetching your information.... ');
        FB.api('/me', function(response) {
            console.log('Successful login for: ' + response.name);

        });
    }
 </script>  
    
  <!-- polyfill -->
  <script src="./js/polyfill.js"></script>
  <!-- plugin -->
  <script src="./assets/jquery-2.2.1.min.js"></script>
  <script src="./assets/swiper/swiper.min.js"></script>
  <script src="./assets/jquery.mousewheel.min.js"></script>
  <!-- main -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js" integrity="sha512-hSVyGuXBHmZy+A+P21DRUAuc7UTfcqc0geieb/H1ZmqiJAoDTfzFYIOBAMTcFUWU/PwLPEoREYG/77ckPB6oSw==" crossorigin="anonymous"></script>
  <script src="./js/base.js?asdfasdf"></script>
  <script src="./assets/loadingoverlay.min.js"></script>
  <script src="./js/index.js?465465"></script>
</body>

</html>
