<html>
<head>
<style>
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin : 0;
    }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }

.rslides img {
  display: block;
  height: auto;
  float: center;
  width: 60%;
  border: 0;
   margin-left: auto;
  margin-right: auto;
  }
  
  #doggerpopup{
		display:none;
		position:absolute;
		height:100%;
		width:100%;
		background:#111;
		top:0px;
		left:0px;
  }
  .rslides{
	  margin-top:5%;
  }
  
  </style>
</head>
<body>
<div id="doggerpopup">
<ul class="rslides">
  <li><img src="images/F.JPG" alt="vxc" ></li>
  <li><img src="images/12.JPG" alt="cvdf"></li>
  <li><img src="images/14.JPG" alt="df" ></li>
  <li><img src="images/IMG-8050.JPG" alt="da"></li>
</ul>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
  $(function() {
	  console.log("onload");
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 0.10,            // Integer: Speed of the transition, in milliseconds
  timeout: 1500,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
	
	$("#galarySlide img").hover(function(){
		console.log("hover");
		$("#doggerpopup").css("display", "block");
    }, function(){
		console.log("out");
		$("#doggerpopup").css("display", "none");
  });
  });
</script>
</body>
</html>