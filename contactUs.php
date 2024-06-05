<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- CSS  -->
<link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Hero -->
    <section>

        <nav class=" navbar navbar-expand-lg navbar-light bg-light rounded-3 p-2 fixed-top ">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#"><span class="span-text">AE</span>Furniture</a>
              <div class="collapse navbar-collapse bg-light p-2" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contactUs.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="page.html">Page</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                  <button class="btn btn-light me-1 text-white" type="submit">
                    Search
                  </button>
                  <button class="btn btn-light text-white" type="">Login</button>
                </form>
              </div>
            </div>
          </nav>
        <div class=" text-center bg-image d-flex justify-content-center align-items-center" style="
    background-image: url('images/about-hero.jpg');
    height: 400px; background-color: rgba(0, 0, 0, 0.51); background-blend-mode: overlay;
    background-size: cover;background-position: center;
              ">
            <div class="mask p-5 " style="background-color: #0301004a;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white px-5 py-2">
                        <h1 class="mb-3 ">Contact Us</h1>
                        <h4 class="mb-3 fw-normal fs-5">Lorem ipsum dolor sit amet consectetur.</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero -->
<!-- contact section starts here  -->
<!-- contact php starts here  -->

<?php
include 'conn.php';
if(isset($_POST['done'])){

    $username = $_POST['name'];
    $fathername = $_POST['fname'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "INSERT INTO `contact`(`name`,`fathername`,`cnic`,`email`,`password`) VALUE('$username','$fathername','$cnic','$email','$password')";
    $query = mysqli_query($conn,$q);

}


?>


<!-- contact php ends here  -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Form</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post">
     <label for="">Name: </label><input type="text" name="name" id="" required>
     <label for="">Father Name: </label><input type="text" name="fname" id="" required>
     <label for="">Cnic: </label><input type="text" name="cnic" id="" required>
     <label for="">Email: </label><input type="text" name="email" id="" required>
     <label for="">Password: </label><input type="password" name="password" id="" required>
     <button type="submit" name="done">Submit</button>
    </form>
</body>
</html>





<!-- contact section ends here  -->

  <!-- footer starts here  -->
  <footer style="background-color: #C19A7F;">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3 fw-5 text-dark" style="letter-spacing: 2px; ">Lorem, ipsum.</h5>
          <p class="text-light">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
            molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
            voluptatem veniam, est atque cumque eum delectus sint!
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #080000;">links</h5>
          <ul class="list-unstyled mb-0">
            <li class="mb-1">
              <a href="#!" class="text-light">Home</a>
            </li>
            <li class="mb-1 ">
              <a href="#!" class="text-light">Contact Us</a>
            </li>
            <li class="mb-1">
              <a href="#!" class="text-light">About</a>
            </li>
            <li>
              <a href="#!" class="text-light">Page</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-1" style="letter-spacing: 2px;">Opening Hours</h5>
          <table class="table" style="color: #ffffff; border-color: #000000;">
            <tbody>
              <tr>
                <td>Mon - Fri:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Sat - Sun:</td>
                <td>8am - 1am</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center text-light p-3" style="background-color:#853300;">
      © 2023 Copyright:
      <a class="text-light" href="#"> AEfurniture</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- fotter ends here  -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>