@extends('template.lay1')

@section('content')
<style media="screen">
  .background-landing{
    background: rgb(0,0,36);
    background: linear-gradient(120deg, rgba(0,0,36,1) 1%, rgba(9,72,121,1) 33%, rgba(20,151,218,1) 86%, rgba(10,228,236,0.6842087176667542) 98%);
    height: calc(100vh - 55px);
    width: 100%;
  }
  .container-fluid{
    padding-top: 0px!important;
    overflow: hidden!important;
  }
</style>
<div class="row no-guttres">
  <div class="background-landing">
    <canvas id="canvas">Canvas is not supported in your browser</canvas>
    <div class='box'>
    <div class='wave -one'></div>
    <div class='wave -two'></div>
    <div class='wave -three'></div>
    <div class='title'>
        <p style="margin-bottom:-5px;"><b>NUWSP</b></p>
        <p style="font-size:14px;">National Urban Water Supply Project</p>
        <p>
          <img src="{{rt('dist/images/logo.png')}}" alt="" style="max-width:10%;">
        </p>
        <p style="font-size:20px; margin-bottom:0px;"><b>Direktorat Jendal</b> </p>
        <p style="font-size:20px;"><b>Bina Pembangunan Daerah</b>  </p>

    </div>
  </div>
  </div>
</div>


<style media="screen">
body {
display: flex;
justify-content: center;
align-items: center;
}

.wrapper{
  width: 100vw;
}
/* .box {
width: 300px;
height: 300px;
border-radius: 5px;
box-shadow: 0 2px 30px rgba(black, .2);
background: lighten(#f0f4c3, 10%);
position: relative;
overflow: hidden;
transform: translate3d(0, 0, 0);
} */

.wave {
opacity: .4;
position: absolute;
top: 3%;
background: #0af;
width: 40vw;
height: 40vw;
margin-left: -250px;
margin-top: -250px;
transform-origin: 50% 48%;
border-radius: 43%;
animation: drift 3000ms infinite linear;
}

.wave.-three {
animation: drift 5000ms infinite linear;
}

.wave.-two {
animation: drift 7000ms infinite linear;
opacity: .1;
background: yellow;
}

.box:after {
content: '';
display: block;
left: 0;
top: 0;
width: 100%;
height: 100%;
background: linear-gradient(to bottom, rgba(#e8a, 1), rgba(#def, 0) 80%, rgba(white, .5));
z-index: 11;
transform: translate3d(0, 0, 0);
}

.title {
position: absolute;
left: 0;
top: 0;
width: 100%;
z-index: 1;
margin-top: 5%;
text-align: center;
/* transform: translate3d(0, 0, 0); */
color: white;
text-transform: uppercase;
/* letter-spacing: .4em; */
font-size: 50px;
/* text-shadow: 0 1px 0 rgba(black, .1); */
/* text-indent: .3em; */
}
@keyframes drift {
from { transform: rotate(0deg); }
from { transform: rotate(360deg); }
}
</style>




<style media="screen">
canvas, #instructions {
position: absolute;
width: 100%;
height: 100%;
}


#instructions {
opacity: 1;
transition: opacity 2s;
background-repeat: no-repeat;
background-position: center center;
background-size: contain;
background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjU2IDI1NjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxwb2x5Z29uIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiBwb2ludHM9IjIyLjE0LDQ4IDM3LjA0NSwyMi4xODMgNTEuOTUxLDQ4Ii8+PHBvbHlnb24gc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIHBvaW50cz0iNTEuOTUxLDE4NiAzNy4wNDUsMjExLjgxNiAyMi4xNCwxODYiLz48cG9seWdvbiBzdHlsZT0iZmlsbDojRkZGRkZGOyIgcG9pbnRzPSI3MCwyMzMuODEyIDQ0LjE4NCwyMTguOTA2IDcwLDIwNC4wMDEiLz48cG9seWdvbiBzdHlsZT0iZmlsbDojRkZGRkZGOyIgcG9pbnRzPSIyMDgsMjA0LjAwMSAyMzMuODE2LDIxOC45MDYgMjA4LDIzMy44MTIiLz48cmVjdCB4PSIzMSIgeT0iNDciIHN0eWxlPSJmaWxsOiNGRkZGRkY7IiB3aWR0aD0iMTIiIGhlaWdodD0iMTQxIi8+PHJlY3QgeD0iNjgiIHk9IjIxMyIgc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIHdpZHRoPSIxNDEiIGhlaWdodD0iMTIiLz48dGV4dCB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDExNC45NDUzIDEwMy4zNTc5KSI+PHRzcGFuIHg9IjAiIHk9IjAiIHN0eWxlPSJmaWxsOiNGRkZGRkY7IGZvbnQtZmFtaWx5OidBcmlhbC1Cb2xkTVQnOyBmb250LXNpemU6MTY7Ij5EUkFHPC90c3Bhbj48dHNwYW4geD0iMTYuMDA0IiB5PSIxOS4yIiBzdHlsZT0iZmlsbDojRkZGRkZGOyBmb250LWZhbWlseTonQXJpYWwtQm9sZE1UJzsgZm9udC1zaXplOjE2OyI+dG88L3RzcGFuPjx0c3BhbiB4PSItMTEuMTEzIiB5PSIzOC40MDEiIHN0eWxlPSJmaWxsOiNGRkZGRkY7IGZvbnQtZmFtaWx5OidBcmlhbC1Cb2xkTVQnOyBmb250LXNpemU6MTY7Ij5DSEFOR0U8L3RzcGFuPjwvdGV4dD48dGV4dCB0cmFuc2Zvcm09Im1hdHJpeCgxIDAgMCAxIDExNy4xNzE5IDIwNy4xMzI4KSIgc3R5bGU9ImZpbGw6I0ZGRkZGRjsgZm9udC1mYW1pbHk6J0FyaWFsLUJvbGRNVCc7IGZvbnQtc2l6ZToxNjsiPldJTkQ8L3RleHQ+PHRleHQgdHJhbnNmb3JtPSJtYXRyaXgoLTQuMzcxMTM5ZS0wOCAtMSAxIC00LjM3MTEzOWUtMDggNTkuODcwMSAxODEuMDU4NikiIHN0eWxlPSJmaWxsOiNGRkZGRkY7IGZvbnQtZmFtaWx5OidBcmlhbC1Cb2xkTVQnOyBmb250LXNpemU6MTY7Ij5SQUlOIElOVEVOU0lUWTwvdGV4dD48L3N2Zz4=);

@media (max-height: 400px) {
  display: none;
}
}
</style>


<script type="text/javascript">
document.addEventListener("DOMContentLoaded", function() {
	demo.init();
	window.addEventListener('resize', demo.resize);
});

// demo namespace
var demo = {
	// CUSTOMIZABLE PROPERTIES
	// - physics speed multiplier: allows slowing down or speeding up simulation
	speed: 1,
	// - color of particles
	color: {
		r: '80',
		g: '175',
		b: '255',
		a: '0.5'
	},

	// END CUSTOMIZATION
	// whether demo is running
	started: false,
	// canvas and associated context references
	canvas: null,
	ctx: null,
	// viewport dimensions (DIPs)
	width: 0,
	height: 0,
	// devicePixelRatio alias (should only be used for rendering, physics shouldn't care)
	dpr: window.devicePixelRatio || 1,
	// time since last drop
	drop_time: 0,
	// ideal time between drops (changed with mouse/finger)
	drop_delay: 25,
	// wind applied to rain (changed with mouse/finger)
	wind: 4,
	// color of rain (set in init)
	rain_color: null,
	rain_color_clear: null,
	// rain particles
	rain: [],
	rain_pool: [],
	// rain droplet (splash) particles
	drops: [],
	drop_pool: []
};

// demo initialization (should only run once)
demo.init = function() {
	if (!demo.started) {
		demo.started = true;
		demo.canvas = document.getElementById('canvas');
		demo.ctx = demo.canvas.getContext('2d');
		var c = demo.color;
		demo.rain_color = 'rgba(' + c.r + ',' + c.g + ',' + c.b + ',' + c.a + ')';
		demo.rain_color_clear = 'rgba(' + c.r + ',' + c.g + ',' + c.b + ',0)';
		demo.resize();
		Ticker.addListener(demo.step);

		//
		// const gui = new dat.GUI();
		// gui.add(demo, 'speed', 0.2, 2);

		// fade out instructions after a few seconds
		var instructions = document.getElementById('instructions');
		setTimeout(function() {
			instructions.style.opacity = 0;
			setTimeout(function(){
				instructions.parentNode.removeChild(instructions);
			}, 2000);
		}, 4000);
	}
}

// (re)size canvas (clears all particles)
demo.resize = function() {
	// localize common references
	var rain = demo.rain;
	var drops = demo.drops;
	// recycle particles
	for (var i = rain.length - 1; i >= 0; i--) {
			rain.pop().recycle();
	}
	for (var i = drops.length - 1; i >= 0; i--) {
			drops.pop().recycle();
	}
	// resize
	demo.width = window.innerWidth;
	demo.height = window.innerHeight;
	demo.canvas.width = demo.width * demo.dpr;
	demo.canvas.height = demo.height * demo.dpr;
}

demo.step = function(time, lag) {
	// localize common references
	var demo = window.demo;
	var speed = demo.speed;
	var width = demo.width;
	var height = demo.height;
	var wind = demo.wind;
	var rain = demo.rain;
	var rain_pool = demo.rain_pool;
	var drops = demo.drops;
	var drop_pool = demo.drop_pool;

	// multiplier for physics
	var multiplier = speed * lag;

	// spawn drops
	demo.drop_time += time * speed;
	while (demo.drop_time > demo.drop_delay) {
		demo.drop_time -= demo.drop_delay;
		var new_rain = rain_pool.pop() || new Rain();
		new_rain.init();
		var wind_expand = Math.abs(height / new_rain.speed * wind); // expand spawn width as wind increases
		var spawn_x = Math.random() * (width + wind_expand);
		if (wind > 0) spawn_x -= wind_expand;
		new_rain.x = spawn_x;
		rain.push(new_rain);
	}

	// rain physics
	for (var i = rain.length - 1; i >= 0; i--) {
		var r = rain[i];
		r.y += r.speed * r.z * multiplier;
		r.x += r.z * wind * multiplier;
		// remove rain when out of view
		if (r.y > height) {
			// if rain reached bottom of view, show a splash
			r.splash();
		}
		// recycle rain
		if (r.y > height + Rain.height * r.z || (wind < 0 && r.x < wind) || (wind > 0 && r.x > width + wind)) {
			r.recycle();
			rain.splice(i, 1);
		}
	}

	// splash drop physics
	var drop_max_speed = Drop.max_speed;
	for (var i = drops.length - 1; i >= 0; i--) {
		var d = drops[i];
		d.x += d.speed_x * multiplier;
		d.y += d.speed_y * multiplier;
		// apply gravity - magic number 0.3 represents a faked gravity constant
		d.speed_y += 0.3 * multiplier;
		// apply wind (but scale back the force)
		d.speed_x += wind / 25 * multiplier;
		if (d.speed_x < -drop_max_speed) {
			d.speed_x = -drop_max_speed;
		}else if (d.speed_x > drop_max_speed) {
			d.speed_x = drop_max_speed;
		}
		// recycle
		if (d.y > height + d.radius) {
			d.recycle();
			drops.splice(i, 1);
		}
	}

	demo.draw();
}

demo.draw = function() {
	// localize common references
	var demo = window.demo;
	var width = demo.width;
	var height = demo.height;
	var dpr = demo.dpr;
	var rain = demo.rain;
	var drops = demo.drops;
	var ctx = demo.ctx;

	// start fresh
	ctx.clearRect(0, 0, width*dpr, height*dpr);

	// draw rain (trace all paths first, then stroke once)
	ctx.beginPath();
	var rain_height = Rain.height * dpr;
	for (var i = rain.length - 1; i >= 0; i--) {
		var r = rain[i];
		var real_x = r.x * dpr;
		var real_y = r.y * dpr;
		ctx.moveTo(real_x, real_y);
		// magic number 1.5 compensates for lack of trig in drawing angled rain
		ctx.lineTo(real_x - demo.wind * r.z * dpr * 1.5, real_y - rain_height * r.z);
	}
	ctx.lineWidth = Rain.width * dpr;
	ctx.strokeStyle = demo.rain_color;
	ctx.stroke();

	// draw splash drops (just copy pre-rendered canvas)
	for (var i = drops.length - 1; i >= 0; i--) {
		var d = drops[i];
		var real_x = d.x * dpr - d.radius;
		var real_y = d.y * dpr - d.radius;
		ctx.drawImage(d.canvas, real_x, real_y);
	}
}


// Rain definition
function Rain() {
	this.x = 0;
	this.y = 0;
	this.z = 0;
	this.speed = 25;
	this.splashed = false;
}
Rain.width = 2;
Rain.height = 40;
Rain.prototype.init = function() {
	this.y = Math.random() * -100;
	this.z = Math.random() * 0.5 + 0.5;
	this.splashed = false;
}
Rain.prototype.recycle = function() {
	demo.rain_pool.push(this);
}
// recycle rain particle and create a burst of droplets
Rain.prototype.splash = function() {
	if (!this.splashed) {
		this.splashed = true;
		var drops = demo.drops;
		var drop_pool = demo.drop_pool;

		for (var i=0; i<16; i++) {
			var drop = drop_pool.pop() || new Drop();
			drops.push(drop);
			drop.init(this.x);
		}
	}
}


// Droplet definition
function Drop() {
	this.x = 0;
	this.y = 0;
	this.radius = Math.round(Math.random() * 2 + 1) * demo.dpr;
	this.speed_x = 0;
	this.speed_y = 0;
	this.canvas = document.createElement('canvas');
	this.ctx = this.canvas.getContext('2d');

	// render once and cache
	var diameter = this.radius * 2;
	this.canvas.width = diameter;
	this.canvas.height = diameter;

	var grd = this.ctx.createRadialGradient(this.radius, this.radius , 1, this.radius, this.radius, this.radius);
	grd.addColorStop(0, demo.rain_color);
	grd.addColorStop(1, demo.rain_color_clear);
	this.ctx.fillStyle = grd;
	this.ctx.fillRect(0, 0, diameter, diameter);
}

Drop.max_speed = 5;

Drop.prototype.init = function(x) {
	this.x = x;
	this.y = demo.height;
	var angle = Math.random() * Math.PI - (Math.PI * 0.5);
	var speed = Math.random() * Drop.max_speed;
	this.speed_x = Math.sin(angle) * speed;
	this.speed_y = -Math.cos(angle) * speed;
}
Drop.prototype.recycle = function() {
	demo.drop_pool.push(this);
}




// handle interaction
demo.mouseHandler = function(evt) {
	demo.updateCursor(evt.clientX, evt.clientY);
}
demo.touchHandler = function(evt) {
	evt.preventDefault();
	var touch = evt.touches[0];
	demo.updateCursor(touch.clientX, touch.clientY);
}
demo.updateCursor = function(x, y) {
	x /= demo.width;
	y /= demo.height;
	var y_inverse = (1 - y);

	demo.drop_delay = y_inverse*y_inverse*y_inverse * 100 + 2;
	demo.wind = (x - 0.5) * 50;
}

document.addEventListener('mousemove', demo.mouseHandler);
document.addEventListener('touchstart', demo.touchHandler);
document.addEventListener('touchmove', demo.touchHandler);



// Frame ticker helper module
var Ticker = (function(){
	var PUBLIC_API = {};

	// public
	// will call function reference repeatedly once registered, passing elapsed time and a lag multiplier as parameters
	PUBLIC_API.addListener = function addListener(fn) {
		if (typeof fn !== 'function') throw('Ticker.addListener() requires a function reference passed in.');

		listeners.push(fn);

		// start frame-loop lazily
		if (!started) {
			started = true;
			queueFrame();
		}
	};

	// private
	var started = false;
	var last_timestamp = 0;
	var listeners = [];
	// queue up a new frame (calls frameHandler)
	function queueFrame() {
		if (window.requestAnimationFrame) {
			requestAnimationFrame(frameHandler);
		} else {
			webkitRequestAnimationFrame(frameHandler);
		}
	}
	function frameHandler(timestamp) {
		var frame_time = timestamp - last_timestamp;
		last_timestamp = timestamp;
		// make sure negative time isn't reported (first frame can be whacky)
		if (frame_time < 0) {
			frame_time = 17;
		}
		// - cap minimum framerate to 15fps[~68ms] (assuming 60fps[~17ms] as 'normal')
		else if (frame_time > 68) {
			frame_time = 68;
		}

		// fire custom listeners
		for (var i = 0, len = listeners.length; i < len; i++) {
			listeners[i].call(window, frame_time, frame_time / 16.67);
		}

		// always queue another frame
		queueFrame();
	}

	return PUBLIC_API;
}());
</script>
@stop
