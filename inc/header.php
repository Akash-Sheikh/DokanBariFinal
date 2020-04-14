<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="logo.png">
    <title></title>
              <!-- Bootstrap CSS CDN -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                    <!-- Stylesheets -->
          <link rel="stylesheet" href="css/bootstrap.min.css"/>
          <link rel="stylesheet" href="css/font-awesome.min.css"/>
          <link rel="stylesheet" href="css/flaticon.css"/>
          <link rel="stylesheet" href="css/slicknav.min.css"/>
          <link rel="stylesheet" href="css/jquery-ui.min.css"/>
          <link rel="stylesheet" href="css/owl.carousel.min.css"/>
          <link rel="stylesheet" href="css/animate.css"/>
          <link rel="stylesheet" href="css/style.css"/>
          <link rel="stylesheet" href="css/footer.css">

          <style type="text/css">
                .SignIn:hover{
                    background-color: #164270;
                    color: white;
                }
                .SignUp:hover{
                    background-color: #00aeef;
                    color: white;
                }                     
          </style>
</head>

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <nav style="height: 60px;" class="navbar navbar-expand-lg navbar-light ">

          <div id="logo">
               <a class="navbar-brand" href="index.php">
               <img class="img-responsive" style="display: block; max-width: 210px; height: auto; vertical-align: middle;" href="index.php" src="img/logo.png">
              </a>             
          </div>    

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>

            <form class="form-inline my-2 my-lg-0">
                        <div class="user-panel">
                              <button class="SignIn" style="border: 2px solid #164270; border-radius: 6px;" type="submit">Sign In</button>
                              <button class="SignUp" style="border: 2px solid #00aeef; border-radius: 6px;" type="submit">Sign Up</button>
                        </div>
            </form>
      </div>
    </nav>

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
    <script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
  
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:460px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:40%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">

                        <div style="background-color:#d3890e;">
                            <img data-u="image" data-src="img/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:260px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:460px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Tours & Travels<br /><p style="font-size:30px;">We providing you special packages within a smart price</p></div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" />
                                <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" />
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="img/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" />
                                <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" />
                            </div>
                        </div>

                        <div style="background-color:#000000;">
                            <img data-u="image" data-src="img/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" />
                                <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" />
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="img/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" />
                                <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" />
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="img/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;" data-src="img/wine-atlantic-ocean.png" />
                                <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" />
                            </div>
                        </div>

        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>

        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->



</body>
</html>
