@include('main.head')

<body>
    <h1>Personal Create Page</h1>

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
                <form action="{{ route('personal.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="beneficiary_name" class="form-label">Beneficiary Name</label>
                        <input type="text" class="form-control" name="beneficiary_name" placeholder="Full Name"
                            required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email address" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" name="phone" placeholder="Phone" required>
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
                        <input type="text" class="form-control" name="language" placeholder="Arabic" required>
                    </div>
                    <div class="mb-3">
                        <label for="time_zone" class="form-label">Time Zone</label>
                        <input type="text" class="form-control" name="time_zone" placeholder="Asia" required>
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

    @include('main.scripts')