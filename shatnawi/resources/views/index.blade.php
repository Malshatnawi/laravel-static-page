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
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://newevolutiondesigns.com/images/freebies/4k-facebook-cover-20.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://servicestack.github.io/images/hero/photo-1503435980610-a51f3ddfee50.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://digitalblasphemy.com/graphics/2x/redfern32x_xthumb.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<div class="container text-center">
    <div class="card">
        <h3 class="m-5">Our Services</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://cdn4.iconfinder.com/data/icons/forgen-phone-settings/48/setting-512.png" width="50" height="50" /> </div>
                    <h5 class="mt-3">Sell digital content</h5> <small>Start selling eBooks, video files, audio files, PDFs, checklinst text, or just about anything.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://simpleicon.com/wp-content/uploads/setting.png" width="50" height="50" /> </div>
                    <h5 class="mt-3">Beautiful landing pages</h5> <small>Sales pages that will match your brand or offer upsells to your supporters.</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <div class="mt-2"> <img src="https://simpleicon.com/wp-content/uploads/rocket.png" width="50" height="50" /> </div>
                    <h5 class="mt-3">Connect with supporters</h5> <small>Using sales pages you can connect with your customers using our chatbot system.</small>
                </div>
            </div>
        </div>
        <div class="button mt-5"> <button class="btn btn-primary pro-button">Welcome <i class="fa fa-long-arrow-right ml-2 mt-1"></i></button> </div>
    </div>
</div>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
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