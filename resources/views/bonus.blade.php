<h1>Treni in partenza nella data odierna:</h1>

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
        </li>
    @endforeach
</ul>
