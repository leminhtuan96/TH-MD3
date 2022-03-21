<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route("product.create")}}">Create</a>
<form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<p>Danh sách đại lý phân phối</p>
<hr>
<table border="1">
    <thead>
    <tr>
        <th>Mã số đại lý</th>
        <th>Tên đại lý</th>
        <th>Điện thoại</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Tên người quản lý</th>
        <th>Trạng thái</th>
        <th colspan="2">Chức năng</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$product->shop}}</td>
            <td>{{$product->phone}}</td>
            <td>{{$product->email}}</td>
            <td>{{$product->address}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->status_id}}</td>
            <td><a onclick="return confirm('Are you sure??')" href="{{route("product.destroy",$product->id)}}">Delete</a></td>
            <td><a href="{{route("product.update",$product->id)}}">Update</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>
