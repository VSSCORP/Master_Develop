	<!-- page_Contact -->
		<div class="window page" id="page-contact">
      <?php $windowTitle="Contact" ?>
    <?php include 'windowheader.php';?>
      <div class="contentArea">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Contact</h1>
			</header>
      <div style="display:none">
        <!-- <form name="uploadform1" id="uploadform1" action="api/fileupload.php"  method="post"  enctype="multipart/form-data">
    <input type="file" name="fileToUpload" onchange="uploadfile()" id="fileToUpload">
  </form> -->
        <form action="api/fileupload.php" name="uploadform1" id="uploadform1" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload"  onchange="uploadfile()"/>
            <input type="submit" value="Upload Image" name="submit" name="submitbtn" id="submitbtn" />
        </form>
</div>
	<div class="Framer upload-area">
  <div class="border">
    <form class="chat" id="tform">
      <span></span>
      <div class="messages" id="adobewordpress">
        <div class="message hide" id="msg2">
          <div class="fromThem">
            <p>Hello!</p>
            <date id="dateval"></date>
          </div>
        </div>
        <div class="message hide" id="msg5">
          <div class="fromThem">
            <p>Thanks for visiting my website.</p>
            <date id="dateval"></date>
          </div>
        </div>
		<div class="message hide" id="msg6">
          <div class="fromThem">
            <p>If you wanna say something put your name and email.</p>
            <date id="dateval"></date>
          </div>
        </div>

	<div class="message hide" id="buffermsg">
  <div class="bubble" >
		<div class="bubble__circle"></div>
		<div class="bubble__circle"></div>
		<div class="bubble__circle"></div>
	  </div>
	</div>
	<div class="message hide">
	  <div class="myMessage msgbuble">
		<div class="bubble__circle"></div>
		<div class="bubble__circle"></div>
		<div class="bubble__circle"></div>
	  </div>
	</div>
      </div>
	  <i class="fa fa-camera"  onclick="uploadform()" style="
	    font-size: 35px;
	    vertical-align: middle;
	    color: #3d6ad4;
	    margin: 5px;
		float:left;
	    " aria-hidden="true"></i>
			<input type="text" placeholder="Message" style="border-radius: 5em;"/>
	      <i class="fa fa-arrow-circle-up"  onclick="submitform()" style="
	    font-size: 35px;
	    vertical-align: middle;
	    color: #3d6ad4;
	    margin-left: -40px;
	    margin-top: 4px;
	    " aria-hidden="true"></i>
		
    </form>
  </div>
</div>

<style>
.msgbuble{
	position:relative;
	display:flex;
	padding:8px !important;
}
.msgbuble .bubble__circle{
	margin:1px;
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
  background-color: #358cf6;
  transition: width 0.2s;
  position:absolute;
  top:0; left:0; right:0;
  z-index:4
}

form.chat .messages{
  display:block;
  overflow-x: hidden;
  overflow-y: auto;
  position:relative;
  height:90%;
  width:100%;
  padding:2% 3%;

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
  background: #358cf6;
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
  border-right: 20px solid #358cf6;
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
  background: #131010;
  border-bottom-left-radius: 10px;
  -webkit-transform: translate(-30px, -2px);
  transform: translate(-30px, -2px);
}

form.chat .fromThem {
	background: #56565a;
  color: white;
  float: left;
  clear:both;
  border-bottom-left-radius: 30px 0px\9;
}
form.chat .fromThem:before {
  content: "";
  position: absolute;

  bottom: -2px;
  left: -7px;
  height: 19px;
  border-left: 20px solid #56565a;
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
  background: #131010;
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
  font: 400 15px 'Open Sans', sans-serif;
  padding:0 15px;
  height: 6%;
  outline:0;
}

form.chat input[type='text']{
  width:90%;
  float:left;
}

form.chat input[type='submit']{
  width:10%;
  color:#358cf6;
  font-weight:700;
  float:right;
}

  form.chat .myMessage,form.chat .fromThem{
    font-size: 19px;
  }

  form.chat .message:hover .myMessage{
    transform: translateY(-18px);
    -webkit-transform: translateY(-18px);
  }

  form.chat .message:hover .fromThem{
    transform: translateY(-18px);
    -webkit-transform: translateY(-18px);
  }

  form.chat .myMessage date,form.chat .fromThem date {
    top: 47px;
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

.Framer{
	height:100%;
  min-height:700px;
  background-size:100% 100%;
  margin:0 auto;
  position:relative;
}

.border{
	position:absolute;
	top:1%;right:7%;left:7%;bottom:7%;
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
@-webkit-keyframes fade_in_out {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.25;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fade_in_out {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0.25;
  }
  100% {
    opacity: 1;
  }
}
.bubble {
  display: flex;
    position: relative;
    width: 66px;
    /* height: 75px; */
    align-items: center;
    justify-content: space-around;
    border-radius: 75px;
    background-color: #ddd;
    padding: 10px 0px;
  float: left;
    clear: both;
}
.bubble::before, .bubble::after {
  position: absolute;
  content: '';
  background: #ddd;
  border-radius: 100%;
}
.bubble::before {
  bottom: 0;
    left: -5px;
    width: 16px;
    height: 16px;
}
.bubble::after {
  bottom: -5px;
    left: -12px;
    width: 8px;
    height: 8px;
}

.bubble__circle {
  width:11px;
  height:11px;
  border-radius: 100%;
  background-color: #bbb;
  -webkit-animation: fade_in_out 1.5s infinite;
          animation: fade_in_out 1.5s infinite;
  -webkit-animation-delay: 0.25s;
          animation-delay: 0.25s;
}
.bubble__circle:first-of-type {
  margin-left:11px;
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
}
.bubble__circle:last-of-type {
  margin-right:11px;
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}

.wrapper {
  display: flex;
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background-color: #fbfcf7;
}

.message.hide *{
	display:none;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

function getCurrDate(){
	var d = new Date();
	var clock = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	var month = d.getMonth() + 1;
	var day = d.getDate();
	var currentDate =
	  (('' + month).length < 2 ? '0' : '') + month + '/' +
	  (('' + day).length < 2 ? '0' : '') + day + '/' +
	  d.getFullYear() + '  ' + clock;
	return currentDate;
 }

function mysleep(id,sec,flag){
	setTimeout(function(){
	if(flag){
		setTimeout(function(){
		$("#buffermsg").removeClass("hide");
		}, 700);
	}else{
		$("#buffermsg").addClass("hide");
	}
	if(id != ""){
		$("#"+id+" #dateval").text(getCurrDate());
		$("#"+id).removeClass("hide");
	}
	}, sec*1000);
}

  mysleep("msg2",1,false);
   mysleep("",1.5,true);
 	 mysleep("msg5",4,false);
	 mysleep("",4.5,true);
 	 mysleep("msg6",8,false);



function mailme(msg){
	//http://ram.udesign.online/mail.php
	 $.post('mail.php', { message: msg},
    function(returnedData){
         console.log(returnedData);
});

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
function uploadform(){
	$("#fileToUpload").click();
}
function uploadfile(){
	$("#submitbtn").click();

}
var fileName;
// this is the id of the form
$("#uploadform1").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.
    console.log("Form submit stoped");
    var form = $(this)[0];
     fileName = form.elements[0].files[0].name;
    // Create an FormData object 
    var data = new FormData(form);
    $.ajax({
           type: "POST",
           enctype: 'multipart/form-data',
           url: 'api/fileupload.php',
          // data: form.serialize(), // serializes the form's elements.
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
                addImageToChat();
                $("#result").text(data);
                console.log("SUCCESS : ", data);
                $("#btnSubmit").prop("disabled", false);

            },
            error: function (e) {

                $("#result").text(e.responseText);
                console.log("ERROR : ", e);
                $("#btnSubmit").prop("disabled", false);

            }
         });
});
function addImageToChat(){
    var d = new Date();
    var clock = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var currentDate =
      (('' + month).length < 2 ? '0' : '') + month + '/' +
      (('' + day).length < 2 ? '0' : '') + day + '/' +
      d.getFullYear() + '&nbsp;&nbsp;' + clock;
    $('form.chat div.messages').append('<div class="message"><div class="myMessage"><div><img src="uploads/' + fileName + '" style="width:100px;height:100px;"></div><div style="position:relative;"><date style="top:15px;">' + currentDate + '</date></div></div></div>');
    setTimeout(function() {
      $('form.chat > span').addClass('spinner');
    }, 100);
    setTimeout(function() {
      $('form.chat > span').removeClass('spinner');
    }, 2000);
    scrollDown();
}
function submitform(){
  var message = $('form.chat input[type="text"]').val();
  if ($('form.chat input[type="text"]').val()) {
    var d = new Date();
    var clock = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    var month = d.getMonth() + 1;
    var day = d.getDate();
    var currentDate =
      (('' + month).length < 2 ? '0' : '') + month + '/' +
      (('' + day).length < 2 ? '0' : '') + day + '/' +
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
  mailme(message);
}



    // preventing page from redirecting
    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
        $("#dragtxt").text("Drag here");
    });

    $("html").on("drop", function(e) { e.preventDefault(); e.stopPropagation(); });

    // Drag enter
    $('.upload-area').on('dragenter', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    // Drag over
    $('.upload-area').on('dragover', function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    // Drop
    $('.upload-area').on('drop', function (e) {
        e.stopPropagation();
        e.preventDefault();
        var file = e.originalEvent.dataTransfer.files;
        console.log(file);
        var x =$('#fileToUpload')
        x[0].files = file;
        uploadfile();
    });

if(parent==top) {
  $('a.article').show();
}
</script>
			</div>
		</div>
	<!-- page_Contact -->
