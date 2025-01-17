
 <?php include 'gallerybuffer.php';?>
	<!-- page_Photos 
		<div class="window page" id="page-photos" style = "overflow: auto;">-->
     <?php $windowTitle="Photos" ?>
    <?php include '../components/windowheader.php';?>
      <div class="contentArea">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Photos</h1>
			</header> 
			 <div class="">
			 <div class="content content--photography content--current" id="content-photography">
				<aside class="category">
					<button class="backbutton"><svg class="icon icon--arrow"><use xlink:href="#icon-arrow"></use></svg></button>
					
				</aside>
				<div class="grid">
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/7.JPG);"></div>
						</div>
						<span class="grid__item-year">2018</span>
						<h3 class="grid__item-title"><strong>Look at me</strong> An exploration of the mind</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/8.JPG);"></div>
						</div>
						<span class="grid__item-year">2017</span>
						<h3 class="grid__item-title"><strong>Versatile</strong> Introspection and psyche</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/10.JPG);"></div>
						</div>
						<span class="grid__item-year">2017</span>
						<h3 class="grid__item-title"><strong>Profile</strong> Faces and stories</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/11.JPG);"></div>
						</div>
						<span class="grid__item-year">2016</span>
						<h3 class="grid__item-title"><strong>Somewhere</strong> Finding inspiration in the rare places</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/12.JPG);"></div>
						</div>
						<span class="grid__item-year">2016</span>
						<h3 class="grid__item-title"><strong>The Set</strong> Model works</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/14.JPG);"></div>
						</div>
						<span class="grid__item-year">2015</span>
						<h3 class="grid__item-title"><strong>Stories</strong> Important milestones for humanity</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/15.JPG);"></div>
						</div>
						<span class="grid__item-year">2015</span>
						<h3 class="grid__item-title"><strong>The Past</strong> Culture trip</h3>
					</a>
					<a class="grid__item">
						<div class="grid__item-wrap">
							<div class="grid__item-img" style="background-image: url(images/16.JPG);"></div>
						</div>
						<span class="grid__item-year">2014</span>
						<h3 class="grid__item-title"><strong>Happiness</strong> The world of Candy</h3>
					</a>
				</div><!-- /grid -->
			</div><!-- /content--works -->
		
    </div>
</div>
<!--</div>
 page_Photos -->
 <link rel="stylesheet" type="text/css" href="css/base.css" />
<link href="css/photos/photos.css" rel="stylesheet">
			<style>
			.js .grid__item-wrap,.js .grid__item-year,.js .grid__item-title {
				opacity: 1;
			}
		</style>
 <script src="js/window.js"></script>
 <script>
	$(document).ready(function(){
	$(".grid__item-img").click(function(){
		var imgpath =this.style.backgroundImage.replace('url("',"").replace('")',""); 
		console.log(imgpath);
		$("#img01").attr('src',imgpath);
		//grid__item-title
		$("#galaryPopupContainer").show();
		var imgcaption = this.parentElement.nextElementSibling.nextElementSibling.innerText;
		$("#img01caption").text(imgcaption);
	});
	$("#galaryPopupContainer").click(function(){
		$("#galaryPopupContainer").hide();
	});
});


</script>