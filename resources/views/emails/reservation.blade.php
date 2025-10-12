<p><strong>Ny reservationsforespørgsel</strong></p>

<ul>
    <li>Navn: {{ $r->name }}</li>
    <li>E-mail: {{ $r->email }}</li>
    <li>Gæster: {{ $r->guest }}</li>
    <li>Dato: {{ \Illuminate\Support\Carbon::parse($r->date)->format('d-m-Y') }}</li>
    @if($r->description)
        <li>Beskrivelse: {{ $r->description }}</li>
    @endif
</ul>
