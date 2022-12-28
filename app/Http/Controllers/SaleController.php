<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Item;
use App\Models\Sale;
use App\Models\Store;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function index()
    {
        $sales = Invoice::all();
        return view('sales',compact('sales'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $items=Item::all()->where('invoice_id',$id);
        $total=$items->sum('total');
        $invNo=Invoice::findOrFail($id)->invoiceNo;
        return view('showInvoice',compact('items','id','total','invNo'));
    }


    public function edit($id)
    {
        $stor=Store::all();
        $invid=Invoice::all();

        $item=Item::findOrFail($id);
        return view('editInvoice',compact('item','stor','invid'));
    }


    public function update(Request $request, $id)
    {
        $item=Item::findOrFail($id);
        $item->update([
//            'invoiceNo'=>$request['invoiceNo'],
//            'date'=>$request['date'],
            'item'=>$request['item'],
            'quantity'=>$request['quantity'],
            'price'=>$request['price'],
            'total'=>$request['total'],
        ]);

//        $item = Store::where('type','=',$request['item'])->first();
//        $q=$item->quantity;

//            $item->update([
//                'quantity'=>(int)$q+(int)$request->quantity,
//            ]);



        return redirect()->route('invoice.index');
    }


    public function destroy($id)
    {
//        Invoice::destroy($id);
//        return redirect()->back();
        Item::destroy($id);
        return redirect()->back();
    }


}
