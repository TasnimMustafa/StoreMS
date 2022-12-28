<?php

namespace App\Http\Controllers;

use App\Models\Editinvoice;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Store;
use Illuminate\Http\Request;

class EditinvoiceController extends Controller
{
    public function index()
    {

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Editinvoice $editinvoice)
    {
        //
    }


    public function edit(Editinvoice $editinvoice)
    {
        //
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

        $item = Store::where('type','=',$request['item'])->first();
        $q=$item->quantity;
        $item->update([
            'quantity'=>(int)$q+(int)$request->quantity,
        ]);
        return redirect()->route('sales.index');
    }


    public function destroy(Editinvoice $editinvoice)
    {
        //
    }
}
