<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show Page</title>
</head>

<body>
    <h1>Hello Show Page </h1>
    <div class="container">
        <div class="raw">
            <div class="col">
                @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($message = Session::get('msg'))
                <!-- <div class="alert alert-success alert-block"> -->
                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <!-- <button type="button" class="close" data-dismiss="alert">×</button> -->
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{route('personal.update',['id'=>$personal->id])}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="beneficiary_name" class="form-label">Beneficiary Name</label>
                        <input type="text" class="form-control" name="beneficiary_name"
                            value="{{$personal->beneficiary_name}}">
                    </div>
                    <div>
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" value="{{$personal->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{$personal->phone}}">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <!-- <label>Gender</label> -->
                        </br>
                        <input type="radio" class="form-check-input" value="male" id="male" name="gender" checked>
                        <label for="male">Male</label>
                        <input type="radio" class="form-check-input" value="female" id="female" name="gender">
                        <label for="female">Female</label>
                        <!-- <input type="text" class="form-control" name="gender" placeholder="Male or Femail" required> -->
                    </div>
                    <div class=" mb-3">
                        <label for="language" class="form-label">Language</label>
                        <input type="text" class="form-control" name="language" value="{{$personal->language}}">
                    </div>
                    <div class="mb-3">
                        <label for="time_zone" class="form-label">Time Zone</label>
                        <input type="text" class="form-control" name="time_zone" value="{{$personal->time_zone}}">
                    </div>
                    <div class="mb-3">

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <div class="mb-3">
                    <a class="btn btn-primary" href="{{route('personal.index')}}" role="button">
                        Personal Page
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>