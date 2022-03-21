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
<form action="{{route("product.update", $product->id)}}" method="post">
    @csrf
    <input type="text" name="shop" placeholder="nhap tên shop..." value="{{$product->shop}}">
    <input type="text" name="phone" placeholder="nhap số điện thoại..." value="{{$product->phone}}">
    <input type="text" name="email" placeholder="nhap email..." value="{{$product->email}}">
    <input type="text" name="address" placeholder="nhap địa chỉ..." value="{{$product->address}}">
    <input type="text" name="name" placeholder="nhap tên..." value="{{$product->name}}">
{{--    <input type="text" name="status_id" placeholder="nhap status_id..." value="{{$product->status_id}}">--}}
    <select name="status_id" id="status_id">
        @foreach($statuses as $status)
            <option value="{{ $status->id}}">{{$status->name}}</option>
        @endforeach
    </select>
    {{--    <select name="category_id" class="form-control ">--}}
    {{--        <option>--Tùy chọn--</option>--}}
    {{--        @foreach($statuses as $status)--}}
    {{--            <option value="{{$status->id}}">{{$status->name}}</option>--}}
    {{--        @endforeach--}}
    {{--    </select>--}}
    <button>Update</button>
</form>
</body>
</html>
