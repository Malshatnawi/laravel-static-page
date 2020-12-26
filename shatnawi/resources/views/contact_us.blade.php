<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Homepage</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/services">Services</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container d-flex justify-content-center">
    <div class="contact px-5 py-5 w-100">
        <h4>Contact Us</h4>
        <div class="row">
            <div class="col-md-6"> <input type="text" class="form-control" placeholder="name" /> </div>
            <div class="col-md-6"> <input type="text" class="form-control" placeholder="phone" /> </div>
        </div>
        <div class="row">
            <div class="col-md-6"> <input type="text" class="form-control" placeholder="email" /> </div>
            <div class="col-md-6"> <input id="date" type="text" class="form-control" placeholder="When can we call you?" /> </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12"> <textarea rows="6" class="form-control" placeholder="Let us know how can we help you?"></textarea> </div>
        </div>
        <div class="pull-left"> <button class="btn btn-success mt-2 px-5">Send Message <i class="fa fa-long-arrow-right ml-2 mt-1"></i></button> </div>
    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>