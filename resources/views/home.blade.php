@extends('layouts.base')

@section('content')
  @foreach ($trains as $train)
    <div>
      <h1>TRENO: </h1>
      <div>Azienda: {{ $train->agency }}</div>
      <div>Stazione di partenza: {{ $train->departure_station }}</div>
      <div>Stazione di arrivo: {{ $train->arrival_station }}</div>
      <div>Data di partenza: {{ $train->departure_date }}</div>
      <div>Data di arrivo: {{ $train->arrival_date }}</div>
      <div>Orario di partenza: {{ $train->departure_time }}</div>
      <div>Orario di arrivo: {{ $train->arrival_time }}</div>
      <div>Codice treno: {{ $train->train_code }}</div>
      <div>Numero carrozze: {{ $train->carriages }}</div>
      <div>In orario: {{ $train->on_time }}</div>
      <div>Cancellato: {{ $train->delete }}</div>
    </div>
  @endforeach
@endsection