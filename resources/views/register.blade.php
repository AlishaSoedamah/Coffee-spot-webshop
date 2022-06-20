<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" src="/css/app.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Register</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form class="form-control" action="/register" method="POST">
                    @csrf {{ csrf_field() }}
                    <div class="row">
                        <div class="row-6">
                            <label class="form-label" for="username">Username</label>
                            <input name="name" type="text">
                        </div>
                        <div class="row-6">
                            <label class="form-label" for="email">Email</label>
                            <input name="email" type="email">
                        </div>
                        <div class="row-6">
                            <label class="form-label" for="password">Password</label>
                            <input name="password" type="password">
                            <input type="submit" class=" mb-4 mt-4 btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>