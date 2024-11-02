<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-gradient-primary" style="background: repeating-linear-gradient(0deg, var(--bs-primary) 0%, white 100%);">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;dogs/image2.jpeg&quot;);"><img alt="template, layout, website" src="{{ asset('assets/img/gcc78c4cda78f0d3207b7d245b1a62096a1cd6ebc9b3bffecf300c58a6536a83d0a63a77a2a67fecbf29b4c98c5cb1045eddcf82e3d9899ceda8961c8d6b28c73_640.png') }}" style="width: 100%;height: 100%;"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user">
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Name" name="name" required=""></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail-2" aria-describedby="emailHelp" placeholder="Email Address" name="email" required=""></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="tel" id="exampleInputEmail-1" aria-describedby="emailHelp" placeholder="Phone Number" name="p_numb" minlength="8" maxlength="15" required=""></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0" style="width: 100%;"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password" required="" minlength="8" maxlength="12"></div>
                                </div><select class="form-select" style="margin-bottom: 16px;">
                                    <optgroup label="Role">
                                        <option value="admin" selected="">Admin</option>
                                        <option value="support">Support</option>
                                    </optgroup>
                                </select><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
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