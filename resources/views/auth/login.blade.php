

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birlikte Gelişim | Giriş Yap</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginregister/css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
       

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="/loginregister/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('register') }}" style="font-size:16px;" class="signup-image-link">Hesap Olustur</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">GIRIS YAP</h2>
                        <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
            @csrf
              <div class="form-group">
                                <label for="email" value="{{ __('E-Mail Adresi') }}" ><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-mail Adresi"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass" value="{{ __('Şifre') }}"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Sifre"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Beni Hatırla</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Giris Yap"/>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="loginregister/vendor/jquery/jquery.min.js"></script>
    <script src="loginregister/js/main.js"></script>
</body>
</html>