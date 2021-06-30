<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body class="@yield('classes_body')" @yield('body_data')>
    <div class="container">
        <h1>Detail</h1><br>
        <div class="card-body">
            <div class="form-group row">
                <label class="col-sm-3"><b>ID</b></label>
                <div class="col-sm-9">
                    <span>{{ $user->id }}</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3"><b>Email</b></label>
                <div class="col-sm-9">
                    <span>{{ $user->email }}</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3"><b>Password</b></label>
                <div class="col-sm-9">
                    <span>{{ $user->password }}</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3"><b>Remember Token</b></label>
                <div class="col-sm-9">
                    <span>{{ $user->remember_token }}</span>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3"><b>Current Team</b></label>
                <div class="col-sm-9">
                    <span>{{ $user->current_team_id }}</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
