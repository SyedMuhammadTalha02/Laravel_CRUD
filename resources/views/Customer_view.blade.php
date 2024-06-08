


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    button {
        /* margin-left: 1200px;
        margin-top: 20px;
        inline-size: 20% */
     
    }
    .btns{
      margin-left: 1000px;
     

    }
  </style>
  <body>
    @include('layout/header')
  <div class="container">
    <div class="row m-2">
      <form action="" class="col-9">
        <div class="form-group">
        <input type="text" name="search" class="form-control"  placeholder="Search here" value="{{$search}}">
        <br>
        <button class="btn btn-primary"> Search</button>
        </div>
      </form>
      <div class="col-3">
        <a href="{{url('/customer/create')}}">
          <button class=" btn btn-info ">Add</button>
        </a>
    
        <a href="{{url('/customer/trash')}}" >
          <button class=" btn btn-success ">Go To Trash</button>
        </a>
      </div>
    </div>
  </div>
    {{-- <div class="btns">
     
    </div> --}}
    <div class="container">
        <table class="table">
            <thead>
               
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col">Gender</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer )
                    
              
              <tr>
                <td>{{$customer->id }}</td>
                <td>{{$customer->name }}</td>
                <td>{{$customer->email }}</td>
                <td>{{$customer->address }}</td>
                <td>{{$customer->city }}</td>
                <td>@if ($customer->gender == 'M')
                Male
                @elseif ($customer->gender == 'F')
                Female
                @else 
                Other
                    
                @endif </td>
                <td>{{formated_date($customer->dob,'d/m/y') }}</td>
                <td>@if ($customer->avtive == '1')
                   <a href=""><span class="badge bg-success"> Active</span></a> 
                    @else 
                    <a href=""><span class="badge bg-danger"> UnActive</span></a>
                    @endif
                </td>
                <td>
                  <a href="{{url('/customer/edit/'.$customer->id)}}" class="btn btn-primary">Edit</a>
                  <a href="{{url('/customer/delete/'.$customer->id)}}" class="btn btn-danger">Trash</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="row">
            {{$customers->links()}}
           </div>
    </div>
  </body>
</html>