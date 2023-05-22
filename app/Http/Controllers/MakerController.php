<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MakerController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Maker::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makers = Maker::all();
        return  view('makers.index',['makers'=>$makers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('makers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $maker = Maker::create([
            'brand' => $request->input('brand'),
            'country' => $request->input('country'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maker $maker)
    {
        return view('makers.edit',['maker'=>$maker]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maker $maker)
    {
        $maker->update([
            'brand' => $request->input('brand'),
            'country' => $request->input('country'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
        ]);
        return \redirect(route('makers.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maker $maker)
    {
        $maker->delete();
        return \redirect(route('makers.index'));
    }
}
