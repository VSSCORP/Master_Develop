 <!-- The Modal -->
<div id="galaryPopupContainer" class="modal">
  <!-- <span class="close">&times;</span> -->
  <img class="modal-content" id="img01" src="" style="height: 90%;width: auto;">
  <div id="img01caption" style="text-align: center;"></div>
</div>


<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
#galaryPopupContainer {
  display: none; /* Hidden by default */
  position: sticky; /* Stay in place */
  z-index: 200; /* Sit on top */
  padding-top: 15px; /* Location of the box */
  left: 0;
  top: 0;
  bottom: 0;
  right:0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
#galaryPopupContainer .modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#galaryPopupContainer #caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
#galaryPopupContainer .modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

#galaryPopupContainer @-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

#galaryPopupContainer @keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
#galaryPopupContainer .close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

#galaryPopupContainer .close:hover,
#galaryPopupContainer .close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

</style>

