<?php
include("connect1.php");


// $sql1 = "SELECT * FROM `formtesting` WHERE 1";
$sql1 = "SELECT * FROM `test` ORDER BY id DESC ";
 $result1 = mysqli_query($conn,$sql1);
// $num = mysqli_num_rows($result1);
// echo $num;


$rows = mysqli_fetch_assoc($result1);
    // echo var_dump($rows);

// echo "<br>";

?>



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
    <title>hello</title>
</head>
<body>
<section>
<div>
<nav class="navbar navbar-expand-lg navbar-dark justify-content-between text-light ">
  <a class="navbar-brand" href="#">Saf Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse navbar-btns" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Reservation</a>
      </li>
     
      
    </ul>
   
  </div>
</nav>
</div>
</section>

<section>

    <div style="color:white"  class="res-style container mx-auto text-center justify-content-center align-item-center ">
        <h1 >Saf Restaurant</h1>
        <h5>Hello <span> <?php echo $rows['firstname'] ." " . $rows['lastname']; ?></span> </h5>
        <h6>Your table for <span> <?php echo $rows['reservationtype']?></span> of <span> <?php echo $rows['people']  ?></span> 
        people on <span><?php echo $rows['date']?></span> at <span> <?php echo $rows['time'] ?></span>  has been reserved.</h6>
        <h6>We will soon contact you on</h6> 
        <h6>Phone :  <span><?php echo $rows['phone']?></span> </h6>
        <h6>Email :  <span><?php echo $rows['email'] ?></span></h6>
        
    </div>
    <div  class="res-btn container mx-auto text-center justify-content-center align-item-center">
    <a href="index.php">Return Home</a>
    </div>

   
</section>

</body>
</html>





<style>
    body
    {
        background-image: url("img/home.jpg");
    }
    .navbar-brand
    {
        font-size: 3.2rem;
    text-transform: capitalize;
    color: white;
    font-family: 'Rochester', cursive;
    letter-spacing: 2px;
    }
    .nav-link
{
    color: white;
    border: 2px solid transparent;
    padding: 10px;
    margin: 8px;
    font-size: 1.1rem;
}
.nav-link:hover
{
    text-decoration: underline  ;
    transition: 2s ease; 
}
    .res-style
    {
        width: 600px;
        margin-top: 100px;
    }
    .res-style h1
    {
        font-size: 4.0rem;
    font-weight: 400;
    /* width: 75%; */
    margin: auto;
    text-transform: capitalize;
    margin-top: 5px;
    margin-bottom: 10px;
    /* font-family: 'Redressed', cursive; */
    font-family: 'Rochester', cursive;
    letter-spacing: 2px;
    }

    .res-style h5{
        text-transform: capitalize;
        font-size: 3rem;
        letter-spacing: 1px;
        margin-top: 30px;
    }
    .res-style h6{
         font-size: 1.5rem;
        letter-spacing: 1px;
        margin-top: 20px;
        font-weight: 200;
    }
    .res-style span
    {
        font-weight: 500;
        color: rgba(182, 145, 182);
    }

    .res-btn
    {

        margin-top: 40px;
        width: 600px;
        
    }
    .res-btn a{
    text-decoration: none;
    padding: 7px 20px;
    background-color: rgba(182, 145, 182);
    color: white;
    backdrop-filter: 20px;
    cursor: pointer;
    font-weight: bold;
    letter-spacing: 1px;
    border: 2px solid white;
    font-family: sans-serif;
    
    }
    .res-btn a:hover
{   
   
    text-decoration: none;
    border:2px solid rgba(182, 145, 182);
    color: rgba(182, 145, 182);
    background-color: transparent;

}
</style>