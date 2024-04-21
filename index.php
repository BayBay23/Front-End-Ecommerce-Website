<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Our Store </title>
      <!-- Bootstrap CSS Link --> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <!-- Font Awesome Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- CSS File -->
      <link rel="stylesheet" href="style.css">

</head>

<body>
      <!-- navbar -->
      <div class="container-fluid p-0">
            <!-- first Child -->
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <img src="./Images/Logo2.png" alt="" class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Secound Child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <ul class="navbar-nav me-auto">
      <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

      </ul>
</nav>
<!-- Third Child -->
<div class="bg-light">
      <h3 class="text-center">Our Store</h3>
      <p class="text-center">Welcome to The Wide Collection of Our Store</p>
</div>

<!-- Fourth Child , in this i used a comment for every closing div tag for better understanding -->
<div class="container">
  <div class="row">
    <div class="col-md-10">
      <!-- to display products -->
      <div class="row">
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./Images/Diana4k.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Wonder Woman</h5>
              <p class="card-text">Wonder Woman 1984 is a 2020 American superhero film</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 1 -->

        </div> <!-- this is card 1 -->
        <div class="col-md-4 mb-2">
        <div class="card">
            <img src="./Images/RDR24K.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Red Dead Redemprtion</h5>
              <p class="card-text">Red Dead Redemption is a action-adventure game developed by Rockstar</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 2 -->
        </div> <!-- this is card 2 -->
        <div class="col-md-4 mb-2">
        <div class="card">
            <img src="./Images/Homelander4k.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">The Boys</h5>
              <p class="card-text">The Boys is an American satirical superhero television series</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 3 -->
        </div> <!-- this is card 3 -->
        <div class="col-md-4 mb-2">
        <div class="card">
            <img src="./Images/GTAV4K.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">GTA V</h5>
              <p class="card-text">Grand Theft Auto V is a video game developed by Rockstar North.</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 4 -->
        </div> <!-- this is card 4 -->
        <div class="col-md-4 mb-2">
        <div class="card">
            <img src="./Images/Stranger4K.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Stranger Things</h5>
              <p class="card-text">Stranger Things is an American science fiction horror drama television series</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 5 -->
        </div> <!-- this is card 5 -->
        <div class="col-md-4 mb-2">
        <div class="card">
            <img src="./Images/John4k.jpg" alt="..." class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">John Wick</h5>
              <p class="card-text">John Wick is a retired assassin who returns back to his old ways</p>
              <a href="#" class = "btn btn-primary">Add to cart</a>
              <a href="#" class = "btn btn-primary">View More</a>
            </div> <!-- this div for card body -->
          </div> <!-- it contains all the code for card 6 -->
        </div> <!-- this is card 6 -->

      </div> <!-- Row Div just for products horizontal -->

    </div> <!-- col 10 products (horizontal div tag ends here) -->
    <div class="col-md-2 bg-dark p-0"><!-- opened div tag for vertical side navbar -->
    <!-- To Display brands -->
       <ul class="navbar-nav me-auto text-center"> 
        <li class="nav-item bg-danger">
          <a href="#" class="nav-link"><h4>Top Brands</h4></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Jockey</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Gucci</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Park Avenue</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Allen Solly</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Levi’s</a>
        </li>
       </ul>
       <!-- To display Categories -->
       <ul class="navbar-nav me-auto text-center">
        <li class="nav-item bg-danger">
          <a href="#" class="nav-link"><h4>Categories</h4></a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Men</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Women</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Kids</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Books</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link text-light">Games</a>
        </li>
       </ul>

      <!-- to display side navbar -->

    </div> <!-- col 2 side navbar vertical -->
  </div> <!-- Row Div contains all -->
</div> <!-- Container Div contains all -->





<!-- Last Child -->
  <div class="bg-danger p-3 text-center">
      <p> All Rights Reserved ©  Designed By Sai Rajendra Atluri- 2024
</div> 

<!-- Bootstrap Js Link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>