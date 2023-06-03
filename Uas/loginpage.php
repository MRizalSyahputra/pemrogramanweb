<?php
session_start();
if (isset($_POST["username"]) && isset($_POST["password"])) { //jika pada form sudah diisi username dan password

  $username = $_POST["username"]; //masukan pada kolom username akan didefinisikan sebagai username
  $password = $_POST["password"]; //masukan pada kolom password akan didefinisikan sebagai password

  if (isset($_POST["submit"])) { //jika tombol login sudah ditekan, jalankan seleksi berikut
    if ($username == "Dominique" && $password == "idkman") { //jika username dan password yang dimasukkan sesuai dengan ini
      $_SESSION["username"] = $username; // menyimpan username ke session
      $_SESSION["login_time"] = time(); // menyimpan waktu login ke session
      header("Location: Site.php"); // redirect ke halaman Studikasushalaman.php
    } else { //kalau berbeda
      echo "<p align=center> <font color=red size=5px> Login gagal. ID/Username atau Password salah."; //akan muncul pesan kesalahan
    }
  }
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--javascript-->
    <script type="text/javascript">
      window.onload = function() {
        const form = document.getElementById('loginForm');
        const username = document.getElementById('username');
        const password = document.getElementById('password');

        form.addEventListener('submit', function(event) {
          let isValid = true;

          if (username.value === '') {
            alert('Username harus diisi!');
            username.focus();
            isValid = false;
            event.preventDefault();
          } else if (!/^[a-zA-Z]+$/.test(username.value)) {
            alert('Username hanya boleh mengandung huruf!');
            username.select();
            isValid = false;
            event.preventDefault();
          }

          if (password.value === '') {
            alert('Password harus diisi!');
            password.focus();
            isValid = false;
            event.preventDefault();
          } else if (!/^[a-zA-Z]+$/.test(password.value)) {
            alert('Password hanya boleh mengandung huruf!');
            password.select();
            isValid = false;
            event.preventDefault();
          }

          return isValid;
        });
      };
    </script>
    <title>Login Page</title>
  </head>

  <body>
    <header>
      <h1>
        <p align="center" style="margin-top: 100px;">Login Form</p>
      </h1>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form id="loginForm" method="post" action="<?php ($_SERVER['PHP_SELF']); ?>">
            <div class="row mb-3">
              <input type="text" id="username" name="username" placeholder="Username">
            </div>
            <div class="row mb-3">
              <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-half-round btn-login" name="submit">Login</button>
          </form>
        </div>
      </div>
    </div>
  </body>

  </html>
<?php }
?>