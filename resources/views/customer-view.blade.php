<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class=container>
        <table class=table>
            <table class="table">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>DoB</th>
                        {{-- <th>Password</th> --}}
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->user_name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                            {{-- {{ $customer->gender}}</td> --}}

                                @if ($customer->gender == 'M')
                                    Male
                                @elseif($customer->gender == 'F')
                                    Female
                                @elseif($customer->gender == 'O')
                                    Other
                                    @endif
                            </td>

                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->state }}</td>
                            <td>{{ $customer->country }}</td>
                            <td>{{ $customer->dob }}</td>
                            {{-- <td>{{ $customer->password }}</td> --}}
                            {{-- <td>{{ $customer->status }}</td> --}}

                            <td>
                                @if ($customer->status == '1')
                                    Active
                                @else
                                    Inactive
                                @endif

                            </td>


                            {{-- <td>{{$customer->points}}</td> --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>

        </table>

    </div>
</body>

</html>
