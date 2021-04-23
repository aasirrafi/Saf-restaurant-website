


   <section  >
  <div class="header new  " >

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container btn_1">
          <a  class="navbar-brand new-btn" href="#"><span >Saf Restaurant</span></a>
      <button class="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto  " >
          <li class="nav-item  ">
            <a class="nav-link " href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about-section">About</a>
          </li>
          
            <li class="nav-item">
              <a class="nav-link" href="#blog-section">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu-section">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#reserv-section">Reservation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-section">Contact Us</a>
            </li>
           
  
        </ul>
       
      </div>
      </div>
      
 
    </nav>
  </div>
  
  </section>


<!-- slider -->
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner " role="listbox">
    <!-- slider 1 -->
      <div class="carousel-item  active">
        <img class="d-block w-100" src="img/testimonial-bg.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1>SAF RESTAURANT</h1>
          <h3>Our mission is to provide an unforgettable experience</h3><br>
          <a href="#chefs-section">Meet Our Chefs</a>
                
               
             </div>
      </div>

      <!-- slider 2 -->
      <div class="carousel-item ">
        <img class="d-block w-100" src="img/slider-image1.jpg" alt="Second slide">
        <div class="carousel-caption ">
          <h1>YOUR PERFECT BREAKFAST</h1>
          <h3>The best dinning quality can be here too!</h3><br>
          <a href="#menu-section">Discover menu</a>
                
          </div>
      </div>


      <!-- slider 3 -->
      <div class="carousel-item ">
        <img class="d-block w-100" src="img/slider-image2.jpg" alt="Third slide">
        <div class="carousel-caption ">
          <h1>NEW RESTAURANT IN TOWN</h1>
          <h3>Enjoy our special menu on Monday and Friday</h3><br>
          <a href="#reserv-section">Reservation</a>
                
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!-- Slider end -->

<style type="text/css">


body > section:nth-child(1) > div > nav > div > a
{
    font-size: 3.2rem;
    text-transform: capitalize;
    color: white;
    font-family: 'Rochester', cursive;
    letter-spacing: 2px;
}
body > section:nth-child(1) > div > nav > div >a span
{
    font-size: 3.2rem;
    text-transform: capitalize;
    color: white ;
    font-family: 'Rochester', cursive;
    letter-spacing: 2px;
}

/* body > section:nth-child(1) > div > nav > div > a
{
  color: white;
} */

#navbarSupportedContent > ul > li:nth-child(n) > a
{
    color: white;
    border: 2px solid transparent;
    padding: 10px;
    margin: 8px;
    font-size: 1.1rem;
}
#navbarSupportedContent > ul > li:nth-child(n) > a:hover
{
    text-decoration: underline  ;
    transition: 2s ease; 
}

body > section.header.new.fixed-top > nav > div > a
{
    color: white;
}
body > section.header.new.fixed-top > nav > div > button > span
{
    /* background-color: rgba(182, 145, 182); */
    border: none;
    border-radius: 3px;
    padding: 20px;
    color: white;
}


.scroll-active
{
    background-color: white;
    box-shadow: 5px 5px 5px #dfdddd;
}

.scroll-active a
{
    color: rgba(182, 145, 182) !important;
}


.scroll-active span{
  color:rgba(182, 145, 182) !important;
}



 .w-100
{
    height: 100vh;
} 

/* navbar end */

/* slider start */
.carousel-item
{
    
    background: no-repeat center ; 
    -webkit-background-size:cover;
    background-size: cover;
    /* height: 100vh; */
    margin-bottom: 100px;

}

.carousel-caption
{
   /* margin:auto;
   justify-content: center;
   text-align: center;
   align-items: center;
   vertical-align:middle ; */
   position: absolute;
   top: 28%;
   
 
  
   
  
}

.carousel-caption h3
{
    font-size: 2rem;
    text-transform: capitalize;
    font-family: inherit;
    letter-spacing: 2px;
    /* margin: 5px auto 10px; */
    color: white ;
    width: 40%;
    margin: auto;
    margin-top: 20px;
    margin-bottom: 20px;
    
}
.carousel-caption h1
{
    font-size: 2.5rem;
    font-family: "Times New Roman", Times, serif;
    margin: 20px;
    color: white;
    margin: 5px auto 10px;
    
   
}


.carousel-caption a{
    text-decoration: none;
    padding: 7px 20px;
    background-color: rgba(182, 145, 182);
    color: white;
   backdrop-filter: 20px;
    cursor: pointer;
    font-weight: bold;
    letter-spacing: 1px;
    
    
    border: 2px solid white;
    
}
.carousel-caption a:hover
{   
   
    text-decoration: none;
    border:2px solid rgba(182, 145, 182);
    color: rgba(182, 145, 182);
    background-color: transparent;

}

@media (min-width: 1199.98px) { 
    
    .toggler{
        display: none;
    }
 }

 @media (min-width: 1000px) { 
    
    .toggler{
        display: none;
    }
 }
@media only screen and (max-width: 767px)
{
    
    .toggler
    {
        /* padding: 15px 5px; */
        font-size: 25px;
        background-color: white;
        border: 2px solid transparent;
        color: rgba(182, 145, 182); 
    
       
    }
   

    
    #navbarSupportedContent > ul > li:nth-child(n) > a
    {
        /* color: rgb(104, 101, 101);; */
        color: rgba(182, 145, 182)
        
    }
    #navbarSupportedContent > ul > li
    {
        background-color: white;
        
    }
    #navbarSupportedContent > ul
    {
        
        text-align: center;
    }
    body > section:nth-child(n) > div > nav
    {
        background-color: white;

    }
    body > section:nth-child(1) > div > nav > div > a span
    {
        /* color: rgb(104, 101, 101); */
        color: rgba(182, 145, 182)
       
       
    }

    .carousel-caption
    {
        top: 38%;
    }
    .carousel-caption h3
{
    font-size: 1.5rem;

}
.carousel-caption h1
{
    font-size: 2rem;
 
   
}
}


@media only screen and (max-width: 1067px) {
    .toggler
    {
        /* padding: 15px 5px; */
        font-size: 25px;
        background-color: white;
        border: 2px solid transparent;
       color: rgba(182, 145, 182)  !important;
    
       
    }
    #navbarSupportedContent > ul > li:nth-child(n) > a 
    {
        /* color: rgb(104, 101, 101);; */
        color: rgba(182, 145, 182);
        
    }
    #navbarSupportedContent > ul > li
    {
        background-color: white;
        
    }
    #navbarSupportedContent > ul
    {
        
        text-align: center;
    }
    body > section:nth-child(n) > div > nav
    {
        background-color: white;

    }
    body > section:nth-child(1) > div > nav > div > a span
    {
        /* color: rgb(104, 101, 101); */
        color: rgba(182, 145, 182)
       
       
    }


} 


/* slider end */


</style>


<script>

window.addEventListener("scroll",function()
{
    let header = document.querySelector("body > section:nth-child(n) > div > nav");
    let windowPos = window.scrollY > 10;
    header.classList.toggle("scroll-active",windowPos)

  
})  
</script>