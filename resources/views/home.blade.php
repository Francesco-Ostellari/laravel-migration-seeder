@extends('layouts.base')

@section('content')
  @foreach ($trains as $train)
    <ul>
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
      <li>Codice treno: {{ $train->train_code }}</li>
      <li>Numero carrozze: {{ $train->carriages }}</li>
      <li>In orario: {{ $train->on_time }}</li>
      <li>Cancellato: {{ $train->delete }}</li>
    </ul>
  @endforeach
@endsection