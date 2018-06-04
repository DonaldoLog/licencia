<?php

use Illuminate\Database\Seeder;
use App\Models\Folio;

class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $folio=new Folio();
        $folio->folio=856546200;
        $folio->save();

        $referencia=new Folio();
        $referencia->folio=956546200;
        $referencia->save();

        $numLicencia=new Folio();
        $numLicencia->folio=998182718;
        $numLicencia->save();
    }
}
