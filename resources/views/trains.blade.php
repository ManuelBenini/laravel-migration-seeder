@extends('layouts.main')

@section('content')
    <div class="d-flex flex-wrap justify-content-center align-items-center">
        @foreach ($trains as $train)
            <div class="card me-5 my-5" style="width: 18rem;">
            
                <div class="card-body mb-card-body">
                    <h5 class="card-title">{{$train->train_code}}</h5>
                </div>
        
                <ul class="list-group list-group-flush">
                    
                    @if ($train->deleted)
                        <li class="list-group-item">il treno è stato cancellato</li>
                    
                    @else
                        <li class="list-group-item">Azienda: {{$train->company}}</li>
                        <li class="list-group-item">Stazione di partenza: {{$train->departure_station}}</li>
                        <li class="list-group-item">Stazione di arrivo: {{$train->arrival_station}}</li>
                        <li class="list-group-item">Orario di partenza: {{$train->departure_time}}</li>
                        <li class="list-group-item">Orario di arrivo: {{$train->arrival_time}}</li>
                        <li class="list-group-item">Numero carrozze: {{$train->carriages_number}}</li>

                        @if ($train->in_time)
                            <li class="list-group-item">Il treno è in orario</li>
                        @else
                            <li class="list-group-item">Il treno non è in orario</li>
                        @endif

                    @endif

                </ul>
            </div>
        @endforeach
        
    </div>
@endsection