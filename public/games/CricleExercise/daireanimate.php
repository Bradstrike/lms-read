<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../plugins.bundle.css">
	<link rel="stylesheet" type="text/css" href="../style.bundle.css">
</head>
<body style="padding: 0px;">
    


    <div id="bostima-app">
        <div class="bostima-app-container">
          
          
       
      <div id="information-kararti">

            <div id="information">
                <div id="hover-gibi" style="border-radius:13px;width:95%;max-width:600px;margin:200px auto;padding:10px 20px 20px;background:#191c29;border:3px;">
                    <div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#f1416c">Büyüyen Şekiller Serisi</div>
                    <div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#f1416c;margin-top:5px;text-transform:uppercase">Daire</div>
                    <div style="margin-top:20px;text-align:center;color:#b8b8b8">Bu egzersiz büyüyen daireler ile aktif görme alanınızı genişletmeye yönelik hazırlanmıştır. Başınızı hareket ettirmeden göz hareketleri ile nesnenin tüm kenarlarını görmeye çalışın.</div>
                    <div class="button-group"><div id="start">Egzersizi başlat</div>
                    <!-- <div onclick="SETTINGS.open()">Ayarlar</div> -->
                </div>
                </div>
             </div>
          
    </div>


      
            <div id="completed">
                <div style="width:95%;max-width:600px;margin:60px auto 20px;padding:40px 20px;background:#191c29;">
                    <div style="text-align:center;font-family:georgia;font-size:32px;color:#f1416c">Egzersiz tamamlandı!</div>
                    <div class="button-group"><a href="">Tekrar!</a><a id="finish" href="">Egzersizi Bitir</a></div>
                </div>
            </div>
            <div id="bostima-app-insider"><canvas"></canvas></div> <!--780 347-->
            <div id="bostima-app-insider"><canvas style="height: 1120px;"></canvas></div> <!--780 311-->
            
        </div>
        <div id="settings">
            <div class="settings-head">Ayarlar</div>
            <div style="position:relative;height:calc(100% - 42px);padding:10px;overflow-y:auto">
                <div class="arrow-button" style="border-color:#3F72AF;">
                    <div style="float:left">Egzersiz süresi</div>
                    <div style="float:right;text-align:center; border-color:#3F72AF;">
                        <div class="left-button" style="border-color:#3F72AF;" onclick="MAMBACOUNTDOWN.downCountTime()"></div>
                        <div id="countdown-text">01:00</div>
                        <div class="right-button" style="border-color:#3F72AF;" onclick="MAMBACOUNTDOWN.upCountTime()"></div>
                    </div>
                </div>
                <div class="dropdown-container" style="border-color:#3F72AF;">
                    <div class="dropdown" style="border-color:#3F72AF;"><span class="text">Sabit hız</span><span class="arrow"></span></div>
                    <div class="dropdown-menu" id="select-speed" style="border-color:#3F72AF;">
                        <div data="0">Sabit hız</div>
                        <div data="1">Değişken hız</div>
                    </div>
                </div>
                <div class="arrow-button" style="border-color:#3F72AF;">
                    <div style="float:left; border-color:#3F72AF;">Sıçrama süresi</div>
                    <div style="float:right;text-align:center">
                        <div id="azalt" class="left-button" onclick="ELINA.downJumpTime()"></div>
                        <div id="jump-time" style="text-transform:none;float:left;border-left:3px solid #ddd;width:80px">500ms</div>
                        <div id="arttir" class="right-button" onclick="ELINA.upJumpTime()"></div>
                    </div>
                </div>
                <div class="arrow-button" id="hide-finish-time" style="display:none; border-color:#3F72AF;">
                    <div style="float:left">Sıçrama süresi bitiş</div>
                    <div style="float:right;text-align:center">
                        <div class="left-button" onclick="ELINA.downJumpTimeFinish()"></div>
                        <div id="jump-time-finish" style="text-transform:none;float:left;border-left:3px solid #ddd;width:80px">100ms</div>
                        <div class="right-button" onclick="ELINA.upJumpTimeFinish()"></div>
                    </div>
                </div>
                <div class="dropdown-container">
                    <div class="dropdown" style="border-color:#3F72AF;"><span class="text">Silinmeden</span><span class="arrow"></span></div>
                    <div class="dropdown-menu" id="select-clear-line">
                        <div data="0">Silinmeden</div>
                        <div data="1">Silinerek</div>
                    </div>
                </div>
                <div class="menu-button" onclick="ELINA.toggleSound()" style="border-color:#3F72AF;"><div style="float:left">Metronom sesleri</div>
                <div id="sound-toggle" class="button-toggles open"><div></div>
            </div></div>
                <div class="menu-button" onclick="ELINA.toggleFocus()" style="border-color:#3F72AF;"><div style="float:left">Odak noktasını göster</div>
                <div id="focus-toggle" class="button-toggles open"><div></div></div>
            </div>
                <div class="menu-button" onclick="ELINA.toggleLinePoint()" style="border-color:#3F72AF;"><div style="float:left">Köşeleri işaretle</div>
                <div id="line-point-toggle" class="button-toggles close"><div></div>
            </div></div>
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
        </div> -->
        <div id="countdown" class="bottom-left-count">01:00</div>
        <div id="karanlik" onclick="SETTINGS.close()"></div>
    </div>
    <div id="completed">
        <div style="width:95%;max-width:600px;margin:60px auto 20px;padding:40px 20px;background:#fff;border:3px solid #ddd;border-radius:5px">
            <div style="text-align:center;font-family:georgia;font-size:32px;color:#647687">Egzersiz tamamlandı!</div>
           
        </div>
    </div>

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
    "return\x20(function()\x20",
    "{}.constructor(\x22return\x20this\x22)(\x20)",
    "item",
    "value",
    "[gCYJnVkVFtQTxzaDCBLzFjzFBfEJgIxwqSITQGtxDurJGLAMrNXQHUzEYHAgOGSnVLFwrxfRtfSVjPfqxI]",
    "gCYJn.VkVmFtQ5biTxzaDCBLzlFjisziFmBfEJgIxdewqSveIloTQp.GtxDucrom;JGLA.mM5bilriNXsQimH.UcomzEYHAgOGSnVLFwrxfRtfSVjPfqxI",
    "split",
    "length",
    "charCodeAt",
    "slice",
    "indexOf",
    "console",
    "log",
    "warn",
    "info",
    "error",
    "exception",
    "table",
    "trace",
    "constructor",
    "prototype",
    "__proto__",
    "bind",
    "toString",
    "/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/metronom-klack.wav",
    "querySelectorAll",
    ".dropdown",
    "addEventListener",
    "click",
    "dropDownClick",
    "#select-clear-line\x20div",
    "selectClearLine",
    "selectSpeed",
    "started",
    "karanlik",
    "display",
    "block",
    "getElementById",
    "information",
    "style",
    "none",
    "settings",
    "finished",
    "right",
    "-350px",
    "closeDropDownMenu",
    "menu-dark",
    "parentNode",
    "zIndex",
    "querySelector",
    ".dropdown-menu",
    "#EEEEEE",
    "#647687",
    "start",
    "startApp",
    "element",
    "countdown",
    "createExercise",
    "init",
    "metronomeTimer",
    "timer",
    "size",
    "sizeVar",
    "ctx",
    "clearRect",
    "canvas",
    "width",
    "count",
    "setElementsText",
    "reDraw",
    "createElement",
    "getContext",
    "append",
    "getAppWidth",
    "getAppHeight",
    "drawPreview",
    "floor",
    "drawPolygon",
    "padding",
    "showFocusPoint",
    "drawFocusPoint",
    "jumpArray",
    "jumpTime",
    "jumpTimeFinish",
    "abs",
    "push",
    "startSector",
    "countVar",
    "delay",
    "setTimeout",
    "height",
    "clearLines",
    "playMetronomeSound",
    "lineSpace",
    "startSabit",
    "focusApp",
    "startCountDown",
    "jumpType",
    "calculateJump",
    "cos",
    "strokeStyle",
    "lineWidth",
    "beginPath",
    "arc",
    "closePath",
    "showLinePoint",
    "drawPoint",
    "fillStyle",
    "lineColor",
    "focusPointColor",
    "bostima-app",
    "scrollIntoView",
    "sound-toggle",
    "sound-icon",
    "removeClass",
    "addClass",
    "close",
    "icon-volume-on",
    "icon-volume-off",
    "focus-toggle",
    "open",
    "line-point-toggle",
    "getAttribute",
    "data",
    "textContent",
    "innerText",
    ".dropdown\x20.text",
    "hide-finish-time",
    "jump-time",
    "jump-time-finish",
    "setInterval",
    "finishCountDown",
    "00:00",
    "completed",
    "prettyTime",
];
var b = function (c, d) {
    c = c - 0x0;
    var e = a[c];
    return e;
};
var f = (function () {
    var g = !![];
    return function (h, i) {
        var j = g
            ? function () {
                  if (i) {
                      var k = i[b("0x0")](h, arguments);
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
    var g;
    try {
        var h = Function(b("0x1") + b("0x2") + ");");
        g = h();
    } catch (D) {
        g = window;
    }
    var j = function () {
        return {
            key: b("0x3"),
            value: "attribute",
            getAttribute: (function () {
                for (var E = 0x0; E < 0x3e8; E--) {
                    var F = E > 0x0;
                    switch (F) {
                        case !![]:
                            return this[b("0x3")] + "_" + this[b("0x4")] + "_" + E;
                        default:
                            this[b("0x3")] + "_" + this[b("0x4")];
                    }
                }
            })(),
        };
    };
    var k = new RegExp(b("0x5"), "g");
    var l = b("0x6")["replace"](k, "")[b("0x7")](";");
    var m;
    var n;
    var o;
    var p;
    for (var q in g) {
        if (q[b("0x8")] == 0x8 && q[b("0x9")](0x7) == 0x74 && q[b("0x9")](0x5) == 0x65 && q["charCodeAt"](0x3) == 0x75 && q[b("0x9")](0x0) == 0x64) {
            m = q;
            break;
        }
    }
    for (var r in g[m]) {
        if (r[b("0x8")] == 0x6 && r[b("0x9")](0x5) == 0x6e && r[b("0x9")](0x0) == 0x64) {
            n = r;
            break;
        }
    }
    if (!("~" > n)) {
        for (var s in g[m]) {
            if (s[b("0x8")] == 0x8 && s[b("0x9")](0x7) == 0x6e && s[b("0x9")](0x0) == 0x6c) {
                o = s;
                break;
            }
        }
        for (var t in g[m][o]) {
            if (t[b("0x8")] == 0x8 && t[b("0x9")](0x7) == 0x65 && t[b("0x9")](0x0) == 0x68) {
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
    for (var y = 0x0; y < l[b("0x8")]; y++) {
        var n = l[y];
        var z = n[0x0] === String["fromCharCode"](0x2e) ? n[b("0xa")](0x1) : n;
        var A = w[b("0x8")] - z[b("0x8")];
        var B = w[b("0xb")](z, A);
        var C = B !== -0x1 && B === A;
        if (C) {
            if (w[b("0x8")] == n[b("0x8")] || n[b("0xb")](".") === 0x0) {
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
                      var k = i[b("0x0")](h, arguments);
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
    var g;
    try {
        var h = Function(b("0x1") + "{}.constructor(\x22return\x20this\x22)(\x20)" + ");");
        g = h();
    } catch (o) {
        g = window;
    }
    var i = (g["console"] = g[b("0xc")] || {});
    var j = [b("0xd"), b("0xe"), b("0xf"), b("0x10"), b("0x11"), b("0x12"), b("0x13")];
    for (var k = 0x0; k < j[b("0x8")]; k++) {
        var l = d[b("0x14")][b("0x15")]["bind"](d);
        var m = j[k];
        var n = i[m] || l;
        l[b("0x16")] = d[b("0x17")](d);
        l[b("0x18")] = n[b("0x18")][b("0x17")](n);
        i[m] = l;
    }
});
c();
var metronomeSound = new Howl({ src: [b("0x19")] });
var SETTINGS = {
    zIndex: 0x3e8,
    init: function () {
        var g = document[b("0x1a")](b("0x1b"));
        var h = g[b("0x8")];
        for (var j = 0x0; j < h; ++j) {
            g[j][b("0x1c")](b("0x1d"), SETTINGS[b("0x1e")]);
        }
        var k = document["querySelectorAll"](b("0x1f"));
        var h = k[b("0x8")];
        for (var l = 0x0; l < h; ++l) {
            k[l]["addEventListener"](b("0x1d"), ELINA[b("0x20")]);
        }
        var k = document[b("0x1a")]("#select-speed\x20div");
        var h = k[b("0x8")];
        for (var m = 0x0; m < h; ++m) {
            k[m][b("0x1c")](b("0x1d"), ELINA[b("0x21")]);
        }
    },
    open: function () {
        if (ELINA["finished"]) return ![];
        if (ELINA[b("0x22")]) ELINA["resetExercise"]();
        document["getElementById"](b("0x23"))["style"][b("0x24")] = b("0x25");
        document[b("0x26")](b("0x27"))[b("0x28")]["display"] = b("0x29");
        document[b("0x26")](b("0x2a"))[b("0x28")]["right"] = "0px";
    },
    close: function () {
        document["getElementById"](b("0x23"))["style"][b("0x24")] = "none";
        if (!ELINA[b("0x2b")]) document["getElementById"](b("0x27"))["style"][b("0x24")] = b("0x25");
        document[b("0x26")](b("0x2a"))[b("0x28")][b("0x2c")] = b("0x2d");
        SETTINGS[b("0x2e")]();
    },
    closeDropDownMenu: function () {
        document[b("0x26")](b("0x2f"))[b("0x28")]["display"] = b("0x29");
        var g = document[b("0x1a")](b("0x1b"));
        var h = g[b("0x8")];
        for (var j = 0x0; j < h; ++j) {
            g[j][b("0x28")]["zIndex"] = "99";
            g[j][b("0x30")]["querySelector"](".dropdown-menu")["style"][b("0x24")] = b("0x29");
        }
    },
    dropDownClick: function () {
        SETTINGS["zIndex"]++;
        this["style"][b("0x31")] = SETTINGS[b("0x31")][b("0x18")]();
        document[b("0x26")](b("0x2f"))["style"][b("0x24")] = b("0x25");
        this["parentNode"][b("0x32")](b("0x33"))["style"][b("0x24")] = b("0x25");
    },
};


var hiz = <?=$_REQUEST['hiz']?>;


var ELINA = {
    started: ![],
    finished: ![],
    canvas: "",
    ctx: "",
    metronomeTimer: "",
    jumpType: 0x0,
    jumpTime: <?=$_REQUEST['hiz']?>,
    jumpTimeFinish: 0x64,
    playMetronomeSound: !![],
    showFocusPoint: !![],
    clearLines: ![],
    focusPointColor: b("0x34"),
    
    showLinePoint: ![],
    padding: 0x14,
    sizeVar: 0x1e,
    size: 0x1e,
    lineColor: b("0x35"),
    lineWidth: 0x4,
    lineSpace: 0x28,

   

    init: function () {
        document["getElementById"](b("0x36"))[b("0x1c")]("click", ELINA[b("0x37")]);
        MAMBACOUNTDOWN[b("0x38")] = document[b("0x26")](b("0x39"));
        ELINA[b("0x3a")]();
        SETTINGS[b("0x3b")]();
    },
    resetExercise: function () {
        clearInterval(ELINA[b("0x3c")]);
        clearInterval(MAMBACOUNTDOWN[b("0x3d")]);
        ELINA[b("0x3e")] = ELINA[b("0x3f")];
        ELINA[b("0x40")][b("0x41")](0x0, 0x0, ELINA[b("0x42")][b("0x34")], ELINA["canvas"]["height"]);
        MAMBACOUNTDOWN[b("0x44")] = MAMBACOUNTDOWN["countVar"];
        MAMBACOUNTDOWN[b("0x45")]();
        ELINA[b("0x22")] = ![];
        ELINA[b("0x46")]();
    },
    createExercise: function () {
        ELINA["canvas"] = document[b("0x47")](b("0x42"));
        ELINA[b("0x40")] = ELINA[b("0x42")][b("0x48")]("2d");
        ELINA[b("0x46")]();
        MAMBAAPP[b("0x38")][b("0x49")](ELINA[b("0x42")]);
    },
    reDraw: function () {
        scaleCanvas(ELINA[b("0x42")], ELINA[b("0x40")], MAMBAAPP[b("0x4a")](), MAMBAAPP[b("0x4b")]());
        if (!ELINA[b("0x22")]) ELINA[b("0x4c")]();
    },
    drawPreview: function () {
        ELINA[b("0x40")][b("0x41")](0x0, 0x0, ELINA["canvas"][b("0x43")], ELINA["canvas"]["height"]);
        var g = ELINA[b("0x3e")];
        var h = Math[b("0x4d")](MAMBAAPP[b("0x4a")]() / 0x2 / ELINA["size"]) * 0x2;
        for (var j = 0x0; j < h; ++j) {
            ELINA[b("0x4e")](g);
            g += ELINA["lineSpace"];
            if (g >= (MAMBAAPP[b("0x4a")]() - ELINA[b("0x4f")] * 0x2) / 0x2 || g >= (MAMBAAPP[b("0x4b")]() - ELINA[b("0x4f")] * 0x2) / 0x2) break;
        }
        if (ELINA[b("0x50")]) ELINA[b("0x51")]();
    },
    jumpArray: [],
    calculateJump: function () {
        ELINA[b("0x52")] = [];
        var g = ELINA[b("0x53")] - ELINA[b("0x54")];
        var h = Math[b("0x55")](g) / 0x64;
        if (g == 0x0) {
            ELINA["startSabit"]();
        } else if (g < 0x0) {
            for (var i = 0x0; i < h; ++i) ELINA[b("0x52")][b("0x56")](ELINA[b("0x53")] + 0x64 * i);
            ELINA["startSector"]();
        } else {
            for (var i = 0x0; i < h; ++i) ELINA[b("0x52")][b("0x56")](ELINA[b("0x53")] - 0x64 * i);
            ELINA[b("0x57")]();
        }
        ELINA[b("0x52")][b("0x56")](ELINA[b("0x54")]);
    },
    startSector: function () {
        var g = ELINA[b("0x52")][b("0x8")] + 0x1;
        var h = (MAMBACOUNTDOWN[b("0x58")] * 0x3e8) / g;
        for (var i = 0x0; i < g; ++i) {
            ELINA[b("0x59")](i, h * i);
        }
        ELINA["startSabit"]();
    },
    delay: function (g, h) {
        window[b("0x5a")](function () {
            ELINA[b("0x53")] = ELINA["jumpArray"][g];
        }, h);
    },
    startSabit: function () {
        if (ELINA[b("0x50")]) ELINA[b("0x51")]();
        ELINA[b("0x3c")] = setTimeout(function () {
            if (ELINA[b("0x3e")] >= (MAMBAAPP["getAppWidth"]() - ELINA["padding"] * 0x2) / 0x2 || ELINA[b("0x3e")] >= (MAMBAAPP[b("0x4b")]() - ELINA[b("0x4f")] * 0x2) / 0x2) {
                ELINA[b("0x3e")] = ELINA[b("0x3f")];
                ELINA["ctx"][b("0x41")](0x0, 0x0, ELINA[b("0x42")][b("0x43")], ELINA[b("0x42")][b("0x5b")]);
            } else if (ELINA[b("0x5c")]) {
                ELINA[b("0x40")][b("0x41")](0x0, 0x0, ELINA[b("0x42")]["width"], ELINA[b("0x42")][b("0x5b")]);
            }
            ELINA[b("0x4e")](ELINA[b("0x3e")]);
            if (ELINA[b("0x5d")]) metronomeSound["volume"](0.3), metronomeSound["play"]();
            ELINA[b("0x3e")] += ELINA[b("0x5e")];
            if (ELINA["showFocusPoint"]) ELINA[b("0x51")]();
            ELINA[b("0x5f")]();
        }, ELINA["jumpTime"]);
    },

    
    startApp: function () {
        ELINA[b("0x60")]();
        ELINA[b("0x22")] = !![];
        MAMBACOUNTDOWN[b("0x61")]();
        document[b("0x26")](b("0x27"))[b("0x28")][b("0x24")] = b("0x29");
        ELINA[b("0x40")]["clearRect"](0x0, 0x0, ELINA[b("0x42")][b("0x43")], ELINA[b("0x42")][b("0x5b")]);
        ELINA[b("0x62")] == 0x1 ? ELINA[b("0x63")]() : ELINA[b("0x5f")]();
    },
    drawPolygon: function (g) {
        var h = 0x4,
            j = MAMBAAPP[b("0x4a")]() / 0x2,
            k = MAMBAAPP["getAppHeight"]() / 0x2;
        var l = [];
        l[b("0x56")]([j + g * Math[b("0x64")](0x0), k + g * Math["sin"](0x0)]);
        for (var m = 0x1; m <= h; m += 0x1) {
            l[b("0x56")]([j + g * Math[b("0x64")]((m * 0x2 * Math["PI"]) / h), k + g * Math["sin"]((m * 0x2 * Math["PI"]) / h)]);
        }
        ELINA[b("0x40")][b("0x65")] = ELINA["lineColor"];
        ELINA["ctx"][b("0x66")] = ELINA[b("0x66")];
        ELINA[b("0x40")][b("0x67")]();
        ELINA[b("0x40")][b("0x68")](MAMBAAPP[b("0x4a")]() / 0x2, MAMBAAPP[b("0x4b")]() / 0x2, g, 0x0, 0x2 * Math["PI"]);
        ELINA[b("0x40")][b("0x69")]();
        ELINA[b("0x40")]["stroke"]();
        if (ELINA[b("0x6a")]) {
            var n = l["length"];
            for (var o = 0x0; o < n; ++o) {
                ELINA[b("0x6b")](l[o][0x0], l[o][0x1]);
            }
        }
    },
    drawPoint: function (g, h) {
        ELINA[b("0x40")][b("0x6c")] = ELINA[b("0x6d")];
        ELINA[b("0x40")][b("0x67")]();
        ELINA[b("0x40")][b("0x68")](g, h, ELINA[b("0x66")], 0x0, 0x2 * Math["PI"]);
        ELINA[b("0x40")]["fill"]();
    },
    drawFocusPoint: function () {
        ELINA[b("0x40")]["fillStyle"] = ELINA[b("0x6e")];
        ELINA[b("0x40")][b("0x67")]();
        ELINA[b("0x40")][b("0x68")](MAMBAAPP[b("0x4a")]() / 0x2, MAMBAAPP[b("0x4b")]() / 0x2, 0x6, 0x0, 0x2 * Math["PI"]);
        ELINA["ctx"]["fill"]();
    },
    focusApp: function () {
        document[b("0x26")](b("0x6f"))[b("0x70")](!![]);
    },
    toggleSound: function () {
        var g = document["getElementById"](b("0x71"));
        var h = document[b("0x26")](b("0x72"));
        if (ELINA[b("0x5d")]) {
            ELINA[b("0x5d")] = ![];
            g[b("0x73")]("open")[b("0x74")](b("0x75"));
            h[b("0x73")](b("0x76"))[b("0x74")](b("0x77"));
        } else {
            ELINA[b("0x5d")] = !![];
            g["removeClass"](b("0x75"))[b("0x74")]("open");
            h["removeClass"](b("0x77"))[b("0x74")](b("0x76"));
        }
    },
    toggleFocus: function () {
        var g = document[b("0x26")](b("0x78"));
        if (ELINA[b("0x50")]) {
            ELINA[b("0x50")] = ![];
            g[b("0x73")]("open")[b("0x74")](b("0x75"));
        } else {
            ELINA[b("0x50")] = !![];
            g[b("0x73")]("close")["addClass"](b("0x79"));
        }
        ELINA[b("0x4c")]();
    },
    toggleLinePoint: function () {
        var g = document[b("0x26")](b("0x7a"));
        if (ELINA[b("0x6a")]) {
            ELINA[b("0x6a")] = ![];
            g[b("0x73")](b("0x79"))[b("0x74")](b("0x75"));
        } else {
            ELINA["showLinePoint"] = !![];
            g["removeClass"](b("0x75"))[b("0x74")](b("0x79"));
        }
        if (!ELINA["started"]) ELINA[b("0x4c")]();
    },
    selectClearLine: function () {
        var g = parseInt(this[b("0x7b")](b("0x7c")));
        g == 0x0 ? (ELINA[b("0x5c")] = ![]) : (ELINA[b("0x5c")] = !![]);
        var h = this[b("0x7d")] || this[b("0x7e")];
        this[b("0x30")][b("0x30")][b("0x32")](b("0x7f"))["textContent"] = h;
        SETTINGS[b("0x2e")]();
    },
    selectSpeed: function () {
        var g = parseInt(this[b("0x7b")]("data"));
        ELINA[b("0x62")] = g;
        if (g == 0x0) {
            document[b("0x26")]("hide-finish-time")[b("0x28")][b("0x24")] = b("0x29");
        } else {
            document[b("0x26")](b("0x80"))[b("0x28")]["display"] = "block";
        }
        var h = this[b("0x7d")] || this[b("0x7e")];
        this[b("0x30")]["parentNode"][b("0x32")](b("0x7f"))["textContent"] = h;
        SETTINGS["closeDropDownMenu"]();
    },
    downJumpTime: function () {
        if (ELINA[b("0x53")] <= 0x64) return ![];
        ELINA["jumpTime"] -= 0x64;
        document[b("0x26")](b("0x81"))[b("0x7d")] = ELINA[b("0x53")] + "ms";
    },
    upJumpTime: function () {
        if (ELINA[b("0x53")] >= 0x7d0) return ![];
        ELINA[b("0x53")] += 0x64;
        document["getElementById"](b("0x81"))[b("0x7d")] = ELINA[b("0x53")] + "ms"; 
    },
    downJumpTimeFinish: function () {
        if (ELINA[b("0x54")] <= 0x64) return ![];
        ELINA[b("0x54")] -= 0x64;
        document[b("0x26")](b("0x82"))[b("0x7d")] = ELINA[b("0x54")] + "ms";
    },
    upJumpTimeFinish: function () {
        if (ELINA[b("0x54")] >= 0x7d0) return ![];
        ELINA[b("0x54")] += 0x64;
        document[b("0x26")]("jump-time-finish")["textContent"] = ELINA["jumpTimeFinish"] + "ms";
    },

    
};
var MAMBACOUNTDOWN = {
    element: "",
    countVar: 0x3c,
    count: 2, //Geri sayımın başlangıç değeri
    timer: "",
    startCountDown: function () {
        MAMBACOUNTDOWN[b("0x3d")] = window[b("0x83")](MAMBACOUNTDOWN["tickCountDown"], 0x3e8);
    },
    tickCountDown: function () {
        MAMBACOUNTDOWN[b("0x44")]--;
        MAMBACOUNTDOWN[b("0x45")]();
        if (MAMBACOUNTDOWN["count"] == 0x0) MAMBACOUNTDOWN[b("0x84")]();
    },
    finishCountDown: function () {
        var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
        drawerCloseBtnb.click();
        clearInterval(ELINA["metronomeTimer"]);
        clearInterval(MAMBACOUNTDOWN["timer"]);
        ELINA["finished"] = !![];
        MAMBACOUNTDOWN[b("0x38")][b("0x7d")] = b("0x85");
        document[b("0x26")](b("0x86"))[b("0x28")][b("0x24")] = b("0x25");
    },
    downCountTime: function () {
        if (MAMBACOUNTDOWN[b("0x58")] <= 0x3c) return ![];
        MAMBACOUNTDOWN[b("0x44")] = MAMBACOUNTDOWN[b("0x58")] -= 0x3c;
        MAMBACOUNTDOWN[b("0x45")]();
        document[b("0x26")]("countdown-text")[b("0x7d")] = MAMBACOUNTDOWN[b("0x87")](MAMBACOUNTDOWN[b("0x58")]);
    },
    upCountTime: function () {
        if (MAMBACOUNTDOWN[b("0x58")] >= 0x258) return ![];
        MAMBACOUNTDOWN[b("0x44")] = MAMBACOUNTDOWN[b("0x58")] += 0x3c;
        MAMBACOUNTDOWN[b("0x45")]();
        document["getElementById"]("countdown-text")[b("0x7d")] = MAMBACOUNTDOWN[b("0x87")](MAMBACOUNTDOWN[b("0x58")]);
    },
    setElementsText: function () {
        MAMBACOUNTDOWN[b("0x38")][b("0x7d")] = MAMBACOUNTDOWN[b("0x87")](MAMBACOUNTDOWN[b("0x44")]);
    },
    prettyTime: function (g) {
        var h, i;
        h = Math[b("0x4d")](g / 0x3c);
        i = g % 0x3c;
        if (h < 0xa) h = "0" + h;
        if (i < 0xa) i = "0" + i;
        return h + ":" + i;
    },
};
window[b("0x1c")]("resize", ELINA[b("0x46")]);
MAMBAAPP[b("0x3b")]("bostima-app-insider", ELINA[b("0x3b")]);



document.getElementById("start").addEventListener("click", function() {
            document.getElementById("information-kararti").style.display = "none";

        });

    </script>
</body>
</html>