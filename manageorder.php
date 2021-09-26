<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
  <title>Manage Order</title>
</head>

<body>

  <div class="container-fluid ">
    <div class="row">
      <!---->
      <div class="col-md-12  ">
        <ul class="nav justify-content-center bg-light:whilte border-bottom border-2 border-dark">
          <li class="nav-item">
            <a class="nav-link text-red" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red" href="#">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red ">Order</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-red">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
 <div class="p-2 mb-2 bg-light text-dark ">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="d-grid gap-2 d-md-block">
          <p class="fs-2">Manage Order</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive-md">
          <table class="table">
            <thead>
              <th>S.N.</th>
              <th>Food</th>
              <th>Price</th>
              <th>Qty.</th>
              <th>Total</th>
              <th>Order Date</th>
              <th>Status</th>
              <th>Customer Name </th>
              <th>Contact</th>
              <th>Email</th>
              <th>Address</th>
              <th>Actions</th>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Mixed Pizza</td>
                <td>
                  10.00
                </td>
                <td>2</td>
                <td>20.00</td>
                <td>2020-11-30
                    04:07:17
                </td>
                <td <button style="color:green">Delivered</button>
                </td>
                <td>Jan Bush</td>
                <td>+1(562) 101-2028</td>
                <td>tydujy@mailinator.com</td>
                <td>Minima iure ducimus </td>
                <td>
                  <button type="button" class="btn btn-success">Update Order</button>
                </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>Best Burger</td>
                <td>
                  4.00
                </td>
                <td>4</td>
                <td>16.00</td>
                <td>2020-11-30
                    03:52:43
                </td>
                <td <button style="color:green">Delivered</button>
                </td>
                <td>Kelly Dillard</td>
                <td>+1(908) 914-3106</td>
                <td>fexekihor@mailinator.com</td>
                <td>Incidunt ipsum ad d</td>
                <td>
                  <button type="button" class="btn btn-success">Update Order</button>
                </td>
              </tr>
              <tr>
                <td>3.</td>
                <td>Sadeko Momo</td>
                <td>
                  6.00
                </td>
                <td>3</td>
                <td>18.00</td>
                <td>2020-11-30
                    03:49:48
                </td>
                <td <button style="color:red">Canceled</button>
                </td>
                <td>Bradley Farrell</td>
                <td>+1(576) 504-4657</td>
                <td>Zuhafiq@mailinator.com</td>
                <td>Duis aliqua Qui lor</td>
                <td>
                  <button type="button" class="btn btn-success">Update Order</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="bg-danger text-white">2020 All rights reserved.Food Hourse.Develooped By-<a href="#">Pham Hong Thang</a></p>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"></script>
</body>

</html