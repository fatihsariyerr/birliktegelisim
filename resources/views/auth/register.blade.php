
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Birlikte Gelişim | Kayıt Ol</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="loginregister/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="loginregister/css/style.css">
</head>
<body>

    <div class="main" style="padding-bottom:0px;">
        <section style="margin-bottom: 0px;" class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Kayıt Ol</h2>
                        <form method="POST" class="register-form" id="register-form"action="{{ route('register') }}">
            @csrf
              <div class="form-group">
                                <label for="name" value="{{ __('Ad Soyad') }}"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Ad Soyad"/>
                            </div>
                            <div class="form-group" value="{{ __('E-mail Adresi') }}">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="E-Mail Adresi"/>
                            </div>
<div class="form-group">
                                <label for="phone" value="{{ __('Telefon Numarası') }}"><i class="zmdi zmdi-smartphone-iphone"></i></label>
                                <input type="text" name="phone" id="phone" placeholder="Telefon Numarası"/>
                            </div>
				 <div class="form-group">
                                <label for="address" value="{{ __('Yaşadığı İl') }}"><i class="zmdi zmdi-home"></i></label>
                                <input type="text" name="address" id="address" placeholder="Yasadıgınız Il"/>
                            </div>
 				
                            <div class="form-group">
                                <label for="password" value="{{ __('Şifre') }}"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Sifre"/>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" value="{{ __('Şifreyi Doğrula') }}"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Sifreyi yeniden giriniz"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Kayıt Ol"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="loginregister/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="{{ route('login') }}" style="font-size:16px;" class="signup-image-link">Zaten Kayıtlı Mısınız ?</a>
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