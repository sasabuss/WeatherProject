<!doctype html>
<html lang="en">
<head>
    <title>Add City</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h1 class="mb-4 text-center">Add New City</h1>

<form action="{{ route('save-city') }}" method="POST" class="card p-4 shadow-sm mx-auto" style="max-width: 400px;">
    @csrf

    <div class="mb-3">
        <label class="form-label">City</label>
        <input name="city" type="text" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Temperature</label>
        <input name="temperature" type="number" class="form-control" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">Add City</button>
    </div>
</form>

</body>
</html>
