<h1>Lista di tutti i treni</h1>

<ul>
    @foreach ($trains as $train)
        <li>
            <p>
                Azienda: {{ $train->Azienda }}
            </p>
            <p>
                Stazione: {{ $train->Stazione_di_partenza }}
            </p>
            <p>
                Data partenza: {{ $train->Data_partenza }}
            </p>
            <p>
                Data arrivo: {{ $train->Data_arrivo }}
            </p>
            <p>
                Codice treno: {{ $train->Codice_treno }}
            </p>
            <p>
                Numero carrozza: {{ $train->Numero_carrozza }}
            </p>
            <div>
                <span>
                    In orario?
                </span>
                @if ($train->In_orario == 1)
                    <span>Si</span>
                @else
                    <span>No</span>
                @endif
            </div>
            <br>
            <div>
                <span>
                    Arrivato?
                </span>
                @if ($train->Arrivato == 1 && $train->In_orario == 1)
                    <span>Si</span>
                @else
                    <span>No</span>
                @endif
            </div>
        </li>
    @endforeach
</ul>
