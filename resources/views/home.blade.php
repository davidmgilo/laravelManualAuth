@extends('layouts.app')

@section('htmlheader_title')
    Títol de la pàgina
@endsection

@section('main-content')
    <div class="row text-center">
        Hola
    </div>
    <form action="/logout" method="get">
    <div class="row text-center">
        <input type="submit" value="Logout" class="btn btn-primary">
    </div>
    </form>
@endsection