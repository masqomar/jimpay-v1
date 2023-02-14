<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Login Form - JIMPay</title>
    <meta name="description" content="Kopkar JIM Mobile App">
    <meta name="keywords" content="kopkar jim, jimpay, joperasi karyawan jbi, kampung inggris, kampung inggris lc, kampung inggris pare" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->


    <!-- App Capsule -->
    <div id="appCapsule" class="pt-0">

        <div class="login-form mt-1">
            <div class="section">
                <img src="assets/img/sample/photo/logo.png" alt="image" class="form-image">
            </div>
            <div class="section mt-1">
                <h1>Get started</h1>
                <h4>Fill the form to log in</h4>
            </div>


            <div class="section mt-1 mb-5">
                <form action="{{url('proses_login')}}" method="POST" id="logForm">
                    {{ csrf_field() }}

                    <div class="form-group">
                        @error('login_gagal')
                        {{-- <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                        </span> --}}
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{-- <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span> --}}
                            <span class="alert-inner--text"><strong>Warning!</strong> {{ $message }}</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
                    </div>

                    <div class="form-group boxed">

                        <div class="input-wrapper">
                            <input type="email" class="form-control" id="email1" name="email" placeholder="Email address">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                        @if($errors->has('email'))
                        <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password">

                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                            @if($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-links mt-2">
                        <div>
                            <a href="page-forgot-password.html" class="text-muted">Forgot Password?</a>
                        </div>
                        <div><input type="checkbox" id="checkbox">Show Password</div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
    <!-- * App Capsule -->



    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script>
        $(document).ready(function() {
            $('#checkbox').on('change', function() {
                $('#password1').attr('type', $('#checkbox').prop('checked') == true ? "text" : "password");
            });
        });
    </script>




</body>

</html>