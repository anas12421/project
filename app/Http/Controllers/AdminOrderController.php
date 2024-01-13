<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\orderDetails;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    private $data;
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::all()
        ]);
    }
    public function allOrder()
    {
        return view('admin.order.allOrder', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function new()
    {
        return view('admin.order.new', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function processing()
    {
        return view('admin.order.processing', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function cencel()
    {
        return view('admin.order.cencel', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function complete()
    {
        return view('admin.order.complete', [
            'orders' => Order::orderBy('id', 'desc')->get()
        ]);
    }
    public function details(Request $request)
    {
        return view('admin.order.details', [
            'ordersDetails' => Order::find($request->id)
        ]);
    }
    public function edit(Request $request)
    {
        return view('admin.order.edit', [
            'ordersEdit' => Order::find($request->id)
        ]);
    }
    public function update(Request $request)
    {
        $this->data = Order::find($request->id);
        $this->data->order_status = $request->order_status;
        $this->data->delivery_status = $request->delivery_status;
        $this->data->delivery_address = $request->delivery_address;
        $this->data->save();
        return redirect('/admin/order');
    }
    public function invoice(Request $request)
    {
        return view('admin.invoice.index', [
            'orders' => Order::find($request->id)
        ]);
    }
    public function printInvoice(Request $request)
    {
        //return $request;
        // $pdf = PDF::loadView('admin.invoice.print',[
        //     'orders'=>Order::find($request->id)
        // ]);
        // return $pdf->stream('ok.pdf');
        // return view('admin.invoice.print',[
        //     'orders'=>Order::find($request->id)
        // ]);
        $pdf = PDF::loadView('admin.invoice.print',[
                'orders'=>Order::find($request->id)
             ]);
        return $pdf->stream('test.pdf');
    }
    public function download(Request $request)
    {
        $pdf = PDF::loadView('admin.invoice.print',[
                'orders'=>Order::find($request->id)
             ]);
        return $pdf->download('test.pdf');
    }
     public function deleteOrder(Request $request){
        order::deleteOrder($request);
        orderDetails::deleteOrder($request);
        return redirect()->route('admin.order');

     }
}
