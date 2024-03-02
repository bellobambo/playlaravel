<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuitarFormRequest;
use App\Models\Guitar;
use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(GuitarFormRequest $request)
    {
        $data = $request->validated();

        Guitar::create($data);

        return redirect()->route('guitars.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar)
    {
        return view('guitars.edit', ['guitar' => $guitar]);
    }



    public function show(Guitar $guitar)
    {
        return view('guitars.show', ['guitar' => $guitar]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        $data = $request->validated();

        $guitar->update($data);

        return redirect()->route('guitars.show', $guitar);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
