<!doctype html>
<html lang="en">
<head>
    <title>Weather</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</head>

<body class="py-4">

<h1 class="mb-4 text-center">City Temperatures</h1>

<table class="table table-bordered table-striped w-100 text-center align-middle">
    <thead class="table-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">City</th>
        <th scope="col">Temperature</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cities as $city)
        <tr>
            <th scope="row">{{ $city->id }}</th>
            <td>{{ $city->city }}</td>
            <td>{{ $city->temperature }} °C</td>
            <td>
                <a href="{{route('edit-city',['city'=> $city->id])}}" class="btn btn-sm btn-primary">Edit</a>
                <a href="{{route('delete-city',['city'=> $city->id])}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>

