<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Add New Product</h1>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Product Name:</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <br>
        <div>
            <label for="price">Price ($):</label><br>
            <input type="number" id="price" name="price" step="0.01" value="{{ old('price') }}" required>
        </div>
        <br>
        <button type="submit">Save Product</button>
        <a href="{{ route('products.index') }}">Cancel</a>
    </form>
</body>
</html>