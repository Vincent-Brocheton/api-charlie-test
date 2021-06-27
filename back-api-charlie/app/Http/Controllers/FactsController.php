<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Facts[]|Collection
     */
    public function index()
    {
        return Facts::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        if(Facts::create($request->all())){
            return response()->json([
                'success'=> 'Fact créée avec succès'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Facts $facts
     * @return Facts
     */
    public function show(Facts $facts)
    {
        dd($facts);
        return $facts;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Facts $facts
     * @return Response
     */
    public function update(Request $request, Facts $facts)
    {
        if($facts->update($request->all())){
            return response()->json([
                'success'=> 'Fact mise à jour avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Facts $facts
     * @return Response
     */
    public function destroy(Facts $facts)
    {
        if($facts->delete()){
            return response()->json([
                'success'=> 'Fact effacée avec succès'
            ], 200);
        }
    }
}
