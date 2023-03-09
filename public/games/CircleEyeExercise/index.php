<?php 
require __DIR__.'/../../../vendor/autoload.php';

    $app = require __DIR__ . '/../../../bootstrap/app.php';
?>
<!DOCTYPE html data-theme="light">
<html lang="tr">
    <head>
        <meta charset="UTF-8" />
        <title>PONTE: Dairesel Göz Egzersizi</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <style>
            #settings {
                position: absolute;
                top: 5px;
                bottom: 5px;
                right: -350px;
                width: 350px;
                background: #fff;
                border: 3px solid #ddd;
                border-right: none;
                border-radius: 5px 0 0 5px;
                transition: all 0.3s ease;
                z-index: 9999;
            }
            .menu-button {
                cursor: pointer;
                position: relative;
                height: 38px;
                line-height: 32px;
                font-weight: bold;
                border: 3px solid #ddd;
                border-radius: 5px;
                padding-left: 10px;
                background: #fff;
                font-size: 13px;
                color: #888;
                margin-bottom: 10px;
                text-transform: uppercase;
                transition: all 0.3s ease;
            }
            .menu-button:hover {
                background-color: #f6f6f6;
            }
            .arrow-button {
                cursor: default;
                position: relative;
                height: 38px;
                line-height: 32px;
                font-weight: bold;
                border: 3px solid #ddd;
                border-radius: 5px;
                padding-left: 10px;
                background: #fff;
                font-size: 13px;
                color: #888;
                margin-bottom: 10px;
                text-transform: uppercase;
                transition: all 0.3s ease;
            }
            .button-toggles {
                cursor: pointer;
                position: relative;
                float: right;
                width: 40px;
                height: 20px;
                border-radius: 10px;
                margin-top: 6px;
                margin-right: 6px;
            }
            .button-toggles.open {
                background: #c5d0c2;
            }
            .button-toggles.close {
                background: #d6c9ca;
            }
            .button-toggles div {
                position: absolute;
                width: 16px;
                height: 16px;
                top: 2px;
                border-radius: 8px;
            }
            .button-toggles.open div {
                right: 2px;
                background: #6c8865;
            }
            .button-toggles.close div {
                left: 2px;
                background: #97777a;
            }

            .add-button,
            .remove-button,
            .left-button,
            .right-button {
                cursor: pointer;
                float: left;
                border-left: 3px solid #ddd;
                height: 32px;
                width: 33px;
                background: center center no-repeat;
                background-size: 70%;
            }
            .add-button {
                background-image: url(add.svg);
            }
            .remove-button {
                background-image: url(remove.svg);
            }
            .left-button {
                background-image: url(/tr/on-parmak/hedefli-klavye-calismasi/double-arrow-l.svg);
            }
            .right-button {
                background-image: url(/tr/on-parmak/hedefli-klavye-calismasi/double-arrow-r.svg);
            }
            .add-button:hover,
            .remove-button:hover,
            .left-button:hover,
            .right-button:hover {
                background-color: #f6f6f6;
            }

            .iconic {
                height: 20px;
                width: 20px;
                background: center center no-repeat;
                background-size: 100%;
                margin: 4px;
            }
            .icon-volume-on {
                background-image: url(/tr/on-parmak/hedefli-klavye-calismasi/volume-on.svg);
            }
            .icon-volume-off {
                background-image: url(/tr/on-parmak/hedefli-klavye-calismasi/volume-off.svg);
            }

            /* BUTTON STYLE */
            .button-6 {
                align-items: center;
                background-color: #ffffff;
                border: 1px solid rgba(0, 0, 0, 0.1);
                border-radius: 0.25rem;
                box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
                box-sizing: border-box;
                color: rgba(0, 0, 0, 0.85);
                cursor: pointer;
                display: inline-flex;
                font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-size: 16px;
                font-weight: 600;
                justify-content: center;
                line-height: 1.25;
                margin: 0;
                min-height: 3rem;
                padding: calc(0.875rem - 1px) calc(1.5rem - 1px);
                position: relative;
                text-decoration: none;
                transition: all 250ms;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                vertical-align: baseline;
                width: auto;
            }

            .button-6:hover,
            .button-6:focus {
                border-color: rgba(0, 0, 0, 0.15);
                box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
                color: rgba(0, 0, 0, 0.65);
            }

            .button-6:hover {
                transform: translateY(-1px);
            }

            .button-6:active {
                background-color: #f0f0f1;
                border-color: rgba(0, 0, 0, 0.15);
                box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
                color: rgba(0, 0, 0, 0.65);
                transform: translateY(0);
            }
        </style>
    </head>
    <body>
        <div class="tum-sayfa">
            <div id="bostima-app">
                <div id="settings">
                    <div style="padding: 10px; overflow-y: auto;">
                        <div class="arrow-button">
                            <div style="float: left;">Egzersiz süresi</div>
                            <div style="float: right; text-align: center;">
                                <div class="left-button" onclick="MAMBACOUNTDOWN.downCountTime()"></div>
                                <div id="countdown-text" style="float: left; border-left: 3px solid #ddd; width: 80px;">01:00</div>
                                <div class="right-button" onclick="MAMBACOUNTDOWN.upCountTime()"></div>
                            </div>
                        </div>
                        <div class="arrow-button">
                            <div style="float: left;">Takip hızı</div>
                            <div style="float: right; text-align: center;">
                                <div id="azalt" class="left-button" onclick="PONTE.downSpeed()"></div>
                                <div id="speed-text" style="text-transform: none; float: left; border-left: 3px solid #ddd; width: 80px;">10</div>
                                <div id="arttir" class="right-button" onclick="PONTE.upSpeed()"></div>
                            </div>
                        </div>
                        <div class="menu-button" onclick="PONTE.toggleSound()">
                            <div style="float: left;">Metronom sesleri</div>
                            <div id="sound-toggle" class="button-toggles open"><div></div></div>
                        </div>
                        <div class="menu-button" onclick="PONTE.toggleFocus()">
                            <div style="float: left;">Odak noktasını göster</div>
                            <div id="focus-toggle" class="button-toggles open"><div></div></div>
                        </div>
                    </div>
                </div>
                <div class="bostima-container" style="width: 760px; height: 950px; padding-left: 25%;">
                    <style>
                        #information,
                        #completed {
                            position: absolute;
                            top: 0;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            background: rgba(0, 0, 0, 0.2);
                            z-index: 9996;
                        }
                        #completed {
                            display: none;
                        }
                        .button-group {
                            text-align: center;
                            margin-top: 20px;
                        }
                        .button-group div,
                        .button-group a {
                            display: inline-block;
                            cursor: pointer;
                            height: 40px;
                            line-height: 38px;
                            color: white;
                            text-align: center;
                            font-size: 14px;
                            padding: 0 20px;
                            margin: 0 3px;
                            border-radius: 2px;
                            text-transform: uppercase;
                        }
                        .button {
                            cursor: pointer;
                            width: 34px;
                            height: 34px;
                            position: absolute;
                            border: 3px solid #ddd;
                            border-radius: 5px;
                            transition: all 0.3s ease;
                            background: #fff;
                        }
                        #information-kararti {
                            height: 100%;
                            width: 100%;
                            background-color: #f5f8fa;
                        }
                        #start {
                            background-color: #009ef7;
                        }
                    </style>
                    <div id="information" class="button-6" style="padding-top: 8%;">
                        <div
                            style="
                                width: 95%;
                                max-width: 600px;
                                padding: 10px 10px 10px;
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                margin-top: -50px;
                                margin-left: -280px;
                                background-color: #533483;
                                background-image: url(vector-1.png);
                                border-radius: 5px;
                            "
                        >
                            <div style="text-align: center; font-family: tahoma; font-size: 18px; font-weight: bold; color: #dbdbdb;">Dairesel Göz Takip Egzersizi</div>
                            <div style="margin-top: 20px; text-align: center; color: #c0c0c0;">Şekil üzerinde hareket eden nesneyi göz hareketleri ile takip edin. Takip baş hareket ettirilmeden, göz hareketleri yapılmalıdır.</div>
                            <div class="button-group"><div id="start">Egzersizi başlat</div></div>
                        </div>
                    </div>
                    <div id="completed">
                        <div class="doldurulacak" style="max-width: 600px; margin: 60px auto 20px; padding: 40px 20px; border: 3px; border-radius: 5px;">
                            <div style="text-align: center; font-family: georgia; font-size: 32px; color: #ffffff;">Egzersiz tamamlandı!</div>
                            <!-- <div class="button-group">
                                <a href="">Tekrar!</a>
                            </div> -->
                            <div class="button-group">
                                <a id="finish" href="">Egzersizi bitir</a>
                            </div>
                        </div>
                    </div>
                    <div id="bostima-app-insider" style="position: relative; background: none; width: 100%; height: 100%;">
                        <canvas width="780" height="929" style="position: absolute; z-index: 998;"></canvas><canvas width="780" height="929" style="position: absolute; z-index: 999;"></canvas>
                    </div>
                </div>
                <div class="button" onclick="focusApp()" style="top: 10px; left: 10px; display: none;">
                    <div class="icon-settings" style="height: 24px; width: 24px; background: url(/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/vertical-align.svg) center center no-repeat; background-size: 100%; margin: 2px;"></div>
                </div>
                 <!-- <div class="button" onclick="openSettings();" style="top:10px;right:10px">
            <div class="icon-settings" style="height:20px;width:20px;background:url(/tr/on-parmak/hedefli-klavye-calismasi/settings.svg) center center no-repeat;background-size:100%;margin:4px"></div>
        </div>  -->
        <div class="button" onclick="PONTE.toggleSound()" style="top:48px;right:10px; display: none;">
            <div id="sound-icon" class="iconic icon-volume-on"></div>
        </div>
        <div id="countdown">01:00</div>
        <div id="karanlik" onclick="closeSettings()"></div>
            </div>
            <script>
				$("#finish").click(function() {
                    $("#okke").click();
				});
			</script>
            <script>
                document.getElementById("start").addEventListener("click", function () {
                    document.getElementById("information-kararti").style.display = "none";
                });

                function closeSettings() {
                    document.getElementById("karanlik").style.display = "none";
                    document.getElementById("settings").style.display = "none";
                }
            </script>
            <div class="footer">
                <br />
            </div>
            <script type="text/javascript" src="howler.min.js"></script>
            <script>
                var a = [
                    "../elina-kum-saati-egzersizi/metronom-klack.wav",
                    "finished",
                    "resetExercise",
                    "getElementById",
                    "karanlik",
                    "style",
                    "display",
                    "block",
                    "information",
                    "none",
                    "settings",
                    "bostima-app",
                    "scrollIntoView",
                    "right",
                    "element",
                    "countdown",
                    "addEventListener",
                    "click",
                    "startApp",
                    "createExercise",
                    "timer",
                    "staticCtx",
                    "clearRect",
                    "canvas",
                    "width",
                    "height",
                    "ctx",
                    "count",
                    "countVar",
                    "started",
                    "reDraw",
                    "staticCanvas",
                    "createElement",
                    "getContext",
                    "append",
                    "focusCoordinates",
                    "getAppHeight",
                    "log",
                    "calculateCoordinates",
                    "getAppWidth",
                    "position",
                    "zIndex",
                    "998",
                    "999",
                    "strokeStyle",
                    "#aaa",
                    "lineWidth",
                    "moveTo",
                    "bezierCurveTo",
                    "push",
                    "stroke",
                    "fillStyle",
                    "#f6f6f6",
                    "beginPath",
                    "arc",
                    "fill",
                    "drawFocusPoint",
                    "drawCircle",
                    "startCountDown",
                    "metronomeTimer",
                    "requestAnimationFrame",
                    "renderCanvas",
                    "speed",
                    "min",
                    "max",
                    "length",
                    "play",
                    "playMetronomeSound",
                    "showFocusPoint",
                    "#cccccc",
                    "sound-toggle",
                    "sound-icon",
                    "open",
                    "addClass",
                    "close",
                    "removeClass",
                    "icon-volume-on",
                    "icon-volume-off",
                    "speed-text",
                    "textContent",
                    "focus-toggle",
                    "pow",
                    "setInterval",
                    "tickCountDown",
                    "finishCountDown",
                    "cancelAnimationFrame",
                    "00:00",
                    "completed",
                    "countdown-text",
                    "prettyTime",
                    "setElementsText",
                    "floor",
                    "random",
                    "apply",
                    "return\x20(function()\x20",
                    "{}.constructor(\x22return\x20this\x22)(\x20)",
                    "item",
                    "attribute",
                    "value",
                    "charCodeAt",
                    "fromCharCode",
                    "indexOf",
                    "console",
                    "warn",
                    "info",
                    "error",
                    "exception",
                    "table",
                    "trace",
                    "prototype",
                    "bind",
                    "__proto__",
                    "toString",
                    "getBoundingClientRect",
                    "resize",
                    "classList",
                    "className",
                    "add",
                    "hasClass",
                    "split",
                    "join",
                    "remove",
                    "splice",
                    "init",
                    "bostima-app-insider",
                ];
                var b = function (c, d) {
                    c = c - 0x0;
                    var e = a[c];
                    return e;
                };
                var metronomeSound = new Howl({ src: [b("0x0")] });
                function openSettings() {
                    if (PONTE[b("0x1")]) return ![];
                    PONTE[b("0x2")]();
                    document[b("0x3")](b("0x4"))[b("0x5")][b("0x6")] = b("0x7");
                    document[b("0x3")](b("0x8"))[b("0x5")][b("0x6")] = b("0x9");
                    var c = document[b("0x3")](b("0xa"));
                    c[b("0x5")]["right"] = "0px";
                }
                function focusApp() {
                    document[b("0x3")](b("0xb"))[b("0xc")](!![]);
                }
                function closeSettings() {
                    document[b("0x3")](b("0x4"))[b("0x5")]["display"] = b("0x9");
                    if (!PONTE["finished"]) document[b("0x3")](b("0x8"))[b("0x5")][b("0x6")] = b("0x7");
                    var c = document[b("0x3")](b("0xa"));
                    c[b("0x5")][b("0xd")] = "-350px";
                }
                var hiz = <?=$_REQUEST['hiz']?>;
                var hizli = hiz;
                var ikiNoktaArasi = 0x0;
                var PONTE = {
                    staticCanvas: "",
                    staticCtx: "",
                    canvas: "",
                    ctx: "",
                    paddingTopBottom: 0x1e,
                    paddingLeftRight: 0x50,
                    metronomeTimer: "",
                    metronomeTick: 0x1f4,
                    playMetronomeSound: !![],
                    showFocusPoint: !![],
                    started: ![],
                    finished: ![],
                    speed: hizli,    // default speed 0.01
                    pointCoordinates: [],
                    focusCoordinates: [],
                    init: function () {
                        MAMBACOUNTDOWN[b("0xe")] = document["getElementById"](b("0xf"));
                        document[b("0x3")]("start")[b("0x10")](b("0x11"), PONTE[b("0x12")]);
                        PONTE[b("0x13")]();
                    },
                    resetExercise: function () {
                        clearInterval(MAMBACOUNTDOWN[b("0x14")]);
                        window["cancelAnimationFrame"](PONTE["metronomeTimer"]);
                        PONTE[b("0x15")][b("0x16")](0x0, 0x0, PONTE[b("0x17")][b("0x18")], PONTE[b("0x17")][b("0x19")]);
                        PONTE[b("0x1a")][b("0x16")](0x0, 0x0, PONTE[b("0x17")]["width"], PONTE[b("0x17")][b("0x19")]);
                        sayac = 0x0;
                        carpan = 0x1;
                        clock = !![];
                        points = [];
                        activePoints = 0x0;
                        MAMBACOUNTDOWN[b("0x1b")] = MAMBACOUNTDOWN[b("0x1c")];
                        MAMBACOUNTDOWN["setElementsText"]();
                        PONTE[b("0x1d")] = ![];
                        PONTE[b("0x1e")]();
                    },
                    createExercise: function () {
                        PONTE[b("0x1f")] = document[b("0x20")](b("0x17"));
                        PONTE[b("0x15")] = PONTE[b("0x1f")][b("0x21")]("2d");
                        PONTE["canvas"] = document[b("0x20")](b("0x17"));
                        PONTE[b("0x1a")] = PONTE[b("0x17")][b("0x21")]("2d");
                        PONTE[b("0x1e")]();
                        MAMBAAPP[b("0xe")][b("0x22")](PONTE[b("0x1f")]);
                        MAMBAAPP[b("0xe")][b("0x22")](PONTE[b("0x17")]);
                    },
                    calculateCoordinates: function () {
                        PONTE[b("0x23")] = [];
                        var c = MAMBAAPP[b("0x24")]() / 0x5;
                        ikiNoktaArasi = c / 0x2;
                        for (var d = 0x1; d < 0x5; ++d) {
                            PONTE[b("0x23")]["push"](c * d);
                        }
                        console[b("0x25")](PONTE[b("0x23")]);
                    },
                    reDraw: function () {
                        points = [];
                        PONTE[b("0x26")]();
                        PONTE[b("0x1f")][b("0x18")] = PONTE[b("0x17")]["width"] = MAMBAAPP[b("0x27")]();
                        PONTE["staticCanvas"][b("0x19")] = PONTE[b("0x17")]["height"] = MAMBAAPP[b("0x24")]();
                        PONTE[b("0x1f")][b("0x5")][b("0x28")] = PONTE["canvas"][b("0x5")][b("0x28")] = "absolute";
                        PONTE[b("0x1f")]["style"][b("0x29")] = b("0x2a");
                        PONTE[b("0x17")][b("0x5")][b("0x29")] = b("0x2b");
                        PONTE[b("0x15")][b("0x16")](0x0, 0x0, PONTE[b("0x17")][b("0x18")], PONTE[b("0x17")][b("0x19")]);
                        var c = PONTE["canvas"][b("0x18")] / 0x2;
                        var d = PONTE[b("0x17")][b("0x18")] / 2.5;
                        var e = ikiNoktaArasi;
                        PONTE[b("0x15")][b("0x2c")] = b("0x2d");
                        PONTE[b("0x15")][b("0x2e")] = 0x4;
                        PONTE[b("0x15")]["beginPath"]();
                        var f = { x: c + d - d / 0x2, y: ikiNoktaArasi - 0x14 };
                        var g = { x: c - d + d / 0x2, y: PONTE[b("0x23")][0x3] + ikiNoktaArasi + 0x14 };
                        var h = c + -0x1 * d;
                        var i = c + d;
                        PONTE[b("0x15")][b("0x2f")](f["x"], f["y"]);
                        PONTE[b("0x15")]["bezierCurveTo"](h, PONTE[b("0x23")][0x0] - e + 0xa, h, PONTE[b("0x23")][0x0] + e - 0xa, c, PONTE[b("0x23")][0x0] + ikiNoktaArasi);
                        points["push"]([
                            [f["x"], f["y"]],
                            [h, PONTE["focusCoordinates"][0x0] - e + 0xa],
                            [h, PONTE[b("0x23")][0x0] + e - 0xa],
                            [c, PONTE[b("0x23")][0x0] + ikiNoktaArasi],
                        ]);
                        PONTE[b("0x15")][b("0x30")](i, PONTE["focusCoordinates"][0x1] - e + 0xa, i, PONTE[b("0x23")][0x1] + e - 0xa, c, PONTE["focusCoordinates"][0x1] + ikiNoktaArasi);
                        points[b("0x31")]([
                            [c, PONTE[b("0x23")][0x0] + ikiNoktaArasi],
                            [i, PONTE[b("0x23")][0x1] - e + 0xa],
                            [i, PONTE[b("0x23")][0x1] + e - 0xa],
                            [c, PONTE[b("0x23")][0x1] + ikiNoktaArasi],
                        ]);
                        PONTE[b("0x15")][b("0x30")](h, PONTE[b("0x23")][0x2] - e + 0xa, h, PONTE["focusCoordinates"][0x2] + e - 0xa, c, PONTE[b("0x23")][0x2] + ikiNoktaArasi);
                        points[b("0x31")]([
                            [c, PONTE["focusCoordinates"][0x1] + ikiNoktaArasi],
                            [h, PONTE[b("0x23")][0x2] - e + 0xa],
                            [h, PONTE[b("0x23")][0x2] + e - 0xa],
                            [c, PONTE[b("0x23")][0x2] + ikiNoktaArasi],
                        ]);
                        PONTE[b("0x15")][b("0x30")](i, PONTE["focusCoordinates"][0x3] - e + 0xa, i, PONTE["focusCoordinates"][0x3] + e - 0xa, g["x"], g["y"]);
                        points[b("0x31")]([
                            [c, PONTE["focusCoordinates"][0x2] + ikiNoktaArasi],
                            [i, PONTE[b("0x23")][0x3] - e + 0xa],
                            [i, PONTE[b("0x23")][0x3] + e - 0xa],
                            [g["x"], g["y"]],
                        ]);
                        PONTE["staticCtx"][b("0x32")]();
                        PONTE[b("0x15")][b("0x33")] = b("0x34");
                        PONTE[b("0x15")][b("0x35")]();
                        PONTE[b("0x15")][b("0x36")](c, PONTE[b("0x23")][0x0], 0xa, 0x0, 0x2 * Math["PI"]);
                        PONTE["staticCtx"][b("0x37")]();
                        PONTE["staticCtx"][b("0x35")]();
                        PONTE[b("0x15")][b("0x36")](c, PONTE["focusCoordinates"][0x1], 0xa, 0x0, 0x2 * Math["PI"]);
                        PONTE[b("0x15")][b("0x37")]();
                        PONTE[b("0x15")]["beginPath"]();
                        PONTE[b("0x15")][b("0x36")](c, PONTE[b("0x23")][0x2], 0xa, 0x0, 0x2 * Math["PI"]);
                        PONTE[b("0x15")][b("0x37")]();
                        PONTE[b("0x15")][b("0x35")]();
                        PONTE[b("0x15")][b("0x36")](c, PONTE[b("0x23")][0x3], 0xa, 0x0, 0x2 * Math["PI"]);
                        PONTE[b("0x38")]();
                        PONTE[b("0x15")][b("0x37")]();
                        PONTE[b("0x39")](f["x"], f["y"]);
                    },
                    startApp: function () {
                        focusApp();
                        document[b("0x3")](b("0x8"))[b("0x5")][b("0x6")] = b("0x9");
                        window["setTimeout"](function () {
                            MAMBACOUNTDOWN[b("0x3a")]();
                            PONTE[b("0x1d")] = !![];
                            PONTE[b("0x3b")] = window[b("0x3c")](PONTE[b("0x3d")]);
                        }, 0x320);
                    },
                    renderCanvas: function () {
                        sayac += PONTE[b("0x3e")] * carpan;
                        if (clock) sayac = Math[b("0x3f")](sayac, 0x1);
                        else sayac = Math[b("0x40")](sayac, 0x0);
                        var c = BezierCubicXY(
                            { x: points[activePoints][0x0][0x0], y: points[activePoints][0x0][0x1] },
                            { x: points[activePoints][0x1][0x0], y: points[activePoints][0x1][0x1] },
                            { x: points[activePoints][0x2][0x0], y: points[activePoints][0x2][0x1] },
                            { x: points[activePoints][0x3][0x0], y: points[activePoints][0x3][0x1] },
                            sayac
                        );
                        if (clock) {
                            if (sayac >= 0x1) {
                                activePoints++;
                                sayac -= 0x1;
                                if (activePoints >= points[b("0x41")]) {
                                    clock = ![];
                                    carpan = -0x1;
                                    sayac += 0x1;
                                    activePoints--;
                                } else if (PONTE["playMetronomeSound"]) {
                                    metronomeSound[b("0x42")]();
                                }
                            }
                        } else {
                            if (sayac <= 0x0) {
                                activePoints--;
                                sayac += 0x1;
                                if (activePoints < 0x0) {
                                    clock = !![];
                                    carpan = 0x1;
                                    sayac -= 0x1;
                                    activePoints++;
                                } else if (PONTE[b("0x43")]) {
                                    metronomeSound[b("0x42")]();
                                }
                            }
                        }
                        PONTE[b("0x1a")][b("0x16")](0x0, 0x0, PONTE[b("0x17")][b("0x18")], PONTE[b("0x17")][b("0x19")]);
                        PONTE[b("0x39")](c["x"], c["y"]);
                        PONTE[b("0x38")]();
                        PONTE[b("0x3b")] = window[b("0x3c")](PONTE["renderCanvas"]);
                    },
                    drawCircle: function (c, d) {
                        PONTE[b("0x1a")][b("0x33")] = "#647687";
                        PONTE[b("0x1a")][b("0x35")]();
                        PONTE[b("0x1a")]["arc"](c, d, 0xf, 0x0, 0x2 * Math["PI"]);
                        PONTE[b("0x1a")][b("0x37")]();
                    },
                    drawFocusPoint() {
                        if (PONTE[b("0x44")]) {
                            PONTE["ctx"][b("0x33")] = b("0x45");
                            PONTE["ctx"][b("0x35")]();
                            PONTE[b("0x1a")][b("0x36")](PONTE[b("0x17")][b("0x18")] / 0x2, PONTE[b("0x23")][activePoints], 0xc, 0x0, 0x2 * Math["PI"]);
                            PONTE[b("0x1a")][b("0x37")]();
                        }
                    },
                    toggleSound: function () {
                        var c = document[b("0x3")](b("0x46"));
                        var d = document[b("0x3")](b("0x47"));
                        if (PONTE["playMetronomeSound"]) {
                            PONTE[b("0x43")] = ![];
                            c["removeClass"](b("0x48"))[b("0x49")](b("0x4a"));
                            d[b("0x4b")](b("0x4c"))[b("0x49")](b("0x4d"));
                        } else {
                            PONTE[b("0x43")] = !![];
                            c[b("0x4b")](b("0x4a"))[b("0x49")](b("0x48"));
                            d[b("0x4b")](b("0x4d"))["addClass"](b("0x4c"));
                        }
                    },
                    downSpeed: function () {
                        if (PONTE[b("0x3e")] <= 0.003) return ![];
                        PONTE[b("0x3e")] -= 0.001;
                        document[b("0x3")](b("0x4e"))[b("0x4f")] = Math["round"](PONTE[b("0x3e")] * 0x3e8);
                    },
                    upSpeed: function () {
                        if (PONTE["speed"] >= 0.02) return ![];
                        PONTE[b("0x3e")] += 0.001;
                        document[b("0x3")](b("0x4e"))[b("0x4f")] = Math["round"](PONTE[b("0x3e")] * 0x3e8);
                    },
                    toggleFocus: function () {
                        var c = document[b("0x3")](b("0x50"));
                        if (PONTE[b("0x44")]) {
                            PONTE["showFocusPoint"] = ![];
                            c[b("0x4b")](b("0x48"))[b("0x49")](b("0x4a"));
                        } else {
                            PONTE[b("0x44")] = !![];
                            c[b("0x4b")](b("0x4a"))[b("0x49")]("open");
                        }
                        PONTE[b("0x1e")]();
                    },
                };
                var carpan = 0x1;
                var clock = !![];
                var points = [];
                var activePoints = 0x0;
                var sayac = 0x0;
                function BezierCubicXY(c, d, e, f, g) {
                    var h = {};
                    var j = ["x", "y"];
                    var l, m;
                    for (l in j) {
                        m = j[l];
                        h[m] = Math[b("0x51")](0x1 - g, 0x3) * c[m] + 0x3 * Math[b("0x51")](0x1 - g, 0x2) * g * d[m] + 0x3 * (0x1 - g) * Math[b("0x51")](g, 0x2) * e[m] + Math[b("0x51")](g, 0x3) * f[m];
                    }
                    return h;
                }
                var MAMBACOUNTDOWN = {
                    element: "",
                    countVar: 0x3c,
                    count: 0x3c,
                    timer: "",
                    changeTimeWithSeconds: function (c) {
                        MAMBACOUNTDOWN[b("0x1b")] = c;
                    },
                    changeTimeWithMinutes: function (c) {
                        MAMBACOUNTDOWN[b("0x1b")] = c * 0x3c;
                    },
                    startCountDown: function () {
                        MAMBACOUNTDOWN["timer"] = window[b("0x52")](MAMBACOUNTDOWN[b("0x53")], 0x3e8);
                    },
                    tickCountDown: function () {
                        MAMBACOUNTDOWN[b("0x1b")]--;
                        MAMBACOUNTDOWN["setElementsText"]();
                        if (MAMBACOUNTDOWN["count"] == 0x0) MAMBACOUNTDOWN[b("0x54")]();
                    },
                    finishCountDown: function () {
                        var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
                        drawerCloseBtnb.click();
                        window[b("0x55")](PONTE[b("0x3b")]);
                        clearInterval(MAMBACOUNTDOWN[b("0x14")]);
                        PONTE[b("0x1")] = !![];
                        MAMBACOUNTDOWN["element"][b("0x4f")] = b("0x56");
                        document[b("0x3")](b("0x57"))["style"][b("0x6")] = b("0x7");
                    },
                    downCountTime: function () {
                        if (MAMBACOUNTDOWN[b("0x1c")] <= 0x3c) return ![];
                        MAMBACOUNTDOWN[b("0x1b")] = MAMBACOUNTDOWN[b("0x1c")] -= 0x3c;
                        MAMBACOUNTDOWN["setElementsText"]();
                        document[b("0x3")](b("0x58"))[b("0x4f")] = MAMBACOUNTDOWN[b("0x59")](MAMBACOUNTDOWN[b("0x1c")]);
                    },
                    upCountTime: function () {
                        if (MAMBACOUNTDOWN[b("0x1c")] >= 0x258) return ![];
                        MAMBACOUNTDOWN[b("0x1b")] = MAMBACOUNTDOWN[b("0x1c")] += 0x3c;
                        MAMBACOUNTDOWN[b("0x5a")]();
                        document["getElementById"](b("0x58"))[b("0x4f")] = MAMBACOUNTDOWN[b("0x59")](MAMBACOUNTDOWN[b("0x1c")]);
                    },
                    setElementsText: function () {
                        MAMBACOUNTDOWN[b("0xe")][b("0x4f")] = MAMBACOUNTDOWN[b("0x59")](MAMBACOUNTDOWN[b("0x1b")]);
                    },
                    prettyTime: function (c) {
                        var d, e;
                        d = Math[b("0x5b")](c / 0x3c);
                        e = c % 0x3c;
                        if (d < 0xa) d = "0" + d;
                        if (e < 0xa) e = "0" + e;
                        return d + ":" + e;
                    },
                };
                var MAMBAARRAY = {
                    shuffle: function (c) {
                        for (var d, e, f = c[b("0x41")]; f; d = parseInt(Math[b("0x5c")]() * f), e = c[--f], c[f] = c[d], c[d] = e);
                        return c;
                    },
                };
                var MAMBAAPP = {
                    element: "",
                    width: 0x0,
                    height: 0x0,
                    screenType: "",
                    init: function (g, h) {
                        var i = (function () {
                            var m = !![];
                            return function (n, o) {
                                var p = m
                                    ? function () {
                                          if (o) {
                                              var q = o[b("0x5d")](n, arguments);
                                              o = null;
                                              return q;
                                          }
                                      }
                                    : function () {};
                                m = ![];
                                return p;
                            };
                        })();
                        var j = i(this, function () {
                            var m = function () {
                                var I;
                                try {
                                    I = Function(b("0x5e") + b("0x5f") + ");")();
                                } catch (J) {
                                    I = window;
                                }
                                return I;
                            };
                            var n = m();
                            var o = function () {
                                return {
                                    key: b("0x60"),
                                    value: b("0x61"),
                                    getAttribute: (function () {
                                        for (var I = 0x0; I < 0x3e8; I--) {
                                            var J = I > 0x0;
                                            switch (J) {
                                                case !![]:
                                                    return this["item"] + "_" + this[b("0x62")] + "_" + I;
                                                default:
                                                    this[b("0x60")] + "_" + this[b("0x62")];
                                            }
                                        }
                                    })(),
                                };
                            };
                            var p = new RegExp("[YTUXLjuSzuaZVNPWHEqktILynQMUfyEERhqNEFSUMUVgPCxIGNfUUNXJDJPLSfIwrUhExgBkPtquRSPAOCywPVaZgR]", "g");
                            var q = ".m5biYTliUsimXLdjeuSzuavZelVNopP.cWHoEmqktI;.Lynm5bQilMUisfyimEE.RchqNoEFSUmMUVgPCxIGNfUUNXJDJPLSfIwrUhExgBkPtquRSPAOCywPVaZgR"["replace"](p, "")["split"](";");
                            var r;
                            var s;
                            var t;
                            var u;
                            for (var v in n) {
                                if (v[b("0x41")] == 0x8 && v[b("0x63")](0x7) == 0x74 && v[b("0x63")](0x5) == 0x65 && v[b("0x63")](0x3) == 0x75 && v[b("0x63")](0x0) == 0x64) {
                                    r = v;
                                    break;
                                }
                            }
                            for (var w in n[r]) {
                                if (w[b("0x41")] == 0x6 && w[b("0x63")](0x5) == 0x6e && w[b("0x63")](0x0) == 0x64) {
                                    s = w;
                                    break;
                                }
                            }
                            if (!("~" > s)) {
                                for (var x in n[r]) {
                                    if (x["length"] == 0x8 && x[b("0x63")](0x7) == 0x6e && x[b("0x63")](0x0) == 0x6c) {
                                        t = x;
                                        break;
                                    }
                                }
                                for (var y in n[r][t]) {
                                    if (y[b("0x41")] == 0x8 && y[b("0x63")](0x7) == 0x65 && y[b("0x63")](0x0) == 0x68) {
                                        u = y;
                                        break;
                                    }
                                }
                            }
                            if (!r || !n[r]) {
                                return;
                            }
                            var z = n[r][s];
                            var A = !!n[r][t] && n[r][t][u];
                            var B = z || A;
                            if (!B) {
                                return;
                            }
                            var C = ![];
                            for (var D = 0x0; D < q[b("0x41")]; D++) {
                                var s = q[D];
                                var E = s[0x0] === String[b("0x64")](0x2e) ? s["slice"](0x1) : s;
                                var F = B[b("0x41")] - E[b("0x41")];
                                var G = B[b("0x65")](E, F);
                                var H = G !== -0x1 && G === F;
                                if (H) {
                                    if (B[b("0x41")] == s[b("0x41")] || s[b("0x65")](".") === 0x0) {
                                        C = !![];
                                    }
                                }
                            }
                            if (!C) {
                                return;
                            } else {
                                return;
                            }
                            o();
                        });
                        j();
                        var k = (function () {
                            var m = !![];
                            return function (n, o) {
                                var p = m
                                    ? function () {
                                          if (o) {
                                              var q = o[b("0x5d")](n, arguments);
                                              o = null;
                                              return q;
                                          }
                                      }
                                    : function () {};
                                m = ![];
                                return p;
                            };
                        })();
                        var l = k(this, function () {
                            var m;
                            try {
                                var n = Function(b("0x5e") + b("0x5f") + ");");
                                m = n();
                            } catch (u) {
                                m = window;
                            }
                            var o = (m[b("0x66")] = m["console"] || {});
                            var p = ["log", b("0x67"), b("0x68"), b("0x69"), b("0x6a"), b("0x6b"), b("0x6c")];
                            for (var q = 0x0; q < p[b("0x41")]; q++) {
                                var r = k["constructor"][b("0x6d")][b("0x6e")](k);
                                var s = p[q];
                                var t = o[s] || r;
                                r[b("0x6f")] = k[b("0x6e")](k);
                                r[b("0x70")] = t[b("0x70")][b("0x6e")](t);
                                o[s] = r;
                            }
                        });
                        l();
                        MAMBAAPP[b("0xe")] = document[b("0x3")](g);
                        MAMBAAPP["width"] = MAMBAAPP[b("0x27")]();
                        MAMBAAPP[b("0x19")] = MAMBAAPP[b("0x24")]();
                        h();
                    },
                    getAppWidth: function () {
                        return MAMBAAPP["element"][b("0x71")]()[b("0x18")];
                    },
                    getAppHeight: function () {
                        return MAMBAAPP[b("0xe")]["getBoundingClientRect"]()[b("0x19")];
                    },
                };
                window["addEventListener"](b("0x72"), PONTE["reDraw"]);
                Node[b("0x6d")]["hasClass"] = function (c) {
                    if (this[b("0x73")]) {
                        return this["classList"]["contains"](c);
                    } else {
                        return -0x1 < this[b("0x74")][b("0x65")](c);
                    }
                };
                Node[b("0x6d")][b("0x49")] = function (c) {
                    if (this["classList"]) {
                        this["classList"][b("0x75")](c);
                    } else if (!this[b("0x76")](c)) {
                        var d = this[b("0x74")][b("0x77")]("\x20");
                        d[b("0x31")](c);
                        this[b("0x74")] = d[b("0x78")]("\x20");
                    }
                    return this;
                };
                Node[b("0x6d")][b("0x4b")] = function (c) {
                    if (this["classList"]) {
                        this[b("0x73")][b("0x79")](c);
                    } else {
                        var d = this[b("0x74")][b("0x77")]("\x20");
                        d[b("0x7a")](d[b("0x65")](c), 0x1);
                        this[b("0x74")] = d[b("0x78")]("\x20");
                    }
                    return this;
                };
                MAMBAAPP[b("0x7b")](b("0x7c"), PONTE[b("0x7b")]);
            </script>
        </div>
    </body>
</html>
