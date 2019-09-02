<style>
#rcorners {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}
</style>
<div id="dockmaincontainer">
<div id="dock-container">
 <div id="dock">
   <ul>
      <li  id="launchpadicon"  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Menu</div></div>
        <a href="#"  ><img src="icons/menu.svg"></a>
      </li>
      <li id="galarySlide"   class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Photos</div></div>
      <!--  <span id="rcorners">Photos</span>-->
        <a href="photos.php"><img src="icons/photos.svg"></a>
      </li>
     <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Message</div></div>

        <a href="contact.php"><img src="icons/message.jpg"/></a>
     </li>
      <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Blog</div></div>
      <a href="blog.php"><img src="icons/Blog.svg"/></a>
      </li>
      <li  class="tooltipwrap">

      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Resume</div></div>
        <a href="Resume.php"><img src="icons/Resume.svg"/></a>
      </li>
       <li  class="tooltipwrap">
       <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Mail</div></div>

        <a href="mailme.php"><img src="icons/github.svg"/></a>
      </li>
        <li  class="tooltipwrap">
        <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">iTunes</div></div>

        <a href="https://musi.sh/browse" target="_blank"><img src="icons/iTunes.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Spotify</div></div>

        <a href="#" target="_blank"><img src="icons/Spotify.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Snapchat</div></div>

        <a href="images/snapcode.jpeg" target="_blank"><img src="icons/Snapchat.svg"></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Instagram</div></div>

         <a href="https://www.instagram.com/ram_katneni" target="_blank"><img src="icons/instagram.svg"/></a>
      </li>
      <li  class="tooltipwrap">
      <div class="tooltip top"><div class="tooltip-arrow" style="left: 50%;"></div><div class="tooltip-inner">Trash</div></div>

         <a href="#"><img src="icons/trashempty.ico"/></a>
      </li>
   </ul>
 </div>
</div>
</div>

<script>
//menu-button

$(document).ready(function(){
  $("#openMenuBtn").click(function(){
	  console.log("goto menu");
    launchpadclose();
	  $(".menu-button").click();
  });
});
</script>
