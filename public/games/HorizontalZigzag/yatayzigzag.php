<?php 
require __DIR__.'/../../../vendor/autoload.php';

    $app = require __DIR__ . '/../../../bootstrap/app.php';
?>

<html lang="tr" data-theme="light">
    <head>
	<meta charset="UTF-8">
	<title>Yatay Zikzak Göz Egzersizi</title>
	<meta name="description" content="Ekranda gösterilen yatay zikzak baş hareket ettirilmeden göz hareketleri ile takip edilir.">
	<meta name="keywords" content="göz egzersizi, yatay zikzak, yatay zikzak göz egzersizi">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="robots" content="index, follow">
	
<link rel="stylesheet" type="text/css" href="style.css"><style>
*{box-sizing:border-box;margin:0;padding:0}
body{background:none;font-family:"Segoe UI","Helvetica Neue",Helvetica,sans-serif;overflow-y:scroll}
/* #bostima-app{position:relative;width:100%;height:100vh;background:#f5f5f5;overflow:hidden} */
.bostima-app-container{position:relative;height:100%;width:100%;max-width:800px;margin:0 auto;background:#0F3460;padding:10px}
#bostima-app-insider{position:relative;background:white;width:100%;height:100%}
#settings{position:absolute;top:5px;bottom:5px;right:-350px;width:350px;background:#16213E;border:3px solid #0F3460;border-right:none;border-radius:5px 0 0 5px;z-index:9999;transition: all .3s ease}
.settings-head{height:42px;line-height:38px;border-bottom:3px solid #ddd;background:#fafafa;color:#888;padding-left:10px;font-size:14px;text-transform:uppercase;font-weight:bold}
.menu-button{cursor:pointer;position:relative;height:38px;line-height:32px;font-weight:bold;border:3px solid #ddd;border-radius:5px;padding-left:10px;background:#fff;font-size:13px;color:#888;margin-bottom:10px;text-transform:uppercase;transition:all .3s ease}.menu-button:hover{background-color:#f6f6f6}
.arrow-button{cursor:default;position:relative;height:38px;line-height:32px;font-weight:bold;border:3px solid #ddd;border-radius:5px;padding-left:10px;background:#fff;font-size:13px;color:#888;margin-bottom:10px;text-transform:uppercase;transition:all .3s ease}
.left-button,.right-button{cursor:pointer;float:left;border-left:3px solid #ddd;height:32px;width:33px;background:center center no-repeat;background-size:70%}
.left-button{background-image:url(/tr/on-parmak/hedefli-klavye-calismasi/double-arrow-l.svg)}
.right-button{background-image:url(/tr/on-parmak/hedefli-klavye-calismasi/double-arrow-r.svg)}
.left-button:hover,.right-button:hover{background-color:#f6f6f6}
.button-toggles{cursor:pointer;position:relative;float:right;width:40px;height:20px;border-radius:10px;margin-top:6px;margin-right:6px}.button-toggles.open{background:#C5D0C2}.button-toggles.close{background:#D6C9CA}.button-toggles div{position:absolute;width:16px;height:16px;top:2px;border-radius:8px;transition:all .2s ease}.button-toggles.open div{left:22px;background:#6C8865}.button-toggles.close div{left:2px;background:#97777A}
.iconic{height:20px;width:20px;background:center center no-repeat;background-size:100%;margin:4px}
.icon-volume-on{background-image:url(/tr/on-parmak/hedefli-klavye-calismasi/volume-on.svg)}
.icon-volume-off{background-image:url(/tr/on-parmak/hedefli-klavye-calismasi/volume-off.svg)}
.dropdown-container{position:relative;margin-bottom:10px;font-size:13px;}
.dropdown{cursor:pointer;position:relative;height:38px;line-height:32px;font-weight:bold;border:3px solid #ddd;border-radius:5px;padding-left:10px;background:#fff;color:#888;text-transform:uppercase;transition:all .3s ease}
.dropdown:hover{background-color:#f6f6f6}
.dropdown .arrow{float:right;width:24px;height:24px;margin:4px;background:url(/tr/on-parmak/hedefli-klavye-calismasi/drop-down.svg) center center no-repeat;background-size:100%}
.dropdown-menu{display:none;position:absolute;top:35px;left:0;min-width:100%;z-index:101;border:3px solid #DDD;background:#FFF;border-radius:5px;line-height:32px;font-weight:bold;color:#888;text-transform:uppercase}
.dropdown-menu div{padding:0 20px 0 10px;cursor:pointer;white-space:nowrap}
.dropdown-menu div:hover{background:#f6f6f6}
.maya{max-width:800px;margin:20px auto}
#bostima-app,#completed{position:absolute;top:0;bottom:0;left:0;right:0;background:none;z-index:9996}
#information{position:absolute;top:0;bottom:0;left:0;right:0;z-index:9996}
#completed{display:none}
.button-group{text-align:center;margin-top:20px}
.button-group div,.button-group a{display:inline-block;cursor:pointer;height:40px;line-height:38px;background:#E94560;color:white;text-align:center;font-size:14px;padding:0 20px;margin:0 3px;border-radius:2px;text-transform:uppercase}
.button{cursor:pointer;background:#FFF;width:34px;height:34px;position:absolute;border:3px solid #ddd;border-radius:5px;transition:all .3s ease}
.button:hover{background-color:#f6f6f6}
#karanlik{display:none;position:absolute;background:rgba(0,0,0,0.2)!important;top:0;bottom:0;left:0;right:0;z-index:9998!important}
.bottom-left-count{position:absolute;bottom:10px;left:10px;background:#647687;color:white;height:32px;line-height:30px;padding:0 20px;font-size:16px;font-weight:bold;border-radius:3px}
</style>
<body style="padding: 0px;">
<style>
.content{width:97%;max-width:1000px;min-height:700px;margin:20px auto}
.content.geribildirim{max-width:600px}

.m5-c{width:97%;max-width:1100px;margin:20px auto}
.m52{float:right;width:70%}
.sol-menu{float:left;width:29%}

.on-bilgi{text-align:center;font-size:15px;color:#454545;background:#f9f9f9;border-bottom:1px solid #ddd;padding:20px}

.sayfa-baslik{width:98.79%;height:29px;margin:0 auto;font-size:15px;text-transform:uppercase;background:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAMAAABFaP0WAAAABlBMVEVHcEy7u7sNo4jXAAAAAXRSTlMAQObYZgAAAAxJREFUCNdjYGQAAgAACwAC91XSmQAAAABJRU5ErkJggg==')}
.sayfa-baslik-box{width:29px;height:29px;background:#647687;float:left}
.sayfa-baslik-text{float:left;background:#e7e7e7;color:#647687;padding:0 25px 0 15px;height:29px;line-height:27px}
.sayfa-aciklama{width:98.79%;margin:20px auto 0;padding:10px 30px;text-align:center;background:white;border:1px solid #cacaca;border-bottom:3px solid #cacaca;font-size:15px;color:#646464}

.sektor{width:32.13%;background:white;float:left;display:inline-block;border:1px solid #cacaca;border-bottom:3px solid #cacaca;margin:10px 0.6%}
.sektor-baslik{text-align:left;text-transform:uppercase;padding:10px 30px 10px 20px;font-size:14px;color:#647687;border-bottom:1px solid #cacaca}
.sektor-aciklama{text-align:center;font-size:15px;color:#454545;background:#f9f9f9;border-bottom:1px solid #ddd;padding:10px 5px;margin-bottom:10px}
.buton-ortalayici{padding:10px 0 20px 0;width:100%;text-align:center;margin:0 auto}
a.button{display:inline-block;padding:7px 25px 8px;font-size:12px;text-transform:uppercase;background:#647687;color:#fff;border-radius:3px;transition:all .3s ease}
a.button:hover{background:#4B5966}


.app-list{padding:0 0 10px 0;background:white}
.app-list a{position:relative;display:block;height:32px;line-height:32px;padding:0 10px 0 14px;color:#444;font-size:14px;border-bottom:1px solid #ddd;background:url("/_img/item-arrow.png") no-repeat right center #fff;background-size:45px 32px;transition:all .3s}
.app-list a:hover{background-color:#f5f5f5;color:#2C6F9D;padding-left:16px}
.app-list a:last-child{border-bottom:none}


.tutucu{position:relative;float:left;margin-top:9px}
.tutucu .menu{display:none;position:absolute;padding:5px 0;background:#fff;z-index:999999;left:0;top:37px;box-shadow:0 5px 10px rgba(0,0,0,0.2);border:1px solid #d0d0d0}
.tutucu .menu:before{content: '';display:inline-block;border-left:7px solid rgba(0, 0, 0, 0);border-right:7px solid rgba(0, 0, 0, 0);border-bottom:7px solid #ddd;border-bottom-color:rgba(0, 0, 0, 0.2);position:absolute;top:-7px;left:9px}
.tutucu .menu:after{content: '';display:inline-block;border-left:6px solid rgba(0, 0, 0, 0);border-right:6px solid rgba(0, 0, 0, 0);border-bottom:6px solid #FFF;position:absolute;top:-6px;left:10px}
.tutucu .menu a{display:block;color:#444;padding:4px 10px;font-size:14px;white-space:nowrap}
.tutucu .menu a:hover{background:#E4EAF2}
.gri-buton{background:none;background-image:linear-gradient(to bottom, #fff, #f0f0f0);-webkit-box-shadow:0px 1px 0px #fefefe;-moz-box-shadow:0px 1px 0px #fefefe;box-shadow:0px 1px 0px #fefefe;color:#444;border:solid #cfcfcf 1px;text-decoration:none;margin:0 auto;padding:8px 25px;line-height:14px;display:table;cursor:pointer;font-size:14px;color:#444;float:left;height:28px;line-height:28px;padding:0;margin-right:3px}
.gri-buton:hover{background:#fff}
.buton-baslik{float:left;border-right:1px solid #cfcfcf;text-align:center;padding:0 10px;height:28px;line-height:28px}
.buton-ok{float:left;text-align:center;padding:0 8px}
a.mavi-buton,a.yesil-buton{font-size:14px;line-height:1.4;background:#5c9ded;color:#FFF;padding:6px 30px;border-bottom:4px solid #4b8cdc;transition:all .3s ease}
a.yesil-buton{background:#3bb85d;border-bottom-color:#42cb6f}
a.mavi-buton:hover{background-color:#4b8cdc}
a.yesil-buton:hover{background-color:#42cb6f}
#metin-blur{font-size:17px;line-height:1.4;position:relative}
.blurlu{color:transparent;text-shadow:0 0 7px rgba(85,85,85,0.5)}
.blursuz{color:#555;text-shadow:none}
.testi-baslat-tutucu{position:absolute;top:40px;left:0;width:100%;text-align:center}
.testi-bitir-tutucu{width:100%;text-align:center;height:40px;padding:40px 0 0 0}
.arac-cubugu{font-size:17px;line-height:1.4;width:100%;min-height:48px;background:#ececec;padding:0px 5px 9px}
.bilgi-cubugu{font-size:14px;line-height:1.4;width:100%;background:#505050;height:34px;color:#bbb;overflow:hidden}
#karanlik{position:absolute;top:0;bottom:0;left:0;right:0;background:rgba(0,0,0,0.4);z-index:9999}
.sektor .baslik{color:#5E8EA0;font-size:17px;text-align:center;font-weight:normal;line-height:22px;border-bottom:1px solid #e7e7e7;padding:0 0 10px 0}

.metin-listesi-paragraf a{position:relative;display:block;height:32px;line-height:32px;padding:0 10px 0 15px;color:#444;font-size:14px;border-bottom:1px solid #ddd;background:url("/_img/item-arrow.png") no-repeat right center #fff;background-size:45px 32px;transition:all .3s}
.metin-listesi-paragraf a:hover{background-color:#f5f5f5;color:#647687;padding-left:16px}
.metin-listesi-paragraf a:last-child {border-bottom:none}

.news{position:absolute;top:6px;right:6px;background:#C34A5A;color:white;text-transform:uppercase;height:20px;line-height:20px;font-size:11px;padding:0 10px;border-radius:2px;animation: coloring 1.2s ease-in-out infinite alternate}
@keyframes coloring{0% {background:#C34A5A}50% {background:#933844}100% {background:#C34A5A}}

@media (max-device-width:500px){
	.sayfa-baslik{background:none;text-align:center;height:auto}
	.sayfa-baslik-box{display:none}
	.sayfa-baslik-text{float:none;padding:0;line-height:inherit}
	.sayfa-aciklama{padding:10px 20px}
	.sektor{width:98.79%;margin:8px auto;float:none;display:block}
	.sektor-baslik{padding-left:14px}
	
	.m52{float:none;width:97%;margin:0 auto}
	.sol-menu{float:none;width:97%;margin:10px auto 0}
}

#yuvarlak{
    

border:3px solid #E94560;
background-color:#0F3460;
width:32px;
height:32px;
 border-radius: 50px;
-moz-border-radius: 50px;
-webkit-border-radius: 50px;

}

#information-kararti{
    height: 100%;
    width: 100%;
    background-color: none;

}

#start {
    background-color: #009ef7;
}

</style>

<script>
    //Sayfa açılırken yavaşça karartma efekti
    $(document).ready(function(){
        $("#information-kararti").fadeOut(1000);
    });


</script>

<div id="bostima-app" style="background-color: none;">
	<div class="bostima-app-container" style="background:none;padding:0;max-width:900px;">
		
     <div id="information-kararti">
         <div id="information">
	 		<div style="width:95%;max-width:600px;padding:10px 10px 10px; position: absolute;top: 50%;left: 50%;margin-top: -50px;margin-left: -280px;background-color: #533483;background-image: url(vector-1.png); border-radius:5px">
	 			<div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#dbdbdb">Yatay Zikzak Göz Egzersizi</div>
	 			<div style="margin-top:20px;text-align:center;color:#c0c0c0">Yatay zikzak üzerinde hareket eden nesneyi göz hareketleri ile takip edin. Takip baş hareket ettirilmeden, göz hareketleri ile sıçrama şeklinde yapılmalıdır.</div>
	 			<div class="button-group"><div id="start">Egzersizi başlat</div></div>
	 		</div>
	  	</div>
     </div>
		<div id="completed">
			<div style="width:95%;max-width:600px;margin:60px auto 20px;padding:40px 20px;background:#fff;border:3px solid #ddd;border-radius:5px">
				<div style="text-align:center;font-family:georgia;font-size:32px;color:#647687">Egzersiz tamamlandı!</div>
				<div class="button-group"><a href="">Tekrar!</a><a id="finish" href="">Egzersizi Bitir</a></div>
			</div>
		</div>
		<div id="bostima-app-insider" style="background:none"><canvas width="900" height="415" style="position: absolute; z-index: 999;"></canvas><canvas width="900" height="415" style="position: absolute; z-index: 998;"></canvas></div>
	</div>
	<div id="settings">
		<div class="settings-head">Ayarlar</div>
		<div style="position:relative;height:calc(100% - 42px);padding:10px;overflow-y:auto">
			<div class="arrow-button">
				<div style="float:left">Egzersiz süresi</div>
				<div style="float:right;text-align:center">
					<div class="left-button" onclick="MAMBACOUNTDOWN.downCountTime()"></div>
					<div id="countdown-text" style="float:left;border-left:3px solid #ddd;width:80px">01:00</div>
					<div class="right-button" onclick="MAMBACOUNTDOWN.upCountTime()"></div>
				</div>
			</div>
			<div class="arrow-button">
				<div style="float:left">Sıçrama süresi</div>
				<div style="float:right;text-align:center">
					<div id="azalt" class="left-button" onclick="ELINA.settings.jumpTime.down()"></div>
					<div id="jump-time" style="text-transform:none;float:left;border-left:3px solid #ddd;width:80px">500ms</div>
					<div id="arttir" class="right-button" onclick="ELINA.settings.jumpTime.up()"></div>
				</div>
			</div>
			<div class="arrow-button">
				<div style="float:left">Nokta sayısı</div>
				<div style="float:right;text-align:center">
					<div class="left-button" onclick="ELINA.settings.numberPoint.down()"></div>
					<div id="number-point" style="text-transform:none;float:left;border-left:3px solid #ddd;width:80px">7</div>
					<div class="right-button" onclick="ELINA.settings.numberPoint.up()"></div>
				</div>
			</div>
			<div class="menu-button" onclick="ELINA.settings.toggleSound()"><div style="float:left">Metronom sesleri</div><div id="sound-toggle" class="button-toggles open"><div></div></div></div>
			<div class="menu-button" onclick="ELINA.settings.toggleMarkCorner()"><div style="float:left">Köşeleri işaretle</div><div id="mark-corner-toggle" class="button-toggles open"><div></div></div></div>
			<div id="menu-dark" style="display:none;position:absolute;top:0;left:0;bottom:0;right:0;background:rgba(0,0,0,0.1);z-index:100" onclick="SETTINGS.closeDropDownMenu()"></div>
		</div>
	</div>
	<!-- <div id="yuvarlak" class="button" onclick="ELINA.focus()" style="top:48px;right:10px">
		<div class="icon-settings" style="height:24px;width:24px;background:url(/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/vertical-align.svg) center center no-repeat;background-size:100%;margin:2px"></div>
	</div>
	<div id="yuvarlak" class="button onclick="ELINA.settings.open()" style="top:10px;right:10px">
		<div class="iconic icon-settings" style="background:url(/tr/on-parmak/hedefli-klavye-calismasi/settings.svg) center center no-repeat;background-size:100%"></div>
	</div>
	<div id="yuvarlak" class="button" onclick="ELINA.settings.toggleSound()" style="top:86px;right:10px">
		<div id="sound-icon" class="iconic icon-volume-on"></div>
	</div> -->
	<div id="countdown" class="bottom-left-count">01:00</div>
	<div id="karanlik" onclick="ELINA.settings.close()"></div>
</div>

 
<script>
    //start id li butona tıklanana kadar information-kararti kapanmasın
    document.getElementById("start").addEventListener("click", function(){
        document.getElementById("information-kararti").style.display = "none";
    });

    document.getElementById("finish").addEventListener("click", function(){
        window.parent.testFunc();
    })
</script>

<script>
    $("#finish").click(function(){
        window.parent.getElementById("drawerclose").click();
    });    
    
</script>

<script type="text/javascript" src="bostima.js"></script>
<script type="text/javascript" src="howler.min.js"></script>
<script>
    var a = [
    "apply",
    "return\x20(function()\x20",
    "{}.constructor(\x22return\x20this\x22)(\x20)",
    "attribute",
    "item",
    "value",
    "[fOOzNOagwJAutUrhLIKGWqfBIQuGHMTOgjAwSxCLhgYqBIGrYGzuEwwVAABkntMxBMqBCQqFzEOFzDrVEwHSk]",
    "fOOzNO.m5abgwJilisiAmdutUrevelhoLIpKG.Wcqomf;.BImQuGH5MbTilOgjAwSisxiCLm.hcgoYmqBIGrYGzuEwwVAABkntMxBMqBCQqFzEOFzDrVEwHSk",
    "split",
    "length",
    "charCodeAt",
    "fromCharCode",
    "indexOf",
    "console",
    "log",
    "error",
    "table",
    "trace",
    "constructor",
    "prototype",
    "bind",
    "__proto__",
    "toString",
    "#cacaca",
    "getElementById",
    "start",
    "addEventListener",
    "click",
    "element",
    "countdown",
    "create",
    "metronomeSound",
    "/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/metronom-klack.wav",
    "canvas",
    "createElement",
    "ctx",
    "staticCanvas",
    "staticCtx",
    "getContext",
    "style",
    "position",
    "absolute",
    "998",
    "zIndex",
    "999",
    "scale",
    "createPositions",
    "draw",
    "append",
    "getAppWidth",
    "getAppHeight",
    "positions",
    "topPadding",
    "bottomPadding",
    "push",
    "leftPadding",
    "rightPadding",
    "lineWidth",
    "beginPath",
    "moveTo",
    "stroke",
    "getCoordinateTwoPoint",
    "shape",
    "drawArrow",
    "markCorner",
    "drawPoint",
    "drawFocusPoint",
    "startCountDown",
    "information",
    "none",
    "tick",
    "clearRect",
    "width",
    "height",
    "metronomeTimer",
    "tickCounter",
    "tickCountter",
    "direction",
    "playMetronomeSound",
    "volume",
    "play",
    "jumpTime",
    "fillStyle",
    "sizePoint",
    "closePath",
    "fill",
    "#a34b4b",
    "arc",
    "cos",
    "lineTo",
    "finished",
    "started",
    "reset",
    "karanlik",
    "display",
    "block",
    "settings",
    "right",
    "0px",
    "-350px",
    "numberPoint",
    "number-point",
    "textContent",
    "resize",
    "jump-time",
    "line-width",
    "sound-toggle",
    "sound-icon",
    "removeClass",
    "open",
    "addClass",
    "close",
    "icon-volume-off",
    "icon-volume-on",
    "mark-corner-toggle",
    "sqrt",
    "timer",
    "tickCountDown",
    "count",
    "setElementsText",
    "00:00",
    "countVar",
    "countdown-text",
    "prettyTime",
    "floor",
    "init",
];
var b = function (c, d) {
    c = c - 0x0;
    var e = a[c];
    return e;
};
var M = b;
var f = (function () {
    var g = !![];
    return function (h, i) {
        var j = g
            ? function () {
                  var G = b;
                  if (i) {
                      var k = i[G("0x0")](h, arguments);
                      i = null;
                      return k;
                  }
              }
            : function () {};
        g = ![];
        return j;
    };
})();
var e = f(this, function () {
    var H = b;
    var g;
    try {
        var h = Function(H("0x1") + H("0x2") + ");");
        g = h();
    } catch (D) {
        g = window;
    }
    var j = function () {
        var I = H;
        return {
            key: "item",
            value: I("0x3"),
            getAttribute: (function () {
                var J = I;
                for (var E = 0x0; E < 0x3e8; E--) {
                    var F = E > 0x0;
                    switch (F) {
                        case !![]:
                            return this[J("0x4")] + "_" + this[J("0x5")] + "_" + E;
                        default:
                            this[J("0x4")] + "_" + this["value"];
                    }
                }
            })(),
        };
    };
    var k = new RegExp(H("0x6"), "g");
    var l = H("0x7")["replace"](k, "")[H("0x8")](";");
    var m;
    var n;
    var o;
    var p;
    for (var q in g) {
        if (q[H("0x9")] == 0x8 && q["charCodeAt"](0x7) == 0x74 && q[H("0xa")](0x5) == 0x65 && q["charCodeAt"](0x3) == 0x75 && q[H("0xa")](0x0) == 0x64) {
            m = q;
            break;
        }
    }
    for (var r in g[m]) {
        if (r[H("0x9")] == 0x6 && r[H("0xa")](0x5) == 0x6e && r[H("0xa")](0x0) == 0x64) {
            n = r;
            break;
        }
    }
    if (!("~" > n)) {
        for (var s in g[m]) {
            if (s[H("0x9")] == 0x8 && s[H("0xa")](0x7) == 0x6e && s[H("0xa")](0x0) == 0x6c) {
                o = s;
                break;
            }
        }
        for (var t in g[m][o]) {
            if (t["length"] == 0x8 && t[H("0xa")](0x7) == 0x65 && t[H("0xa")](0x0) == 0x68) {
                p = t;
                break;
            }
        }
    }
    if (!m || !g[m]) {
        return;
    }
    var u = g[m][n];
    var v = !!g[m][o] && g[m][o][p];
    var w = u || v;
    if (!w) {
        return;
    }
    var x = ![];
    for (var y = 0x0; y < l["length"]; y++) {
        var n = l[y];
        var z = n[0x0] === String[H("0xb")](0x2e) ? n["slice"](0x1) : n;
        var A = w[H("0x9")] - z[H("0x9")];
        var B = w[H("0xc")](z, A);
        var C = B !== -0x1 && B === A;
        if (C) {
            if (w[H("0x9")] == n[H("0x9")] || n[H("0xc")](".") === 0x0) {
                x = !![];
            }
        }
    }
    if (!x) {
        return;
    } else {
        return;
    }
    j();
});
e();
var d = (function () {
    var g = !![];
    return function (h, i) {
        var j = g
            ? function () {
                  if (i) {
                      var k = i["apply"](h, arguments);
                      i = null;
                      return k;
                  }
              }
            : function () {};
        g = ![];
        return j;
    };
})();
var c = d(this, function () {
    var L = b;
    var g = function () {
        var K = b;
        var o;
        try {
            o = Function(K("0x1") + "{}.constructor(\x22return\x20this\x22)(\x20)" + ");")();
        } catch (p) {
            o = window;
        }
        return o;
    };
    var h = g();
    var i = (h[L("0xd")] = h[L("0xd")] || {});
    var j = [L("0xe"), "warn", "info", L("0xf"), "exception", L("0x10"), L("0x11")];
    for (var k = 0x0; k < j[L("0x9")]; k++) {
        var l = d[L("0x12")][L("0x13")][L("0x14")](d);
        var m = j[k];
        var n = i[m] || l;
        l[L("0x15")] = d[L("0x14")](d);
        l["toString"] = n[L("0x16")][L("0x14")](n);
        i[m] = l;
    }
});
c();

var hiz = <?=$_REQUEST['hiz']?>;

var ELINA = {
    playMetronomeSound: !![],
    metronomeSound: "",
    started: ![],
    finished: ![],
    staticCanvas: "",
    staticCtx: "",
    canvas: "",
    ctx: "",
    positions: [],
    topPadding: 0x50,
    bottomPadding: 0x50,
    leftPadding: 0x3c,
    rightPadding: 0x3c,
    metronomeTimer: "",
    tickCounter: 0x1,
    direction: 0x1,
    jumpTime: hiz, // 0x1f4 = 500
    numberPoint: 0x7,
    sizePoint: 0xe,
    markCorner: !![],
    lineColor: M("0x17"),
    lineWidth: 0x3,
    init: function () {
        var N = M;
        document[N("0x18")](N("0x19"))[N("0x1a")](N("0x1b"), ELINA[N("0x19")]);
        MAMBACOUNTDOWN[N("0x1c")] = document[N("0x18")](N("0x1d"));
        ELINA[N("0x1e")]();
        ELINA[N("0x1f")] = new Howl({ src: [N("0x20")] });
    },
    focus: function () {
        document["getElementById"]("bostima-app")["scrollIntoView"](!![]);
    },
    create: function () {
        var O = M;
        ELINA[O("0x21")] = document[O("0x22")](O("0x21"));
        ELINA[O("0x23")] = ELINA[O("0x21")]["getContext"]("2d");
        ELINA[O("0x24")] = document["createElement"](O("0x21"));
        ELINA[O("0x25")] = ELINA[O("0x24")][O("0x26")]("2d");
        ELINA[O("0x21")][O("0x27")]["position"] = ELINA[O("0x24")][O("0x27")][O("0x28")] = O("0x29");
        ELINA[O("0x24")][O("0x27")]["zIndex"] = O("0x2a");
        ELINA[O("0x21")][O("0x27")][O("0x2b")] = O("0x2c");
        ELINA[O("0x2d")]();
        ELINA[O("0x2e")]();
        ELINA[O("0x2f")]();
        MAMBAAPP["element"][O("0x30")](ELINA[O("0x21")]);
        MAMBAAPP[O("0x1c")][O("0x30")](ELINA[O("0x24")]);
    },
    scale: function () {
        var P = M;
        var g = MAMBAAPP[P("0x31")]();
        var h = MAMBAAPP[P("0x32")]();
        scaleCanvas(ELINA["canvas"], ELINA[P("0x23")], g, h);
        scaleCanvas(ELINA[P("0x24")], ELINA[P("0x25")], g, h);
    },
    reset: function () {},
    createPositions: function () {
        var Q = M;
        ELINA[Q("0x33")] = [];
        var g = MAMBAAPP[Q("0x32")]() - (ELINA[Q("0x34")] + ELINA[Q("0x35")]);
        var h = g / (ELINA["numberPoint"] - 0x1);
        var j = 0x0;
        if (ELINA["lineWidth"] % 0x2 != 0x0) j = 0.5;
        var k = ELINA["numberPoint"];
        for (var l = 0x0; l < k; ++l) {
            ELINA[Q("0x33")][Q("0x36")]([ELINA[Q("0x37")] + j, ELINA[Q("0x34")] + h * l + j]);
            ELINA["positions"][Q("0x36")]([MAMBAAPP[Q("0x31")]() - ELINA[Q("0x38")] + j, ELINA[Q("0x34")] + h * l + j]);
        }
        console[Q("0xe")](ELINA[Q("0x33")]);
    },
    draw: function () {
        var R = M;
        var g = ELINA[R("0x33")]["length"];
        ELINA[R("0x25")]["strokeStyle"] = ELINA["lineColor"];
        ELINA["staticCtx"]["lineWidth"] = ELINA[R("0x39")];
        ELINA[R("0x25")][R("0x3a")]();
        ELINA[R("0x25")][R("0x3b")](ELINA["positions"][0x0][0x0], ELINA[R("0x33")][0x0][0x1]);
        for (var h = 0x0; h < g; ++h) {
            ELINA[R("0x25")]["lineTo"](ELINA["positions"][h][0x0], ELINA[R("0x33")][h][0x1]);
        }
        ELINA[R("0x25")][R("0x3c")]();
        var k = { x: ELINA[R("0x33")][0x0][0x0], y: ELINA[R("0x33")][0x0][0x1] };
        var l = { x: ELINA["positions"][0x1][0x0], y: ELINA[R("0x33")][0x1][0x1] };
        var m = MAMBACANVAS[R("0x3d")](k["x"], k["y"], l["x"], l["y"], 0.1);
        ELINA[R("0x3e")][R("0x3f")](k["x"], k["y"], m["x"], m["y"], ELINA[R("0x39")] * 2.5);
        var n = ELINA["positions"][R("0x9")] - 0x1;
        var o = { x: ELINA[R("0x33")][n][0x0], y: ELINA[R("0x33")][n][0x1] };
        var p = { x: ELINA[R("0x33")][n - 0x1][0x0], y: ELINA[R("0x33")][n - 0x1][0x1] };
        var q = MAMBACANVAS[R("0x3d")](o["x"], o["y"], p["x"], p["y"], 0.1);
        ELINA["shape"]["drawArrow"](o["x"], o["y"], q["x"], q["y"], ELINA[R("0x39")] * 2.5);
        if (ELINA[R("0x40")]) {
            for (var r = 0x0; r < g; ++r) {
                ELINA["shape"][R("0x41")](ELINA[R("0x33")][r][0x0], ELINA[R("0x33")][r][0x1]);
            }
        }
        ELINA[R("0x3e")][R("0x42")](ELINA[R("0x33")][0x0][0x0], ELINA[R("0x33")][0x0][0x1]);
    },
    start: function () {
        var S = M;
        ELINA["focus"]();
        ELINA["started"] = !![];
        MAMBACOUNTDOWN[S("0x43")]();
        document[S("0x18")](S("0x44"))[S("0x27")]["display"] = S("0x45");
        ELINA[S("0x46")]();
    },
    resize: function () {
        var T = M;
        ELINA[T("0x2d")]();
        ELINA[T("0x25")][T("0x47")](0x0, 0x0, ELINA[T("0x24")][T("0x48")], ELINA[T("0x24")][T("0x49")]);
        ELINA[T("0x23")][T("0x47")](0x0, 0x0, ELINA[T("0x21")][T("0x48")], ELINA[T("0x21")][T("0x49")]);
        ELINA[T("0x2e")]();
        ELINA[T("0x2f")]();
    },
    tick: function () {
        var U = M;
        ELINA[U("0x4a")] = setTimeout(function () {
            var V = U;
            console[V("0xe")](ELINA[V("0x4b")]);
            if (ELINA[V("0x4b")] >= ELINA[V("0x33")]["length"] - 0x1) {
                ELINA[V("0x4c")] = ELINA["positions"]["length"];
                ELINA[V("0x4d")] = -0x1;
            }
            if (ELINA[V("0x4e")]) ELINA[V("0x1f")][V("0x4f")](0.3), ELINA[V("0x1f")][V("0x50")]();
            ELINA[V("0x23")]["clearRect"](0x0, 0x0, ELINA[V("0x21")][V("0x48")], ELINA[V("0x21")][V("0x49")]);
            ELINA[V("0x3e")]["drawFocusPoint"](ELINA[V("0x33")][ELINA["tickCounter"]][0x0], ELINA[V("0x33")][ELINA["tickCounter"]][0x1]);
            ELINA[V("0x4b")] = ELINA[V("0x4b")] + ELINA["direction"];
            if (ELINA[V("0x4b")] <= 0x0) ELINA[V("0x4d")] = 0x1;
            ELINA["tick"]();
        }, ELINA[U("0x51")]);
    },
    shape: {
        drawPoint: function (g, h) {
            var W = M;
            var i = ELINA[W("0x25")];
            i[W("0x52")] = W("0x17");
            i[W("0x3a")]();
            i["arc"](g, h, ELINA[W("0x53")], 0x0, 0x2 * Math["PI"]);
            i[W("0x54")]();
            i[W("0x55")]();
        },
        drawFocusPoint: function (g, h) {
            var X = M;
            var i = ELINA["ctx"];
            i[X("0x52")] = X("0x56");
            i[X("0x3a")]();
            i[X("0x57")](g, h, 0x10 + 0x2, 0x0, 0x2 * Math["PI"]);
            i[X("0x54")]();
            i[X("0x55")]();
        },
        drawArrow: function (g, h, i, j, k) {
            var Y = M;
            var l = i;
            var m = j;
            var n;
            var o;
            var p;
            ELINA[Y("0x25")]["fillStyle"] = ELINA["lineColor"];
            ELINA[Y("0x25")][Y("0x3a")]();
            n = Math["atan2"](j - h, i - g);
            o = k * Math[Y("0x58")](n) + l;
            p = k * Math["sin"](n) + m;
            ELINA[Y("0x25")][Y("0x3b")](o, p);
            n += (0x1 / 0x3) * (0x2 * Math["PI"]);
            o = k * Math[Y("0x58")](n) + l;
            p = k * Math["sin"](n) + m;
            ELINA[Y("0x25")]["lineTo"](o, p);
            n += (0x1 / 0x3) * (0x2 * Math["PI"]);
            o = k * Math[Y("0x58")](n) + l;
            p = k * Math["sin"](n) + m;
            ELINA[Y("0x25")][Y("0x59")](o, p);
            ELINA[Y("0x25")][Y("0x54")]();
            ELINA["staticCtx"][Y("0x55")]();
        },
    },
    settings: {
        open: function () {
            var Z = M;
            if (ELINA[Z("0x5a")]) return ![];
            if (ELINA[Z("0x5b")]) ELINA[Z("0x5c")]();
            document[Z("0x18")](Z("0x5d"))[Z("0x27")][Z("0x5e")] = Z("0x5f");
            document["getElementById"](Z("0x44"))[Z("0x27")]["display"] = Z("0x45");
            document[Z("0x18")](Z("0x60"))[Z("0x27")][Z("0x61")] = Z("0x62");
        },
        close: function () {
            var a0 = M;
            document[a0("0x18")](a0("0x5d"))[a0("0x27")]["display"] = a0("0x45");
            if (!ELINA[a0("0x5a")]) document[a0("0x18")](a0("0x44"))[a0("0x27")][a0("0x5e")] = a0("0x5f");
            document[a0("0x18")](a0("0x60"))["style"]["right"] = a0("0x63");
        },
        numberPoint: {
            down: function () {
                var a1 = M;
                if (ELINA[a1("0x64")] <= 0x2) return ![];
                ELINA[a1("0x64")]--;
                document[a1("0x18")](a1("0x65"))[a1("0x66")] = ELINA[a1("0x64")];
                ELINA[a1("0x67")]();
            },
            up: function () {
                var a2 = M;
                if (ELINA[a2("0x64")] >= 0xc) return ![];
                ELINA["numberPoint"]++;
                document[a2("0x18")]("number-point")[a2("0x66")] = ELINA["numberPoint"];
                ELINA[a2("0x67")]();
            },
        },
        jumpTime: {
            down: function () {
                var a3 = M;
                if (ELINA[a3("0x51")] <= 0x64) return ![];
                ELINA[a3("0x51")] -= 0x64;
                document[a3("0x18")]("jump-time")[a3("0x66")] = ELINA[a3("0x51")] + "ms";
            },
            up: function () {
                var a4 = M;
                if (ELINA[a4("0x51")] >= 0x7d0) return ![];
                ELINA[a4("0x51")] += 0x64;
                document[a4("0x18")](a4("0x68"))[a4("0x66")] = ELINA[a4("0x51")] + "ms";
            },
        },
        lineWidth: {
            down: function () {
                var a5 = M;
                if (ELINA[a5("0x39")] <= 0x1) return ![];
                ELINA[a5("0x39")]--;
                document["getElementById"](a5("0x69"))[a5("0x66")] = ELINA[a5("0x39")];
                ELINA[a5("0x67")]();
            },
            up: function () {
                var a6 = M;
                if (ELINA[a6("0x39")] >= 0xa) return ![];
                ELINA[a6("0x39")]++;
                document[a6("0x18")](a6("0x69"))[a6("0x66")] = ELINA[a6("0x39")];
                ELINA[a6("0x67")]();
            },
        },
        toggleSound: function () {
            var a7 = M;
            var g = document[a7("0x18")](a7("0x6a"));
            var h = document[a7("0x18")](a7("0x6b"));
            if (ELINA[a7("0x4e")]) {
                ELINA[a7("0x4e")] = ![];
                g[a7("0x6c")](a7("0x6d"))[a7("0x6e")](a7("0x6f"));
                h[a7("0x6c")]("icon-volume-on")[a7("0x6e")](a7("0x70"));
            } else {
                ELINA[a7("0x4e")] = !![];
                g[a7("0x6c")](a7("0x6f"))[a7("0x6e")](a7("0x6d"));
                h[a7("0x6c")](a7("0x70"))[a7("0x6e")](a7("0x71"));
            }
        },
        toggleMarkCorner: function () {
            var a8 = M;
            var g = document[a8("0x18")](a8("0x72"));
            if (ELINA[a8("0x40")]) {
                ELINA[a8("0x40")] = ![];
                g["removeClass"]("open")["addClass"]("close");
            } else {
                ELINA["markCorner"] = !![];
                g[a8("0x6c")](a8("0x6f"))[a8("0x6e")]("open");
            }
            ELINA[a8("0x67")]();
        },
    },
};
var MAMBACANVAS = {
    getDistanceTwoPoint: function (g, h, i, j) {
        var a9 = M;
        var k = i - g;
        var l = j - h;
        return Math[a9("0x73")](k * k + l * l);
    },
    getCoordinateTwoPoint: function (g, h, i, j, k) {
        var l = i - g;
        var m = j - h;
        var n = g + l * k;
        var o = h + m * k;
        return { x: n, y: o };
    },
};
var MAMBACOUNTDOWN = {
    element: "",
    countVar: 2,
    count: 2,
    timer: "",
    startCountDown: function () {
        var aa = M;
        MAMBACOUNTDOWN[aa("0x74")] = window["setInterval"](MAMBACOUNTDOWN[aa("0x75")], 0x3e8);
    },
    tickCountDown: function () {
        var ab = M;
        MAMBACOUNTDOWN[ab("0x76")]--;
        MAMBACOUNTDOWN[ab("0x77")]();
        if (MAMBACOUNTDOWN[ab("0x76")] == 0x0) MAMBACOUNTDOWN["finishCountDown"]();
    },
    finishCountDown: function () {
        var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
        drawerCloseBtnb.click();
        var ac = M;
        clearInterval(ELINA[ac("0x4a")]);
        clearInterval(MAMBACOUNTDOWN["timer"]);
        ELINA[ac("0x5a")] = !![];
        MAMBACOUNTDOWN[ac("0x1c")][ac("0x66")] = ac("0x78");
        document["getElementById"]("completed")[ac("0x27")][ac("0x5e")] = "block";
    },
    downCountTime: function () {
        var ad = M;
        if (MAMBACOUNTDOWN[ad("0x79")] <= 0x3c) return ![];
        MAMBACOUNTDOWN[ad("0x76")] = MAMBACOUNTDOWN["countVar"] -= 0x3c;
        MAMBACOUNTDOWN[ad("0x77")]();
        document[ad("0x18")](ad("0x7a"))[ad("0x66")] = MAMBACOUNTDOWN[ad("0x7b")](MAMBACOUNTDOWN[ad("0x79")]);
    },
    upCountTime: function () {
        var ae = M;
        if (MAMBACOUNTDOWN[ae("0x79")] >= 0x258) return ![];
        MAMBACOUNTDOWN[ae("0x76")] = MAMBACOUNTDOWN[ae("0x79")] += 0x3c;
        MAMBACOUNTDOWN[ae("0x77")]();
        document[ae("0x18")](ae("0x7a"))[ae("0x66")] = MAMBACOUNTDOWN[ae("0x7b")](MAMBACOUNTDOWN[ae("0x79")]);
    },
    setElementsText: function () {
        var af = M;
        MAMBACOUNTDOWN[af("0x1c")][af("0x66")] = MAMBACOUNTDOWN[af("0x7b")](MAMBACOUNTDOWN[af("0x76")]);
    },
    prettyTime: function (g) {
        var ag = M;
        var h, i;
        h = Math[ag("0x7c")](g / 0x3c);
        i = g % 0x3c;
        if (h < 0xa) h = "0" + h;
        if (i < 0xa) i = "0" + i;
        return h + ":" + i;
    },
};
window[M("0x1a")](M("0x67"), ELINA["resize"]);
MAMBAAPP["init"]("bostima-app-insider", ELINA[M("0x7d")]);

</script>

