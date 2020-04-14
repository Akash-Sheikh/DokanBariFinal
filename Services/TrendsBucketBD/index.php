<?php  
    session_start();
?>
<?php include 'inc/header.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Trends Bucket BD</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>

<div>
    
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

            var MAX_WIDTH = 1400;

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
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1400;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
       <div id="jssor_1" style="position:relative;width:1600px;height:500px;margin-top: -2.5%;">
        <!-- Loading Screen -->
   
        <div data-u="slides" style="position:relative;width:1500px;height:500px;border: 2px solid white; padding: 10px; border-radius: 25px;">

                        <div>
                            <img data-u="image" data-src="sliderIMAGE/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Tours & Travels<br /><p style="font-size:30px;">We providing you special packages within a smart price</p></div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:127px;position:absolute;opacity:0;max-width:344px;" data-src="ImageSrc/logo.png" />
                               <!--  <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:80px;position:absolute;opacity:0;max-width:172px;" data-src="ImageSrc/logo.png" /> -->
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="sliderIMAGE/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:127px;position:absolute;opacity:0;max-width:344px;" data-src="ImageSrc/logo.png" />
                               <!--  <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="ImageSrc/logo.png" /> -->
                            </div>
                        </div>

                        <div">
                            <img data-u="image" data-src="sliderIMAGE/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:127px;position:absolute;opacity:0;max-width:344px;" data-src="ImageSrc/logo.png" />
                               <!--  <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="ImageSrc/logo.png" /> -->
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="sliderIMAGE/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:127px;position:absolute;opacity:0;max-width:344px;" data-src="ImageSrc/logo.png" />
                              <!--   <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="ImageSrc/logo.png" /> -->
                            </div>
                        </div>

                        <div>
                            <img data-u="image" data-src="sliderIMAGE/wine-1600.jpg" />
                            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1500px;height:400px;position:absolute;">
                                <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">European Royal<br />Has a long history.</div>
                                <img data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:127px;position:absolute;opacity:0;max-width:344px;" data-src="ImageSrc/logo.png" />
                                <!-- <img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:300px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="ImageSrc/logo.png" /> -->
                            </div>
                        </div>

        </div>

        <a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>

    </div>
 

    <script type="text/javascript">jssor_1_slider_init();
    </script>
    <!-- #endregion Jssor Slider End -->

</div>
<br>
<div class="container">
    
    <div class="row">
        <div class="col-md-3">
              <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">৳ 700.99</h4>
                  <h4><a href="#">Mobile Product</a></h4>
                 <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="ratings">
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                     (15 reviews)
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-danger"  style="background-color: #c1272d; border-color: #c1272d;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    <button type="button" class="btn btn-success" style="background-color: #006837; border-color: #006837;" data-toggle="modal" data-target="#product_view"><i class="glyphicon glyphicon-eye-open"></i> Quick View</button>
                </div>
                <div class="space-ten"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">৳ 700.99</h4>
                  <h4><a href="#">Mobile Product</a></h4>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="ratings">
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                     (15 reviews)
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-danger" style="background-color: #c1272d; border-color: #c1272d;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    <button type="button" class="btn btn-success" style="background-color: #006837; border-color: #006837;" data-toggle="modal" data-target="#product_view"><i class="glyphicon glyphicon-eye-open"></i> Quick View</button>
                </div>
                <div class="space-ten"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">৳ 700.99</h4>
                  <h4><a href=  "#">Mobile Product</a></h4>
                 <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="ratings">
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                     (15 reviews)
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-danger" style="background-color: #c1272d; border-color: #c1272d;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    <button type="button" class="btn btn-success" style="background-color: #006837; border-color: #006837;" data-toggle="modal" data-target="#product_view"><i class="glyphicon glyphicon-eye-open"></i> Quick View</button>
                </div>
                <div class="space-ten"></div>
              </div>
            </div>

                <div class="col-md-3">
              <div class="thumbnail">
                <img src="http://tech.firstpost.com/wp-content/uploads/2014/09/Apple_iPhone6_Reuters.jpg" alt="" class="img-responsive">
                <div class="caption">
                  <h4 class="pull-right">৳ 700.99</h4>
                  <h4><a href=  "#">Mobile Product</a></h4>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> -->
                </div>
                <div class="ratings">
                  <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                     (15 reviews)
                  </p>
                </div>
                <div class="space-ten"></div>
                <div class="btn-ground text-center">
                    <button type="button" class="btn btn-danger" style="background-color: #c1272d; border-color: #c1272d;"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    <button type="button" class="btn btn-success" style="background-color: #006837; border-color: #006837;" data-toggle="modal" data-target="#product_view"><i class="glyphicon glyphicon-eye-open"></i> Quick View</button>
                </div>
                <div class="space-ten"></div>
              </div>
            </div>
    </div>
</div>
<div class="modal fade product_view" id="product_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                <h3 class="modal-title">Product Name</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 product_img">
                        <img src="http://img.bbystatic.com/BestBuy_US/images/products/5613/5613060_sd.jpg" class="img-responsive">
                    </div>
                    <div class="col-md-8 product_content">
                        <h4>Product Id: <span>51526</span></h4>
                        <div class="rating">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            (10 reviews)
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <h3 class="cost">৳ 75.00 <small class="pre-cost">৳ 60.00</small></h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="" selected="">Color</option>
                                    <option value="black">Black</option>
                                    <option value="white">White</option>
                                    <option value="gold">Gold</option>
                                    <option value="rose gold">Rose Gold</option>
                                </select>
                            </div>

                            <!-- end col -->
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <select class="form-control" name="select">
                                    <option value="">Size</option>
                                    <option value="">S</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-12">
                                <input type="number" class="form-control" >
                                   
                            </div>
                            <!-- end col -->
                        </div>
                        <br>
                        <br>
                        <center>
                        <div class="space-ten"></div>
                        <div class="btn-ground">
                            <button type="button" class="btn btn-danger" style="margin-right: 30px; background-color: #c1272d; border-color: #c1272d;"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>

                            <button type="button" class="btn btn-success" style="margin-right: 30px; background-color: #006837; border-color: #006837;"><span class="glyphicon glyphicon"></span> Buy Now</button>
                        </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>



<?php include 'inc/footer.php';?>