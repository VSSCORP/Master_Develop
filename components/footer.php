<!-- <button class="menu-button"><span>Menu</span></button> -->

 <style type="text/css">
  .page{
  	-webkit-transition: all 0.5s;
  }
 .minwindow {  
 	-webkit-transition: all 0.5s;
  transform:  translate3d(0px, 100%, 100px) scale(0.1,0.1);
  opacity:0;
}
body{
	background: url(img/background.jpg) center center/cover fixed no-repeat;
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
            	$("#pages-stack").append('<div class="window page ui-draggable minwindow" id="'+page+'" style="height:'+height+'px"></div>');
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
function loadHome(){
	loadWindow('home');
}
$(document).ready(function(){
	//setTimeout(loadHome, 2000);
  $("#openMenuBtn").click(function(){
	  console.log("goto menu");
    //launchpadclose();
	  //$(".menu-button").click();
  });
});
</script>
