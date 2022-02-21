@extends('layouts.base')

@section('content')
<div class="container">
  <div class="row pt-2">
    <div class="col d-flex flex-wrap gap-3">
        @foreach ($trains as $train)
        <ul class ="card p-2">
          <li>
            <h1>TRENO: </h1>
          </li>
          <li>Azienda: {{ $train->agency }}</li>
          <li>Stazione di partenza: {{ $train->departure_station }}</li>
          <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
          <li>Data di partenza: {{ $train->departure_date }}</li>
          <li>Data di arrivo: {{ $train->arrival_date }}</li>
          <li>Orario di partenza: {{ $train->departure_time }}</li>
          <li>Orario di arrivo: {{ $train->arrival_time }}</li>
          <li>
            <a href="{{ route('show', $train) }}" class="btn btn-primary w-100">Vedi treno</a>
          </li>
        </ul>
        @endforeach
      </div>
    </div>
  </div>
@endsection