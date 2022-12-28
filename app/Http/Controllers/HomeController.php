<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Item;
use App\Models\Spend;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\countOf;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items=Store::all()->count();

//        foreach($items as $item){
//        $c=collect([$item->type]);
//        $tot=$c->count();
//        }
//        $sales=Invoice::all('total')->count();

        $sales= Item::sum('total');
        $spends= Spend::sum('cost');
        $users=User::all('email')->count();


        return view('home',compact('items','sales','spends','users'));
    }


}
