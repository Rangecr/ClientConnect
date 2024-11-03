<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>clientconnect</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body style="background: repeating-linear-gradient(0deg, var(--bs-primary) 0%, white 100%);">
    <section class="position-relative py-4 py-xl-5" style="padding-top: 0px;margin-top: 90px;">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4" style="width: 625.987px;">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4" style="color: rgb(0,0,0);font-weight: bold;margin-bottom: 0px!important;">Reset your password</h2>
                            <p style="text-align: center;">Enter the email address you used to register with.</p>
                            <form id="email" action="{{ route('enteremail') }}" method="post">
                                @csrf
                                <div class="mb-3"><input class="form-control" type="email" id="email-2" name="email" placeholder="Email Address" required=""></div>
                            </form>
                            <div class="row">

                                @if (session()->has('alert'))
                                @if (session('alert') === 'noemail')
                                <div class="col">
                                    <p style="color: var(--bs-form-invalid-color);font-weight: bold;">Email doesn't exist!</p>
                                </div>
                                @endif
                                @endif
                            </div>
                            <div class="row">
                                <div class="col"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(237,237,237);border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;color: rgb(78,115,223);">Back to log in</button></div>
                                <div class="col"><button form="email" class="btn btn-primary d-block w-100" type="submit">Enter</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>