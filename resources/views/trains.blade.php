@extends('layouts.main')

@section('content')
    <div class="d-flex flex-wrap justify-content-center align-items-center">
        @foreach ($trains as $train)
            <div class="card me-5 my-5" style="width: 18rem;">
            
                <div class="card-body mb-card-body">
                    <h5 class="card-title">{{$train->Codice_Treno}}</h5>
                </div>
        
                <ul class="list-group list-group-flush">
                    
                    @if ($train->Cancellato)
                        <li class="list-group-item">il treno è stato cancellato</li>
                    
                    @else
                        <li class="list-group-item">Azienda: {{$train->Azienda}}</li>
                        <li class="list-group-item">Stazione di partenza: {{$train->Stazione_di_partenza}}</li>
                        <li class="list-group-item">Stazione di arrivo: {{$train->Stazione_di_arrivo}}</li>
                        <li class="list-group-item">Orario di partenza: {{$train->Orario_di_partenza}}</li>
                        <li class="list-group-item">Orario di arrivo: {{$train->Orario_di_arrivo}}</li>
                        <li class="list-group-item">Numero carrozze: {{$train->Numero_Carrozze}}</li>

                        @if ($train->In_orario)
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