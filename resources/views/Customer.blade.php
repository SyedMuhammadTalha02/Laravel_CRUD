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
    
    <form action="{{$url}}" method="POST">
        @csrf
        <div class="container">
            <h1 class="text-center">{{$title}}</h1>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}{{$customer->name}}">
                    <span class ='text-danger'>
                        @error('name')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control " value="{{old('email')}}{{$customer->email}}">
                    <span class ='text-danger'>
                        @error('email')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Passsword</label>
                    <input type="password" name="pass" class="form-control" value="{{$customer->password}}">
                    <span class ='text-danger'>
                        @error('pass')
                            {{$message}}
                        @enderror
                    </span>
                </div>

                <div class="form-group col-md-6">
                    <label for="">Address</label>
                    <input type="text" name="address" class="form-control" value="{{$customer->address}}">
                    <span class ='text-danger'>
                        @error('address')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gender:</label>
                        <div class="col-sm-11">
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="M"
                            {{$customer->gender == 'M' ? 'checked' :''}}
                            >
                            <label class="form-check-label" for="male">Male</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="F"
                            {{$customer->gender == 'F' ? 'checked' :''}}
                            >
                            <label class="form-check-label" for="female">Female</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="O"
                            {{$customer->gender == 'O' ? 'checked' :''}}
                            >
                            <label class="form-check-label" for="other">Other</label>
                          </div>
                        </div>
                        <span class ='text-danger'>
                            @error('gender')
                                {{$message}}
                            @enderror
                        </span>
                      </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="">City</label>
                    <input type="text" name="city" class="form-control" value="{{$customer->city}}">
                    <span class ='text-danger'>
                        @error('city')
                            {{$message}}
                        @enderror
                    </span>
                </div>
                
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="">Date of birth</label>
                    <input type="date" name="date" class="form-control" value="{{$customer->dob}}">
                    <span class ='text-danger'>
                        @error('date')
                            {{$message}}
                        @enderror
                    </span>
                </div>
            </div>
             <br>
             
            <button class="btn btn-info">
                Submit
            </button>
        </div>
    </form>
  </body>
</html>