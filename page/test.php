<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
</head>

<body>
<div class="iphone">
  <div class="border">
    <form class="chat" method="get">
      <span></span>
      <div class="messages" id="adobewordpress">
        <div class="message" id="msg1">
          <div class="myMessage">
            <p>It looks beautiful!</p>
            <date><b>John Doe</b> 08.03.2016 14:30:7</date>
          </div>
        </div>
        <div class="message" id="msg2">
          <div class="fromThem">
            <p>It looks like the iPhone message box.</p>
            <date><b>Vatanay</b> 08.03.2016 14:31:22</date>
          </div>
        </div>
        <div class="message"  id="msg3">
          <div class="myMessage">
            <p>Yep, is this design responsive?</p>
            <date><b>John Doe</b> 08.03.2016 14:33:32</date>
          </div>
        </div>
        <div class="message"  id="msg4">
          <div class="myMessage">
            <p>By the way when I hover on my message it shows date.</p>
            <date><b>John Doe</b> 08.03.2016 14:36:4</date>
          </div>
        </div>
        <div class="message" id="msg5">
          <div class="fromThem">
            <p>Yes, this is completely responsive.</p>
            <date><b>Vatanay</b> 08.03.2016 14:37:12</date>
          </div>
        </div>
		<?php
			if(isset($_GET["msg"]))
			if(!empty($_GET["msg"])){
			echo ' <div class="message"><div class="myMessage"><p>'.  htmlspecialchars($_GET["msg"]) . '</p>
            <date><b>John Doe</b> 08.03.2016 14:36:4</date></div></div>';
			}
		?>
      </div>
      <input type="text" name="msg" id="msg" placeholder="Your message">
      <input type="submit" value="Send">
    </form>
  </div>
</div>

<!-- DEMO -->
<a href="http://www.adobewordpress.com/iphone-mesajlar-ekrani" target="_blank" class="article" style="display:none">Read Article</a>
<style>

#msg1,#msg2,#msg3,#msg4,#msg5{
	display:hide !important;
}

form.chat *{
  transition:all .5s;
  box-sizing:border-box;
  -webkit-box-sizing:border-box;
  -moz-box-sizing:border-box;
}

form.chat {
  margin:0;
  cursor:default;
  position:absolute;
  left:0;
  right:0;
  bottom:0;
  top:0;
  -webkit-touch-callout: none; /* iOS Safari */
  -webkit-user-select: none;   /* Chrome/Safari/Opera */
  -khtml-user-select: none;    /* Konqueror */
  -moz-user-select: none;      /* Firefox */
  -ms-user-select: none;       /* IE/Edge */
  user-select: none;   
}

form.chat span.spinner{
  -moz-animation: loading-bar 2s 1;
  -webkit-animation: loading-bar 2s 1;
  animation: loading-bar 2s 1;
  display: block;
  height: 2px;
  background-color: #00e34d;
  transition: width 0.2s;
  position:absolute;
  top:0; left:0; right:0;
  z-index:4
}

form.chat .messages{
  display:block;
  overflow-x: hidden;
  overflow-y: scroll;
  position:relative;
  height:90%;
  width:100%;
  padding:2% 3%;
  border-bottom:1px solid #ecf0f1;
}

form.chat ::-webkit-scrollbar {width: 3px; height:1px;transition:all .5s;z-index:10;}
form.chat ::-webkit-scrollbar-track {background-color: white;}
form.chat ::-webkit-scrollbar-thumb {
  background-color: #bec4c8; 
  border-radius:3px;
}

form.chat .message{
  display:block;
  width:98%;
  padding:0.5%;
}

form.chat .message p{
  margin:0;
}

form.chat .myMessage,
form.chat .fromThem {
  max-width: 50%;
  word-wrap: break-word;
  margin-bottom: 20px;
}

form.chat .message:hover .myMessage{
  -webkit-transform: translateX(-130px);
  transform: translateX(-130px);
}

form.chat .message:hover .fromThem{
  -webkit-transform: translateX(130px);
  transform: translateX(130px);
}

form.chat .message:hover date {
  opacity: 1;
}

form.chat .myMessage,.fromThem{
  position: relative;
  padding: 10px 20px;
  color: white;
  border-radius: 25px;
  clear: both;
  font: 400 15px 'Open Sans', sans-serif;
}

form.chat .myMessage {
  background: #00e34d;
  color:white;
  float:right;
  clear:both;
  border-bottom-right-radius: 20px 0px\9;
}

form.chat .myMessage:before {
  content: "";
  position: absolute;
  z-index: 1;
  bottom: -2px;
  right: -8px;
  height: 19px;
  border-right: 20px solid #00e34d;
  border-bottom-left-radius: 16px 14px;
  -webkit-transform: translate(0, -2px);
  transform: translate(0, -2px);
  border-bottom-left-radius: 15px 0px\9;
  transform: translate(-1px, -2px)\9;
}

form.chat .myMessage:after {
  content: "";
  position: absolute;
  z-index: 1;
  bottom: -2px;
  right: -42px;
  width: 12px;
  height: 20px;
  background: white;
  border-bottom-left-radius: 10px;
  -webkit-transform: translate(-30px, -2px);
  transform: translate(-30px, -2px);
}

form.chat .fromThem {
  background: #E5E5EA;
  color: black;
  float: left;
  clear:both;
  border-bottom-left-radius: 30px 0px\9;
}
form.chat .fromThem:before {
  content: "";
  position: absolute;
  z-index: 2;
  bottom: -2px;
  left: -7px;
  height: 19px;
  border-left: 20px solid #E5E5EA;
  border-bottom-right-radius: 16px 14px;
  -webkit-transform: translate(0, -2px);
  transform: translate(0, -2px);
  border-bottom-right-radius: 15px 0px\9;
  transform: translate(-1px, -2px)\9;
}

form.chat .fromThem:after {
  content: "";
  position: absolute;
  z-index: 3;
  bottom: -2px;
  left: 4px;
  width: 26px;
  height: 20px;
  background: white;
  border-bottom-right-radius: 10px;
  -webkit-transform: translate(-30px, -2px);
  transform: translate(-30px, -2px);
}

form.chat date {
  position:absolute;
  top: 10px;
  font-size:14px;
  white-space:nowrap;
  vertical-align:middle;
  color: #8b8b90;
  opacity: 0;
  z-index:4;
}

form.chat .myMessage date {
  left: 105%;
}

form.chat .fromThem date {
  right: 105%;
}

form.chat input{
  font: 400 13px 'Open Sans', sans-serif;
  border:0;
  padding:0 15px;
  height:10%;
  outline:0;
}

form.chat input[type='text']{
  width:73%;
  float:left;
}

form.chat input[type='submit']{
  width:23%;
  background:transparent;
  color:#00E34D;
  font-weight:700;
  text-align:right;
  float:right;
}

  form.chat .myMessage,form.chat .fromThem{
    font-size:12px;
  }
  
  form.chat .message:hover .myMessage{
    transform: translateY(18px);
    -webkit-transform: translateY(18px);
  }

  form.chat .message:hover .fromThem{
    transform: translateY(18px);
    -webkit-transform: translateY(18px);
  }
  
  form.chat .myMessage date,form.chat .fromThem date {
    top: -20px;
    left:auto;
    right:0;
    font-size:12px;
  }
  
  form.chat .myMessage,
  form.chat .fromThem {
    max-width: 90%;
  }
  
@-moz-keyframes loading-bar {
  0% {
    width: 0%;
  }
  90% {
    width: 90%;
  }
  100% {
    width: 100%;
  }
}

@-webkit-keyframes loading-bar {
  0% {
    width: 0%;
  }
  90% {
    width: 90%;
  }
  100% {
    width: 100%;
  }
}

@keyframes loading-bar {
  0% {
    width: 0%;
  }
  90% {
    width: 90%;
  }
  100% {
    width: 100%;
  }
}

/* DEMO */
.iphone{
  width:300px;
  height:609px;
  background-image:url('http://www.adobewordpress.com/tasarim/images/iphone6.png');
  background-size:100% 100%;
  margin:0 auto;
  position:relative;
}

.border{
	position:absolute;
	top:12.3%;right:7%;left:7%;bottom:12%;
	overflow:hidden;
}

a.article{
  position:fixed;
  bottom:15px;left:15px;
  display:table;
  text-decoration:none;
  color:white;
  background-color:#00e34d;
  padding: 10px 20px;
  border-radius: 25px;
  font: 400 15px 'Open Sans', sans-serif;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

setTimeout(displaychat("#msg1"), 3000);
setTimeout(displaychat("#msg2"), 4200);
setTimeout(displaychat("#msg3"), 5500);
setTimeout(displaychat("#msg4"), 6600);
setTimeout(displaychat("#msg5"), 7500);
function displaychat(msgid){
	$(msgid).css("display", "block !important");
}
function scrollDown() {
  var focusBottom = document.getElementById("adobewordpress");
  focusBottom.scrollTop = focusBottom.scrollHeight;
}

$("input").keypress(function(event) {
  if (event.which == 13) {
    event.preventDefault();
    $('form.chat input[type="submit"]').click();
  }
});
$('form.chat input[type="submit"]').click(function(event) {
  event.preventDefault();
  var message = $('form.chat input[type="text"]').val();
  if ($('form.chat input[type="text"]').val()) {
    var d = new Date();
    var clock = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var currentDate =
      (('' + day).length < 2 ? '0' : '') + day + '.' +
      (('' + month).length < 2 ? '0' : '') + month + '.' +
      d.getFullYear() + '&nbsp;&nbsp;' + clock;
    $('form.chat div.messages').append('<div class="message"><div class="myMessage"><p>' + message + '</p><date>' + currentDate + '</date></div></div>');
    setTimeout(function() {
      $('form.chat > span').addClass('spinner');
    }, 100);
    setTimeout(function() {
      $('form.chat > span').removeClass('spinner');
    }, 2000);
  }
  $('form.chat input[type="text"]').val('');
  scrollDown();
});

/* DEMO */
if(parent==top) {
  $('a.article').show();
}
</script>
</body>

</html>