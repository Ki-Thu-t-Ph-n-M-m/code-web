<!DOCTYPE html>
<html>
<head>
    <title>Quản lý sản phẩm</title>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<a href="{{ route('admin.products.create') }}">Thêm sản phẩm</a>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Tên</th>
<th>Giá</th>
<th>Sửa</th>
<th>Xoá</th>
</tr>

@foreach($products as $p)

<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->name }}</td>
<td>{{ $p->price }}</td>

<td>
<a href="{{ route('admin.products.edit',$p->id) }}">Sửa</a>
</td>

<td>
<form action="{{ route('admin.products.destroy',$p->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">Xoá</button>
</form>
</td>

</tr>

@endforeach

</table>

</body>
</html>