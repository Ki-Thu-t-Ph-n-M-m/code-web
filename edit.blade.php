<!DOCTYPE html>
<html>
<head>
<title>Sửa sản phẩm</title>
</head>
<body>

<h2>Sửa sản phẩm</h2>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Tên sản phẩm</label><br>
    <input type="text" name="name" value="{{ $product->name }}">

    <br><br>

    <label>Giá</label><br>
    <input type="number" name="price" value="{{ $product->price }}">

    <br><br>

    <button type="submit">Cập nhật</button>
</form>

</body>
</html>