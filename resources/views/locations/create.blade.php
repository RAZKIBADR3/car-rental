@extends('layouts.master')

@section('content')
<div class="content col-12 mt-4 p-5">
    <form method="POST" action="/location/valider" class="p-4 border col-7">
        <p class="text-capitalize fs-4 text-muted">{{$title}}</p>
        @csrf
        <div class="col-12 mt-2">
            <label>dateDebut</label>
            <input type="date" onchange="changePrix('dateD',this)" class="form-control" name="date_debut">
        </div>
        <div class="col-12 mt-2">
            <label>dateFin</label>
            <input type="date" onchange="changePrix('dateF',this)" class="form-control" name="date_fin">
        </div>
        <div class="col-12 mt-2">
            <label>client</label>
            <input type="text" class="form-control" name="client">
        </div>
        <div class="col-12 mt-2">
            <label>prix Location</label>
            <input type="number" value="{{$vehicule->categorie->prix}}" id="prix_location" class="form-control" name="prix_location" disabled>
        </div>
        <input type="hidden" name="vehicule_id" value="{{$vehicule->id}}">
        <input type="hidden" id="prix" value="{{$vehicule->categorie->prix}}">
        <div class="actionsP d-flex justify-content-end p-2">
            <input type="submit" class="btn btn-dark col-4 mx-2" value="Valider">
        </div>
    </form>
</div>
<script src="{{ asset('js/main.js') }}"></script>
@endsection
