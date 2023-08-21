<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        $title = 'list de locations';
        return view('locations.index',compact('locations','title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function louer(Vehicule $vehicule)
    {
        $title = 'ajouter une location';
        return view('locations.create',compact('title','vehicule'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function valider(Request $request)
    {
        $data = [
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'vehicule_id' => $request->vehicule_id,
            // 'prix_location' => $request->prix_location
        ];
        Location::create($data);
        return redirect('/vehicules');
    }

    public function search(Request $request)
    {
        $dateD = $request->dateD ; $dateF = $request->dateF;
        // if one of the dates not null or both are not null
        if($dateD || $dateF){
            $locations = Location::where('date_debut', $dateD)
                ->orWhere('date_fin', $dateF)
                ->get();
        }else{
            // if one of the dates null or both are null them redirect to previous route
            return back()->with('error', 'Obligatoire de sélectionner les dates');
        }
        $title = 'location recherché';
        return view('locations.index',compact('title','locations'));
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
