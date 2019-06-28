<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        return Order::all();
    }

    public function store(Request $request)
    {
        $total_price = 0;
        $data = array(
            'client_telephone'      =>  $request->client_telephone,
            'addresses'     =>  $request->addresses,
            'total_price'  =>  $total_price,
        );
        $order_id = Order::create($data)->id;

        foreach ($request->items as $item) {
            $product = $item['product_id'];
            $quantity = $item['quantity'];

            $price = Product::find($product)->price;
            $total = $quantity * $price;
            $total_price = $total_price + $total;

            $item['order_id'] = $order_id;

            Order_item::create($item);
        }
        Order::whereId($order_id)->update(['total_price'  =>  $total_price]);

        return $this->show($order_id);
    }

    public function show($order)
    {
        $data = Order::findOrFail($order);


        $order_items = Order_item::select('products.name','flavors.name as flavor','price','quantity')
            ->join('orders', 'order_items.order_id', '=', 'orders.id')
            ->join('products', 'order_items.product_id', '=', 'products.id')
            ->leftjoin('flavors', 'order_items.flavors_id', '=', 'flavors.id')
            ->where('order_id', '=', $order )
            ->get();

        return response([
            'order_id' => $data->id,
            'client_id' => $data->client_telephone,
            'total_price' => $data->total_price,
            'items' => $order_items
        ]);
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        $order->delete();
        return $order;
    }
}
