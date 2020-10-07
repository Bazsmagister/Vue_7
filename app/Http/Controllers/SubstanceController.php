<?php

namespace App\Http\Controllers;

use App\Substance;
use Illuminate\Http\Request;

class SubstanceController extends Controller
{
    //for api purposes

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Substance::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $substance = Substance::create($request->all());

        return response()->json($substance, 201);
        //201: Object created. Useful for the store actions.
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function show(Substance $substance)
    {
        return $substance;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Substance $substance)
    {
        $substance->update($request->all());

        return response()->json($substance, 200);
        //200: OK. The standard success code and default option.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Substance $substance)
    {
        $substance->delete();

        return response()->json(null, 204);
        //204: No content. When an action was executed successfully, but there is no content to return.
    }
}
