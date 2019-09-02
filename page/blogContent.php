
    <style>
    .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.col-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}


.col-xl-6 {
    
}
@media screen and (min-width: 1200px){
.col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
    padding:0px;
}
}

.blog-page .blog-content .entry-content {
    padding: 25px;
}

@media screen and (min-width: 768px){
.no-padding {
    padding: 0;
}
.blog-page .blog-content .entry-content {
    padding: 35px 40px;
}
}
.blog-page .blog-content {
    transition: all .35s;
    background: #000;
    height:100%;
}
.flex {
    display: flex;
}
.blog-page .blog-content figure {
    margin: 0;
    overflow: hidden;
}

.blog-page .blog-content figure, .blog-page .blog-content .entry-content {
    width: 50%;
}

.blog-page .blog-content figure img {
    display: block;
    width: 100%;
    height: auto;
}

img {
    vertical-align: baseline;
}
img {
    vertical-align: middle;
    border-style: none;
}

.blog-page .blog-content:hover {
    background: #f0437e;
}

.blog-page .blog-content .entry-content h3 {
    position: relative;
     color: white; 
}
.h3, h3 {
    font-size: 1.75rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: .5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    /*color: inherit;*/
}
h1, h2, h3, h4, h5, h6 {
    margin-top: 0;
    margin-bottom: .5rem;
}
.blog-page .blog-content:hover .entry-content h3 a, .blog-page .blog-content:hover .posted-by, .blog-page .blog-content:hover .posted-on, .blog-page .blog-content:hover footer li a {
    color: #fff;
}
@media screen and (min-width: 576px){
.blog-page .blog-content .entry-content h3 a {
    font-size: 1.5rem;
}
}
.blog-page .blog-content .entry-content h3 a {
    color: #ffffff;
    font-size: 1.125rem;
    font-weight: 500;
    }

    .blog-page .blog-content .posted-by {
    margin-top: 10px;
    color: #cac7c7;
    font-size: 0.875rem;
}

.flex {
    display: flex;
}
.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}
.flex-wrap {
    -ms-flex-wrap: wrap!important;
    flex-wrap: wrap!important;
}
.blog-page .blog-content header {
    width: 100%;
}
article, aside, dialog, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}

.blog-page {
    padding-top: 15px;
    font-family: 'Poppins', sans-serif;
}

.blog-page .blog-content .posted-on {
    position: relative;
    margin-right: 20px;
    color: #bfbfbf;
    font-size: 0.875rem;
}
.blog-page .blog-content footer ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

.blog-page .blog-content footer li {
    padding: 0 3px;
    font-size: 0.875rem;
    }
    
    
.blog-page .blog-content .entry-content h3::before {
    content: '';
    position: absolute;
    top: 7px;
    left: -35px;
    z-index: 99;
    width: 20px;
    height: 20px;
    transform: rotate(45deg);
    background: #fff;
}


.blog-page .blog-content footer li a {
    color: #f0437e;
}

a:hover, a:active {
    outline: 0;
    list-style: none;
}
a:hover, a:focus, a:active {
    /*color: midnightblue;*/
}

a:hover {
   /* color: #0056b3;
    text-decoration: underline; */
}

a {
    /*color: #007bff;*/
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
a {
   /* color: royalblue;*/
}


@media screen and (min-width: 768px){
.blog-page .blog-content .entry-content {
    padding: 35px 40px;
}
}
.blog-page .blog-content .entry-content {
    padding: 25px;
}
.blog-page .blog-content figure, .blog-page .blog-content .entry-content {
    width: 50%;
}
.flex {
    display: flex;
}
.align-items-start {
    -ms-flex-align: start!important;
    align-items: flex-start!important;
}
.justify-content-between {
    -ms-flex-pack: justify!important;
    justify-content: space-between!important;
}
.flex-column {
    -ms-flex-direction: column!important;
    flex-direction: column!important;
}
*, ::after, ::before {
    box-sizing: border-box;
}
div {
    display: block;
}

.fixedheader{
    position: fixed;
    width: 100%;
    z-index: 100;

}

</style>

<div class="outer-container blog-page">
    <div class="container-fluid">
        <div class="row" id="myUL">
            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex">
                    <figure>
                        <a href="#"><img src="images/blog/Butterfly.jpeg" alt="car"></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="blog/single-standard.php"  class="searchStr">The inside spring!</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 20, 2018</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#0">Mind,</a></li>
                                <li><a href="#0">Thinking</a></li>
                            </ul>
                            
                        </footer>
                    </div>
                </div>
            </span>

            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex">
                    <figure>
                        <a href="#"><img src="images/blog/bubble.jpeg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="blog/single-fairytale.html" class="searchStr">Not a fairy-tale, but a story</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 25, 2018</div> 

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#0">self,</a></li>
                                <li><a href="#0">mindset</a></li>
                            </ul>
                          
                        </footer>
                    </div>
                </div>
            </span>

            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex flex-xl-row-reverse">
                    <figure>
                    <a href="#"><img src="images/blog/horse.jpeg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="blog/single-unrequited.html" class="searchStr">Unrequited</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">January 15, 2019</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#">life,</a></li>
                                <li><a href="#">lesson</a></li>
                            </ul>
                        </footer>
                     </div>
                </div>
            </span>

            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex flex-row-reverse">
                    <figure>
                    <a href="#"><img src="images/blog/purple.jpeg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="#" class="searchStr">Hide Related Portfolio Heading</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 20, 2018</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#">Portfolio,</a></li>
                                <li><a href="#">Tree</a></li>
                            </ul>
                        </footer>
                     </div>
                </div>
            </span>

            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex">
                    <figure>
                    <a href="#"><img src="images/blog/snow_fall.jpeg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="#"  class="searchStr">The farm girl I met.</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 20, 2018</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#">Portfolio,</a></li>
                                <li><a href="#">Tree</a></li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </span>

            <span class="col-12 col-xl-6 no-padding">
                <div class="blog-content flex">
                    <figure>
                    <a href="#"><img src="images/blog/water_car.jpeg" alt=""></a>
                    </figure>

                    <div class="entry-content flex flex-column justify-content-between align-items-start">
                        <header>
                            <h3><a href="#" class="searchStr">Portfolio Single Post Builder</a></h3>

                            <div class="posted-by">Ram Katneni</div>
                        </header>

                        <footer class="flex flex-wrap align-items-center">
                            <div class="posted-on">December 20, 2018</div>

                            <ul class="flex flex-wrap align-items-center">
                                <li><a href="#">Portfolio,</a></li>
                                <li><a href="#">Tree</a></li>
                            </ul>
                        </footer>
                    </div>
                </div>
            </span>
        </div>
    </div>
</div>
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("span");
    for (i = 0; i < li.length; i++) {
        try{
        a = li[i].getElementsByClassName("searchStr")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
        }catch(err){
            console.log(err.message);
        }
    }
}
</script>