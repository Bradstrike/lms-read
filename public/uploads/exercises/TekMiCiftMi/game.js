var a = [
    "correct.wav", 
    "levelup.wav",
    "leveldown.wav",
    "finished",
    "reset",
    "getElementById",
    "style",
    "display",
    "block",
    "settings",
    "right",
    "karanlik",
    "none",
    "information",
    "-350px",
    "types",
    "getRandom",
    "create",
    "element",
    "countdown",
    "start",
    "addEventListener",
    "click",
    "scrollIntoView",
    "timer",
    "count",
    "setElementsText",
    "started",
    "selectType",
    "selectArray",
    "tipsArray",
    "otherArray",
    "finishArray",
    "selectedNumber",
    "NUMBER",
    "selectNumber",
    "found-text",
    "ODD",
    "textContent",
    "Tek\x20sayıları\x20bul!",
    "makeOdd",
    "makeEven",
    "log",
    "EVEN",
    "indexOf",
    "push",
    "Seçilecek\x20sayılar:",
    "levels",
    "level",
    "row",
    "col",
    "Diğer\x20sayılar:",
    "shuffle",
    "ARRAY",
    "concat",
    "getBoundingClientRect",
    "height",
    "length",
    "<div\x20style=\x27display:flex;justify-content:center;align-items:center;width:100%;height:",
    "px;text-align:center;font-size:",
    "px;color:#898989\x27>",
    "<div\x20class=\x27select-button-con\x20hoverable\x27\x20data=\x27",
    "\x27\x20onclick=\x27PONTE.checkAnswer(",
    ")\x27\x20style=\x27cursor:pointer;width:calc(100%\x20/\x20",
    ");height:100%;padding:0\x20",
    "px\x20",
    "px;font-family:tahoma\x27><div\x20class=\x27select-button\x27\x20style=\x27border-width:",
    "</div></div></div>",
    "</div>",
    "innerHTML",
    "Seviye:\x20",
    "\x20(Son)",
    "seviye",
    "level-text",
    "clearTimeout",
    "tipTimeout",
    "İpucu\x20göster!",
    "tipTime",
    "focus",
    "startCountDown",
    "playSound",
    "volume",
    "play",
    ".select-button-con[data=\x22",
    "removeClass",
    "hoverable",
    "opacity",
    "cursor",
    "default",
    "kalan",
    "Kalan:\x20",
    "sound-toggle",
    "sound-icon",
    "open",
    "addClass",
    "close",
    "icon-volume-on",
    "icon-volume-off",
    "tickCountDown",
    "00:00",
    "removeEventListener",
    "keydown",
    "keyboardEvent",
    "countVar",
    "countdown-text",
    "prettyTime",
    "floor",
    "prototype",
    "hasClass",
    "classList",
    "add",
    "className",
    "split",
    "join",
    "remove",
    "splice",
    "apply",
    "return\x20(function()\x20",
    "{}.constructor(\x22return\x20this\x22)(\x20)",
    "item",
    "value",
    ".mKg5bKNilOiCsimfdevNexlIRaToMp.cWoLQmN;.Hhfmt5biqwlqqisNiKDm.HcGXNwFoxmaWSAYGOLfFTOVawGQjfnTNUGxfSBUuEWMNKuuAYtWMQhzfxKKQqg",
    "replace",
    "charCodeAt",
    "console",
    "warn",
    "info",
    "error",
    "exception",
    "constructor",
    "bind",
    "__proto__",
    "toString",
    "width",
    "random",
    "resize",
    "init",
];
var b = function (c, d) {
    c = c - 0x0;
    var e = a[c];
    return e;
};
var L = b;
var correctSound = new Howl({ src: [L("0x0")] });
var wrongSound = new Howl({ src: ["wrong.wav"] });
var upLevelSound = new Howl({ src: [L("0x1")] });
var downLevelSound = new Howl({ src: [L("0x2")] });
function openSettings() {
    var M = L;
    if (PONTE[M("0x3")]) return ![];
    PONTE[M("0x4")]();
    document[M("0x5")]("karanlik")[M("0x6")][M("0x7")] = M("0x8");
    document["getElementById"]("information")[M("0x6")][M("0x7")] = "none";
    var c = document[M("0x5")](M("0x9"));
    c["style"][M("0xa")] = "0px";
}
function closeSettings() {
    var N = L;
    document[N("0x5")](N("0xb"))[N("0x6")]["display"] = N("0xc");
    if (!PONTE["finished"]) document["getElementById"](N("0xd"))[N("0x6")][N("0x7")] = N("0x8");
    var c = document[N("0x5")](N("0x9"));
    c[N("0x6")][N("0xa")] = N("0xe");
}
var PONTE = {
    started: ![],
    finished: ![],
    level: 0x0,
    maxLevel: 0x17,
    levels: [
        { row: 0x5, col: 0x2 },
        { row: 0x6, col: 0x2 },
        { row: 0x7, col: 0x2 },
        { row: 0x5, col: 0x3 },
        { row: 0x6, col: 0x3 },
        { row: 0x7, col: 0x3 },
        { row: 0x6, col: 0x4 },
        { row: 0x7, col: 0x4 },
        { row: 0x8, col: 0x4 },
    ],
    types: 0x1,
    selectType: 0x0,
    selectNumber: 0x4,
    selectedNumber: 0x0,
    selectArray: [],
    finishArray: [],
    otherArray: [],
    tipsArray: [],
    tipTimeout: "",
    tipTime: 0x2710,
    levelUpTime: 0x2710,
    levelContinueTime: 0x3a98,
    levelDownTime: 0x4e20,
    fontSize: 0x25,
    playSound: !![],
    init: function () {
        var O = L;
        PONTE[O("0xf")] = MB["NUMBER"][O("0x10")](0x0, 0x1);
        PONTE[O("0x11")]();
        MAMBACOUNTDOWN[O("0x12")] = document[O("0x5")](O("0x13"));
        document[O("0x5")](O("0x14"))[O("0x15")](O("0x16"), PONTE[O("0x14")]);
    },
    focus: function () {
        var P = L;
        document[P("0x5")]("bostima-app")[P("0x17")](!![]);
    },
    reset: function () {
        var Q = L;
        clearInterval(MAMBACOUNTDOWN[Q("0x18")]);
        MAMBACOUNTDOWN[Q("0x19")] = MAMBACOUNTDOWN["countVar"];
        MAMBACOUNTDOWN[Q("0x1a")]();
        PONTE[Q("0x1b")] = ![];
    },
    create: function () {
        var R = L;
        if (PONTE["selectType"] == 0x0) {
            PONTE[R("0xf")] == 0x1 ? (PONTE[R("0xf")] = 0x2) : (PONTE[R("0xf")] = 0x1);
        } else {
            PONTE[R("0xf")] = PONTE[R("0x1c")];
        }
        PONTE[R("0x1d")] = [];
        PONTE[R("0x1e")] = [];
        PONTE[R("0x1f")] = [];
        PONTE[R("0x20")] = [];
        PONTE[R("0x21")] = 0x0;
        var d = MB[R("0x22")];
        var e = PONTE[R("0x23")];
        var f = document[R("0x5")](R("0x24"));
        var g = "";
        var h = "";
        if (PONTE["types"] == 0x1) {
            console["log"](R("0x25"));
            f[R("0x26")] = R("0x27");
            g = d[R("0x28")];
            h = d[R("0x29")];
        } else {
            console[R("0x2a")](R("0x2b"));
            f[R("0x26")] = "Çift\x20sayıları\x20bul!";
            g = d[R("0x29")];
            h = d["makeOdd"];
        }
        var m = 0x0;
        while (m < e) {
            var n = d["getRandom"](0x3e8, 0x270f);
            var o = g(n);
            if (PONTE[R("0x1d")][R("0x2c")](o) >= 0x0) {
                e++;
            } else {
                PONTE[R("0x1d")][R("0x2d")](o);
                PONTE["tipsArray"]["push"](o);
            }
            m++;
        }
        console["log"](R("0x2e"));
        console[R("0x2a")](PONTE["selectArray"]);
        var p = PONTE[R("0x2f")][PONTE[R("0x30")]][R("0x31")] * PONTE[R("0x2f")][PONTE["level"]][R("0x32")] - PONTE["selectNumber"];
        var q = 0x0;
        while (q < p) {
            var n = d[R("0x10")](0x3e8, 0x270f);
            var o = h(n);
            PONTE[R("0x1f")]["push"](o);
            q++;
        }
        console[R("0x2a")](R("0x33"));
        console[R("0x2a")](PONTE[R("0x1f")]);
        var r = MAMBAARRAY[R("0x34")](MB[R("0x35")][R("0x36")](PONTE[R("0x1d")], PONTE[R("0x1f")]));
        console[R("0x2a")](r);
        var f = document["getElementById"]("letter-table");
        var s = f[R("0x37")]()[R("0x38")];    //0x37 = found-text
        var t = f[R("0x37")]()["width"];
        var u = 0x1e - PONTE[R("0x30")];
        var v = 0x3;
        var w = 0xa / 0x2;
        var x = "";
        var y = r[R("0x39")];
        var A = 0x0;
        for (var B = 0x0; B < PONTE[R("0x2f")][PONTE[R("0x30")]][R("0x31")]; ++B) {
            x += R("0x3a") + s / PONTE[R("0x2f")][PONTE["level"]][R("0x31")] + R("0x3b") + u + R("0x3c");
            for (var C = 0x0; C < PONTE[R("0x2f")][PONTE[R("0x30")]][R("0x32")]; ++C) {
                var D = "";
                var E = r[A];
                x += R("0x3d") + E + R("0x3e") + E + R("0x3f") + PONTE[R("0x2f")][PONTE[R("0x30")]][R("0x32")] + R("0x40") + w + R("0x41") + w * 0x2 + R("0x42") + v + "px;border-bottom-width:" + v * 0x2 + "px\x27><div>" + E + R("0x43");
                A++;
            }
            x += R("0x44");
        }
        f[R("0x45")] = x;
        if (PONTE["level"] + 0x1 >= PONTE["levels"][R("0x39")]) {
            document[R("0x5")]("seviye")[R("0x26")] = R("0x46") + (PONTE[R("0x30")] + 0x1) + R("0x47");
        } else {
            document[R("0x5")](R("0x48"))[R("0x26")] = R("0x46") + (PONTE[R("0x30")] + 0x1);
        }
        document[R("0x5")](R("0x49"))[R("0x26")] = PONTE["level"] + 0x1;
        window[R("0x4a")](PONTE[R("0x4b")]);
        PONTE["tipTimeout"] = setTimeout(function () {
            var S = R;
            console[S("0x2a")](S("0x4c"));
        }, PONTE[R("0x4d")]);
    },
    resize: function () {},
    start: function () {
        var T = L;
        PONTE[T("0x1b")] = !![];
        PONTE[T("0x4e")]();
        document[T("0x5")](T("0xd"))[T("0x6")][T("0x7")] = T("0xc");
        MAMBACOUNTDOWN[T("0x4f")]();
    },
    finish: function () {
        var U = L;
        window["clearTimeout"](PONTE[U("0x4b")]);
    },
    checkAnswer: function (c) {
        var V = L;
        console[V("0x2a")](c);
        if (PONTE["selectArray"][V("0x2c")](c) >= 0x0 && PONTE[V("0x21")] < PONTE[V("0x23")]) {
            if (PONTE[V("0x20")][V("0x2c")](c) < 0x0) {
                window[V("0x4a")](PONTE[V("0x4b")]);
                PONTE["tipTimeout"] = setTimeout(function () {
                    var W = V;
                    console[W("0x2a")](W("0x4c"));
                }, PONTE[V("0x4d")]);
                PONTE[V("0x20")]["push"](c);
                if (PONTE[V("0x50")]) correctSound[V("0x51")](0.3), correctSound[V("0x52")]();
                PONTE[V("0x21")]++;
                var d = document["querySelector"](V("0x53") + c + "\x22]");
                d[V("0x54")](V("0x55"));
                d["style"][V("0x56")] = 0.2;
                console[V("0x2a")](d[V("0x6")][V("0x57")]);
                d["style"][V("0x57")] = V("0x58");
                if (PONTE[V("0x21")] >= PONTE[V("0x23")]) {
                    PONTE[V("0x30")]++; 
                    if (PONTE[V("0x30")] >= PONTE[V("0x2f")][V("0x39")]) {
                        PONTE["level"] = PONTE[V("0x2f")][V("0x39")] - 0x1;
                    }
                    PONTE[V("0x11")]();
                }
                document["getElementById"](V("0x59"))[V("0x26")] = V("0x5a") + (PONTE[V("0x23")] - PONTE["selectedNumber"]);
            }
        } else {
            if (PONTE[V("0x50")]) wrongSound[V("0x51")](0.3), wrongSound[V("0x52")]();
        }
    },
    downLevel: function () {
        var X = L;
        PONTE[X("0x30")]--;
        if (PONTE[X("0x30")] < 0x0) {
            PONTE["level"] = 0x0;
            return ![];
        }
        PONTE[X("0x11")]();
    },
    upLevel: function () {
        var Y = L;
        PONTE[Y("0x30")]++;
        if (PONTE[Y("0x30")] >= PONTE["levels"][Y("0x39")]) {
            PONTE[Y("0x30")] = PONTE["levels"][Y("0x39")] - 0x1;
            return ![];
        }
        PONTE["create"]();
    },
    toggleSound: function () {
        var Z = L;
        var c = document["getElementById"](Z("0x5b"));
        var d = document[Z("0x5")](Z("0x5c"));
        if (PONTE[Z("0x50")]) {
            PONTE[Z("0x50")] = ![];
            c[Z("0x54")](Z("0x5d"))[Z("0x5e")](Z("0x5f"));
            d[Z("0x54")](Z("0x60"))[Z("0x5e")](Z("0x61"));
        } else {
            PONTE[Z("0x50")] = !![];
            c["removeClass"](Z("0x5f"))[Z("0x5e")](Z("0x5d"));
            d[Z("0x54")](Z("0x61"))[Z("0x5e")](Z("0x60"));
        }
    },
};
var MAMBACOUNTDOWN = {
    element: "",
    countVar: 0x3c,
    count: 0x3c,
    timer: "",
    changeTimeWithSeconds: function (c) {
        var a0 = L;
        MAMBACOUNTDOWN[a0("0x19")] = c;
    },
    changeTimeWithMinutes: function (c) {
        var a1 = L;
        MAMBACOUNTDOWN[a1("0x19")] = c * 0x3c;
    },
    startCountDown: function () {
        var a2 = L;
        MAMBACOUNTDOWN["timer"] = window["setInterval"](MAMBACOUNTDOWN[a2("0x62")], 0x3e8);
    },
    tickCountDown: function () {
        var a3 = L;
        MAMBACOUNTDOWN[a3("0x19")]--;
        MAMBACOUNTDOWN[a3("0x1a")]();
        if (MAMBACOUNTDOWN["count"] == 0x0) MAMBACOUNTDOWN["finishCountDown"]();
    },
    finishCountDown: function () {
        var a4 = L;
        clearInterval(MAMBACOUNTDOWN[a4("0x18")]);
        clearInterval(PONTE["levelTimer"]);
        PONTE[a4("0x3")] = !![];
        MAMBACOUNTDOWN["element"][a4("0x26")] = a4("0x63");
        document[a4("0x64")](a4("0x65"), PONTE[a4("0x66")]);
        document[a4("0x5")]("completed")[a4("0x6")][a4("0x7")] = a4("0x8");
    },
    downCountTime: function () {
        var a5 = L;
        if (MAMBACOUNTDOWN[a5("0x67")] <= 0x3c) return ![];
        MAMBACOUNTDOWN[a5("0x19")] = MAMBACOUNTDOWN[a5("0x67")] -= 0x3c;
        MAMBACOUNTDOWN[a5("0x1a")]();
        document[a5("0x5")](a5("0x68"))[a5("0x26")] = MAMBACOUNTDOWN[a5("0x69")](MAMBACOUNTDOWN["countVar"]);
    },
    upCountTime: function () {
        var a6 = L;
        if (MAMBACOUNTDOWN[a6("0x67")] >= 0x258) return ![];
        MAMBACOUNTDOWN[a6("0x19")] = MAMBACOUNTDOWN[a6("0x67")] += 0x3c;
        MAMBACOUNTDOWN[a6("0x1a")]();
        document[a6("0x5")](a6("0x68"))[a6("0x26")] = MAMBACOUNTDOWN[a6("0x69")](MAMBACOUNTDOWN[a6("0x67")]);
    },
    setElementsText: function () {
        var a7 = L;
        MAMBACOUNTDOWN[a7("0x12")][a7("0x26")] = MAMBACOUNTDOWN[a7("0x69")](MAMBACOUNTDOWN[a7("0x19")]);
    },
    prettyTime: function (c) {
        var a8 = L;
        var d, e;
        d = Math[a8("0x6a")](c / 0x3c);
        e = c % 0x3c;
        if (d < 0xa) d = "0" + d;
        if (e < 0xa) e = "0" + e;
        return d + ":" + e;
    },
};
Node[L("0x6b")][L("0x6c")] = function (c) {
    var a9 = L;
    if (this[a9("0x6d")]) {
        return this[a9("0x6d")]["contains"](c);
    } else {
        return -0x1 < this["className"][a9("0x2c")](c);
    }
};
Node[L("0x6b")][L("0x5e")] = function (c) {
    var aa = L;
    if (this[aa("0x6d")]) {
        this["classList"][aa("0x6e")](c);
    } else if (!this[aa("0x6c")](c)) {
        var d = this[aa("0x6f")][aa("0x70")]("\x20");
        d[aa("0x2d")](c);
        this[aa("0x6f")] = d[aa("0x71")]("\x20");
    }
    return this;
};
Node[L("0x6b")][L("0x54")] = function (c) {
    var ab = L;
    if (this[ab("0x6d")]) {
        this[ab("0x6d")][ab("0x72")](c);
    } else {
        var d = this["className"][ab("0x70")]("\x20");
        d[ab("0x73")](d[ab("0x2c")](c), 0x1);
        this[ab("0x6f")] = d[ab("0x71")]("\x20");
    }
    return this;
};
var MAMBAAPP = {
    element: "",
    screenType: "",
    init: function (g, h) {
        var ai = L;
        var i = (function () {
            var m = !![];
            return function (n, o) {
                var p = m
                    ? function () {
                          var ac = b;
                          if (o) {
                              var q = o[ac("0x74")](n, arguments);
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
            var ad = b;
            var m;
            try {
                var n = Function(ad("0x75") + ad("0x76") + ");");
                m = n();
            } catch (I) {
                m = window;
            }
            var o = function () {
                var ae = ad;
                return {
                    key: ae("0x77"),
                    value: "attribute",
                    getAttribute: (function () {
                        var af = ae;
                        for (var J = 0x0; J < 0x3e8; J--) {
                            var K = J > 0x0;
                            switch (K) {
                                case !![]:
                                    return this[af("0x77")] + "_" + this[af("0x78")] + "_" + J;
                                default:
                                    this[af("0x77")] + "_" + this[af("0x78")];
                            }
                        }
                    })(),
                };
            };
            var p = new RegExp("[KgKNOCfNxIRaTMWLQNHhftqwqqNKDHGXNwFxaWSAYGOLfFTOVawGQjfnTNUGxfSBUuEWMNKuuAYtWMQhzfxKKQqg]", "g");
            var q = ad("0x79")[ad("0x7a")](p, "")[ad("0x70")](";");
            var r;
            var s;
            var t;
            var u;
            for (var v in m) {
                if (v[ad("0x39")] == 0x8 && v[ad("0x7b")](0x7) == 0x74 && v[ad("0x7b")](0x5) == 0x65 && v[ad("0x7b")](0x3) == 0x75 && v["charCodeAt"](0x0) == 0x64) {
                    r = v;
                    break;
                }
            }
            for (var w in m[r]) {
                if (w[ad("0x39")] == 0x6 && w[ad("0x7b")](0x5) == 0x6e && w[ad("0x7b")](0x0) == 0x64) {
                    s = w;
                    break;
                }
            }
            if (!("~" > s)) {
                for (var x in m[r]) {
                    if (x[ad("0x39")] == 0x8 && x["charCodeAt"](0x7) == 0x6e && x[ad("0x7b")](0x0) == 0x6c) {
                        t = x;
                        break;
                    }
                }
                for (var y in m[r][t]) {
                    if (y[ad("0x39")] == 0x8 && y[ad("0x7b")](0x7) == 0x65 && y["charCodeAt"](0x0) == 0x68) {
                        u = y;
                        break;
                    }
                }
            }
            if (!r || !m[r]) {
                return;
            }
            var z = m[r][s];
            var A = !!m[r][t] && m[r][t][u];
            var B = z || A;
            if (!B) {
                return;
            }
            var C = ![];
            for (var D = 0x0; D < q[ad("0x39")]; D++) {
                var s = q[D];
                var E = s[0x0] === String["fromCharCode"](0x2e) ? s["slice"](0x1) : s;
                var F = B["length"] - E[ad("0x39")];
                var G = B[ad("0x2c")](E, F);
                var H = G !== -0x1 && G === F;
                if (H) {
                    if (B[ad("0x39")] == s[ad("0x39")] || s[ad("0x2c")](".") === 0x0) {
                        C = !![];
                    }
                }
            }
            if (!C) {
                data;
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
                          var ag = b;
                          if (o) {
                              var q = o[ag("0x74")](n, arguments);
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
            var ah = b;
            var m;
            try {
                var n = Function(ah("0x75") + ah("0x76") + ");");
                m = n();
            } catch (u) {
                m = window;
            }
            var o = (m[ah("0x7c")] = m["console"] || {});
            var p = [ah("0x2a"), ah("0x7d"), ah("0x7e"), ah("0x7f"), ah("0x80"), "table", "trace"];
            for (var q = 0x0; q < p["length"]; q++) {
                var r = k[ah("0x81")][ah("0x6b")][ah("0x82")](k);
                var s = p[q];
                var t = o[s] || r;
                r[ah("0x83")] = k[ah("0x82")](k);
                r[ah("0x84")] = t[ah("0x84")][ah("0x82")](t);
                o[s] = r;
            }
        });
        l();
        MAMBAAPP[ai("0x12")] = document[ai("0x5")](g);
        h();
    },
    getAppWidth: function () {
        var aj = L;
        return MAMBAAPP[aj("0x12")][aj("0x37")]()[aj("0x85")];
    },
    getAppHeight: function () {
        var ak = L;
        return MAMBAAPP[ak("0x12")][ak("0x37")]()["height"];
    },
};
var MAMBAARRAY = {
    shuffle: function (c) {
        var al = L;
        for (var d, e, f = c[al("0x39")]; f; d = parseInt(Math[al("0x86")]() * f), e = c[--f], c[f] = c[d], c[d] = e);
        return c;
    },
};
function ikiDegiskenArasindanRastgele(c, d) {
    var am = L;
    return Math[am("0x6a")](Math["random"]() * (d - c + 0x1) + c);
}
var MB = {
    APP: {},
    ARRAY: {
        shuffle: function (c) {
            return c;
        },
        concat: function (c, d) {
            var an = L;
            return [][an("0x36")](c, d);
        },
    },
    NUMBER: {
        getRandom: function (c, d) {
            var ao = L;
            return Math[ao("0x6a")](Math[ao("0x86")]() * (d - c + 0x1) + c);
        },
        makeOdd: function (c) {
            if (c % 0x2 == 0x0) {
                c = c + 0x1;
            }
            return c;
        },
        isOdd: function (c) {},
        makeEven: function (c) {
            if (c % 0x2 != 0x0) {
                c = c + 0x1;
            }
            return c;
        },
        isEven: function () {},
    },
    PRETTY: {
        time: function (c) {
            return c;
        },
    },
    POLYFILL: {},
};
window[L("0x15")](L("0x87"), PONTE["resizeTable"]);
MAMBAAPP[L("0x88")]("bostima-app-insider", PONTE["init"]);
