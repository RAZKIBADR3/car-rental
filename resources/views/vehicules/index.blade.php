@extends('layouts.master')

@section('content')
<div class="content col-12 p-3">
    <x-successMsg />
    @auth
        <p>bonjour {{auth()->user()->name}}</p>
        <a class="btn btn-dark my-3" href="/vehicule/create">Ajouter vehicule</a>
    @endauth
    <p class="text-capitalize fs-4 text-muted">liste vehicules</p>
        <table class="table table-striped">
        <thead class="bg-dark text-light">
            <tr>
                <td>#</td>
                <td>name</td>
                <td>photo</td>
                <td>Marque</td>
                <td>Model</td>
                <td>categorie</td>
                <td class="col-2">options</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehicules as $vehicule)
                <tr>
                    <td>{{$vehicule->id}}</td>
                    <td>{{$vehicule->name}}</td>
                    <td>
                        <img style="height: 100px" src="{{ asset($vehicule->photo) }}" alt="vehicule photo">
                    </td>
                    <td>{{$vehicule->marque}}</td>
                    <td>{{$vehicule->model}}</td>
                    <td>{{$vehicule->categorie->libelle}}</td>
                    <td>
                        @if ($vehicule->options->count() == 0)
                            <span class="text-muted text-capitalize">aucune option n'existe</span>
                        @else
                            @foreach ($vehicule->options as $option)
                                @if($vehicule->options->count() == $loop->iteration)
                                    {{$option->designation}}
                                @else
                                    {{$option->designation}} ,
                                @endif
                            @endforeach
                        @endif
                    </td>
                    <td><a href="/location/louer/{{$vehicule->id}}" class="btn btn-secondary col-8">Louer</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
