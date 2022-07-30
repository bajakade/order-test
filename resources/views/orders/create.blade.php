<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <form method="post" action="/orders/create">
            {{ csrf_field() }}
                <select name="item">
                    @foreach($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    {{-- <option>Shoes</option>
                    <option>Bag</option>
                    <option>Cap</option> --}}
                </select>
                <button>Order</button>
        </form>
    </body>
</html>