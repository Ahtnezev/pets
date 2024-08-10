<?php

namespace Tests\Unit;

use App\Models\Pets;
use Carbon\Carbon;
use Tests\TestCase;

class CalcularDiferenciaDiasTest extends TestCase
{
    public function test_calculates_the_number_of_days_old()
    {
         // Configuramos la fecha que quieremos probar
         $fechaTest = now()->subDays(20);
         $diferenciaDias = Carbon::now()->diffInDays(Carbon::parse($fechaTest));

         // Crea una instancia de Pets
         $pets = new Pets();
         $actualDays = $pets->numberOfDaysOld($fechaTest);

         // Verifica que el resultado sea el esperado
         $this->assertEquals($diferenciaDias, $actualDays);
    }
}
