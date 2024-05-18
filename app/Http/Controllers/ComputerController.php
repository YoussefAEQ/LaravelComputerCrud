<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'origin'=>'required',
            'price'=>['required','integer'],
        ]);
        $computer=new Computer();
        $computer->name=$request->input('name');
        $computer->origin=$request->input('origin');
        $computer->price=$request->input('price');
        $computer->save();
        return redirect()->route('computers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $computer=Computer::findOrFail($id);
        return view('computers.show',compact('computer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $computer=Computer::findOrFail($id);
        return view('computers.edit',compact('computer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(['name'=>'required',
        'origin'=>'required',
        'price'=>['required','integer']
    ]);
    $computer=Computer::findOrFail($id);
    $computer->name=$request->input('name');
    $computer->origin=$request->input('origin');
    $computer->price=$request->input('price');
    $computer->save();
    return redirect()->route('computers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $index=Computer::findOrFail($id);
        $index->delete();
        return redirect()->route('computers.index');
    }
}
