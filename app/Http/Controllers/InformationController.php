<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    
    public function index()
    {
        $informations = Information::all();
        return view('informations.index')->with('informations', $informations);
    }

    public function create()
    {
        return view('informations.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Information::create($input);
        return redirect('information')->with('flash_message', 'User is added!');
    }

    public function show(string $id)
    {
        $information = Information::find($id);
        return view('informations.show')->with('informations', $information);
    }

    public function edit(string $id)
    {
        $information = Information::find($id);
        return view('informations.edit')->with('informations', $information);
    }

    public function update(Request $request, string $id)
    {
        $information = Information::find($id);
        $input = $request->all();
        $information->update($input);
        return redirect('information')->with('flash_message', 'User Updated');
    }

    public function destroy(string $id)
    {
        Information::destroy($id);
        return redirect('information')->with('flash_message', 'User deleted');
    }
}
