<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($_POST["submit"])) {
        if ($username == "Akaisuri90" && $password == "Iprefertousethis321") {
            header("Location: pixiv.html");
            exit;
        } else {
            $error = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Pixiv</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        * {
            font-family: "Helvetica";
        }

        .float-right {
            /* untuk membuat "create an account" button bisa berada di bagian kanan*/
            float: right;
            margin: 20px;
        }

        .btn-half-round {
            border-radius: 20px;
        }

        .form-control {
            background-color: whitesmoke;
            border: none;
        }

        .btn-apple {
            /* mengatur button yang akan digunakan untuk login lewat apple*/
            background-color: black;
            color: white;
            padding: 10px;
            background-image: url("pngkey.com-apple-logo-png-112773.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 60%;
            background-position-x: 25px;
        }

        .btn-google {
            /* mengatur button yang akan digunakan untuk login lewat google*/
            padding: 10px;
            background-image: url("google-logo-9808.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 60%;
            background-position-x: 25px;
        }

        .btn-twitter {
            /* mengatur button yang akan digunakan untuk login lewat twitter*/
            padding: 10px;
            background-image: url("logo-twitter-png-5860.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 60%;
            background-position-x: 25px;
        }

        .btn-facebook {
            /* mengatur button yang akan digunakan untuk login lewat facebook*/
            padding: 10px;
            background-image: url("logo-facebookpng-32202.png");
            background-repeat: no-repeat;
            background-position: left center;
            background-size: auto 60%;
            background-position-x: 25px;
        }

        .btn-login {
            padding: 10px;
        }

        .marginbwh {
            margin-bottom: 50px;
        }
    </style>
</head>

<body style="background-image: url(61212883_p0.jpg)">
    <header class="main-header">
        <button type="button" class="btn btn-info plus float-right">Create an account</button>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div>
                <div class="col-md-4" style=" width: 392px; height: 750px; background-color: white; border-radius: 30px; padding: 20px; margin-top: 170px;">
                    <!--mengatur agar bagian form bisa memiliki background warna putih alih-alih mengikuti yang ada-->
                    <p class="marginbwh"> </p>
                    <div class="text-center">
                        <img src="https://s.pximg.net/accounts/assets/6bea8becc71d27cd20649ffbc047e456.svg" style="margin:auto">
                    </div>
                    <p class="text-center" style="font-weight: bold;">Spice up your creating process</p>
                    <p class="marginbwh"> </p>
                    <?php if (isset($error)) : ?>
                        <p style="color: red;">Please check that your e-mail address or pixiv ID and password are correct.</p>
                    <?php endif; ?>
                    <?php if (isset($welcome)) : ?>
                        <p>Welcome!</p>
                    <?php endif; ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div style="margin-bottom: 5px;">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Email Address or Pixiv ID">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-half-round btn-login" name="submit">Login</button>
                    </form>

                    <p class="text-center"><a href="https://accounts.pixiv.net/password/reset?return_to=https%3A%2F%2Faccounts.pixiv.net%2Flogin%3Freturn_to%3Dhttps%253A%252F%252Fwww.pixiv.net%252Fen%252F%26lang%3Den%26source%3Dpc%26view_type%3Dpage">Forgot Password?</a></p>
                    <!--apabila user lupa password akunnya-->
                    <button type="button" class="btn btn-default btn-block btn-half-round btn-apple" onclick="window.location.href='https://appleid.apple.com/auth/authorize?client_id=net.pixiv.myaccount.web&redirect_uri=https%3A%2F%2Faccounts.pixiv.net%2Fpigya%2Fproxy%2Fcallback%2Fapple&response_type=code&scope=name%20email&response_mode=form_post&state=BX25Oi9CADtgY5Di_hWywE6hLy8woPVwx-xLIB-ZxmM&nonce=aCEJjAA7Mxx5UOdXg2cU7FxgHxHj3_0kZe-iWsllj_U'">Continue with
                        Apple</button>
                    <!--apabila user ingin login menggunakan akun apple nya-->
                    <button type="button" class="btn btn-default btn-block btn-half-round btn-google" onclick="window.location.href='https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=89993436389-1pelpgj1khceuuo3i0g19re3smd7e0q1.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Faccounts.pixiv.net%2Fpigya%2Fproxy%2Fcallback%2Fgoogleplus&state=jOJUrzsi4S4GgDDJ9gqAvO4EA-ywSEggfLsJmNI70Gk&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile&prompt=select_account&service=lso&o2v=1&flowName=GeneralOAuthFlow'">Continue with
                        Google</button>
                    <!--apabila user ingin login menggunakan akun google nya-->
                    <button type="button" class="btn btn-default btn-block btn-half-round btn-twitter" onclick="window.location.href='https://api.twitter.com/oauth/authorize?oauth_token=kctCwgAAAAAAG_4NAAABh4xAsdI'">Continue with
                        Twitter</button>
                    <!--apabila user ingin login menggunakan akun twitter nya-->
                    <button type="button" class="btn btn-default btn-block btn-half-round btn-facebook" onclick="window.location.href='https://web.facebook.com/login.php/?_rdc=1&_rdr'">Continue with
                        Facebook</button>
                    <!--apabila user ingin login menggunakan akun facebook nya-->
                    <p class="marginbwh"> </p>
                    <p class="marginbwh"> </p>
                    <p class="marginbwh"> </p>
                    <p class="text-center font-size">This site is protected by reCAPTCHA Enterprise and the</p>
                    <p class="text-center"><a href="https://policies.google.com/privacy">Google privacy</a> and <a href="https://policies.google.com/terms">Terms of Services</a> apply</p>
                    <!--jika diklik maka akan membuka hukum privasi google dan terms of service-->
                </div>
            </div>
        </div>

        <footer>

        </footer>
</body>

</html>