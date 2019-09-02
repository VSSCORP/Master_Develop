
<div id="buffercover">
<svg width="500" height="500" viewBox="0 0 500 500" xmlns:xlink="http://www.w3.org/1999/xlink" id="photos">
  <defs>
    <filter id="drop-shadow" x="-20%" y="-20%" width="140%" height="140%">
      <feGaussianBlur in="SourceAlpha" result="blur-out" stdDeviation="10" />
      <feOffset in="blur-out" result="the-shadow" dx="0" dy="8"/>
      <feColorMatrix in="the-shadow" result="color-out" type="matrix"
        values="0 0 0 0   0
                0 0 0 0   0
                0 0 0 0   0
                0 0 0 .1 0"/>
      <feBlend in="SourceGraphic" in2="color-out" mode="normal"/>
    </filter>
    <linearGradient id="orangeGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(248, 156, 55);"></stop>
       <stop offset="100%" style="stop-color:rgb(255, 228, 26);"></stop>
    </linearGradient>
    <linearGradient id="yellowGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(253, 229, 30);"></stop>
       <stop offset="100%" style="stop-color:rgb(200, 220, 68);"></stop>
    </linearGradient>
    <linearGradient id="greenGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(199, 219, 67);"></stop>
       <stop offset="100%" style="stop-color:rgb(104, 195, 128);"></stop>
    </linearGradient>
    <linearGradient id="greenBlueGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(106, 195, 133);"></stop>
       <stop offset="100%" style="stop-color:rgb(104, 184, 230);"></stop>
    </linearGradient>
    <linearGradient id="blueGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(104, 182, 226);"></stop>
       <stop offset="100%" style="stop-color:rgb(148, 143, 197);"></stop>
    </linearGradient>
    <linearGradient id="violetGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(151, 142, 196);"></stop>
       <stop offset="100%" style="stop-color:rgb(205, 140, 189);"></stop>
    </linearGradient>
    <linearGradient id="pinkGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(205, 140, 189);"></stop>
       <stop offset="100%" style="stop-color:rgb(241, 94, 108);"></stop>
    </linearGradient>
    <linearGradient id="redGrad" x1="0%" y1="0%" x2="0%" y2="100%">
       <stop offset="0%" style="stop-color:rgb(243, 112, 111);"></stop>
       <stop offset="100%" style="stop-color:rgb(247, 149, 64);"></stop>
    </linearGradient>
  </defs>
  <circle cx="250" cy="250" r="188" filter="url(#drop-shadow)"></circle>
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="orange"    fill="url(#orangeGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="yellow"    fill="url(#yellowGrad)"/>
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="green"     fill="url(#greenGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="greenblue" fill="url(#greenBlueGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="blue"      fill="url(#blueGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="violet"    fill="url(#violetGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="pink"      fill="url(#pinkGrad)" />
  <path d="M250,238L250,238c-27.6,0-50-22.4-50-50v-46c0-27.6,22.4-50,50-50h0c27.6,0,50,22.4,50,50v46 C300,215.6,277.6,238,250,238z" id="red"       fill="url(#redGrad)" />
</svg>
</div>
<style>
  #buffercover {
  padding: 0;
  margin: 0;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #565656;

    opacity: 0.6;
}
svg {
  width: 192px;
  height: 192px;
}
path {
  mix-blend-mode: multiply;
  opacity: 0;
  transition: all 800ms ease-in;
  -webkit-transform-origin: 250px 250px;
          transform-origin: 250px 250px;
}
.show path {
  opacity: 1;
  transition-timing-function: ease-in-out;
}

#orange     { transition-duration: 450ms; }
#yellow     { transition-duration: 500ms; }
#green      { transition-duration: 550ms; }
#greenblue  { transition-duration: 600ms; }
#blue       { transition-duration: 650ms; }
#violet     { transition-duration: 700ms; }
#pink       { transition-duration: 750ms; }
#red        { transition-duration: 800ms; }

.show #orange     { -webkit-transform: rotate(0); transform: rotate(0);       transition-delay: 350ms;}
.show #yellow     { -webkit-transform: rotate(45deg); transform: rotate(45deg);   transition-delay: 300ms;}
.show #green      { -webkit-transform: rotate(90deg); transform: rotate(90deg);   transition-delay: 250ms;}
.show #greenblue  { -webkit-transform: rotate(135deg); transform: rotate(135deg);  transition-delay: 200ms;}
.show #blue       { -webkit-transform: rotate(180deg); transform: rotate(180deg);  transition-delay: 150ms;}
.show #violet     { -webkit-transform: rotate(225deg); transform: rotate(225deg);  transition-delay: 100ms;}
.show #pink       { -webkit-transform: rotate(270deg); transform: rotate(270deg);  transition-delay:  50ms;}
.show #red        { -webkit-transform: rotate(315deg); transform: rotate(315deg);  transition-delay:   0ms;}

circle {
  fill: white;
  opacity: 0;
  -webkit-transform-origin: 250px 250px;
          transform-origin: 250px 250px;
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
  transition: all 200ms ease;
  transition-delay: 650ms;
}
.show circle {
  opacity: 1;
  transition-delay: 0;
  -webkit-transform: scale(1);
          transform: scale(1);
}
</style>

<script>
var photos = document.getElementById('photos');

var myVar = setInterval(function() {
  photos.classList.toggle('show');
}, 1000);
setTimeout(function(){clearInterval(myVar);$("#buffercover").fadeOut();}, 5000);

</script>
