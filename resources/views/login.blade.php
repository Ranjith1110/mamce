@extends('main.layouts.app')
<style>
    body {
        background-color: #f0f0f0 !important;
    }

    .loginForm {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    footer {
        display: none !important;
    }
</style>

<body>
    <div class="loginForm">
        <div class="text-center mb-4 bg-white">
            <img width="300px" class="mamce-logo m-0" src="{{asset('images/mamce-logo.png')}}" alt="">
        </div>
        <div class="card py-8 px-5 bg-white" style="width: 400px;">
            <h5 class="text-center mb-4">Sign in to MAMCE</h5>
            <form action="{{route('mamce.login')}}" id="login-form" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="keep-signed-in" name="keep-signed-in">
                    <label class="form-check-label" for="keep-signed-in">Keep Me Signed In</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary w-50 my-2">Sign in</button>
                    <button type="button" class="btn btn-link w-100">Forgot Password?</button>
                </div>
            </form>
        </div>
    </div>

</body>