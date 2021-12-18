<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finances = Finance::all();
        return view('finances.index', compact('finances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('finances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $finance = new Finance;
        // $finance->item = $request->item;
        // $finance->nominal = $request->nominal;
        // $finance->jumlah = $request->jumlah;
        // $finance->total = $request->total;

        // $finance->save();

        // Finance::create([
        //     'item' => $request->item,
        //     'nominal' => $request->nominal,
        //     'jumlah' => $request->jumlah,
        //     'total' => $request->total
        // ]);

        $request->validate([
            'item' => 'required',
            'nominal' => 'required',
            'jumlah' => 'required',
            'total' => 'required'
        ]);

        Finance::create($request->all());
        return redirect('/finances')->with('message', 'Data Finance Successfully     Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function show(Finance $finance)
    {
        return view('finances.show', compact('finance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function edit(Finance $finance)
    {
        return view('finances/edit', compact('finance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finance $finance)
    {
        $request->validate([
            'item' => 'required',
            'nominal' => 'required',
            'jumlah' => 'required',
            'total' => 'required'
        ]);

        Finance::where('id', $finance->id)
            ->update([
                'item' => $request->item,
                'nominal' => $request->nominal,
                'jumlah' => $request->jumlah,
                'total' => $request->total
            ]);
        return redirect('/finances')->with('message', 'Data Finance Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Finance  $finance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Finance $finance)
    {
        Finance::destroy($finance->id);
        return redirect('/finances')->with('message', 'Data Finance Successfully Delete');
    }
}
