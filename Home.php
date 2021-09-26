<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Restaurant website</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container-fluid ">
    <div class="row">
      <!--logo-->
      <div class="col-md-6">
        <img src="images/logo.png" class="img-fluid" alt="...">
      </div>
      <!--end logo-->
      <!---->
      <div class="col-md-6  ">
        <ul class="nav justify-content-end ">
          <li class="nav-item ">
            <a class="nav-link active text-red" aria-current="page" href="Home.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-red" href="explore.php">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red" href="food.php">Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-red">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- end -->
    <!--food search-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 food-search">
          <div class="input-group mb-3 search">
            <input type="text" class="form-control" placeholder="Search for Foods" aria-label="Recipient's username"
              aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end food search-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 ">
        <h2>
          <p class="text-center">Explore Foods</p>
        </h2>
        <div class="container text-center  float-text">
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-dark text-white">
                <img src="images/pizza.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title top">Pizza</h5>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-dark text-white">
                <img src="images/burger.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title  top">Burger</h5>
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="card bg-dark text-white">
                <img src="images/momo.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                  <h5 class="card-title  top">Momo</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end-->
  <!--Mwnu-->
<div class="p-2 mb-2 bg-light text-dark ">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2>
          <p class="text-center"> Food Menu</p>
        </h2>
        <div class="container">
          <div class="row">
            <dic class="col-md-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/menu-momo.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Dumplings Specials</h5>
                      <p class="card-text">$5.00</p>
                      <p class="card-text food-detail"><small class="text-muted">Chicken Dumpling with herbs from
                          Moutains.</small></p>
                      <a href="" class="btn btn-danger">Order now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/menu-momo.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Sadenko Momor</h5>
                      <p class="card-text">$6.00</p>
                      <p class="card-text food-detail"><small class="text-muted">Best Spicy Momo for Winter.</small>
                      </p>
                      <a href="" class="btn btn-danger">Order now</a>
                    </div>
                  </div>
                </div>
              </div>
            </dic>
            <!--hangf2-->
            <dic class="col-md-6">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/menu-burger.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Best Burger</h5>
                      <p class="card-text">$4.00</p>
                      <p class="card-text food-detail"><small class="text-muted">Burger with Ham,Pineapple and lost of
                          Cheese.</small></p>
                      <a href="" class="btn btn-danger">Order now</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="images/menu-pizza.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Mixed</h5>
                      <p class="card-text">$10.00</p>
                      <p class="card-text food-detail"><small class="text-muted">Pizza with chicken ,Ham,Buff,Mushroom
                          and Vegetables.</small></p>
                      <a href="" class="btn btn-danger">Order now</a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!--end cot 2-->
        </div>
      </div>
    </div>
    <p class="text-center">
    <class style="color:red"> See All Foods</p>
  </div>
</div> 
  <!--end menu-->
  <!---->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 social text-center letf">
        <ul>
          <li>
            <a href="#"><img src="https://img.icons8.com/color/48/000000/facebook.png" /></a>
          </li>
          <li>
            <a href="#"><img src="https://img.icons8.com/color/48/000000/instagram-new--v2.png" /></a>
          </li>
          <li>
            <a href="#"><img src="https://img.icons8.com/fluency/48/000000/twitter.png" /></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>All rights reserved.Designed By <a href="#" class="text-red">Pham Hong Thang</a></p>
      </div>
    </div>
  </div>
  <!--End-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>