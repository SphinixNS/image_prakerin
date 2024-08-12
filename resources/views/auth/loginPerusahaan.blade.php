<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link href="{{ asset('/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/frontend/css/bootstrap-icons.css') }}" rel="stylesheet">
</head>

<body class="body-login">
    <div class="login-container">
        <div class="login-box">
            <div class="login-left">
                <div class="login-icon" href="#">
                    <i class="bi-back" style="color: black"></i>
                    <span style="color: black">PRAKERIN</span>
                </div>
                <h2 class="login-text">Selamat datang di Prakerin</h2>
                <p>Selesaikan Semua Yang Telah Dilakukan Dengan Cara Yang Terbaik.</p>
                <form action="/auth" method="POST">
                    @csrf
                    <div class="input-group">
                        <i class="bi bi-person"></i>
                        <input type="text" name="email" placeholder="Username" value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <i class="bi bi-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group" style="font-size:14px;">
                        <input type="checkbox" class="form-check-input" id="show-password"> Show Password
                    </div>
                    <a href="#" class="forgot-password">Lupa kata sandi?</a>
                    <button type="submit" class="login-btn-perusahaan">Login</button>
                    <a href="/" class="main-page-btn-perusahaan">Ke Halaman Utama</a>
                </form>
            </div>
            <div class="login-right">
                <img src="{{ asset('frontend/img/company.jpg') }}" alt="Right Image">
            </div>
        </div>
    </div>

    <script>
        var passwordInput = document.getElementById("password");
        var showPasswordCheckbox = document.getElementById("show-password");

        showPasswordCheckbox.addEventListener("change", function() {
            var type = this.checked ? "text" : "password";
            passwordInput.setAttribute("type", type);
        });
    </script>

</body>

</html>
