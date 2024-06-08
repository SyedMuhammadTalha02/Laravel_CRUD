<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @include('layout/header');
    <form action="{{url('/')}}/register" method="POST">
        @csrf
        <div class="container">
            <h1 class="text-center">Registration</h1>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                <span class ='text-danger'>
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{old('email')}}">
                <span class ='text-danger'>
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Passsword</label>
                <input type="password" name="pass" class="form-control">
                <span class ='text-danger'>
                    @error('pass')
                        {{$message}}
                    @enderror
                </span>
            </div> <br>
            <button class="btn btn-info">
                Submit
            </button>
        </div>
    </form>
  </body>
</html>