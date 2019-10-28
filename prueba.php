<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Pay Page</title>
</head>
<body class="no-gutters">
  
    <div class="row mt-4 no-gutters">
      <div class="col-md-1 col-lg-2 col-xl-2"></div>
      <div class="col-md-10 col-lg-8 col-xl-8" >
        
        <div class="row " id="marco">
          <div class="container col-md-6 col-lg-8 col- pb-4 order-2" >
            <h2 class="my-4 text-center">Reservación de Alojamiento</h2>
            <form action="./charge.php" method="post" id="payment-form">
              <div class="form-row">
              <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty z-depth-1" placeholder="First Name">
              <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty z-depth-1" placeholder="Last Name">
              <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty z-depth-1" placeholder="Email Address">
                <div id="card-element" class="form-control z-depth-1">
                  <!-- a Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors -->
                <div id="card-errors" role="alert"></div>
                <button class="z-depth-2" >Generar pago</button>
              </div>

              
            </form>
          </div>
          <div class="col-md-6 col-lg-4 order-1 row justify-content-center ">
          
            <!-- Card -->
            <div class="card">

            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap">
              <a href="#!">
                <div class="mask rgba-white-slight"></div>
              </a>
            </div>

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h4 class="card-title text-danger"> Localización <i class="fas fa-map-marker-alt"></i></h4>
              <!-- Text -->
              <p class="card-text">San Jasmeo el Chico, Tejupilco Estado de México</p>
              <!-- Button -->
              <div class="row justify-content-center">
                <div class="col-lg-12 center">
                  <i class="fas fa-dollar-sign"></i>
                  <!--<div class="w-100"></div>-->
                  50.00 MX
                </div>
                <div class="col-lg-12">
                  <i class="fas fa-user-tie"></i>
                  <!--<div class="w-100"></div>-->
                  Don Abenene mota de casco
                </div>
                <div class="col-lg-12">
                  <i class="fas fa-building"></i>
                  <!--<div class="w-100"></div>-->
                  Departamento
                </div>
              </div>

            </div>

            </div>
            <!-- Card -->
          
          </div>
        </div>
      </div>
      <div class="col-md-1 col-lg-2 col-xl-2"></div>
    </div>















  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="js/mdb.min.js"></script>
  <script src="./js/charge.js"></script>
</body>
</html>