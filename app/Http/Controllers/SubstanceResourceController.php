<?php

namespace App\Http\Controllers;

use App\Substance;
use Illuminate\Http\Request;
use App\Http\Resources\SubstanceCollection;
use App\Http\Resources\Substance as SubstanceResource;

class SubstanceResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new SubstanceCollection(Substance::all());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'INN' => 'required|max:255',
            'mechanism' => 'max:255',
        ]);

        $substance = Substance::create($request->all());

        return (new SubstanceResource($substance))
                ->response()
                ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function show(Substance $substance)
    {
        return new SubstanceResource($substance);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Substance  $substance
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Substance $substance)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Substance  $substance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Substance $substance)
    {
        //
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
    }
}
