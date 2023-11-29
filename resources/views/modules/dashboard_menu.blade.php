<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .dash-nav{
        display: flex;
        flex-direction: column;
        gap: 3rem;
    }
    .dash-nav li{
    list-style: none;
    width: 100%;
    background-color: rebeccapurple;
    padding: 10px 20px;
    }
    .dash-nav a{
    text-decoration: none;
    color: white;
    }
    a:hover li{
        background-color: white;
        padding: 8px 17px;
        color: black;
        border: 2px solid rebeccapurple;
    }

    </style>
</head>
<body>
 <button class="btn btn-danger m-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">MENU</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="dash-nav">
        <a href="user_dashboard_booking.php"><li>Booking</li></a>
        <a href="user_dashboard_transactions.php"><li>Transactions</li></a>
        <a href=""><li>History</li></a>
        <a href=""><li>Map</li></a>
        <a href="logout.php"><button class="btn btn-danger">Logout</button></a>
    </ul>
  </div>
</div>   
</body>
</html>
