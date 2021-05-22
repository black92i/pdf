﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans' overflow-y: hidden;">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
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
    <div id="jssor_1" style="position:relative;margin:0 auto;bottom:0px;top:0px;left:0px;width:400px;height:812px;visibility:hidden;overflow-y: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:400px;height:812px;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;top:0px;left:0px;width:400px;height:812px;overflow:hidden;">
            
			
			<div >
                <img data-u="image" data-src="img/pb-beer-1513436-1600.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0002.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0003.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0004.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0005.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0006.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0007.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0008.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0009.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0010.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0011.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0012.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0013.jpg" />
                
            </div>
            
			<div >
                <img data-u="image" data-src="img/0014.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0015.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0016.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0017.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0018.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0019.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0020.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0021.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0022.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0023.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0024.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0025.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0026.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0027.jpg" />
                
            </div>
			
			<div >
                <img data-u="image" data-src="img/0028.jpg" />
                
            </div>
			
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
       
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
