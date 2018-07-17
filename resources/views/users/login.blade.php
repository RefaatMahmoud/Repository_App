<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>تطبيق المخزن</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<body>
<div class="login">
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="loginContent card">
                    <div class="card-header">
                        تسجيل دخول المسؤولين عن المخزن
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>البريد الإلكترونى</label>
                                <input type="email" class="form-control" name="email" placeholder="من فضلك أدخل البريد الإلكترونى" required>
                            </div>
                            <div class="form-group">
                                <label>كلمة المرور</label>
                                <input id="password" type="password" class="form-control" placeholder="من فضلك ادخل كلمة المرور" name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">
                                    تسجيل الدخول
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>