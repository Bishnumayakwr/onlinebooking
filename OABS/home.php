<?php
$clinic_name = "Endoplus Wellness Center Pvt. Ltd."; // Replace with your clinic name
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $clinic_name; ?></title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap Files -->
  <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css">
  <script src="bootstrap-5/js/bootstrap.min.js"></script>
  <style>
    .container {
  display: flex;
  flex-wrap: wrap; /* Allows rows to wrap without overflowing */
  width: 80%; /* Adjust width as needed */
  margin: 0 auto; /* Centers the container horizontally */
}
.card {
      background-color:#D8D9DA;
      color: black;
      padding: 15px;
      height:20vh;
      margin-bottom: 25px;
      border-radius: 15px;
      text-align:center;
      border-left-color:blue;

    }

.row {
  display: flex;
  width: 100%;
}

.doctor-info {
  flex: 1 0 33.33%; /* Makes each doctor info div occupy 1/3 of the row */
  padding: 10px;
  border: 1px solid #ddd; /* Optional border for each doctor info */
  margin: 5px; /* Optional margin between doctor info divs */
  text-align: center; /* Centers the content within each doctor info div */
}

.doctor-info img {
  width: 150px; /* Adjust image width as needed */
  height: auto; /* Maintains image aspect ratio */
  margin-bottom: 10px; /* Optional space below the image */
}

.doctor-info h3 {
  margin-bottom: 5px; /* Optional space below the doctor name */
}

    /* Global styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    h1, h2, p {
      margin: 0;
    }

    a {
      text-decoration: none;
      color: #333;
    }

    a:hover {
      color: #666;
    }

    /* Header */
    header {
      background-color: #f0f0f0;
      padding: 20px;
    }

    h1 {
      font-size: 2em;
      text-align: center;
    }

    /* Navigation */
    nav {
      background-color: #e0e0e0;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
    }

    nav ul {
      list-style: none;
      margin: 0;
      padding: 0;      
    }

    nav li {
      display: inline-block;
      margin-right: 20px;
    }

    /* Main content */
    main {
      padding: 20px;
    }

    p {
      font-size: 1.1em;
      line-height: 1.5;
    }

    /* Footer */
    footer {
      background-color: #f0f0f0;
      padding: 10px 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1><?php echo $clinic_name; ?></h1>
  </header>

  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="index.php">Make Booking</a></li>
      <li><a href="admin\login.php">Admin login</a></li>
      <li><a href="doctor\login.php">Doctor login</a></li>
    </ul>
  </nav>

  <main>
    <div style="margin: auto; padding :3px; margin-bottom: 5px; display:block; background-color : lightblue;" >
      <img src="images\clinic.jpg" alt="clinic image" style="width: 380px; height: 450px;">
      <img src="images\clinic1.jpg" alt="clinic image" style="width: 430px; height: 450px;">
      <img src="images\clinic2.jpg" alt="clinic image" style="width: 420px; height: 450px;">
    </div>
    <div  >
    <div class="container">
  <div class="row">
    <div class="doctor-info">
      <img src="images\dr.amritrijal.jpg" alt="Doctor 1">
      <h3>Dr. Amrit Rijal</h3>
      <p>Address: Pokhara-8, Srijanachowk, Kaski</p>
      <p>Phone: 9806695397</p>
      <p>Email: endoplus@gmail.com</p>
      <p>Speciality: Thyroid</p>
    </div>
    <div class="doctor-info">
      <img src="images\doctor.jpg" alt="Doctor 2">
      <h3>Dr. Roshan Poudel </h3>
      <p>Address: Pokhara-1, Bagar, Kaski</p>
      <p>Phone: 9818877299</p>
      <p>Email: poudelroshan2@gmail.com</p>
      <p>Speciality: Dermatology</p>
    </div>    
  </div>
  <div class="row">
    <div class="doctor-info">
      <img src="images\nurse.jpg" alt="Doctor 4">
      <h3>Aasha Thapa</h3>
      <p>Address: Khairenitar, Tanahun</p>
      <p>Phone: 9805890090</p>
      <p>Email: thapa.asha@gmail.com</p>
      <p>Speciality: sugar</p>
    </div>    
    <div class="doctor-info">
    <img src="images\pharmacist.jpg" alt="Doctor 4" style="width: 220px; height: 220px;">
      <h3>Shirsti Chhetri</h3>
      <p>Address: Chhorepatan, Pokhara, Kaski</p>
      <p>Phone: 9806732570</p>
      <p>Email: shirsti.chhetri01@gmail.com</p>
      <p>Speciality: Physician</p>
    </div>
  </div>
</div>

<div class="container mt-5">
    <div class="row">
      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Our Address:</h5>
            <p class="card-text">Pokhara-8, Srijanachowk, Kaski</p>
          </div>
        </div>
      </div>

      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Phone No:</h5>
            <p class="card-text">9806695397</p>
          </div>
        </div>
      </div>


      <div class="col-lg">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Email:</h5>
            <p class="card-text">endoplus@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>
    </main>

  <footer>
    <p>&copy; <?php echo $clinic_name; ?> <?php echo date("Y"); ?></p>
  </footer>  
</body>
</html>
