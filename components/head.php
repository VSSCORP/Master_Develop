<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ram Katneni: Personal portfolio.</title>
	<meta name="description" content="Naresh Katneni: iPod collectible portfolio" />
	<meta name="keywords" content="apple, iPod, music, collectible, art, applefan, stevejobs, applenews, iphone" />
	<link rel="shortcut icon" href="favicon.ico">
	
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/detail.css" />
	<link rel="stylesheet" type="text/css" href="css/quotes.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/dock.css" />
		<!-- <script src="js/main.js"></script> 
	<script src="js/custom.js"></script>-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="js/responsiveslides.min.js"></script>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

	<script src="js/modernizr-custom.js"></script>
	<link  href="http://fonts.googleapis.com/css?family=Reenie+Beanie:regular" 
rel="stylesheet" type="text/css">

<style>

.menu__item::after {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    height: 3px;
    background: #f73378;
    transform: scale3d(0,1,1);
    transition: transform 0.3s cubic-bezier(0.2,1,0.8,1);
    transform-origin: 0 0;
}

.menu__item:hover::after, .menu__item--current::after {
    transform: scale3d(1,1,1);
}
	</style>

</head>
<body>
	<header class="iostaskbar">
		<ul class="left">
				<li class="apple">
						<i class="fa fa-apple"></i>
						<div class="submenu">
								<ul>
										<li>About This Mac</li>
										<li>Software Update...</li>
										<li>Mac OS X Software...</li>
										<li class="spacer"></li>
										<li>System Preferences...</li>
										<li class="hasSubMenu">Dock</li>
										<li class="spacer"></li>
										<li class="hasSubMenu">Recent Items</li>
										<li class="spacer"></li>
										<li class="shortcut" shortcut="&#x2325;&#x2318;&#x238B;">Force Quit...</li>
										<li class="spacer"></li>
										<li onClick="restart()">Sleep</li>
										<li onClick="restart()">Restart...</li>
										<li onClick="restart()">Shut Down...</li>
										<li class="spacer"></li>
										<li class="shortcut" onClick="logout()" shortcut="&#x21E7;&#x2318;Q">Log Out Ram Katneni...</li>
								</ul>
						</div>
				</li>
		</ul>
		<ul class="right">
				<!-- <li><a href="#" target='_blank'><i class="fa fa-codepen"></i></a></li> -->
				<li><a href="#" target='_blank'><i class="fa fa-twitter"></i></a></li>
				<li id="volume-icon-li"><i class="fa fa-volume-off" id="volume-icon"></i>
						<div class="submenu">
								<ul class="volume">
										<li class="volume">
												<div>
														<input type="range" min="0" max="100" value="0" id="volume">
												</div>
										</li>
								</ul>
				</li>
				<li><span id="clock"></span>
						<div class="submenu">
								<ul>
										<li id="date" class="noChoice"></li>
										<li class="spacer"></li>
										<li class="noChoice" id="datepickercover"><div id="datepicker"></div></li>
										<li class="spacer"></li>
										<li>Open Date & Time Preferences...</li>
								</ul>
						</div>
				</li>
				<li>Ram Katneni
						<div class="submenu">
								<ul>
										<li><a href="http://www.theramkatneni.com/" target="_blank">Website</a></li>
								</ul>
						</div>
				</li>
				<li><i class="fa fa-search"></i></li>
				<li id="menuBtn"><i class="fa fa-bars"></i></li>
		</ul>
</header>
<style>
<style>
body {
  margin: 0;
  overflow: hidden;
  padding: 0;
  perspective-origin: 0 0;
}

/*--.iostaskbar--*/
.iostaskbar {
  background: linear-gradient(to bottom, #e6e6e6 0%, #a3a3a3 100%);
  display: block;
  font-size: 0.9em;
  height: 1.3em;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  color: black;
  z-index: 20;
}

.iostaskbar ul {
  margin: 0 5px;
  padding: 0 3px;
  z-index: 20;
}

.iostaskbar li {
  display: inline-block;
  line-height: 1.3em;
  padding: 0 0.5em;
  position: relative;
  cursor: default;
}

.iostaskbar .left {
  float: left;
}

.iostaskbar .right {
  float: right;
}

a {
  color: #000;
  text-decoration: none;
}
a:hover {
  text-decoration: underline;
}

.iostaskbar .selected {
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5978f5), color-stop(100%, #335ef6));
  color: #fff;
  border-bottom: 0.1em solid #5978F5;
}

/*--Menus--*/
.visible {
  display: block !important;
}

.shortcut:after {
  content: attr(shortcut);
  float: right;
  padding-right: 20px;
}

.search {
  padding: 5px 10px !important;
}

.noChoice {
  color: #adadad;
}
.noChoice:hover {
  background: #fff !important;
  color: #adadad !important;
}

#volume-icon-li {
  width: 1em;
}

.submenu {
  display: none;
}
.submenu input[type="text"] {
  border-radius: 2em;
  border: 1px solid #333;
  height: 2em;
  padding: 0 10px;
}
.submenu input[type="range"] {
  transform: rotate(-90deg);
  margin-left: -50px;
  margin-top: 65px;
}
.submenu ul {
  background: #fff;
  border-radius: 0 0 5px 5px;
  color: #333;
  font-size: 14px;
  left: 0px;
  margin: 0 !important;
  overflow: hidden;
  padding: 0 5px 0 0;
  position: absolute;
  top: 1.3em;
  width: auto;
  white-space: nowrap;
}
.submenu ul.volume {
  height: 10em;
  width: 2em;
  margin: 0;
  padding: 0;
  position: absolute;
  overflow: visible;
}
.submenu ul.volume li {
  margin: 0;
  padding: 0;
}
.submenu ul li {
  display: block !important;
  vertical-align: middle;
  float: none;
  margin-right: 75px;
  font-weight: 400;
  padding: 2.5px 0px 2.5px 15px;
  width: 100%;
}
.submenu ul li.spacer {
  background: rgba(211, 211, 211, 0.8);
  height: 1px !important;
  margin: 2px 0;
  padding: 0;
  width: 102%;
  position: relative;
}
.submenu ul li.spacer:hover {
  background: rgba(211, 211, 211, 0.8);
}
.submenu li:hover:not(.volume) {
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5978f5), color-stop(100%, #335ef6));
  color: #fff;
}
.submenu .hasSubMenu:after {
  content: "\f04b";
  font-family: FontAwesome;
  font-size: 0.8em;
  display: inline-block;
  position: absolute;
  right: 25px;
}

</style>
<script type="text/javascript">
	
	//Clock;
function updateClock() {
	try{
		var currentTime = new Date();
		var currentHours = currentTime.getHours();
		var currentMinutes = currentTime.getMinutes();
		var currentSeconds = currentTime.getSeconds();
		var shortDays = [
				'Sun', //Sunday starts at 0
				'Mon',
				'Tue',
				'Wed',
				'Thu',
				'Fri',
				'Sat'
		];
		var longDays = [
				'Sunday', //Sunday starts at 0
				'Monday',
				'Tuesday',
				'Wednesday',
				'Thursday',
				'Friday',
				'Saturday'
		];
		var months = ['January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

		d = new Date(); //This returns Wed Apr 02 2014 17:28:55 GMT+0800 (Malay Peninsula Standard Time)
		m = d.getMonth();
		month = (months[m]);
		date = d.getDate();
		year = d.getFullYear();
		x = d.getDay(); //This returns a number, starting with 0 for Sunday

		var day = (shortDays[x]);
		var longDay = (longDays[x]);

		// Pad the minutes and seconds with leading zeros, if required
		currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
		currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

		// Choose either "AM" or "PM" as appropriate
		var timeOfDay = (currentHours < 12) ? "AM" : "PM";

		// Convert the hours component to 12-hour format if needed
		currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;

		// Convert an hours component of "0" to "12"
		currentHours = (currentHours === 0) ? 12 : currentHours;

		// Compose the string for display
		var currentTimeString = day + " " + currentHours + ":" + currentMinutes + " " + timeOfDay;
		var longTimeString = longDay + ", " + month + " " + date + ", " + year;
		$("#clock").html(currentTimeString);
		$("#date").html(longTimeString);
	}catch(err){
			console.log(err.message);
	}
}

$(document).ready(function() {
	try{
		$( "#datepicker" ).datepicker();
		updateClock();
		setInterval('updateClock()', 1000);
	}catch(err){
			console.log(err.message);
	}
});


//Menu Bar Selection
$(".iostaskbar ul li").click(function(e) {
	try{
		if(this.id=="datepickercover")
			return true;
		e.stopPropagation();
		$(".visible").removeClass("visible");
		$(this).children(" div.submenu").addClass("visible").fadeIn();
		$(".selected").removeClass("selected");
		$(this).addClass("selected");
	}catch(err){
		console.log(err.message);
	}
});

var isMenuOpen = false;
$("#menuBtn").click(function(e){
	toggleMenu();
});

// toggle menu fn
	function toggleMenu() {
		try{
			if( isMenuOpen ) {
				$(".pages-nav").removeClass('pages-nav--open');
				$("#menuBtn").css("z-index","1");
				isMenuOpen = false;
			}
			else {
				$(".pages-nav").addClass('pages-nav--open');
				$("#menuBtn").css("z-index","30");
				isMenuOpen = true;
			}
			resizeDocWindows(isMenuOpen);
		}catch(err){
			console.log(err.message);
		}
	}

	function resizeDocWindows(flag){
		try{
			var docAllWin =$("#pages-stack .window");
			var maxWin = Math.min(docAllWin.length,5);
			for(var i=0;i<maxWin;i++){
				var currWinElem = docAllWin[i];
				if(flag){
					$(currWinElem).addClass("docResizeWin"+(maxWin-i));
				}else{
					$(".window").removeClass("docResizeWin"+(maxWin-i));
				}
			}
		}catch(err){
			console.log(err.message);
		}
	}

	function claseMenu(){
		try{
			$(".pages-nav").removeClass('pages-nav--open');
			$("#menuBtn").css("z-index","1");
			isMenuOpen = false;
			resizeDocWindows(isMenuOpen);
		}catch(err){
			console.log(err.message);
		}
	}
	
</script>
</body>