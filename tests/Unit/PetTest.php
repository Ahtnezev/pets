<?php

namespace Tests\Unit;

use App\Models\Pets;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class PetTest extends TestCase
{
    use RefreshDatabase;

    public function test_creates_a_user_named_frodo_successfully()
    {
        // Crear el usuario "Frodo"
        $user = Pets::create([
            'name' => 'Frodo',
            'description' => 'descripcion',
            'type' => 'Dog',
            'birthday' => now()->addDay()
        ]);

        // Verificar que el usuario fue creado exitosamente
        $this->assertDatabaseHas('pets', [
            'name' => 'Frodo'
        ]);
    }
}
