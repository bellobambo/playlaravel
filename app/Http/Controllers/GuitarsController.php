<?php

namespace App\Http\Controllers;

use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private static function getData()
    {

        return [
            ['id' => 1, 'name' => 'American Standard Strat', 'brand' => 'Fender'],
            ['id' => 2, 'name' => 'Starla S5', 'brand' => 'PRS'],
            ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
            ['id' => 4, 'name' => 'Talman', 'brand' => 'Ibanz'],

        ];
    }

    public function index()
    {
        return view('guitars.index', [
            'guiters' => Guitar::all(),
            'userInput' => '<script>alert("Hello")</script>',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'guitar-name' => 'required',
            'brand' => 'required',
            'year' => ['required' , 'integer'],
        ]);

        $guitar = new Guitar();

        $guitar->name = $request->input('guitar-name');
        $guitar->brand = $request->input('brand');
        $guitar->year_name = $request->input('year');

        $guitar->save();

        return redirect()->route('guitars.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $guiter)
    {
        $guiters = self::getData();

        $index = array_search($guiter, array_column($guiters, 'id'));

        if ($index === false) {
            abort(404);
        }

        return view('guitars.show', [
            'guiter' => $guiters[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
