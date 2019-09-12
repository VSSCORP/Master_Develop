<!-- <button class="menu-button"><span>Menu</span></button> -->

 <style type="text/css">
    
 .minwindow {
  bottom: 0px !important;
  -webkit-transform: translate(0%, 0px);
          transform: translate(0%, 0px);
  width: 200px !important;
  height:30px  !important;
  position:fixed !important;
  overflow:hidden !important;
  opacity: 0;
}
body{
	background: url(https://harnerdesigns.com/wp-content/uploads/2018/05/universe-wallpaper.jpg) center center/cover fixed no-repeat;
}
  </style>

<script type="text/javascript">
	var currPage;
	function selectWindow(w) {
	  var id = w.attr("id");
	  $(".window:not(#" + id + ")").css("z-index", "2");
	  w.css("z-index", "10");
	  hideMenu();
	}
	function loadWindow(page){	
			if(page=="photosfiles"){
				$("#doggerpopup").css("display","none");
			}
			if(document.getElementById(page)){
				minWin($("#"+page));
			}else{
				currPage = page;
				var height = $( document ).height();	
				console.log(height);
				height = height-31-18;
            	$("#pages-stack").append('<div class="window page ui-draggable" id="'+page+'" style="height:'+height+'px"></div>');
               $("#"+page).load("page/"+page+".php");
               selectWindow($("#"+page));
			}
			hideMenu();
	}

function hideMenu(){
	$(".visible").removeClass("visible");
			$(".selected").removeClass("selected");
			claseMenu();
}
//menu-button

$(document).ready(function(){
  $("#openMenuBtn").click(function(){
	  console.log("goto menu");
    //launchpadclose();
	  //$(".menu-button").click();
  });
});
</script>
