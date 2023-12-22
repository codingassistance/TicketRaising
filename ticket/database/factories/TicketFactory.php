<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Ticket; // Make sure to import your Ticket model
use Faker\Generator as Faker;

class TicketFactory extends Factory
{
    protected $model = Ticket::class;

    public function definition()
    {
        return [
            'summary' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'status' => $this->faker->word,
        ];
    }
}
