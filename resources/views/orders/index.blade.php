<a href="/orders/create">Create Order</a> <br>
<h1>List of orders</h1>
<ul>
    @foreach($orders as $order)
        <li>{{$order->item->name}}</li>
    @endforeach

</ul>
