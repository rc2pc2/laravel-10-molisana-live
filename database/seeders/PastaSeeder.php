<?php

namespace Database\Seeders;

use App\Models\Pasta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PastaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pastas = config('db.pasta');

        foreach ($pastas as $pasta) {
            $newPasta = new Pasta();
            $newPasta->src = $pasta['src'];
            $newPasta->titolo = $pasta['titolo'];
            $newPasta->tipo = $pasta['tipo'];
            $newPasta->cottura = $pasta['cottura'];
            $newPasta->peso = $pasta['peso'];
            $newPasta->descrizione = $pasta['descrizione'];
            $newPasta->save();
        }

    }
}
