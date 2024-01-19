<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        $people = People::all();
        return response()->json($people);
    }
    public function store(Request $request)
    {
        $request->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'waga' => 'required',
            'telefon' => 'required',
            'miasto' => 'required',
            'wzrost' => 'required',
            'email' => 'required|email|unique:people,email',
            'numertel' => 'required|min:8',
        ]);

        $people = new People;
        $people->fill($request->all());
        $people->save();

        return response()->json($people, 200);
    }
    public function edit(Request $request, $id)
    {
        $request->validate([
            'imie' => 'required',
            'nazwisko' => 'required',
            'waga' => 'required',
            'telefon' => 'required',
            'miasto' => 'required',
            'wzrost' => 'required',
            'email' => 'required|email|unique:people,email,' . $id,
            'numertel' => 'required|min:8',
        ]);

        $people = People::findOrFail($id);
        $people->update($request->all());

        return response()->json($people);
    }
    public function delete($id)
    {
        $people = People::findOrFail($id);
        $people->delete();

        return response()->json('Deleted successfully');
    }
    public function read($id)
    {
        $people = People::findOrFail($id);
        return response()->json($people);
    }
}