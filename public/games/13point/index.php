<?php 
require __DIR__.'/../../../vendor/autoload.php';

    $app = require __DIR__ . '/../../../bootstrap/app.php';
?>

<html lang="tr" data-theme="light">
    
    <head>
	<meta charset="UTF-8">
	<title>13 Nokta Göz Egzersizi</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">

<link rel="stylesheet" type="text/css" href="style.css">



<style>


@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');


*{box-sizing:border-box;margin:0;padding:0}
body{font-family:"Segoe UI","Helvetica Neue",Helvetica,sans-serif;overflow-y:scroll}
/* #bostima-app{position:relative;width:100%;height:100vh;background:#f4f7f9;overflow:hidden} */
.bostima-app-container{position:relative;height:100%;width:100%;max-width:800px;margin:0 auto;padding:10px;}
#bostima-app-insider{position:relative;width:100%;height:100%}
#settings{position:absolute;top:5px;bottom:5px;right:-350px;width:350px;border:3px solid #ddd;border-right:none;border-radius:5px 0 0 5px;z-index:9999;transition: all .3s ease}
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
#bostima-app,#completed{position:absolute;top:0;bottom:0;left:0;right:0;z-index:9996}
#information{position:absolute;top:0;bottom:0;left:0;right:0;z-index:9996}
#completed{display:none}
.button-group{text-align:center;margin-top:20px}
.button-group div,.button-group a{display:inline-block;cursor:pointer;height:40px;line-height:38px;background:#009ef7;color:white;text-align:center;font-size:14px;padding:0 20px;margin:0 3px;border-radius:2px;text-transform:uppercase}
.button{cursor:pointer;background:#FFF;width:34px;height:34px;position:absolute;border:3px solid #ddd;border-radius:5px;transition:all .3s ease}
.button:hover{background-color:#f6f6f6}
/* #karanlik{display:none;position:absolute;background:rgba(0,0,0,0.2)!important;top:0;bottom:0;left:0;right:0;z-index:9998!important} */
.bottom-left-count{position:absolute;bottom:10px;left:10px;background:#647687;color:white;height:32px;line-height:30px;padding:0 20px;font-size:16px;font-weight:bold;border-radius:3px}

</style>


<div id="bostima-app">
	<div class="bostima-app-container" style="background:none;padding:0;max-width:900px">
		<div id="information">
		<div style="width:95%;max-width:600px;padding:10px 10px 10px; position: absolute;top: 50%;left: 50%;margin-top: -50px;margin-left: -280px;background-color: #533483;background-image: url(vector-1.png); border-radius:5px">
	 			<div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#dbdbdb">13 Nokta Göz Egzersizi</div>
	 			<div style="margin-top:20px;text-align:center;color:#c0c0c0">Başınızı oynatmadan göz hareketleri ile mavi noktayı takip edin. Takip ettiğiniz nokta üzerinde bir sonraki nokta oklar ile işaretlenmiştir. İlk egzersizlerde biraz zorlanma yaşayabilirsiniz. Takibi bırakmayın, takipte çok zorlanıyorsanız sıçrama süresini değiştirin.</div>
	 			<div class="button-group"><div id="start">EGZERSİZİ BAŞLAT</div></div>
	 		</div>	
        </div>
		<div id="completed">
			<div style="width:95%;max-width:600px;margin:60px auto 20px;padding:40px 20px;background:#fff; border:3px solid #ddd;border-radius:5px">
				<div style="text-align:center;font-family:georgia;font-size:32px;color:#647687">Egzersiz tamamlandı!</div>
				<div class="button-group"><a href="">Tekrar!</a><a id="finish" href="">Egzersizi Bitir</a></div>
			</div>
		</div>
		<div id="bostima-app-insider"><canvas width="900" height="674" style="position: absolute; z-index: 999;"></canvas><canvas width="900" height="674" style="position: absolute; z-index: 998;"></canvas></div>
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
					<div id="azalt" class="left-button" onclick="ELINA.downJumpTime()"></div>
					<div id="jump-time" style="text-transform:none;float:left;border-left:3px solid #ddd;width:80px">600ms</div>
					<div id="arttir" class="right-button" onclick="ELINA.upJumpTime()"></div>
				</div>
			</div>
			<div class="menu-button" onclick="ELINA.toggleSound()"><div style="float:left">Metronom sesleri</div><div id="sound-toggle" class="button-toggles open"><div></div></div></div>
			<div id="menu-dark" style="display:none;position:absolute;top:0;left:0;bottom:0;right:0;background:rgba(0,0,0,0.1);z-index:100" onclick="SETTINGS.closeDropDownMenu()"></div>
		</div>
	</div>



	<!-- <div class="button" onclick="ELINA.focusApp()" style="top:48px;right:10px">
		<div class="icon-settings" style="height:24px;width:24px;background:url(/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/vertical-align.svg) center center no-repeat;background-size:100%;margin:2px"></div>
	</div>
	<div class="button" onclick="SETTINGS.open()" style="top:10px;right:10px">
		<div class="iconic icon-settings" style="background:url(/tr/on-parmak/hedefli-klavye-calismasi/settings.svg) center center no-repeat;background-size:100%"></div>
	</div>
	<div class="button" onclick="ELINA.toggleSound()" style="top:86px;right:10px">
		<div id="sound-icon" class="iconic icon-volume-on"></div>
	</div>
	<div id="karanlik" onclick="SETTINGS.close()"></div> -->

    <div id="countdown" class="bottom-left-count">01:00</div>

</div>

<div class="t s"></div>

<script>
    document.getElementById("finish").addEventListener("click", function(){
            window.parent.testFunc();
        })
</script>


<script type="text/javascript" src="bostima.js"></script>
<script type="text/javascript" src="howler.min.js"></script>
<script>
    var a = [
    "apply",
    "{}.constructor(\x22return\x20this\x22)(\x20)",
    "item",
    "value",
    "[jLkaqNHxNUnKgDRORWLuLkfDKUCVSyKayJhMaQFBHKnYRxZBCRQtFnzhaWQQOEAZuZIJPBWALzBWqqG]",
    "replace",
    "split",
    "length",
    "charCodeAt",
    "fromCharCode",
    "indexOf",
    "return\x20(function()\x20",
    "console",
    "log",
    "warn",
    "info",
    "error",
    "exception",
    "table",
    "trace",
    "constructor",
    "bind",
    "__proto__",
    "toString",
    "/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/metronom-klack.wav",
    "addEventListener",
    "click",
    "dropDownClick",
    "#select-clear-line\x20div",
    "#select-speed\x20div",
    "selectSpeed",
    "resetExercise",
    "getElementById",
    "karanlik",
    "style",
    "display",
    "block",
    "information",
    "right",
    "0px",
    "none",
    "finished",
    "settings",
    "-350px",
    "menu-dark",
    "querySelectorAll",
    ".dropdown",
    "zIndex",
    "parentNode",
    "querySelector",
    ".dropdown-menu",
    "#fafafa",
    "#cacaca",
    "#EEEEEE",
    "start",
    "startApp",
    "element",
    "countdown",
    "createExercise",
    "init",
    "metronomeTimer",
    "timer",
    "sizeVar",
    "clearRect",
    "canvas",
    "width",
    "height",
    "count",
    "countVar",
    "setElementsText",
    "started",
    "reDraw",
    "createElement",
    "ctx",
    "getContext",
    "staticCanvas",
    "staticCtx",
    "position",
    "absolute",
    "998",
    "999",
    "append",
    "getAppHeight",
    "getAppWidth",
    "padding",
    "drawPolygon",
    "drawFocusPoint",
    "getCenterX",
    "getCenterY",
    "volume",
    "positions",
    "posExp",
    "tickCounter",
    "startSabit",
    "jumpTime",
    "focusApp",
    "startCountDown",
    "cos",
    "sin",
    "push",
    "calculatePosition",
    "font",
    "fillStyle",
    "colorOne",
    "lineWidth",
    "textAlign",
    "textBaseline",
    "middle",
    "lineTo",
    "fillText",
    "stroke",
    "drawPoint",
    "getCoordinateTwoPoint",
    "beginPath",
    "atan2",
    "moveTo",
    "closePath",
    "fill",
    "arc",
    "colorTwo",
    "bostima-app",
    "scrollIntoView",
    "sound-toggle",
    "sound-icon",
    "addClass",
    "close",
    "icon-volume-off",
    "removeClass",
    "showFocusPoint",
    "open",
    "getAttribute",
    "jumpType",
    "hide-finish-time",
    "textContent",
    ".dropdown\x20.text",
    "closeDropDownMenu",
    "jump-time",
    "jumpTimeFinish",
    "jump-time-finish",
    "tickCountDown",
    "completed",
    "countdown-text",
    "prettyTime",
    "floor",
    "resize",
    "bostima-app-insider",
];
var b = function (c, d) {
    c = c - 0x0;
    var e = a[c];
    return e;
};
var N = b;
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
        var h = Function("return\x20(function()\x20" + H("0x1") + ");");
        g = h();
    } catch (D) {
        g = window;
    }
    var j = function () {
        var I = H;
        return {
            key: I("0x2"),
            value: "attribute",
            getAttribute: (function () {
                var J = I;
                for (var E = 0x0; E < 0x3e8; E--) {
                    var F = E > 0x0;
                    switch (F) {
                        case !![]:
                            return this[J("0x2")] + "_" + this[J("0x3")] + "_" + E;
                        default:
                            this[J("0x2")] + "_" + this[J("0x3")];
                    }
                }
            })(),
        };
    };
    var k = new RegExp(H("0x4"), "g");
    var l = ".m5bjiLliskiamqdNeHxvelopNU.ncom;.m5KgDbilRisOimR.cWLuLokmfDKUCVSyKayJhMaQFBHKnYRxZBCRQtFnzhaWQQOEAZuZIJPBWALzBWqqG"[H("0x5")](k, "")[H("0x6")](";");
    var m;
    var n;
    var o;
    var p;
    for (var q in g) {
        if (q[H("0x7")] == 0x8 && q[H("0x8")](0x7) == 0x74 && q["charCodeAt"](0x5) == 0x65 && q[H("0x8")](0x3) == 0x75 && q[H("0x8")](0x0) == 0x64) {
            m = q;
            break;
        }
    }
    for (var r in g[m]) {
        if (r["length"] == 0x6 && r["charCodeAt"](0x5) == 0x6e && r[H("0x8")](0x0) == 0x64) {
            n = r;
            break;
        }
    }
    if (!("~" > n)) {
        for (var s in g[m]) {
            if (s[H("0x7")] == 0x8 && s[H("0x8")](0x7) == 0x6e && s[H("0x8")](0x0) == 0x6c) {
                o = s;
                break;
            }
        }
        for (var t in g[m][o]) {
            if (t[H("0x7")] == 0x8 && t[H("0x8")](0x7) == 0x65 && t[H("0x8")](0x0) == 0x68) {
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
        var z = n[0x0] === String[H("0x9")](0x2e) ? n["slice"](0x1) : n;
        var A = w["length"] - z[H("0x7")];
        var B = w[H("0xa")](z, A);
        var C = B !== -0x1 && B === A;
        if (C) {
            if (w[H("0x7")] == n[H("0x7")] || n[H("0xa")](".") === 0x0) {
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
                  var K = b;
                  if (i) {
                      var k = i[K("0x0")](h, arguments);
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
    var M = b;
    var g = function () {
        var L = b;
        var o;
        try {
            o = Function(L("0xb") + "{}.constructor(\x22return\x20this\x22)(\x20)" + ");")();
        } catch (p) {
            o = window;
        }
        return o;
    };
    var h = g();
    var i = (h["console"] = h[M("0xc")] || {});
    var j = [M("0xd"), M("0xe"), M("0xf"), M("0x10"), M("0x11"), M("0x12"), M("0x13")];
    for (var k = 0x0; k < j[M("0x7")]; k++) {
        var l = d[M("0x14")]["prototype"][M("0x15")](d);
        var m = j[k];
        var n = i[m] || l;
        l[M("0x16")] = d[M("0x15")](d);
        l[M("0x17")] = n["toString"][M("0x15")](n);
        i[m] = l;
    }
});
c();
var metronomeSound = new Howl({ src: [N("0x18")] });
var SETTINGS = {
    zIndex: 0x3e8,
    init: function () {
        var O = N;
        var g = document["querySelectorAll"](".dropdown");
        var h = g["length"];
        for (var j = 0x0; j < h; ++j) {
            g[j][O("0x19")](O("0x1a"), SETTINGS[O("0x1b")]);
        }
        var k = document["querySelectorAll"](O("0x1c"));
        var h = k["length"];
        for (var l = 0x0; l < h; ++l) {
            k[l][O("0x19")](O("0x1a"), ELINA["selectClearLine"]);
        }
        var k = document["querySelectorAll"](O("0x1d"));
        var h = k[O("0x7")];
        for (var m = 0x0; m < h; ++m) {
            k[m]["addEventListener"]("click", ELINA[O("0x1e")]);
        }
    },
    open: function () {
        var P = N;
        if (ELINA["finished"]) return ![];
        if (ELINA["started"]) ELINA[P("0x1f")]();
        document[P("0x20")](P("0x21"))[P("0x22")][P("0x23")] = P("0x24");
        document[P("0x20")](P("0x25"))[P("0x22")][P("0x23")] = "none";
        document[P("0x20")]("settings")[P("0x22")][P("0x26")] = P("0x27");
    },
    close: function () {
        var Q = N;
        document["getElementById"](Q("0x21"))["style"][Q("0x23")] = Q("0x28");
        if (!ELINA[Q("0x29")]) document[Q("0x20")](Q("0x25"))[Q("0x22")][Q("0x23")] = Q("0x24");
        document["getElementById"](Q("0x2a"))[Q("0x22")]["right"] = Q("0x2b");
        SETTINGS["closeDropDownMenu"]();
    },
    closeDropDownMenu: function () {
        var R = N;
        document[R("0x20")](R("0x2c"))[R("0x22")][R("0x23")] = R("0x28");
        var g = document[R("0x2d")](R("0x2e"));
        var h = g[R("0x7")];
        for (var j = 0x0; j < h; ++j) {
            g[j][R("0x22")][R("0x2f")] = "99";
            g[j][R("0x30")][R("0x31")](R("0x32"))[R("0x22")]["display"] = "none";
        }
    },
    dropDownClick: function () {
        var S = N;
        SETTINGS[S("0x2f")]++;
        this[S("0x22")]["zIndex"] = SETTINGS[S("0x2f")][S("0x17")]();
        document[S("0x20")](S("0x2c"))[S("0x22")][S("0x23")] = S("0x24");
        this[S("0x30")][S("0x31")](S("0x32"))[S("0x22")][S("0x23")] = S("0x24");
    },
};

var hiz = <?=$_REQUEST['hiz']?>;

var ELINA = {
    started: ![],
    finished: ![],
    colorOne: N("0x34"),
    colorTwo: "#a34b4b",
    padding: 0x46,
    staticCanvas: "",
    staticCtx: "",
    canvas: "",
    ctx: "",
    positions: [],
    posExp: [],
    metronomeTimer: "",
    tickCounter: 0x1,
    jumpType: 0x0,
    jumpTime: hiz,    //0x258
    jumpTimeFinish: 0x64,
    playMetronomeSound: !![],
    showFocusPoint: !![],
    clearLines: ![],
    focusPointColor: N("0x35"),
    showLinePoint: ![],
    sizeVar: 0x1e,
    size: 0x1e,
    lineColor: "yellow",
    lineWidth: 0x3,
    lineSpace: 0x28,
    init: function () {
        var T = N;
        document["getElementById"](T("0x36"))[T("0x19")](T("0x1a"), ELINA[T("0x37")]);
        MAMBACOUNTDOWN[T("0x38")] = document["getElementById"](T("0x39"));
        ELINA[T("0x3a")]();
        SETTINGS[T("0x3b")]();
    },
    resetExercise: function () {
        var U = N;
        clearInterval(ELINA[U("0x3c")]);
        clearInterval(MAMBACOUNTDOWN[U("0x3d")]);
        ELINA["size"] = ELINA[U("0x3e")];
        ELINA["ctx"][U("0x3f")](0x0, 0x0, ELINA[U("0x40")][U("0x41")], ELINA["canvas"][U("0x42")]);
        MAMBACOUNTDOWN[U("0x43")] = MAMBACOUNTDOWN[U("0x44")];
        MAMBACOUNTDOWN[U("0x45")]();
        ELINA[U("0x46")] = ![];
        ELINA[U("0x47")]();
    },
    createExercise: function () {
        var V = N;
        ELINA["canvas"] = document[V("0x48")](V("0x40"));
        ELINA[V("0x49")] = ELINA["canvas"][V("0x4a")]("2d");
        ELINA[V("0x4b")] = document[V("0x48")]("canvas");
        ELINA[V("0x4c")] = ELINA[V("0x4b")][V("0x4a")]("2d");
        ELINA[V("0x40")][V("0x22")]["position"] = ELINA[V("0x4b")][V("0x22")][V("0x4d")] = V("0x4e");
        ELINA[V("0x4b")][V("0x22")]["zIndex"] = V("0x4f");
        ELINA[V("0x40")][V("0x22")]["zIndex"] = V("0x50");
        ELINA["reDraw"]();
        MAMBAAPP["element"][V("0x51")](ELINA[V("0x40")]);
        MAMBAAPP[V("0x38")][V("0x51")](ELINA[V("0x4b")]);
    },
    reDraw: function () {
        var W = N;
        scaleCanvas(ELINA[W("0x40")], ELINA[W("0x49")], MAMBAAPP["getAppWidth"](), MAMBAAPP[W("0x52")]());
        scaleCanvas(ELINA["staticCanvas"], ELINA["staticCtx"], MAMBAAPP[W("0x53")](), MAMBAAPP[W("0x52")]());
        if (!ELINA["started"]) ELINA["drawPreview"]();
    },
    drawPreview: function () {
        var X = N;
        ELINA[X("0x4c")][X("0x3f")](0x0, 0x0, ELINA["canvas"]["width"], ELINA[X("0x40")][X("0x42")]);
        ELINA["ctx"][X("0x3f")](0x0, 0x0, ELINA["canvas"][X("0x41")], ELINA[X("0x40")][X("0x42")]);
        var g = MAMBAAPP[X("0x52")]() > MAMBAAPP["getAppWidth"]() ? (g = MAMBAAPP[X("0x53")]() / 0x2 - ELINA[X("0x54")]) : (g = MAMBAAPP[X("0x52")]() / 0x2 - ELINA[X("0x54")]);
        ELINA[X("0x55")](g);
        ELINA[X("0x56")](MAMBAAPP[X("0x57")](), MAMBAAPP[X("0x58")]());
    },
    startSabit: function () {
        var Y = N;
        ELINA[Y("0x3c")] = setTimeout(function () {
            var Z = Y;
            if (ELINA["playMetronomeSound"]) metronomeSound[Z("0x59")](0.3), metronomeSound["play"]();
            ELINA[Z("0x49")]["clearRect"](0x0, 0x0, ELINA[Z("0x40")][Z("0x41")], ELINA["canvas"][Z("0x42")]);
            ELINA[Z("0x56")](ELINA[Z("0x5a")][ELINA[Z("0x5b")][ELINA[Z("0x5c")]]][0x0], ELINA[Z("0x5a")][ELINA[Z("0x5b")][ELINA[Z("0x5c")]]][0x1]);
            ELINA[Z("0x5c")]++;
            if (ELINA[Z("0x5c")] >= 0xd) {
                ELINA[Z("0x5c")] = 0x0;
            }
            ELINA[Z("0x5d")]();
        }, ELINA[Y("0x5e")]);
    },
    startApp: function () {
        var a0 = N;
        ELINA[a0("0x5f")]();
        ELINA[a0("0x46")] = !![];
        MAMBACOUNTDOWN[a0("0x60")]();
        document[a0("0x20")]("information")[a0("0x22")][a0("0x23")] = a0("0x28");
        ELINA[a0("0x5d")]();
    },
    calculatePosition: function (g, h) {
        var a1 = N;
        var i = MAMBAAPP["getCenterX"]() + g * Math[a1("0x61")]((h * 0x2 * Math["PI"]) / 0xc);
        var j = MAMBAAPP[a1("0x58")]() + g * Math[a1("0x62")]((h * 0x2 * Math["PI"]) / 0xc);
        return { x: i, y: j };
    },
    drawPolygon: function (g) {
        var a2 = N;
        var h = MAMBAAPP["getCenterX"]();
        var j = MAMBAAPP[a2("0x58")]();
        var k = [];
        var l = g + 0x28;
        ELINA["positions"] = [];
        ELINA[a2("0x5b")] = [];
        ELINA["positions"]["push"]([h, j]);
        k[a2("0x63")]([h, j + 0x28]);
        for (var m = 0x1; m <= 0xd; ++m) {
            var n = ELINA["calculatePosition"](g, m);
            ELINA[a2("0x5a")]["push"]([n["x"], n["y"]]);
            var o = ELINA[a2("0x64")](l, m);
            k["push"]([o["x"], o["y"]]);
        }
        var p = ELINA[a2("0x4c")];
        var q = ELINA[a2("0x5a")];
        p[a2("0x65")] = "bold\x2019px\x20Arial,\x20Tahoma";
        p[a2("0x66")] = ELINA[a2("0x67")];
        p["strokeStyle"] = ELINA[a2("0x67")];
        p["lineWidth"] = ELINA[a2("0x68")];
        p["beginPath"]();
        p["moveTo"](q[0x0][0x0], q[0x0][0x1]);
        p[a2("0x69")] = "center";
        p[a2("0x6a")] = a2("0x6b");
        p["fillText"]("0", k[0x0][0x0], k[0x0][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x0);
        p[a2("0x6c")](q[0x9][0x0], q[0x9][0x1]);
        p["fillText"]("1", k[0x9][0x0], k[0x9][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x9);
        p[a2("0x6c")](q[0x5][0x0], q[0x5][0x1]);
        p[a2("0x6d")]("2", k[0x5][0x0], k[0x5][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x5);
        p["lineTo"](q[0x1][0x0], q[0x1][0x1]);
        p["fillText"]("3", k[0x1][0x0], k[0x1][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x1);
        p[a2("0x6c")](q[0x7][0x0], q[0x7][0x1]);
        p[a2("0x6d")]("4", k[0x7][0x0], k[0x7][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x7);
        p[a2("0x6c")](q[0x3][0x0], q[0x3][0x1]);
        p[a2("0x6d")]("5", k[0x3][0x0], k[0x3][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x3);
        p[a2("0x6c")](q[0xb][0x0], q[0xb][0x1]);
        p["fillText"]("6", k[0xb][0x0], k[0xb][0x1]);
        ELINA["posExp"][a2("0x63")](0xb);
        p[a2("0x6c")](q[0x6][0x0], q[0x6][0x1]);
        p[a2("0x6d")]("7", k[0x6][0x0], k[0x6][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x6);
        p[a2("0x6c")](q[0x2][0x0], q[0x2][0x1]);
        p[a2("0x6d")]("8", k[0x2][0x0], k[0x2][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x2);
        p[a2("0x6c")](q[0xa][0x0], q[0xa][0x1]);
        p[a2("0x6d")]("9", k[0xa][0x0], k[0xa][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0xa);
        p[a2("0x6c")](q[0x4][0x0], q[0x4][0x1]);
        p["fillText"]("10", k[0x4][0x0], k[0x4][0x1]);
        ELINA[a2("0x5b")]["push"](0x4);
        p[a2("0x6c")](q[0x8][0x0], q[0x8][0x1]);
        p["fillText"]("11", k[0x8][0x0], k[0x8][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x8);
        p[a2("0x6c")](q[0xc][0x0], q[0xc][0x1]);
        p[a2("0x6d")]("12", k[0xc][0x0], k[0xc][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0xc);
        p[a2("0x6c")](q[0x0][0x0], q[0x0][0x1]);
        ELINA[a2("0x5b")][a2("0x63")](0x0);
        p[a2("0x6e")]();
        for (var m = 0x0; m <= 0xd; ++m) {
            ELINA[a2("0x6f")](q[m][0x0], q[m][0x1]);
        }
        for (var p = 0x0; p < ELINA[a2("0x5b")][a2("0x7")] - 0x1; ++p) {
            var r = { x: q[ELINA[a2("0x5b")][p]][0x0], y: q[ELINA[a2("0x5b")][p]][0x1] };
            var s = { x: q[ELINA[a2("0x5b")][p + 0x1]][0x0], y: q[ELINA[a2("0x5b")][p + 0x1]][0x1] };
            var t = MAMBACANVAS[a2("0x70")](r["x"], r["y"], s["x"], s["y"], 0.1);
            var u = MAMBACANVAS[a2("0x70")](r["x"], r["y"], s["x"], s["y"], 0.9);
            ELINA["drawArrow"](r["x"], r["y"], t["x"], t["y"], ELINA[a2("0x68")] * 2.5);
            ELINA["drawArrow"](r["x"], r["y"], u["x"], u["y"], ELINA[a2("0x68")] * 2.5);
        }
    },
    drawArrow: function (g, h, i, j, k) {
        var a3 = N;
        var l = i;
        var m = j;
        var n;
        var o;
        var p;
        ELINA[a3("0x4c")][a3("0x66")] = ELINA[a3("0x67")];
        ELINA[a3("0x4c")][a3("0x71")]();
        n = Math[a3("0x72")](j - h, i - g);
        o = k * Math[a3("0x61")](n) + l;
        p = k * Math[a3("0x62")](n) + m;
        ELINA["staticCtx"][a3("0x73")](o, p);
        n += (0x1 / 0x3) * (0x2 * Math["PI"]);
        o = k * Math[a3("0x61")](n) + l;
        p = k * Math["sin"](n) + m;
        ELINA[a3("0x4c")][a3("0x6c")](o, p);
        n += (0x1 / 0x3) * (0x2 * Math["PI"]);
        o = k * Math[a3("0x61")](n) + l;
        p = k * Math[a3("0x62")](n) + m;
        ELINA[a3("0x4c")][a3("0x6c")](o, p);
        ELINA[a3("0x4c")][a3("0x74")]();
        ELINA[a3("0x4c")][a3("0x75")]();
    },
    drawPoint: function (g, h) {
        var a4 = N;
        ELINA[a4("0x4c")][a4("0x66")] = ELINA[a4("0x67")];
        ELINA[a4("0x4c")][a4("0x71")]();
        ELINA["staticCtx"][a4("0x76")](g, h, 0xe, 0x0, 0x2 * Math["PI"]);
        ELINA[a4("0x4c")][a4("0x74")]();
        ELINA[a4("0x4c")][a4("0x75")]();
    },
    drawFocusPoint: function (g, h) {
        var a5 = N;
        ELINA[a5("0x49")]["fillStyle"] = ELINA[a5("0x77")];
        ELINA[a5("0x49")]["beginPath"]();
        ELINA[a5("0x49")]["arc"](g, h, 0x10 + 0x2, 0x0, 0x2 * Math["PI"]);
        ELINA[a5("0x49")][a5("0x74")]();
        ELINA[a5("0x49")][a5("0x75")]();
    },
    focusApp: function () {
        var a6 = N;
        document[a6("0x20")](a6("0x78"))[a6("0x79")](!![]);
    },
    toggleSound: function () {
        var a7 = N;
        var g = document[a7("0x20")](a7("0x7a"));
        var h = document[a7("0x20")](a7("0x7b"));
        if (ELINA["playMetronomeSound"]) {
            ELINA["playMetronomeSound"] = ![];
            g["removeClass"]("open")[a7("0x7c")](a7("0x7d"));
            h["removeClass"]("icon-volume-on")["addClass"](a7("0x7e"));
        } else {
            ELINA["playMetronomeSound"] = !![];
            g[a7("0x7f")](a7("0x7d"))[a7("0x7c")]("open");
            h[a7("0x7f")](a7("0x7e"))[a7("0x7c")]("icon-volume-on");
        }
    },
    toggleFocus: function () {
        var a8 = N;
        var g = document[a8("0x20")]("focus-toggle");
        if (ELINA["showFocusPoint"]) {
            ELINA[a8("0x80")] = ![];
            g[a8("0x7f")](a8("0x81"))[a8("0x7c")](a8("0x7d"));
        } else {
            ELINA[a8("0x80")] = !![];
            g[a8("0x7f")](a8("0x7d"))[a8("0x7c")](a8("0x81"));
        }
        ELINA["drawPreview"]();
    },
    selectSpeed: function () {
        var a9 = N;
        var g = parseInt(this[a9("0x82")]("data"));
        ELINA[a9("0x83")] = g;
        if (g == 0x0) {
            document[a9("0x20")](a9("0x84"))[a9("0x22")]["display"] = "none";
        } else {
            document["getElementById"](a9("0x84"))[a9("0x22")][a9("0x23")] = a9("0x24");
        }
        var h = this[a9("0x85")] || this["innerText"];
        this[a9("0x30")][a9("0x30")][a9("0x31")](a9("0x86"))[a9("0x85")] = h;
        SETTINGS[a9("0x87")]();
            },
    downJumpTime: function () {
        var aa = N;
        if (ELINA[aa("0x5e")] <= 0x64) return ![];
        ELINA[aa("0x5e")] -= 0x64;
        document[aa("0x20")](aa("0x88"))[aa("0x85")] = ELINA["jumpTime"] + "ms";
    },
    upJumpTime: function () {
        var ab = N;
        if (ELINA[ab("0x5e")] >= 0x7d0) return ![];
        ELINA[ab("0x5e")] += 0x64;
        document[ab("0x20")]("jump-time")[ab("0x85")] = ELINA[ab("0x5e")] + "ms";
    },
    downJumpTimeFinish: function () {
        var ac = N;
        if (ELINA[ac("0x89")] <= 0x64) return ![];
        ELINA[ac("0x89")] -= 0x64;
        document[ac("0x20")](ac("0x8a"))[ac("0x85")] = ELINA["jumpTimeFinish"] + "ms";
    },
    upJumpTimeFinish: function () {
        var ad = N;
        if (ELINA[ad("0x89")] >= 0x7d0) return ![];
        ELINA[ad("0x89")] += 0x64;
        document[ad("0x20")]("jump-time-finish")[ad("0x85")] = ELINA[ad("0x89")] + "ms";
    },
};
var MAMBACANVAS = {
    getDistanceTwoPoint: function (g, h, i, j) {
        var k = i - g;
        var l = j - h;
        return Math["sqrt"](k * k + l * l);
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
    countVar: 0x3c,
    count: 2, //Geri sayımın başlangıç değeri
    timer: "",
    startCountDown: function () {
        var ae = N;
        MAMBACOUNTDOWN[ae("0x3d")] = window["setInterval"](MAMBACOUNTDOWN[ae("0x8b")], 0x3e8);
    },
    tickCountDown: function () {
        var af = N;
        MAMBACOUNTDOWN[af("0x43")]--;
        MAMBACOUNTDOWN["setElementsText"]();
        if (MAMBACOUNTDOWN[af("0x43")] == 0x0) MAMBACOUNTDOWN["finishCountDown"]();
    },
    finishCountDown: function () {
        var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
        drawerCloseBtnb.click();
        var ag = N;
        clearInterval(ELINA[ag("0x3c")]);
        clearInterval(MAMBACOUNTDOWN[ag("0x3d")]);
        ELINA["finished"] = !![];
        MAMBACOUNTDOWN["element"][ag("0x85")] = "00:00";
        document["getElementById"](ag("0x8c"))["style"]["display"] = ag("0x24");
    },
    downCountTime: function () {
        var ah = N;
        if (MAMBACOUNTDOWN[ah("0x44")] <= 0x3c) return ![];
        MAMBACOUNTDOWN[ah("0x43")] = MAMBACOUNTDOWN[ah("0x44")] -= 0x3c;
        MAMBACOUNTDOWN[ah("0x45")]();
        document[ah("0x20")](ah("0x8d"))[ah("0x85")] = MAMBACOUNTDOWN["prettyTime"](MAMBACOUNTDOWN[ah("0x44")]);
    },
    upCountTime: function () {
        var ai = N;
        if (MAMBACOUNTDOWN["countVar"] >= 0x258) return ![];
        MAMBACOUNTDOWN[ai("0x43")] = MAMBACOUNTDOWN["countVar"] += 0x3c;
        MAMBACOUNTDOWN[ai("0x45")]();
        document[ai("0x20")](ai("0x8d"))[ai("0x85")] = MAMBACOUNTDOWN[ai("0x8e")](MAMBACOUNTDOWN[ai("0x44")]);
    },
    setElementsText: function () {
        var aj = N;
        MAMBACOUNTDOWN[aj("0x38")][aj("0x85")] = MAMBACOUNTDOWN[aj("0x8e")](MAMBACOUNTDOWN["count"]);
    },
    prettyTime: function (g) {
        var ak = N;
        var h, i;
        h = Math[ak("0x8f")](g / 0x3c);
        i = g % 0x3c;
        if (h < 0xa) h = "0" + h;
        if (i < 0xa) i = "0" + i;
        return h + ":" + i;
    },
};
MAMBAAPP[N("0x57")] = function () {
    var al = N;
    return MAMBAAPP[al("0x53")]() / 0x2;
};
MAMBAAPP["getCenterY"] = function () {
    var am = N;
    return MAMBAAPP[am("0x52")]() / 0x2;
};
window[N("0x19")](N("0x90"), ELINA["reDraw"]);
MAMBAAPP[N("0x3b")](N("0x91"), ELINA[N("0x3b")]);

</script>

<hv-copy-modal></hv-copy-modal></body></html>