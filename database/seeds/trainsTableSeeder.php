<?php

use App\Train;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainsTableSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $data_partenza = [
            '29/06/2022 15:00:00',
            '28/06/2022 11:00:00',
            '27/06/2022 19:00:00',
            '29/06/2022 10:00:00',
        ];
        $data_arrivo = [
            '29/06/2022 16:00:00',
            '28/06/2022 12:00:00',
            '27/06/2022 20:00:00',
            '29/06/2022 11:00:00',
        ];

        //Inserire i record all'interno della tabella
        for ($i = 0; $i < 9; $i++) {
            $train = new Train();
            $train->Azienda = $faker->name();
            $train->Stazione_di_partenza = $faker->name();
            $train->Data_partenza = $data_partenza[rand(0, count($data_partenza) - 1)];
            $train->Data_arrivo = $data_arrivo[rand(0, count($data_arrivo) - 1)];
            $train->Codice_treno = rand(1000, 9999);
            $train->Numero_carrozza = rand(1, 9);
            $train->In_orario = rand(true, false);
            $train->Arrivato = rand(true, false);

            // Per salvare i dati nel database
            $train->save();
        }

    }
}
