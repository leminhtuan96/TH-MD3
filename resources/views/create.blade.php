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
<form action="{{route("product.store")}}" method="post">
    @csrf
    <input type="text" name="shop" required placeholder="nhap tên shop...">
    <input type="text" name="phone" required placeholder="nhap số điện thoại...">
    <input type="text" name="email" required placeholder="nhap email...">
    <input type="text" name="address" required placeholder="nhap địa chỉ...">
    <input type="text" name="name" required placeholder="nhap tên...">
{{--    <input type="number" name="status_id" placeholder="nhap status_id...">--}}
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
    <button>Create</button>
</form>
</body>
</html>
