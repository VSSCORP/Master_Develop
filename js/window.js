var gw;
//$(document).ready(function(){
	if(currPage){
		$("#"+currPage).draggable({ handle: ".ui-draggable-handle" });

		$("#"+currPage+" .ui-draggable-handle").dblclick(function(){
			var win = $(this);
			resizeWin(win.parent());
	  	});

		$("#"+currPage+" .zoombutton").on("click", function () {
		  var win = $(this);
			resizeWin(win.parent().parent().parent().parent().parent());
		});

		$(".closebutton").on("click", function () {
			var win = $(this);
			var parr = win.parent().parent().parent().parent().parent();
			minWin(parr);
			setInterval(function(){
				win.parent().parent().parent().parent().parent().remove();	
			}, 1000);
		});
		$("#"+currPage+" .minimizebutton").on("click", function () {
			var win = $(this);
			var parr = win.parent().parent().parent().parent().parent();
			minWin(parr);
		});

		$("#"+currPage).on("click", function () {
		  selectWindow($(this));
		});
		minWin($("#"+currPage));
	}
	function resizeWin(win){
		var wid = win.width();
		var hei = win.height();
    	if(win.find("#ismax").val()=='1'){
    		win.width(wid/2);
    		win.height(hei/2);
    		win.find("#ismax").val(0);	
    	}else{
    		win.width(wid*2);
    		win.height(hei*2);
    		win.find("#ismax").val(1);
    	}
	}
	function minWin(win){
		console.log(win);

		if(win.find("#ismin").val()=='0'){
    		win.addClass('minwindow');
    		win.find("#ismin").val('1');	
    	}else{
    		win.removeClass('minwindow');
    		win.find("#ismin").val(0);
    		selectWindow(win);
    	}
	}
  	function selectWindow(w) {
	  var id = w.attr("id");
	  $(".window:not(#" + id + ")").css("z-index", "2");
	  w.css("z-index", "10");
	  hideMenu();
	}

//});