<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UWU Wedding | Patner Your Wedding</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Sign Up</h1>

                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="text" class="form-control form-control-xl" placeholder="Nama" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="email" class="form-control form-control-xl" placeholder="Email"  name="email" :value="old('email')" required />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="password" class="form-control form-control-xl" placeholder="Password" name="password" required autocomplete="new-password" />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="password" class="form-control form-control-xl" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
<br>
                        <p>Data Calon Pengantin Wanita</p>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" name="cpw_name" :value="old('cpw_name')" required autofocus autocomplete="cpw_name" />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="text" class="form-control form-control-xl" placeholder="Nama Panggilan" name="cpw_panggilan" :value="old('cpw_name')" required autofocus autocomplete="cpw_name" />
                        </div>

                        <br>
                        <p>Data Calon Pengantin Pria</p>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="text" class="form-control form-control-xl" placeholder="Nama Lengkap" name="cpp_name" :value="old('cpw_name')" required autofocus autocomplete="cpw_name" />
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <x-jet-input type="text" class="form-control form-control-xl" placeholder="Nama Panggilan" name="cpp_panggilan" :value="old('cpw_name')" required autofocus autocomplete="cpw_name" />
                        </div>



                        <x-jet-button class="btn btn-primary btn-block btn-lg shadow-lg mt-5"> {{ __('Register') }}</x-jet-button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}"
                                class="font-bold">Log
                                in</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>