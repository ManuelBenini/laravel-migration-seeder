@extends('layouts.main')

@section('content')
    <div class="text-center justify-content-center">
        <h1 class=>Benvenuti! Cliccare qui sotto per visualizzare tutti i treni in partenza:</h1>
        <h1><a href="{{route('trains')}}">Treni</a></h1>
    </div>
@endsection