<!DOCTYPE html>
<html>
<body>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav>
        <ul>
            <li><a href="Agung_home.php">Home</a></li>
            <li><a href="Agung_booking.php">Booking</a></li>
        </ul>  
    </nav>
  
<?php
    $agung = "M. Agung Rizaldi_1202204359"
    ?>

<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Rent Your Car Now!</h2>
      </div>
      <img src="https://inakoran.com/ina/userfiles/images/TOYOTA%20RUSH%20MOBIL.png" style="float:left;" width="200" height="100"><p class="right">
      <div class="row g-0 text-center">
        <div class="col-sm-6 col-md-8">
          <div class="row g-5">
            <div class="col-md-7 col-lg-8">
              <form class="" action="Agung_Mybooking.php" method="GET">
                <div class="row g-3">
                <div class="col-12">
                    <label for="nama" class="form-label">Name</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="<?php echo $agung ?>" disabled readonly>
                </div>

                <div class="col-12">
                <label for="date">Book Date</label>
                <input type="date" id="date" name="date" class="form-control">
                </div>

                <div class="col-12">
                <label for="time">Start Time</label>
                <input type=time class="form-control" id="time" name="time">
                </div>
        
                <div class="col-12">
                    <label for="days" class="form-label">Duration Days</label>
                    <input type="number" class="form-control" id="days" name="days">
                </div>

                  <div class="col-12">
                    <label for="car" class="form-label"></br>Car Type </label>
                    <select class="form-select" id="car" name="car">
                    <option selected>Select Vehicle</option>
                    <option value="hrv">Toyota Rush</option>
                    <option value="scirocco">Toyota Ayla</option>
                    <option value="mazda">Honda Brio</option>
                    </select>
                  </div>
        
                  <div class="col-12">
                    <label for="phonenumber" class="form-label"></br>Phone Number</label>
                    <input type="number" class="form-control" id="phonenumber" name="phonenumber">
                </div>
      
        
                <h5 class="mb-3">Add Service</h5>
        
                <div class="my-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="hp" id="hp">
                <label class="form-check-label" >Health Protocol / Rp.25.000</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="driver" id="driver">
                <label class="form-check-label" >Driver / Rp.100.000</label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="bensin" id="bensin">
                <label class="form-check-label">Fuel filled / Rp.25.000</label>
                </div>
                </div>
        
                </div>
        
                <hr class="my-4">
        
                <button class="w-100 btn btn-success" type="submit">Book</button>
              </form>
            </div>
            <div class="col-md-7 col-lg-8">
            
            </div>
          </div>
  </div>
  <div class="col-6 col-md-4">


  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © Created By:
    <a class="text-dark" href="https://mdbootstrap.com/">M. Agung Rizaldi_1202204359</a>
  </div>
