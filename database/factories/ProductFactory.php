<?php

namespace Database\Factories;

use App\Models\Status;
use App\Models\status;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'shop' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'address' => $this->faker->address,
            'name' => $this->faker->name,
            'status_id' => status::all()->random()->id,
        ];
    }
}
