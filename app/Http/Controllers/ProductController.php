<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderList;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request){
        $cart = $request->session()->get('cart', []);
        $categories = Category::all();
        return view('product',compact('categories', 'cart'));
    }

    public function add($id, Request $request)
    {
        if (OrderList::where('product_id', '=', $id)->Where('user_id', '=', auth()->user()->id)->exists()) {
            $orderList = OrderList::where('product_id', '=', $id)->Where('user_id', '=', auth()->user()->id)->first();
            $colvo = $orderList->colvo;
            $colvo++;
            $orderList->update([
                'colvo' => $colvo
            ]);
        } else {
            OrderList::create([
                'user_id' => auth()->user()->id,
                'product_id' => $id
            ]);
        }

        return redirect()->route('products');
    }

    public function plus ($id)
    {
        $product = Product::find($id);
        $orderList = OrderList::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $product->id)->first();
        $value = $orderList->colvo;
        $value++;
        $orderList->update([
            'colvo' => $value
        ]);
        return redirect()->route('cart');
    }

    public function minus ($id)
    {
        $product = Product::find($id);
        $orderList = OrderList::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $product->id)->first();
        $value = $orderList->colvo;
        $value--;
        if($value>0)
        {
            $orderList->update([
                'colvo' => $value
            ]);
        }
        else
        {
            $orderList->delete();
        }
        return redirect()->route('cart');
    }

    public function delete ($id)
    {
        OrderList::find($id)->delete();
        return redirect()->route('cart');
    }

    public function create (Request $request)
    {
        $products = array();
        $i=1;
        $sum=0;
        $body='';
        $cart =  OrderList::where('user_id', '=', auth()->user()->id)->get();
        foreach ($cart as $order) {
            $sum += ($order->products->price) * ($order->colvo);
            $products[$i]= ['name'=>$order->products->name, 'price'=>$order->products->price, 'colvo' => $order->colvo, 'totalPrice' => $order->colvo*$order->products->price];
            $body .= $i .') '. $order->products->name . ' '. $order->colvo .'шт.' . chr(10);
            $i++;
        }
        $address = $request->phone . ' ' . $request->address;
        $body .= ' Итого:' . $sum;
        $order = new Order();
        $order->create(
            [
                'user_id' => auth()->user()->id,
                'address' => $address,
                'title' => 'Заявка на доставку, сумма: '. $sum,
                'body' => json_encode($products, JSON_UNESCAPED_UNICODE)
            ]
        );
        foreach ($cart as $order) {
            $order->delete();
        }
        return redirect()->route('cart')->with('success', 'Заявка создана');
    }
}
