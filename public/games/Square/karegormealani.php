<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="howler.min.js"></script>

</head>
<body>
    <div id="bostima-app">
        <div id="settings">
            <div style="height: 42px; line-height: 38px; border-bottom: 3px solid #ddd; background: #fafafa; color: #888; padding-left: 10px; font-size: 14px; text-transform: uppercase; font-weight: bold;">Ayarlar</div>
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
                    <div style="float: left;">Kare boyutu</div>
                    <div style="float: right; text-align: center;">
                        <div class="left-button" onclick="PONTE.downBoxSize()"></div>
                        <div id="box-size-text" style="text-transform: none; float: left; border-left: 3px solid #ddd; width: 80px;">13 x 13</div>
                        <div class="right-button" onclick="PONTE.upBoxSize()"></div>
                    </div>
                </div>
                <div class="arrow-button">
                    <div style="float: left;">Seviye</div>
                    <div style="float: right; text-align: center;">
                        <div class="left-button" onclick="PONTE.downLevel()"></div>
                        <div id="level-text" style="text-transform: none; float: left; border-left: 3px solid #ddd; width: 80px;">1</div>
                        <div class="right-button" onclick="PONTE.upLevel()"></div>
                    </div>
                </div>
                <div class="menu-button" onclick="PONTE.toggleSound()">
                    <div style="float: left;">Doğru / yanlış sesleri</div>
                    <div id="sound-toggle" class="button-toggles open"><div></div></div>
                </div>
                <!--
                <div class="menu-button" onclick="PONTE.toggleFocus()">
                    <div style="float:left">Odak noktasını göster</div><div id="focus-toggle" class="button-toggles open"><div></div></div>
                </div>
                -->
            </div>
        </div>
        <div class="bostima-container">
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
                .button-group div,.button-group a{display:inline-block;cursor:pointer;height:40px;line-height:38px;background:#E94560;color:white;text-align:center;font-size:14px;padding:0 20px;margin:0 3px;border-radius:2px;text-transform:uppercase}

                
                /* SQUARE BUTTONS ABSOLUTE */
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
    
                .table {
                    display: table;
                    width: 100%;
                    text-align: center;
                    font-family: tahoma;
                    color: #4b4b4b;
                    font-weight: 500;
                    margin: auto;
                }
                .row {
                    display: table-row;
                }
                .cell {
                    cursor: default;
                    position: relative;
                    display: table-cell;
                    vertical-align: middle;
                }
                .focus-point {
                    position: absolute;
                    width: 12px;
                    height: 12px;
                    top: 50%;
                    margin-top: -6px;
                    left: 50%;
                    margin-left: -6px;
                    background: #bbb;
                    border-radius: 50%;
                }
    
                #countdown {
                    float: right;
                    height: 32px;
                    line-height: 28px;
                    border-radius: 4px;
                    border: 1px solid #ddd;
                    border-bottom: 2px solid #ddd;
                    margin-top: 9px;
                    text-align: center;
                    color: #868686;
                    font-size: 14px;
                    padding: 0 10px;
                }

                #start {
                    background-color: #009ef7;
                }
            </style>
            <div id="information">
                <div style="width:95%;max-width:600px;padding:10px 10px 10px; position: absolute;top: 43%;left: 50%;margin-top: -50px;margin-left: -280px;background-color: #533483;background-image: url(vector-1.png); border-radius:5px">
                    <div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#dbdbdb">Kare Görme Alanı</div>
                    <div style="margin-top:20px;text-align:center;color:#c0c0c0">Odak noktasına odaklanarak, işaretlenmiş harfleri başınızı oynatmadan görmeye çalışın. Harfler aynıysa "Aynı Harfler (Sağ Yön Tuşu)", farklıysa "Farklı Harfler (Sol Yön Tuşu)" butonlarına tıklayın veya klavye kısayollarını kullanın.</div>
                    <div class="button-group"><div id="start">Egzersizi başlat</div></div>
                </div>
             </div>
            <div id="completed">
                <div style="max-width: 600px; margin: 60px auto 20px; padding: 40px 20px; border: 3px solid #ddd; border-radius: 5px;">
                    <div style="text-align: center; font-family: georgia; font-size: 32px; color: #647687;">Egzersiz tamamlandı!</div>
                    <div class="button-group"><a id="finish" href="">Egzersizi Bitir</a></div>
                </div>
            </div>
            <div id="bostima-app-insider" style="position: relative; background: none; width: 100%; height: 100%;">
                <div style="width: 100%; background: none; height: 50px; padding-right: 9px;">
                    <div id="countdown">01:00</div>
                    <div
                        id="seviye"
                        style="
                            float: right;
                            height: 32px;
                            line-height: 28px;
                            border-radius: 4px;
                            border: 1px solid #ddd;
                            border-bottom: 2px solid #ddd;
                            margin-top: 9px;
                            text-align: center;
                            color: #868686;
                            font-size: 14px;
                            padding: 0 10px;
                            margin-right: 5px;
                        "
                    >
                        Seviye: 1
                    </div>
                    <div
                        id="correct-answer"
                        style="
                            float: right;
                            height: 32px;
                            line-height: 28px;
                            border-radius: 4px;
                            border: 1px solid #ddd;
                            border-bottom: 2px solid #ddd;
                            margin-top: 9px;
                            text-align: center;
                            color: #868686;
                            font-size: 14px;
                            padding: 0 10px;
                            margin-right: 5px;
                        "
                    >
                        Puan: 0
                    </div>
                    <div class="t s"></div>
                </div>
                <div id="letter-table">
                    <div class="table-insider" style="display: flex; height: 779px;">
                        <div class="table" style="width: 739px; height: 739px; font-size: 26px;">
                            <div class="row">
                                <div class="cell" data="0_0" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                                <div class="cell" data="1_0" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="2_0" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="3_0" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="4_0" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="5_0" data-letter="P" style="height: 56.84615384615385px; width: 56.84615384615385px;">P</div>
                                <div class="cell" data="6_0" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                                <div class="cell" data="7_0" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="8_0" data-letter="J" style="height: 56.84615384615385px; width: 56.84615384615385px;">J</div>
                                <div class="cell" data="9_0" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="10_0" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="11_0" data-letter="R" style="height: 56.84615384615385px; width: 56.84615384615385px;">R</div>
                                <div class="cell" data="12_0" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_1" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="1_1" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="2_1" data-letter="I" style="height: 56.84615384615385px; width: 56.84615384615385px;">I</div>
                                <div class="cell" data="3_1" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                                <div class="cell" data="4_1" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="5_1" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="6_1" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="7_1" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="8_1" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="9_1" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="10_1" data-letter="M" style="height: 56.84615384615385px; width: 56.84615384615385px;">M</div>
                                <div class="cell" data="11_1" data-letter="Z" style="height: 56.84615384615385px; width: 56.84615384615385px;">Z</div>
                                <div class="cell" data="12_1" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_2" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                                <div class="cell" data="1_2" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="2_2" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="3_2" data-letter="A" style="height: 56.84615384615385px; width: 56.84615384615385px;">A</div>
                                <div class="cell" data="4_2" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="5_2" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="6_2" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="7_2" data-letter="Ğ" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ğ</div>
                                <div class="cell" data="8_2" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="9_2" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="10_2" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="11_2" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;">İ</div>
                                <div class="cell" data="12_2" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_3" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="1_3" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="2_3" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="3_3" data-letter="I" style="height: 56.84615384615385px; width: 56.84615384615385px;">I</div>
                                <div class="cell" data="4_3" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="5_3" data-letter="P" style="height: 56.84615384615385px; width: 56.84615384615385px;">P</div>
                                <div class="cell" data="6_3" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="7_3" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="8_3" data-letter="D" style="height: 56.84615384615385px; width: 56.84615384615385px;">D</div>
                                <div class="cell" data="9_3" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                                <div class="cell" data="10_3" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="11_3" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="12_3" data-letter="J" style="height: 56.84615384615385px; width: 56.84615384615385px;">J</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_4" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="1_4" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="2_4" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="3_4" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="4_4" data-letter="I" style="height: 56.84615384615385px; width: 56.84615384615385px;">I</div>
                                <div class="cell" data="5_4" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="6_4" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                                <div class="cell" data="7_4" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="8_4" data-letter="Z" style="height: 56.84615384615385px; width: 56.84615384615385px;">Z</div>
                                <div class="cell" data="9_4" data-letter="R" style="height: 56.84615384615385px; width: 56.84615384615385px;">R</div>
                                <div class="cell" data="10_4" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="11_4" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                                <div class="cell" data="12_4" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_5" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="1_5" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="2_5" data-letter="I" style="height: 56.84615384615385px; width: 56.84615384615385px;">I</div>
                                <div class="cell" data="3_5" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="4_5" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="5_5" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="6_5" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">
                                    <span style="position: absolute; width: 52px; height: 52px; line-height: 50px; color: #808080; top: 50%; margin-top: -26px; left: 50%; margin-left: -26px; background: #eee; border-radius: 50%;">M</span>
                                </div>
                                <div class="cell" data="7_5" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                                <div class="cell" data="8_5" data-letter="A" style="height: 56.84615384615385px; width: 56.84615384615385px;">A</div>
                                <div class="cell" data="9_5" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="10_5" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="11_5" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="12_5" data-letter="O" style="height: 56.84615384615385px; width: 56.84615384615385px;">O</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_6" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="1_6" data-letter="Z" style="height: 56.84615384615385px; width: 56.84615384615385px;">Z</div>
                                <div class="cell" data="2_6" data-letter="P" style="height: 56.84615384615385px; width: 56.84615384615385px;">P</div>
                                <div class="cell" data="3_6" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="4_6" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="5_6" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">
                                    <span style="position: absolute; width: 52px; height: 52px; line-height: 50px; color: #808080; top: 50%; margin-top: -26px; left: 50%; margin-left: -26px; background: #eee; border-radius: 50%;">M</span>
                                </div>
                                <div class="cell" data="6_6" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;"><span class="focus-point"></span></div>
                                <div class="cell" data="7_6" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">
                                    <span style="position: absolute; width: 52px; height: 52px; line-height: 50px; color: #808080; top: 50%; margin-top: -26px; left: 50%; margin-left: -26px; background: #eee; border-radius: 50%;">M</span>
                                </div>
                                <div class="cell" data="8_6" data-letter="A" style="height: 56.84615384615385px; width: 56.84615384615385px;">A</div>
                                <div class="cell" data="9_6" data-letter="C" style="height: 56.84615384615385px; width: 56.84615384615385px;">C</div>
                                <div class="cell" data="10_6" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="11_6" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                                <div class="cell" data="12_6" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_7" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="1_7" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                                <div class="cell" data="2_7" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="3_7" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="4_7" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                                <div class="cell" data="5_7" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="6_7" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">
                                    <span style="position: absolute; width: 52px; height: 52px; line-height: 50px; color: #808080; top: 50%; margin-top: -26px; left: 50%; margin-left: -26px; background: #eee; border-radius: 50%;">M</span>
                                </div>
                                <div class="cell" data="7_7" data-letter="P" style="height: 56.84615384615385px; width: 56.84615384615385px;">P</div>
                                <div class="cell" data="8_7" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;">İ</div>
                                <div class="cell" data="9_7" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="10_7" data-letter="Ğ" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ğ</div>
                                <div class="cell" data="11_7" data-letter="O" style="height: 56.84615384615385px; width: 56.84615384615385px;">O</div>
                                <div class="cell" data="12_7" data-letter="D" style="height: 56.84615384615385px; width: 56.84615384615385px;">D</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_8" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="1_8" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="2_8" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                                <div class="cell" data="3_8" data-letter="O" style="height: 56.84615384615385px; width: 56.84615384615385px;">O</div>
                                <div class="cell" data="4_8" data-letter="D" style="height: 56.84615384615385px; width: 56.84615384615385px;">D</div>
                                <div class="cell" data="5_8" data-letter="M" style="height: 56.84615384615385px; width: 56.84615384615385px;">M</div>
                                <div class="cell" data="6_8" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="7_8" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="8_8" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="9_8" data-letter="A" style="height: 56.84615384615385px; width: 56.84615384615385px;">A</div>
                                <div class="cell" data="10_8" data-letter="C" style="height: 56.84615384615385px; width: 56.84615384615385px;">C</div>
                                <div class="cell" data="11_8" data-letter="R" style="height: 56.84615384615385px; width: 56.84615384615385px;">R</div>
                                <div class="cell" data="12_8" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_9" data-letter="Ş" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ş</div>
                                <div class="cell" data="1_9" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;">İ</div>
                                <div class="cell" data="2_9" data-letter="M" style="height: 56.84615384615385px; width: 56.84615384615385px;">M</div>
                                <div class="cell" data="3_9" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="4_9" data-letter="A" style="height: 56.84615384615385px; width: 56.84615384615385px;">A</div>
                                <div class="cell" data="5_9" data-letter="V" style="height: 56.84615384615385px; width: 56.84615384615385px;">V</div>
                                <div class="cell" data="6_9" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="7_9" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                                <div class="cell" data="8_9" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="9_9" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="10_9" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="11_9" data-letter="J" style="height: 56.84615384615385px; width: 56.84615384615385px;">J</div>
                                <div class="cell" data="12_9" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_10" data-letter="P" style="height: 56.84615384615385px; width: 56.84615384615385px;">P</div>
                                <div class="cell" data="1_10" data-letter="U" style="height: 56.84615384615385px; width: 56.84615384615385px;">U</div>
                                <div class="cell" data="2_10" data-letter="I" style="height: 56.84615384615385px; width: 56.84615384615385px;">I</div>
                                <div class="cell" data="3_10" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                                <div class="cell" data="4_10" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="5_10" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="6_10" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;">İ</div>
                                <div class="cell" data="7_10" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="8_10" data-letter="C" style="height: 56.84615384615385px; width: 56.84615384615385px;">C</div>
                                <div class="cell" data="9_10" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                                <div class="cell" data="10_10" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="11_10" data-letter="B" style="height: 56.84615384615385px; width: 56.84615384615385px;">B</div>
                                <div class="cell" data="12_10" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_11" data-letter="J" style="height: 56.84615384615385px; width: 56.84615384615385px;">J</div>
                                <div class="cell" data="1_11" data-letter="S" style="height: 56.84615384615385px; width: 56.84615384615385px;">S</div>
                                <div class="cell" data="2_11" data-letter="K" style="height: 56.84615384615385px; width: 56.84615384615385px;">K</div>
                                <div class="cell" data="3_11" data-letter="D" style="height: 56.84615384615385px; width: 56.84615384615385px;">D</div>
                                <div class="cell" data="4_11" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                                <div class="cell" data="5_11" data-letter="Ç" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ç</div>
                                <div class="cell" data="6_11" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="7_11" data-letter="R" style="height: 56.84615384615385px; width: 56.84615384615385px;">R</div>
                                <div class="cell" data="8_11" data-letter="Y" style="height: 56.84615384615385px; width: 56.84615384615385px;">Y</div>
                                <div class="cell" data="9_11" data-letter="O" style="height: 56.84615384615385px; width: 56.84615384615385px;">O</div>
                                <div class="cell" data="10_11" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="11_11" data-letter="H" style="height: 56.84615384615385px; width: 56.84615384615385px;">H</div>
                                <div class="cell" data="12_11" data-letter="F" style="height: 56.84615384615385px; width: 56.84615384615385px;">F</div>
                            </div>
                            <div class="row">
                                <div class="cell" data="0_12" data-letter="Ü" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ü</div>
                                <div class="cell" data="1_12" data-letter="M" style="height: 56.84615384615385px; width: 56.84615384615385px;">M</div>
                                <div class="cell" data="2_12" data-letter="İ" style="height: 56.84615384615385px; width: 56.84615384615385px;">İ</div>
                                <div class="cell" data="3_12" data-letter="E" style="height: 56.84615384615385px; width: 56.84615384615385px;">E</div>
                                <div class="cell" data="4_12" data-letter="Ö" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ö</div>
                                <div class="cell" data="5_12" data-letter="L" style="height: 56.84615384615385px; width: 56.84615384615385px;">L</div>
                                <div class="cell" data="6_12" data-letter="O" style="height: 56.84615384615385px; width: 56.84615384615385px;">O</div>
                                <div class="cell" data="7_12" data-letter="G" style="height: 56.84615384615385px; width: 56.84615384615385px;">G</div>
                                <div class="cell" data="8_12" data-letter="Ğ" style="height: 56.84615384615385px; width: 56.84615384615385px;">Ğ</div>
                                <div class="cell" data="9_12" data-letter="U" style="height: 56.84615384615385px; width: 56.84615384615385px;">U</div>
                                <div class="cell" data="10_12" data-letter="N" style="height: 56.84615384615385px; width: 56.84615384615385px;">N</div>
                                <div class="cell" data="11_12" data-letter="T" style="height: 56.84615384615385px; width: 56.84615384615385px;">T</div>
                                <div class="cell" data="12_12" data-letter="D" style="height: 56.84615384615385px; width: 56.84615384615385px;">D</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 100px; text-align: center; background: none;">
                    <div style="display: flex; width: 50%; float: left; height: 100px;">
                        <div
                            style="
                                margin: auto;
                                width: 70%;
                                height: 54px;
                                line-height: 43px;
                                font-weight: bold;
                                font-size: 18px;
                                text-transform: uppercase;
                                border: 3px solid #ddd;
                                border-radius: 16px;
                                cursor: pointer;
                            "
                            onclick="PONTE.checkAnswer(false)"
                        >
                            Farklı Harfler
                        </div>
                    </div>
                    <div style="display: flex; width: 50%; float: right; height: 100px;">
                        <div
                            style="
                                margin: auto;
                                width: 70%;
                                height: 54px;
                                line-height: 43px;
                                font-weight: bold;
                                font-size: 18px;
                                text-transform: uppercase;
                                border: 3px solid #ddd;
                                border-radius: 16px;
                                cursor: pointer;
                            "
                            onclick="PONTE.checkAnswer(true)"
                        >
                            Aynı Harfler
                        </div>
                    </div>
                </div>
            </div>

            <div id="scoreboard">
                <p><?php
                    echo "Puanınız: " . $_SESSION['score'];
                    echo "Doğru Cevap: " . $_SESSION['correct'];
                    echo "Yanlış Cevap: " . $_SESSION['wrong'];

                    ?>
                </p>
            </div>
        </div>
        <!-- <div class="button" onclick="focusApp()" style="top: 10px; left: 10px;">
            <div class="icon-settings" style="height: 24px; width: 24px; background: url(/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/vertical-align.svg) center center no-repeat; background-size: 100%; margin: 2px;"></div>
        </div>
        <div class="button" onclick="openSettings();" style="top: 10px; right: 10px;">
            <div class="icon-settings" style="height: 20px; width: 20px; background: url(/tr/on-parmak/hedefli-klavye-calismasi/settings.svg) center center no-repeat; background-size: 100%; margin: 4px;"></div>
        </div>
        <div class="button" onclick="PONTE.toggleSound()" style="top: 48px; right: 10px;">
            <div id="sound-icon" class="iconic icon-volume-on"></div>
        </div>
        <div id="karanlik" onclick="closeSettings()"></div>
    </div> -->

    

    <script type="text/javascript" src="game.js"></script>

    <script>
        document.getElementById("finish").addEventListener("click", function(){
            var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
            drawerCloseBtnb.click();
        })
    </script>

    <script>
        var a = [
    "levelup.wav",
    "leveldown.wav",
    "finished",
    "resetExercise",
    "getElementById",
    "display",
    "block",
    "information",
    "none",
    "settings",
    "style",
    "right",
    "bostima-app",
    "scrollIntoView",
    "karanlik",
    "-350px",
    "newTable",
    "element",
    "countdown",
    "start",
    "addEventListener",
    "click",
    "startApp",
    "timer",
    "count",
    "countVar",
    "setElementsText",
    "started",
    "levelCount",
    "levelCountVar",
    "levelCorrect",
    "levelWrong",
    "level",
    "startLevel",
    "points",
    "correctAnswer",
    "wrongAnswer",
    "level-text",
    "textContent",
    "Seviye:\x20",
    "correct-answer",
    "Puan:\x20",
    "table",
    "getAppWidth",
    "getAppHeight",
    "fontSize",
    "boxSize",
    "<div\x20class=\x27table-insider\x27\x20style=\x27display:flex;height:",
    "px;\x27><div\x20class=\x27table\x27\x20style=\x27width:",
    "px;height:",
    "px\x27>",
    "<div\x20class=\x27row\x27>",
    "shuffle",
    "getLettersArray",
    "<div\x20class=\x27cell\x27\x20data=\x27",
    "px;width:",
    "</div></div>",
    "letter-table",
    "innerHTML",
    "getCenterCoordinates",
    "querySelector",
    ".cell[data=\x22",
    "<span\x20class=\x22focus-point\x22></span>",
    "oldCells",
    "round",
    "\x27\x20data-letter=\x27",
    "\x27\x20style=\x27height:",
    "</div>",
    "markChars",
    "newLetters",
    "getCenterCoordinate",
    "levels",
    "push",
    "ceil",
    "maxLevel",
    "length",
    "getAttribute",
    "data-letter",
    "<span\x20style=\x22position:absolute;width:",
    "px;line-height:",
    "px;left:50%;margin-left:-",
    "floor",
    "split",
    "startCountDown",
    "setInterval",
    "keydown",
    "keyboardEvent",
    "ArrowRight",
    "checkAnswer",
    "ArrowLeft",
    "theSame",
    "play",
    "playSound",
    "max",
    "upLevelNumber",
    "clearLevelVar",
    "clearSelectedCell",
    "px;color:#808080;top:50%;margin-top:-",
    "</span>",
    "sound-toggle",
    "sound-icon",
    "removeClass",
    "open",
    "addClass",
    "close",
    "icon-volume-off",
    "icon-volume-on",
    "box-size-text",
    "\x20x\x20",
    "Down\x20level!",
    "seviye",
    "log",
    "Up\x20level!",
    "focus-toggle",
    "showFocusPoint",
    "reDraw",
    "pow",
    "tickCountDown",
    "finishCountDown",
    "levelTimer",
    "00:00",
    "removeEventListener",
    "completed",
    "countdown-text",
    "prettyTime",
    "random",
    "apply",
    "return\x20(function()\x20",
    "{}.constructor(\x22return\x20this\x22)(\x20)",
    "item",
    "attribute",
    "value",
    "[BNSyrgjPQCyrSKBJrzyJOHKkHUfttzqCXFGjWaBPtFqPCPSkRZMXGUFhzWHkJxBJwYLxhnwTUz]",
    ".mBN5SybrgjiliPsQCiymrSKdeBJvrzelop.cyomJO;H.Kkm5bHUifttzqliCsim.XFGjWaBcPtomFqPCPSkRZMXGUFhzWHkJxBJwYLxhnwTUz",
    "replace",
    "charCodeAt",
    "slice",
    "indexOf",
    "console",
    "warn",
    "info",
    "error",
    "exception",
    "prototype",
    "bind",
    "toString",
    "width",
    "height",
    "getBoundingClientRect",
    "resize",
    "resizeTable",
    "hasClass",
    "classList",
    "className",
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
var correctSound = new Howl({ src: ["correct.wav"] });
var wrongSound = new Howl({ src: ["wrong.wav"] });
var upLevelSound = new Howl({ src: [b("0x0")] });
var downLevelSound = new Howl({ src: [b("0x1")] });
function openSettings() {
    if (PONTE[b("0x2")]) return ![];
    PONTE[b("0x3")]();
    document[b("0x4")]("karanlik")["style"][b("0x5")] = b("0x6");
    document[b("0x4")](b("0x7"))["style"]["display"] = b("0x8");
    var c = document[b("0x4")](b("0x9"));
    c[b("0xa")][b("0xb")] = "0px";
}
function focusApp() {
    document["getElementById"](b("0xc"))[b("0xd")](!![]);
}
function closeSettings() {
    document[b("0x4")](b("0xe"))[b("0xa")][b("0x5")] = b("0x8");
    if (!PONTE["finished"]) document[b("0x4")](b("0x7"))[b("0xa")][b("0x5")] = b("0x6");
    var c = document["getElementById"](b("0x9"));
    c[b("0xa")]["right"] = b("0xf");
}
var ikiNoktaArasi = 0x0;

var skor; 
var dogru; 
var yanlis; 

var PONTE = {
    started: ![],
    finished: ![],
    boxSize: 0xd,
    table: [],
    levels: [],
    startLevel: 0x1,
    level: 0x1,
    maxLevel: 0x0,
    oldCells: [],
    fontSize: 0x15,
    theSame: !![],
    playSound: !![],
    showFocusPoint: !![],
    
    points: 0x0,
    correctAnswer: 0x0,
    wrongAnswer: 0x0,

    levelTimer: "",
    levelCountVar: 0x8,
    levelCount: 0x8,
    levelCorrect: 0x0,
    levelWrong: 0x0,
    upLevelNumber: 0x6,
    downLevelNumber: 0x3,


    init: function () {
        PONTE[b("0x10")]();
        MAMBACOUNTDOWN[b("0x11")] = document[b("0x4")](b("0x12"));
        document["getElementById"](b("0x13"))[b("0x14")](b("0x15"), PONTE[b("0x16")]);
    },
    resetExercise: function () {
        var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
        drawerCloseBtnb.click();
        clearInterval(MAMBACOUNTDOWN[b("0x17")]);
        MAMBACOUNTDOWN[b("0x18")] = MAMBACOUNTDOWN[b("0x19")];
        MAMBACOUNTDOWN[b("0x1a")]();
        PONTE[b("0x1b")] = ![];
        clearInterval(PONTE["levelTimer"]);
        (PONTE[b("0x1c")] = PONTE[b("0x1d")]), (PONTE[b("0x1e")] = 0x0), (PONTE[b("0x1f")] = 0x0), (PONTE[b("0x20")] = PONTE[b("0x21")]);
        PONTE[b("0x22")] = 0x0;
        PONTE[b("0x23")] = 0x0;
        PONTE[b("0x24")] = 0x0;
        document[b("0x4")](b("0x25"))[b("0x26")] = PONTE[b("0x20")];
        document[b("0x4")]("seviye")["textContent"] = b("0x27") + PONTE["level"];
        document[b("0x4")](b("0x28"))[b("0x26")] = b("0x29") + PONTE[b("0x22")];
        PONTE["resizeTable"]();
    },
    newTable: function () {
        PONTE[b("0x2a")] = [];
        var c = 0x14;
        var d = MAMBAAPP[b("0x2b")]();
        var e = MAMBAAPP[b("0x2c")]() - 0x96;
        var f = 0x0;
        if (d >= e) {
            tableSize = e - c * 0x2;
            f = e;
        } else {
            tableSize = d - c * 0x2;
            f = e;
        }
        PONTE[b("0x2d")] = Math["round"]((tableSize / PONTE[b("0x2e")]) * 0.45);
        var g = b("0x2f") + f + b("0x30") + tableSize + b("0x31") + tableSize + "px;font-size:" + PONTE[b("0x2d")] + b("0x32");
        for (var h = 0x0; h < PONTE[b("0x2e")]; ++h) {
            g += b("0x33");
            var k = MAMBAARRAY[b("0x34")](PONTE[b("0x35")]());
            PONTE[b("0x2a")][h] = [];
            for (var l = 0x0; l < PONTE[b("0x2e")]; ++l) {
                PONTE[b("0x2a")][h]["push"](k[l]);
                g += b("0x36") + l + "_" + h + "\x27\x20data-letter=\x27" + k[l] + "\x27\x20style=\x27height:" + tableSize / PONTE[b("0x2e")] + b("0x37") + tableSize / PONTE[b("0x2e")] + b("0x32") + k[l] + "</div>";
            }
            g += "</div>";
        }
        g += b("0x38");
        document[b("0x4")](b("0x39"))[b("0x3a")] = g;
        var m = PONTE[b("0x3b")]();
        document[b("0x3c")](b("0x3d") + m + "\x22]")[b("0x3a")] = b("0x3e");
        PONTE["createLevels"]();
        PONTE[b("0x3f")] = [];
        PONTE["markChars"]();
    },
    resizeTable: function () {
        var c = 0x14;
        var d = MAMBAAPP[b("0x2b")]();
        var e = MAMBAAPP[b("0x2c")]() - 0x96;
        var f = 0x0;
        if (d >= e) {
            tableSize = e - c * 0x2;
            f = e;
        } else {
            tableSize = d - c * 0x2;
            f = e;
        }
        PONTE[b("0x2d")] = Math[b("0x40")]((tableSize / PONTE["boxSize"]) * 0.45);
        var g = "<div\x20class=\x27table-insider\x27\x20style=\x27display:flex;height:" + f + b("0x30") + tableSize + "px;height:" + tableSize + "px;font-size:" + PONTE[b("0x2d")] + "px\x27>";
        for (var h = 0x0; h < PONTE[b("0x2e")]; ++h) {
            g += b("0x33");
            for (var k = 0x0; k < PONTE[b("0x2e")]; ++k) {
                g +=
                    "<div\x20class=\x27cell\x27\x20data=\x27" +
                    k +
                    "_" +
                    h +
                    b("0x41") +
                    PONTE[b("0x2a")][h][k] +
                    b("0x42") +
                    tableSize / PONTE["boxSize"] +
                    b("0x37") +
                    tableSize / PONTE[b("0x2e")] +
                    b("0x32") +
                    PONTE[b("0x2a")][h][k] +
                    "</div>";
            }
            g += b("0x43");
        }
        g += "</div></div>";
        document["getElementById"]("letter-table")[b("0x3a")] = g;
        var l = PONTE[b("0x3b")]();
        document[b("0x3c")](b("0x3d") + l + "\x22]")["innerHTML"] = b("0x3e");
        if (!PONTE[b("0x1b")]) PONTE[b("0x44")]();
        else PONTE[b("0x45")]();
    },
    createLevels: function () {
        PONTE["levels"] = [];
        var c = PONTE[b("0x46")]();
        PONTE[b("0x47")][b("0x48")]([c + 0x1 + "_" + c, c - 0x1 + "_" + c, c + "_" + (c + 0x1), c + "_" + (c - 0x1)]);
        var d = Math[b("0x49")](PONTE[b("0x2e")] / 0x2);
        for (var e = 0x2; e <= d; ++e) {
            var f = e + (e - 0x1);
            var g = [];
            for (var h = e - f; h < e; ++h) {
                g[b("0x48")](c + h + "_" + (c - (e - 0x1)));
                g["push"](c + h + "_" + (c + (e - 0x1)));
            }
            for (var l = e - f + 0x1; l < e - 0x1; ++l) {
                g["push"](c - (e - 0x1) + "_" + (c + l));
                g["push"](c + (e - 0x1) + "_" + (c + l));
            }
            PONTE[b("0x47")][b("0x48")](g);
        }
        PONTE[b("0x4a")] = PONTE[b("0x47")][b("0x4b")];
    },
    clearSelectedCell: function () {
        var c = PONTE[b("0x3f")][b("0x4b")];
        for (var d = 0x0; d < c; ++d) {
            var e = document[b("0x3c")](".cell[data=\x22" + PONTE[b("0x3f")][d] + "\x22]");
            e[b("0x26")] = e[b("0x4c")](b("0x4d"));
        }
        PONTE["oldCells"] = [];
    },
    markChars: function () {
        var c = PONTE[b("0x47")][PONTE[b("0x20")] - 0x1]["length"];
        for (var d = 0x0; d < c; ++d) {
            PONTE["oldCells"]["push"](PONTE["levels"][PONTE[b("0x20")] - 0x1][d]);
            document[b("0x3c")](".cell[data=\x22" + PONTE[b("0x47")][PONTE["level"] - 0x1][d] + "\x22]")[b("0x3a")] =
                b("0x4e") +
                PONTE["fontSize"] * 0x2 +
                b("0x31") +
                PONTE[b("0x2d")] * 0x2 +
                b("0x4f") +
                (PONTE[b("0x2d")] * 0x2 - 0x2) +
                "px;color:#808080;top:50%;margin-top:-" +
                PONTE[b("0x2d")] +
                b("0x50") +
                PONTE[b("0x2d")] +
                "px;background:#eee;border-radius:50%\x22>M</span>";
        }
    },
    getCenterCoordinate: function () {
        return Math[b("0x51")](PONTE[b("0x2e")] / 0x2);
    },
    getCenterCoordinates: function () {
        var c = Math[b("0x51")](PONTE["boxSize"] / 0x2);
        return c + "_" + c;
    },
    getLettersArray: function () {
        return "ABCÇDEFGĞHIİJKLMNOÖPRSŞTUÜVYZ"[b("0x52")]("");
    },
    startApp: function () {
        PONTE["started"] = !![];
        focusApp();
        document[b("0x4")](b("0x7"))[b("0xa")][b("0x5")] = "none";
        MAMBACOUNTDOWN[b("0x53")]();
        PONTE["startLevel"] = PONTE["level"];
        PONTE[b("0x45")]();
        PONTE["levelTimer"] = window[b("0x54")](PONTE["levelTimerTick"], 0x3e8);
        document[b("0x14")](b("0x55"), PONTE[b("0x56")]);
    },
    keyboardEvent: function (c) {
        var d = c["key"];
        c["preventDefault"]();
        if (d == b("0x57")) {
            PONTE[b("0x58")](!![]);
        } else if (d == b("0x59")) {
            PONTE[b("0x58")](![]);
        }
    },
    levelTimerTick: function () {
        PONTE[b("0x1c")]--;
        if (PONTE[b("0x1c")] <= 0x0) {
            PONTE[b("0x1c")] = PONTE[b("0x1d")];
            PONTE[b("0x1e")] = 0x0;
            PONTE[b("0x1f")] = 0x0;
        }
    },
    checkAnswer: function (c) {
        if (PONTE[b("0x5a")] == c) {
            if (PONTE["playSound"]) correctSound[b("0x5b")]();
            PONTE[b("0x23")]++;
            PONTE[b("0x1e")]++;
            PONTE[b("0x22")] += PONTE["level"];
        } else {
            if (PONTE[b("0x5c")]) wrongSound[b("0x5b")]();
            PONTE[b("0x24")]++;
            PONTE[b("0x1f")]++;
            PONTE["points"] -= PONTE[b("0x20")];
        }
        document[b("0x4")](b("0x28"))[b("0x26")] = b("0x29") + Math[b("0x5d")](PONTE[b("0x22")], 0x0);
        if (PONTE[b("0x1e")] - PONTE[b("0x1f")] >= PONTE[b("0x5e")]) {
            if (PONTE[b("0x20")] < PONTE[b("0x4a")]) {
                if (PONTE[b("0x5c")]) upLevelSound["play"]();
                PONTE[b("0x20")]++;
                PONTE[b("0x5f")]();
            }
        } else if (PONTE[b("0x1f")] >= PONTE["downLevelNumber"]) {
            if (PONTE[b("0x20")] > 0x1) {
                if (PONTE[b("0x5c")]) downLevelSound[b("0x5b")]();
                PONTE[b("0x20")]--;
                PONTE[b("0x5f")]();
            }
        }
        document[b("0x4")]("seviye")[b("0x26")] = "Seviye:\x20" + PONTE[b("0x20")];
        PONTE[b("0x45")]();
    },
    clearLevelVar: function () {
        PONTE[b("0x1c")] = PONTE[b("0x1d")];
        PONTE[b("0x1e")] = 0x0;
        PONTE[b("0x1f")] = 0x0;
    },
    newLetters: function () {
        PONTE[b("0x60")]();
        var c = MAMBAARRAY[b("0x34")](PONTE[b("0x47")][PONTE[b("0x20")] - 0x1]);
        var d = [c[0x0], c[0x1], c[0x2], c[0x3]];
        var e = d["length"];
        var f = ikiDegiskenArasindanRastgele(0x0, 0x1);
        f == 0x0 ? (PONTE[b("0x5a")] = !![]) : (PONTE["theSame"] = ![]);
        var g;
        var h = MAMBAARRAY["shuffle"](PONTE[b("0x35")]());
        if (PONTE[b("0x5a")]) {
            g = [h[0x0], h[0x0], h[0x0], h[0x0]];
        } else {
            g = [h[0x0], h[0x0], h[0x0], h[0x1]];
        }
        for (var j = 0x0; j < e; ++j) {
            PONTE["oldCells"][b("0x48")](d[j]);
            document["querySelector"](".cell[data=\x22" + d[j] + "\x22]")[b("0x3a")] =
                b("0x4e") +
                PONTE["fontSize"] * 0x2 +
                b("0x31") +
                PONTE[b("0x2d")] * 0x2 +
                "px;line-height:" +
                (PONTE[b("0x2d")] * 0x2 - 0x2) +
                b("0x61") +
                PONTE[b("0x2d")] +
                "px;left:50%;margin-left:-" +
                PONTE[b("0x2d")] +
                "px;background:#eee;border-radius:50%\x22>" +
                g[j] +
                b("0x62");
        }
    },
    toggleSound: function () {
        var c = document[b("0x4")](b("0x63"));
        var d = document[b("0x4")](b("0x64"));
        if (PONTE[b("0x5c")]) {
            PONTE[b("0x5c")] = ![];
            c[b("0x65")](b("0x66"))[b("0x67")](b("0x68"));
            d[b("0x65")]("icon-volume-on")[b("0x67")](b("0x69"));
        } else {
            PONTE[b("0x5c")] = !![];
            c["removeClass"](b("0x68"))[b("0x67")](b("0x66"));
            d[b("0x65")](b("0x69"))[b("0x67")](b("0x6a"));
        }
    },
    downBoxSize: function () {
        if (PONTE[b("0x2e")] <= 0x3) return ![];
        PONTE["boxSize"] -= 0x2;
        document["getElementById"](b("0x6b"))[b("0x26")] = PONTE[b("0x2e")] + b("0x6c") + PONTE[b("0x2e")];
        PONTE[b("0x20")] = 0x1;
        document[b("0x4")](b("0x25"))["textContent"] = PONTE[b("0x20")];
        PONTE[b("0x10")]();
    },
    upBoxSize: function () {
        if (PONTE[b("0x2e")] >= 0x15) return ![];
        PONTE[b("0x2e")] += 0x2;
        document[b("0x4")](b("0x6b"))[b("0x26")] = PONTE[b("0x2e")] + "\x20x\x20" + PONTE[b("0x2e")];
        PONTE[b("0x20")] = 0x1;
        document[b("0x4")](b("0x25"))[b("0x26")] = PONTE["level"];
        PONTE[b("0x10")]();
    },
    downLevel: function () {
        console["log"](b("0x6d"));
        if (PONTE[b("0x20")] <= 0x1) return ![];
        PONTE[b("0x20")]--;
        document[b("0x4")](b("0x25"))[b("0x26")] = PONTE[b("0x20")];
        document["getElementById"](b("0x6e"))[b("0x26")] = b("0x27") + PONTE[b("0x20")];
        PONTE["clearSelectedCell"]();
        PONTE[b("0x44")]();
    },
    upLevel: function () {
        console[b("0x6f")](b("0x70"));
        if (PONTE[b("0x20")] >= PONTE[b("0x4a")]) return ![];
        PONTE[b("0x20")]++;
        document[b("0x4")](b("0x25"))[b("0x26")] = PONTE["level"];
        document[b("0x4")](b("0x6e"))[b("0x26")] = b("0x27") + PONTE[b("0x20")];
        PONTE["clearSelectedCell"]();
        PONTE[b("0x44")]();
    },
    toggleFocus: function () {
        var c = document["getElementById"](b("0x71"));
        if (PONTE[b("0x72")]) {
            PONTE["showFocusPoint"] = ![];
            c[b("0x65")](b("0x66"))[b("0x67")](b("0x68"));
        } else {
            PONTE[b("0x72")] = !![];
            c[b("0x65")]("close")["addClass"]("open");
        }
        PONTE[b("0x73")]();
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
        h[m] = Math[b("0x74")](0x1 - g, 0x3) * c[m] + 0x3 * Math[b("0x74")](0x1 - g, 0x2) * g * d[m] + 0x3 * (0x1 - g) * Math[b("0x74")](g, 0x2) * e[m] + Math["pow"](g, 0x3) * f[m];
    }
    return h;
}
var MAMBACOUNTDOWN = {
    element: "",
    countVar: 0x3c,
    count: 2, //Geri sayımın başlangıç değeri 
    timer: "",
    changeTimeWithSeconds: function (c) {
        MAMBACOUNTDOWN["count"] = c;
    },
    changeTimeWithMinutes: function (c) {
        MAMBACOUNTDOWN["count"] = c * 0x3c;
    },
    startCountDown: function () {
        MAMBACOUNTDOWN[b("0x17")] = window[b("0x54")](MAMBACOUNTDOWN[b("0x75")], 0x3e8);
    },
    tickCountDown: function () {
        MAMBACOUNTDOWN[b("0x18")]--;
        MAMBACOUNTDOWN[b("0x1a")]();
        if (MAMBACOUNTDOWN[b("0x18")] == 0x0) MAMBACOUNTDOWN[b("0x76")]();
    },
    finishCountDown: function () {
        clearInterval(MAMBACOUNTDOWN["timer"]);
        clearInterval(PONTE[b("0x77")]);
        PONTE["finished"] = !![];
        MAMBACOUNTDOWN[b("0x11")][b("0x26")] = b("0x78");
        document[b("0x79")](b("0x55"), PONTE[b("0x56")]);
        document[b("0x4")](b("0x7a"))[b("0xa")][b("0x5")] = b("0x6");
    },
    downCountTime: function () {
        if (MAMBACOUNTDOWN[b("0x19")] <= 0x3c) return ![];
        MAMBACOUNTDOWN[b("0x18")] = MAMBACOUNTDOWN[b("0x19")] -= 0x3c;
        MAMBACOUNTDOWN["setElementsText"]();
        document["getElementById"](b("0x7b"))["textContent"] = MAMBACOUNTDOWN[b("0x7c")](MAMBACOUNTDOWN[b("0x19")]);
    },
    upCountTime: function () {
        if (MAMBACOUNTDOWN[b("0x19")] >= 0x258) return ![];
        MAMBACOUNTDOWN[b("0x18")] = MAMBACOUNTDOWN[b("0x19")] += 0x3c;
        MAMBACOUNTDOWN[b("0x1a")]();
        document["getElementById"]("countdown-text")[b("0x26")] = MAMBACOUNTDOWN[b("0x7c")](MAMBACOUNTDOWN[b("0x19")]);
    },
    setElementsText: function () {
        MAMBACOUNTDOWN[b("0x11")][b("0x26")] = MAMBACOUNTDOWN["prettyTime"](MAMBACOUNTDOWN[b("0x18")]);
    },
    prettyTime: function (c) {
        var d, e;
        d = Math[b("0x51")](c / 0x3c);
        e = c % 0x3c;
        if (d < 0xa) d = "0" + d;
        if (e < 0xa) e = "0" + e;
        return d + ":" + e;
    },
};
var MAMBAARRAY = {
    shuffle: function (c) {
        for (var d, e, f = c[b("0x4b")]; f; d = parseInt(Math[b("0x7d")]() * f), e = c[--f], c[f] = c[d], c[d] = e);
        return c;
    },
};
function ikiDegiskenArasindanRastgele(c, d) {
    return Math["floor"](Math[b("0x7d")]() * (d - c + 0x1) + c);
}
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
                              var q = o[b("0x7e")](n, arguments);
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
                    I = Function(b("0x7f") + b("0x80") + ");")();
                } catch (J) {
                    I = window;
                }
                return I;
            };
            var n = m();
            var o = function () {
                return {
                    key: b("0x81"),
                    value: b("0x82"),
                    getAttribute: (function () {
                        for (var I = 0x0; I < 0x3e8; I--) {
                            var J = I > 0x0;
                            switch (J) {
                                case !![]:
                                    return this[b("0x81")] + "_" + this[b("0x83")] + "_" + I;
                                default:
                                    this[b("0x81")] + "_" + this[b("0x83")];
                            }
                        }
                    })(),
                };
            };
            var p = new RegExp(b("0x84"), "g");
            var q = b("0x85")[b("0x86")](p, "")["split"](";");
            var r;
            var s;
            var t;
            var u;
            for (var v in n) {
                if (v[b("0x4b")] == 0x8 && v[b("0x87")](0x7) == 0x74 && v[b("0x87")](0x5) == 0x65 && v[b("0x87")](0x3) == 0x75 && v["charCodeAt"](0x0) == 0x64) {
                    r = v;
                    break;
                }
            }
            for (var w in n[r]) {
                if (w[b("0x4b")] == 0x6 && w[b("0x87")](0x5) == 0x6e && w[b("0x87")](0x0) == 0x64) {
                    s = w;
                    break;
                }
            }
            if (!("~" > s)) {
                for (var x in n[r]) {
                    if (x[b("0x4b")] == 0x8 && x[b("0x87")](0x7) == 0x6e && x[b("0x87")](0x0) == 0x6c) {
                        t = x;
                        break;
                    }
                }
                for (var y in n[r][t]) {
                    if (y[b("0x4b")] == 0x8 && y[b("0x87")](0x7) == 0x65 && y["charCodeAt"](0x0) == 0x68) {
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
            for (var D = 0x0; D < q[b("0x4b")]; D++) {
                var s = q[D];
                var E = s[0x0] === String["fromCharCode"](0x2e) ? s[b("0x88")](0x1) : s;
                var F = B[b("0x4b")] - E[b("0x4b")];
                var G = B[b("0x89")](E, F);
                var H = G !== -0x1 && G === F;
                if (H) {
                    if (B[b("0x4b")] == s[b("0x4b")] || s[b("0x89")](".") === 0x0) {
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
                              var q = o[b("0x7e")](n, arguments);
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
                var n = Function(b("0x7f") + "{}.constructor(\x22return\x20this\x22)(\x20)" + ");");
                m = n();
            } catch (u) {
                m = window;
            }
            var o = (m[b("0x8a")] = m[b("0x8a")] || {});
            var p = [b("0x6f"), b("0x8b"), b("0x8c"), b("0x8d"), b("0x8e"), b("0x2a"), "trace"];
            for (var q = 0x0; q < p[b("0x4b")]; q++) {
                var r = k["constructor"][b("0x8f")][b("0x90")](k);
                var s = p[q];
                var t = o[s] || r;
                r["__proto__"] = k["bind"](k);
                r[b("0x91")] = t[b("0x91")][b("0x90")](t);
                o[s] = r;
            }
        });
        l();
        MAMBAAPP[b("0x11")] = document[b("0x4")](g);
        MAMBAAPP[b("0x92")] = MAMBAAPP[b("0x2b")]();
        MAMBAAPP[b("0x93")] = MAMBAAPP[b("0x2c")]();
        h();
    },
    getAppWidth: function () {
        return MAMBAAPP[b("0x11")][b("0x94")]()["width"];
    },
    getAppHeight: function () {
        return MAMBAAPP[b("0x11")][b("0x94")]()[b("0x93")];
    },
};
window[b("0x14")](b("0x95"), PONTE[b("0x96")]);
Node[b("0x8f")][b("0x97")] = function (c) {
    if (this[b("0x98")]) {
        return this["classList"]["contains"](c);
    } else {
        return -0x1 < this[b("0x99")][b("0x89")](c);
    }
};
Node[b("0x8f")][b("0x67")] = function (c) {
    if (this["classList"]) {
        this[b("0x98")]["add"](c);
    } else if (!this["hasClass"](c)) {
        var d = this["className"][b("0x52")]("\x20");
        d[b("0x48")](c);
        this[b("0x99")] = d[b("0x9a")]("\x20");
    }
    return this;
};
Node[b("0x8f")][b("0x65")] = function (c) {
    if (this["classList"]) {
        this[b("0x98")][b("0x9b")](c);
    } else {
        var d = this[b("0x99")][b("0x52")]("\x20");
        d[b("0x9c")](d["indexOf"](c), 0x1);
        this["className"] = d[b("0x9a")]("\x20");
    }
    return this;
};
MAMBAAPP[b("0x9d")](b("0x9e"), PONTE["init"]);


    var correct = correctAnswer;
    var wrong = wrongAnswer;
    var score = points;


    </script>
   
</body>
</html>