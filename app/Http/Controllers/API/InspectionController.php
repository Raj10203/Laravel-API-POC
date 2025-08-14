<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inspections = Inspection::with('site')
            ->select('site_id')
            ->orderBy('site_id')
            ->distinct()
            ->get();


        return response()->json($inspections);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Inspection $inspection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inspection $inspection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inspection $inspection)
    {
        //
    }
}
