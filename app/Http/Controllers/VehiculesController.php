<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Option;
use App\Models\Option_vehicule;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicules = Vehicule::with('options')->get();
        // dd($vehicules);
        $title = 'Vehicules';
        return view('vehicules.index',compact('title','vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'ajouter vehicule';
        $options = Option::all();
        $categories = Categorie::all();
        return view('vehicules.create',compact('title', 'categories', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // get normal data
        $data = [
            'name' => $request->name,
            'marque' => $request->marque,
            'model' => $request->model,
            'categorie_id' => $request->categorie,
        ];
        // check if photo exists and store it locally
        if($request->hasFile('photo')){
            $data['photo'] = $request->file('photo')->store('/img', 'public');
        }
        // create a new vehicle
        $Vehicule = Vehicule::create($data);

        // check if any options exist and insert them to the database to the pivot table
        if($request->options){
            foreach($request->options as $option_id){
                Option_vehicule::create([
                    'vehicule_id' => $Vehicule->id,
                    'option_id' => $option_id
                ]);
            }
        }

        return redirect('/vehicules');
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
