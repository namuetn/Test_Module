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
        <h1>Dashboard</h1><br>
        <a href="{{ route('user.create') }}"><button type="button" class="btn btn-primary">Create</button></a>
        <form action="" class="d-inline">
            <div class="form-group row float-right">
                @csrf
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="search" value="{{ $search }}">
                </div>
                <button type="submit" class="btn btn-primary col-sm-3">Search</button>
            </div>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->password }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}"><button type="button" class="btn btn-secondary">Edit</button></a>
                        <a href="{{ route('user.show', $user->id) }}"><button type="button" class="btn btn-info">Show</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
