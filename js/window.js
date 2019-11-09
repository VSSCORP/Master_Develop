var gw;
try{
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
			try{
			var win = $(this);
			var parr = win.parent().parent().parent().parent().parent();
			minWin(parr);
			setInterval(function(){
				win.parent().parent().parent().parent().parent().remove();	
			}, 1000);
		}catch(err){
			console.log(err.message);
	}
		});
		$("#"+currPage+" .minimizebutton").on("click", function () {
			try{
			var win = $(this);
			var parr = win.parent().parent().parent().parent().parent();
			minWin(parr);
		}catch(err){
			console.log(err.message);
	}
		});

		$("#"+currPage).on("click", function () {
		  selectWindow($(this));
		});
		minWin($("#"+currPage));
	}
}catch(err){
	console.log(err.message);
}
	function resizeWin(win){
		try{
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
	}catch(err){
		console.log(err.message);
}
	}
	function minWin(win){
try{
		console.log(win);

		if(win.find("#ismin").val()=='0'){
    		win.addClass('minwindow');
    		win.find("#ismin").val('1');	
    	}else{
    		win.removeClass('minwindow');
    		win.find("#ismin").val(0);
    		selectWindow(win);
    	}
	}catch(err){
		console.log(err.message);
}
	}
  	function selectWindow(w) {
try{
		var id = w.attr("id");
	  $(".window:not(#" + id + ")").css("z-index", "2");
	  w.css("z-index", "10");
	  hideMenu();
	}catch(err){
		console.log(err.message);
}
	}

//});