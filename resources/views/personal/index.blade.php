@include('main.head')

<body>
    <h1>Personal Index Page</h1>

    <div class="container">
        <div class="raw">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Beneficiary Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Language</th>
                            <th scope="col">Time Zone</th>
                            <th scope="col">Opreations</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personals as $personal )
                        <tr>
                            <td>{{$personal->beneficiary_name}}</td>
                            <td>{{$personal->email}}</td>
                            <td>{{$personal->phone}}</td>
                            <td>{{$personal->gender}}</td>
                            <td>{{$personal->language}}</td>
                            <td>{{$personal->time_zone}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('personal.create')}}" role="button">
                                    Add New Personal
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-info" href="{{route('personal.show',['id'=>$personal->id])}}"
                                    role="button">
                                    show Personal
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-success" href="{{route('personal.edit',['id'=>$personal->id])}}"
                                    role="button">
                                    Edit Personal
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="{{route('personal.delete',['id'=>$personal->id])}}"
                                    onclick="return confirm('Are you sure you want to delete this item')" role="button">
                                    Delete Personal
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    <a class="btn btn-primary" href="{{url('dashboard')}}" role="button">
                        Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('main.scripts')