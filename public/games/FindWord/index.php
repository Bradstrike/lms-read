<html lang="tr">
<head>
  	<meta charset="utf-8">
  	<title>Kelime Bulma Oyunu</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fresca">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Happy+Monkey">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">


</head>
<body>

<p id="deneme">

</p>

<div class="card">
  <div id="main">

		<div class="left">
   
      <div class="letters">
        <canvas id="a" width="800" height="800"></canvas>
        <canvas id="c" width="800" height="800"></canvas>
      </div>
    </div>
    <div class="right">
      <div class="words">
		   <p id="array">

		   </p>	
      </div>
  	</div>

	<div id="gizlenen" style="display:none;">
		<p id="wordcapture">

		</p>

	</div>
  </div>
  </div>
</body>

<script>
  var pos = [];
var click = { "startPos": "", "endPos": ""
			};
var letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M",
			   "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

	


			

var kelime = <?=$_REQUEST['kelime']?>;


var yakalayan = document.getElementById("wordcapture").innerHTML;


var words = []; 



document.getElementById("deneme").innerHTML = kelime;


if (Array.isArray(wordcapture)) {
	console.log("Doğru");
} else {
	console.log("Yanlış");
}

// Prepare the wordsearch with random letters and word layout
$(document).ready(function() {
	// grab the size of the grid.  I used this method in case I need to 
	// scale this word search in the future
	var size = 400; //($(".left").css("width").slice(0, 3) - 20) / 2 ;

	// put random letters on the board
	for (var i = 0; i < size; i++) {
		$(".letters").append("<span class='" + (i + 1) + "'>" + 
							getRandomLetter() + "</span>");
	}

	// insert the words onto the board
	for (var i = 0; i < words.length; i++) {
		words[i].end = words[i].start;
		displayWord(words[i]);
		// save the start and end of each word for word checking later
		pos[i] = { "start": words[i].start, "end": words[i].end };
		$(".words").append("<span class='" + (i) + "'>" +  
							words[i].word + "</span>");	
	}

	$("#menu").on("mouseup", function() {
		$(this).css( {"display": "none"})
		$("#main").slideDown("slow", function() {
		})
	});
})

function getRandomLetter() {
	return letters[Math.floor(Math.random() * letters.length)];
}

function displayWord(w) {
	for (var j = 0; j < w.word.length; j++){
		if (w.direction == "N") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end -= 20;
		}
		if (w.direction == "NE") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end -= 19;
		}
		if (w.direction == "E") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end += 1;
		}
		if (w.direction == "SE") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end += 21;
		}
		if (w.direction == "S") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end += 20;
		}
		if (w.direction == "SW") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end += 19;
		}
		if (w.direction == "W") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end -= 1;
		}
		if (w.direction == "NW") {
			$(".letters").find("." + w.end).text(w.word[j]);
			if (j + 1 != w.word.length) w.end -= 21;
		}
	}
}


// start of x & y, end of x & y.  
var sX, sY, eX, eY, canvas, ctx, height, width, diff;
var r = 14;
var n = Math.sqrt((r * r) / 2);
var strokeColor = "black";
var isMouseDown = false;
var mouseMoved = false;

$(document).ready(function() {
	$("#c").on("mousedown mouseup mousemove mouseleave", function(e) {
		e.preventDefault();
		//console.log(e);
		if (e.type == "mousedown") {
			setCanvas("c");			
			isMouseDown = true;
      
      // Firefox da farklı.
			sX = e.offsetX || e.clientX - $(e.target).offset().left;
			sY = e.offsetY || e.clientY - $(e.target).offset().top;
			// harfler de sıkıntı olursa buraya bak. 
			sX -= (sX % 20);
			sY -= (sY % 20);
			if (!(sX % 40)) sX += 20;
			if (!(sY % 40)) sY += 20;

			setPos(sX, sY, "start");
			draw(e.type);
		} 
		else if (e.type == "mousemove") {
			if (isMouseDown) {
				mouseMoved = true;
				eX = e.offsetX || e.clientX - $(e.target).offset().left;
				eY = e.offsetY || e.clientY - $(e.target).offset().top;
				draw(e.type);
			}
		} 
		else if (e.type == "mouseup") {
			isMouseDown = false;
			ctx.clearRect(0, 0, width, height);
			if (mouseMoved) {
				mouseMoved = false;

				eX -= eX % 20;
				eY -= eY % 20;
				if (!(eX % 40)) eX += 20;
				if (!(eY % 40)) eY += 20;

				// Son satırı çizerken olan hata düzeltildi.
				// Doğru kelime
				draw(e.type);
				ctx.clearRect(0, 0, width, height);
				//kelime çizme işlemi.
				if (checkWord()) {
					setCanvas("a");
					draw(e.type);
					scratchWord();
					// Oyun bitti mi kontrol.
					if(isEndOfGame()) {
						
						window.parent.testFunc();							
						console.log('game finish')

						


					}
				} 
					else if (e.type == "mouseleave") {
					isMouseDown = false;
					draw(e.type);
				}
			}
		}
	});
	
})

// Çizgi çizme fonksiyonu.
function draw(f) {
	//başlangıcı temsil eden 2 sayı.
	function drawArc(xArc, yArc, num1, num2) {
		ctx.lineWidth = 2;
		ctx.beginPath();
		ctx.arc(xArc, yArc, r, num1 * Math.PI, num2 * Math.PI);
		ctx.strokeStyle = strokeColor;
		ctx.stroke();
	}

	//iki satır çizme fonksiyonu.
	function drawLines(mX1, mY1, lX1, lY1, mX2, mY2, lX2, lY2) {
		ctx.beginPath();
		ctx.moveTo(mX1, mY1);
		ctx.lineTo(lX1, lY1);
		ctx.moveTo(mX2, mY2);
		ctx.lineTo(lX2, lY2);
		ctx.stroke();
	}
	
	if (f == "mousedown"){
		ctx.clearRect(0, 0, width, height);
		drawArc(sX, sY, 0, 2);
	}
	else if (f == "mousemove" || f == "mouseup") {
		/* 
		eX ve eY değerleri sX ve sY değerleriyle aynıdır.
		
		rise = (sY - eY) * Math.sqrt(6);
		run = sX - eX;
		 */	  
		limit = ((sY - eY) * Math.sqrt(6)) / (sX - eX);
		// UP
		if ((limit > 6 || limit < -6) && eY < sY) {
			// ekranı temizle.
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			drawArc(sX, sY, 0, 1); // draw bottom arc
			drawArc(sX, eY, 1, 2); // draw top arc

			// bileşik çizgi çizme.
			drawLines(sX + r, sY, sX + r, eY, sX - r, sY, sX -r, eY);	

			// son harf olarak çizme.
			// kelime kontrolü.
			if (f == "mouseup") setPos(sX, eY, "end");	
		}
		// DOWN
		if ((limit < -6 || limit > 6) && eY > sY) {
			
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			drawArc(sX, sY, 1, 2); 
			drawArc(sX, eY, 0, 1); 
			drawLines(sX + r, sY, sX + r, eY, sX - r, sY, sX -r, eY);
			if (f == "mouseup") setPos(sX, eY, "end");		
		}				
		// LEFT
		if ((limit < 1 && limit > -1) && eX < sX) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			drawArc(sX, sY, 1.5, 0.5);
			drawArc(eX, sY, 0.5, 1.5);
			drawLines(sX, sY - r, eX, sY -r, sX, sY + r, eX, sY + r);
			if (f == "mouseup") setPos(eX, sY, "end");
		}	
		// RIGHT
		if ((limit < 1 && limit > -1) && eX > sX) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			drawArc(sX, sY, 0.5, 1.5);
			drawArc(eX, sY, 1.5, 0.5);
			drawLines(sX, sY - r, eX, sY -r, sX, sY + r, eX, sY + r);
			if (f == "mouseup") setPos(eX, sY, "end");
		}
		
		// NW
		if ((limit > 1 && limit < 6) && (eX < sX && eY < sY)) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			diff = sX - eX;
			drawArc(sX, sY, 1.75, 0.75);
			drawArc(sX - diff, sY - diff, 0.75, 1.75);
			drawLines(sX + n, sY - n, sX + n - diff, sY - n - diff, 
					  sX - n, sY + n, sX - n - diff, sY + n - diff);
			if (f == "mouseup") setPos(sX - diff, sY - diff, "end");
		} 

		// NE
		if ((limit < -1 && limit > -6) && (eX > sX && eY < sY)) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			diff = sX - eX;
			drawArc(sX, sY, 0.25, 1.25);
			drawArc(sX - diff, sY + diff, 1.25, 0.25);
			drawLines(sX + n, sY + n, sX + n - diff, sY + n + diff, 
					  sX - n, sY - n, sX - n - diff, sY - n + diff);
			if (f == "mouseup") setPos(sX - diff, sY + diff, "end");
		} 
		// SW
		if ((limit < -1 && limit > -6) && (eX < sX && eY > sY)) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			diff = sX - eX;
			drawArc(sX, sY, 1.25, 0.25);
			drawArc(sX - diff, sY + diff, 0.25, 1.25);
			drawLines(sX + n, sY + n, sX + n - diff, sY + n + diff, 
					  sX - n, sY - n, sX - n - diff, sY - n + diff);
			if (f == "mouseup") setPos(sX - diff, sY + diff, "end");
		} 
		// SE
		if ((limit > 1 && limit < 6) && (eX > sX && eY > sY)) {
			if (f == "mousemove") ctx.clearRect(0, 0, width, height);
			diff = sX - eX;
			drawArc(sX, sY, 0.75, 1.75);
			drawArc(sX - diff, sY - diff, 1.75, 0.75);
			drawLines(sX + n, sY - n, sX + n - diff, sY - n - diff, 
					  sX - n, sY + n, sX - n - diff, sY + n - diff);
			if (f == "mouseup") setPos(sX - diff, sY - diff, "end");
		} 
	}

	else if (f == "mouseleave") {
		setCanvas("c");
		ctx.clearRect(0,0,width,height);
	}
}



function setCanvas(id) {
	canvas = document.getElementById(id);
	ctx = canvas.getContext("2d");
	width = canvas.width;
	height = canvas.height;
}



function setPos(x, y, loc) {
	tX = Math.floor((x / 8) / 5 ) + 1;
	tY = Math.floor((y / 8) / 5 ) + 1;
	if (loc == "start") click.startPos = (tY - 1) * 20 + tX;
	else click.endPos = (tY - 1) * 20 + tX;
}



function checkWord() {
	
	function clearPos(p) {
		p.start = p.end = 0;
		return true;
	}

	if (pos.some(function(o) { return o.start === click.startPos &&
							   o.end === click.endPos && clearPos(o); })) {
		return true;
	}

	else if (pos.some(function(o) { return o.start === click.endPos &&
									o.end === click.startPos && clearPos(o); })) {
		return true;
	}
	else return false;
}


function scratchWord() {
	for (var i = 0; i < words.length; i++) {
		if ((click.startPos === words[i].start && click.endPos === words[i].end) ||
			(click.startPos === words[i].end && click.endPos === words[i].start)) {
			// little hack here
			$(".words").find("." + i).addClass("strike");		
		}
	}
	

}

function isEndOfGame(){
	
	var drawerCloseBtnb = window.parent.document.getElementById("drawerclose");
    drawerCloseBtnb.click();
	return pos.every(function(o) { return o.start === 0 && o.end === 0; });

	
}





</script>

</html>