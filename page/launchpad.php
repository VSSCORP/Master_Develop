<div id="launchpad" class="">
<div class="content">
<nav class="">
<a class="icon-safari">Safari</a>
<a class="icon-notes">Notes</a>
<a class="icon-facetime">Facetime</a>
<a class="icon-appstore">App store</a>
<a class="icon-dictionary">Dictionary</a>
<a class="icon-texteditor">Text Editor</a>
<a class="icon-monitor">Activity Monitor</a>
<a class="icon-airport">AirPort Utility</a>
<a class="icon-chromium">Chromium</a>
<a class="icon-opera">Opera</a>
<a class="icon-skydrive">Skydrive</a>


<a class="icon-twitter">Twitter</a>
<a class="icon-pinterest">Pinterest</a>
<a class="icon-imovie">iMovie</a>
</nav>
</div>
</div>

<script>

  var launchpad = $("#launchpad");
  var launchpadopen = function () {
    launchpad.addClass("shown start");
    launchpad.find("nav").addClass("scale-down");
  };
  var launchpadclose = function () {
    launchpad.
    removeClass("start").
    addClass("end");
    launchpad.find("nav").
    removeClass("scale-down").
    addClass("scale-up");
    setTimeout(function () {
      launchpad.removeClass("shown end");
      launchpad.find("nav").removeClass("scale-up");
    }, 350);
  };

  // Open the launchpad
  $("#launchpadicon").on("click", launchpadopen);
  $(".menu-button").on("click",launchpadclose);

  // Close the launchpad when the content is clicked, only if the  target is not a link
  $(document).mouseup(function (e) {
    var content = launchpad.find(".content"),
    nav = content.find("nav");

    if (content.is(e.target) || nav.is(e.target)) {
      launchpadclose();
    }
  });
      //# sourceURL=pen.js
    </script>

<style>
    .yosemite-background {
  background: url(http://media.idownloadblog.com/wp-content/uploads/2014/08/Yosemite-5-wallpaper-thumbnail.png) no-repeat center center fixed;
  background-size: cover;
}

a {
  cursor: pointer;
}
#launchpad {
  display: none;
}
#launchpad.shown {
  display: block;
}
#launchpad.shown.start {
  -webkit-animation: show 0.4s 1;
          animation: show 0.4s 1;
}
#launchpad.shown.end {
  -webkit-animation: hide 0.4s 1;
          animation: hide 0.4s 1;
}
#launchpad.shown .content {
  background: #310505;
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
    margin: 0px;
    padding: 0px;
}
#launchpad.shown .content:before {
  background: url(http://media.idownloadblog.com/wp-content/uploads/2014/08/Yosemite-5-wallpaper-thumbnail.png) no-repeat center center fixed;
  background-size: cover;
  bottom: 0;
  content: '';
  -webkit-filter: blur(30px);
          filter: blur(30px);
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}
#launchpad.shown .content nav {
  margin: 20px auto;
  width: 90%;
}
#launchpad.shown .content nav a {
  color: white;
  -webkit-filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.4));
          filter: drop-shadow(0 1px 3px rgba(0, 0, 0, 0.4));
  font-size: 14px;
  text-align: center;
  text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.5);
}
#launchpad.shown .content nav a:active {
  opacity: 0.6;
}
#launchpad.shown .content nav.scale-down {
  -webkit-animation: scale-down 0.4s 1;
          animation: scale-down 0.4s 1;
}
#launchpad.shown .content nav.scale-up {
  -webkit-animation: scale-up 0.4s 1;
          animation: scale-up 0.4s 1;
}

@-webkit-keyframes show {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes show {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes hide {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes hide {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes scale-up {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@keyframes scale-up {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  100% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
}
@-webkit-keyframes scale-down {
  0% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes scale-down {
  0% {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
a[class^="icon"] {
  background-position: top;
  background-repeat: no-repeat;
  display: inline-block;
  height: 128px;
  padding: 128px 0 0 0;
  margin: 40px;
  width: 128px;
}
.launchpad-icon {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/Launcher.png);
  background-position: top;
  background-repeat: no-repeat;
  display: block;
  height: 128px;
  margin: 15px auto;
  width: 128px;
}
.icon-facetime {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/facetime.png);
}
.icon-skydrive {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/skydrive.png);
}
.icon-dropbox {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/dropbox.png);
}
.icon-soundcloud {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/soundcloud.png);
}
.icon-chromium {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/Chromium.png);
}
.icon-safari {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/istatmenu.png);
}
.icon-opera {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/opera.png);
}
.icon-appstore {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/Appstore.png);
}
.icon-airport {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/AirPortUtility.png);
}
.icon-pinterest {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/Pinterest.png);
}
.icon-twitter {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/twitter.png);
}
.icon-dictionary {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/dictionary.png);
}
.icon-notes {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/notes.png);
}
.icon-monitor {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/NetworkMonitor.png);
}
.icon-imovie {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/imovie.png);
}
.icon-texteditor {
  background: url(https://cdn2.iconfinder.com/data/icons/minimalism/128/tTextEditor.png);
}
#icons {
  bottom: 10px;
  color: #9E9E9E;
  left: 10px;
  position: absolute;
}
#icons a {
  color: #BADA55;
  text-decoration: none;
}

  </style>
