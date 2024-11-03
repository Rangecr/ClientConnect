<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-gradient-primary"
    style="background: repeating-linear-gradient(0deg, var(--bs-primary) 0%, white 100%);">
    <div class="container" style="margin-top: 36.8px;">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;dogs/image3.jpeg&quot;);"><img
                                        alt="website, web, browser" width="100" height="80"
                                        src="assets/img/gd2a1dd1f72cd4654a9d35c4c0fabc9edf3ae0bd0ff83d74b942980e91423190e1c4bcda388f1549ffce57d3cc528b7fda40b27747d2bc2e3a51b26d8c9aae103_640.jpg"
                                        style="width: 100%;height: 100%;"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>
                                    <form action="/login" class="user" method="post">
                                        @csrf
                                        <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                aria-describedby="emailHelp" placeholder="Enter Email Address..."
                                                name="email" value="{{ old('email') }}" required=""></div>
                                        <div class="mb-3"><input class="form-control form-control-user"
                                                type="password" placeholder="Password" name="password" minlength="8"
                                                maxlength="12" required="">
                                        </div>

                                        @if (session()->has('alert'))
                                        @if (session('alert') === 'error')
                                        <p style="color: var(--bs-danger);font-weight: bold;font-size: 13px;">Invalid
                                            Email or Password</p>
                                        @endif 
                                        @endif

                                        <button class="btn btn-primary d-block btn-user w-100"
                                            type="submit">Login</button>

                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="{{ route('entry.reset_pass_1') }}">Forgot
                                            Password?</a></div>
                                    <div class="text-center"><a class="small"
                                            href="{{ route('entry.register') }}">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
