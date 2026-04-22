<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php
        echo app("Illuminate\Foundation\Vite")
        ([
            "resources/css/app.scss",
            "resources/js/app.js"
        ]);
    ?>
</head>
<body>
    <h2 class="text-center pt-4">Welcome to Login Page</h2>
]   <div class="container">
        <div class="row">
            <div class="col-6 bg-secondary d-flex justify-content-center ">
                <img src="login.jpg" alt="">
            </div>
            <div class="col-6 align-items-center justify-content-center">
                <div class="card p-4">
                    <h2 class="text-primary">Login</h2>
                    <form action="">
                        <div class="my-2">
                            <label for="">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="my-2">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('register.view') }}" class="btn btn-secondary">Register</a>
                            <a href="{{ route('home') }}" class="btn btn-primary text-white">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>