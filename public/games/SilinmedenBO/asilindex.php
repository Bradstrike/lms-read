<?php 
require __DIR__.'/../../../vendor/autoload.php';

    $app = require __DIR__ . '/../../../bootstrap/app.php';
?>

<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <title>Gölgeleme Çalışması | m5bilisim.com</title>
        <meta
            name="description"
            content="Bu sayfa okuma metinindeki kelimeleri gruplandırarak üzerinde gölge oluşturur. Hızlı okuma çalışmalarında kelimeler tek tek okunmamalıdır, gölgeleme çalışması her bakışta birden fazla kelime okuyabilme kabiliyetini geliştirmeye yöneliktir."
        />
        <meta name="keywords" content="hızlı okuma gölgeleme çalışması, gölgeleme çalışması, hızlı okuma çalışmaları" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <meta name="robots" content="index, follow" />
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="/plugins.bundle.css">
    
    
        <script>
            //kaynak sayfanın data-theme="dark" olursa bu script çalışır
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                document.documentElement.classList.add('dark');
                var p = document.getElementsByTagName("p");
                for (var i = 0; i < p.length; i++) {
                    p[i].style.color = "white";
                }
            }
        </script> 
    </head>
        
    <style>
        #information {
            width:95%;
            max-width:600px;
            padding:10px 10px 10px; 
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -50px;
            margin-left: -280px;
            background-color: #533483;
            background-image: url(vector-1.png); 
            border-radius:5px;
        }
    </style>
    
    <body style="padding: 0px; background-color: rgba(255, 0, 0, 0);">
        
        <div class="m5-c">
            <div class="m52">
                
                <div class="screen card card-border overlay overlay-block">
                    <div class="bilgi-cubugu">
                        <span  id="kelimeler">Kelime Sayısı: 337, Karakter Sayısı: 2788, Okuma Süresi: 1:25</span>
                    </div>
                    
                    <div class="py-5">
                                    <div class="card shadow-sm" style="background-color: rgba(255, 0, 0, 0);">
                                        <div class="baslik" style="text-align: center; background-color: rgba(255, 0, 0, 0);">
                                                <h2 class="metin-baslik card-title" style="background-color: rgba(255, 0, 0, 0);">İlk İnsanlar ve Yaşayışları</h2>
                                            </div>
                                        </div>
                                    <div class="okuma-testi-metin" unselectable="on">
                                        <div class="metincikler card card-flush h-xl-100">
                                            <div id="metin-blur" class="blurlu overlay" style="text-shadow: none;">
                                                <p>

                                                </p>

                                                 <!--KELİMELER GELDİ FAKAT HATA VAR BUNU DÜZELT-->
                                            </div>
                                        </div>
                            </div>
                    </div>
                </div>    
                    <div id="position">
                        <div id="information">
                                <div style="text-align:center;font-family:Lato;font-size:18px;font-weight:bold;color:#dbdbdb">Silinmeden Blok Okuma</div>
                                <div style="font-family:Lato;margin-top:20px;text-align:center;color:#c0c0c0">Bu egzersiz, kelimeleri bloklar halinde görme yeteneğinizi geliştirecek</div>
                            <div class="button-group">
                                <div id="start" style="font-family:Lato;">
                                    <a onclick="testiBaslat()" id="baslat-stil" href="javascript:void(0)">EGZERSİZİ BAŞLAT</a>
                                </div>
                            </div>
			            </div>
                    </div>
               </div>
            </div>
            
            <div class="tutucu seviye-tutucu" style="display: none;">
				<div class="gri-buton"><div class="seviye-basligi buton-baslik">4. Seviye</div><div class="buton-ok">▾</div></div>
				<div class="t s"></div>
				<div class="menu">
					<a id="level1" href="javascript:seviyeAyarla(1)">1. Seviye ~ 800ms</a>
					<a id="level2" href="javascript:seviyeAyarla(2)">2. Seviye ~ 700ms</a>
					<a id="level3" href="javascript:seviyeAyarla(3)">3. Seviye ~ 600ms</a>
					<a id="level4" href="javascript:seviyeAyarla(4)">4. Seviye ~ 500ms</a>
					<a id="level5" href="javascript:seviyeAyarla(5)">5. Seviye ~ 300ms</a>
					<a id="level6" href="javascript:seviyeAyarla(6)">6. Seviye ~ 200ms</a>
					<a id="level7" href="javascript:seviyeAyarla(7)">7. Seviye ~ 100ms</a>
					<a id="level8" href="javascript:seviyeAyarla(8)">8. Seviye ~ 75ms</a>
					<a id="level9" href="javascript:seviyeAyarla(9)">9. Seviye ~ 50ms</a>
				</div>
			</div>


        </div>
        <div class="t s"></div>
        <div class="t s"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="/ads.js"></script>-->
       
        <script type="text/javascript" src="TweenMax.min.js"></script>
        <script>

            
            
        //Uygulama configden düz metin çekerek en doğru şekilde çalışıyor
        //HTML tagleri yok - boşluklar yok.
            
            
            


            var urlAdresleri = [];
            var urlIsimleri = [];
            urlIsimleri.push("Hızlı Okuma Testi");
            urlAdresleri.push("/tr/hizli-okuma/okuma-testi/");

            $(document).ready(function () {
                $("input.m51-arama-input").val("");
                $("input.m51-arama-input").keyup(function (event) {
                    var filtre = $(".m51-arama-input").val();
                    if (filtre.length == 0) {
                        $(".hizli-sonuc a").show();
                    }
                    $(".hizli-sonuc a").hide();
                    $(".hizli-sonuc a:containsIN('" + filtre + "')").show();
                });
                $(".m51-arama-input").click(function () {
                    $(".hizli-sonuc-pen").show();
                });
                $(".m51-arama-input").focus(function () {
                    $(".hizli-sonuc-pen").show();
                });
                $(".okuma-testi-metin")
                    .attr("unselectable", "on")
                    .css("-webkit-user-select", "none")
                    .css("-moz-user-select", "none")
                    .css("-ms-user-select", "none")
                    .css("-o-user-select", "none")
                    .css("user-select", "none")
                    .on("selectstart", false);
                $(document).mouseup(function (e) {
                    var z = $(".tutucu .menu, .hizli-sonuc-pen");
                    if (!z.is(e.target) && z.has(e.target).length === 0) {
                        z.hide();
                    }
                });
                $(".m51 .menu a").each(function () {
                    urlAdresleri.push($(this).attr("href"));
                    urlIsimleri.push($(this).text());
                });
                $(".tutucu").click(function () {
                    if (egzersizBasladi) return;
                    $(this).find(".menu").show();
                });
                hizliAramaOlustur();
            });

            function hizliAramaOlustur() {
                var aktarma = "";
                var dongu = urlAdresleri.length;
                for (var i = 0; i < dongu; i++) {
                    aktarma += "<a href='" + urlAdresleri[i] + "'>" + urlIsimleri[i] + "</a>";
                }
                $(".hizli-sonuc").html(aktarma);
                sirala($(".hizli-sonuc"), $(".hizli-sonuc a"), "abc");
            }

            $.extend($.expr[":"], {
                containsIN: function (elem, i, match, array) {
                    return (elem.textContent || elem.innerText || "").turkishToLower().indexOf((match[3] || "").turkishToLower()) >= 0;
                },
            });

            String.prototype.turkishToUpper = function () {
                var string = this;
                var letters = { i: "İ", ş: "Ş", ğ: "Ğ", ü: "Ü", ö: "Ö", ç: "Ç", ı: "I" };
                string = string.replace(/(([iışğüçö]))+/g, function (letter) {
                    return letters[letter];
                });
                return string.toUpperCase();
            };

            String.prototype.turkishToLower = function () {
                var string = this;
                var letters = { İ: "i", I: "ı", Ş: "ş", Ğ: "ğ", Ü: "ü", Ö: "ö", Ç: "ç" };
                string = string.replace(/(([İIŞĞÜÇÖ]))+/g, function (letter) {
                    return letters[letter];
                });
                return string.toLowerCase();
            };

            function sirala(y, z, x) {
                tekerlemeler = z;
                tekerlemeListesi = tekerlemeler.get();
                tekerlemeListesi.sort(function (a, b) {
                    var uzunluka = $(a).text().length;
                    var uzunlukb = $(b).text().length;
                    if (x == "abc") {
                        return $(a).text().turkishToLower().localeCompare($(b).text().turkishToLower());
                    } else if (x == "cba") {
                        return $(b).text().turkishToLower().localeCompare($(a).text().turkishToLower());
                    } else if (x == "09") {
                        return uzunluka - uzunlukb;
                    } else if (x == "90") {
                        return uzunlukb - uzunluka;
                    }
                });
                $.each(tekerlemeListesi, function (index, item) {
                    y.append(item);
                });
            }

            (function () {
                String.prototype.originalLocaleCompare = String.prototype.localeCompare;
                var alphabet = [
                    "A",
                    "a",
                    "B",
                    "b",
                    "C",
                    "c",
                    "Ç",
                    "ç",
                    "D",
                    "d",
                    "E",
                    "e",
                    "F",
                    "f",
                    "G",
                    "g",
                    "Ğ",
                    "ğ",
                    "H",
                    "h",
                    "I",
                    "ı",
                    "İ",
                    "i",
                    "J",
                    "j",
                    "K",
                    "k",
                    "L",
                    "l",
                    "M",
                    "m",
                    "N",
                    "n",
                    "O",
                    "o",
                    "Ö",
                    "ö",
                    "P",
                    "p",
                    "R",
                    "r",
                    "S",
                    "s",
                    "Ş",
                    "ş",
                    "T",
                    "t",
                    "U",
                    "u",
                    "Ü",
                    "ü",
                    "V",
                    "v",
                    "Y",
                    "y",
                    "Z",
                    "z",
                ];
                String.prototype.localeCompare = function (b) {
                    var a = this;
                    if (a == b) {
                        return 0;
                    }

                    for (var i = 0, _len = Math.min(a.length, b.length); i < _len; i++) {
                        var x = a.charAt(i),
                            y = b.charAt(i);
                        if (x === y) {
                            continue;
                        }
                        var ix = alphabet.indexOf(x),
                            iy = alphabet.indexOf(y);
                        if (ix != -1 && iy != -1) {
                            return ix < iy ? -1 : 1;
                        }
                        return x.originalLocaleCompare(y);
                    }
                };
            })();
        </script>
        <script>
            var metinleGeldi = false;
            var gelenMetin;
        </script>
        <script>
            var seviyeler = [0, 800, 700, 600, 500, 300, 200, 100, 75, 50, 0]; // 10 Özel süre
            var seviye = 4;
            var kutuphaneler = ["Renkli Dünya 1", "Renkli Dünya 2"];
            var aktifKutuphane = 0;
            var aktifMetin = 1;
            var okumaMetini = "";
            var orMetin = "";
            var kelimeSayisi = 0;
            var karakterSayisi = 0;
            var bosluksuzKarakterSayisi = 0;
            var metinler = [];
            // metinler[1] = [
            //     "Konfüçyüs",
            //     "Patates",
            //     "Etrüskler",
            //     "Köpekbalıkları",
            //     "Denizaltılar",
            //     "Kaslar",
            //     "Kurt",
            //     "Oksijen",
            //     "Pamuk",
            //     "Karayolları",
            //     "Kertenkele",
            //     "Şemsiye",
            //     "Sezar",
            //     "Kurşun Kalem",
            //     "Havagazı",
            //     "Rengeyiği",
            //     "Köprü",
            //     "Aztekler",
            //     "Yağış",
            //     "Mimari",
            //     "Buzullar",
            //     "Işıklılar",
            //     "Hindi",
            //     "Civa",
            //     "Bebek",
            //     "Cilt",
            //     "Yunan - Roma",
            //     "Teleferik",
            //     "Koyunlar ve Keçiler",
            //     "Atom",
            //     "Denizyıldızı",
            //     "Dikiş Makinesi",
            //     "Eşek",
            //     "Balina",
            //     "Meyve",
            //     "Kuşlar ve Yuvaları",
            //     "Toprak Kazanma",
            //     "Pankreas",
            //     "Buda",
            //     "Kimya",
            //     "Süt",
            //     "Karaciğer",
            //     "Mikroskop",
            // ];
            $(document).ready(function () {
                $(".okuma-testi-metin")
                    .attr("unselectable", "on")
                    .css("-webkit-user-select", "none")
                    .css("-moz-user-select", "none")
                    .css("-ms-user-select", "none")
                    .css("-o-user-select", "none")
                    .css("user-select", "none")
                    .on("selectstart", false)
                    .on("mousedown", false);
                $(".okuma-testi-metin").bind("cut copy paste", function (e) {
                    return false;
                });
                if (metinleGeldi) {
                    aktifMetin = gelenMetin;
                } else {
                    aktifMetin = ikiDegiskenArasindanRastgele(1, 93);
                }
                if (aktifMetin == 0 || aktifMetin <= 50) {
                    aktifKutuphane = 0;
                } else if (aktifMetin == 51 || aktifMetin <= 93) {
                    aktifKutuphane = 1;
                }
                metinMenusuOlustur(aktifKutuphane);
                $.ajax({
                    dataType: "json",
                    url: "../../_json/text/" + aktifMetin + ".json",
                    cache: true,
                    success: function (data) {
                        setTimeout(function () {
                            console.log(data);
                            okumaMetini = data;
                            metiniOlustur();
                            $(".metin-basligi").text(okumaMetini[0]);
                            $("#metin-numarasi").val(aktifMetin);
                            $("#kelime-sayisi").text(kelimeSayisi);
                            $("#karakter-sayisi").text(karakterSayisi);
                        }, 200);
                    },
                });
            });
            function ozelMetincik() {
                $("#ozel-metin-uyari").hide();
                if ($.trim($("#ozel-metin").val()).length <= 5) {
                    $("#ozel-metin-uyari").show();
                    return;
                }
                $(".tutucu .menu").hide();

                kelimeListesi = $.trim($("#ozel-metin").val());
                // ayırmalar
                kelimeListesi = kelimeListesi.replace(/[\u2018\u2019\u201A]/g, "'");
                // Çift tırnaklar
                kelimeListesi = kelimeListesi.replace(/[\u201C\u201D\u201E]/g, '"');
                // Üç noktalar
                kelimeListesi = kelimeListesi.replace(/\u2026/g, "...");
                // Çizgiler
                kelimeListesi = kelimeListesi.replace(/[\u2013\u2014]/g, "-");

                // Birden fazla olan boşlukları sil
                kelimeListesi = kelimeListesi.replace(/\s\s+/g, " ");
                // Birden fazla olan satır atlamaları tek atlamaya çevir!;
                kelimeListesi = kelimeListesi.replace(/[\r\n]+/gm, "\n");
                kelimeListesi = kelimeListesi.split("\n");

                kelimeListesi.unshift("Özel Çalışma");
                okumaMetini = kelimeListesi;
                metiniOlustur();
            }

            function metinMenusuOlustur(x) {
                $(".tutucu .menu").hide();
                $(".metinler-baslik").text("Renkli Dünya " + (x + 1) + " Metinleri");
                $(".kutuphane-basligi").text(kutuphaneler[x]);
                var a = metinler[x].length;
                var aktarma = "";
                var duzeltme = 0;
                if (x == 1) duzeltme = 50;
                for (var i = 1; i <= a; i++) {
                    var number = "";
                    var duzeltilmis = i + duzeltme;
                    if (duzeltilmis <= 9) number = "000" + duzeltilmis;
                    else if (duzeltilmis <= 99) number = "00" + duzeltilmis;
                    aktarma += '<a href="?metin=' + duzeltilmis + '">' + number + " - " + metinler[x][i - 1] + "</a>";
                }
                $(".sukrul").html(aktarma);
            }

            var yontem = 0;
            function yontemAyarla(x) {
                $(".tutucu .menu").hide();
                yontem = x;
                if (yontem == 0) {
                    $(".yontem-basligi").text("Silinmeden");
                } else {
                    $(".yontem-basligi").text("Silinerek");
                }
            }

            function kelimeAyarla(x) {
                $(".tutucu .menu").hide();
                kelimeGrubu = x;
                $(".kelime-basligi").text(x + " Kelime");
                metiniOlustur();
            }

            var hizYontemi = 1; // Atlama Hızı
            function hiziAyarla(x) {
                $(".tutucu .menu").hide();
                hizYontemi = x;
                if (hizYontemi == 1) {
                    $(".hiz-basligi").text("Atlama hızı");
                    $(".hiz-tutucu").addClass("pasif-tutucu").removeClass("tutucu");
                    $(".seviye-tutucu").addClass("tutucu").removeClass("pasif-tutucu");
                    $(".hiz-tutucu").off("click");
                    $(".seviye-tutucu")
                        .off("click")
                        .click(function () {
                            if (egzersizBasladi) return;
                            $(this).find(".menu").show();
                            console.log("+");
                        });
                } else {
                    $(".hiz-basligi").text("Okuma hızı");
                    $(".seviye-tutucu").addClass("pasif-tutucu").removeClass("tutucu");
                    $(".hiz-tutucu").addClass("tutucu").removeClass("pasif-tutucu");
                    $(".seviye-tutucu").off("click");
                    $(".hiz-tutucu")
                        .off("click")
                        .click(function () {
                            if (egzersizBasladi) return;
                            $(this).find(".menu").show();
                            console.log("+");
                        });
                }
                bilgileriGuncelle();
            }

            function seviyeAyarla(x) {
                $(".tutucu .menu").hide();
                $(".seviye-basligi").text(x + ". Seviye");
                seviye = x;
                console.log(bitirmeSayisi * seviyeler[seviye] + " ms");
                bilgileriGuncelle();
            }

            var kelimeGrubu = 2;
            var donguSayisi = 0;
            var bitirmeSayisi = 0;
            function metiniOlustur() {
                dongusayisi = 0;
                bitirmeSayisi = 0;
                orMetin = "";
                var sayac = 0;
                $(".metin-baslik").text(okumaMetini[0]);
                var aktarma = "";
                aktarma += '<div id="metin-blur" class="blurlu" style="text-shadow:none">';
                var zzz = "";
                for (var i = 1; i < okumaMetini.length; i++) {
                    zzz = "";
                    zzz += okumaMetini[i];
                    var kelimeler = zzz.split(" ");
                    aktarma += "<p>";
                    var kelimeGrubuSayisi = Math.ceil(kelimeler.length / kelimeGrubu);
                    var kelimeSayisi = kelimeler.length;
                    var kelimeIsaret = 0;
                    for (var j = 0; j < kelimeGrubuSayisi; j++) {
                        aktarma += "<span id='k" + sayac + "'>";
                        if (kelimeSayisi >= kelimeGrubu) {
                            donguSayisi = kelimeGrubu;
                        } else if (kelimeSayisi < kelimeGrubu) {
                            donguSayisi = kelimeSayisi;
                        }
                        for (var t = 0; t < donguSayisi; t++) {
                            aktarma += kelimeler[kelimeIsaret] + " ";
                            kelimeIsaret++;
                        }
                        kelimeSayisi = kelimeSayisi - kelimeGrubu;
                        aktarma += "</span>";
                        sayac++;
                        

                    }
                    aktarma += "</p>";
                    orMetin += okumaMetini[i] + " ";
                }
                bitirmeSayisi = sayac;
                aktarma += "</div>";
                aktarma += "</div>";
                $(".metincikler").html(aktarma);
                bilgileriGuncelle();
            }

            var okumaHizi = 0;
            function bilgileriGuncelle() {
                kelimeSayisi = orMetin.split(" ").length;
                karakterSayisi = orMetin.length;
                var x;
                var y;
                var sure = 0;
                if (hizYontemi == 1) {
                    sure = Math.floor((bitirmeSayisi * seviyeler[seviye]) / 1000);
                    okumaHizi = Math.round((kelimeSayisi / sure) * 60);
                } else if (hizYontemi == 2) {
                    okumaHizi = parseInt($("#ozel-harf").val());
                    sure = kelimeSayisi / okumaHizi;
                    var asagiYuvarla = Math.floor(sure);
                    var saniye = sure - Math.floor(sure);
                    // console.log("Okuma Hızı Süre: " +sure);
                    // console.log("Aşağı Yuvarla: " +asagiYuvarla*1000*60);
                    // console.log("Kalan Salise: " +(saniye*60)*1000);
                    // console.log("Atlama Sayısı: " +bitirmeSayisi);
                    sure = Math.round(asagiYuvarla * 60 + saniye * 60);
                    // console.log("Atlama Hızı: " + (((asagiYuvarla*1000*60) + Math.round((saniye*60)*1000))/bitirmeSayisi));
                    seviyeler[10] = Math.round((asagiYuvarla * 1000 * 60 + Math.round(saniye * 60 * 1000)) / bitirmeSayisi);
                    seviye = 10;
                }
                var aktarma = okumaHizi + " kelime/dakika";
                x = Math.floor(sure / 60);
                y = sure % 60;
                if (y < 10) y = "0" + y;
                $("#kelimeler").text("Kelime Sayısı: " + kelimeSayisi + ", Karakter Sayısı: " + karakterSayisi + ", Okuma Süresi: " + x + ":" + y);
                $(".okuma-hiz-basligi").text(aktarma);
                $("#ozel-harf").val(okumaHizi);
                console.log(bitirmeSayisi);
                console.log(bitirmeSayisi * seviyeler[seviye] + " ms");
            }

            // Kelime Sayısı = 347;
            // Okuma Hızı = 50;
            // Atlama süresi kaç ms olmalıdır?????

            
            
            // $(".okuma-testi-metin").hide();
            
           
            var egzersizBasladi = false;
            function testiBaslat() {
                $(".okuma-testi-metin").show();
                egzersizBasladi = true;
                $(".tutucu").css("opacity", "0.5");
                $(".testi-baslat-tutucu, #karanlik").hide();
                egzersizTimer = setInterval(function () {
                    baslat();
                }, seviyeler[seviye]);
                console.log($(".okuma-testi-metin").css("height"));

                 $("#information").hide();
                }

            function downSpeed(x) {
                var hiz = parseInt($("#ozel-harf").val());
                var yeniHiz = hiz - x;
                if (yeniHiz < 50) yeniHiz = 50;
                $("#ozel-harf").val(yeniHiz);
            }

            function upSpeed(x) {
                var hiz = parseInt($("#ozel-harf").val());
                var yeniHiz = hiz + x;
                if (yeniHiz > 2000) yeniHiz = 2000;
                $("#ozel-harf").val(yeniHiz);
            }

            function ozelHizAktar() {
                $(".tutucu .menu").hide();
                bilgileriGuncelle();
            }

            var isaret = 0;
            var hangisatir = 1;
            function baslat() {
                var genislik = $(".progress").width();
                var genisligiAyarla = Math.round((genislik / bitirmeSayisi) * isaret);
                $("#progressbar").css("width", genisligiAyarla);
                $('.okuma-testi-metin p span[id="k' + isaret + '"]')
                    .css("background", "none")
                    .css("color", "#555");
                if (yontem == 1) $('.okuma-testi-metin p span[id="k' + (isaret - 1) + '"]').css("color", "#fff");
                isaret++;
                if (isaret == bitirmeSayisi) {
                    $("#progressbar").css("width", "100%");
                    clearInterval(egzersizTimer);
                    $(".okuma-testi-metin").append(
                        '<div id="bitti" style="position:absolute;top:0;width:100%;left:0;bottom:0;right:0;border:4px solid #dadada;"><h2 style="color:#999;font-size:26px;margin-top:10px;text-align:center;font-family:Vollkorn">Çalışma Tamamlandı!</h2><div class="testi-bitir-tutucu"><a id="finish" href="" class="yesil-buton">Çalışmayı Bitir</a></div>'
                    );
                    return;
        }
                var p = $('.okuma-testi-metin p span[id="k' + isaret + '"]').position();
                var aktifSatir = p.top;
                console.log(aktifSatir);
                if (aktifSatir >= 432 * hangisatir) {
                    setTimeout(function () {
                        $(".metincikler").scrollTop(432 * hangisatir);
                        hangisatir++;
                    }, seviyeler[seviye] - 10);
                }
                
            }
            
            
            function testiBitir() {
                var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
                drawerCloseBtnb.click();
                $(".testi-bitir-tutucu a").hide();
                $("#okuma-hizi").text(Math.round((kelimeSayisi / ileriSayim) * 60) + " kelime/dakika");
                $(".sonuc").show();
                $(".testi-bitir-tutucu").append(
                    '<a href="/tr/hizli-okuma/calismalar/golgeleme-calismasi/" class="yesil-buton">Yeni Çalışma Başlat!</a>'
                );            
            }

            function ikiDegiskenArasindanRastgele(x, y) {
                return Math.floor(Math.random() * (y - x + 1) + x);
            }

            var ileriSayim = 0;
            function ileri_sayim() {
                ileriSayim++;
                var x;
                var y;
                x = Math.floor(ileriSayim / 60);
                y = ileriSayim % 60;
                if (y < 10) y = "0" + y;
                $("#zaman").text(x + ":" + y);
            }

            $(document).on("click", "#finish", function (e) {
                e.preventDefault();
                window.parent.testFunc();
                testiBitir();

            });

           
        </script>
    </body>
</html>
