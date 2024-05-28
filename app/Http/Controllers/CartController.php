<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderList;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class CartController extends Controller
{
    public function index (Request $request)
    {
        $sum=0;
        $orders = OrderList::where('user_id', '=', auth()->user()->id)->get();
        foreach ($orders as $order) {
            $sum += ($order->products->price) * ($order->colvo);
        }
        return view('cart', compact('orders', 'sum'));
    }

    public function remove(Request $request)
    {
        $productId = $request->input('product_id');

        $cart = $request->session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart');
    }

    public function status()
    {
        $orders = Order::where('user_id', '=', auth()->user()->id)->get();
        return view('orders', compact('orders'));
    }

    public function download($id)
    {
        $summ=0;
        $order = Order::findOrFail($id);
        $body = json_decode($order->body);
        foreach($body as $item)
        {
            $summ += $item->totalPrice;
        }
        $pdf = Pdf::loadView('pdf', ['order' => $order, 'body' =>$body, 'summ' => $summ]);
        return $pdf->download($order->id. '.pdf');
    }

    public function check($id)
    {
        $order = Order::findOrFail($id);

        $body = json_decode($order->body);

        return view('check', compact('order', 'body'));
    }
}
