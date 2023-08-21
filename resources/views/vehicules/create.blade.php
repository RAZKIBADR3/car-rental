@extends('layouts.master')

@section('content')
<div class="content col-12 mt-2 p-4">
    <form method="POST" action="/vehicule/create" class="p-4 border col-7" enctype="multipart/form-data">
        <p class="text-capitalize fs-4 text-muted">{{$title}}</p>
        @csrf
        <div class="col-12 mt-2">
            <label>name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="col-12 mt-2">
            <label>photo</label>
            <input type="file" class="form-control" name="photo">
        </div>
        <div class="col-12 mt-2">
            <label>marque</label>
            <input type="text" class="form-control" name="marque">
        </div>
        <div class="col-12 mt-2">
            <label>model</label>
            <input type="number" min="2005" max="2023" class="form-control" name="model">
        </div>
        <div class="col-12 mt-2">
            <label>categorie</label>
            <select name="categorie" class="form-select">
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                @endforeach
            </select>
        </div>

        <div class="col-12 mt-2 p-2">
            <label>options : </label>
            <div class="p-3 d-flex justify-content-around align-items-center flex-wrap">
                @foreach ($options as $option)
                    <div class="p-2 my-1">
                        <label class="mx-1">{{$option->designation}}</label>
                        <input class="form-check-input mx-1" name="options[]" value="{{$option->id}}" type="checkbox">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="actionsP d-flex justify-content-end p-2">
            <input type="submit" class="btn btn-success col-4 mx-2" value="Ajouter">
        </div>
    </form>
</div>
@endsection
