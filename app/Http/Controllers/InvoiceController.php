<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Item;
use App\Models\Store;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\get;

class InvoiceController extends Controller
{

    public function index()
    {


//        $item=Item::latest()->first();
//        $items=Item::all()->where('invoice_id','=','$invoice->id');

        $invoice=Invoice::latest()->first();

        if ($invoice->id ?? 'not found'){
            $items = Item::all()->where('invoice_id',$invoice->id ?? 'not found'); //, $invoice->id

        }else{
            $items = Item::all()->where('invoice_id'); //, $invoice->id
        }

        $store=Store::all();
        $invoid=Invoice::all();
        $total=$items->sum('total');

        return view('invoice',compact('invoice','store','invoid','items','total'));


    }


    public function create()
    {

    }

    public function store(Request $request)
    {

         Invoice::create([
             'invoiceNo'=>$request['invoiceNo'],
//             'date'=>$request['date'],
//             'item'=>$request['item'],
//             'quantity'=>$request['quantity'],
//             'price'=>$request['price'],
//             'total'=>$request['total'],
         ]);

//        $item = Store::where('type','=',$request['item'])->first();
//        $q=$item->quantity;
//           $item->update([
//               'quantity'=>(int)$q-(int)$request->quantity,
//           ]);


        return redirect()->back();
    }



    public function show()
    {

    }


    public function edit(Invoice $invoice)
    {
        //
    }


    public function update(Request $request, Invoice $invoice)
    {
        //
    }


    public function destroy(Invoice $invoice)
    {
        //
    }

}
