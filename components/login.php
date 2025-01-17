
<!-- BOOT -->
<div id="pageLoading">
	<div class="loading">
		<div class="apple-logo"></div>
        <div class="spinner"></div>
	</div>
</div>

<!-- LOGIN -->
<div id="pageLogin">
    <div class="new-apple-logo"></div>
    <div class="user-avatar">
        <div id="avatar">
        <a href="#hide" class="hide" id="hide"></a>
        <a href="#show" class="show" id="show"></a>
        <div id="cover"></div>
        <div class="ava-css">
        <img src="img/ram.jpg" />
        </div>
        <div class="logName">
        <p>Ram Katneni</p>
        </div>
        <div id="switch">
        <div class="validate">
        <form name="myForm" onsubmit="event.preventDefault(); validateMyForm();"> 
        	<input type="password" id="password" placeholder="Password" />
            <input type="submit" class="submit" />
            <div class="tooltip-pass">
            <p>Password: admin</p>
            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </div>



<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
#pageLoading,#pageLogin {
  position: sticky; /* Stay in place */
  z-index: 200; /* Sit on top */
  padding-top: 15px; /* Location of the box */
  left: 0;
  top: 0;
  bottom: 0;
  right:0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
}
#pageLogin,#dockmaincontainer{
    display: none; /* Hidden by default */
}


/*-----------------------------------------------------------------------------------*/
/*	01.	Boot
/*-----------------------------------------------------------------------------------*/

#pageLoading {
	background:#FFF;
	width:100%;
	height:100%;
	position:absolute;
	z-index:0;
	-webkit-user-select:none;
	-moz-user-select:none;
	user-select:none;
	-webkit-animation:init 14s linear forwards;
	-moz-animation:init 14s linear forwards;
}

#pageLoading .apple-logo {
	position:absolute;
	width:120px;
	height:120px;
	left:50%;
	top:50%;
    z-index: 201; /* Sit on top */
	margin-left:-60px;
	margin-top:-60px;
	background:url(img/apple-logo-boot.png) center no-repeat;
	-webkit-animation:initApple 0.3s 2s linear forwards;
	-moz-animation:initApple 0.3s 2s linear forwards;
}

#pageLoading .spinner {
	background:url(img/spinnerSmall.gif) no-repeat;
	width:36px;
	height:39px;
	position:absolute;
	left:50%;
	top:75%;
    z-index: 201; /* Sit on top */
	margin-left:-18px;
	margin-top:-19px;
	-webkit-animation:initLoading 8s 2s linear forwards;
	-moz-animation:initLoading 8s 2s linear forwards;
}

/*-----------------------------------------------------------------------------------*/
/*	02.	Login
/*-----------------------------------------------------------------------------------*/

#pageLogin {
	background: url(img/gradient.png) no-repeat center, url(img/background.png) repeat left top #000;
	width:100%;
	height:100%;
	position:absolute;
	opacity:1;
    z-index: 205;
	-webkit-animation:initLoginWindow 0.5s 12s linear forwards;
	-moz-animation:initLoginWindow 0.5s 12s linear forwards;
}
#headlogin {
	background:transparent;
	width:100%;
	height:21px;
	position:fixed;
	z-index:1000;
    z-index: 205;
	-webkit-user-select:none;
	-moz-user-select:none;
	user-select:none;
	font-family: "Lucida Grande", "Lucida Sans Unicode", sans-serif;
}
#headlogin nav#menu-dx-login {
	position:absolute;
	right:10px;
	top:0;
}
#headlogin nav#menu-dx-login ul { 
	margin:0; 
	padding:0;
}
#headlogin nav#menu-dx-login ul li {
	float:left;
	height:21px;
	line-height:25px;
	position:relative;
}
#headlogin nav#menu-dx-login ul li.time { 
	font-size:14px; 
	color:#969696;
	padding:0 10px;
}
#headlogin nav#menu-dx-login ul li.wireless {
	background:url(img/wireless-icon-login.png) 10px 2px no-repeat;
	width:22px;
	height:18px;
	top:3px;
	padding:0 5px;
}

#pageLogin .new-apple-logo {
	position:absolute;
	width:120px;
	height:120px;
	left:50%;
	top:24%;
    z-index: 205;
	margin-left:-60px;
	margin-top:-60px;
	background:url(img/apple-logo-login.png) center no-repeat;
	-webkit-animation:initAppleLoginWindow 0.5s 13.5s linear forwards;
	-moz-animation:initAppleLoginWindow 0.5s 13.5s linear forwards;
}
#pageLogin .user-avatar {
    z-index: 205;
	-webkit-animation:initUserAvatar 0.3s 13.7s linear forwards;
	-moz-animation:initUserAvatar 0.3s 13.7s linear forwards;
}
#pageLogin #avatar {
	position:absolute;
	width:98px;
	height:98px;
	left:50%;
	top:50%;
    z-index: 205;
	margin-left:-49px;
	margin-top:-49px;
}
.ava-css {
	height:90px;
    width:90px;
	left: 50%;
	top: 50%;
    margin-left: -49px;
    margin-top: -49px;
    display: block;
    border-radius: 100%;
    padding: 4px;
    background: -moz-linear-gradient(#fdfdfd, #c9c9c9);
	background: -webkit-linear-gradient(#fdfdfd, #c9c9c9);
	border:1px solid #434448;
	position:absolute;
}
.ava-css img {
    display: block;
    border-radius: 100%;
	position:relative;
	width:91px;
	height:91px;
	left:-1px;
	top:-1px;
}
.ava-css:before, .ava-css:after {
    width: 90px;
    height: 90px;
    content: '';
    display: block;
    position: absolute;
    top: 3px;
    left: 3px;
    pointer-events: none;
    border-radius: 100%;
}
.ava-css:before {
	border:1px solid #434448;
}
.ava-css:after {
    background: -moz-linear-gradient(-45deg, rgba(255,255,255,.0), rgba(255,255,255,0.33) 50%, rgba(255,255,255,.0) 50%);
	background: -webkit-linear-gradient(-45deg, rgba(255,255,255,.0), rgba(255,255,255,0.33) 50%, rgba(255,255,255,.0) 50%);
}
#cover {
    background:rgba(0,0,0,0.35);
	box-shadow: 0 0 5px 2px rgba(0,0,0,0.3);
    border-radius: 100% 100% 100% 100%;
    height: 98px;
    left: 1px;
    position: absolute;
    top: 1px;
    width: 98px;
    z-index: 9;
	opacity:0;
}

.show {display: none; }
.hide:target + .show { display:inline; }
.hide:target {display: none; }
#switch { -webkit-animation:show 0.25s ease-in forwards; -moz-animation:show 0.25s ease-in forwards; }
.hide:target ~ #switch { -webkit-animation:delete 0.25s ease-in-out forwards; -moz-animation:delete 0.25s ease-in-out forwards; }
.hide:target ~ .logName { -moz-transform:translateX(10px); -moz-transition:all 0.3s linear; -webkit-transform:translateX(10px); -webkit-transition:all 0.3s linear; }
.show:target ~ .logName { -moz-transform:translateX(0px); -moz-transition:all 0.3s linear; -webkit-transform:translateX(0px); -webkit-transition:all 0.3s linear;}
.hide:active ~ #cover, .show:active ~ #cover { opacity:1; }
@media print { .hide, .show { display: none; } }

.hide {
	background:rgba(0,0,0,0);
	height:132px;
	width:190px;
	position:absolute;
	left:50%;
	top:80%;
	margin-left:-92px;
	margin-top:-69px;
	z-index:10;
}
.show {
	background:rgba(0,0,0,0);
	height:132px;
	width:190px;
	position:absolute;
	left:50%;
	top:80%;
	margin-left:-92px;
	margin-top:-69px;
	z-index:10;
}

#pageLogin .user-avatar .logName{
	position:absolute;
	left:50%;
	top:100%;
	margin:10px 0 0 -90px;
	width:184px;
	text-align:center;
	font-size:12px;
	color:#fff;
	letter-spacing:1px;
	text-shadow:1px 1px 2px #000;
	-webkit-user-select:none;
	-moz-user-select:none;
	user-select:none;
}
input[type=password]::-moz-selection { background:rgba(124,196,255,0.7); }
input[type=password]::selection      { background:rgba(124,196,255,0.7); }
input[type=password] {
	width:154px;
	height:24px;
	box-shadow:0 0 2px 3px #4189c3;
	border-radius:3px;
	border:1px solid rgba(0,0,0,0);
	padding:2px 26px 2px 5px;
	font-family: "Lucida Grande", "Lucida Sans Unicode", sans-serif;
}
input[type=password].valid {
	box-shadow:none;
	color:#6d6d6d;
	border-top:1px solid #343434;
	border-left:1px solid #343434;
	border-right:1px solid #515151;
	border-bottom:1px solid #515151;
}
input[type=password]::-webkit-input-placeholder  {
	font-size:12px;
	color:#6d6d6d;
	letter-spacing:0;
}
input[type=password]:-moz-placeholder {
	font-size:12px; 
	color:#6d6d6d;
	letter-spacing:0;  
}
input[type=password]:focus ~ .tooltip-pass {
	opacity:1;
	-moz-transform:scale(1,1);
	-webkit-transform:scale(1,1);
	-moz-transition:all 0.3s ease-in-out;
	-webkit-transition:all 0.3s ease-in-out;	
}
.tooltip-pass {
	-moz-transform:scale(0,0);
	-webkit-transform:scale(0,0);
	-moz-transform-origin:top center;
	-webkit-transform-origin:top center;
	opacity:0;
	position:absolute;
	text-align:center;
	width:330px;
	height:90px;
	left:50%;
	margin-left:-165px;
	top:37px;
	background:#f2f0eb;
	border-radius:3px;
	border:1px solid rgba(52,52,52,0.35);
	box-shadow:0px 7px 25px rgba(0,0,0,0.65);
}
.tooltip-pass p {
	font-size:12px;
	color:#646464;
	margin-top:8px;
}
.tooltip-pass:before,
.tooltip-pass:after
{
  content: "";
  position: absolute;
  z-index: 1000;
  left: 50%;
  top:-14px;
  margin-left: -14px;
  width: 0;
  height: 0;
  border-left: 14px solid transparent;
  border-right: 14px solid transparent;
  border-bottom: 14px solid #f2f0eb;
}
.tooltip-pass:after
{
  border-top-color: #343434;
}
.tooltip-pass:before
{
  border-left: 15px solid transparent;
  border-right: 15px solid transparent;
  border-bottom: 15px solid rgba(52,52,52,0.35);
  top:-15px;
  margin-left:-15px;
}
#pageLogin .user-avatar #switch {
	position:absolute;
	left:50%;
	top:100%;
	margin-left:-77px;
	margin-top:45px;
}
.error {
	-moz-animation:error 0.35s linear;	
	-webkit-animation:error 0.35s linear;	
}
#pageLogin .user-avatar #switch .submit{
	position:absolute;
	top:3px;
	right:2px;
	background:url(img/submit.png) no-repeat;
	width:24px;
	height:24px;
	text-indent:-9999px;
	border:none;
	padding:0;
    margin-top: -3px;
}
#pageLogin .user-avatar #switch .submit:active {
	background-position:0 -24px;
}

#pageLogin.initLog {
	-webkit-animation:initDesktopLogin 0.4s 1.5s linear forwards;
	-moz-animation:initDesktopLogin 0.4s 1.5s linear forwards;
	visibility:visible;
	opacity:1;
}
#pageLogin.initLogExit {
	opacity:0;
	-moz-animation:none;
	-webkit-animation:none;
}
.charge {
	background:url(img/loadinfologin.gif) no-repeat;
	position:absolute;
	top:3px;
	right:2px;
	width:24px;
	height:24px;
	text-indent:-9999px;
	border:none;
	padding:0;
	-webkit-animation:charge 1.2s linear forwards;
	-moz-animation:charge 1.2s linear forwards;
}
#page:target #head {
	-moz-animation:initDesktopHeader 0.5s 1.9s linear forwards;
	-webkit-animation:initDesktopHeader 0.5s 1.9s linear forwards;
}
#page:target .window {
	-moz-animation:initDesktopWindows 0.2s 2.8s linear;
	-webkit-animation:initDesktopWindows 0.2s 2.8s linear;
}
#page:target {
	-webkit-animation:initDesktop 0.3s 1.6s linear forwards;
	-moz-animation:initDesktop 0.3s 1.6s linear forwards;
}

</style>
<script>
$(document).ready(function(){
    boot();
});

function validateMyForm()
{ 
  if($("#password").val()=="admin")
  { 
      login();
      $("#password").val("");
    setTimeout(loadHome, 2000);
  }else{
    $( "#password" ).effect( "shake" );
    $( ".submit" ).effect( "shake" );
    $("#password").val("");
  }
    return false;
}

function boot(){
    setTimeout(function(){
        $("#pageLogin").fadeIn('slow');
        $("#pageLoading").fadeOut('slow');
    }, 3000);
}

function login(){
    $("#pageLogin").fadeOut('slow');
    $("#dockmaincontainer").fadeIn('slow');
}

function logout(){
    $("#pageLogin").fadeIn('slow');
    $("#dockmaincontainer").fadeOut('slow');
}


function restart(){
    logout();
    $("#pageLogin").fadeOut('slow');
    $("#pageLoading").fadeIn('slow');
    setTimeout(function(){location.reload();},2000);
}
</script>

