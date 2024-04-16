<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cashier;
use App\Models\OrderProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function getPurchases() {

        $cashier = Cashier::whereId(auth('cashier')->user()->id)->first();
        $order = $cashier->openOrder->first();
        return view('cashiers.pruchases',compact('order'));
    }


    public function deleteItem(Request $r) {
        $item = OrderProduct::whereId($r->id)->first();
        $item->order->update(['total_price' => $item->order->total_price - $item->total]);
        $item->product->update(['quantity' => $item->product->quantity + $item->quantity , 'quantity_sold' => $item->product->quantity_sold - $item->quantity]);
        $item->delete();
        $order = $item->order;
        return view('cashiers.pruchases',compact('order'));
    }


    public function adminOrders() {
        $orders = Order::where('status',false)->get();
        return view('admins.orders.index',compact('orders'));

    }


    public function cashierOrders() {
        $cashier = Cashier::whereId(auth('cashier')->user()->id)->first();
        $orders = $cashier->closeOrders;
        return view('cashiers.orders.index',compact('orders'));
    }


}
