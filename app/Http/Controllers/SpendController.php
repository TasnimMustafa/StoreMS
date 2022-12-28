<?php

namespace App\Http\Controllers;

use App\Models\Spend;
use Illuminate\Http\Request;

class SpendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spends=Spend::all();
        return view('spends',compact('spends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Spend::create([
            'type'=>$request['type'],
            'date'=>$request['date'],
            'cost'=>$request['cost'],
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spend  $spend
     * @return \Illuminate\Http\Response
     */
    public function show(Spend $spend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spend  $spend
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spend=Spend::findOrFail($id);
        return view('editSpend',compact('spend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spend  $spend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $spend=Spend::findOrFail($id);
        $spend->update([
            'type'=>$request['type'],
            'date'=>$request['date'],
            'cost'=>$request['cost'],
        ]);
        return redirect()->route('spends.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spend  $spend
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Spend::destroy($id);
        return redirect()->back();
    }
}
