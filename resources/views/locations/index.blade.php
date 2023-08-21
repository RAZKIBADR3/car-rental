@extends('layouts.master')

@section('content')
<div class="content col-12 mt-4 p-3">
    <x-errorMsg />
    <form method="GET" class="col-6 border my-3 p-3" action="/locations/search">
        @csrf
        <p class="text-muted">filter par la date debut et fin</p>
        <div class="col-12 d-flex align-items-center justify-content-evenly">
            <div class="col-4">
                <label>date Debut</label>
                <input type="date" name="dateD" class="form-control">
            </div>
            <div class="col-4">
                <label>date Fin</label>
                <input type="date" name="dateF" class="form-control">
            </div>
            <input type="submit" class="col-2 btn btn-dark mt-4" value="Filter">
        </div>
    </form>
    <p class="text-capitalize fs-4 text-muted">{{$title}}</p>
    <table class="table table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <td>#</td>
                <td>dateDebut</td>
                <td>dateFin</td>
                <td>client</td>
                <td>duree</td>
                <td>montant</td>
                <td>vehicule</td>
            </tr>
        </thead>
        <tbody>
            @php
                $montantTotal = 0;
            @endphp
            @if ($locations->count() == 0)
            <td colspan="6" class="text-center">
                <span class="text-muted text-capitalize">aucune location n'existe</span>
            </td>
            @else
                @foreach ($locations as $location)
                    @php
                        $dateD = \Carbon\Carbon::parse($location->date_debut);
                        $dateF = \Carbon\Carbon::parse($location->date_fin);
                        $duree = $dateF->diff($dateD)->days;
                        $montant = $duree * $location->vehicule->categorie->prix;
                        $montantTotal +=  $montant;
                    @endphp
                    <tr>
                        <td>{{$location->id}}</td>
                        <td>{{$location->date_debut}}</td>
                        <td>{{$location->date_fin}}</td>
                        <td>{{$location->client}}</td>
                        <td>{{$duree}} jour(s)</td>
                        <td>{{$montant}} DH</td>
                        <td>{{$location->vehicule->name}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <p>Montant total : {{$montantTotal}} DH</p>
</div>
@endsection
