<!doctype html>
<html lang="en">
<head>
    <title>Edit City</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h1 class="mb-4 text-center">Edit City</h1>

<form action="{{ route('update-city', $city->id) }}" method="POST" class="card p-4 shadow-sm mx-auto" style="max-width: 400px;">
    @csrf

    <div class="mb-3">
        <label class="form-label">City</label>
        <input name="city" value="{{ $city->city }}" type="text" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Temperature (°C)</label>
        <input name="temperature" value="{{ $city->temperature }}" type="number" class="form-control" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Update City</button>
    </div>
</form>

</body>
</html>
