<!DOCTYPE html>
<html>
<head>
<title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm</h2>

<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf

    <label>Tên sản phẩm</label><br>
    <input type="text" name="name" required>

    <br><br>

    <label>Giá</label><br>
    <input type="number" name="price" required>

    <br><br>

    <button type="submit">Lưu</button>
</form>

</body>
</html>