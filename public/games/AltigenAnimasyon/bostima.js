Node.prototype.hasClass=function(className){if(this.classList){return this.classList.contains(className)}else{return(-1<this.className.indexOf(className))}};
Node.prototype.addClass=function(className){if(this.classList){this.classList.add(className)}else if(!this.hasClass(className)){var classes=this.className.split(" ");classes.push(className);this.className=classes.join(" ")}return this};
Node.prototype.removeClass=function(className){if(this.classList){this.classList.remove(className)}else{var classes=this.className.split(" ");classes.splice(classes.indexOf(className),1);this.className=classes.join(" ")}return this};

function scaleCanvas(canvas,context,width,height){
	// assume the device pixel ratio is 1 if the browser doesn't specify it
	var devicePixelRatio=window.devicePixelRatio||1;
	// determine the 'backing store ratio' of the canvas context
	var backingStoreRatio=(context.webkitBackingStorePixelRatio||context.mozBackingStorePixelRatio||context.msBackingStorePixelRatio||context.oBackingStorePixelRatio||context.backingStorePixelRatio||1);
	// determine the actual ratio we want to draw at
	var ratio=devicePixelRatio/backingStoreRatio;
	if(devicePixelRatio!==backingStoreRatio){
		// set the 'real' canvas size to the higher width/height
		canvas.width=width*ratio;
		canvas.height=height*ratio;
		// ...then scale it back down with CSS
		canvas.style.width=width+'px';
		canvas.style.height=height+'px';
	}else{
		// this is a normal 1:1 device; just scale it simply
		canvas.width=width;
		canvas.height=height;
		canvas.style.width='';
		canvas.style.height='';
	}
	// scale the drawing context so everything will work at the higher ratio
	context.scale(ratio,ratio);
}

var MAMBAAPP = {
	element:"",
	screenType:"",
	init: function(elementID, startAPP){
		MAMBAAPP.element=document.getElementById(elementID);
		startAPP();
	},
	getAppWidth: function(){
		return MAMBAAPP.element.getBoundingClientRect().width;
	},
	getAppHeight: function(){
		return MAMBAAPP.element.getBoundingClientRect().height;
	}
}

var MAMBAARRAY={shuffle:function(array){for(var j,x,i=array.length;i;j=parseInt(Math.random()*i),x=array[--i],array[i]=array[j],array[j]=x);return array}}

function ikiDegiskenArasindanRastgele(x,y){return Math.floor(Math.random()*(y-x+1)+x);}

// mustafabayrak.com.tr FONKSİYONLAR
var MB={
	ARRAY:{
		shuffle:function(a){
			
		}
	},
	PRETTY:{
		time:function(a){
			
		}
	},
	APP:{
		
	},
	POLYFILL:{
		
	}
}