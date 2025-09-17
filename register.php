<?php
session_start();
if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};
include 'koneksi.php';

if(isset($_POST['adduser']))
	{
    $username = $_POST["username"];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $email = $_POST["email"];
    $dateofbirth = $_POST["dateofbirth"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $contact = $_POST["contact"];
    $paypal = $_POST["paypal"];
			  
		$tambahuser = mysqli_query($conn,"INSERT INTO pendaftar (username, password, email, dateofbirth, gender, address, city, contact, paypal)
 VALUES ('$username', '$password','$email', '$dateofbirth', '$gender', '$address', '$city', '$contact', '$paypal')");
		if ($tambahuser){
		echo " <div class='alert alert-success' style='position: fixed; z-index: 1000'>
			Berhasil mendaftar, silakan masuk.
		  </div>
		<meta http-equiv='refresh' content='1; url= login.php'/>  ";
		} else { echo "<div class='alert alert-warning' style='position: fixed; z-index: 1000' >
			Gagal mendaftar, silakan coba lagi.
		  </div>
		 <meta http-equiv='refresh' content='1; url= register.php'/> ";
		}
		
	};

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
    <title>Register Page</title>
    <script>
      function validateForm() {
        const password = document.querySelector('input[name="password"]').value;
        const rePassword = document.querySelector(
          'input[name="re-password"]'
        ).value;

        if (password !== rePassword) {
            
          alert("Password tidak sama!");
          return false;
        }
        return true;
      }

      function clearForm() {
        document.querySelector("form").reset();
      }
    </script>
  </head>
  <body>
    <section id="navbar">
      <div>
      <nav class="navbar navbar-expand-lg bg-primary"  data-bs-theme="dark">
        <div class="container-fluid">
          <a href="index.php" class="btn btn-light me-3">
            <i class="fas fa-chevron-left"></i>
          </a>
          <img
            src="assets/image/icon-healthier.png"
            alt="Logo"
            style="width: 50px; height: 50px; margin: 10px"
            class="d-inline-block align-text-top"
          />
          <a class="navbar-brand mx-2" href="index.php">MedShop</a>
          <div
            class="collapse navbar-collapse justify-content-end mr-3"
            id="navbarNav"
          >
          </div>
        </div>
      </nav>
      </div>
    </section>


<section id="form">
  <div class="d-flex justify-content-center align-items-center" style="height: 90vh;">
    <div class="card container text-left shadow-lg" style="max-width: 600px;">
      <div class="p-4 bg-light rounded">
        <h6 class="text-center mb-4"><b>FORM REGISTRASI</b></h6>
        <div>
          <form action="register.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
              <label class="form-label">Username :</label>
              <input class="box-input" type="text" name="username" required />
            </div>
            <div class="form-group">
              <label class="form-label">Password :</label>
              <input class="box-input" type="password" name="password" required />
            </div>
            <div class="form-group">
              <label class="form-label">Confirm Password :</label>
              <input class="box-input" type="password" name="re-password" required />
            </div>
            <div class="form-group">
              <label class="form-label">E-mail :</label>
              <input class="box-input" type="email" name="email" required />
            </div>
            <div class="form-group">
              <label class="form-label">Date of birth :</label>
              <input class="box-input" type="date" name="dateofbirth" required />
            </div>
            <div class="form-group">
              <label class="form-label">Gender :</label>
              <input type="radio" id="male" name="gender" value="male" required />
              <label for="male">Male</label>
              <input type="radio" id="female" name="gender" value="female" />
              <label for="female">Female</label>
            </div>
            <div class="form-group">
              <label class="form-label">Address :</label>
              <input class="box-input" type="text" name="address" required />
            </div>
            <div class="form-group">
              <label class="form-label">City :</label>
              <select id="city" name="city" required>
                <option value="Surabaya">Surabaya</option>
                <option value="Kediri">Kediri</option>
                <option value="Sidoarjo">Sidoarjo</option>
                <option value="Jombang">Jombang</option>
                <option value="Mojokerto">Mojokerto</option>
                <option value="Gresik">Gresik</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label">Contact :</label>
              <input class="box-input" type="number" name="contact" required />
            </div>
            <div class="form-group">
              <label class="form-label">Paypal ID :</label>
              <input class="box-input" type="text" name="paypal" required />
            </div>
            <div style="margin-top: 15px">
              <a style="display:flex;justify-content: center;">
                <button style="margin-right: 10px" type="submit" name="adduser" class="btn btn-primary">
                  Submit
                </button>
                <button type="button" onclick="clearForm()" class="btn btn-primary">
                  Clear
                </button>
              </a>
              <p class="text-center mt-3">
                  Sudah memiliki akun? <a href="login.php">Silakan login</a>
              </p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .form-group {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .form-label {
    width: 150px; /* Adjust width as needed */
    text-align: right;
    margin-right: 10px;
  }

  .box-input {
    flex: 1;
  }
</style>
    
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

