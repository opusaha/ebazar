<head>
    @php $settings= \App\Models\WebsiteSettings::first(); @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$settings->name}}:: Login or Register</title>
    <!-- CUSTOM CSS -->
    @include('vandor.layout.loginstyle')
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{route('admin.login')}}" class="sign-in-form" method="POST">@csrf
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="email" autocomplete="username" placeholder="Username"
                            required="yes">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" autocomplete="current-password" placeholder="Password"
                            id="id_password" required="yes">
                        <i class="far fa-eye" id="togglePassword" style="cursor: pointer;"></i>
                    </div>
                    <a class="pass" href="#">Forgot your password?</a>
                    <input type="submit" value="Sign in" class="btn solid">

                    <div class="social-media">
                        <a class="icon-mode" onclick="toggleTheme('dark');"><i class="fas fa-moon"></i></a>
                        <a class="icon-mode" onclick="toggleTheme('light');"><i class="fas fa-sun"></i></a>
                    </div>
                    <p class="text-mode">Change theme</p>
                </form>
                <form action="{{route('admin.store')}}" class="sign-up-form" method="POST">@csrf
                    <h2 class="title">Register as Seller</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" autocomplete="username" placeholder="Username"
                            required="yes">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" autocomplete="email" placeholder="Email" required="yes">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" autocomplete="current-password" placeholder="Password"
                            id="id_reg" required="yes">
                        <i class="far fa-eye" id="toggleReg" style="cursor: pointer;"></i>
                    </div>
                    {{-- <a href="#" class="key use-keyboard-input">Virtual keyboard</a> --}}
                    <a href="https://priva.reversecode.repl.co/tools/pass.html" class="pass" target="_blank">Generate
                        a strong password</a>
                    <label class="check">
                        <input type="checkbox" checked="checked">
                        <span class="checkmark">I accept the <a href="terms.html">terms and services</a></span>
                    </label>
                    <input type="submit" value="Create account" class="btn solid">
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <img src="{{ asset($settings->logo) }}" class="image" alt="" height="200">
                <div class="content">
                    <h3>You don't have an account?</h3>
                    <p>Create your account right now to follow people and like publications</p>
                    <button class="btn transparent" id="sign-up-btn">Register</button>
                </div>
                <div></div>
                <div></div>
            </div>

            <div class="panel right-panel">
                <img src="{{ asset($settings->logo) }}" class="image" alt="" height="200">
                <div class="content">
                    <h3>Already have an account?</h3>
                    <p>Login to see your notifications and post your favorite photos</p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <div></div>
            </div>
        </div>
    </div>

    @include('vandor.layout.loginscript')
</body>

</html>
