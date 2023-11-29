<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- remember to put image for the tab -->
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body>

  @include('modules.navbar');
  {{-- @include('modules.sessions') --}}
  {{-- {{ echo succMsg() echo errMsg(); }} --}}
<!-- <hr> -->
<!-- background -->
<div class="bg-text">
  <div class="p-div">
    <b>NUMBER ONE INTER-CAMPUS BOOKING PLATFORM</b>
    <p>FUT-minna Inter Campus, Your All In One Booking Ticket.</p>
  </div>
  <img src="transport images\bus bg.webp" alt="" class="bg-img">
</div>
<!-- Booking -->
<div class="text2">
  <p>
   Our goal is to centralize travel tech industry and make ticket bookings to your preferred location easily accessible from the comfort of your home. The bus is centralized for movement from Bosso campus-GK campus and everyother pickup stations and vice versa.  
  </p>
  <button class="btn btn-success"><a class="nav-link text-light" href="">Book</a></button>
</div>
<!-- services -->
<h1 class="text-center mt-5" id="services">OUR SERVICES</h1>

<div class="services">
  <div class="card">
    <img src="transport images\32 seaters.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Marcopolo</h5>
        <p class="card-text">Book a marcopolo</p>
        <a href="#" class="btn btn-success">Book</a>
      </div>
    </div>
  <div class="card">
    <img src="transport images\32 seaters.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">32-seaters</h5>
        <p class="card-text">Book a 32-seater bus</p>
        <a href="#" class="btn btn-success">Book</a>
      </div>
  </div>
  <div class="card">
    <img src="transport images\32 seaters.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">18-seaters</h5>
        <p class="card-text">Book a 18-seater bus</p>
        <a href="#" class="btn btn-success">Book</a>
      </div>
  </div>
  <div class="card">
    <img src="transport images\32 seaters.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sharon</h5>
        <p class="card-text">Book a sharon vehicle</p>
        <a href="#" class="btn btn-success">Book</a>
      </div>
  </div>
</div>
<!-- About us -->
<h1 class="text-center m-5" id="about">ABOUT US</h1>
<div class="about">
<p>
  Reliable and Affordable Tickets For Your Inter-campus Transport
</p>
  <div class="card p-4">
  We are an inter school transport booking agency with students dedicated to move from one location to the other around the school. We want our customer to spend less time purchasing their travel tickets. Our mission is to save you time and stress with our simple online booking platform.
  </div>
</div>
<!-- news letter form -->
<form action="" class="newsletter card">
    <h3>Subscribe To Our News letter To Get Latest News</h3>
    <input type="text" name="news_letter" class="mt-3 form-control rounded-0" placeholder= "Your Email e.g (Futminna@edu.com.ng)">
  </form>

    @include('modules.footer');
</body>
  <script src="assets\js\bootstrap.bundle.min.js"></script>
</html>