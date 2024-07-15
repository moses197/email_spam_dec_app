<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>1 | Basik - Bootstrap 4 Web Application</title>
    <meta name="description" content="Responsive, Bootstrap, BS4">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"><!-- style -->
    <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
</head>

<body class="layout-row" style="background: rgb(18, 18, 146)">
    <div class="flex">
        <div class="w-xl w-auto-sm mx-auto py-5">
          
            <div class="card">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Welcome back</h5>
                        <p><small class="text-muted">Login to manage your account</small></p>
                        <form method="POST" action="{{ route('authenticate') }}">
                            @csrf
                            <div class="form-group"><label>Email</label><input type="email" name="email" class="form-control"
                                    placeholder="Enter email"></div>
                            <div class="form-group"><label>Password</label><input type="password" name="password" class="form-control"
                                    placeholder="Password">
                                <div class="my-3 text-right"><a href="forgot-password.html" class="text-muted">Forgot
                                        password?</a></div>
                            </div>
                            <div class="checkbox mb-3"><label class="ui-check"><input type="checkbox"><i></i> Remember
                                    me</label></div><button type="submit" class="btn btn-primary mb-4">Sign in</button>
                            <div>Do not have an account? <a href="/signup" class="text-primary">Sign up</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/site.min.js"></script>
</body>

</html>
