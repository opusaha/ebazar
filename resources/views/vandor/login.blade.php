<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seller :: Access</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: "Montserrat", sans-serif;
            font-size: 12px;
            line-height: 1em;
        }

        button {
            background-color: transparent;
            padding: 0;
            border: 0;
            outline: 0;
            cursor: pointer;
        }

        input {
            background-color: transparent;
            padding: 0;
            border: 0;
            outline: 0;
        }

        input[type="submit"] {
            cursor: pointer;
        }

        input::-webkit-input-placeholder {
            font-size: 0.85rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 0.1rem;
            color: #ccc;
        }

        input::-moz-placeholder {
            font-size: 0.85rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 0.1rem;
            color: #ccc;
        }

        input:-ms-input-placeholder {
            font-size: 0.85rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 0.1rem;
            color: #ccc;
        }

        input::-ms-input-placeholder {
            font-size: 0.85rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 0.1rem;
            color: #ccc;
        }

        input::placeholder {
            font-size: 0.85rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            letter-spacing: 0.1rem;
            color: #ccc;
        }

        /**
 * Bounce to the left side
 */
        @-webkit-keyframes bounceLeft {
            0% {
                -webkit-transform: translate3d(100%, -50%, 0);
                transform: translate3d(100%, -50%, 0);
            }

            50% {
                -webkit-transform: translate3d(-30px, -50%, 0);
                transform: translate3d(-30px, -50%, 0);
            }

            100% {
                -webkit-transform: translate3d(0, -50%, 0);
                transform: translate3d(0, -50%, 0);
            }
        }

        @keyframes bounceLeft {
            0% {
                -webkit-transform: translate3d(100%, -50%, 0);
                transform: translate3d(100%, -50%, 0);
            }

            50% {
                -webkit-transform: translate3d(-30px, -50%, 0);
                transform: translate3d(-30px, -50%, 0);
            }

            100% {
                -webkit-transform: translate3d(0, -50%, 0);
                transform: translate3d(0, -50%, 0);
            }
        }

        /**
 * Bounce to the left side
 */
        @-webkit-keyframes bounceRight {
            0% {
                -webkit-transform: translate3d(0, -50%, 0);
                transform: translate3d(0, -50%, 0);
            }

            50% {
                -webkit-transform: translate3d(calc(100% + 30px), -50%, 0);
                transform: translate3d(calc(100% + 30px), -50%, 0);
            }

            100% {
                -webkit-transform: translate3d(100%, -50%, 0);
                transform: translate3d(100%, -50%, 0);
            }
        }

        @keyframes bounceRight {
            0% {
                -webkit-transform: translate3d(0, -50%, 0);
                transform: translate3d(0, -50%, 0);
            }

            50% {
                -webkit-transform: translate3d(calc(100% + 30px), -50%, 0);
                transform: translate3d(calc(100% + 30px), -50%, 0);
            }

            100% {
                -webkit-transform: translate3d(100%, -50%, 0);
                transform: translate3d(100%, -50%, 0);
            }
        }

        /**
 * Show Sign Up form
 */
        @-webkit-keyframes showSignUp {
            100% {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes showSignUp {
            100% {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        /**
 * Page background
 */
        .user {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: url({{asset('storage/2.jpg')}}) no-repeat center;
            background-size: cover;
        }

        .user_options-container {
            position: relative;
            width: 80%;
        }

        .user_options-text {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            width: 100%;
            background-color: transparent;
            border-radius: 3px;
        }

        /**
 * Registered and Unregistered user box and text
 */
        .user_options-registered,
        .user_options-unregistered {
            width: 50%;
            padding: 75px 45px;
            color: #000;
            font-weight: 300;
        }

        .user_registered-title,
        .user_unregistered-title {
            margin-bottom: 15px;
            font-size: 1.66rem;
            line-height: 1em;
        }

        .user_unregistered-text,
        .user_registered-text {
            font-size: 0.83rem;
            line-height: 1.4em;
        }

        .user_registered-login,
        .user_unregistered-signup {
            margin-top: 30px;
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 10px 30px;
            color: #000;
            text-transform: uppercase;
            line-height: 1em;
            letter-spacing: 0.2rem;
            -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
        }

        .user_registered-login:hover,
        .user_unregistered-signup:hover {
            color: rgba(34, 34, 34, 0.85);
            background-color: #ccc;
        }

        /**
 * Login and signup forms
 */
        .user_options-forms {
            position: absolute;
            top: 50%;
            left: 30px;
            width: calc(50% - 30px);
            min-height: 420px;
            background-image: linear-gradient(45deg, #ff7d32, #2cffca);
            border-radius: 3px;
            box-shadow: 2px 0 15px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0);
            -webkit-transition: -webkit-transform 0.4s ease-in-out;
            transition: -webkit-transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out;
            transition: transform 0.4s ease-in-out, -webkit-transform 0.4s ease-in-out;
        }

        .user_options-forms .user_forms-login {
            -webkit-transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
            transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
        }

        .user_options-forms .forms_title {
            margin-bottom: 45px;
            font-size: 1.5rem;
            font-weight: 500;
            line-height: 1em;
            text-transform: uppercase;
            color: #360e0c;
            letter-spacing: 0.1rem;
        }

        .user_options-forms .forms_field:not(:last-of-type) {
            margin-bottom: 20px;
        }

        .user_options-forms .forms_field-input {
            width: 100%;
            border-bottom: 1px solid #ccc;
            padding: 6px 20px 6px 6px;
            font-family: "Montserrat", sans-serif;
            font-size: 1rem;
            font-weight: 300;
            color: gray;
            letter-spacing: 0.1rem;
            -webkit-transition: border-color 0.2s ease-in-out;
            transition: border-color 0.2s ease-in-out;
        }

        .user_options-forms .forms_field-input:focus {
            border-color: gray;
        }

        .user_options-forms .forms_buttons {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
            -webkit-box-align: center;
            align-items: center;
            margin-top: 35px;
        }

        .user_options-forms .forms_buttons-forgot {
            font-family: "Montserrat", sans-serif;
            letter-spacing: 0.1rem;
            color: #ccc;
            text-decoration: underline;
            -webkit-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
        }

        .user_options-forms .forms_buttons-forgot:hover {
            color: #b3b3b3;
        }

        .user_options-forms .forms_buttons-action {
            background-color: #e8716d;
            border-radius: 3px;
            padding: 10px 35px;
            font-size: 1rem;
            font-family: "Montserrat", sans-serif;
            font-weight: 300;
            color: #000;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
            -webkit-transition: background-color 0.2s ease-in-out;
            transition: background-color 0.2s ease-in-out;
        }

        .user_options-forms .forms_buttons-action:hover {
            background-color: #e14641;
        }

        .user_options-forms .user_forms-signup,
        .user_options-forms .user_forms-login {
            position: absolute;
            top: 70px;
            left: 40px;
            width: calc(100% - 80px);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, -webkit-transform 0.5s ease-in-out;
            transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, -webkit-transform 0.5s ease-in-out;
            transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.5s ease-in-out;
            transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
        }

        .user_options-forms .user_forms-signup {
            -webkit-transform: translate3d(120px, 0, 0);
            transform: translate3d(120px, 0, 0);
        }

        .user_options-forms .user_forms-signup .forms_buttons {
            -webkit-box-pack: end;
            justify-content: flex-end;
        }

        .user_options-forms .user_forms-login {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            opacity: 1;
            visibility: visible;
        }

        /**
 * Triggers
 */
        .user_options-forms.bounceLeft {
            -webkit-animation: bounceLeft 1s forwards;
            animation: bounceLeft 1s forwards;
        }

        .user_options-forms.bounceLeft .user_forms-signup {
            -webkit-animation: showSignUp 1s forwards;
            animation: showSignUp 1s forwards;
        }

        .user_options-forms.bounceLeft .user_forms-login {
            opacity: 0;
            visibility: hidden;
            -webkit-transform: translate3d(-120px, 0, 0);
            transform: translate3d(-120px, 0, 0);
        }

        .user_options-forms.bounceRight {
            -webkit-animation: bounceRight 1s forwards;
            animation: bounceRight 1s forwards;
        }

        /**
 * Responsive 990px
 */
        @media screen and (max-width: 990px) {
            .user_options-forms {
                min-height: 350px;
            }

            .user_options-forms .forms_buttons {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                flex-direction: column;
            }

            .user_options-forms .user_forms-login .forms_buttons-action {
                margin-top: 30px;
            }

            .user_options-forms .user_forms-signup,
            .user_options-forms .user_forms-login {
                top: 40px;
            }

            .user_options-registered,
            .user_options-unregistered {
                padding: 50px 45px;
            }
        }
    </style>
</head>

<body>

    <section class="user">
        <div class="user_options-container">
            <div class="user_options-text">
                <div class="user_options-unregistered">
                    <h2 class="user_unregistered-title">Don't have an account?</h2>
                    <p class="user_unregistered-text">Join as eBazar Seller. Biggest selling platform of the world.</p>
                    <button class="user_unregistered-signup" id="signup-button">Sign up</button>
                </div>

                <div class="user_options-registered">
                    <h2 class="user_registered-title">Have an account?</h2>
                    <p class="user_registered-text">Sign in to sell your product. eBazar is the largest ecommarce platform of the world.</p>
                    <button class="user_registered-login" id="login-button">Login</button>
                </div>
            </div>

            <div class="user_options-forms" id="user_options-forms">
                <div class="user_forms-login">
                    <h2 class="forms_title">Login</h2>
                    <form class="forms_form" method="POST" action="{{route('seller.login')}}">@csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="email" placeholder="Email" class="forms_field-input" required
                                    autofocus  name="email"/>
                            </div>
                            <div class="forms_field">
                                <input type="password" placeholder="Password" class="forms_field-input" required  name="password"/>
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                            <input type="submit" value="Log In" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
                <div class="user_forms-signup">
                    <h2 class="forms_title">Sign Up</h2>
                    <form class="forms_form" method="POST" action="{{route('seller.store')}}">@csrf
                        <fieldset class="forms_fieldset">
                            <div class="forms_field">
                                <input type="text" placeholder="Full Name" class="forms_field-input" required  name="name"/>
                            </div>
                            <div class="forms_field">
                                <input type="email" placeholder="Email" class="forms_field-input" required name="email"/>
                            </div>
                            <div class="forms_field">
                                <input type="password" placeholder="Password" class="forms_field-input" required name="password"/>
                            </div>
                        </fieldset>
                        <div class="forms_buttons">
                            <input type="submit" value="Sign up" class="forms_buttons-action">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        /**
         * Variables
         */
        const signupButton = document.getElementById('signup-button'),
            loginButton = document.getElementById('login-button'),
            userForms = document.getElementById('user_options-forms')

        /**
         * Add event listener to the "Sign Up" button
         */
        signupButton.addEventListener('click', () => {
            userForms.classList.remove('bounceRight')
            userForms.classList.add('bounceLeft')
        }, false)

        /**
         * Add event listener to the "Login" button
         */
        loginButton.addEventListener('click', () => {
            userForms.classList.remove('bounceLeft')
            userForms.classList.add('bounceRight')
        }, false)
    </script>
</body>

</html>