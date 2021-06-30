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
        <h1>Update User</h1><br>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label class="col-sm-3"><b>Email</b></label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3"><b>Password</b></label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3"><b>Current Team</b></label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="current_team_id" value="{{ $user->current_team_id }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
