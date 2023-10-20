<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cuit' => 123456789,
            'nombre' => 'Inflables Sole',
           'email' => 'test@example.com',
           'telefono' => 2984906136,
           'password' => 'asd',
        ];
    }
}
