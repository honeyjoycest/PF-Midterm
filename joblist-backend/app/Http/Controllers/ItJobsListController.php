<?php

namespace App\Http\Controllers;

use App\Models\ItJobsList;
use Illuminate\Http\Request;

class ItJobsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ItJobsList::all());
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
     * @param  \App\Models\ItJobsList  $itJobsList
     * @return \Illuminate\Http\Response
     */
    public function show(ItJobsList $itJobsList)
    {
        return response()->json($itJobsList);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItJobsList  $itJobsList
     * @return \Illuminate\Http\Response
     */
    public function edit(ItJobsList $itJobsList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItJobsList  $itJobsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItJobsList $itJobsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItJobsList  $itJobsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItJobsList $itJobsList)
    {
        //
    }
}
