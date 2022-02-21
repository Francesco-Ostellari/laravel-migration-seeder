
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
  <div class="container d-flex">
    <div class="row pt-2">
      <div class="col">
        <ul class ="card p-2 d-flex">
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
          <li>
            @if ($train->on_time == false)
              Treno non in orario
            @else
              Treno in orario
            @endif
          </li>
          @if ($train->delete == true)
          <li>Treno cancellato</li>
          @endif
          <li>
            <a href="{{ route('index') }}" class="btn btn-primary w-100">Torna ai treni</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>