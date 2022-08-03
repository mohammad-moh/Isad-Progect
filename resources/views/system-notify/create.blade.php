@include('main.head')

<body>
    <h1>System Notifications Page</h1>

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
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('notification.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="incoming_requests" class="form-label"> incoming_requests</label>
                        <input type="text" class="form-control" name="incoming_requests" required>
                    </div>
                    <div class="mb-3">
                        <label for="other_notifications" class="form-label">other_notifications</label>
                        <input type="text" class="form-control" name="other_notifications" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @include('main.scripts')