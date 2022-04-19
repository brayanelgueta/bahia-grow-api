<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showOrders(){

        $orders = Order::all();

        return $orders;
    }

    public function createOrder(){

        $newOrder = new Order;
        $newOrder->total = $request->total;

        $newOrder->save();
    }

    public function editOrder(){

        $editOrder = Order::findOrFail($id);

        return $editOrder;
    }

    public function updateOrder(Request $request, $id){

        $updateOrder = Order::findOrFail($id);

        $updateOrder->total = $request->total;

        $updateOrder->save();

    }

    public function deleteOrder($id){

        $deleteOrder = Order::findOrFail($id);

        $deleteOrder->delete();
    }
}
