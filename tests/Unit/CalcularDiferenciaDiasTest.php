<?php

namespace Tests\Unit;

use App\Models\Pets;
use Carbon\Carbon;
use PHPUnit\Framework\TestCase;

class CalcularDiferenciaDiasTest extends TestCase
{
    public function test_calculates_the_number_of_days_old()
    {
        // Crear una instancia de Pets
        $pet = new Pets();

        // Fecha de prueba (10 días atrás)
        $testDate = Carbon::now()->subDays(10)->toDateString();

        // Llamar al método y obtener la diferencia
        $daysOld = $pet->numberOfDaysOld($testDate);

        // Verificar que el método calcula correctamente 10 días
        $this->assertEquals(10, $daysOld);
    }
}
