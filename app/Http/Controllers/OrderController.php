<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\FuncCall;

class OrderController extends Controller
{
    public function index(){
        $items = Order::all();
        return view('orders.index', ['orders' => $items]);
    }

    public function show($id){
        return Order::find($id);
    }

    public function create(){
       
        $items = Item::all();
        return view('orders.create', ['items'=>$items]);
    }

    public Function store(Request $request){
        
        $id = $request->input('item');
        
        Order::create(['item_id'=>$id]);
        
        return redirect('/orders/');
    }

    public function edit($id){
        $item = Order::find($id);
        $items = Order::all();
        return view('orders.edit', compact('item'));
    }
}
