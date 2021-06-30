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
     * @param Facts $fact
     * @return Facts
     */
    public function show(Facts $fact)
    {
        return $fact;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Facts $fact
     * @return Response
     */
    public function update(Request $request, Facts $fact)
    {
        if($fact->update($request->all())){
            return response()->json([
                'success'=> 'Fact mise à jour avec succès'
            ], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Facts $fact
     * @return Response
     */
    public function destroy(Facts $fact)
    {
        if($fact->delete()){
            return response()->json([
                'success'=> 'Fact effacée avec succès'
            ], 200);
        }
    }
}
