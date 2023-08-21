@extends('layouts.master')

@section('content')
<div class="content col-12 p-3">
    <x-errorMsg />
    <p class="text-capitalize fs-4 text-muted">Login</p>
    <form method="post" action="/user/login" class="p-4 col-6 mx-auto mt-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        @csrf
        <p class="text-muted my-2 fs-5">Login</p>
        <div class="my-3 p-1">
            <label class="text-capitalize">email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="my-3 p-1">
            <label class="text-capitalize">password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="my-3 p-1 d-flex justify-content-end">
            <input type="submit" class="col-4 btn btn-dark" value="Login">
        </div>
    </form>
</div>
@endsection
