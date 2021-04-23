<!-- PHP  -->
<?php 
$website_name = "Saf Restaurant";
define("TITLE", "SAF RESTAURANT");
date_default_timezone_set('ASIA/KARACHI');

$date = date('l jS \of F Y h:i:s A');

$company_name = "SAF RESTAURANT";
include("arrays.php");
?>


<!-- PHP END -->



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- aos animantion -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- css link1 -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="form.css"> -->
    <!-- <link rel="stylesheet" href="menu.css"> -->
    <!-- js link -->
    <link rel="stylesheet" href="index.js">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Rochester&display=swap" rel="stylesheet">
    <title><?php echo TITLE; ?></title>
</head>
<body>  





<!-- header -->
<?php include('header.php'); ?>


<!-- Intro -->
<section id="about-section" class="intr-second">
    <div class="mx-auto container text-center sec-3-head" data-aos="zoom-in">
      <h3>Something New</h3>
      <h1>About Us</h1>

    </div>
    <div class="intro-second container-fluid mx-auto row">
        <div class="img intro-img col-lg-7 col-md-12 col-sm-12" data-aos="fade-right">
            <img class="img-fluid" src="img/about_img_1.jpg" alt="Responsive image">
        </div>
        <div class="intro-txt mx-auto text-center col-lg-5 col-md-12 col-sm-12" data-aos="fade-left">
            <h1>Something New</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quidem perferendis asperiores alias ducimus, aliquid aspernatur deleniti? Non consequuntur libero, aperiam quasi minima, sunt, pariatur veniam provident omnis velit atque.</p>
        </div>
    </div>

</section>

<!-- chefs -->
<section id="chefs-section" class="six-box"> 
        <div class= "text-center align-item-center heading-chef" data-aos="zoom-in">
            <h1>Top Chefs</h1>
        </div>
    <div class="container row m-auto text-center boxes " >
        <!-- 1st box -->
        <div class="col-lg-6 col-md-12 col-sm-12 p-5 top-chef" data-aos="fade-right">
            <img class="img-fluid" src="img/chef_3.jpg" alt="Responsive image">
            <h3 class="">Julien Williams</h3>
            <h4>Head Chef</h4>

            <div class="pos-f-t chef-btn">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="p-4">
                    <p>I develop new menu options based on seasonal changes and customer demand.I assist with the preparation and planning of meal designs. I ensure that kitchen activities operate in a timely manner.</p> 
                    </div>
                </div>
                <nav class="navbar m-auto justify-content-center align-item-center text-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler mx-auto" >See More</span>
                    
                  </button>
                </nav>
              </div>
                
        </div>


        <!-- 2nd box -->
        <div class="col-lg-6 col-md-12 col-sm-12 p-5 top-chef" data-aos="fade-left">
            <img class="img-fluid" src="img/chef_1.jpg" alt="Responsive image">
            <h3 class="">Maria Smith</h3>
            <h4>Sou Chef</h4>

            <div class="pos-f-t chef-btn">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="p-4">
                    <p>I develop new menu options based on seasonal changes and customer demand.I assist with the preparation and planning of meal designs. I ensure that kitchen activities operate in a timely manner.</p> 
                </div>
                </div>
                <nav class="navbar m-auto justify-content-center align-item-center text-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler mx-auto" >See More</span>
                    
                  </button>
                </nav>
              </div>
                
        </div>


        <!-- 3rd box -->
        <div class="col-lg-6 col-md-12 col-sm-12 p-5 top-chef" data-aos="fade-right">
            <img class="img-fluid" src="img/chef_2.jpg" alt="Responsive image">
            <h3 class="">William Jones</h3>
            <h4>Sou Chef</h4>

            <div class="pos-f-t chef-btn">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="p-4">
                    <p>I develop new menu options based on seasonal changes and customer demand.I assist with the preparation and planning of meal designs. I ensure that kitchen activities operate in a timely manner.</p> 
                  </div>
                </div>
                <nav class="navbar m-auto justify-content-center align-item-center text-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler mx-auto" >See More</span>
                    
                  </button>
                </nav>
              </div>
                
        </div>


        <!-- 4rth box -->
        <div class="col-lg-6 col-md-12 col-sm-12 p-5 top-chef" data-aos="fade-left">
            <img class="img-fluid" src="img/chef_4.jpg" alt="Responsive image">
            <h3>Suzie James</h3>
            <h4>Sou Chef</h4>

            <div class="pos-f-t chef-btn">
                <div class="collapse" id="navbarToggleExternalContent">
                  <div class="p-4">
                    <p>I develop new menu options based on seasonal changes and customer demand.I assist with the preparation and planning of meal designs. I ensure that kitchen activities operate in a timely manner.</p> 
                  </div>
                </div>
                <nav class="navbar m-auto justify-content-center align-item-center text-center">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler mx-auto" >See More</span>
                    
                  </button>
                </nav>
              </div>
                
        </div>




</section>


<!-- signatuer dishes -->
<section id="blog-section" class="section-3">

    <div class="mx-auto container text-center sec-3-head" data-aos="zoom-in">
        <h3>Something New</h3>
        <h1>This is Signature Dishes</h1>
    </div>
    <div class="container-fluid row mx-auto section-3-items" >
        <div class="img intro-img-2 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down-right">
            <img class="img-fluid" src="img/blog_3.jpg" alt="">
        </div>
        <div class="sec-3-text col-lg-5 col-md-12 col-sm-12 text-center mx-auto" data-aos="fade-up-left">
            <h4>Pork Tenderloin marinated in Green Pepper</h4>
            <p>Pork/Tenderloin/Green Pepper/Veggies</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quidem </p>
        </div>
    </div>


    <div class="container-fluid row mx-auto section-3-items" >
        <div class="img intro-img-2 col-lg-6 col-md-12 col-sm-12" data-aos="fade-down-right">
            <img class="img-fluid" src="img/blog_5.jpg" alt="">
        </div>
        <div class="sec-3-text col-lg-5 col-md-12 col-sm-12 text-center mx-auto" data-aos="fade-up-left"> 
            <h4>Pork Tenderloin marinated in Green Pepper</h4>
            <p>Pork/Tenderloin/Green Pepper/Veggies</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio quidem </p>
        </div>
    </div>


</section>



<!-- Menu div -->

<section id="menu-section" class= "menu">

  <div class="main-test row container mx-auto " >
    <div class="m-auto text-center menu-des" data-aos="zoom-in-down">
    <h1>Something New</h1>
    <h3>Discover Our Menu</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ipsam placeat accusamus laboriosam rerum dolore quia, culpa amet necessitatibus laudantium id deserunt obcaecati, dicta dolorem perspiciatis nisi impedit at ea.</p>
    </div>
    <div class="menu-c1 col-lg-4 col-md-8 col-sm-12 mx-auto">
      <div class="image-menu container d-flex" style="border:2px solid transparent" data-aos="flip-up">
      <img class="img-fluid " src="img/starters.jpg " alt="">
    </div>
      <div class="card card-1" style="border:2px solid rgba(182, 90, 182)" data-aos="zoom-in-right"  >
        <h1 class="mx-auto text-center" >Starters</h1>
        <ul class=" mx-auto"  >
                  <?php foreach ($starters as $dish => $items){ ?>
                    <li class=" d-flex justify-content-between ">
                    <p class="description"> 
                   <span><?php echo $items["title"]; ?></span><br>
                    <?php echo $items["description"] ?></p>
                    <p  class="price my-auto"><small>Rs </small><?php echo $items["price"] ?></p>
                    </li>
                  <?php } ?>
                </ul>
      </div>
    </div>


      <div class="menu-c1 col-lg-4 col-md-8 col-sm-12 mx-auto">
      <div class="image-menu container d-flex" style="border:2px solid transparent" data-aos="flip-up">
        <img class="img-fluid " src="img/main.jpg " alt="">
      </div>
      <div class="card card-1" style="border:2px solid rgba(182, 90, 182)" data-aos="zoom-out" >
      <h1 class="mx-auto text-center" >Main </h1>
      <ul class=" mx-auto"  >
         <?php foreach ($main as $dish => $items){ ?>
            <li class=" d-flex justify-content-between ">
              <p class="description"> 
              <span><?php echo $items["title"]; ?></span><br>
              <?php echo $items["description"] ?></p>
              <p  class="price my-auto"><small>Rs </small><?php echo $items["price"] ?></p>
            </li>
          <?php } ?>
       </ul>
      </div>
      </div>



  <div class="menu-c1 col-lg-4 col-md-8 col-sm-12 mx-auto">
    <div class="image-menu container d-flex" style="border:2px solid transparent" data-aos="flip-up">
      <img class="img-fluid " src="img/deserts.jpg " alt="">
    </div>
    <div class="card card-1" style="border:2px solid rgba(182, 90, 182)" data-aos="zoom-in-left">
    <h1 class="mx-auto text-center" >Desserts</h1>
    <ul class=" mx-auto"  >
         <?php foreach ($dessert as $dish => $items){ ?>
            <li class=" d-flex justify-content-between ">
              <p class="description"> 
              <span><?php echo $items["title"]; ?></span><br>
              <?php echo $items["description"] ?></p>
              <p  class="price my-auto"><small>Rs </small><?php echo $items["price"] ?></p>
            </li>
          <?php } ?>
       </ul>
  </div>
  </div>

  </div>
</section>

<section id="reserv-section">


<?php if (isset($_POST['submit']))
{
    include("connect1.php");
    // include("display.php");
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $people = $_POST['people'];
    $date = $_POST['date'];
    $time = $_POST['time']; 
    $reservationtype = $_POST['reservationtype']; 
    $sql = "INSERT INTO `test`(`firstname`, `lastname`, `email`, `phone`, `people`, `date`, `time`, `reservationtype`) VALUES ('$firstname','$lastname','$email','$phone','$people','$date','$time','$reservationtype')";
    $result = mysqli_query($conn,$sql);
} ?>

<?php

?>

<div id="formtestsec" class="row container  mx-auto ">
<div class="m-auto text-center menu-des" data-aos="zoom-in-down">
    <h1>Reserve your table</h1>
    <h3>Let's Eat Together</h3>
    <p class="w-75 mb-5">Please fill the form below accurately to enable us serve you better. Thankyou! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta quas eum aliquam. Suscipit consequatur in neque! Est, sed! Optio, error tempora aut sit quam odio iure eum! Earum, quod veritatis! </p>
    </div>
    <div class=" col-lg-6 col-md-12 col-sm-12 mx-auto res-form ">
    <div class=" mx-auto text-center my-5 ">
        <h3 > <span>P</span>lease <span>F</span>ill <span>T</span>he <span>F</span>orm</h3>
        </div>
        
        <form action=""  method="POST" >
            <div class="d-flex my-2 mx-auto justify-content-between align-item-center text-center">
            <h6 class="my-auto mx-2">Name</h6>
            <div class="d-flex mx-2 w-50 mx-uto">
                <input style="height: 50px;" type="text" class="form-control mr-2" name="firstname" placeholder="FirstName">
                <input style="height: 50px;" type="text" class="form-control " name="lastname" placeholder="LastName">
            </div>
          
                
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">Email</h6>
                <input style="height: 50px;" type="text" class="form-control w-50 mx-2 ml-2" name="email" placeholder="Email">
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">Phone</h6>
                <input style="height: 50px;" type="text" class="form-control w-50 mx-2 ml-2" name="phone" placeholder="Phone">
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">People</h6>
                <input style="height: 50px;" type="number" class="form-control w-50 mx-2 ml-2" name="people" placeholder="People">
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">Date</h6>
                <input style="height: 50px;" type="date" class="form-control w-50 mx-2 ml-2" name="date" placeholder="Date">
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">People</h6>
                <input style="height: 50px;" type="time" class="form-control w-50 mx-2 ml-2" name="time" placeholder="Time">
            </div>

            <div class="d-flex  my-5 mx-auto justify-content-between align-item-center text-center">
                <h6 class="my-auto mx-2">Reservation type</h6>
                <select style="height: 50px;" name="reservationtype" class="form-control w-50 mx-2 ">
                <option>Dinner</option>
                <option>Birthday/Anniversary</option>
                <option>Nightlife</option>
                <option>Private</option>
                <option>Wedding</option>
                <option>Corporate</option>
                <option>Others</option>

                
                  
                </select>
            </div>

            <input   id="submit1"  type="submit" name="submit" value="Reserve" class="contact-btn ">
            
        </form>
        
         
            
    </div>
</div>


</section>

<!-- Testemonial  -->
<section data-aos="zoom-in">


  <div class="testimonial container mx-auto text-center col-10">

    <h1>What They Say</h1>
    <h3>TESTIMONIALS</h3>
    <img src="img/quote.png" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <img src="img/quote - Copy.png" alt="">
    <p>James smith, Client</p>
  </div>
</section>

<!-- form contact us -->
<section id="contact-section">

    <div class="container mx-auto text-center">
        <h1 class="contact-heading ">Contact Us</h1>
        <h3 class="get-in-touch">Get In Touch</h3>
        <p class="contact-desc">Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts</p>
    </div>


    <div class="contact-form row container m-auto">

        <form class="col-lg-6 col-md-10 col-sm-12 my-3 m-auto">
            <div class="attributes mb-3 ">
            
                <input type="text" id="name" placeholder="Name" class="form-control " required>
                <input type="email" class="form-control" id="email" placeholder="Email" required>
                <textarea class="form-control" id="body"  rows="5" placeholder="Message" required></textarea>       
            
            </div>

            <button class="contact-btn mb-2" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
        <!-- <input type="button" onclick="sendEmail()" value="Send An Email"> -->
        <!-- <button type="submit"  class="contact-btn text-center">Submit</button> -->
        </form>


     
        <div class="col-lg-5 form-image my-auto ">
            <img class="img-fluid mt-2" src="img/about_img_1.jpg" alt="">
        </div>

    </div>
    <!-- form js -->
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    
    </section>






<?php include('footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- aos script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init({
    // delay: 1.2,
    // duration: 800,
    offset: 200
  }
    );
</script>

<!-- aos script end -->
</body>
</html>
    