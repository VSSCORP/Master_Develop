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
  
  #page{
	  width:100%;
	  height:100%;
  }
  #doggerbtn{
	  position:fixed;
	background:red;
	bottom:0px;
	width:100px;
	height:100px;
	margin-left:200px;
	z-index:100;
  }
  
  #doggerpopup{
		display:none;
		position:absolute;
		height:100%;
		width:100%;
		background:gray;
		top:0px;
		left:0px;
  }
  .rslides{
	  margin-top:8%;
  }
  
  </style>
</head>
<body>
<div id="page">
	page Contents come here.
	<div id="doggerbtn"> Galary Icon</div>
</div>
<div id="doggerpopup">
<ul class="rslides">
  <li><img src="img/8.jpg" alt="vxc" ></li>
  <li><img src="img/3.jpg" alt="cvdf"></li>
  <li><img src="img/arr.jpg" alt="df" ></li>
  <li><img src="img/celeb.jpg" alt="da"></li>
</ul>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="responsiveslides.min.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 700,            // Integer: Speed of the transition, in milliseconds
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
	
	$("#doggerbtn").hover(function(){
		$("#doggerpopup").css("display", "block");
    }, function(){
		$("#doggerpopup").css("display", "none");
  });
  });
</script>
</body>
</html>