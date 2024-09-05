<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="POST" action="{{route('product.update', ['product' => $products] )}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Product Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your product name" value="{{$products->name}}" />
        </div>
        <div class="mb-3">
            <label for="qty" class="form-label">Qty:</label>
            <input type="text" name="qty" id="qty" class="form-control" placeholder="Enter your product qty" value="{{$products->qty}}" />
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="Enter your product price" value="{{$products->price}}" />
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="Enter your product description" value="{{$products->description}}" />
        </div>

        <button type="submit">Update</button>
    </form>
</body>

</html>