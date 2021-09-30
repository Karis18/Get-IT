<?php

namespace App\Http\Controllers;

use App\Models\Lostitem;
use Illuminate\Http\Request;
use DB;

class LostitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lostitems = DB::select('select * from lostitems');
return view('home',['item'=>$lostitems]);
    
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lostitem  $lostitem
     * @return \Illuminate\Http\Response
     */
    public function show(Lostitem $lostitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lostitem  $lostitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Lostitem $lostitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lostitem  $lostitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lostitem $lostitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lostitem  $lostitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lostitem $lostitem)
    {
        //
    }
}
