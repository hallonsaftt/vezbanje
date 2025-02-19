@foreach($ocene as $ocena)

    <h2>Ucenikova ocena: {{ $ocena->ocena }}</h2>
    <h2>Predmet: {{ $ocena->predmet }}</h2>
    <h2>Profesor: {{ $ocena->profesor }}</h2>
    <hr>

@endforeach
