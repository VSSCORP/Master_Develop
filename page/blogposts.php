<!-- page_Blog -->

  <style>
  

form * {
  outline: none;
}

input[type="search"] {
  box-sizing: border-box;
  width: 200px;
  
  height: 25px;
  border-radius: 4px;
  border: none;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.25);
  padding-left: 85px;
  font-size: 16px;
  transition: padding 0.25s ease, box-shadow 0.25s ease;
}

label[for="search"] {
  margin-left: -140px;
  font-size: 0;
  transition: margin 0.25s ease;
}
label[for="search"]::before {
  font-family: 'FontAwesome';
  font-size: 16px;
  color: #999;
  content: '\f002';
}

input[type="reset"] {
  position: absolute;
  background: transparent;
  border: none;
  font-size: 16px;
  font-weight: bold;
  color: #999;
  left: 185px;
  top: 11px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.25s ease;
}

/* 
 * the submit button only exists for compatibility 
 * reasons, so we'll hide it.
 */
input[type="submit"] {
  display: none;
}

input[type="search"]:focus, input[type="text"]:valid {
  padding-left: 25px;
  box-shadow: 0px 0px 0px 3px #69f;
}
input[type="search"]:focus ~ label[for="search"], input[type="text"]:valid ~ label[for="search"] {
  margin-left: -200px;
}
input[type="search"]:focus ~ input[type="reset"], input[type="text"]:valid ~ input[type="reset"] {
  opacity: 1;
  pointer-events: auto;
}

.searchlab{
  position: absolute;
    margin-top: -20px;
    margin-left: 5px !important;
}

/* since the field is required, this selector will
 * only hit if the field is not empty. 
 * credit to @designcouch for suggesting this. */

    </style>
    
		<div class="window page" id="page-blog">
      <?php $windowTitle="Blog" ?>
    <?php include 'windowheader.php';?>
      <div class="contentArea">
			<header class="bp-header cf">
				<h1 class="bp-header__title">Blog</h1>
			  <form action="javascript:void(0)">
          <div style="float:right">
  <input type="search" placeholder="Search" id="search" onkeyup="myFunction()" required="required"/>
  <label for="search" class="searchlab">Search</label>
  <!-- <input type="reset" id="cancel" value="X"/> -->
  <input type="submit" id="submit"/>
</div>
</form>
				<p class="info">

<?php include 'blogContent.php';?>
					
				</p>
			</header>
			
		</div>
</div>

<!-- /page_Blog -->