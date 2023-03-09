<html lang="tr">
	<head>
	<meta charset="UTF-8">
	<title>Tek mi? Çift mi?</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!--Eklenen font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="jquery.min.js"></script>
	<script src="TextPlugin.min.js"></script>
	<script src="TweenMax.min.js"></script>
	<link rel="stylesheet" href="game.css">
</head>

<style>
	
		#start {
			background-color: #009ef7;
		}
		
	
	#found-text {
		/*Text hover css effect*/
		-webkit-text-stroke: 1px #000;
		color: transparent;
		-webkit-transition: all 0.5s ease;
		-moz-transition: all 0.5s ease;
		-o-transition: all 0.5s ease;
		transition: all 0.5s ease;

		/*Center of screen hover effect*/
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);

		/*If text is too long, it will be hidden*/
		overflow: hidden;
		white-space: nowrap;

		/*Let the text stay on the screen for 3 seconds, not appear until it changes again.*/
		visibility: hidden;
		opacity: 0;
		transition: visibility 0s, opacity 0.5s linear;

		
	}
</style>

<body>
<div class="tum-sayfa"> 
	<div id="bostima-app">
		<div class="bostima-container">
			<div id="information" class="card-header button-6" style="padding-top:8%;">
                <div style="max-width:600px;margin:20px auto;padding:20px;background:#fff;border:3px solid #ddd;border-radius:5px">
                    <div style="text-align:center;font-family:tahoma;font-size:15px;font-weight:bold;color:#117de2">Tek mi Çift Mi?</div>
                    <div style="margin-top:20px;text-align:center;font-family:georgia;font-size:14px;color:#646464; padding-bottom:5%;">Tek ve Çift Sayıları İşaretleyerek, görüş yeteneğinizi geliştirin.</div>
                    
				<div class="information">
					<div style="width:95%;max-width:600px;padding:10px 10px 10px; position: absolute;top: 50%;left: 50%;margin-top: -50px;margin-left: -280px;background-color: #533483;background-image:url(vector-1.png); border-radius:5px">
						<div style="text-align:center;font-family:tahoma;font-size:18px;font-weight:bold;color:#dbdbdb">Tek mi Çift mi?</div>
						<div style="margin-top:20px;text-align:center;color:#c0c0c0">Tek ve çift sayıları sırasıyla bulmanız istendiği zaman işaretleyin.</div>
						<div class="button-group"><div id="start">Egzersizi başlat</div></div>
					</div>
				</div>
				</div>
            </div>
			<div id="completed" style="padding-top:35%">
				<div>
					<div style="text-align: center;">Egzersiz tamamlandı!</div>
					<div class="button-group"><a class="btn btn-primary card card-flush h-md-10 mb-5 -10" href="">Tekrar!</a></div>
					<div class="button-group"><a id="finish" class="btn btn-primary card card-flush h-md-10 mb-5 -10" href="">Egzersizi bitir!</a></div>
				</div>
				<script>
					$("#finish").click(function() {
						$("#drawerclose").click();
					});
				</script>
			</div>
			<div id="bostima-app-insider">
				<div>
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
							margin-right: 3px;
						"
					>
						Seviye: 1
					</div>
					<div
						id="kalan"
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
							margin-right: 3px;
						"
					>
						Kalan: 4
					</div>
					<div class="t s"></div>
				</div>
				<div id="found-text" style="height: 50px; line-height: 40px; text-align: center; font-size: 22px; font-weight: bold; text-transform: uppercase; color: #898989;">
					
										
				</div>
   
				
				

				<div id="letter-table" style="height: calc(100% - 100px);">
					<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 173.8px; text-align: center; font-size: 30px; color: #898989;">
						<div class="select-button-con hoverable " data="6931" onclick="PONTE.checkAnswer(6931)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>6931</div></div>
						</div>
						<div class="select-button-con hoverable" data="5202" onclick="PONTE.checkAnswer(5202)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>5202</div></div>
						</div>
					</div>
					<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 173.8px; text-align: center; font-size: 30px; color: #898989;">
						<div class="select-button-con hoverable" data="1991" onclick="PONTE.checkAnswer(1991)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>1991</div></div>
						</div>
						<div class="select-button-con hoverable" data="5239" onclick="PONTE.checkAnswer(5239)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>5239</div></div>
						</div>
					</div>
					<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 173.8px; text-align: center; font-size: 30px; color: #898989;">
						<div class="select-button-con hoverable" data="8528" onclick="PONTE.checkAnswer(8528)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>8528</div></div>
						</div>
						<div class="select-button-con hoverable" data="1127" onclick="PONTE.checkAnswer(1127)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>1127</div></div>
						</div>
					</div>
					<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 173.8px; text-align: center; font-size: 30px; color: #898989;">
						<div class="select-button-con hoverable" data="2638" onclick="PONTE.checkAnswer(2638)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>2638</div></div>
						</div>
						<div class="select-button-con hoverable" data="5319" onclick="PONTE.checkAnswer(5319)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>5319</div></div>
						</div>
					</div>
					<div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 173.8px; text-align: center; font-size: 30px; color: #898989;">
						<div class="select-button-con hoverable" data="3540" onclick="PONTE.checkAnswer(3540)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>3540</div></div>
						</div>
						<div class="select-button-con hoverable" data="6951" onclick="PONTE.checkAnswer(6951)" style="cursor: pointer; width: calc(100% / 2); height: 100%; padding: 0 5px 10px; font-family: 'Lato', sans-serif;">
							<div class="select-button" style="border-width: 3px; border-bottom-width: 6px;"><div>6951</div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
					<div id="levelcount" style="float: left;">Seviye</div>
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
			</div>
		</div>
		<div class="button" onclick="PONTE.focus()" style="top: 48px; right: 10px; display:none;">
			<div class="icon-settings" style="height: 24px; width: 24px; background: url(/tr/hizli-okuma/egzersizler/elina-kum-saati-egzersizi/vertical-align.svg) center center no-repeat; background-size: 100%; margin: 2px;"></div>
		</div>
		<div class="button" onclick="openSettings();" style="top: 10px; right: 10px; display:none;">
			<div class="icon-settings" style="height: 20px; width: 20px; background: url(/tr/on-parmak/hedefli-klavye-calismasi/settings.svg) center center no-repeat; background-size: 100%; margin: 4px;"></div>
		</div>
		<div class="button" onclick="PONTE.toggleSound()" style="top: 86px; right: 10px; display:none;">
			<div id="sound-icon" class="iconic icon-volume-on"></div>
		</div>
		<div id="karanlik" onclick="closeSettings()"></div>
	</div>

	<div id="levelpost">
		<?php
		 echo $levelcount;
		?>
	</div>

	<script>
		//oyun sonu levelcount id li div de yazanı seviye değişkenine atıyoruz
		var seviye = document.getElementById("levelcount").innerHTML;
		//bu değişkeni exercise.blade.php ye gönderiyoruz
		
	</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script type="text/javascript" src="howler.min.js"></script>
	<script src="game.js"></script>
	<script src="democift.js"></script>
	<script src="demotek.js"></script>,

	<script>
		var btnFinish = document.getElementById("finish");
		onclick(window.parent.testFunc())
	</script>
	

</div>
</body>

