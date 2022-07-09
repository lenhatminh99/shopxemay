<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="public/frontend/login-resource/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/frontend/login-resource/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="public/frontend/login-resource/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/frontend/login-resource/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="public/frontend/login-resource/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/frontend/login-resource/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="public/frontend/login-resource/css/util.css">
    <link rel="stylesheet" type="text/css" href="public/frontend/login-resource/css/main.css">
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="public/frontend/login-resource/images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{ URL::to('/login-customer') }}" method="post">
                    {{ csrf_field() }}
                    <span class="login100-form-title">
                        Đăng nhập thành viên
                    </span>
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="wrap-input100 validate-input" data-validate="email theo dạng abc123@gmail.com">
                        <input class="input100" type="text" name="customer_email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Không được bỏ trống">
                        <input class="input100" type="password" name="customer_password" placeholder="Mật khẩu">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Đăng nhập
                        </button>
                    </div>

                    <div class="text-center p-t-12">
                        <a class="txt2" href="#">
                            Quên mật khẩu
                        </a>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{ URL::to('/register') }}">
                            Tạo tài khoản
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!--===============================================================================================-->
    <script src="public/frontend/login-resource/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="public/frontend/login-resource/vendor/bootstrap/js/popper.js"></script>
    <script src="public/frontend/login-resource/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="public/frontend/login-resource/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="public/frontend/login-resource/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="public/frontend/login-resource/js/main.js"></script>

</body>

</html>
